<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\ProfessionCategory;
use Illuminate\Http\Request;

class ProfessionController extends Controller
{
    public function index()
    {
        $professions = ProfessionCategory::paginate(10);
        // dd($professions);
        // $trainers = DB::table('trainer')
        //     ->leftJoin('trainer_detail', 'trainer.id', '=', 'trainer_detail.trainer')
        //     ->leftJoin('trainer_profile', 'trainer.id', '=', 'trainer_profile.trainer')
        //     ->select(
        //         'trainer.id as trainer_id',
        //         'trainer.*',
        //         'trainer_detail.id as detail_id',
        //         'trainer_detail.*',
        //         'trainer_profile.id as profile_id',
        //         'trainer_profile.*'
        //     )
        //     ->where('trainer.is_deleted', '0')
        //     ->orderBy('trainer.full_name', 'asc')
        //     ->paginate(10);
        // dd($trainers);

        return view('admin.profession.index', compact('professions'));
    }

    public function add()
    {
        return view('admin.profession.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'profession_name' => 'required|string',
        ]);

        $profession = new ProfessionCategory();
        $profession->profession_name = $request->profession_name;
        $profession->status = 'Y';

        $profession_is_save = $profession->save();
        if ($profession_is_save) {
            return redirect()->route('admin.profession.index')->with('success', 'Profession saved successfully.');
        }
    }

    public function edit($id)
    {
        // $trainer = DB::table('trainer')
        //     ->leftJoin('trainer_detail', 'trainer.id', '=', 'trainer_detail.trainer')
        //     ->leftJoin('trainer_profile', 'trainer.id', '=', 'trainer_profile.trainer')
        //     ->select(
        //         'trainer.id as trainer_id',
        //         'trainer.*',
        //         'trainer_detail.id as detail_id',
        //         'trainer_detail.*',
        //         'trainer_profile.id as profile_id',
        //         'trainer_profile.*'
        //     )
        //     ->where('trainer.id', $id)
        //     ->orderBy('trainer.full_name', 'asc')
        //     ->first();

        $profession = ProfessionCategory::find($id);

        // dd($trainer);
        return view('admin.profession.edit', compact('profession'));

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'profession_name' => 'required|string',
        ]);

        $profession = ProfessionCategory::find($id);
        $profession->profession_name = $request->profession_name;

        $profession_is_updated = $profession->update();

        if ($profession_is_updated) {
            return redirect()->route('admin.profession.index')->with('success', 'Profession updated successfully.');
        }
    }

    public function delete($id)
    {
        $profession = ProfessionCategory::find($id);
        $is_profession_updated = $profession->delete(); // Soft delete the record

        if ($is_profession_updated) {
            return redirect()->route('admin.profession.index')->with('success', 'Profession deleted successfully');
        }
    }

    public function activate($id)
    {
        $profession = ProfessionCategory::find($id);
        $profession->status = 'Y';
        $is_profession_updated = $profession->update();

        if ($is_profession_updated) {
            return redirect()->route('admin.profession.index')->with('success', 'Profession activated successfully');
        }
    }

    public function deactivate($id)
    {
        $profession = ProfessionCategory::find($id);
        $profession->status = 'N';
        $is_profession_updated = $profession->update();

        if ($is_profession_updated) {
            return redirect()->route('admin.profession.index')->with('success', 'Profession deactivated successfully');
        }
    }
}
