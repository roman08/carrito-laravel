@extends('admin.template')

@section('content')
	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-shopping-cart">
					PRODUCTOS <a href="{{ route('admin.products.create') }}" class="btn btn-warning"><i class="fa fa-plus-circle"></i> PRODUCTOS</a>
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
							<th class="text-center">Imagen</th>
							<th class="text-center">Nombre</th>
							<th class="text-center">Descripción</th>
							<th class="text-center">Precio</th>
							<th class="text-center">Categoría</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($products as $product)
							<tr>
								<td>
									<a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-primary">
										<i class="fa fa-pencil-square"></i>
									</a>
								</td>
								<td>
									<a href="{{ route('admin.categories.destroy', $product->id) }}" class="btn btn-danger">
										<i class="fa fa-trash"></i>
									</a>
								</td>
								<td>
									<img src="{{ asset('images/products/' . $product->image ) }}" style="width: 50px;">
								</td>
								<td>{{ $product->name }}</td>
								<td>{{ $product->extract }}</td>
								<td>{{ $product->price }}</td>
								<td>{{ $product->category->name }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@stop