<?php

namespace App\Http\Controllers;

use App\Models\Admin\SpecializationCategory;
use App\Models\User;
use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    public function our_team()
    {

        $trainers = User::leftJoin('user_details', 'users.id', '=', 'user_details.user_id')
            ->select(
                'users.id as u_id',
                'users.*',
                'user_details.id as u_d_id',
                'user_details.*',
            )->where('users.role', '!=', 'admin')
            ->orderBy('users.name', 'asc')
            ->get();

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

        $specializations = SpecializationCategory::where('status', 'Y')->orderBy('specialization_name', 'asc')->get(['id', 'specialization_name']);

        // dd($specializations);

        return view('user.our-team', compact('trainers', 'specializations'));
    }
}
