<?php

use App\Models\Address;
use App\Models\Comment;
use App\Models\Company;
use App\Models\Room;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
//    $result = Comment::find(6);
//    dump($result->country->name);
        $result = Company::find(2);
        dump($result->reservations);
    return view('welcome');
});
