<header>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a href="{{ route('welcome.index') }}" class="navbar-brand main-title">Tiendus</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<p class="navbar-text">Laravel Store</p>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{ route('cart.show') }}"><i class="fa fa-shopping-cart"></i></a></li>
					<li><a href="">Contacto</a></li>
					<li><a href="">Conocenos</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							Categorías
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							@foreach ($categories as $category)
								<li><a href="{{ route('welcome.search.category', $category->slug) }}">{{ $category->name }}</a></li>
							@endforeach
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-user"></i>
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							@if (Auth::user())
								<li>
									<a href="{{ route('users.logout') }}">Salir</a>
								</li>
								@include('partials.admin')
							@else
								<li>
									<a href="{{ route('users.login') }}">Iniciar Sesión</a>
								</li>
								<li>
									<a href="{{ route('users.register') }}">Registrarse</a>
								</li>
							@endif
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>