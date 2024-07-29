@extends('layouts.html', ['title' => __('SISCOP')])

@section('app')

    <div class="min-vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12">
            <div class="d-flex align-content-center gap-3 mb-5">
                <!-- <img src="{{url('img/CASPD.svg')}}" style="height: 2rem;" alt=""> -->
                <span style="font-family: 'Poppins'; font-weight: 600; font-size: 28px;" class="text-primary">SISTEMA DE VENDAS</span>
            </div>

            <h1 style="font-family: 'Poppins', sans-serif; font-weight: 600;" class="text-dark">Entre na sua conta.</h1>
            <p>Bem vindo(a) de volta! Utilize suas credenciais para acessar o sistema.</p>

            <form method="POST" action="{{ route('post_login') }}" autocomplete="off">
                @csrf
                <div>
                    <div>
                        <div class="d-flex flex-column gap-3">
                            <div class="mb-3">
                                <label class="form-label font-weight-bold">Login</label>
                                <div class="input-group flex-nowrap">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping">
                                            {{-- <i data-feather="user"></i> --}}
                                            E-mail
                                        </span>
                                    </div>
                                    <input id="email" placeholder="E-mail" class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label font-weight-bold">Senha</label>
                                <div class="input-group flex-nowrap">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping">
                                            {{-- <i data-feather="lock"></i> --}}
                                            Senha
                                        </span>
                                    </div>
                                    <input id="password" class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Digite a sua senha" required autocomplete="current-password" />
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3 d-flex justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        Lembrar-se de mim
                                    </label>
                                </div>
                                <div>
                                    <a href="#">
                                        Esqueceu sua senha?
                                    </a>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">
                                Entrar
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
