<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = ['name', 'city_id', 'avatar' , 'images', 'desciption',   
    'address', 'normal_price', 'our_price', 'star_rate','credit'];
}
