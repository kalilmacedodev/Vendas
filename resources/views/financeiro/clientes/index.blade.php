@extends('layouts.app', ['title' => __('Financeiro')])

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
                                    <h3 class="mb-0">Financeiro - Clientes</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{route('financeiro.cliente.inserir')}}" class="btn btn-sm btn-primary">Novo</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                        </div>

                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Contato</th>
                                        <th scope="col">Endereço</th>
                                        <th scope="col">Cadastrado por</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($clientes as $cliente)
                                        <tr>
                                            <td>{{$cliente->nome}}</td>
                                            <td>{{$cliente->contato}}</td>
                                            <td>{{$cliente->endereco}}</td>
                                            <td>{{$cliente->user->nome}}</td>
                                            <td class="text-right">

                                            </td>
                                            <td class="table-action">
                                                <a href="{{route('financeiro.cliente.edit', $cliente->cliente_id)}}">
                                                    {{-- <i
                                                        class="align-middle me-1" data-feather="edit"></i> --}}
                                                        Editar
                                                    </a>

                                                {{-- <a href="#" data-toggle="modal" data-target="#modalExclusao{{$cliente->cliente_id}}"><i class="align-middle me-1" data-feather="trash"></i></a>

                                                @include('layouts.components.modal_confirmacao', [
                                                    'modal_id' => "modalExclusao{$cliente->cliente_id}",
                                                    'form_action' => route('financeiro.cliente.destroy', $cliente->cliente_id),
                                                    'modal_body' => "Você tem certeza de quer excluir registro de cliente número {$cliente->cliente_id}
                                                                de descrição '{$cliente->descricao}' e de valor R$". $cliente->custo. "?
                                                                Esta ação apagará o registro de cliente."]) --}}

                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td conlspan="4">Nenhum cliente encontrado</td>
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
