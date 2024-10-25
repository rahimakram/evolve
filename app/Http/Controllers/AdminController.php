<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminIndex(Request $request)
    {
        // echo $request->path();
        // print_r(session()->all());
        // die;
        if ($request->path() == 'login' || $request->path() == 'admin/login') {
            return redirect('admin/dashboard');
        }

        // $viewPage = ( $request->path() == 'admindemo/index' ) ? 'admin/dashboard' : $request->path();
        $viewPage = str_replace('admindemo', 'admin', $request->path());

        if (view()->exists($viewPage)) {
            return view($viewPage);
        }
        return abort(404);
    }

    public function dashboard(Request $request)
    {
        if (view()->exists($request->path())) {
            return view($request->path());
        }
        return abort(404);
    }

    public function admin()
    {
        // echo Auth::user()->name; die;
        if (!empty(Auth::user()->name)) {
            return redirect('admin/dashboard');
        } else {
            return redirect('login');
        }
    }

    /*Language Translation*/
    public function lang($locale)
    {
        if ($locale) {
            App::setLocale($locale);
            Session::put('lang', $locale);
            Session::save();
            return redirect()->back()->with('locale', $locale);
        } else {
            return redirect()->back();
        }
    }

    public function updateProfile(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email'],
            'avatar' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:1024'],
        ]);

        // dd($request->get('name'));

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        // $dob = Carbon::createFromFormat('Y-m-d', $request->dob); // If you're getting date in the format 'YYYY-MM-DD'
        // $user->dob = $dob;

        if ($request->hasFile('avatar')) {
            if ($user->avatar && \Storage::disk('public')->exists($user->avatar)) {
                \Storage::disk('public')->delete($user->avatar);
            }
            $image = $request->file('avatar');
            $imageName = $image->getClientOriginalName();
            $imagePath = $image->storeAs('uploads/users/' . $id, $imageName, 'public');
            $user->avatar = $imagePath;
        }

        // if ($request->file('avatar')) {
        //     $avatar = $request->file('avatar');
        //     $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
        //     $avatarPath = public_path('/images/');
        //     $avatar->move($avatarPath, $avatarName);
        //     $user->avatar = '/images/' . $avatarName;
        // }

        $user->update();
        if ($user) {
            Session::flash('message', 'User Details Updated successfully!');
            Session::flash('alert-class', 'alert-success');
            // return response()->json([
            //     'isSuccess' => true,
            //     'Message' => "User Details Updated successfully!"
            // ], 200);
            return redirect()->back()->with('success', 'Profile Updated successfully!');
        } else {
            Session::flash('message', 'Something went wrong!');
            Session::flash('alert-class', 'alert-danger');
            // return response()->json([
            //     'isSuccess' => true,
            //     'Message' => "Something went wrong!"
            // ], 200);
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function updatePassword(Request $request, $id)
    {
        $request->validate([
            'current_password' => ['required', 'string'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            // return response()->json([
            //     'isSuccess' => false,
            //     'Message' => "Your Current password does not matches with the password you provided. Please try again."
            // ], 200);

            return redirect()->back()->with('error', 'Your Current password does not matches with the password you provided. Please try again.');
        } else {
            $user = User::find($id);
            $user->password = Hash::make($request->get('password'));
            $user->update();
            if ($user) {
                Session::flash('message', 'Password updated successfully!');
                Session::flash('alert-class', 'alert-success');
                // return response()->json([
                //     'isSuccess' => true,
                //     'Message' => "Password updated successfully!"
                // ], 200);
                return redirect()->back()->with('success', 'Password updated successfully!');
            } else {
                Session::flash('message', 'Something went wrong!');
                Session::flash('alert-class', 'alert-danger');
                // return response()->json([
                //     'isSuccess' => true,
                //     'Message' => "Something went wrong!"
                // ], 200);
                return redirect()->back()->with('success', 'Something went wrong!');
            }
        }
    }

    public function delete_img(Request $request)
    {
        $request->validate([
            'imgPath' => 'required',
            'id' => 'required',
            'model' => 'required',
        ]);

        $imgPath = $request->get('imgPath');
        $id = $request->get('id');
        $model = $request->model;
        if ($imgPath) {
            if ($imgPath && \Storage::disk('public')->exists($imgPath)) {
                \Storage::disk('public')->delete($imgPath);
            }
            if ($model == 'User') {
                $modelClass = "App\\Models\\$model";
            } else {
                $modelClass = "App\\Models\\Admin\\$model";
            }
            $res = resolve($modelClass)->find($id);
            if ($model == "User") {
                $res->avatar = null;
            }

            if ($model == "ActivityCategory") {
                $res->image = null;
            }

            if ($model == "Location" && $request->get('type') == 'logo') {
                $res->logo = null;
            }

            if ($model == "Location" && $request->get('type') == 'image') {
                $res->image = null;
            }

            $img_is_updated = $res->update();

            if ($img_is_updated) {
                return response()->json([
                    'isSuccess' => true,
                    'msg' => 'success',
                    'message' => "Image deleted Successfully!",
                    'path' => $imgPath,
                ], 200);
            } else {
                return response()->json([
                    'isSuccess' => true,
                    'msg' => 'error',
                    'Message' => "Something went wrong!",
                    'path' => 'image not available',
                ], 200);
            }
        } else {
            return response()->json([
                'isSuccess' => true,
                'msg' => 'error',
                'Message' => "Something went wrong!",
            ], 200);
        }


    }
}
