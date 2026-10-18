<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
