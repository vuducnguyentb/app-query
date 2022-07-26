<?php

use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    $users = DB::table('users')
//    ->select('name');
//
//    $result = DB::table('cities')
//    ->select('name')
//    ->union($users)
//    ->get();
//
//    $comments = DB::table('comments')
//    ->select('rating as rating_or_room_id','id',DB::raw
//    ('"comments" as type_of_activity'))
//    ->where('user_id',2);
//    $result = DB::table('reservations')
//    ->select('room_id as rating_or_room_id','id',DB::raw
//    ('"reservations" as type_of_activity'))
//    ->union($comments)
//    ->where('user_id',2)
//    ->get();
//
//  return view('welcome');
//});

Route::get('/', function () {
    DB::table('rooms')->insert([
        ['room_number' => 1, 'room_size' => 1, 'price' => 1, 'description' => 'new description 1'],
    ]);

    $id = DB::table('rooms')->insertGetId(
        ['room_number' => 3, 'room_size' => 3, 'price' => 3, 'description' => 'new description 3'],
    );

    dump($id);
    return view('welcome');
});
