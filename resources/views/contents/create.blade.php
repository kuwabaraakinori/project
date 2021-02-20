@extends('layouts.app')
@section('content')
<div class="container">
  <div class="title">
    <p><h3 style="text-align: center;">新規投稿</h3></p>
  </div>
  <div class="col-sm8">
    <form action="{{route('content.store')}}" method="POST">
      @csrf
      <div class="form-group">
        <label for="text1">Title</label>
        <input type="text" id="text1" class="form-control" name="title" value="{{old('title')}}">
      </div>
      <div class="form-group">
        <label for="passwd1">span</label>
        <input type="text" class="form-control" id="date_sample" name="span" value="{{old('span')}}">
      </div>
      <div class="form-group">
        <label for="textarea1">Content</label>
        <textarea id="textarea1" class="form-control" name="content" value={{old('content')}}></textarea>
      </div>
      <input type="hidden" name="user_id" value="{{Auth::id()}}">
      <button type="submit" class="btn btn-primary btn-lg btn-block">投稿</button>
      <button type="submit" class="btn btn-success btn-lg btn-block">戻る</button>
    </form>
  </div>
</div>
@endsection