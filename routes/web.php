<?php

use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    $affected = DB::table('rooms')
//    ->where('id',1)
//    ->update(['price'=>222]);
//
//    $affected = DB::table('users')
//    ->where('id',1)
//    ->update(['meta->settings->site_language'=>'es']);
//
//    dump($affected);
//    return view('welcome');
//});
Route::get('/', function () {
//   DB::table('rooms')->where('id','>',10)->delete();
    DB::statement('SET FOREIGN_KEY_CHECKS=0');
    DB::table('rooms')->truncate();
    DB::statement('SET FOREIGN_KEY_CHECKS=1');

    dump();
    return view('welcome');
});
