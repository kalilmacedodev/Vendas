<div class="width hidden border-right" id="collapseWidthExample" data-toggle="true" style="width:16%;">
    <nav class="sidebar">
        <div class="sidebar-content">
            <ul class="sidebar-nav p-2">
                <li  class="sidebar-header" style="list-style-type:none">
                    <a>
                        <div class="d-flex align-content-center gap-3 mt-1">
                            <span style="font-family: 'Poppins'; font-weight: 600; font-size: 28px;" class="text-primary">VENDAS</span>
                        </div>
                    </a>
                </li>

                <div>
                    <div>
                        <hr>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{route('home')}}">
                                <i class="align-middle" data-feather="chevron-right"></i> <span class="align-middle">HOME</span>
                            </a>
                        </li>

                        {{-- <li class="sidebar-item">
                            <a class="sidebar-link" href="{{route('almoxarifado.index')}}">
                                <i class="align-middle" data-feather="chevron-right"></i> <span class="align-middle">Almoxarifado</span>
                            </a>
                        </li> --}}
                        <hr>

                        <li class="mb-2 sidebar-item">
                            <a class="sidebar-link" data-toggle="collapse" href="#collapseAlmoxarifado" role="button" aria-expanded="false" aria-controls="collapseAlmoxarifado">
                                {{-- <i class="align-middle" data-feather="chevron-right"></i> <span class="@if(request()->routeIs('almoxarifado.*') == true){{'text-secondary'}}@endif align-middle">ALMOXARIFADO</span> --}}
                                <i class="align-middle" data-feather="chevron-right"></i> <span class="align-middle">ALMOXARIFADO</span>
                            </a>
                            <ul class="mt-3 collapse nav flex-column ms-1" id="collapseAlmoxarifado" style="overflow: hidden">
                                <li class="w-100">
                                    <a href="{{route('almoxarifado.produto.index')}}" class="mb-1 btn btn-primary w-75">
                                        <i class="align-middle" data-feather="package"></i>
                                        <span class="d-none d-sm-inline">Produtos</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('almoxarifado.entrada.index')}}" class="mb-1 btn btn-primary w-75">
                                        <i class="mr-1 align-middle" data-feather="log-in"></i>
                                        <span class="d-none d-sm-inline">Entrada de Produtos</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('almoxarifado.saida.index')}}" class="mb-1 btn btn-primary w-75">
                                        <i class="mr-1 align-middle" data-feather="log-out"></i>
                                        <span class="d-none d-sm-inline">Saída de Produtos</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <hr>

                        <li class="mb-2 sidebar-item">
                            <a class="sidebar-link" data-toggle="collapse" href="#collapseFinanceiro" role="button" aria-expanded="false" aria-controls="collapseFinanceiro">
                                <i class="align-middle" data-feather="chevron-right"></i> <span class="align-middle">FINANCEIRO</span>
                            </a>
                            <ul class="mt-3 collapse nav flex-column ms-1" id="collapseFinanceiro" style="overflow: hidden">
                                <li class="w-100">
                                    <a href="{{route('financeiro.venda.index')}}" class="mb-1 btn btn-primary w-75"> <span class="d-none d-sm-inline">Vendas</span></a>
                                </li>
                                <li>
                                    <a href="{{route('financeiro.gasto.index')}}" class="mb-1 btn btn-primary w-75"> <span class="d-none d-sm-inline">Gastos</span></a>
                                </li>
                                <li>
                                    <a href="{{route('financeiro.cliente.index')}}" class="mb-1 btn btn-primary w-75"> <span class="d-none d-sm-inline">Clientes</span></a>
                                </li>
                            </ul>
                        </li>

                        <hr>

                        <li class="mb-2 sidebar-item">
                            <a class="sidebar-link" data-toggle="collapse" href="#collapseSeguranca" role="button" aria-expanded="false" aria-controls="collapseSeguranca">
                                <i class="align-middle" data-feather="chevron-right"></i> <span class="align-middle">SEGURANÇA</span>
                            </a>
                            <ul class="mt-3 collapse nav flex-column ms-1" id="collapseSeguranca" style="overflow: hidden">
                                <li class="w-100">
                                    <a href="{{route('seguranca.user.index')}}" class="mb-1 btn btn-primary w-75"> <span class="d-none d-sm-inline">Usuários</span></a>
                                </li>
                                {{-- <li>
                                    <a href="{{route('financeiro.gasto.index')}}" class="nav-link px-0"> <span class="d-none d-sm-inline">Gastos</span></a>
                                </li>
                                <li>
                                    <a href="{{route('financeiro.cliente.index')}}" class="nav-link px-0"> <span class="d-none d-sm-inline">Clientes</span></a>
                                </li> --}}
                            </ul>
                        </li>


                    </div>
                </div>

            </ul>

        </div>
    </nav>
</div>


