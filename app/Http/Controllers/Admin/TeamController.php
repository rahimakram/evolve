<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\SpecializationCategory;
use App\Models\Admin\UserDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\Trainer;
use App\Models\Admin\TrainerDetail;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class TeamController extends Controller
{
    public function index()
    {

        $trainers = User::leftJoin('user_details', 'users.id', '=', 'user_details.user_id')
            // ->leftJoin('trainer_profile', 'trainer.id', '=', 'trainer_profile.trainer')
            ->select(
                'users.id as u_id',
                'users.*',
                'user_details.id as u_d_id',
                'user_details.*',
                // 'trainer_profile.id as profile_id',
                // 'trainer_profile.*'
            )->where('users.role', '!=', 'admin')
            // ->where('user.is_deleted', '0')
            ->orderBy('users.name', 'asc')
            ->paginate(10);

        // dd($trainers);

        // Process specialization names
        foreach ($trainers as $trainer) {
            if (!empty($trainer->specialization)) {
                // Convert the comma-separated values into an array
                $specializationIds = explode(',', $trainer->specialization);

                // Fetch the specialization names from the database
                $specializationNames = SpecializationCategory::whereIn('id', $specializationIds)
                    ->pluck('specialization_name');

                // Assign the names back to the trainer object
                $trainer->specialization_names = $specializationNames;
            }
        }
        return view('admin.team.index', compact('trainers'));
    }

    public function add()
    {
        $specializations = SpecializationCategory::where('status', 'Y')->get();
        $countries = DB::table('countries')->get();

        // dd($countries);
        return view('admin.team.add', compact('specializations', 'countries'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'trainer_name' => 'required',
            'trainer_contact' => 'required|max:10',
            'trainer_email' => 'required|email|unique:users,email',
            'specialisation' => 'required',
            'password' => 'required|min:8|confirmed', // 'confirmed' ensures that password_confirmation matches
            'image' => 'required | mimes:jpeg,jpg,png,webp|max:1024',
            'description' => 'required',
            'special_focus_area' => 'required',
            'experience' => 'required',
            'certification' => 'required',
            'classes' => 'required',
            'education' => 'required',
            'languages' => 'required',
            'nationality' => 'required'
        ], [
            'image.max' => 'The image may not be greater than 1MB.', // Custom message for max size
        ]);

        // Ensure the date is in the correct format
        // dd("dob", $dob);
        $imagePath = "";

        $user = new User();
        $user->name = $request->trainer_name;
        $user->email = $request->trainer_email;
        $user->email_verified_at = now();
        $user->password = Hash::make($request->password);
        $dob = Carbon::createFromFormat('Y-m-d', $request->dob); // If you're getting date in the format 'YYYY-MM-DD'
        $user->dob = $dob;
        $user->role = 'instructor';
        // $user->remember_token = "checking";
        // $user->avatar = null;
        $user->status = 'Y';

        $user->save();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            // $imagePath = $image->storeAs('uploads/trainer/' . $user->id . '/', $imageName, 'public');
            $imagePath = $image->storeAs('uploads/users/' . $user->id, $imageName, 'public');
        }

        $user->avatar = $imagePath;
        $user->featured_image = $imagePath;
        $user_is_save = $user->save();

        if ($user_is_save) {
            $user_details = new UserDetail();
            $user_details->user_id = $user->id;
            $user_details->contact = $request->trainer_contact;
            $user_details->description = $request->description;
            $user_details->specialization = implode(',', $request->specialisation);
            $user_details->special_focus_area = json_encode(explode('|', $request->special_focus_area));
            $user_details->classes = json_encode(explode('|', $request->classes));
            $user_details->certifications = json_encode(explode('|', $request->certification));
            $user_details->languages = json_encode(explode('|', $request->languages));
            $user_details->experience = json_encode(explode('|', $request->experience));
            $user_details->education = json_encode(explode('|', $request->education));
            $user_details->country_id = $request->nationality;
            $user_details_save = $user_details->save();

            return redirect()->route('admin.teams.index')->with('success', 'Instructor saved successfully.');
        }
    }

    public function edit($id)
    {
        $specializations = SpecializationCategory::where('status', 'Y')->get();
        $countries = DB::table('countries')->get();
        $trainer = User::leftJoin('user_details', 'users.id', '=', 'user_details.user_id')
            // ->leftJoin('trainer_profile', 'trainer.id', '=', 'trainer_profile.trainer')
            ->select(
                'users.id as u_id',
                'users.*',
                'user_details.id as u_d_id',
                'user_details.*',
                // 'trainer_profile.id as profile_id',
                // 'trainer_profile.*'
            )
            ->where('users.id', $id)
            ->orderBy('users.name', 'asc')
            ->first();
        $selectedSpecializations = explode(',', $trainer->specialization);
        // dd($trainer);

        return view('admin.team.edit', compact('trainer', 'specializations', 'selectedSpecializations', 'countries'));

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'trainer_name' => 'required',
            'trainer_contact' => 'required',
            'trainer_email' => 'required|email',
            'image' => 'mimes:jpeg,jpg,png,webp|max:1024',
            'description' => 'required',
            'special_focus_area' => 'required',
            'experience' => 'required',
            'certification' => 'required',
            'classes' => 'required',
            'education' => 'required',
            'languages' => 'required',
            'nationality' => 'required',
        ], [
            'image.max' => 'The image may not be greater than 1MB.', // Custom message for max size
        ]);

        $imagePath = '';

        $user = User::find($id);
        $user->email = $request->trainer_email;
        // $user->password = Hash::make($request->password);
        $user->name = $request->trainer_name;
        // $user->dob = now();
        // $user->role = 'instructor';

        $user_is_updated = $user->update();

        if ($user_is_updated) {

            if ($request->hasFile('image')) {
                if ($user->avatar && \Storage::disk('public')->exists($user->avatar)) {
                    \Storage::disk('public')->delete($user->avatar);
                }
                $image = $request->file('image');
                $imageName = $image->getClientOriginalName();
                $imagePath = $image->storeAs('uploads/users/' . $id, $imageName, 'public');
                // $existingUser = UserDetail::find($user->id);
                // $existingUser->avatar = $imagePath;
                // $existingUser->featured_image = $imagePath;
                // $existingUser->update();
                $user->avatar = $imagePath;
                $user->update();
            }

            $userDetails = UserDetail::where('user_id', $id)->first();
            // $userDetails->trainer = $user->id;
            $userDetails->specialization = implode(',', $request->specialisation);
            $userDetails->special_focus_area = json_encode(explode('|', $request->special_focus_area));
            $userDetails->classes = json_encode(explode('|', $request->classes));
            $userDetails->certifications = json_encode(explode('|', $request->certification));
            $userDetails->languages = json_encode(explode('|', $request->languages));
            $userDetails->experience = json_encode(explode('|', $request->experience));
            $userDetails->education = json_encode(explode('|', $request->education));
            $userDetails->description = $request->description;
            $userDetails->country_id = $request->nationality;
            $userDetailsUpdated = $userDetails->update();

            return redirect()->route('admin.teams.index')->with('success', 'Trainer updated successfully.');
        }
    }

    public function delete($id)
    {
        $trainer = User::find($id);
        $is_trainer_updated = $trainer->delete();

        if ($is_trainer_updated) {
            $trainer_detail = UserDetail::where('user_id', $id)->first();
            $is_trainer_detail_updated = $trainer_detail->delete();
            if ($is_trainer_detail_updated) {
                return redirect()->route('admin.teams.index')->with('success', 'Trainer deleted successfully');
            }
        }
    }

    public function activate($id)
    {
        $user = User::find($id);
        $user->status = 'Y';
        $is_user_updated = $user->update();

        if ($is_user_updated) {
            return redirect()->route('admin.teams.index')->with('success', 'Status is Active');
        }
    }

    public function deactivate($id)
    {
        $user = User::find($id);
        $user->status = 'N';
        $is_user_updated = $user->update();

        if ($is_user_updated) {
            return redirect()->route('admin.teams.index')->with('success', 'Status is Deactive');
        }
    }
}
