<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function studClass()
    {
        return $this->belongsTo(StudClass::class);
    }
}
