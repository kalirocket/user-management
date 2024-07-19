<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignupRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Images;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class SignupController extends Controller
{
    /**
     * Display the signup view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('auth.signup');
    }

    public function signup(SignupRequest $request)
    {
        // Handle the uploaded profile image
        if ($request->hasFile('profile_pic')) {
            $image = $request->file('profile_pic');
            $profilePicPath = $image->store('profile_pics', 'public');
        }

        // Create a new user
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->password = Hash::make($request->password);
        $user->status = "suspended";
        $user->save();

        // save profile pic if exists
        if (isset($profilePicPath)) {
            $image = new Images();
            $image->path = $profilePicPath;
            $image->user_id = $user->id;
            $image->save();
        }

        // Log the user in
        Auth::login($user);

        return redirect('/verification')->with('success', 'An email has been sent to your email address. Please check your email and click on the verification link to complete your registration.');
    }
}
