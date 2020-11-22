<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $fillable = [
        'gender',
    ];

    public function categories(){
        return $this->hasMany('App\Category');
    }
}
