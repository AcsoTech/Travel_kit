@extends('layouts.master')

@section('content')
    <h5>Avaliable City</h5>
    <div class="row">
        @foreach($cities as $city)
            <div class="col-3">
                <a href="{{ route('city.show', $city->id) }}" class="link-text">
                    <div class="card text-center bg-primary mt-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $city->city }}</h5>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <hr>
    <h5>Avaliable Hotel</h5>
    <div class="row mt-3">
         <table class="table">
        <thead>
            <tr>
                <th>Hotel name</th>
                <th>Hotel address</th>
                <th>City</th>
                <th>Normal Price</th>
                <th>Our Price</th>
                <th>Star Rate</th>
                <th>Credit</th>
            </tr>
        </thead>
         @foreach ($hotels as $hotel)
        <tbody>
            <tr>
            <td>{{ $hotel->name }}</td>
            <td>{{ $hotel->address }}</td>
            <td>{{ $hotel->city->city }}</td>
            <td>{{ $hotel->normal_price }}</td>
            <td>{{ $hotel->our_price }}</td>
            <td>{{ $hotel->star_rate }}</td>
            <td>{{ $hotel->credit }}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
    </div>
    <div class="row mt-3">
        @foreach ($hotels as $hotel)
        
            <div class="card col-4  profile-img">
                <div class="card-body">
                     <a href="{{ route('hotel.show', $hotel->id) }}">
                        <img class="card-img-top" src="{{asset('storage/destination/cover/thumbnail/index_5bb6863026578.png')}}" 
                            alt="Card image">
                    </a>
                    <h5 class="card-title mt-2">{{ $hotel->name }}</h5>
                    <p class="card-text">
                        {{ $hotel->address }} 
                    </p>
                    
                </div>
            </div>
        @endforeach
    </div>
@endsection

