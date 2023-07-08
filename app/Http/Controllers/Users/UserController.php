<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        try {

            if (isset($request)) {
                // if ($this->authRepository->auth($request)) {
                //     $request->session()->regenerate();

                //     return redirect()->route('dashboard');
                // }

                return redirect()->back()->with('danger', 'Email ou senha inválido!');
            }
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }
}
