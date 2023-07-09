<?php

namespace App\Http\Repositories;

use App\Http\Controllers\Auth\PermissaoController;
use App\Models\User;
use Illuminate\Http\Request;

class UserRepository
{
    private $modelUser;
    private $vendedorRepository;
    private $permissaoController;

    public function __construct()
    {
        $this->modelUser = $this->getUser();
        $this->vendedorRepository = $this->getVendedorRepository();
        $this->permissaoController = new PermissaoController;
    }

    private function getVendedorRepository()
    {
        return new VendedorRepository;
    }

    private function getUser()
    {
        return new User();
    }

    public function store(Request $request)
    {
       if($data = $request->validate(
        [
            'email' => ['required'],
            'name' => ['required'],
            'cpf' => ['required', 'max:11']
        ],
        [
            'email.required' => 'Informe um email válido',
            'name.required' => 'Informe um nome válido',
            'cpf.required' => 'Informe um CPF válido'
        ]
    ))
    {
        $data['password'] = bcrypt($data['cpf']);

        if($user = $this->modelUser->query()->create($data))
        {
            if($request->perfil == 1)
            {
                $vendedor = $this->vendedorRepository->store($data = [
                    'user_id' => $user->id,
                    'cpf' => $user->cpf,
                    'name' => $user->name,
                    'status' => 'active'
                ]);

                $this->permissaoController->permissoesInciaisVendedor($vendedor->user_id);
            }
        }

    }
    }
}
