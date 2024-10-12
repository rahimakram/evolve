<?php

namespace App\Http\Controllers;

use App\Models\Admin\ActivityCategory;
use App\Models\Admin\Location;
use Illuminate\Http\Request;

class OurLocationController extends Controller
{
    public function our_location()
    {

        $locations = Location::orderBy('name', 'asc')
            ->get();

        // Process specialization names
        foreach ($locations as $activity) {
            if (!empty($activity->activites)) {
                // Convert the comma-separated values into an array
                $activityIds = explode(',', $activity->activites);

                // Fetch the specialization names from the database
                $activityNames = ActivityCategory::whereIn('id', $activityIds)
                    ->pluck('activity_name');

                // Assign the names back to the trainer object
                $activity->activity_names = $activityNames;
            }
        }

        $activities = ActivityCategory::where('status', 'Y')->orderBy('activity_name', 'asc')->get(['id', 'activity_name']);

        return view('user.our-locations', compact('locations', 'activities'));
    }
}
