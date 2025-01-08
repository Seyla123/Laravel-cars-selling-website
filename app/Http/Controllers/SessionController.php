<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function store()
    {
        // validate
        $validation = request()->validate([
            'email'=>['required','email'],
            'password'=>['required'],
        ]);
        
        Auth::attempt($validation);

        request()->session()->regenerate();
        return redirect('/');
    }
    public function destroy()
    {
        Auth::logout();
        return redirect('/login');
    }
}
