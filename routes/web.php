<?php

use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
////    $result = DB::table('reservations')
////    ->join('rooms','reservations.room_id','=','rooms.id')
////    ->join('users','reservations.user_id','=','users.id')
////    ->where('rooms.id','>',3)
////    ->get();
////
////    $result = DB::table('reservations')
////    ->join('rooms',function ($join){
////        $join->on('reservations.room_id','=','rooms.id')
////        ->where('rooms.id','>',3);
////    })
////        ->join('users',function ($join){
////            $join->on('reservations.user_id','=','users.id')
////                ->where('users.id','>',1);
////    })
////    ->get();
////    $rooms = DB::table('rooms')->where('id', '>', 3);
////    $users = DB::table('users')->where('id', '>', 1);
////    $result = DB::table('reservations')
////        ->joinSub($rooms, 'rooms', function ($join) {
////            $join->on('reservations.room_id', '=', 'rooms.id');
////        })
////        ->joinSub($users, 'users', function ($join) {
////            $join->on('reservations.user_id', '=', 'users.id');
////        })
////        ->get();
//    $result = DB::table('rooms')
//        ->leftJoin('reservations', 'rooms.id', '=', 'reservations.room_id')
//        ->leftJoin('cities', 'reservations.city_id', '=', 'cities.id')
//        ->selectRaw('room_size,cities.name,count(reservations.id) as reservations_count')
//        ->groupBy('room_size', 'cities.name')
//        ->orderByRaw('count(reservations.id) DESC')
//        ->get();
//    $result = DB::table('rooms')
//        ->crossJoin('cities')
//        ->get();
//    $result = DB::table('rooms')
//        ->crossJoin('cities')
//        ->leftJoin('reservations', function ($join) {
//            $join->on('rooms.id', '=', 'reservations.room_id')
//                ->on('cities.id', '=', 'reservations.city_id');
//        })
//        ->selectRaw('count(reservations.id) as reservations_count, room_size, cities.name')
//        ->groupBy('room_size','cities.name')
//        ->orderByRaw('rooms.room_size DESC')
//        ->get();
//
//});
Route::get('/', function () {
    $users = DB::table('users')
    ->select('name');

    $result = DB::table('cities')
    ->select('name')
    ->union($users)
    ->get();
    dump($result);

  return view('welcome');
});
