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
        <form action = "/posts" method ="POST"> <!--こちらのリクエストを受け取ったときに対応するpostcontrollerとメソッドを決める-->
            @csrf
            <div class ="title">
                <h2>Title</h2>
                <input type ="text" name ="post[title]" placeholder ="タイトル" />
            </div>
            
            <div class ="body">
                <h2>Body</h2>
                <textarea name ="post[body]" placeholder="こんにちは"></textarea>
            </div>
            
            <input type ="submit" value ="store" />
        </form>
       
       
        <div class = "footer">
            <a href ="/">戻る</a>
        </div>
    </body>
</html>
