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
            'image' => 'required | mimes:jpeg,jpg,png,webp|max:1024',
        ], [
            'image.max' => 'The image may not be greater than 1MB.', // Custom message for max size
        ]);

        $activity = new ActivityCategory();
        $activity->activity_name = $request->activity_name;
        $activity->status = 'Y';

        $activity_is_save = $activity->save();
        if ($activity_is_save) {
            // Handle the file upload
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = $image->getClientOriginalName();
                $imagePath = $image->storeAs('uploads/activity_category/' . $activity->id . '/', $imageName, 'public');
                $existingCategory = ActivityCategory::find($activity->id);
                $existingCategory->image = $imagePath;
                $existingCategory->update();
            }
            return redirect()->route('admin.activity.index')->with('success', 'Activity saved successfully.');
        }
    }

    public function edit($id)
    {
        $activity = ActivityCategory::find($id);
        return view('admin.activity.edit', compact('activity'));

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'activity_name' => 'required|string',
            'image' => 'mimes:jpeg,jpg,png,webp|max:1024',
        ], [
            'image.max' => 'The image may not be greater than 1MB.', // Custom message for max size
        ]);

        $activity = ActivityCategory::find($id);
        $activity->activity_name = $request->activity_name;

        $activity_is_updated = $activity->update();

        if ($activity_is_updated) {
            // Handle the file upload
            if ($request->hasFile('image')) {
                // Delete the old image if it exists
                if ($activity->image && \Storage::disk('public')->exists($activity->image)) {
                    \Storage::disk('public')->delete($activity->image);
                }
                $image = $request->file('image');
                $imageName = $image->getClientOriginalName();
                $imagePath = $image->storeAs('uploads/activity_category/' . $id . '/', $imageName, 'public');
                $existingCategory = ActivityCategory::find($id);
                $existingCategory->image = $imagePath;
                $existingCategory->update();
            }
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
            return redirect()->route('admin.activity.index')->with('success', 'Status is Active');
        }
    }

    public function deactivate($id)
    {
        $activity = ActivityCategory::find($id);
        $activity->status = 'N';
        $is_activity_updated = $activity->update();

        if ($is_activity_updated) {
            return redirect()->route('admin.activity.index')->with('success', 'Status is Deactive');
        }
    }
}
