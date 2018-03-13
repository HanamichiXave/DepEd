<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudSection extends Model
{
    public function students(){
        return $this->hasMany(Student::class);
    }

    public function section(){
        return $this->belongsTo(Section::class);
    }
}