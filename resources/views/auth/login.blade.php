@extends('layouts.app')

@section('title' , 'Login')
    
@section('content')

   <div class="card">
    <div class="card-header">Log In</div>
    <div class="card-body">
      <div class="row justify-content-center align-items-center">
        <div class="col-auto">
      <form method="POST" class="form-horizontal">
        @csrf
        <div class="col-sm-12 mb-3">
          <input type="email" class="form-control" id="exampleInputEmail1" name='email' aria-describedby="emailHelp" placeholder="E-Mail">
        </div>
      
        <div class="col-sm-12 mb-3">
          <input type="password" class="form-control" id="exampleInputPassword1" name='password' placeholder="Password">
        </div>
        @error('message')
          <div class="col-sm-12 alert alert-danger">
                  Error
          </div>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
    </div>
</div>



@endsection