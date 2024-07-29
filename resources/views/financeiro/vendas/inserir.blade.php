@extends('layouts.app')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle"></h1>
        </div>
        <div class="row">
            <div class="col-6 col-lg-5">
                <form id="form" method="post" action="{{ route('financeiro.venda.store') }}" autocomplete="off">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Nova venda</h5>
                        </div>
                        <div class="card-body">
                            <select class="form-control" name="cliente_id">
                                <option value="" selected>Selecione o Cliente (opcional)</option>
                                @foreach ($clientes as $cliente)
                                <option value="{{ $cliente->cliente_id }}" @if (old('cliente_id')==$cliente->cliente_id) {{ 'selected' }} @endif>
                                    {{ $cliente->nome }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="card-body">
                            <input required type="number"  step=".01" name="preco" maxlength='255' class="form-control" placeholder="Valor da venda">
                        </div>
                        <div class="card-body">
                            <input required type="date" name="data" maxlength='255' class="form-control" placeholder="Data" value="{{date('Y-m-d')}}">
                        </div>
                        <div class="card-body">
                            <button type="submit" class="btn btn-success">{{ __('Salvar') }}</button>
                        </div>

                    </div>
                </form>
            </div>

            <div class="col-6 col-lg-5">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <h5 class="col-8 card-title mb-0">Saída de Produtos</h5>
                            <div class="col-2 text-right">
                                <a href="#" onclick="deleteFunction()" class="btn btn-sm btn-primary">
                                    {{-- <i class="align-middle me-1" data-feather="trash"></i> --}}
                                    Apagar
                                </a>
                            </div>
                            <div class="col-2 text-right">
                                <a href="#" onclick="addFunction()" class="btn btn-sm btn-primary">
                                    {{-- <i class="align-middle me-1" data-feather="plus"></i> --}}
                                    Adicionar
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card m-4" id="insert_de_produto_main">
                        <div class="card-header">
                            <div class="row">
                                <h5 class="col-8 card-title mb-0">Produto</h5>
                                {{-- <a class="col-4 text-right" onclick="" href="#"><i class="align-middle me-1" data-feather="trash"></i></a> --}}
                            </div>
                        </div>
                        <div class="card-body">
                            <select required form="form" class="form-control" name="produto_id[]">
                                <option value="" selected>Selecione o produto</option>
                                @foreach ($produtos as $produto)
                                <option value="{{ $produto->produto_id }}">
                                    {{ $produto->nome }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="card-body">
                            <input required form="form" type="number"  step=".01" name="quantidade[]" maxlength='255' class="form-control" placeholder="Quantidade">
                        </div>
                    </div>

                </div>
            </div>


        </div>

    </div>

</main>

<script>

    function deleteFunction() {
        let varios = document.querySelectorAll("#opcional");
        $(varios).remove();
    }

    function addFunction() {
        let element = document.getElementById("insert_de_produto_main");
        let new_element = element.cloneNode(true);
        element.after(new_element);
        $(new_element).prop('id', 'opcional');
    }
</script>

@endsection
