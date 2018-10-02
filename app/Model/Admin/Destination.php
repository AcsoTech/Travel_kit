<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable =['place', 'profile', 'images', 'description'];
}
