<?php

namespace App\Services\Platform;

use App\Models\LoginLog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthService
{
    public function login(Request $request, array $credentials): User
    {
        $user = User::where('email', $credentials['email'])->first();

        if (!$user || !Hash::check($credentials['password'], $user->password)) {

            LoginLog::create([
                'user_id' => $user?->id,
                'type' => 'platform',
                'email' => $credentials['email'],
                'status' => 'failed',
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'logged_in_at' => now(),
            ]);

            throw ValidationException::withMessages([
                'error' => 'Invalid email or password.',
            ]);
        }

        LoginLog::create([
            'user_id' => $user->id,
            'email' => $user->email,
            'status' => 'success',
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'logged_in_at' => now(),
        ]);

        $request->session()->regenerate();

        $request->session()->put([
            'user_id' => $user->id,
            'user_name' => $user->name,
            'user_email' => $user->email,
        ]);

        return $user;
    }

    public function logout(Request $request): void
    {
        $request->session()->forget([
            'user_id',
            'user_name',
            'user_email',
        ]);

        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }
}
