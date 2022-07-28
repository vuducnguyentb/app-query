<?php

use App\Models\Address;
use App\Models\Comment;
use App\Models\Company;
use App\Models\Room;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
//    $result = User::find(3);
//    dump($result->image);
//        $result = Room::find(10);
//        dump($result->comments);
    $result = User::find(1);
    dump($result->likedImages);
    return view('welcome');
});
