<?php

namespace App\Http\Repositories;

use App\Models\Permissao;
use App\Models\UserPermissao;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PermissaoRepository
{
    private $modelPermissao;
    private $modelUserPermissao;


    public function __construct()
    {
        $this->modelPermissao = $this->getModelPermissao();
        $this->modelUserPermissao = $this->getModelUserPermissao();
    }

    private function getModelPermissao()
    {
        return new Permissao();
    }

    private function getModelUserPermissao()
    {
        return new UserPermissao();
    }

    public function store($data)
    {
        if (!isset($data['code'])) {
            $data['code'] = Str::ascii(Str::snake(mb_strtolower($data['permissao'])));
        }

        $newPermissao = $this->modelPermissao->query()->create([
            'permissao' => $data['permissao'],
            'description' => $data['description'],
            'code' => $data['code']
        ]);

        if (Auth::user()) {
            $this->modelUserPermissao->query()->create([
                'user_id' => Auth::user()->id,
                'permissao_id' => $newPermissao->id
            ]);
        }
        return $newPermissao;
    }

    public function permissoesInciaisVendedor($data)
    {
        $this->modelUserPermissao->query()->create([
            'user_id' => $data['user_id'],
            'permissao_id' => 1
        ]);

        $this->modelUserPermissao->query()->create([
            'user_id' => $data['user_id'],
            'permissao_id' => 2
        ]);

        $this->modelUserPermissao->query()->create([
            'user_id' => $data['user_id'],
            'permissao_id' => 3
        ]);

        $this->modelUserPermissao->query()->create([
            'user_id' => $data['user_id'],
            'permissao_id' => 4
        ]);
    }

    public function permissoesInciaisAdm($data)
    {
        $this->modelUserPermissao->query()->create([
            'user_id' => $data['user_id'],
            'permissao_id' => 1
        ]);

        $this->modelUserPermissao->query()->create([
            'user_id' => $data['user_id'],
            'permissao_id' => 2
        ]);

        $this->modelUserPermissao->query()->create([
            'user_id' => $data['user_id'],
            'permissao_id' => 3
        ]);

        $this->modelUserPermissao->query()->create([
            'user_id' => $data['user_id'],
            'permissao_id' => 4
        ]);

        $this->modelUserPermissao->query()->create([
            'user_id' => $data['user_id'],
            'permissao_id' => 5
        ]);

        $this->modelUserPermissao->query()->create([
            'user_id' => $data['user_id'],
            'permissao_id' => 6
        ]);
    }
}
