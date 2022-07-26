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
}
