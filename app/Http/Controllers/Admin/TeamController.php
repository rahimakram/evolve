<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\Trainer;
use App\Models\Admin\TrainerDetail;

class TeamController extends Controller
{
    public function index(){

    $trainers = DB::table('trainer')
    ->leftJoin('trainer_detail', 'trainer.id', '=', 'trainer_detail.trainer')
    ->leftJoin('trainer_profile', 'trainer.id', '=', 'trainer_profile.trainer')
    ->select(
        'trainer.id as trainer_id',  
        'trainer.*',  
        'trainer_detail.id as detail_id',  
        'trainer_detail.*',  
        'trainer_profile.id as profile_id',  
        'trainer_profile.*'  
    )
    ->where('trainer.is_deleted','0')
    ->orderBy('trainer.full_name', 'asc')
    ->paginate(10);

    // dd($trainers);
    return view('admin.team.index',compact('trainers'));
    }

    public function add(){
        return view('admin.team.add');
    }

    public function create(Request $request){
        $this->validate($request,[
            'trainer_name'=>'required',
            'trainer_contact'=>'required',
            'trainer_email'=>'required|email|unique:trainer,email',
            'specialisation'=>'required',
            'image'=>'required | mimes:jpeg,jpg,png,webp',
            'description'=>'required',
            'special_focus_area'=>'required',
            'experience'=>'required',
            'certification'=>'required',
            'classes'=>'required',
            'education'=>'required',
            'languages'=>'required',
        ]);

        $trainer = new Trainer();
        $trainer->email = $request->trainer_email;
        $trainer->password = "checking";
        $trainer->remember_token = "checking";
        $trainer->full_name = $request->trainer_name;
        $trainer->phone = $request->trainer_contact;
        $trainer->is_trainer = 1;
        $trainer->status = 'active';
        $trainer->is_deleted = '0';
        // $trainer->deleted_at = '0000-00-00 00:00:00';
        $trainer->deleted_at = now();

        $trainer_is_save = $trainer->save();

        if($trainer_is_save){
            $trainerDetails = new TrainerDetail();
            $trainerDetails->trainer = $trainer->id;
            $trainerDetails->work_title = $request->specialisation;
            $trainerDetails->special_focus_area = $request->special_focus_area;
            $trainerDetails->classes = $request->classes;
            $trainerDetails->certifications = $request->certification;
            $trainerDetails->languages = $request->languages;
            $trainerDetails->experience = $request->experience;
            $trainerDetails->education = $request->education;
            $trainerDetails->photo = "testing";
            $trainerDetails->is_deleted = '0';
            // $trainerDetails->deleted_at = '0000-00-00 00:00:00';
            $trainerDetails->deleted_at = now();
            $trainerDetailsSave = $trainerDetails->save();

            if($trainerDetailsSave) {
                // Handle the file upload
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $imageName = $image->getClientOriginalName();
                    // $imageName = time() . '_' . $image->getClientOriginalName();
                    // dd($imageName);
                    $imagePath = $image->storeAs('uploads/trainer/'.$trainer->id.'/', $imageName, 'public');
                }
                $existingTrainer = TrainerDetail::find($trainerDetails->id);
                $existingTrainer->photo = $imagePath;
                $existingTrainer->update();
            }

            return redirect()->back()->with('success','Trainer saved successfully.');
        }
    }

    public function edit($id){
        $trainer = DB::table('trainer')
        ->leftJoin('trainer_detail', 'trainer.id', '=', 'trainer_detail.trainer')
        ->leftJoin('trainer_profile', 'trainer.id', '=', 'trainer_profile.trainer')
        ->select(
            'trainer.id as trainer_id',  
            'trainer.*',  
            'trainer_detail.id as detail_id',  
            'trainer_detail.*',  
            'trainer_profile.id as profile_id',  
            'trainer_profile.*'  
        )
        ->where('trainer.id',$id)
        ->orderBy('trainer.full_name', 'asc') 
        ->first();

        dd($trainer);
        return view('admin.team.edit',compact('trainer'));

    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'trainer_name'=>'required',
            'trainer_contact'=>'required',
            'trainer_email'=>'required|email|unique:trainer,email',
            // 'specialisation'=>'required',
            'image'=>'mimes:jpeg,jpg,png,webp',
            'description'=>'required',
            'special_focus_area'=>'required',
            'experience'=>'required',
            'certification'=>'required',
            'classes'=>'required',
            'education'=>'required',
            'languages'=>'required',
        ]);

        $trainer = Trainer::find($id);
        $trainer->email = $request->trainer_email;
        // $trainer->password = "checking";
        // $trainer->remember_token = "checking";
        $trainer->full_name = $request->trainer_name;
        $trainer->phone = $request->trainer_contact;
        // $trainer->is_trainer = 1;
        // $trainer->status = 'active';
        // $trainer->is_deleted = '0';
        // $trainer->deleted_at = '0000-00-00 00:00:00';
        // $trainer->deleted_at = now();

        $trainer_is_updated = $trainer->update();

        if($trainer_is_updated){
            $trainerDetails = TrainerDetail::where('trainer',$id)->first();
            // $trainerDetails->trainer = $trainer->id;
            $trainerDetails->work_title = $request->specialisation;
            $trainerDetails->special_focus_area = $request->special_focus_area;
            $trainerDetails->classes = $request->classes;
            $trainerDetails->certifications = $request->certification;
            $trainerDetails->languages = $request->languages;
            $trainerDetails->experience = $request->experience;
            $trainerDetails->education = $request->education;
            // $trainerDetails->photo = "testing";
            // $trainerDetails->is_deleted = '0';
            // $trainerDetails->deleted_at = '0000-00-00 00:00:00';
            // $trainerDetails->deleted_at = now();
            $trainerDetailsUpdated = $trainerDetails->update();

            if($trainerDetailsUpdated) {
                // Handle the file upload
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $imageName = $image->getClientOriginalName();
                    // $imageName = time() . '_' . $image->getClientOriginalName();
                    // dd($imageName);
                    $imagePath = $image->storeAs('uploads/trainer/'.$id.'/', $imageName, 'public');
                    $existingTrainer = TrainerDetail::find($trainerDetails->id);
                    $existingTrainer->photo = $imagePath;
                    $existingTrainer->update();
                }
            }

            return redirect()->route('teams.index')->with('success','Trainer updated successfully.');
        }
    }

    public function delete($id){
        $trainer = Trainer::find($id);
        $trainer->is_deleted = '1';
        $is_trainer_updated = $trainer->update();

        if($is_trainer_updated){
            $trainer_detail = TrainerDetail::where('trainer',$id)->first();
            $trainer_detail->is_deleted = '1';
            $is_trainer_detail_updated = $trainer_detail->update();
        if($is_trainer_detail_updated){
            return redirect()->route('teams.index')->with('success','Trainer deleted successfully');
        }
        }
    }

    public function activate($id){
        $trainer = Trainer::find($id);
        $trainer->status = 'active';
        $is_trainer_updated = $trainer->update();

        if($is_trainer_updated){
            return redirect()->route('teams.index')->with('success','Trainer activated successfully');
        }
    }

    public function deactivate($id){
        $trainer = Trainer::find($id);
        $trainer->status = 'inactive';
        $is_trainer_updated = $trainer->update();

        if($is_trainer_updated){
            return redirect()->route('teams.index')->with('success','Trainer deactivated successfully');
        }
    }
}
