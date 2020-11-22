<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category_id', 'brand_name',
    ];

    public function gender(){
        return $this->belongsTo('App\Gender');
    }

    public function brands(){
        return $this->hasMany('App\Brand');
    }

    public function products(){
        return $this->hasMany('App\Product');
    }
}
