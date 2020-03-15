<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubCategory extends Model
{
    use SoftDeletes;
    public function category(){
        return $this->belongsTo(Category::class,'cat_id');
    }

}
