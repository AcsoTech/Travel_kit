<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\DestinaitonInsertFormRequest;
use App\Model\Admin\Destination;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
         $dest=Destination::all();
        return view('admin.destination.index',compact('dest'));
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
    public function store(DestinaitonInsertFormRequest $request)
    {
        
       $dest=new Destination;
       $dest->name=$request->name;
       $dest->detail=$request->detail;
      
       $img =uniqid() .'.'.$request->file('img')->getClientOriginalName();
      
       $request->file('img')->move(base_path().'/public/uploads',$img);
       
        $dest->img= $img;
        $dest->save();
        return redirect()->route('admin/destination/index')
        ->with('flash_message','New City create successful.');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Admin\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function show(Destination $destination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Admin\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function edit(Destination $destination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Admin\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destination $destination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Admin\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destination $destination)
    {
        //
    }
}
