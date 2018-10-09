<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Model\Admin\City;
// use App\Model\Admin\Hotel;

class AdminController extends Controller
{
    public function home(){
        return view('admin.home');
    }

    // public function hotel(){
    //     $cities =City::all();
    //     $hotels =Hotel::paginate(10);
    //     return view('admin.hotel.hotel_page', compact('cities', 'hotels'));
    // }

    
}
