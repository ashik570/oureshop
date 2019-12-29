@extends('backend.layouts.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">

  <div class="card">
    <div class="card-header">
      Edit Brand
    </div>
    <div class="card-body">
      <form action="{{ route('admin.brand.update',$brand->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }} 
        @include('backend.partials.messages')
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" value="{{ $brand->name }}">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Description (optional)</label>
    <textarea name="description" rows="8" cols="80" class="form-control">{!! $brand->name !!}</textarea>
  </div>

  <div class="form-group">

      <label for="image">Brand Old Image</label> <br>

      <img src="{!! asset('img/brands/'.$brand->image) !!}" width="100" alt=""> <br>

      <label for="oldimage">Brand New Image (optional)</label>

      <input type="file" name="image" class="form-control" id="image">

  </div>
    

  
  <button type="submit" class="btn btn-success">Update Brand</button>
</form>
    </div>
  </div>
  </div>
</div>

@endsection

















































