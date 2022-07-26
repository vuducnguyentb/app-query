<?php

use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
////   DB::table('rooms')->where('id','>',10)->delete();
//    DB::statement('SET FOREIGN_KEY_CHECKS=0');
//    DB::table('rooms')->truncate();
//    DB::statement('SET FOREIGN_KEY_CHECKS=1');
//
//    dump();
//    return view('welcome');
//});
Route::get('/', function () {
    $result = Comment::all()->toArray();
    $result = Comment::all()->toJson();
    $comments = Comment::all();
    $result = $comments->reject(function($comment){
    return $comment->rating <3;
    });
    $result = $comments->diff($result);

    dump($result);
    return view('welcome');
});
