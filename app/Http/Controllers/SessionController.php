<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        dd(request()->all());
    }
    public function destroy(Request $request)
    {

        dd('logout');
        // Auth::logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();

        // return redirect('/login')->with('success', 'You have been logged out.');
    }
}
