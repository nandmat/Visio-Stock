<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Repositories\AuthRepository;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    private $authRepository;

    public function __construct()
    {
        $this->authRepository = $this->getRepository();
    }

    private function getRepository()
    {
        return new AuthRepository;
    }

    public function view()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        try {

            if (isset($request)) {
                if ($this->authRepository->auth($request)) {
                    $request->session()->regenerate();

                    return redirect()->route('dashboard');
                }

                return redirect()->back()->with('danger', 'Email ou senha inválido!');
            }
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.index');
    }
}
