<?php

use App\Models\Address;
use App\Models\Comment;
use App\Models\Company;
use App\Models\Room;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
//    $result = User::find(1)->comments()
//    ->where('rating','>',3)
//    ->orWhere('rating','>',2)
//    ->get();

//    $result = User::find(1)->comments()
//        ->where(function ($query) {
//            return $query->where('rating', '>', 3)
//                ->orWhere('rating', '<', 2);
//        })
//        ->get();

//    $result = User::has('comments','>=',2)->get();
//    $result = Comment::has('user.address')->get();
        $result = User::withCount('comments')->get();
    dump($result);
    return view('welcome');
});
