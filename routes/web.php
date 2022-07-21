<?php

use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
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

//    $users = DB::table('users')->get();
//    $comments = DB::table('comments')->get();

//    Comment::factory()->count(3)->create();

//        $comments = DB::table('comments')->get();
//    $users = DB::table('users')->pluck('email');
//    $users = DB::table('users')->where('name','Ansley Feest')->first();
//    $users = DB::table('users')->where('name','Ansley Feest')->value('email');
//    $users = DB::table('users')->find(1);
//    $comments = DB::table('comments')->select('content as comment_content')->get();
//    $comments = DB::table('comments')->select('user_id')->distinct()->get();
//    $comments = DB::table('comments')->count();
//    $comments = DB::table('comments')->max('user_id');
//    $comments = DB::table('comments')->sum('user_id');
//    $comments = DB::table('comments')->where('content','content')->doesntExist();
//    $result = DB::table('rooms')->get();
//    $result = DB::table('rooms')->where('price', '<', 200)->get();
//    $result = DB::table('rooms')->where(
//        [
//            ['room_size', 2],
//            ['price', '<', 400]
//        ]
//    )->get();
//
//    $result = DB::table('rooms')->where('room_size', '2')
//        ->orWhere('price', '<', '400')
//        ->get();
//    $result = DB::table('rooms')->where('price', '<', '400')
//        ->orWhere(function ($query) {
//            $query->where('room_size', '>', '1')
//                ->where('room_size', '<', '4');
//        })
//        ->get();
//
//
//    dd($result);
//    return view('welcome');
//});

Route::get('/', function () {
    $result = DB::table('rooms')
        ->whereBetween('room_size', [1, 3]) //whereNotBetween
        ->get();
    $result = DB::table('rooms')
        ->whereNotIn('id', [1,2, 3]) //whereIn
        ->get();
    //whereNull()

    $result = DB::table('users')
        ->whereExists(function($query){
            $query->select('id')
                ->from('reservations')
                ->whereRaw('reservations.user_id = user_id')
                ->where('check_in','=','2022-07-21')
                ->limit(1);
        })
        ->get();


    return view('welcome');
});
