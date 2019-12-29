@extends('frontend.layouts.master')

@section('content')
<div class="container margin-top-20 mb-5 pb-5">
	<div class="row">
		<div class="col-md-4">
			@include('frontend.partials.product-sidebar')
		</div>

		<div class="col-md-8">
			<div class="widget">
				<h3>All Products</h3>
				@include('frontend.pages.product.partials.all_products')
			</div>
		</div>
	</div>
</div>
@endsection
