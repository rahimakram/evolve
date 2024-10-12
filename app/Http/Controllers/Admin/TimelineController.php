<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\ActivityCategory;
use App\Models\Admin\Location;
use App\Models\Admin\Timeline;
use App\Models\User;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class TimelineController extends Controller
{
    public function index()
    {
        // dd("checking");

        $timelines = Timeline::join('locations', 'timelines.location_id', '=', 'locations.id')  // Joining with locations table
            ->join('users', 'timelines.instructor_id', '=', 'users.id')        // Joining with users table
            ->select(
                'timelines.*',            // Get all columns from timelines
                'locations.name as location_name',  // Assuming locations table has a 'name' column
                'users.name as instructor_name'     // Assuming users table has a 'name' column
            )
            ->where('users.role', 'instructor')     // Filtering by instructor role
            ->orderBy('timelines.title', 'asc')
            ->paginate();

        foreach ($timelines as $timeline) {
            // Get activity IDs from comma-separated string
            $activityIds = explode(',', $timeline->activity_ids);

            // Fetch activity names from the activities table
            $activityNames = DB::table('activity_categories')
                ->whereIn('id', $activityIds)
                ->pluck('activity_name'); // Assuming 'activity_name' is the column for activity name

            // Attach the activity names to the timeline object
            $timeline->activity_names = $activityNames;
        }

        // dd($timelines);
        return view('admin.timeline.index', compact('timelines'));
    }

    public function add()
    {
        $locations = Location::where('status', 'Y')->get();
        $instructors = User::where('status', 'Y')->where('role', 'instructor')->get();
        // $specializations = SpecializationCategory::where('status', 'Y')->get();
        return view('admin.timeline.add', compact('locations', 'instructors'));
    }

    public function getLocationActivities(Request $request)
    {
        $locationId = $request->location_id;

        // Fetch the location by ID
        $location = Location::find($locationId);

        // Assuming the activities are stored as a comma-separated string in the 'activities' column
        $activityIds = explode(',', $location->activites);
        // dd($activityIds);

        // Fetch activities based on the comma-separated IDs
        $activities = ActivityCategory::whereIn('id', $activityIds)->where('status', 'Y')->get(['id', 'activity_name']);

        // Return the activities as a JSON response
        return response()->json([
            'status' => 'success',
            'activities' => $activities
        ]);
    }


    public function create(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'location' => 'required',
            'instructor' => 'required',
            'activities' => 'required',
            'image' => 'required | mimes:jpeg,jpg,png,webp',
            'description' => 'required',
            'date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);
        $imagePath = "";

        $timeline = new Timeline();
        $timeline->title = $request->title;
        $timeline->description = $request->description;
        $timeline->location_id = $request->location;
        $timeline->activity_ids = implode(',', $request->activities);
        $timeline->instructor_id = $request->instructor;
        $timeline->date = Carbon::createFromFormat('Y-m-d', $request->date);
        $start_time = Carbon::parse($request->start_time)->format('H:i:s');
        $end_time = Carbon::parse($request->end_time)->format('H:i:s');
        $timeline->start_time = $start_time;
        $timeline->end_time = $end_time;
        $timeline->status = 'Y';

        $timeline->save();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            // $imagePath = $image->storeAs('uploads/trainer/' . $user->id . '/', $imageName, 'public');
            $imagePath = $image->storeAs('uploads/timeline/' . $timeline->id, $imageName, 'public');
        }

        $timeline->image = $imagePath;
        $timeline_is_save = $timeline->save();

        return redirect()->route('admin.timeline.index')->with('success', 'Timeline saved successfully.');
    }

    public function edit($id)
    {
        $timeline = Timeline::join('locations', 'timelines.location_id', '=', 'locations.id')  // Joining with locations table
            ->join('users', 'timelines.instructor_id', '=', 'users.id')        // Joining with users table
            ->select(
                'timelines.*',            // Get all columns from timelines
                'locations.name as location_name',  // Assuming locations table has a 'name' column
                'users.name as instructor_name'     // Assuming users table has a 'name' column
            )
            ->where('users.role', 'instructor')     // Filtering by instructor role
            ->where('timelines.id', $id)
            ->orderBy('timelines.title', 'asc')
            ->first();
        $selectedLocation = Location::where('id', $timeline->location_id)->first();
        // dd($selectedLocation->activites);

        $locations = Location::where('status', 'Y')->get();
        $instructors = User::where('status', 'Y')->where('role', 'instructor')->get();
        // $specializations = SpecializationCategory::where('status', 'Y')->get();
        $activityIds = explode(',', $selectedLocation->activites);

        $activities = ActivityCategory::whereIn('id', $activityIds)->get(['id', 'activity_name']);
        // dd($activities);

        return view('admin.timeline.edit', compact('timeline', 'activities', 'locations', 'instructors'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'location' => 'required',
            'instructor' => 'required',
            'activities' => 'required',
            // 'image' => 'required | mimes:jpeg,jpg,png,webp',
            'description' => 'required',
            'date' => 'required',
            'time' => 'required',
        ]);

        $imagePath = "";

        $timeline = Timeline::find($id);
        $timeline->title = $request->title;
        $timeline->description = $request->description;
        $timeline->location_id = $request->location;
        $timeline->activity_ids = implode(',', $request->activities);
        $timeline->instructor_id = $request->instructor;
        $timeline->date = Carbon::createFromFormat('Y-m-d', $request->date);
        $start_time = Carbon::parse($request->start_time)->format('H:i:s'); // Display in HH:MM:SS format
        $end_time = Carbon::parse($request->end_time)->format('H:i:s'); // Display in HH:MM:SS format
        $timeline->start_time = $start_time;
        $timeline->end_time = $end_time;
        $timeline->status = 'Y';

        $timeline->update();

        if ($request->hasFile('image')) {
            if ($timeline->image && \Storage::disk('public')->exists($timeline->image)) {
                \Storage::disk('public')->delete($timeline->image);
            }
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            // $imagePath = $image->storeAs('uploads/trainer/' . $user->id . '/', $imageName, 'public');
            $imagePath = $image->storeAs('uploads/timeline/' . $id, $imageName, 'public');
            $timeline->image = $imagePath;
            $timeline_is_save = $timeline->save();
        }

        return redirect()->route('admin.timeline.index')->with('success', 'Timeline updated successfully.');

    }

    public function delete($id)
    {
        $timeline = Timeline::find($id);
        $is_timeline_updated = $timeline->delete();

        if ($is_timeline_updated) {
            return redirect()->route('admin.timeline.index')->with('success', 'Timeline deleted successfully');
        }
    }

    public function activate($id)
    {
        $timeline = Timeline::find($id);
        $timeline->status = 'Y';
        $is_timeline_updated = $timeline->update();

        if ($is_timeline_updated) {
            return redirect()->route('admin.timeline.index')->with('success', 'Timeline activated successfully');
        }
    }

    public function deactivate($id)
    {
        $timeline = Timeline::find($id);
        $timeline->status = 'N';
        $is_timeline_updated = $timeline->update();

        if ($is_timeline_updated) {
            return redirect()->route('admin.timeline.index')->with('success', 'Timeline deactivated successfully');
        }
    }
}
