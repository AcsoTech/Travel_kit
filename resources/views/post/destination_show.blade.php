@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            {{ $dest->title }}
            <a href="{{ route('dest.index') }}" class="float-right"> <<< Back</a>
        </div>
        <div class="card-body">
            <div class="row mb-3">
				<div class="form-group">
                    <a href="{{asset('/storage/destination/cover/' . $dest->avatar )}}">
                        <img class="img-fluid img-thumbnail profile-img" src="{{asset('/storage/destination/cover/thumbnail/' . $dest->avatar )}}" 
                        alt="Card image" width="200" height="200">
                    </a>
                    @foreach(unserialize($dest->images) as $img)
                        <a href="{{asset('/storage/destination/gallery/' . $img )}}">
						    <img class="img-fluid img-thumbnail profile-img" src="{{asset('/storage/destination/gallery/thumbnail/' . $img )}}" 
                            alt="Card image" width="200" height="200">
                        </a>
					@endforeach
				</div>
            </div>
            <p class="card-text">
                {!! $dest->description !!}
            </p>
        </div> 
        <div class="card-footer">
            <div class="row">
                <a href="#"  class="btn btn-warning btn-sm mr-2">Lite</a> 
            </div>
        </div>
    </div>
@endsection