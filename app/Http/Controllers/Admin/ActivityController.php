<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\ActivityCategory;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = ActivityCategory::paginate(10);
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

        return view('admin.activity.index', compact('activities'));
    }

    public function add()
    {
        return view('admin.activity.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'activity_name' => 'required|string',
        ]);

        $activity = new ActivityCategory();
        $activity->activity_name = $request->activity_name;
        $activity->status = 'Y';

        $activity_is_save = $activity->save();
        if ($activity_is_save) {
            return redirect()->route('admin.activity.index')->with('success', 'Activity saved successfully.');
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

        $activity = ActivityCategory::find($id);

        // dd($trainer);
        return view('admin.activity.edit', compact('activity'));

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'activity_name' => 'required|string',
        ]);

        $activity = ActivityCategory::find($id);
        $activity->activity_name = $request->activity_name;

        $activity_is_updated = $activity->update();

        if ($activity_is_updated) {
            return redirect()->route('admin.activity.index')->with('success', 'Activity updated successfully.');
        }
    }

    public function delete($id)
    {
        $activity = ActivityCategory::find($id);
        $is_activity_updated = $activity->delete(); // Soft delete the record

        if ($is_activity_updated) {
            return redirect()->route('admin.activity.index')->with('success', 'Activity deleted successfully');
        }
    }

    public function activate($id)
    {
        $activity = ActivityCategory::find($id);
        $activity->status = 'Y';
        $is_activity_updated = $activity->update();

        if ($is_activity_updated) {
            return redirect()->route('admin.activity.index')->with('success', 'Activity activated successfully');
        }
    }

    public function deactivate($id)
    {
        $activity = ActivityCategory::find($id);
        $activity->status = 'N';
        $is_activity_updated = $activity->update();

        if ($is_activity_updated) {
            return redirect()->route('admin.activity.index')->with('success', 'Activity deactivated successfully');
        }
    }
}
