@extends('layouts.app', ['title' => __('VENDAS')])

@section('content')

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">DASHBOARD</h1>

        <div class="row">
            <div class="col-4">
                <div class="card shadow text-white bg-danger mb-3">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Gastos do mês</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h1 class="mb-0"><strong>R${{$gasto}}</strong></h1>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow text-white bg-success mb-3">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Renda do mês</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h1 class="mb-0"><strong>R${{$renda}}</strong></h1>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow text-white bg-info mb-3">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Lucro</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h1 class="mb-0"><strong>R${{$lucro}}</strong></h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Venda por Produto</h3>
                            </div>
                        </div>
                    </div>
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Produto</th>
                                    <th scope="col">Estoque Atual</th>
                                    <th scope="col">Unidades Vendidas no Mês</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($produtos as $produto)
                                    <tr>
                                        <td>{{$produto->nome}}</td>
                                        <td>{{$produto->em_estoque()}}</td>
                                        <td><strong>{{$produto->unidades_vendidas_no_mes()}} {{$produto->nome_unidade}}s</strong></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td conlspan="4">Nenhum produto encontrado</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                </div>
            </div>

            <div class="col-6">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Renda por Cliente</h3>
                            </div>
                        </div>
                    </div>
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Renda</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($clientes as $cliente)
                                    <tr>
                                        <td>{{$cliente->nome}}</td>
                                        <td><strong>R${{$cliente->renda_no_mes()}}</strong></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td conlspan="4">Nenhum cliente encontrado</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                </div>
            </div>

        </div>

    </div>
</main>

@endsection
