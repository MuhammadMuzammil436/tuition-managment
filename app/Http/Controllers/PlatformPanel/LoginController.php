<?php

namespace App\Http\Controllers\PlatformPanel;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\Platform\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Pest\Support\View;

class LoginController extends Controller
{
    public function __construct(
        private AuthService $authService
    ) {}
    public function LoginShow()
    {
        return View('app_layout.platform.login');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $this->authService->login($request, $validated);
        dd(session('user_id'));
        // return redirect()->route('platform.dashboard');
    }

    public function logout(Request $request)
    {
        $this->authService->logout($request);

        return redirect()->route('login');
    }
}
