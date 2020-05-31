<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function evenements(){
        return $this->hasMany('App\Evenements');
    }
}
