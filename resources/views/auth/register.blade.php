@extends('layouts.app')

@section('title' , 'Register')
    
@section('content')

<div class="card">
  <div class="card-header">Register</div>
  <div class="card-body">
    <div class="row justify-content-center align-items-center">
      <div class="col-auto">
    <form method="POST" class="form-horizontal">
      @csrf
      <div class="col-sm-12 mb-3">
        <input type="text" class="form-control" id="exampleInputEmail1" name='name' aria-describedby="emailHelp" placeholder="Name">
      </div>

      <div class="col-sm-12 mb-3">
        <input type="email" class="form-control" id="exampleInputEmail1" name='email' aria-describedby="emailHelp" placeholder="E-Mail">
      </div>

      <div class="col-sm-12 mb-3">
        <input type="password" class="form-control" id="exampleInputPassword1" name='password' placeholder="Password">
      </div>

      <div class="col-sm-12 mb-3">
        <input type="password" class="form-control" id="password_confirmation" name='password_confirmation' placeholder="Password Confirmation">
      </div>

        <div class="col-sm-12 alert alert-danger">
                Error
        </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
  </div>
</div>

@endsection