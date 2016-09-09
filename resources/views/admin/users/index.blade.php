@extends('admin.template')

@section('content')
	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-shopping-cart">
					USUARIOS <a href="{{ route('admin.users.create') }}" class="btn btn-warning"><i class="fa fa-plus-circle"></i> USUARIOS</a>
				</i>	
			</h1>
		</div>
		<div class="page">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th class="text-center">Editar</th>
							<th class="text-center">Eliminar</th>
							<th class="text-center">Nombre</th>
							<th class="text-center">Apellido</th>
							<th class="text-center">Username</th>
							<th class="text-center">Tipo</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($users as $user)
							<tr>
								<td>
									<a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary">
										<i class="fa fa-pencil-square"></i>
									</a>
								</td>
								<td>
									<a href="{{ route('admin.users.destroy', $user->id) }}" class="btn btn-danger">
										<i class="fa fa-trash"></i>
									</a>
								</td>
								<td>{{ $user->name }}</td>
								<td>{{ $user->last_name }}</td>
								<td>{{ $user->username }}</td>
								<td>{{ $user->type }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@stop