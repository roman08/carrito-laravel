@extends('layout.application')

@section('content')
	<div class="container text-center">
		<div class="page-header">
			<h1><i class="fa fa-shopping-cart"></i> Detalle del producto </h1>
		</div>
		<div class="row no-margin">
			<div class="col-md-6">
				<div class="product-block">
					<img src="{{ asset('images/products/' . $product->image) }}" class="img-responsive">
				</div>
			</div>
			<div class="col-md-6">
				<div class="product-block panel large-padding" style="padding: 10px 15px;">
					<h3>{{ $product->name }}</h3>
					<div class="product-info">
						<p>{{ $product->description }}</p>
						<h3>
							<span class="label label-success">Precio: ${{ $product->price }}</span>
						</h3>
						<p>
							<a href="{{ route('cart.add', $product->slug) }}" class="btn btn-warning btn-block">La quiero</a>
						</p>
					</div>
				</div>
			</div>
		</div><hr>
		<p>
			<a href="{{ route('welcome.index') }}" class="btn btn-primary">
				<i class="fa fa-chevron-circle-left"></i> Regresar
			</a>
		</p>
	</div>
@stop