<?php

use App\Models\Address;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $result = Address::find(1);
    dump($result->user->name);

    return view('welcome');
});
