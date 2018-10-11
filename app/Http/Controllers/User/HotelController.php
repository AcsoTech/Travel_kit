<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\City;
use App\Model\Admin\Hotel;

class HotelController extends Controller
{
    public function index(){
        $cities= City::all();
        $hotels = Hotel::all();
        return view('hotel.index', compact('cities','hotels'));
    }

    public function hotel_city($id){
        $cities= City::all();
        $hotels = Hotel::where('city_id', $id)->get();
        return view('hotel.index', compact('cities','hotels'));
    }

    public function hotel_room($id){
        $hotel = Hotel::findOrFail($id);
        return view('hotel.room', compact('hotel'));
    }



    public function hotel_star($id){
        $hotels = Hotel::where('star_rate', $id)->get();
        return view('hotel.hotel_city', compact('hotels'));
    }
}
