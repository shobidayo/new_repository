<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1> Blog Name</h1>
        <a href ="/posts/create">create</a> <!--create.brade.phphで表示できるように導線を追加した-->
        <div class = "posts"> <!--Postcontroller.phpでwith（）変数名にpostsを設定したのでここで使える-->
            @foreach ($posts as $post)
                <div class='post'>
                    <a href = "/posts/{{ $post->id}}"><h2 class='title'>{{ $post->title }}</h2></a>
                    <p class='body'>{{ $post->body }}</p>
                    <h3 class ="title">{{$post->title}}</h3>
                    <p class = "body">{{$post->body}}</p>
                    <h4 class = "title">{{$post->title}}</h4>
                    <p class = "body">{{$post ->body}}</p>
                </div>
            @endforeach
        </div>
        <div class = "paginate">
            {{ $posts->links() }}
        </div>
    </body>
</html>
