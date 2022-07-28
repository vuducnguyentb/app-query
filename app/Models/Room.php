<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function cities()
    {
        return $this->belongsToMany(City::class)
            ->withPivot('created_at','updated_at');
    }
    public function comments()
    {
        return $this->morphMany('App\Models\Comment','commentable');
    }
}
