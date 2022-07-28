<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    protected static function booted()
    {
        static::retrieved(function($comment){
        echo $comment->rating;
        });
    }

    //change Rating
//    public function getRatingAttribute($value)
//    {
//        return $value + 10;
//    }

    public function getWhoWhatAttribute()
    {
        return "user {$this->user_id} rates {$this->rating}";
    }

    public function setRatingAttribute($value)
    {
        $this->attributes['rating'] = $value + 1;
    }

    public function user()
    {
       return $this->belongsTo(User::class,'user_id','id');
    }

    public function country()
    {
        return $this->hasOneThrough(Address::class,User::class,
        'id','user_id','user_id','id')->select('country as name');
    }

    public function commentable()
    {
        return $this->morphTo();
    }
}
