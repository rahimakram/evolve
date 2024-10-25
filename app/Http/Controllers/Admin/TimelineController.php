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
        // $today = Carbon::now();
        // // $today = Carbon::create(2024, 10, 28);
        // // dd($today);
        // $currentMonth = $today->month; // Current month
        // $remainingDays = [];

        // // Loop through the remaining days in the week from today
        // for ($i = 1; $i < 7; $i++) {
        //     $date = $today->copy()->addDays($i); // Create a new date for each subsequent day

        //     // If the date is still within the current month
        //     if ($date->month == $currentMonth) {
        //         $remainingDays[] = $date->format('l'); // Add the day name to the array (Monday, Tuesday, etc.)
        //     } else {
        //         break; // Stop if the date goes into the next month
        //     }
        // }

        $today = Carbon::now();
        // $today = Carbon::create(2024, 10, 28); // Static date: October 28, 2024
        $currentMonth = $today->month; // Current month
        $remainingDays = [];
        $todayDayName = $today->format('l'); // Get today's day name (e.g., "Monday")

        $dayAlreadySkipped = false; // Flag to check if we've already skipped today's day

        // Loop through the next 6 days
        for ($i = 0; $i <= 7; $i++) {
            $date = $today->copy()->addDays($i); // Create a new date for each subsequent day

            if ($date->month == $currentMonth) {
                $dayName = $date->format('l');

                // If it's today's day name and we haven't skipped it yet, skip it
                if ($dayName == $todayDayName && !$dayAlreadySkipped) {
                    $dayAlreadySkipped = true; // Mark that we've skipped today's day once
                    continue; // Skip this iteration (today's day)
                }

                // Add the day name to the array (Monday, Tuesday, etc.)
                $remainingDays[] = $dayName;
            } else {
                break; // Stop if the date goes into the next month
            }
        }

        // dd($remainingDays);
        return view('admin.timeline.add', compact('locations', 'instructors', 'remainingDays'));
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


    // public function create(Request $request)
    // {
    //     $this->validate($request, [
    //         'title' => 'required',
    //         'location' => 'required',
    //         'instructor' => 'required',
    //         'activities' => 'required',
    //         'image' => 'required | mimes:jpeg,jpg,png,webp',
    //         'description' => 'required',
    //         // 'date' => 'required',
    //         'days' => 'required|array',
    //         'start_time' => 'required',
    //         'end_time' => 'required',
    //     ]);

    //     $imagePath = "";

    //     $date = Carbon::createFromFormat('Y-m-d', $request->date);
    //     $start_time = Carbon::parse($request->start_time)->format('H:i:s');
    //     $end_time = Carbon::parse($request->end_time)->format('H:i:s');
    //     $location_id = (int) $request->location;

    //     $existingTimeline = Timeline::where('location_id', $location_id)
    //         ->where('date', $date->format('Y-m-d'))
    //         ->where(function ($query) use ($start_time, $end_time) {
    //             $query->whereBetween('start_time', [$start_time, $end_time])
    //                 ->orWhereBetween('end_time', [$start_time, $end_time])
    //                 ->orWhere(function ($query) use ($start_time, $end_time) {
    //                     $query->where('start_time', '<=', $start_time)
    //                         ->where('end_time', '>=', $end_time);
    //                 });
    //         })
    //         ->first();

    //     if ($existingTimeline) {
    //         return redirect()->back()->with('error', 'The selected time is not available at this location on the chosen date.');
    //     }

    //     $timeline = new Timeline();
    //     $timeline->title = $request->title;
    //     $timeline->description = $request->description;
    //     $timeline->location_id = $location_id;
    //     $timeline->activity_ids = implode(',', $request->activities);
    //     $timeline->instructor_id = $request->instructor;
    //     $timeline->date = $date;
    //     $timeline->start_time = $start_time;
    //     $timeline->end_time = $end_time;
    //     $timeline->status = 'Y';
    //     $timeline->save();
    //     if ($request->hasFile('image')) {
    //         $image = $request->file('image');
    //         $imageName = $image->getClientOriginalName();
    //         $imagePath = $image->storeAs('uploads/timeline/' . $timeline->id, $imageName, 'public');
    //     }
    //     $timeline->image = $imagePath;
    //     $timeline_is_save = $timeline->save();
    //     return redirect()->route('admin.timeline.index')->with('success', 'Timeline saved successfully.');
    // }

    public function create(Request $request)
    {
        // Validate the request
        $this->validate($request, [
            'title' => 'required',
            'location' => 'required',
            'instructor' => 'required',
            // 'activities' => 'required|array',
            'activities' => 'required',
            'description' => 'required',
            'days' => 'required|array',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
            'monthly_pass_price' => 'required|numeric|min:0',
            'single_pass_price' => 'required|numeric|min:0',
        ]);

        $start_time = Carbon::parse($request->start_time)->format('H:i:s');
        $end_time = Carbon::parse($request->end_time)->format('H:i:s');
        $location_id = (int) $request->location;
        // $activity_ids = implode(',', $request->activities);
        $activity_ids = $request->activities;

        // Initialize image path variable
        $imagePath = "";
        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;

        // Loop through each selected day and find the next upcoming date in the current month
        foreach ($request->days as $selectedDay) {
            // dd($selectedDay);
            $nextDate = Carbon::now()->next($selectedDay);

            // Ensure the next date is within the current month
            if ($nextDate->month != Carbon::now()->month) {
                continue; // Skip if the next date goes into the next month
            }

            $existingTimeline = Timeline::where('location_id', $location_id)
                ->where('date', $nextDate->format('Y-m-d'))
                ->where('day', $selectedDay)
                ->whereMonth('date', '=', $currentMonth)
                ->whereYear('date', '=', $currentYear)
                // ->where(function ($query) use ($start_time, $end_time) {
                //     $query->whereBetween('start_time', [$start_time, $end_time])
                //         ->orWhereBetween('end_time', [$start_time, $end_time])
                //         ->orWhere(function ($query) use ($start_time, $end_time) {
                //             $query->where('start_time', '<=', $start_time)
                //                 ->where('end_time', '>=', $end_time);
                //         });
                // })
                ->where(function ($query) use ($start_time, $end_time) {
                    $query->where('start_time', '<=', $start_time)
                        ->where('end_time', '>=', $end_time);
                })
                ->first();

            // If a conflict is found, skip this date
            if ($existingTimeline) {
                // continue; // Move on to the next date
                return redirect()->back()->with('error', 'The selected time is not available at this location on the chosen day.');

            }

            $timeline = new Timeline();
            $timeline->title = $request->title;
            $timeline->description = $request->description;
            $timeline->location_id = $location_id;
            $timeline->activity_ids = $activity_ids;
            $timeline->instructor_id = $request->instructor;
            $timeline->day = Carbon::parse($nextDate)->format('l');
            $timeline->date = $nextDate->format('Y-m-d');
            $timeline->start_time = $start_time;
            $timeline->end_time = $end_time;
            $timeline->monthly_pass_price = $request->monthly_pass_price;
            $timeline->single_pass_price = $request->single_pass_price;
            $timeline->status = 'Y';
            $timeline->image = $imagePath;
            $timeline->save();

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = $image->getClientOriginalName();
                $imagePath = $image->storeAs('uploads/timeline/' . $timeline->id, $imageName, 'public');
            }
            $timeline->image = $imagePath;
            $timeline_is_save = $timeline->save();
        }

        return redirect()->route('admin.timeline.index')->with('success', 'Timetable(s) saved successfully.');
    }

    public function edit($id)
    {
        $timeline = Timeline::join('locations', 'timelines.location_id', '=', 'locations.id')
            ->join('users', 'timelines.instructor_id', '=', 'users.id')
            ->select(
                'timelines.*',
                'locations.name as location_name',
                'users.name as instructor_name'
            )
            ->where('users.role', 'instructor')
            ->where('timelines.id', $id)
            ->orderBy('timelines.title', 'asc')
            ->first();

        // dd($timeline);
        $selectedLocation = Location::where('id', $timeline->location_id)->first();
        $locations = Location::where('status', 'Y')->get();
        $instructors = User::where('status', 'Y')->where('role', 'instructor')->get();
        $activityIds = explode(',', $selectedLocation->activites);
        $activities = ActivityCategory::whereIn('id', $activityIds)->get(['id', 'activity_name']);

        $today = Carbon::now();
        // $today = Carbon::create(2024, 10, 28); // Static date: October 28, 2024
        $currentMonth = $today->month; // Current month
        $remainingDays = [];
        $todayDayName = $today->format('l'); // Get today's day name (e.g., "Monday")

        $dayAlreadySkipped = false; // Flag to check if we've already skipped today's day

        // Loop through the next 6 days
        for ($i = 0; $i <= 7; $i++) {
            $date = $today->copy()->addDays($i); // Create a new date for each subsequent day

            if ($date->month == $currentMonth) {
                $dayName = $date->format('l');

                // If it's today's day name and we haven't skipped it yet, skip it
                if ($dayName == $todayDayName && !$dayAlreadySkipped) {
                    $dayAlreadySkipped = true; // Mark that we've skipped today's day once
                    continue; // Skip this iteration (today's day)
                }

                // Add the day name to the array (Monday, Tuesday, etc.)
                $remainingDays[] = $dayName;
            } else {
                break; // Stop if the date goes into the next month
            }
        }
        return view('admin.timeline.edit', compact('timeline', 'activities', 'locations', 'instructors', 'remainingDays'));
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
            // 'date' => 'required',
            // 'time' => 'required',
            'day' => 'required',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
            'monthly_pass_price' => 'required|numeric|min:0',
            'single_pass_price' => 'required|numeric|min:0',
        ]);

        $imagePath = "";
        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;
        $today = Carbon::today();
        $currentTime = Carbon::now()->toTimeString(); // Get the current time (H:i:s)
        $currentMonthName = Carbon::now()->format('F');

        $start_time = Carbon::parse($request->start_time)->format('H:i:s');
        $end_time = Carbon::parse($request->end_time)->format('H:i:s');
        $location_id = (int) $request->location;
        // $activity_ids = implode(',', $request->activities);

        $activity_ids = $request->activities;

        $selectedDay = $request->day;
        // Find the next upcoming date for the selected day
        $nextDate = Carbon::now()->next($selectedDay);
        // dd($nextDate->format('Y-m-d'));
        // Ensure the next date is within the current month
        if ($nextDate->month != Carbon::now()->month) {
            return redirect()->back()->with('error', 'The selected day does not fall within the current month.');
        }
        // Check if the time slot is available for the selected day
        $existingTimeline = Timeline::where('location_id', $location_id)
            // ->where('date', $nextDate->format('Y-m-d'))
            ->where('day', $selectedDay)
            ->whereMonth('date', '=', $currentMonth)
            ->whereYear('date', '=', $currentYear)
            ->where('id', '!=', $id)  // Exclude current timeline for update
            // ->where(function ($query) use ($start_time, $end_time) {
            //     $query->whereBetween('start_time', [$start_time, $end_time])
            //         ->orWhereBetween('end_time', [$start_time, $end_time])
            //         ->orWhere(function ($query) use ($start_time, $end_time) {
            //             $query->where('start_time', '<=', $start_time)
            //                 ->where('end_time', '>=', $end_time);
            //         });
            // })
            ->where(function ($query) use ($start_time, $end_time) {
                $query->where('start_time', '<=', $start_time)
                    ->where('end_time', '>=', $end_time);
            })
            ->first();

        // If a conflict is found, return an error
        if ($existingTimeline) {
            return redirect()->back()->with('error', 'The selected time is not available at this location on the chosen date.');
        }

        $timeline = Timeline::find($id);
        $timeline->title = $request->title;
        $timeline->description = $request->description;
        $timeline->location_id = $location_id;
        $timeline->activity_ids = $activity_ids;
        $timeline->instructor_id = $request->instructor;
        $timeline->day = $selectedDay;  // Update selected day
        // $timeline->date = Carbon::createFromFormat('Y-m-d', $request->date);
        $timeline->date = $nextDate->format('Y-m-d');
        // $start_time = Carbon::parse($request->start_time)->format('H:i:s');
        // $end_time = Carbon::parse($request->end_time)->format('H:i:s');
        $timeline->start_time = $start_time;
        $timeline->end_time = $end_time;
        $timeline->monthly_pass_price = $request->monthly_pass_price;
        $timeline->single_pass_price = $request->single_pass_price;
        $timeline->status = 'Y';

        $timeline->update();

        if ($request->hasFile('image')) {
            if ($timeline->image && \Storage::disk('public')->exists($timeline->image)) {
                \Storage::disk('public')->delete($timeline->image);
            }
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $imagePath = $image->storeAs('uploads/timeline/' . $id, $imageName, 'public');
            $timeline->image = $imagePath;
            $timeline_is_save = $timeline->save();
        }
        return redirect()->route('admin.timeline.index')->with('success', 'Timetable updated successfully.');
    }

    public function delete($id)
    {
        $timeline = Timeline::find($id);
        $is_timeline_updated = $timeline->delete();

        if ($is_timeline_updated) {
            return redirect()->route('admin.timeline.index')->with('success', 'Timetable deleted successfully');
        }
    }

    public function activate($id)
    {
        $timeline = Timeline::find($id);
        $timeline->status = 'Y';
        $is_timeline_updated = $timeline->update();

        if ($is_timeline_updated) {
            return redirect()->route('admin.timeline.index')->with('success', 'Status is Active');
        }
    }

    public function deactivate($id)
    {
        $timeline = Timeline::find($id);
        $timeline->status = 'N';
        $is_timeline_updated = $timeline->update();

        if ($is_timeline_updated) {
            return redirect()->route('admin.timeline.index')->with('success', 'Status is Deactive');
        }
    }
}
