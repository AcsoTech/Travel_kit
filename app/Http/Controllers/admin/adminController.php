<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class adminController extends Controller
{
    public function index(){
        return view('admin/adminview');
    }
    public function create(){
        return view('admin/city/createcity');
    }
}
