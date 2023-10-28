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
                    <a href = "">{{ $post->category->name }}</a>
                    <p class='body'>{{ $post->body }}</p>
                        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                        <!--Id=には、投稿ごとに変更したいので、各投稿がもつID（＄post）を指定する。
                        例えば、formが1のIDであれば、form_1という値が指定される。-->
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
                        <!--onclickを押すと、JavaScriptの関数を実行するようにIDなども設定している-->
                    </form>
                </div>
            @endforeach
        </div>
        <div class = "paginate">
            {{ $posts->links() }}
        </div>
        
            <script>
            function deletePost(id) {
            'use strict'

            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
        }
    }

        </script>
        {{ Auth::user()->name }}
    </body>
</html>
