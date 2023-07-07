<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Repositories\AuthRepository;
use Exception;
use Illuminate\Http\Request;

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

                    return redirect()->intended('dashboard');
                }

                return redirect()->back()->with('danger', 'Email ou senha inválido!');
            }
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }
}
