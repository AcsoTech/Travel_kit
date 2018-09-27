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
       <div class="card col" style="width: 28rem;">
       <a href="{{ url('/room') }}" class="logo-text">
            <div class="row mb-1">
                <img class="card-img-top col-6 pt-1" src="{{asset('img/hotel/hotel1.jpg')}}" alt="Card image cap">
                <div class="card-body col-6 p-1">
                    <p class="text-primary card-title">Bangan King Hotel <i class="fa fa-thumbs-up text-success"></i> </p>
                    <p>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                    <p>
                    <p class="card-text">Excellent 8.8</hp>
                    <p class="text-success"><i class="fa fa-wifi"> </i>  Free Wi-fi</p>
                    <p class="text-success"><i class="fa fa-check"> Pay at the hotel</i>
                    <p class="text-primary"><i class="fa fa-dollar"></i> 51/night</p>
                </div>
            </div>
            </a>
        </div>
      
    </div>

     <div class="row mt-3">
        <div class="card col" style="width: 28rem;">
            <div class="row mb-1">
                <img class="card-img-top col-6 pt-1" src="{{asset('img/hotel/hotel2.jpg')}}" alt="Card image cap">
                <div class="card-body col-6 p-1">
                    <p class="text-primary card-title">Bangan King Hotel <i class="fa fa-thumbs-up text-success"></i> </p>
                    <p>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                    <p>
                    <p class="card-text">Excellent 8.8</hp>
                    <p class="text-success"><i class="fa fa-wifi"> </i>  Free Wi-fi</p>
                    <p class="text-success"><i class="fa fa-check"> Pay at the hotel</i>
                    <p class="text-primary"><i class="fa fa-dollar"></i> 51/night</p>
                </div>
            </div>
    
        </div>
    </div>

     <div class="row mt-3">
        <div class="card col" style="width: 28rem;">
            <div class="row mb-1">
                <img class="card-img-top col-6 pt-1" src="{{asset('img/hotel/hotel3.jpg')}}" alt="Card image cap">
                <div class="card-body col-6 p-1">
                    <p class="text-primary card-title">Bangan King Hotel <i class="fa fa-thumbs-up text-success"></i> </p>
                    <p>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                    <p>
                    <p class="card-text">Excellent 8.8</hp>
                    <p class="text-success"><i class="fa fa-wifi"> </i>  Free Wi-fi</p>
                    <p class="text-success"><i class="fa fa-check"> Pay at the hotel</i>
                    <p class="text-primary"><i class="fa fa-dollar"></i> 51/night</p>
                </div>
            </div>
    
        </div>
    </div>


@endsection