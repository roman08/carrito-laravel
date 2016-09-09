@extends('admin.template')

@section('content')
	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-shopping-cart">
					CATEGORÍAS <a href="{{ route('admin.categories.create') }}" class="btn btn-warning"><i class="fa fa-plus-circle"></i> Categoría</a>
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
							<th class="text-center">Descripción</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($categories as $category)
							<tr>
								<td>
									<a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-primary">
										<i class="fa fa-pencil-square"></i>
									</a>
								</td>
								<td>
									<a href="{{ route('admin.categories.destroy', $category->id) }}" class="btn btn-danger">
										<i class="fa fa-trash"></i>
									</a>
								</td>
								<td>{{ $category->name }}</td>
								<td>{{ $category->description }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@stop