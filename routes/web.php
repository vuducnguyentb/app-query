<?php

use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    $room_id = 1;
//    $result = DB::table('reservations')
//        ->when($room_id, function ($query, $room_id) {
//            return $query->where('room_id', $room_id);
//        })
//        ->get();
//
//    $sortBy = 'room_number';
//    $result = DB::table('rooms')
//        ->when($sortBy, function ($query, $sortBy) {
//            return $query->orderBy($sortBy);
//        })
//        ->get();
////    $result = DB::table('comments')->orderBy('id')->chunk(2, function ($comments) {
////        foreach ($comments as $key => $comment) {
////            if ($comment->id == 5) return false;
////        }
////    });
//    $result = DB::table('comments')->orderBy('id')->chunkById(5, function ($comments) {
//        foreach ($comments as $key => $comment) {
//            DB::table('comments')
//            ->where('id',$comment->id)
//            ->update(['rating'=>null]);
//            }
//    });
//
//    dump($result);
//    return view('welcome');
//});
Route::get('/', function () {
    $result = DB::table('reservations')
    ->join('rooms','reservations.room_id','=','rooms.id')
    ->join('users','reservations.user_id','=','users.id')
    ->where('rooms.id','>',3)
    ->
    dump($result);
    return view('welcome');
});
