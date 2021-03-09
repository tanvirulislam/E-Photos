<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function user_info(){

        return $this->hasOne('App\User', 'id', 'user_post_id');
        
    }

    public function category_info(){

        return $this->hasOne('App\Category', 'id', 'cat_id');

    }

    public function subcategory_info(){

        return $this->hasOne('App\Subcategory', 'slug', 'subcat_id');

    }
}
