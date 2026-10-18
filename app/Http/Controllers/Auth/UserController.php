<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request) {
        $request->validate([
            "name" => ['required', 'string', 'max:255'],
            "email" => ['required', 'string', 'email', 'max:255', 'unique:users'],
            "password" => ['required', Password::default()]
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);

        return redirect('/notes');
    }

    


}
