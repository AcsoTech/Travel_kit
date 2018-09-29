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
            <a href="{{ url('/room') }}" class="logo-text">
                <div class="row mb-1">
                    <div class="col-md-4">
                        <div class="row">
                            <img class="card-img-top room-image-lg col-12 mt-1" src="{{asset('img/hotel/hotel1.jpg')}}" alt="Card image cap">
                            <img class="card-img-top  room-image-sm col-6 mt-1" src="{{asset('img/hotel/hotel2.jpg')}}" alt="Card image cap">
                            <img class="card-img-top room-image-sm col-6 mt-1" src="{{asset('img/hotel/hotel3.jpg')}}" alt="Card image cap">
                        </div>
                    </div>
                    <div class="col-md-8 text-center mt-3">
                        <p class="text-dark card-title">hello</p>
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <p class="text-success"><i class="fa fa-star text-warning"></i> Room</p>
                                <p class="text-success"><i class="fa fa-star text-warning"></i> Room</p>
                                <p class="text-success"><i class="fa fa-star text-warning"></i> Room</p>
                                <p class="text-success"><i class="fa fa-star text-warning"></i> Room</p>
                                <p class="text-success"><i class="fa fa-wifi"> </i>  Free Wi-fi</p>
                                <p class="text-success"><i class="fa fa-check"> Pay at the hotel</i>
                                <p class="text-primary"><i class="fa fa-dollar"></i> 51/night</p>
                            </div>
                            <div class="col-md-6 col-6">
                                <p class="text-success"><i class="fa fa-star text-warning"></i> Room</p>
                                <p class="text-success"><i class="fa fa-star text-warning"></i> Room</p>
                                <p class="text-success"><i class="fa fa-star text-warning"></i> Room</p>
                                <p class="text-success"><i class="fa fa-star text-warning"></i> Room</p>
                                <p class="text-success"><i class="fa fa-wifi"> </i>  Free Wi-fi</p>
                                <p class="text-success"><i class="fa fa-check"> Pay at the hotel</i>
                                <p class="text-primary"><i class="fa fa-dollar"></i> 51/night</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

     <div class="row mt-3">
        <div class="card col" style="width:28rem;">
            <a href="{{ url('/room') }}" class="logo-text">
                <div class="row mb-1">
                    <div class="col-md-4">
                        <div class="row">
                            <img class="card-img-top room-image-lg col-12 mt-1" src="{{asset('img/hotel/hotel1.jpg')}}" alt="Card image cap">
                            <img class="card-img-top  room-image-sm col-6 mt-1" src="{{asset('img/hotel/hotel2.jpg')}}" alt="Card image cap">
                            <img class="card-img-top room-image-sm col-6 mt-1" src="{{asset('img/hotel/hotel3.jpg')}}" alt="Card image cap">
                        </div>
                    </div>
                    <div class="col-md-8 text-center mt-3">
                        <p class="text-dark card-title">hello</p>
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <p class="text-success"><i class="fa fa-star text-warning"></i> Room</p>
                                <p class="text-success"><i class="fa fa-star text-warning"></i> Room</p>
                                <p class="text-success"><i class="fa fa-star text-warning"></i> Room</p>
                                <p class="text-success"><i class="fa fa-star text-warning"></i> Room</p>
                                <p class="text-success"><i class="fa fa-wifi"> </i>  Free Wi-fi</p>
                                <p class="text-success"><i class="fa fa-check"> Pay at the hotel</i>
                                <p class="text-primary"><i class="fa fa-dollar"></i> 51/night</p>
                            </div>
                            <div class="col-md-6 col-6">
                                <p class="text-success"><i class="fa fa-star text-warning"></i> Room</p>
                                <p class="text-success"><i class="fa fa-star text-warning"></i> Room</p>
                                <p class="text-success"><i class="fa fa-star text-warning"></i> Room</p>
                                <p class="text-success"><i class="fa fa-star text-warning"></i> Room</p>
                                <p class="text-success"><i class="fa fa-wifi"> </i>  Free Wi-fi</p>
                                <p class="text-success"><i class="fa fa-check"> Pay at the hotel</i>
                                <p class="text-primary"><i class="fa fa-dollar"></i> 51/night</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

     <div class="row mt-3">
        <div class="card col" style="width:28rem;">
            <a href="{{ url('/room') }}" class="logo-text">
                <div class="row mb-1">
                    <div class="col-md-4">
                        <div class="row">
                            <img class="card-img-top room-image-lg col-12 mt-1" src="{{asset('img/hotel/hotel1.jpg')}}" alt="Card image cap">
                            <img class="card-img-top  room-image-sm col-6 mt-1" src="{{asset('img/hotel/hotel2.jpg')}}" alt="Card image cap">
                            <img class="card-img-top room-image-sm col-6 mt-1" src="{{asset('img/hotel/hotel3.jpg')}}" alt="Card image cap">
                        </div>
                    </div>
                    <div class="col-md-8 text-center mt-3">
                        <p class="text-dark card-title">hello</p>
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <p class="text-success"><i class="fa fa-star text-warning"></i> Room</p>
                                <p class="text-success"><i class="fa fa-star text-warning"></i> Room</p>
                                <p class="text-success"><i class="fa fa-star text-warning"></i> Room</p>
                                <p class="text-success"><i class="fa fa-star text-warning"></i> Room</p>
                                <p class="text-success"><i class="fa fa-wifi"> </i>  Free Wi-fi</p>
                                <p class="text-success"><i class="fa fa-check"> Pay at the hotel</i>
                                <p class="text-primary"><i class="fa fa-dollar"></i> 51/night</p>
                            </div>
                            <div class="col-md-6 col-6">
                                <p class="text-success"><i class="fa fa-star text-warning"></i> Room</p>
                                <p class="text-success"><i class="fa fa-star text-warning"></i> Room</p>
                                <p class="text-success"><i class="fa fa-star text-warning"></i> Room</p>
                                <p class="text-success"><i class="fa fa-star text-warning"></i> Room</p>
                                <p class="text-success"><i class="fa fa-wifi"> </i>  Free Wi-fi</p>
                                <p class="text-success"><i class="fa fa-check"> Pay at the hotel</i>
                                <p class="text-primary"><i class="fa fa-dollar"></i> 51/night</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection