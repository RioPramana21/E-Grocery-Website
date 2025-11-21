<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('main_pages.profile', [
            'title' => 'Profile',
            'active' => 'login',
            'user' => auth()->user()
        ]);
    }

    public function success()
    {
        return view('others.update_success', [
            'title' => 'Profile',
            'active' => 'login',
        ]);
    }

    public function update(Request $request)
    {
        $curr_user = Auth::user();
        $rules = [
            'first_name' => ['required', 'max:25', 'alpha'],
            'last_name' => ['required', 'max:25', 'alpha'],
            'password' => ['required', 'min:8', 'regex:/[0-9]/', 'confirmed'],
            'display_picture_link' => ['required', 'image']
        ];

        if (!Hash::check($request->password, $curr_user->password)) {
            return back()->with('alert', "Password is not correct!");
        }

        if ($request->email != $curr_user->email){
            $rules['email'] = ['required', 'email:dns', 'unique:users'];
        }

        $request->validate($rules);

        $original_name = $request->file('display_picture_link')->getClientOriginalName();
        $original_ext = $request->file('display_picture_link')->getClientOriginalExtension();
        $picture_name = $original_name . time() . '.' . $original_ext;
        $request->file('display_picture_link')->storeAs('public/display_images/', $picture_name);
        $display_picture_link = 'display_images/' . $picture_name;

        $users = User::find($curr_user->id);
        $users->first_name = $request->first_name;
        $users->last_name = $request->last_name;
        $users->email = $request->email;
        $users->gender_id = $request->gender_id;
        $users->display_picture_link = $display_picture_link;
        $users->save();

        return redirect()->route('profile-success')->with('success', 'Profile has been updated!');
    }
}
