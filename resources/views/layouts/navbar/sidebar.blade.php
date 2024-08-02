<div class="width hidden border-right" id="collapseWidthExample" data-toggle="true" style="width:15%;">
    <nav class="sidebar">
        <div class="sidebar-content">
            <ul class="sidebar-nav p-2">
                <li class="sidebar-header" style="list-style-type:none">
                    <a>
                        <div class="d-flex align-content-center gap-3 mt-1">
                            <span style="font-family: 'Poppins'; font-weight: 600; font-size: 28px;" class="text-primary">VENDAS</span>
                        </div>
                    </a>
                </li>

                    {{-- <div> --}}
                <hr>
                <li class="sidebar-item">
                    <a class="sidebar-link" style="text-decoration: none;" href="{{route('home')}}">
                        <i class="align-middle" data-feather="chevron-right"></i>
                        <span class="align-middle">HOME</span>
                    </a>
                </li>
                <hr>

                <li class="mb-2 sidebar-item">
                    <a class="sidebar-link" style="text-decoration: none;" data-toggle="collapse" href="#collapseAlmoxarifado" role="button" aria-expanded="false" aria-controls="collapseAlmoxarifado">
                        {{-- <i class="align-middle" data-feather="chevron-right"></i> <span class="@if(request()->routeIs('almoxarifado.*') == true){{'text-secondary'}}@endif align-middle">ALMOXARIFADO</span> --}}
                        <i class="align-middle" data-feather="chevron-right"></i> <span class="align-middle">ALMOXARIFADO</span>
                    </a>
                    <ul class="mt-3 collapse nav flex-column" id="collapseAlmoxarifado" style="overflow: hidden">
                        <li class="w-100">
                            <a href="{{route('almoxarifado.produto.index')}}" class="mb-1 btn btn-primary w-75">
                                <i class="align-middle w-25" data-feather="package"></i>
                                {{-- <div style="height: 500px;border-left: 2px solid" class="d-sm-inline mr-2 ml-2"></div> --}}
                                <span class="d-none d-sm-inline w-75">Produtos</span>
                            </a>
                        </li>
                        <li class="w-100">
                            <a href="{{route('almoxarifado.entrada.index')}}" class="mb-1 btn btn-primary w-75">
                                <i class="align-middle w-25" data-feather="log-in"></i>
                                {{-- <div style="height: 500px;border-left: 2px solid" class="d-sm-inline mr-2 ml-2"></div> --}}
                                <span class="d-none d-sm-inline w-75">Entrada de Produtos</span>
                            </a>
                        </li>
                        <li class="w-100">
                            <a href="{{route('almoxarifado.saida.index')}}" class="mb-1 btn btn-primary w-75">
                                <i class="align-middle w-25" data-feather="log-out"></i>
                                <span class="d-none d-sm-inline w-75">Saída de Produtos</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <hr>

                <li class="mb-2 sidebar-item">
                    <a class="sidebar-link" style="text-decoration: none;" data-toggle="collapse" href="#collapseFinanceiro" role="button" aria-expanded="false" aria-controls="collapseFinanceiro">
                        <i class="align-middle" data-feather="chevron-right"></i> <span class="align-middle">FINANCEIRO</span>
                    </a>
                    <ul class="mt-3 collapse nav flex-column" id="collapseFinanceiro" style="overflow: hidden">
                        <li class="w-100">
                            <a href="{{route('financeiro.venda.index')}}" class="mb-1 btn btn-primary w-75">
                                <i class="align-middle w-25" data-feather="dollar-sign"></i>
                                <span class="d-none d-sm-inline w-75">Vendas</span>
                            </a>
                        </li>
                        <li class="w-100">
                            <a href="{{route('financeiro.gasto.index')}}" class="mb-1 btn btn-primary w-75">
                                <i class="align-middle w-25" data-feather="clipboard"></i>
                                <span class="d-none d-sm-inline w-75">Gastos</span>
                            </a>
                        </li>
                        <li class="w-100">
                            <a href="{{route('financeiro.cliente.index')}}" class="mb-1 btn btn-primary w-75">
                                <i class="align-middle w-25" data-feather="users"></i>
                                <span class="d-none d-sm-inline w-75">Clientes</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <hr>

                <li class="mb-2 sidebar-item">
                    <a class="sidebar-link" style="text-decoration: none;" data-toggle="collapse" href="#collapseSeguranca" role="button" aria-expanded="false" aria-controls="collapseSeguranca">
                        <i class="align-middle" data-feather="chevron-right"></i> <span class="align-middle">SEGURANÇA</span>
                    </a>
                    <ul class="mt-3 collapse nav flex-column" id="collapseSeguranca" style="overflow: hidden">
                        <li class="w-100">
                            <a href="{{route('seguranca.user.index')}}" class="mb-1 btn btn-primary w-75">
                                <i class="align-middle w-25" data-feather="users"></i>
                                <span class="d-none d-sm-inline w-75">Usuários</span>
                            </a>
                        </li>
                        {{-- <li>
                            <a href="{{route('financeiro.gasto.index')}}" class="nav-link px-0"> <span class="d-none d-sm-inline">Gastos</span></a>
                        </li>
                        <li>
                            <a href="{{route('financeiro.cliente.index')}}" class="nav-link px-0"> <span class="d-none d-sm-inline">Clientes</span></a>
                        </li> --}}
                    </ul>
                </li>

                <hr>
                    {{-- </div> --}}

            </ul>

        </div>
    </nav>
</div>


