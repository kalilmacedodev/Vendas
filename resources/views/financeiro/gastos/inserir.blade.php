@extends('layouts.app')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle"></h1>

        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <form method="post" action="{{ route('financeiro.gasto.store') }}" autocomplete="off">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Novo gasto</h5>
                        </div>
                        <div class="card-body">
                            <input type="text"  step=".01" name="descricao" maxlength='255' class="form-control" placeholder="Descrição do gasto">
                        </div>
                        <div class="card-body">
                            <input type="number"  step=".01" name="custo" maxlength='255' class="form-control" placeholder="Valor do custo">
                        </div>
                        <div class="card-body">
                            <input type="date" name="data" maxlength='255' class="form-control" placeholder="Data" value="{{date('Y-m-d')}}">
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
