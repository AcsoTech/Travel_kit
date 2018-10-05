<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Destination;
class WelcomeController extends Controller
{
    public function home(){
        $dests = Destination::where('selection', 1)->get();
        return view('welcome', compact('dests'));
    }

    public function dest(){
        $dests = Destination::paginate(6);
        return view('post.destination', compact('dests'));
    }

    public function dest_show($id){
        $dest =Destination::find($id);
        return view('post.destination_show', compact('dest'));
    }
}
