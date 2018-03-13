<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    public function studClass(){
        return $this->hasOne(StudClass::class);
    }
}
