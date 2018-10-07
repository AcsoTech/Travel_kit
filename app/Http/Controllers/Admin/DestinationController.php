<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Image;

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
        $dests = Destination::paginate(9);
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
            'title' =>'required',
            'avatar' =>'required',
            'description' =>'required',
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

            Storage::put('public/destination/cover/'. $filenametostore_1, fopen($avatar_file, 'r+'));
            Storage::put('public/destination/cover/thumbnail/'. $filenametostore_1, fopen($avatar_file, 'r+'));

            //Resize image here
            $thumbnailpath_1 = public_path('storage/destination/cover/thumbnail/'.$filenametostore_1);
            // $img = Image::make($thumbnailpath)->resize(400, 150, function($constraint) {
            //     $constraint->aspectRatio();
            // });

            $img_1 = Image::make($thumbnailpath_1)->resize(400, 250);

            $img_1->save($thumbnailpath_1);

        }else{
            $filenametostore_1 = 'destination_no_media.jpg';
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
    
                Storage::put('public/destination/gallery/'. $filenametostore, fopen($file, 'r+'));
                Storage::put('public/destination/gallery/thumbnail/'. $filenametostore, fopen($file, 'r+'));
    
                //Resize image here
                $thumbnailpath = public_path('storage/destination/gallery/thumbnail/'.$filenametostore);
                // $img = Image::make($thumbnailpath)->resize(400, 150, function($constraint) {
                //     $constraint->aspectRatio();
                // });
                $img = Image::make($thumbnailpath)->resize(400, 250);

                $img->save($thumbnailpath);
            }

        }else{
            array_push($filename_array ,'destination_no_media.jpg');
        }

        $dest = new Destination;

        $dest->title = $request->title;
        $dest->avatar = $filenametostore_1;
        $dest->images = serialize($filename_array);
        $dest->description =$request->description;
        $dest->selection = $request->check;
        $dest->save();
        
        return redirect()->route('destination.index')-> 
        with('flash_message', 'New Destination create successful');   
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dest =Destination::find($id);
        return view('admin.destination.show', compact('dest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
            'title' =>'required',
            'description' =>'required',
        ]);

        $dest = Destination::find($id);
        $dest->title = $request->title;
        $dest->description =$request->description;
        $dest->selection = $request->check;

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

            Storage::put('public/destination/cover/'. $filenametostore_1, fopen($avatar_file, 'r+'));
            Storage::put('public/destination/cover/thumbnail/'. $filenametostore_1, fopen($avatar_file, 'r+'));

            //Resize image here
            $thumbnailpath_1 = public_path('storage/destination/cover/thumbnail/'.$filenametostore_1);
            // $img = Image::make($thumbnailpath)->resize(400, 150, function($constraint) {
            //     $constraint->aspectRatio();
            // });

            $img_1 = Image::make($thumbnailpath_1)->resize(400, 250);

            $img_1->save($thumbnailpath_1);

            Storage::delete('public/destination/cover/' . $dest->avatar );
            Storage::delete('public/destination/cover/thumbnail/' . $dest->avatar );

            $dest->avatar = $filenametostore_1;

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
    
                Storage::put('public/destination/gallery/'. $filenametostore, fopen($file, 'r+'));
                Storage::put('public/destination/gallery/thumbnail/'. $filenametostore, fopen($file, 'r+'));
    
                //Resize image here
                $thumbnailpath = public_path('storage/destination/gallery/thumbnail/'.$filenametostore);
                // $img = Image::make($thumbnailpath)->resize(400, 150, function($constraint) {
                //     $constraint->aspectRatio();
                // });
                $img = Image::make($thumbnailpath)->resize(400, 250);

                $img->save($thumbnailpath);
            }
            foreach( unserialize($dest->images) as $img){
                Storage::delete('public/destination/gallery/' . $img );
                Storage::delete('public/destination/gallery/thumbnail/' . $img );
            }

            $dest->images = serialize($filename_array);
        }
        
        $dest->save();
        return redirect()->route('destination.show' , $dest->id)-> 
        with('flash_message', 'Destination update successful');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dest = Destination::find($id);

        Storage::delete('public/destination/cover/' . $dest->avatar );
        Storage::delete('public/destination/cover/thumbnail/' . $dest->avatar );

        foreach( unserialize($dest->images) as $img){
            Storage::delete('public/destination/gallery/' . $img );
            Storage::delete('public/destination/gallery/thumbnail/' . $img );
        }


        $dest->delete();

        return redirect()->route('destination.index')-> 
        with('flash_message', 'Old Destination  delete successful');
    }
}
