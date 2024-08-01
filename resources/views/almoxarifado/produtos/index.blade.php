@extends('layouts.app', ['title' => __('Almoxarifado')])

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
                                    <h3 class="mb-0">Almoxarifado - Produtos</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{route('almoxarifado.produto.inserir')}}" class="btn btn-sm btn-primary">Novo</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                        </div>

                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Imagem</th>
                                        <th scope="col">Produto</th>
                                        <th scope="col">Unidade</th>
                                        <th scope="col">Preço Unitário</th>
                                        <th scope="col">Estoque</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($produtos as $produto)
                                        <tr>
                                            <td style="width: 20%"><img  style="width: 20vh" src="{{$produto->base64_imagem}}"></td>
                                            <td>{{$produto->nome}}</td>
                                            <td>{{$produto->nome_unidade}}</td>
                                            <td>{{$produto->preco}}</td>
                                            <td>{{$produto->em_estoque()}}</td>
                                            <td class="text-right">

                                            </td>
                                            <td class="table-action">
                                                <a href="{{route('almoxarifado.produto.edit', $produto->produto_id)}}">
                                                    <i
                                                        class="align-middle me-1" data-feather="edit"></i>
                                                    </a>

                                                {{-- <a href="#"><i
                                                        class="align-middle me-1" data-feather="trash"></i></a> --}}

                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td conlspan="4">Nenhum produto encontrado</td>
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
