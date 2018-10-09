<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Image;

use App\Model\Admin\Hotel;
use App\Model\Admin\City;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function city_hotel($id)
    {
        $hotels = Hotel::where('city_id',$id)->get();
        return view('admin.hotel.index', compact('hotels', 'id'));
         
    }

    public function index()
    {
        $cities =City::all();
        $hotels =Hotel::paginate(10);
        return view('admin.hotel.hotel_page', compact('cities', 'hotels'));
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
            'name' =>'required',
            'avatar' =>'required',
            'address' =>'required',
            'description' =>'required',
            'star_rate' =>'required',
            'credit' =>'required',
            'normal_price' =>'required',
            'our_price' =>'required',
        ]);

        if($request->hasFile('avatar')) {

            $avatar_file = $request->avatar;

            //get filename with extension
            $filenamewithextension_1= $avatar_file->getClientOriginalName();

            //get filename without extension
            $filename_1 = pathinfo($filenamewithextension_1, PATHINFO_FILENAME);

            //get file extension
            $extension_1 = $avatar_file->getClientOriginalExtension();

            //filename to store
            $filenametostore_1 = $filename_1.'_'.uniqid().'.'.$extension_1;

            Storage::put('public/hotel/cover/'. $filenametostore_1, fopen($avatar_file, 'r+'));
            Storage::put('public/hotel/cover/thumbnail/'. $filenametostore_1, fopen($avatar_file, 'r+'));

            //Resize image here
            $thumbnailpath_1 = public_path('storage/hotel/cover/thumbnail/'.$filenametostore_1);
            // $img = Image::make($thumbnailpath)->resize(400, 150, function($constraint) {
            //     $constraint->aspectRatio();
            // });

            $img_1 = Image::make($thumbnailpath_1)->resize(400, 250);

            $img_1->save($thumbnailpath_1);

        }else{
            $filenametostore_1 = 'hotel_no_media.jpg';
        }

        //for all image file name to store database
        $filename_array =array(); 

        if($request->hasFile('images')) {
         
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
    
                Storage::put('public/hotel/gallery/'. $filenametostore, fopen($file, 'r+'));
                Storage::put('public/hotel/gallery/thumbnail/'. $filenametostore, fopen($file, 'r+'));
    
                //Resize image here
                $thumbnailpath = public_path('storage/hotel/gallery/thumbnail/'.$filenametostore);
                // $img = Image::make($thumbnailpath)->resize(400, 150, function($constraint) {
                //     $constraint->aspectRatio();
                // });
                $img = Image::make($thumbnailpath)->resize(400, 250);

                $img->save($thumbnailpath);
            }

        }else{
            array_push($filename_array ,'hotel_no_media.jpg');
        }

        $hotel = new Hotel;

        $hotel->name = $request->name;
        $hotel->city_id = $request->city_id;
        $hotel->address = $request->address;
        $hotel->normal_price = $request->normal_price;
        $hotel->our_price = $request->our_price;
        $hotel->avatar = $filenametostore_1;
        $hotel->images = serialize($filename_array);
        $hotel->description =$request->description;
        $hotel->star_rate = $request->star_rate;
        $hotel->credit = $request->credit;
        $hotel->save();
        
        return redirect()->route('hotel.index')-> 
        with('flash_message', 'New Hotel create successful');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $hotel =Hotel::find($id);
        return view('admin.hotel.show', compact('hotel'));
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
