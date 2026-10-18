<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;


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

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);
        $request->session()->regenerate();

        return redirect('/notes');
    }

    


}
