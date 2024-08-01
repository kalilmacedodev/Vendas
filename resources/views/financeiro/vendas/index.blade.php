@extends('layouts.app', ['title' => __('Financeiro')])

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"></h1>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Financeiro - Vendas</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{route('financeiro.venda.inserir')}}" class="btn btn-sm btn-primary">Novo</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Produto</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Valor</th>
                                    <th scope="col">Data</th>
                                    <th scope="col">Cadastrado por</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($vendas as $venda)
                                    <tr>
                                        <td>@foreach ($venda->saidas as $saida)
                                            {{$saida->quantidade}} {{$saida->produto->nome}}s <br>
                                        @endforeach</td>
                                        <td>@if ($venda->cliente)
                                            {{$venda->cliente->nome}}
                                        @endif</td>
                                        <td>R${{$venda->preco}}</td>
                                        <td>{{$venda->data}}</td>
                                        <td>{{$venda->user->nome}}</td>
                                        <td class="text-right">

                                        </td>
                                        <td class="table-action">
                                            <a href="{{route('financeiro.venda.edit', $venda->venda_id)}}">
                                                {{-- <i class="align-middle me-1" data-feather="edit"></i> --}}
                                                Editar
                                                </a>

                                            <a href="#" data-toggle="modal" data-target="#modalExclusao{{$venda->venda_id}}">
                                                {{-- <i class="align-middle me-1" data-feather="trash"></i> --}}
                                                Apagar
                                            </a>

                                        </td>
                                    </tr>

                                    @include('layouts.components.modal_confirmacao', [
                                        'modal_id' => "modalExclusao{$venda->venda_id}",
                                        'form_action' => route('financeiro.venda.destroy', $venda->venda_id),
                                        'modal_body' => "Você tem certeza de quer excluir regstro de venda número {$venda->venda_id}
                                                    com valor de R$". $venda->preco."?
                                                    Esta ação apagará tanto o registro de venda quanto os registros de almoxarifado executados
                                                    no cadastro desta venda."])

                                @empty
                                    <tr>
                                        <td conlspan="4">Nenhuma venda encontrada</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection
