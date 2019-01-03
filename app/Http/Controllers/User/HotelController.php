<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\City;
use App\Model\Admin\Hotel;
use Illuminate\Support\Facades\Session;

class HotelController extends Controller
{
    public function index(){
        $cities= City::all();
        $hotels = Hotel::all();
        return view('hotel.index', compact('cities','hotels'));
    }

    public function hotel_city($id){
        $hotels = Hotel::where('city_id', $id)->get();
        session()->put('hotel', ['city_id' => $id ]);
        return view('hotel.hotel_city', compact('hotels'));
    }

    public function hotel_star($id)
    {
        $city_id = session()->get('hotel.city_id');
        $hotels = Hotel::where([
            ['star_rate', $id],
            ['city_id', $city_id]
        ])->get();
        return view('hotel.hotel_city', compact('hotels'));
    }

    public function hotel_room($id){
        $hotel = Hotel::findOrFail($id);
        return view('hotel.room', compact('hotel'));
    }

    public function filter(Request $request){
        $city_id = session()->get('hotel.city_id');
        switch ($request->sort) {
            case '2':
                $hotels = Hotel::where('city_id' , $city_id)
                        ->whereBetween('our_price', [$request->min_price, $request->max_price])
                        ->orderBy('our_price', 'asc')
                        ->get();
                return view('hotel.hotel_city', compact('hotels'));
                break;
            case '3':
                $hotels = Hotel::where('city_id' , $city_id)
                        ->whereBetween('our_price', [$request->min_price, $request->max_price])
                        ->orderBy('star_rate', 'desc')
                        ->get();
                return view('hotel.hotel_city', compact('hotels'));
                break;
            case '4':
                $hotels = Hotel::where('city_id' , $city_id)
                        ->whereBetween('our_price', [$request->min_price, $request->max_price])
                        ->orderBy('star_rate', 'asc')
                        ->get();
                return view('hotel.hotel_city', compact('hotels'));
                break;
            default:
                $hotels = Hotel::where('city_id' , $city_id)
                        ->whereBetween('our_price', [$request->min_price, $request->max_price])
                        ->orderBy('our_price', 'desc')
                        ->get();
                return view('hotel.hotel_city', compact('hotels'));
                break;
        }
    }
}
