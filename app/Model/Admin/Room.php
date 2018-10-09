<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable =['roomtype', 'service', 'images'];

    public function hotel(){
        return $this->belongsTo('App\Model\Admin\Hotel');
    }
}
