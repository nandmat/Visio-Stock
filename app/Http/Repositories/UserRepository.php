<?php

namespace App\Http\Repositories;

use App\Models\User;
use Illuminate\Http\Request;

class UserRepository
{
    private $modelUser;

    public function __construct()
    {
        $this->modelUser = $this->getUser();
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

        $user = $this->modelUser->query()->create($data);

        return $user;
    }
    }
}
