<?php

use App\Models\Address;
use App\Models\Comment;
use App\Models\Room;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

//    $result = Room::where('room_size',3)->get();
//    foreach ($result as $rooms)
//    {
//        foreach ($rooms->cities as $city)
//        {
//            echo $city->name.'<br>';
//            echo $city->pivot->room_id.'<br>';
//        }
//    }
    $result = Comment::find(6);
    dump($result->country->name);
    return view('welcome');
});
