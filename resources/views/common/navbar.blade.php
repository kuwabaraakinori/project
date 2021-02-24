<div class="topbar">
  <div class="container">
      <nav class="navbar navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="/">Task_TodoList</a>
            <div class="pos-f-t">
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Contents
                </button>
                @if (Auth::check())
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <a href="{{route('user.index')}}">{{Auth::user()->name}}</a>
                    <button class="dropdown-item" type="button"><a href="{{route('content.create')}}">新規投稿</a></button>
                    <button class="dropdown-item" type="button"><a href="{{route('logout')}}">ログアウト</a></button>
                </div>
                @else
                  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <button class="dropdown-item" type="button"><a href="{{route('signup.get')}}">新規登録</a></button>
                    <button class="dropdown-item" type="button"><a href="{{route('login')}}">ログイン</a></button>
                  </div>
                @endif
              </div>
            </div>
          </div>
      </nav>
  </div>
</div>