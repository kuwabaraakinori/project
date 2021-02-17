@extends('layouts.app')
@section('content')
<div class="container">
  <div class="title">
    <p><h3 style="text-align: center;">新規投稿</h3></p>
  </div>
  <form action="{{route('content.store')}}" method="post">
    @csrf
    <div class="form-group">
      <label for="text1">Title</label>
      <input type="text" id="text1" class="form-control" name="title">
    </div>
    <div class="form-group">
      <label for="passwd1">span</label>
      <input type="text" class="form-control" id="date_sample" name="span">
    </div>
    <div class="form-group">
      <label for="textarea1">Content</label>
      <textarea id="textarea1" class="form-control" name="content"></textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-lg btn-block">投稿</button>
    <button type="submit" class="btn btn-success btn-lg btn-block">戻る</button>
  </form>
</div>
@endsection