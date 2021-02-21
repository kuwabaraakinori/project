@extends('layouts.app')
@section('content')
<div class="col-sm-12">
  <p style="text-align: center; font-size:32px;">ログイン</p>
</div>
<form action="{{route('login.post')}}" method="post">
  @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{old('email')}}">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <p class="mt-2"><a href="{{route('signup.get')}}">New User? Please click this.</a></p>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection