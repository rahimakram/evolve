<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\ActivityCategory;
use App\Models\Admin\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {

        $locations = Location::orderBy('name', 'asc')
            ->paginate(10);

        foreach ($locations as $activity) {
            if (!empty($activity->activites)) {
                $activityIds = explode(',', $activity->activites);

                $activityNames = ActivityCategory::whereIn('id', $activityIds)
                    ->pluck('activity_name');

                $activity->activity_names = $activityNames;
            }
        }

        return view('admin.location.index', compact('locations'));
    }

    public function add()
    {
        $activities = ActivityCategory::where('status', 'Y')->get();
        return view('admin.location.add', compact('activities'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'location_name' => 'required',
            'image' => 'mimes:jpeg,jpg,png,webp|max:1024',
            'logo' => 'mimes:jpeg,jpg,png,webp|max:1024',
            'activities' => 'required',
            'description' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ], [
            'image.max' => 'The image may not be greater than 1MB.',
            'logo.max' => 'The logo may not be greater than 1MB.',
        ]);

        $imagePath = "";
        $logoPath = "";

        $user = new Location();
        $user->name = $request->location_name;
        $user->address = $request->address;
        $user->activites = implode(',', $request->activities);
        $user->description = $request->description;
        $user->video_link = $request->video_link ? $request->video_link : null;
        $user->latitude = $request->latitude ? $request->latitude : null;
        $user->longitude = $request->longitude ? $request->longitude : null;
        $user->status = 'Y';

        $user->save();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            // $imagePath = $image->storeAs('uploads/trainer/' . $user->id . '/', $imageName, 'public');
            $imagePath = $image->storeAs('uploads/location/' . $user->id, $imageName, 'public');
            $user->image = $imagePath;
            $user->save();
        }

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = $logo->getClientOriginalName();
            // $logoPath = $logo->storeAs('uploads/trainer/' . $user->id . '/', $logoName, 'public');
            $logoPath = $logo->storeAs('uploads/location/' . $user->id, $logoName, 'public');
            $user->logo = $logoPath;
            $user->save();
        }
        return redirect()->route('admin.location.index')->with('success', 'Location saved successfully.');
    }

    public function edit($id)
    {
        $activities = ActivityCategory::where('status', 'Y')->get();
        $location = Location::where('id', $id)
            ->first();
        // dd($location->activites);
        $selectedactivities = explode(',', $location->activites);

        return view('admin.location.edit', compact('location', 'activities', 'selectedactivities'));

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'location_name' => 'required',
            'image' => 'mimes:jpeg,jpg,png,webp|max:1024',
            'logo' => 'mimes:jpeg,jpg,png,webp|max:1024',
            'activities' => 'required',
            'description' => 'required',
            'address' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ], [
            'image.max' => 'The image may not be greater than 1MB.',
            'logo.max' => 'The logo may not be greater than 1MB.',
        ]);

        $imagePath = '';
        $logoPath = '';

        $user = Location::find($id);
        $user->name = $request->location_name;
        $user->address = $request->address;
        $user->activites = implode(',', $request->activities);
        $user->description = $request->description;
        $user->video_link = $request->video_link ? $request->video_link : null;
        // $user->map_link = $request->map_link ? $request->map_link : null;
        $user->latitude = $request->latitude ? $request->latitude : null;
        $user->longitude = $request->longitude ? $request->longitude : null;
        $user->status = 'Y';

        if ($request->hasFile('image')) {
            if ($user->image && \Storage::disk('public')->exists($user->image)) {
                \Storage::disk('public')->delete($user->image);
            }
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $imagePath = $image->storeAs('uploads/location/' . $id, $imageName, 'public');
            $user->image = $imagePath;
        }

        if ($request->hasFile('logo')) {
            if ($user->logo && \Storage::disk('public')->exists($user->logo)) {
                \Storage::disk('public')->delete($user->logo);
            }
            $logo = $request->file('logo');
            $logoName = $logo->getClientOriginalName();
            $logoPath = $logo->storeAs('uploads/location/' . $id, $logoName, 'public');
            $user->logo = $logoPath;
        }

        $user_is_updated = $user->update();
        return redirect()->route('admin.location.index')->with('success', 'Location updated successfully.');
    }

    public function delete($id)
    {
        $trainer = Location::find($id);
        $is_trainer_updated = $trainer->delete();

        if ($is_trainer_updated) {
            return redirect()->route('admin.location.index')->with('success', 'Location deleted successfully');
        }
    }

    public function activate($id)
    {
        $user = Location::find($id);
        $user->status = 'Y';
        $is_user_updated = $user->update();

        if ($is_user_updated) {
            return redirect()->route('admin.location.index')->with('success', 'Status is Active');
        }
    }

    public function deactivate($id)
    {
        $user = Location::find($id);
        $user->status = 'N';
        $is_user_updated = $user->update();

        if ($is_user_updated) {
            return redirect()->route('admin.location.index')->with('success', 'Status is Deactive');
        }
    }
}
