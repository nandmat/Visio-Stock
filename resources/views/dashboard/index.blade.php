@extends('base')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            {{-- <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"></a></li>
            </ol>
        </nav> --}}
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">

                        <!-- Cards -->
                        @include('components.cards')

                        <div class="col-lg-12">
                            <div class="card">
                              <div class="card-body">
                                <h5 class="card-title">Receita Anual <span>| K</span></h5>

                                <!-- Line Chart -->
                                <div class="col-lg-9">
                                    <div id="lineChart" onchange="lineChart()"></div>
                                </div>
                              </div>
                            </div>
                          </div>

                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">


                                <div class="card-body">
                                    <h5 class="card-title">Vendas Recentes <span>| Últimos 30 dias</span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Cliente</th>
                                                <th scope="col">Produto</th>
                                                <th scope="col">Valor</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><a href="#">75</a></th>
                                                <td>Artur França</td>
                                                <td><a href="#" class="text-primary">Lenovo - Notebook T470 -
                                                        Computadores e Notebooks</a></td>
                                                <td>R$ 3.119,54</td>
                                                <td>
                                                    <span class="badge bg-success">
                                                        PAGO
                                                    </span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row"><a href="#">25</a></th>
                                                <td>Jorge Canhão</td>
                                                <td><a href="#" class="text-primary">Hanz - KP-RO811 - Eletrônicos</a>
                                                </td>
                                                <td>R$ 145,00</td>
                                                <td>
                                                    <span class="badge bg-success">
                                                        PAGO
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Relação de vendas <span>| Por Vendedor</span></h5>
                            <div class="col-lg-9">
                                <div id="relacaoVendasVendedor" style="min-height: 300px;" class="echart">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Relação de vendas <span>| Por Produto</span></h5>
                            <div class="col-lg-9">
                                <div id="relacaoVendasProduto" style="min-height: 300px;" class="echart">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <script src="{{ asset('assets/js/charts/myCharts.js') }}"></script>
@endsection
