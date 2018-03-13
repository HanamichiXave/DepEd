<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function grade(){
        return $this->belongsTo(Section::class);
    }

    public function adviser(){
        return $this->hasOne(Teacher::class);
    }

    public function studsection(){
        return $this->hasOne(StudSection::class);
    }
}
