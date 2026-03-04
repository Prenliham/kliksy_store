<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

// use App\Models\User;

class AuthService
{
    public function register(array $data, bool $remember)
    {
        DB::transaction(function() use ($data, $remember)
        {
            $result = [
                'name' => $data['name'],
                'username' => $this->createdUsername($data['name']),
                'email' => $data['email'],
                'password' => Hash::make($data['password'])
            ];

            $user = User::create($result);

            $user->profil()->create();

            Auth::login($user, $remember);

            if (!Auth::check()) {
                throw new \Exception("User gagal Login");
            }
        });
    }

    public function login( array $data, bool $remember)
    {
        if (!Auth::attempt($data, $remember)) {
            throw new \Exception ("Email Password Invalid!");
        }

        request()->session()->regenerate();
    }

    public function logout()
    {
        if (!Auth::check()) {
            throw new \Exception ("You are not logged in yet.");
        }        
        
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
    }


    public function createdUsername($name) : string
    {
        $slug = Str::slug($name);
        $originalSlug = $slug;
        $count = 1 ;
        while (User::where('username', $slug)->exists()) {
            $slug = $originalSlug . "-" . $count;
            $count++;
        }
        return $slug;
    }
}