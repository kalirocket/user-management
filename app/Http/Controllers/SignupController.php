<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
