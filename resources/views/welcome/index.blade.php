@extends('layout.application')

@section('content')
	<div class="container text-center">
		<div id="products">
			@foreach ($products as $product)
				<div class="product white-panel" style="height: 496px !important;">
					<h3>{{ $product->name }}</h3>
					<img src="{{ asset('images/products/' . $product->image) }}" class="img-responsive img-shirt">
					<div class="product-info">
						<p>{{ $product->extract }}</p>
						<h3><span class="label label-success">Precio: ${{ $product->price }}</span></h3>
						<p>
							<a href="{{ route('cart.add', $product->slug) }}" class="btn btn-warning"><i class="fa fa-cart-plus"></i> La quiero</a>
							<a href="{{ route('products.show', $product->slug) }}" class="btn btn-primary"> <i class="fa fa-chevron-circle-right"></i> Leer mas</a>
						</p>
					</div>
				</div>
			@endforeach
		</div>
	</div>
@stop