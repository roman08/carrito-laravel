@extends('admin.template')
@section('content')
	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-shopping-cart"></i>
				USUARIOS <small>[Agregar usuarios]</small>
			</h1>
		</div>
		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<div class="page">
					@include('admin.partials.errors')
					{!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}
						<div class="form-group">
							<label for="name">Nombre:</label>
							{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el nombre...']) !!}
						</div>
						<div class="form-group">
							<label for="description">Apellido:</label>
							{!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el apellido']) !!}
						</div>
						<div class="form-group">
							<label for="email">Correro electronico:</label>
							{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el correo electronico..']) !!}
						</div>
						<div class="form-group">
							<label for="username">Usuario:</label>
							{!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el nombre de usuario..']) !!}
						</div>
						<div class="form-group">
							<label for="password">Contraseña:</label>
							{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ingresa la contraseña...']) !!}
						</div>
						<div class="form-group">
							<label for="address">Residencia (Calle):</label>
							{!! Form::textarea('address', null, ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							<label for="type">Tipo:</label>
							{!! Form::select('type', ['normal' => 'Normal', 'editor' => 'Editor', 'admin' => 'Admin']) !!}
						</div>
						<div class="form-group">
							{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
							<a href="{{ route('admin.categories.index') }}" class="btn btn-warning">Regresar</a>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@stop