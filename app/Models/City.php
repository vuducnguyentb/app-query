<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public function rooms()
    {
        return $this->belongsToMany(Room::class)
            ->withPivot('created_at','updated_at');
            //wherePivot() wherePivotNotIn() or wherePivotIn('piority',[1,2])
    }

    public function image()
    {
        return $this->morphOne('App\Models\Image','imageable');
    }
}
