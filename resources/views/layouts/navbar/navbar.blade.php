<nav class="navbar navbar-expand bg-primary">
	{{-- <a style="border: 0; background: inherit;" data-toggle="collapse" data-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
		<i data-feather="menu" class="text-white"></i>
	</a> --}}

	<div class="navbar-collapse collapse justify-content-end">
        <span class="text-white col-2 justify-align-center">
            Dev
        </span>

		<ul class="navbar-nav navbar-align">
			<div class="dropleft">
				<a class="text-white" style="text-decoration: none;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="align-middle me-1 text-light" data-feather="user"></i>
						{{auth()->user()->nome}}
					<i class="align-middle me-1 text-light" data-feather="chevron-down"></i>
				</a>
				<li class="nav-item dropdown">
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="user"></i> Conta</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Ajuda</a>

						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="{{ route('logout') }}">Sair</a>
					</div>
				</li>
			</div>
		</ul>
	</div>
</nav>
