<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginValidated;
use App\Services\AuthService;

class LoginController extends Controller
{
    public function index()
    {
        return view('web.auth.page.login');
    }

    public function store(LoginValidated $request, AuthService $service)
    {
        $data = $request->validated();
        $remember = $request->has('remember');
        try {
            $service->login($data, $remember);
        } catch (\Throwable $e) {
            return back()->withInput()->with('error', $e->getMessage());
        }

        return redirect()->route('home.index');
    }

    public function logout(AuthService $service)
    {
        try {
            $service->logout();
        } catch (\Throwable $e) {
            return redirect()->route('home.index')->with('error', $e->getMessage());
        }
        return redirect()->route('home.index')->with('success', 'Berhasil logout!');
    }
}
