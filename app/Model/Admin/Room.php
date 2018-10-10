<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable =['hotel_id','room_type', 'price', 'services', 'images' , 'description'];

    public function hotel(){
        return $this->belongsTo('App\Model\Admin\Hotel');
    }
}
