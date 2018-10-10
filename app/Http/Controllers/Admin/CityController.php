<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\City;
use Illuminate\Http\Request;
use App\Http\Requests\CityInsertFormRequest;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::all();
        return view('admin.city.index', compact('cities'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CityInsertFormRequest $request)
    {
        $city=City::create($request->all());
        return redirect()->route('city.index')
        ->with('flash_message','New City create successful.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Admin\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $city = City::findOrFail($id);
        return view('admin.hotel.index', compact('city'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Admin\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Admin\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(CityInsertFormRequest $request,$id)
    {
        $city = City::findOrFail($id);

        $city->city = $request->city;

        $city->save();

        return redirect()->route('city.index')
        ->with('flash_message','City Update successful.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Admin\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = City::find($id);
        $city->delete();
        return redirect()->route('city.index')
        ->with('flash_message','City Delete successful.');
    }
}
