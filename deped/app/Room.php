<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function studClass(){
        return $this->hasOne(Room::class);
    }
}
