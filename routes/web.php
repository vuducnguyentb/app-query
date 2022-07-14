<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
//    $user = DB::select('select * from users where id = ?',[1]);
//    $result = DB::select('select * from users where id = ? and name = ?',[1,'Garth Morar']);
//    $result = DB::table('users')->select()->get();
//    DB::transaction(function () {
//       DB::table('users')->where('id',6)->update(['email'=>'none']);
//       DB::table('users')->where('id',5)->update(['email'=>'none@@gmail.com']);

        // try catch block is not necessary as well as DB::rollBack();
//        try {
//            DB::table('users')->delete();
//            $result = DB::table('users')->where('id', 6)->update(['email' => 'none']);
//            if (!$result) {
//                throw new \Exception;
//            }
//        } catch (\Exception $e) {
//            DB::rollBack();
//        }
//    }, 5);

    $users = DB::table('users')->get();
    $comments = DB::table('comments')->get();

    
    return view('welcome');
});
