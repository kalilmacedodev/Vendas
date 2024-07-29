@extends('layouts.app', ['title' => __('Usuario')])

@section('content')
    <main class="content">

        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"></h1>

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <h3 class="mb-0">Usuários</h3>
                                </div>

                                <div class="col-8">
                                    {{-- <form action="{{ route('seguranca.user.index') }}" method="GET">
                                        <div class="row">
                                            <div class="mb-3 col-md-4">
                                                <input class="form-control" type="text" name="nome" placeholder="Nome" />
                                            </div>
                                            <div class="mb-3 col-md-4">
                                                <input class="form-control" type="text" name="email" placeholder="E-mail" />
                                            </div>
                                            <div class="mb-3 col-md-4">
                                                <a href="{{ route('seguranca.user.index') }}">
                                                    Todos</a>
                                                <button href="{{ route('seguranca.user.index') }}" type="submit" class="btn btn-sm btn-primary">
                                                    Filtrar</button>
                                            </div>

                                        </div>
                                    </form> --}}
                                </div>
                                <div class="col-2 text-right">
                                    <a href="{{ route('seguranca.user.inserir') }}" class="btn btn-sm btn-primary">Novo</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                        </div>

                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">UserName</th>
                                        <th scope="col">E-mail</th>
                                        <th scope="col">Ativo</th>
                                        <th scope="col">Criado em</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($usuarios as $usuario)
                                        <tr>
                                            <td>{{ $usuario->user_id }}</td>
                                            <td>{{ $usuario->nome }}</td>
                                            <td>{{ $usuario->username }}</td>
                                            <td>{{ $usuario->email }}</td>
                                            <td>{{ $usuario->ativo }}</td>
                                            <td>{{ $usuario->created_at }}</td>

                                            <td class="table-action">
                                                <a href="{{ route('seguranca.user.edit', $usuario->user_id) }}" title="Editar conta">
                                                    {{-- <i class="align-middle me-1" data-feather="edit"></i> --}}
                                                    Editar
                                                </a>
                                                <a href="{{ route('seguranca.user.senha_edit', $usuario->user_id) }}" title="Mudar senha">
                                                    {{-- <i class="align-middle me-1" data-feather="key"></i> --}}
                                                    Mudar Senha
                                                </a>
                                                {{-- <a href="{{ route('seguranca.user.destroy', $usuario->user_id) }}" title="Apagar">
                                                    <i class="align-middle me-1" data-feather="trash"></i>
                                                </a> --}}
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td conlspan="4">Nenhum usuário encontrado</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>

                        </div>
                        <div class="card-footer py-4">
                            <nav class="d-flex justify-content-end" aria-label="...">
                            {{ $usuarios->links() }}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>
@endsection
