<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use app\Models\User;


class ProfileController extends Controller
{
    public function profile()
    {
        return view('layouts.deshboard.profile.profile');
    }


    //name change and email ta kora hoi nai

    // public function name_change(request $request)
    // {
    //     return back()->with('name_change_success', 'Your Name Change Done Successfully');
    // }


    // public function email_change(request $request)
    // {
    //     $request->validate([
    //         'email' => 'required',
    //         'new_email' => 'required',
    //     ]);

    //      {
    //         if (Hash::check($request->email, auth()->user()->email)) {
    //             user::find(auth()->user()->id)->update([
    //                 'new_email' => $request->new_email,
    //             ]);
    //             return back()->with('email_change_success', 'Your Email Change Done Successfully');
    //         }
    //         else {
    //             return back()->withErrors('Old Email Not Correct.Please Right Email
    //         Give Me.');
    //         }
    //     }
    // }

    public function password_change(request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed|min:8|',
            'password_confirmation' => 'required',
        ]);
        if (Hash::check($request->old_password, auth()->user()->password)) {
            user::find(auth()->user()->id)->update([
                'password' => bcrypt($request->password),
            ]);
            return back()->with('password_change_success', 'Your Password Change Done Successfully');
        } else {
            return back()->withErrors('Old Password Not Correct.Please Right Password
            Give Me.');
        }
    }



    public function profile_upload(request $request)
    {
        $request->validate([
            'profile' => 'required|image',
        ]);

        $new_name = Auth::user()->id . "." . $request->file('profile')->getClientOriginalExtension();

        $img = Image::make($request->file('profile'))->resize(300, 300);
        $img->save(base_path('public/uploads/profile_photos/' . $new_name), 80);
        User::find(Auth()->id())->update(
            [
                'profile' => $new_name,
            ]
        );
        return back()->with('photo_success', 'Your Profile Photo Upload Done Successfully');
    }






    public function cover_upload(request $request)
    {
        $request->validate([
            'cover_photo' => 'required|image',
        ]);

        $new_name = Auth::user()->id . "." . $request->file('cover_photo')->getClientOriginalExtension();

        $img = Image::make($request->file('cover_photo'))->resize(980, 450);
        $img->save(base_path('public/uploads/cover_photo/' . $new_name), 100);
        User::find(Auth()->id())->update(
            [
                'cover_photo' => $new_name,
            ]
        );
        return back()->with('cover_photo_success', 'Your Profile Photo Upload Done Successfully');
    }
}
