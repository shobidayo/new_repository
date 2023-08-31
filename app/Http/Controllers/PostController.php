<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class Postcontroller extends Controller
{
    public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
    {
    return view('posts.index')-> with (['posts' => $post->get()]); 
    //blade内で使う変数'posts'と設定。'posts'の中身にget(リソースデータの取得)を使い、
    //インスタンス化した$postを代入。また、with(変数名=>値としている)ので、index.blade.phpで連想配列のforeachが使える
    }
}
?>