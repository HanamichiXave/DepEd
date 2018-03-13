<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudClass extends Model
{
    public function attendance(){
        return $this->belongsTo(Attendance::class);
    }

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
    public function academics(){
        return $this->hasMany(Academic::class);
    }

    public function room(){
        return $this->belongsTo(Room::class);
    }
}
