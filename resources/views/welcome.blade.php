@extends('layouts.default')

@section('slide')
    <div class="li-title ml-3">Product</div>
    <li>
        <a href="{{ asset('/hotel') }}">Hotel</a>
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
</div>

@endsection
