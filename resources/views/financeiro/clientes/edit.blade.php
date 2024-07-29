@extends('layouts.app')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle"></h1>

        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <form method="post" action="{{ route('financeiro.cliente.update', $cliente->cliente_id) }}" autocomplete="off">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Editar cliente</h5>
                        </div>
                        <div class="card-body">
                            <input value="{{$cliente->nome}}" type="text" name="nome" maxlength='255' class="form-control" placeholder="Nome">
                        </div>
                        <div class="card-body">
                            <input value="{{$cliente->contato}}" type="text" name="contato" maxlength='255' class="form-control" placeholder="Contato">
                        </div>
                        <div class="card-body">
                            <input value="{{$cliente->endereco}}" type="text" name="endereco" maxlength='255' class="form-control" placeholder="Endereço">
                        </div>
                        <div class="card-body">
                            <button type="submit" class="btn btn-success">{{ __('Salvar') }}</button>
                        </div>
                        <br></br>

                    </div>
                </form>
            </div>


        </div>

    </div>

</main>
@endsection
