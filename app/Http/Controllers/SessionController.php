<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // login the user 
        if (! Auth::attempt($credentials)) {
            throw  ValidationException::withMessages([
                'password' => 'Sorry, those credentials do not match our records.',
            ]);
        }

        // regenerate the session 
        request()->session()->regenerate();

        // redirect to home page with success message
        return redirect('/')->with('success', 'You are now logged in.');
    }



    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'You have been logged out.');
    }
}
