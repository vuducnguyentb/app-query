<?php

use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    $comment = new Comment();
//    $comment->user_id = 1;
//    $comment->rating = 5;
//    $comment->content = 'comment content';
//    $result=$comment->save();
//
//    $result = Comment::create([
//        'user_id'=>1,
//        'rating'=>5,
//        'content'=>'comment content'
//    ]);
//
//    return view('welcome');
//});
Route::get('/', function () {
    $comment = Comment::find(1);
    $comment->user_id = 1;
    $comment->rating = 5;
    $comment->content = 'comment content';
    $result=$comment->save();

    $result = Comment::where('price','<',200)
    ->update(['price'=>250]);

    return view('welcome');
});
