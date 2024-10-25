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
        $currentTime = Carbon::now()->toTimeString(); // Get the current time (H:i:s)
        $currentMonthName = Carbon::now()->format('F');
        $timelines = Timeline::join('locations', 'timelines.location_id', '=', 'locations.id')
            ->join('users', 'timelines.instructor_id', '=', 'users.id')
            ->select(
                'timelines.*',
                'locations.name as location_name',
                'locations.latitude as latitude',
                'locations.longitude as longitude',
                'users.name as instructor_name',
                'users.avatar as instructor_image',
                DB::raw('DAYNAME(timelines.date) as day_name')
            )
            ->where('timelines.status', 'Y')
            ->where('users.role', 'instructor')
            ->whereMonth('timelines.date', '=', $currentMonth)
            ->whereYear('timelines.date', '=', $currentYear)
            ->orderBy('timelines.title', 'asc')
            ->get();

        // Get the last updated date from these records
        $lastUpdatedDate = $timelines->max('updated_at');

        $day_names = $timelines->map(function ($timeline) {
            return Carbon::parse($timeline->date)->format('l');
        })->unique()->values()->toArray();

        foreach ($timelines as $timeline) {
            $activityIds = explode(',', $timeline->activity_ids);

            $activityNames = DB::table('activity_categories')
                ->whereIn('id', $activityIds)
                ->pluck('activity_name');

            $timeline->activity_names = $activityNames;

            $futureDates = getFutureDatesForDay($timeline->day_name, $currentMonth, $currentYear);
            $timeline->future_dates = $futureDates;
        }
        // dd($timelines);

        $grouped_timelines = $timelines->sortBy('date')
            ->groupBy(function ($timeline) {
                return Carbon::parse($timeline->date)->format('l');
            });

        // dd($grouped_timelines);

        return view('user.join-a-class', compact('currentYear', 'currentMonthName', 'timelines', 'day_names', 'grouped_timelines', 'lastUpdatedDate'));
    }

    public function single_pass_payment($id)
    {
        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;
        $today = Carbon::today();
        $currentTime = Carbon::now()->toTimeString(); // Get the current time (H:i:s)
        $currentMonthName = Carbon::now()->format('F');
        $timeline = Timeline::join('locations', 'timelines.location_id', '=', 'locations.id')  // Joining with locations table
            ->join('users', 'timelines.instructor_id', '=', 'users.id')        // Joining with users table
            ->select(
                'timelines.*',            // Get all columns from timelines
                'locations.name as location_name',  // Assuming locations table has a 'name' column
                'users.name as instructor_name',     // Assuming users table has a 'name' column
                DB::raw('DAYNAME(timelines.date) as day_name')
            )
            ->where('users.role', 'instructor')     // Filtering by instructor role
            ->where('timelines.status', 'Y')
            ->where('timelines.id', $id)
            // ->orderBy('timelines.title', 'asc')
            ->first();
        // dd($timeline);

        $futureDates = getFutureDatesForDay($timeline->day_name, $currentMonth, $currentYear);
        $timeline->future_dates = $futureDates;
        // dd($futureDates);
        return view('user.single-pass-payment', compact('timeline'));
    }

    public function monthly_pass_payment($id)
    {
        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;
        $today = Carbon::today();
        $currentTime = Carbon::now()->toTimeString(); // Get the current time (H:i:s)
        $currentMonthName = Carbon::now()->format('F');
        $timeline = Timeline::join('locations', 'timelines.location_id', '=', 'locations.id')  // Joining with locations table
            ->join('users', 'timelines.instructor_id', '=', 'users.id')        // Joining with users table
            ->select(
                'timelines.*',            // Get all columns from timelines
                'locations.name as location_name',  // Assuming locations table has a 'name' column
                'users.name as instructor_name',     // Assuming users table has a 'name' column
                DB::raw('DAYNAME(timelines.date) as day_name')
            )
            ->where('users.role', 'instructor')     // Filtering by instructor role
            ->where('timelines.status', 'Y')
            ->where('timelines.id', $id)
            // ->orderBy('timelines.title', 'asc')
            ->first();

        $futureDates = getFutureDatesForDay($timeline->day_name, $currentMonth, $currentYear);
        $timeline->future_dates = $futureDates;
        // dd($timeline);
        return view('user.monthly-pass-payment', compact('timeline'));
    }

    public function single_payment_process($id, Request $request)
    {
        $validatedData = $this->validate($request, [
            'name' => 'required',
            'phone' => 'required|max:10',
            // 'trainer_email' => 'required|email|unique:trainer,email',
            // 'email' => 'required|email|unique:users,email',
            'email' => 'required|email',
            'class_date' => 'required',
            'Attendees' => 'required',
            'totalAmount' => 'required',
            'name_card' => 'required',
            'card_number' => 'required',
            'card_expiry_date' => 'required',
            'cvv' => 'required',
            'read_carefully' => 'accepted',
        ]);

        // Create an array to save to the database
        $saveData = [
            'name' => $validatedData['name'],
            'phone' => $validatedData['phone'],
            'email' => $validatedData['email'],
            'class_date' => $validatedData['class_date'],
            'attendees' => $validatedData['Attendees'],
            'total_amount' => $validatedData['totalAmount'],
            'name_on_card' => $validatedData['name_card'],
            'card_number' => $validatedData['card_number'],
            'card_expiry_date' => $validatedData['card_expiry_date'],
            'cvv' => $validatedData['cvv'],
            'read_carefully' => $validatedData['read_carefully'],
        ];

        dd($saveData);
        // return $id;
    }

    public function monthly_payment_process($id, Request $request)
    {
        $validatedData = $this->validate($request, [
            'name' => 'required',
            'phone' => 'required|max:10',
            // 'trainer_email' => 'required|email|unique:trainer,email',
            // 'email' => 'required|email|unique:users,email',
            'email' => 'required|email',
            'class_date' => 'required',
            'Attendees' => 'required',
            'totalAmount' => 'required',
            'name_card' => 'required',
            'card_number' => 'required',
            'card_expiry_date' => 'required',
            'cvv' => 'required',
            'read_carefully' => 'accepted',
        ]);

        // Create an array to save to the database
        $saveData = [
            'name' => $validatedData['name'],
            'phone' => $validatedData['phone'],
            'email' => $validatedData['email'],
            'class_date' => $validatedData['class_date'],
            'attendees' => $validatedData['Attendees'],
            'total_amount' => $validatedData['totalAmount'],
            'name_on_card' => $validatedData['name_card'],
            'card_number' => $validatedData['card_number'],
            'card_expiry_date' => $validatedData['card_expiry_date'],
            'cvv' => $validatedData['cvv'],
            'read_carefully' => $validatedData['read_carefully'],
        ];

        dd($saveData);
    }
}
