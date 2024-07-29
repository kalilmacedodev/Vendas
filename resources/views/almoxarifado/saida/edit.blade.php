@extends('layouts.app')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle"></h1>

        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <form method="post" action="{{ route('almoxarifado.saida.update', $saida->saida_produtos_id) }}" autocomplete="off">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Atualizar saída de produto</h5>
                        </div>
                        <div class="card-body">
                            <select class="form-control" name="produto_id">
                                <option value="" selected>Selecione o Produto</option>
                                @foreach ($produtos as $produto)
                                <option value="{{ $produto->produto_id }}" @if ($saida->produto_id ==$produto->produto_id) {{ 'selected' }} @endif>
                                    {{ $produto->nome }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="card-body">
                            <select class="form-control" name="tipo_saida_id">
                                <option value="" selected>Selecione o tipo de saída</option>
                                @foreach ($tipos_saida as $tipo_saida)
                                <option value="{{ $tipo_saida->tipo_saida_id }}" @if ($saida->tipo_saida_id ==$tipo_saida->tipo_saida_id) {{ 'selected' }} @endif>
                                    {{ $tipo_saida->descricao }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="card-body">
                            <select class="form-control" name="venda_id">
                                <option value="" selected>Selecione a venda em caso de venda</option>
                                @foreach ($vendas as $venda)
                                <option value="{{ $venda->venda_id }}" @if ($saida->venda_id ==$venda->venda_id) {{ 'selected' }} @endif>
                                    {{$venda->venda_id}} - @if ($venda->cliente)
                                    {{ $venda->cliente->nome }}
                                    @endif - {{$venda->data}} - R${{$venda->preco}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="card-body">
                            <input value="{{$saida->quantidade}}" type="number" step=".01" name="quantidade" maxlength='255' class="form-control" placeholder="Quantidade">
                        </div>
                        <div class="card-body">
                            <input value="{{$saida->data}}" type="date" name="data" maxlength='255' class="form-control" placeholder="Data" value="{{date('Y-m-d')}}">
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
