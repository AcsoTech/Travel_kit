<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable =['city'];

    public function hotels(){
        return $this->hasMany('App\Model\Admin\Hotel');
    }
}
