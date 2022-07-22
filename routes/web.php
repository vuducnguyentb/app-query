<?php

use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


//Route::get('/', function () {
//    $result = DB::table('users')
////    ->whereJsonContains('meta->skills','Laravel')
//    ->where('meta->settings->site_language','en')
//    ->get();
//
//    return view('welcome');
//});
Route::get('/', function () {

//    $result = DB::statement('ALTER TABLE comments ADD FULLTEXT fulltext_index(content)'); //innoDB - MySQL >= 5.6
    $result = DB::table('comments')
        ->whereRaw("MATCH(content) AGAINST(? IN BOOLEAN MODE)",
            ['repellendus']
        )
        ->get();
//        $result = DB::table('comments')
//        ->where('content','like','%repellendus%')
//        ->get();
    $result = DB::table('comments')
        ->whereRaw("MATCH(content) AGAINST(? IN BOOLEAN MODE)",
            ['+repellendus -est']
        )
        ->get();

    dump($result);
    return view('welcome');
});

