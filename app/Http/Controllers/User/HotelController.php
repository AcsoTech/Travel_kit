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
        $city = City::findOrFail($id);
        return view('hotel.hotel_city', compact('city'));
    }

    public function hotel_room($id){
        $hotel = Hotel::findOrFail($id);
        return view('hotel.room', compact('hotel'));
    }



    public function hotel_star($id){
        $hotels = Hotel::where('star_rate', $id)->get();
        return view('hotel.hotel_city', compact('hotels'));
    }

    public function filter(Request $request){
    
        return   $hotel = Hotel::where([['city_id' , $request->city_id],
                                        ['star_rate',$request->star_rate],
                                        ['normal_price', 'like' ,'%'. $request->price . '%'],])->get();
            // ['star_rate', '==', $request->star_rate], 
            // ['city_id', '==', $request->city_id],
            // ['star_rate', '==',3 ],
            // ['city_id', '==',],
            // ])->get();

        // switch ($request->sort) {
        //     case '2':
        //         $hotel = Hotel::where('star_rate', '==', $request->star_rate)
        //             ->orWhere('name', 'John')
        //             ->get();
        //         break;
        //     case '3':
        //         # code...
        //         break;
        //     case '4':
        //         # code...
        //         break;
        //     default:
        //         # code...
        //         break;
        // }
    }
}
