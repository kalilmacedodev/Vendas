@extends('layouts.app', ['title' => __('Almoxarifado')])

@section('content')
    <main class="content">

    @if(session('sucesso'))
        <div class="alert alert-success">
            <p>{{session('sucesso')}}</p>
        </div>
        @endif
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"></h1>

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Almoxarifado - Saída de Produtos</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{route('almoxarifado.saida.inserir')}}" class="btn btn-sm btn-primary">Novo</a>
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
                                        <th scope="col">Tipo de Saída</th>
                                        <th scope="col">Quantidade</th>
                                        <th scope="col">Data</th>
                                        <th scope="col">Cadastrado por</th>

                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($saidas as $saida)
                                        <tr>
                                            <td>{{$saida->produto->nome}}</td>
                                            <td>{{$saida->tipo_saida->descricao}}
                                                @if ($saida->tipo_saida->descricao == "Venda")
                                                @if ($saida->venda->cliente)
                                                    para {{$saida->venda->cliente->nome}}
                                                @endif
                                                @endif
                                            </td>
                                            <td>{{$saida->quantidade}}</td>
                                            <td>{{$saida->data}}</td>
                                            <td>{{$saida->user->nome}}</td>
                                            <td class="text-right">

                                            </td>
                                            <td class="table-action">
                                                <a href="{{route('almoxarifado.saida.edit', $saida->saida_produtos_id)}}">
                                                    {{-- <i
                                                        class="align-middle me-1" data-feather="edit"></i> --}}
                                                        Editar
                                                    </a>

                                                <a href="#" data-toggle="modal" data-target="#modalExclusao{{$saida->saida_produtos_id}}">
                                                    {{-- <i class="align-middle me-1" data-feather="trash"></i> --}}
                                                    Apagar
                                                </a>

                                            </td>
                                        </tr>

                                        @include('layouts.components.modal_confirmacao', [
                                            'modal_id' => "modalExclusao{$saida->saida_produtos_id}",
                                            'form_action' => route('almoxarifado.saida.destroy', $saida->saida_produtos_id),
                                            'modal_body' => "Você tem certeza de quer excluir registro de saída número {$saida->saida_produtos_id}
                                                        de {$saida->quantidade} {$saida->produto->nome}s?
                                                        Esta ação apagará o registro de saída."])
                                    @empty
                                        <tr>
                                            <td conlspan="4">Nenhuma saída encontrada</td>
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
