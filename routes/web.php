<?php

use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    $result = Comment::find(1);
//    dump($result->who_what);
////    dump($result->rating);
//    return view('welcome');
//});
Route::get('/', function () {
    $result = Comment::find(1);
    $result->rating = 4;
    $result->save();

    dump($result->rating);
    return view('welcome');
});
