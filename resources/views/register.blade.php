@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-md-4 offset-md-4">
        <form action="register" method="POST">
          @csrf
     <div class="mb-3">
    <label class="form-label">User Name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter Username">
    </div>
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" placeholder="Enter email">
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>
        </div>
    </div>
</div>
@endsection 