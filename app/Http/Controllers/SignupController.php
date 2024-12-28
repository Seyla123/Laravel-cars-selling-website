<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Contracts\View\View;

class SignupController extends Controller
{
    public function create()
    {
        return view('auth.signup');
    }
}
