<?php

namespace App\Http\Repositories;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthRepository
{
    public function __construct()
    {
    }
    public function auth(Request $request)
    {
        $request->validate(
            [
                'email' => ['required'],
                'password' => ['required']
            ],
            [
                'email.required' => 'Informe um email válido',
                'password.required' => 'Informe sua senha'
            ]
        );

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return true;
        }
    }
}
