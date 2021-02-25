<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @section('content')
        {{--表示数--}}
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="rounded-pill col-sm  alert-success">
                        <p>タスク総計数</p>
                    </div>
                    <div class="rounded-pill col-sm alert-info">
                        <p>タスク完了数</p>
                    </div>
                    <div class="rounded-pill col-sm alert-danger">
                        <p>タスク未完了数</p>
                    </div>
                </div>
            </div>
        </div>
        @if (count($contents)>0)
            @foreach ($contents as $content)
                <div class="container">
                    <div class="align-self-center">
                        <div class="card" style="width: 18rem;">
                            <img src="/assets/images/picture1.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$content->title}}</h5>
                                <p class="card-text">{{$content->content}}</p>
                                <p class="card-text">{{$content->span}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
        <div class="container">
            <div class="align-self-center">
                <div class="card" style="width: 18rem;">
                    <img src="/assets/images/picture1.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Title</h5>
                    <p class="card-text">I have to go to take a PCR test and if I get positive, I have to extend departure day</p>
                    </div>
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        </div>
        @endif
   @endsection
</body>
</html>