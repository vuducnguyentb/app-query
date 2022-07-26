<?php

use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
////    $comment = Comment::find(1);
////    $result = $comment->delete();
////    $result = Comment::destroy([1,2]);
//
////    $result= Comment::withTrashed()->get(); //onlyTrashed()
////    $result = Comment::withTrashed()->restore();
//    $result = Comment::where('rating', 1)->forceDelete();
//    dump($result);
//
//    return view('welcome');
//});
Route::get('/', function () {
    $result = Comment::all();
    dump($result);
    return view('welcome');
});
