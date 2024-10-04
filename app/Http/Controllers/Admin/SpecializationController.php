<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\SpecializationCategory;
use Illuminate\Http\Request;

class SpecializationController extends Controller
{
    public function index()
    {
        $specializations = SpecializationCategory::paginate(10);
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

        return view('admin.specialization.index', compact('specializations'));
    }

    public function add()
    {
        return view('admin.specialization.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'specialization_name' => 'required|string|unique:specialization_categories,specialization_name',
        ]);

        $specialization = new SpecializationCategory();
        $specialization->specialization_name = $request->specialization_name;
        $specialization->status = 'Y';

        $specialization_is_save = $specialization->save();
        if ($specialization_is_save) {
            return redirect()->route('admin.specialization.index')->with('success', 'Specialization saved successfully.');
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

        $specialization = SpecializationCategory::find($id);

        // dd($trainer);
        return view('admin.specialization.edit', compact('specialization'));

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'specialization_name' => 'required|string',
        ]);

        $specialization = SpecializationCategory::find($id);
        $specialization->specialization_name = $request->specialization_name;

        $specialization_is_updated = $specialization->update();

        if ($specialization_is_updated) {
            return redirect()->route('admin.specialization.index')->with('success', 'Specialization updated successfully.');
        }
    }

    public function delete($id)
    {
        $specialization = SpecializationCategory::find($id);
        $is_specialization_updated = $specialization->delete(); // Soft delete the record

        if ($is_specialization_updated) {
            return redirect()->route('admin.specialization.index')->with('success', 'Specialization deleted successfully');
        }
    }

    public function activate($id)
    {
        $specialization = SpecializationCategory::find($id);
        $specialization->status = 'Y';
        $is_specialization_updated = $specialization->update();

        if ($is_specialization_updated) {
            return redirect()->route('admin.specialization.index')->with('success', 'Specialization activated successfully');
        }
    }

    public function deactivate($id)
    {
        $specialization = SpecializationCategory::find($id);
        $specialization->status = 'N';
        $is_specialization_updated = $specialization->update();

        if ($is_specialization_updated) {
            return redirect()->route('admin.specialization.index')->with('success', 'Specialization deactivated successfully');
        }
    }
}
