<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\City;
use App\Http\Requests\CityInsertFormRequest;

class adminController extends Controller
{
    public function index(){
        return view('admin.adminview');
    }
    public function create(){
        return view('admin.city.createcity');
    }
    public function store(CityInsertFormRequest $request){
        City::create([
            'city'=>$request->get('city'),
        ]);
        return redirect('/admin/create')->with('status','City Insertion Successful');
    }
    public function show(){
        $cities=City::all();
        return view('admin.city.createcity',compact('cities'));
    }
    public function delete($id){
        $cities=City::findOrFail($id);
        $cities->delete();
        
        return redirect('/admin/create');
    }
    public function edit($id){
        $cities=City::findorFail($id);
        return view('admin.city.edit',compact('cities'));
    }
    public function update(Request $request,$id){
      $cities=City::find($id);
      $cities->city=$request->city;
      $cities->save();
      return  redirect('/admin/create')->with('success','City update Successful');



    }

}
