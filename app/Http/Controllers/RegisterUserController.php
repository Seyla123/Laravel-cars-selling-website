<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class RegisterUserController extends Controller
{
    public function create(): View
    {
        return view('auth.register');
    }
    public function store() 
    {
        $validation = request()->validate([
            'name' => ['required'],
            'email'=>['required'],
            'phone'=>['required'],
            'password'=>['required'],
            'confirmPassword'=>['same:password'],
        ]);
        return "hello world";
    }
}
