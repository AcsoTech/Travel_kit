<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $dests = Destination::all();
        return view('admin.destination.index', compact('dests'));
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
    public function store(Request $request)
    {
        $request->validate([
            'place' =>'required',
            'profile' =>'required',
            'images' =>'required',
            'description' =>'required',
        ]);
    	$a = $request->profile;
        $b = $request->images;

            if(isset($a)){
                $profile_files =$request->file('profile');
                $profile_name =uniqid() . '_' . $profile_files->getClientOriginalName();
                $profile_files->move(public_path() . '/uploads/images/admin/destination/profile' , $profile_name);
            }

          if(isset($b)){
            $image_files =$request->file('images');
            $image_array =array();
            foreach($image_files as $image_file){
                $image_name =uniqid() . '_' . $image_file->getClientOriginalName();
                array_push($image_array ,$image_name);
                $image_file->move(public_path() . '/uploads/images/admin/destination/gallery' , $image_name);
            }
        $destination =new Destination ;
        $destination->place = $request->place;
         $destination->description = $request->description;
        if(isset($a)){
            $destination->profile =$profile_name;
        }
        if(isset($b)){
            $destination->images =serialize($image_array);
        }
        $destination->save();

        return redirect()->route('destination.index')
        ->with('flash_message','New Destination create successfull');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
