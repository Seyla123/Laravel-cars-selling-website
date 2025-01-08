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
        $validation = request()->validate([
            'email'=>['required','email'],
            'password'=>['required'],
        ]);
        dd(request()->all());
        return ;
    }
    public function destroy()
    {
        dd('iloveu');
    }
}
