<?php

namespace App\Http\Controllers\SchoolPanel;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function LoginShow()
    {
        return View('app_layout.school.login');
    }
    public function login(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // Check database
        $user = User::where('email', $validated['email'])->first();

        // Email does not exist
        if (!$user) {
            return back()
                ->withErrors([
                    'email' => 'Email does not exist.',
                ])
                ->withInput();
        }

        // Check password
        if (!Hash::check($validated['password'], $user->password)) {
            return back()
                ->withErrors([
                    'password' => 'Password is incorrect.',
                ])
                ->withInput();
        }
        return $user;
        // // Login successful
        // session([
        //     'admin_id' => $admin->id,
        //     'admin_name' => $admin->name,
        //     'admin_email' => $admin->email,
        //     'admin_logged_in' => true,
        // ]);

        // return redirect('/admin/dashboard');
    }
}
