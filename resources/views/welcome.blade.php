@extends('layouts.default')

@section('style')
   <style>
    .col-4{
        background-color:white;
        border:0px;
    }
   </style>
@endsection
@section('slide')
    <div class="li-title ml-3">Product</div>
    <li>
        <a href="{{ route('user.hotel') }}">Hotel</a>
    </li>
    <li>
        <a href="">Flight</a>
    </li>
    <li>
        <a href="#">Bus</a>
    </li>
    <li>
        <a href="#">Restructure</a>
    </li>
    <hr>
    <div class="li-title ml-3">My Setting</div>
    <li>
        <a href="#">Events</a>
    </li>
    <li>
        <a href="#">About</a>
    </li>
    <li>
        <a href="#">Address</a>
    </li>
    <li>
        <a href="#">Contact</a>
    </li>
@endsection

@section('content')
<div class="search-box">
    <div class="block">
        <p class="text-muted"><i class="fa fa-search"></i> &nbsp; Location</p>
    </div><br>

    <div class="block">
        <div class="row text-center">
            <div class="col-5">
                <p class="text-muted">Check In</p>
                <p class="text-muted">{{ Carbon\Carbon::now('Asia/Yangon')->toFormattedDateString() }}</p>
            </div>
            <div class="col-2 mt-4"><i class="fa fa-long-arrow-right"></i></div>
            <div class="col-5">
                <p class="text-muted">Check Out</p>
                <p class="text-muted">{{ Carbon\Carbon::tomorrow('Asia/Yangon')->toFormattedDateString() }}</p>
            </div>
        </div>
    </div><br>

    <div class="block">
        <p class="text-muted english text-center">1 Room &nbsp; 2 Adults &nbsp; 0 Children </p>
    </div><br>

    <button type="submit" class="btn btn-primary btn-block">Search</button>
</div><br>

<div class="col bg-white english">
    <h5 class="text-muted">Top destination</h5>
    <div class="row">
        @foreach($dests as $dest)
            <div class="card col-lg-4 col-md-6 col-sm-12 noradius profile-img">
                <div class="row">
                    <div class="card-body col-5">
                         <a href="{{ route('dest.show' , $dest->id) }}">
                            <img class="card-img-top" src="{{asset('storage/destination/cover/thumbnail/' . $dest->avatar )}}" 
                            alt="Card image">
                        </a>
                        {{-- <img class="card-img-top" src="{{asset('img/city/ygn.jpg')}}" alt="Card image cap"> --}}
                    </div>
                    <div class="card-body col-7 text-muted">
                        <h5>{{ $dest->title }}</h5>
                    </div>
                </div>
            </div>  
        @endforeach
    </div>
    {{-- <h5 class="text-muted">Trending cities</h5>
    <div class="row">
        <div class="card col-lg-4 col-md-6 col-sm-12 noradius">
                <div class="row">
                    <div class="card-text col-5">
                    <img class="card-img-top" src="{{asset('img/hotel/hotel1.jpg')}}" alt="Card image cap">
                    </div>
                    <div class="card-text col-7 text-muted">
                    <h5>Malaysia</h5>
                    <p>3380 properties</p>
                    </div>
                </div>
        </div>
        <div class="card col-lg-4 col-md-6 col-sm-12 noradius">
                <div class="row">
                    <div class="card-text col-5">
                    <img class="card-img-top" src="{{asset('img/hotel/hotel1.jpg')}}" alt="Card image cap">
                    </div>
                    <div class="card-text col-7  text-muted">
                    <h5>Malaysia</h5>
                    <p>3380 properties</p>
                    </div>
                </div>
        </div>
        <div class="card  col-lg-4 col-md-6 col-sm-12 noradius">
                <div class="row">
                    <div class="card-text col-5 ">
                    <img class="card-img-top" src="{{asset('img/hotel/hotel1.jpg')}}" alt="Card image cap">
                    </div>
                    <div class="card-text col-7 text-muted">
                    <h5>Malaysia</h5>
                    <p>3380 properties</p>
                    </div>
                </div>
        </div>  
        <div class="card col-lg-4 col-md-6 col-sm-12 noradius">
                <div class="row">
                    <div class="card-text col-5">
                    <img class="card-img-top" src="{{asset('img/hotel/hotel1.jpg')}}" alt="Card image cap">
                    </div>
                    <div class="card-text col-7 text-muted">
                    <h5>Malaysia</h5>
                    <p>3380 properties</p>
                    </div>
                </div>
        </div>  
        <div class="card col-lg-4 col-md-6 col-sm-12 noradius">
                <div class="row">
                    <div class="card-text col-5">
                    <img class="card-img-top" src="{{asset('img/hotel/hotel1.jpg')}}" alt="Card image cap">
                    </div>
                    <div class="card-text col-7  text-muted">
                    <h5>Malaysia</h5>
                    <p>3380 properties</p>
                    </div>
                </div>
        </div>
        <div class="card  col-lg-4 col-md-6 col-sm-12 noradius">
                <div class="row">
                    <div class="card-text col-5 ">
                    <img class="card-img-top" src="{{asset('img/hotel/hotel1.jpg')}}" alt="Card image cap">
                    </div>
                    <div class="card-text col-7 text-muted">
                    <h5>Malaysia</h5>
                    <p>3380 properties</p>
                    </div>
                </div>
        </div>

        <a href="" class="btn-block showmore text-muted  mt-1">Show More</a>
    </div> --}}
</div>

@endsection
