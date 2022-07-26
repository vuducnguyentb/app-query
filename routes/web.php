<?php

use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    DB::table('rooms')->insert([
//        ['room_number' => 1, 'room_size' => 1, 'price' => 1, 'description' => 'new description 1'],
//    ]);
//
//    $id = DB::table('rooms')->insertGetId(
//        ['room_number' => 3, 'room_size' => 3, 'price' => 3, 'description' => 'new description 3'],
//    );
//
//    return view('welcome');
//});


Route::get('/', function () {
    $affected = DB::table('rooms')
    ->where('id',1)
    ->update(['price'=>222]);

    $affected = DB::table('users')
    ->where('id',1)
    ->update(['meta->settings->site_language'=>'es']);

    dump($affected);
    return view('welcome');
});
