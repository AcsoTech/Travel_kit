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
    <div class="row mt-3" >
        <div class="card" style="width:100%">
            <p class="text-center card-title"><b>{{ $hotel->name }}</b></p>
            <div class="row" style="font-size:14px">
                <img class="img-responsive col-lg-6 mt-1" src="{{asset('/storage/hotel/cover/thumbnail/' . $hotel->avatar )}}" alt="Avatar">
                <div class="col-md-12 col-lg-6">
                    <div class="jumbotron">
                        {{  $hotel->description }}
                    </div>
                </div>
                @foreach(unserialize($hotel->images) as $img)
                    <img class="card-img-top col-6 mt-1" src="{{asset('/storage/hotel/gallery/thumbnail/' . $img )}}" alt="Gallery" height="250">
                @endforeach
                <div class="col-md-12 col-lg-6">
                    <table class="table">
                        <tr>
                            <th>Address</th>
                            <td>{{ $hotel->address }}</td>
                        </tr>
                        <tr>
                            <th>Normal Price</th>
                            <td>{{ $hotel->normal_price }}</td>
                        </tr>
                        <tr>
                            <th>Our Price</th>
                            <td>{{ $hotel->our_price }}</td>
                        </tr>
                         <tr>
                            <th>Credit</th>
                            <td>{{ $hotel->credit }}</td>
                        </tr>
                    </table>
                    </div>
                
            </div>
        </div>
    </div>
    @foreach ($hotel->rooms as $room)
        <div class="row mt-3">
            <div class="card col" style="width:100%">
                <div class="row mt-3">
                    <div class="col-lg-4 offset-lg-4">
                        <div id="room_image{{ $room->id }}" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                @foreach(unserialize($room->images) as $img )
                                    <li data-target="#room_image{{ $room->id }}" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                                @endforeach
                            </ul>

                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                @foreach(unserialize($room->images) as $img )
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <img src="{{asset('/storage/room/gallery/thumbnail/' . $img )}}"" alt="{{ $loop->index }}">
                                    </div>
                                @endforeach
                            </div>
                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#room_image{{ $room->id }}" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#room_image{{ $room->id }}" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 offset-lg-2">
                        <p class="text-dark card-title text-center">{{ $room->room_type }}</p>
                        <div class="row" style="font-size:14px">
                            <div class="col-md-6 col-lg-3 text-left">
                                <p class="text-primary"><i class="fa fa-money text-success"></i> {{ $room->price }}</p>
                                @foreach (unserialize($room->services) as $service)
                                    <p class="text-primary">{!! $service !!}</p>
                                @endforeach
                                
                            </div>
                            <div class="col-md-6 col-lg-9">
                            <div class="jumbotron">
                                {!! $room->description !!}
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

     {{-- <div class="row mt-3">
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
    </div> --}}
@endsection