<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed, regenerate the session to prevent fixation
            $request->session()->regenerate();
            return redirect(route('dashboard'));
        } else {
            return back()->withErrors([
                'failed' => 'The provided credentials do not match our records.',
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}

