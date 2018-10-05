@extends('layouts.default')

@section('content')
    <div class="col bg-white english">
        <h5 class="text-muted p-2">Destination</h5>
        <div class="row p-3">
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
    </div>
    <div class="row mt-3">
		<div style="margin: auto; max-width: 300px;">{{ $dests->links() }}</div>
    </div>
@endsection

