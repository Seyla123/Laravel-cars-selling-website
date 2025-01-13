<?php

namespace App\Http\Controllers;

use App\Mail\UserRegistered;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;

class RegisterUserController extends Controller
{
    public function create(): View
    {
        return view('auth.register');
    }
    public function store(Request $request) : RedirectResponse
    {
        $validation = $request->validate([
            'name' => ['required'],
            'email'=>['required','email','unique:users'],
            'phone'=>['numeric'],
            'password'=>['required'],
            'confirmPassword'=>['same:password'],
        ]);
        $user = User::create($validation);

        event(new Registered($user));
        //send welcome email
        Mail::to('mrrseyla.758@gmail.com')->queue(new UserRegistered());
        return redirect(route('login'));
    }
}
