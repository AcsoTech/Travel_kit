<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;

use App\Model\Admin\Room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
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
            'room_type' =>'required',
            'price' =>'required',
            'images' =>'required',   
        ]);

        if($request->hasFile('images')) {

            $filename_array =array(); 
         
            foreach($request->file('images') as $file){
    
                //get filename with extension
                $filenamewithextension = $file->getClientOriginalName();
    
                //get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    
                //get file extension
                $extension = $file->getClientOriginalExtension();
    
                //filename to store
                $filenametostore = $filename.'_'.uniqid().'.'.$extension;

                array_push($filename_array ,$filenametostore);
    
                Storage::put('public/room/gallery/'. $filenametostore, fopen($file, 'r+'));
                Storage::put('public/room/gallery/thumbnail/'. $filenametostore, fopen($file, 'r+'));
    
                //Resize image here
                $thumbnailpath = public_path('storage/room/gallery/thumbnail/'.$filenametostore);
                // $img = Image::make($thumbnailpath)->resize(400, 150, function($constraint) {
                //     $constraint->aspectRatio();
                // });
                $img = Image::make($thumbnailpath)->resize(400, 250);

                $img->save($thumbnailpath);
            }

        }else{
            array_push($filename_array ,'room_no_media.jpg');
        }
        $room = new Room;
        $room->hotel_id=$request->hotel_id;
        $room->room_type = $request->room_type;
        $room->price = $request->price;
        $room->services = serialize($request->services);
        $room->description = $request->description;
        $room->images = serialize($filename_array);
        $room->save();

        return redirect()->route('hotel.show', $room->hotel_id)-> 
        with('flash_message', 'New Room upload successful');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room = Room::findOrFail($id);
        return view('admin.hotel.room_show', compact('room'));
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
        $request->validate([
            'room_type' =>'required',
            'price' =>'required',   
        ]);

        $room = Room::findOrFail($id);
        $room->hotel_id=$request->hotel_id;
        $room->room_type = $request->room_type;
        $room->price = $request->price;
        $room->services = serialize($request->services);
        $room->description = $request->description;
      
        if($request->hasFile('images')) {
            
            $filename_array =array(); 

            foreach($request->file('images') as $file){
    
                //get filename with extension
                $filenamewithextension = $file->getClientOriginalName();
    
                //get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    
                //get file extension
                $extension = $file->getClientOriginalExtension();
    
                //filename to store
                $filenametostore = $filename.'_'.uniqid().'.'.$extension;

                array_push($filename_array ,$filenametostore);
    
                Storage::put('public/room/gallery/'. $filenametostore, fopen($file, 'r+'));
                Storage::put('public/room/gallery/thumbnail/'. $filenametostore, fopen($file, 'r+'));
    
                //Resize image here
                $thumbnailpath = public_path('storage/room/gallery/thumbnail/'.$filenametostore);
            
                $img = Image::make($thumbnailpath)->resize(400, 250);
                
                $img->save($thumbnailpath);
            }
            foreach( unserialize($hotel->images) as $img){
                Storage::delete('public/room/gallery/' . $img );
                Storage::delete('public/room/gallery/thumbnail/' . $img );
            }

            $room->images = serialize($filename_array);
        }
        $room->save();

        return redirect()->route('room.show', $room->id)-> 
        with('flash_message', ' Room update successful');
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
