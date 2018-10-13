@extends('layouts.default')

@section('slide')
    
@endsection

@section('mess')
<button type="button" class="btn btn-default">{{ $hotel->name }}</button>
@endsection

@section('content')
    <div class="row">
        <div class="card" style="width:100%; font-size:14px;">
            <div class="row">
                <div class="col-lg-6">
                    <img class="card-img-top img-thumbnail" src="{{asset('/storage/hotel/cover/thumbnail/' . $hotel->avatar )}}" alt="Avatar">
                </div>
                <div class="col-lg-6">
                    <div class="jumbotron">
                        {!!  $hotel->description !!}
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach(unserialize($hotel->images) as $img)
                    <div class="col-sm-6 col-lg-3">
                    <img  class="mt-1 img-thumbnail" src="{{asset('/storage/hotel/gallery/thumbnail/' . $img )}}" alt="Gallery">
                    </div>
                @endforeach
            </div>
            <div class="row mt-1">
                <div class="col-lg-6">
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
       
    <div class="row">
        @foreach ($hotel->rooms as $room)
        <div class="card mt-1" style="width:100%; font-size:14px;">
            <div class="jumbotron">
                <div class="col-lg-4 offset-lg-4 col-sm-8 offset-sm-2">
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
                                    <img src="{{asset('/storage/room/gallery/thumbnail/' . $img )}}"" alt="{{ $loop->index }}" width="500">
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
                    <h6 class="text-primary text-center mt-2">{{ $room->room_type }}</h6>
                    <div class="row ml-1">
                        @foreach (unserialize($room->services) as $service)
                            <p class="text-primary mr-3">{!! $service !!}</p>
                        @endforeach
                    </div>
                    {!! $room->description !!}
            </div>
        </div>
        @endforeach
    </div>
   

@endsection

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
    {{-- <div class="col-lg-8 offset-lg-2 mt-3">
        <div class="row" style="font-size:14px">
            <div class="col-md-6 col-lg-3 text-right">
                <p class="text-primary"><i class="fa fa-money text-success"></i> {{ $room->price }}</p>
                @foreach (unserialize($room->services) as $service)
                    <p class="text-primary">{!! $service !!}</p>
                @endforeach
            </div>
        </div>
    </div> --}}