<?php

use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    $result = DB::table('comments')
//    ->selectRaw('count(user_id) as number_of_comments, users.name')
//    ->join('users','users.id','=','comments.user_id')
//    ->groupBy('user_id')
//    ->get();
//    //whereRaw / orWhereRaw
//    //havingRaw / orHavingRaw
//    //orderByRaw
//    //groupByRaw
//    //orderByRaw
//
//    dump($result);
//    return view('welcome');
//});
Route::get('/', function () {
    $result = DB::table('comments')
    ->latest() // created_at default
    ->first()
    ;

    $result = DB::table('comments')
    ->selectRaw('count(id) as number_of_3starts_comments, rating')
    ->groupBy('rating')
    ->having('rating','=',3)
    ->get();

    $result = DB::table('comments')
    ->skip(5)
    ->take(5)
    ->get();

    dump($result);
    return view('welcome');
});
