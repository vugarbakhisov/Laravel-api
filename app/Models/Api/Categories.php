<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{



    public function products(){

        return $this->belongsToMany('App\Models\Api\Product','product_categories');

    }
}
