<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyEmaillController extends Controller
{
    public function emailVerify($id, $hash):RedirectResponse
    {
        $user = User::find($id);
        
        if (!$user) {
            abort(404, 'User not found');
        }

        if (! request()->hasValidSignature()) {
            abort(403, 'Invalid or expired verification link.');
        }
        
        if (!$user->email_verified_at) {
            $user->email_verified_at = now();
            $user->save();
            event(new Verified(...$user));
        }
        return redirect(route('login'));
    }
    public function emailNotice()
    {
        return view('auth.verify-email');
    }
}
