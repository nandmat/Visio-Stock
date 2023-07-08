<?php

namespace App\Http\Repositories;

use App\Models\Vendedor;

class VendedorRepository
{
    private $modelVendedor;

    public function __construct()
    {
        $this->modelVendedor = $this->getModelVendedor();
    }

    private function getModelVendedor()
    {
        return new Vendedor();
    }

    public function store($data)
    {
        if(!empty($data))
        {
            $vendedor = $this->modelVendedor->query()->create($data);
            return $vendedor;
        }
    }
}
