<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable =['title', 'avatar', 'images', 'description', 'selection'];
}
