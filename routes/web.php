<?php

use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    $result = Comment::all()->toArray();
//    $result = Comment::all()->toJson();
//    $comments = Comment::all();
//    $result = $comments->reject(function($comment){
//    return $comment->rating <3;
//    });
//    $result = $comments->diff($result);
//    return view('welcome');
//});
Route::get('/', function () {
    $comment = new Comment();
    $comment->user_id = 1;
    $comment->rating = 5;
    $comment->content = 'comment content';
    $result=$comment->save();

    $result = Comment::create([
    'user_id'=>1,
    'rating'=>5,
    'content'=>'comment content'
    ]);

    dump($result);
    return view('welcome');
});
