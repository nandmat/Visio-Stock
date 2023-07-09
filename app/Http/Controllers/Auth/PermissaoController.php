<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Repositories\PermissaoRepository;
use Exception;
use Illuminate\Http\Request;

class PermissaoController extends Controller
{
    private $permissaoRepository;

    public function __construct()
    {
        $this->setPermissaoRepository();
    }

    private function setPermissaoRepository()
    {
        $this->permissaoRepository = new PermissaoRepository;
    }

    public function store(Request $request)
    {
        try {

            $data = [
                'permissao' => $request->permissao,
                'description' => $request->description,
            ];

            if (!empty($data))
            {
                $permissao = $this->permissaoRepository->store($data);

                return redirect()->route('dashboard');
            }
            return redirect()->back()->with('danger', 'Não foi possível cadastrar a permissão');
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }

    public function permissoesInciaisVendedor($user_id)
    {
        try {

            $data = [
                'user_id' => $user_id
            ];

            if (!empty($data))
            {
                if($this->permissaoRepository->permissoesInciaisVendedor($data))
                {
                    return true;
                }
            }
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }

    public function permissoesInciaisAdm($user_id)
    {
        try {

            $data = [
                'user_id' => $user_id
            ];

            if (!empty($data))
            {
                if($this->permissaoRepository->permissoesInciaisAdm($data))
                {
                    return true;
                }
            }
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }
}
