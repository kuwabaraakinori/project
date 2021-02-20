@extends('layouts.app')
@section('content')
<div class="col-sm-12">
  <p style="text-align: center; font-size:32px;">新規登録</p>
</div>
<form action="{{route('signup.post')}}" method="post">
  @csrf
  <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="myname" value="{{old('myname')}}">
      <small id="emailHelp" class="form-text text-muted">Please write down your name</small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{old('email')}}">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password Confirm</label>
      <input type="password" class="form-control" id='exampleInputPassword1' placeholder="Password Confirm" name="password_confirmation">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection