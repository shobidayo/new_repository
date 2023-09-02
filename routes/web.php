<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;  //外部にあるPostControllerクラスをインポート。

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[PostController::class,'index']);
Route::get('posts/create',[PostController::class,'create']);
//新規作成画面の表示は、getリクエストの'/'','posts','/','create'で、Postを新規作成する画面を取得する。

Route::get('/posts/{post}',[PostController::class,'show']);
//今回は特定の記事を表示したいので、IDをURLに含めてあげる。そして、｛Post｝としてあげることで
//動的に変化し、中にはIDの値がはいる。REST思想に従うとURLは扱うデータ名を入れたいので/postsとしておく

Route::post('/posts',[PostController::class,'store']);
//いままではgetと定義していたが、データを渡すアクセスを行うので、postと定義している。
//また、<form action = "/posts" method ="POST">を受け取った時に対応するメソッド。
Route::get('/posts/{post}/edit',[PostController::class,'edit']);
Route::put('/posts/{post}',[PostController::class,'update']);