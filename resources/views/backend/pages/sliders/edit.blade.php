@extends('backend.layouts.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">

  <div class="card">
    <div class="card-header">
      Edit Division
    </div>
    <div class="card-body">
      <form action="{{ route('admin.division.update',$division->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }} 
        @include('backend.partials.messages')
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" value="{{ $division->name }}">
  </div>

  <div class="form-group">
    <label for="priority">Priority</label>
    <input name="priority" id="priority" type="text" class="form-control">
  </div>

    

  
  <button type="submit" class="btn btn-success">Update Division</button>
</form>
    </div>
  </div>
  </div>
</div>

@endsection

















































