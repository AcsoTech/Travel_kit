@extends('layouts.master')
@section('content')

<div>
    @foreach ($errors->all() as $message)
    <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Invalid !</strong> {{ $message }}
    </div>
    @endforeach
</div>

<div class="row mb-3">
    @foreach ($rooms as $room)
        <div class="card">
            <div class="card-header">{{ $room->room_type }}</div>
            <div class="card-body">
                <div class="row">
                    @foreach(unserialize($room->images) as $img)
                        <div class="col-4 mt-3">
                            <a href="{{asset('/storage/room/gallery/' . $img )}}">
                                <img class="img-fluid img-thumbnail profile-img" src="{{asset('/storage/room/gallery/thumbnail/' . $img )}}" 
                                alt="Card image">
                            </a>
                        </div>  
                    @endforeach
                </div>
                <div class="row mt-3">
                    @isset($room->services)
                        @foreach(unserialize($room->services) as $ser)
                            <p class="text-primary mr-5">{!! $ser !!}</p>
                        @endforeach  
                    @endisset
                </div>
                <div class="row mt-3">
                    {{ $room->description }}
                </div> 
            </div> 
            <div class="card-footer">Footer</div>
        </div>
    @endforeach
</div>
@endsection