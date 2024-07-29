@extends('layouts.html', ['title' => __('VENDAS')])

@section('app')

    <div id="app">
        <div class="wrapper d-flex align-items-stretch">
            @include('layouts.navbar.sidebar')
            <div class="main" style="flex: 1;">
                @include('layouts.navbar.navbar')
                <div class="min-vh-100" style="padding: 2em">
                    @yield('content')
                </div>
                @include('layouts.footers.nav')
            </div>
        </div>
    </div>

@endsection
