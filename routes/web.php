<?php

use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
////    $result = DB::table('rooms')
////        ->whereBetween('room_size', [1, 3]) //whereNotBetween
////        ->get();
////    $result = DB::table('rooms')
////        ->whereNotIn('id', [1,2, 3]) //whereIn
////        ->get();
////    //whereNull()
////
////    $result = DB::table('users')
////        ->whereExists(function($query){
////            $query->select('id')
////                ->from('reservations')
////                ->whereRaw('reservations.user_id = user_id')
////                ->where('check_in','=','2022-07-21')
////                ->limit(1);
////        })
////        ->get();
//
//    return view('welcome');
//});

Route::get('/', function () {
    $result = DB::table('users')
//    ->whereJsonContains('meta->skills','Laravel')
    ->where('meta->settings->site_language','en')
    ->get();

    return view('welcome');
});
