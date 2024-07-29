@extends('layouts.app')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle"></h1>
        </div>
        <div class="row">
            <div class="col-6 col-lg-5">
                <form id="form" method="post" action="{{ route('seguranca.user.senha_update', $usuario->user_id) }}" autocomplete="off">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Editar senha de Usuário</h5>
                        </div>
                        <div class="card-body">
                            <input value="{{$usuario->nome}}" disabled required type="text" name="nome" maxlength='255' class="form-control" placeholder="Nome">
                        </div>
                        <div class="card-body">
                            <input value="{{$usuario->email}}" disabled required type="email" name="email" maxlength='255' class="form-control" placeholder="E-mail">
                        </div>
                        <div class="card-body">
                            <input required id="old_password" type="password" name="old_password" maxlength='255' class="form-control" placeholder="Senha Atual">
                        </div>
                        <div class="card-body">
                            <input required id="password" type="password" name="password" maxlength='255' class="form-control" placeholder="Nova Senha" autocomplete="new-password">
                        </div>
                        <div class="card-body">
                            <input required id="password-confirm" type="password" name="password_confirmation" maxlength='255' class="form-control" placeholder="Confirmar Nova Senha" autocomplete="new-password">
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
