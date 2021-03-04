@extends('layouts.app')
@section('content')
   <div class="user_name">
         <p>{{Auth::user()->name}}</p>
   </div>
   {{Auth::check()}}
   <div class="container">
        @foreach ($users as $user)
        <div class="users_index">
            <div class="col-sm3">
                {{--ここに顔写真などを添付する--}}
            </div>
            <div class="col-sm-9">
                <div class="media_body">
                    <p>{{$user->name}}</p>
                </div>
            </div>
        </div>
        @endforeach
   </div>
@endsection