@extends('layouts.app')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle"></h1>

        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <form method="post" action="{{ route('almoxarifado.entrada.update', $entrada->entrada_produtos_id) }}" autocomplete="off">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Editar entrada de produto</h5>
                        </div>
                        <div class="card-body">
                            <select class="form-control" name="produto_id">
                                <option value="" selected>Selecione o Produto</option>
                                @foreach ($produtos as $produto)
                                <option value="{{ $produto->produto_id }}" @if ($entrada->produto_id ==$produto->produto_id) {{ 'selected' }} @endif>
                                    {{ $produto->nome }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="card-body">
                            <input value="{{$entrada->quantidade}}" type="number"  step=".01" name="quantidade" maxlength='255' class="form-control" placeholder="Quantidade">
                        </div>
                        <div class="card-body">
                            <input value="{{$entrada->data}}" type="date" name="data" maxlength='255' class="form-control" placeholder="Data" value="{{date('Y-m-d')}}">
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
