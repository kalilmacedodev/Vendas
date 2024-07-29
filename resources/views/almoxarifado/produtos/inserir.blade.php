@extends('layouts.app')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle"></h1>

        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <form enctype="multipart/form-data" method="post" action="{{ route('almoxarifado.produto.store') }}" autocomplete="off">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Novo produto</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" name="nome" maxlength='255' class="form-control" placeholder="Nome do produto">
                        </div>
                        <div class="card-body">
                            <input type="text" name="nome_unidade" maxlength='255' class="form-control" placeholder="Nome da unidade na qual o produto será contado">
                        </div>
                        <div class="card-body">
                            <input type="number"  step=".01" name="preco" maxlength='255' class="form-control" placeholder="Preço unitário">
                        </div>
                        <div class="card-body">
                            <input type="file" accept="image/*" name="imagem" maxlength='255' class="form-control" placeholder="Imagem">
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
