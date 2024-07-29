@extends('layouts.app')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle"></h1>
        </div>
        <div class="row">
            <div class="col-6 col-lg-5">
                <form id="form" method="post" action="{{ route('financeiro.venda.update', $venda->venda_id) }}" autocomplete="off">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Editar venda</h5>
                        </div>
                        <div class="card-body">
                            <select class="form-control" name="cliente_id">
                                <option value="" selected>Selecione o Cliente (opcional)</option>
                                @foreach ($clientes as $cliente)
                                <option value="{{ $cliente->cliente_id }}" @if ($venda->cliente_id ==$cliente->cliente_id) {{ 'selected' }} @endif>
                                    {{ $cliente->nome }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="card-body">
                            <input required type="number" value="{{$venda->preco}}" step=".01" name="preco" maxlength='255' class="form-control" placeholder="Valor da venda">
                        </div>
                        <div class="card-body">
                            <input required type="date" value="{{$venda->data}}" name="data" maxlength='255' class="form-control" placeholder="Data" value="{{date('Y-m-d')}}">
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
