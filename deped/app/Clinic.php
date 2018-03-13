<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    public function student(){
        return $this->belongsTo(Student::class);
    }
}
