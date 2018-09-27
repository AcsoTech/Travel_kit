@extends('layouts.default')

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
  <h3>Hotel Service</h3>
    <div class="row">
    
        <div class="card col" style="width: 28rem;">
            <a href="{{url('/room')}}" class="logo-text">
               <div class="row">
                
                        <img class="card-img-top col-5 pt-1 " src="{{asset('img/hotel1.jpg')}}" 
                        width="350" height="350" alt="Card image cap">
                
                    <div class="card-body col-7 p-1">
                        <h5 class="text-primary">Bangan King Hotel <i class="fa fa-thumbs-up text-success"></i> </h5>
                        <p>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                        <p>
                        <h6 class="card-text">Excellent 8.8</h6>
                        <p class="text-success"><i class="fa fa-wifi"> </i>  Free Wi-fi</p>
                        <p class="text-success"><i class="fa fa-check"> Pay at the hotel</i>
                        <p class="float-right mr-5 text-primary"><i class="fa fa-dollar"></i>51/night</p>
                        <p class="float-right">Supplied by Booking.com</p>
                        
                    </div>
                
                </div>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="card col" style="width: 28rem;">
            <a href="{{url('/room')}}" class="logo-text">
                <div class="row">
                    <img class="card-img-top col-5 " src="{{asset('img/hotel2.jpg')}}" width="350" height="350" alt="Card image cap">
                    <div class="card-body col-7 p-1">
                        <h5 class="text-primary">Bangan King Hotel <i class="fa fa-thumbs-up text-success"></i> </h5>
                        <p>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                        <p>
                        <h6 class="card-text">Excellent 8.8</h6>
                        <p class="text-success"><i class="fa fa-wifi"> </i>  Free Wi-fi</p>
                        <p class="text-success"><i class="fa fa-check"> Pay at the hotel</i>
                        <p class="float-right mr-5 text-primary"><i class="fa fa-dollar"></i>51/night</p>
                        <p class="float-right">Supplied by Booking.com</p>
                        
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="card col" style="width: 28rem;">
            <a href="{{url('/room')}}" class="logo-text">
                <div class="row">
                    <img class="card-img-top col-5 " src="{{asset('img/hotel3.jpg')}}" width="350" height="350" alt="Card image cap">
                    <div class="card-body col-7 p-1">
                        <h5 class="text-primary">Bangan King Hotel <i class="fa fa-thumbs-up text-success"></i> </h5>
                        <p>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                        <p>
                        <h6 class="card-text">Excellent 8.8</h6>
                        <p class="text-success"><i class="fa fa-wifi"> </i>  Free Wi-fi</p>
                        <p class="text-success"><i class="fa fa-check"> Pay at the hotel</i>
                        <p class="float-right mr-5 text-primary"><i class="fa fa-dollar"></i>51/night</p>
                        <p class="float-right">Supplied by Booking.com</p>
                        
                    </div>
                </div>
            </a>
         </div>
    </div>

@endsection