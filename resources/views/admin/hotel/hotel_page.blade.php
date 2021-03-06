@extends('layouts.master')

@section('content')
    <h5>Avaliable City</h5>
    <div class="row">
        @foreach($cities as $city)
            <div class="col-3">
                <a href="{{ route('city.show', $city->id) }}" class="link-text">
                    <div class="card text-center bg-default mt-3">
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
                    <th>#</th>
                    <th>Hotel name</th>
                    <th>City</th>
                    <th>Normal Price</th>
                    <th>Our Price</th>
                    <th>Star Rate</th>
                    <th>Credit</th>
                    <th>Hotel address</th>
                </tr>
            </thead>
            @foreach ($hotels as $hotel)
            <tbody>
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td><a href="{{ route('hotel.show', $hotel->id ) }}">{{ $hotel->name }}</a></td>
                <td>{{ $hotel->city->city }}</td>
                <td>{{ $hotel->normal_price }}</td>
                <td>{{ $hotel->our_price }}</td>
                <td>{{ $hotel->star_rate }}</td>
                <td>{{ $hotel->credit }}</td>
                <td>{{ $hotel->address }}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
@endsection

