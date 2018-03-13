<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function gates(){
        return $this->hasMany(Gate::class);
    }

    public  function attendances(){
        return $this->hasMany(Attendance::class);
    }

    public  function clinics(){
        return $this->hasMany(Clinic::class);
    }

    public  function academics(){
        return $this->hasMany(Academic::class);
    }

    public function studsection(){
        return $this->belongsTo(StudSection::class);
    }
}