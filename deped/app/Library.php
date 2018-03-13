<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    protected $fillable = ['book_image','rfid','title','material_type','title_statement','isbn','date_published','author','publisher','publication','general_info','physical_description','vol_year','collection_category','price'];
}
