<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Administrador;
use App\Models\Perfil;
use App\Models\Permissao;
use App\Models\User;
use App\Models\UserPerfil;
use App\Models\UserPermissao;
use App\Models\Vendedor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $perfil = new Perfil();
        $administrador = new Administrador();
        $vendedor = new Vendedor();
        $permissao = new Permissao();
        $userPermissao = new UserPermissao();
        $userPerfil = new UserPerfil();

        $nanderson = $user->query()->create([
            'name' => 'Nanderson Matheus',
            'email' => 'nandersonmatheusmelo@visioignis.com.br',
            'password' => bcrypt('12345678'),
            'cpf' => '61245784331'
        ]);

        $aguiar = $user->query()->create([
            'name' => 'Aguiar Freitas',
            'email' => 'aguiar-freitas@visioignis.com.br',
            'password' => bcrypt('12345678'),
            'cpf' => '45784612344'
        ]);

        $perfilVendedor = $perfil->query()->create([
            'perfil' => 'vendedor'
        ]);

        $perfilAdm = $perfil->query()->create([
            'perfil' => 'adm'
        ]);

        $novoAdm = $administrador->query()->create([
            'user_id' => $nanderson->id,
            'name' => $nanderson->name,
            'cpf' => $nanderson->cpf
        ]);

        $novoVendedor = $vendedor->query()->create([
            'user_id' => $aguiar->id,
            'name'  => $aguiar->name,
            'cpf' => $aguiar->cpf
        ]);

        $userPerfil->query()->create([
            'user_id' => $nanderson->id,
            'perfil_id' => $perfilAdm->id
        ]);

        $userPerfil->query()->create([
            'user_id' => $aguiar->id,
            'perfil_id' => $perfilVendedor->id
        ]);

        $permissao_consulta_produtos = $permissao->query()->create([
            'permissao' => 'consulta produtos',
            'description' => 'permitir consulta de produtos',
            'code' => 'consulta_produtos'
        ]);

        $permissao_entrada_produtos = $permissao->query()->create([
            'permissao' => 'entrada produtos',
            'description' => 'permitir entrada de produtos',
            'code' => 'entrada_produtos'
        ]);

        $permissao_cadastro_produtos = $permissao->query()->create([
            'permissao' => 'cadastro produtos',
            'description' => 'permitir cadastro de produtos',
            'code' => 'cadastro_produtos'
        ]);

        $permissao_saida_produtos = $permissao->query()->create([
            'permissao' => 'saida produtos',
            'description' => 'permitir saída de produtos',
            'code' => 'saida_produtos'
        ]);

        $permissao_cadastro_vendedor = $permissao->query()->create([
            'permissao' => 'cadastro vendedores',
            'description' => 'permitir cadastro de vendedores',
            'code' => 'cadastro_vendedores'
        ]);

        $permissao_deletar_vendedor = $permissao->query()->create([
            'permissao' => 'deletar vendedores',
            'description' => 'permitir deletar vendedores',
            'code' => 'deletar_vendedores'
        ]);


    }
}
