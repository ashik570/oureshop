@extends('backend.layouts.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">

  <div class="card">
    <div class="card-header">
      Add Product
    </div>
    <div class="card-body">
      <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }} 
        @include('backend.partials.messages')
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <textarea name="description" rows="8" cols="80" class="form-control"></textarea>
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="number" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Price">
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Quantity</label>
    <input type="number" name="quantity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Quantity">
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Select Category</label>
    <select class="form-control" name="category_id">
      <option value="">Please select a categroy for the product</option>
      @foreach(App\Models\Category::orderBy('name', 'asc')->where('parent_id', NULL)->get() as $parent)
        <option value="{{ $parent->id }}">{{ $parent->name }}</option>

        @foreach(App\Models\Category::orderBy('name', 'asc')->where('parent_id', $parent->id)->get() as $child)
        <option value="{{ $child->id }}"> ------> {{ $child->name }}</option>
        @endforeach

      @endforeach
    </select>
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Select Brand</label>
    <select class="form-control" name="brand_id">
      <option value="">Please select a brand for the product</option>
      @foreach(App\Models\Brand::orderBy('name', 'asc')->get() as $brand)
        <option value="{{ $brand->id }}">{{ $brand->name }}</option>

      @endforeach
    </select>
  </div>

   <div class="form-group">
    <label for="product_image">Product Image</label>
    <div class="row">
      <div class="col-md-4">
        <input type="file" name="product_image[]" class="form-control" id="product_image">
      </div>
      <div class="col-md-4">
        <input type="file" name="product_image[]" class="form-control" id="product_image">
      </div>
      <div class="col-md-4">
        <input type="file" name="product_image[]" class="form-control" id="product_image">
      </div>
      <div class="col-md-4">
        <input type="file" name="product_image[]" class="form-control" id="product_image">
      </div>
      <div class="col-md-4">
        <input type="file" name="product_image[]" class="form-control" id="product_image">
      </div>
    </div>
    
  </div>

  
  <button type="submit" class="btn btn-primary">Add Product</button>
</form>
    </div>
  </div>
  </div>
</div>

@endsection

















































