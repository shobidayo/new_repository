<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class Postcontroller extends Controller
{
    public function index(Post $post) //インポートしたPostをインスタンス化して$postとして使用。
    {
    return view('posts.index')->with(['posts' => $post->getPaginateByLimit(2)]);
    //blade内で使う変数'posts'と設定。'posts'の中身にget(リソースデータの取得)を使い、
    //インスタンス化した$postを代入。また、with(変数名=>値としている)ので、index.blade.phpで連想配列のforeachが使える
    }
    public function show(Post $post) //web.phpの{post}'に入った内容がShow関数の引数に渡される
    {
        return view('posts/show')->with(['post' => $post]);
        //こちらで返すViewは、Show.blade.phpのwithメソッドを使い、'post'という名前で＄postのデータを渡す
    }
    public function create()
    {
        return view ('posts.create'); //特に引数など受け取らないので、そのまま受け取るようにしている
    }
}
?>