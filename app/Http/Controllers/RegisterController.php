<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.register', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'role_id' => ['required'],
        'gender_id' => ['required'],
        'first_name' => ['required', 'max:25', 'alpha'],
        'last_name' => ['required', 'max:25', 'alpha'],
        'email' => ['required', 'email:dns', 'unique:users'],
        'password' => ['required', 'min:8', 'regex:/[0-9]/', 'confirmed'],
        'display_picture_link' => ['required', 'image']
        ]);

        $request->validate([
            'password_confirmation' => ['required', 'min:8', 'regex:/[0-9]/']
        ]);

        if ($request->hasFile('display_picture_link')) {
            $validatedData['display_picture_link'] = $request->file('display_picture_link')->store('display_images', 'public');
        }

        $validatedData['password'] = Hash::make($validatedData['password']);

        $newUser = User::create($validatedData);

        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}
