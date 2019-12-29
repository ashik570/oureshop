@extends('backend.layouts.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">

  <div class="card">
    <div class="card-header">
      Add Brand
    </div>
    <div class="card-body">
      <form action="{{ route('admin.brand.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }} 
        @include('backend.partials.messages')
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Brand
     Name">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <textarea name="description" rows="8" cols="80" class="form-control"></textarea>
  </div>


  <div class="form-group">

      <label for="image">Brand Image (optional)</label>

      <input type="file" name="image" class="form-control" id="image">

  </div>
    

  
  <button type="submit" class="btn btn-primary">Add Brand</button>
</form>
    </div>
  </div>
  </div>
</div>

@endsection
















































