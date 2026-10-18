<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', Password::default()]
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect('/notes');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records',
        ]);
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
