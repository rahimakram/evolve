<?php

namespace App\Http\Controllers;

use App\Models\Admin\Timeline;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class JoinClassController extends Controller
{
    public function join_class()
    {
        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;
        $today = Carbon::today();
        $currentMonthName = Carbon::now()->format('F');
        $timelines = Timeline::join('locations', 'timelines.location_id', '=', 'locations.id')
            ->join('users', 'timelines.instructor_id', '=', 'users.id')
            ->select(
                'timelines.*',
                'locations.name as location_name',
                'locations.map_link as map_link',
                'users.name as instructor_name',
                'users.avatar as instructor_image',
                DB::raw('DAYNAME(timelines.date) as day_name')
            )
            ->where('timelines.status', 'Y')
            ->where('users.role', 'instructor')
            ->whereMonth('timelines.date', '=', $currentMonth)
            ->whereYear('timelines.date', '=', $currentYear)
            ->whereDate('timelines.date', '>=', $today)
            ->orderBy('timelines.title', 'asc')
            ->get();

        // Get the last updated date from these records
        $lastUpdatedDate = $timelines->max('updated_at');
        // dd($lastUpdatedDate);

        $day_names = $timelines->map(function ($timeline) {
            return Carbon::parse($timeline->date)->format('l');
        })->unique()->values()->toArray();

        foreach ($timelines as $timeline) {
            $activityIds = explode(',', $timeline->activity_ids);

            $activityNames = DB::table('activity_categories')
                ->whereIn('id', $activityIds)
                ->pluck('activity_name');

            $timeline->activity_names = $activityNames;
        }

        $grouped_timelines = $timelines->sortBy('date')
            ->groupBy(function ($timeline) {
                return Carbon::parse($timeline->date)->format('l');
            });

        return view('user.join-a-class', compact('currentYear', 'currentMonthName', 'timelines', 'day_names', 'grouped_timelines', 'lastUpdatedDate'));
    }

    public function single_pass_payment($id)
    {
        $timeline = Timeline::join('locations', 'timelines.location_id', '=', 'locations.id')  // Joining with locations table
            ->join('users', 'timelines.instructor_id', '=', 'users.id')        // Joining with users table
            ->select(
                'timelines.*',            // Get all columns from timelines
                'locations.name as location_name',  // Assuming locations table has a 'name' column
                'users.name as instructor_name'     // Assuming users table has a 'name' column
            )
            ->where('users.role', 'instructor')     // Filtering by instructor role
            ->where('timelines.status', 'Y')
            ->where('timelines.id', $id)
            // ->orderBy('timelines.title', 'asc')
            ->first();
        // dd($timeline);
        return view('user.single-pass-payment', compact('timeline'));
    }

    public function monthly_pass_payment($id)
    {
        $timeline = Timeline::join('locations', 'timelines.location_id', '=', 'locations.id')  // Joining with locations table
            ->join('users', 'timelines.instructor_id', '=', 'users.id')        // Joining with users table
            ->select(
                'timelines.*',            // Get all columns from timelines
                'locations.name as location_name',  // Assuming locations table has a 'name' column
                'users.name as instructor_name'     // Assuming users table has a 'name' column
            )
            ->where('users.role', 'instructor')     // Filtering by instructor role
            ->where('timelines.status', 'Y')
            ->where('timelines.id', $id)
            // ->orderBy('timelines.title', 'asc')
            ->first();
        // dd($timeline);
        return view('user.monthly-pass-payment', compact('timeline'));
    }
}
