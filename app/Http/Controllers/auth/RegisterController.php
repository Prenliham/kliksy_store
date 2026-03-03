<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterValidated;
use App\Services\AuthService;

class RegisterController extends Controller
{
    public function index()
    {
        return view('web.auth.page.register');
    }

    public function store(RegisterValidated $dataValidated, AuthService $service)
    {
        $data = $dataValidated->validated();
        $remember = $dataValidated->has('remember');
        try {
            $service->register($data, $remember);
        } catch (\Throwable $e) {
            return back()->withInput()->with('error', $e->getMessage());
        }
        return redirect()->route('home.index')->with('success', 'Berhasil Login!');
    }
}
