<form action="{{ route('carts.store') }}" method="post" class="form-inline">
	{{ csrf_field() }}
	<input type="hidden" name="product_id" value="{{ $product->id }}">
	<button type="button" class="btn btn-outline-dark" onclick="addToCart({{ $product->id }})"><i class="fa fa-plus"></i>Add to cart</button>
</form>