<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubsubCategory extends Model
{
    public function subCategories(){
        return $this->hasMany(SubCategory::class,'cat_id');
    }
}
