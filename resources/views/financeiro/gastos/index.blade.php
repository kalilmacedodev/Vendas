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
                                    <h3 class="mb-0">Financeiro - Gastos</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{route('financeiro.gasto.inserir')}}" class="btn btn-sm btn-primary">Novo</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                        </div>

                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Descrição</th>
                                        <th scope="col">Valor</th>
                                        <th scope="col">Data</th>
                                        <th scope="col">Cadastrado por</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($gastos as $gasto)
                                        <tr>
                                            <td>{{$gasto->descricao}}</td>
                                            <td>{{$gasto->custo}}</td>
                                            <td>{{$gasto->data}}</td>
                                            <td>{{$gasto->user->nome}}</td>
                                            <td class="text-right">

                                            </td>
                                            <td class="table-action">
                                                <a href="{{route('financeiro.gasto.edit', $gasto->gasto_id)}}">
                                                    {{-- <i
                                                        class="align-middle me-1" data-feather="edit"></i> --}}
                                                        Apagar
                                                    </a>

                                                <a href="#" data-toggle="modal" data-target="#modalExclusao{{$gasto->gasto_id}}">
                                                    {{-- <i class="align-middle me-1" data-feather="trash"></i> --}}
                                                    Apagar
                                                </a>

                                                @include('layouts.components.modal_confirmacao', [
                                                    'modal_id' => "modalExclusao{$gasto->gasto_id}",
                                                    'form_action' => route('financeiro.gasto.destroy', $gasto->gasto_id),
                                                    'modal_body' => "Você tem certeza de quer excluir registro de gasto número {$gasto->gasto_id}
                                                                de descrição '{$gasto->descricao}' e de valor R$". $gasto->custo. "?
                                                                Esta ação apagará o registro de gasto."])

                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td conlspan="4">Nenhum gasto encontrado</td>
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
