@extends('layouts.app')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle"></h1>
        </div>
        <div class="row">
            <div class="col-6 col-lg-5">
                <form id="form" method="post" action="{{ route('seguranca.user.update', $usuario->user_id) }}" autocomplete="off">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Editar cadastro de Usuário</h5>
                        </div>
                        <div class="card-body">
                            <input value="{{$usuario->nome}}" required type="text" name="nome" maxlength='255' class="form-control" placeholder="Nome">
                        </div>
                        <div class="card-body">
                            <input value="{{$usuario->username}}" required type="text" name="username" maxlength='255' class="form-control" placeholder="UserName">
                        </div>
                        <div class="card-body">
                            <input value="{{$usuario->email}}" required type="email" name="email" maxlength='255' class="form-control" placeholder="E-mail">
                        </div>
                        {{-- <div class="card-body">
                            <input required id="password" type="password" name="password" maxlength='255' class="form-control" placeholder="Senha" autocomplete="new-password">
                        </div>

                        <div class="card-body">
                            <input required id="password-confirm" type="password" name="password_confirmation" maxlength='255' class="form-control" placeholder="Confirmar Senha" autocomplete="new-password">
                        </div> --}}

                        <div class="card-body">
                            <select class="form-control" name="ativo">
                                <option selected disabled>Status</option>
                                <option @if ($usuario->ativo == 1) {{'selected'}}@endif value="1">Ativo</option>
                                <option @if ($usuario->ativo == 0) {{'selected'}}@endif value="0">Inativo</option>
                            </select>
                        </div>
                        <div class="card-body">
                            <button type="submit" class="btn btn-success">{{ __('Salvar') }}</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>

    </div>
</main>

@endsection
