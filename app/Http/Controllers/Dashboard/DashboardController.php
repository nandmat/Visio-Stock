<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function view()
    {
        return view('dashboard.index');
    }

    public function viewCadastroVendedor()
    {
        $filiais = [
            'Imperatriz - Maranhão',
            'Salvador - Bahia',
            'Terezina - Piauí',
            'Goiânia - Goiás'
        ];

        $perfil = 1;
        return view('dashboard.new-vendedor-edit', [
            'filiais' => json_encode($filiais),
            'perfil' => $perfil
        ]);
    }
}
