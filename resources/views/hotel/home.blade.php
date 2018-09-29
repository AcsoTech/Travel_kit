@extends('layouts.default')
@section('style')
<style>
    .container-scroll{
        background-color:white;
    }
</style>
@endsection 

@section('slide')
    <div class="li-title ml-3">Hotel</div>
    <li>
        <a href="">1</a>
    </li>
    <li>
        <a href="">2</a>
    </li>
    <li>
        <a href="#">3</a>
    </li>
    <hr>
    <div class="li-title ml-3">Service</div>
    <li>
        <a href="#">A</a>
    </li>
    <li>
        <a href="#">B</a>
    </li>
    <li>
        <a href="#">Address</a>
    </li>
    <li>
        <a href="#">C</a>
    </li>
@endsection

@section('content')
    <div class="row mt-3">
        <div class="card col" style="width:28rem;">
            <a href="{{url('/room')}}" class="card-link"> 
            <div class="row mb-1">
                
                <img class="card-img-top card-hotel-image col-6 pt-1" src="{{asset('img/hotel/hotel1.jpg')}}" alt="Card image cap">

                <div class="card-body col-6 p-1">
                        <p class="text-primary card-titles">Bangan King Hotel &nbsp;
                        3 <i class="fa fa-star text-warning"></i>
                    </p>
                    <p class="location text-primary">
                        <i class="fa fa-location-arrow"></i>
                        No (15/B), 26 Street, Between 76 Street and 75 Street, Chan Aye 
                        Tharsan Township, Central Mandalay, Mandalay, Myanmar - View on map agoda
                    </p>
                    <p class="text-dark mt-2"><i class="fa fa-flag-o"></i>&nbsp; Excellent 8.8</p>
                    <p class="text-success"><i class="fa fa-wifi"></i>&nbsp; Free Wi-fi</p>
                    <p class="text-success"><i class="fa fa-cutlery"></i>&nbsp; Free Breafast</p>
                    <p class="text-success"><i class="fa fa-check"></i>&nbsp; Pay at the hotel</p>
                </div>  
            </div>
            </a>
            <div class="card-footer">
                <a href="{{ url('/review') }}" class="">Review &nbsp;<i class="fa fa-thumb"></i></a>
            </div>
        </div>
    </div>
   
    
@endsection