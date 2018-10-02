@extends('layouts.master')


@section('slide')
    <div class="li-title ml-3">Admin panel</div>
    
    <li>
        <a href="{{ asset('/admin/create') }}">Create City</a>
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
    <div class="jumbotron text-center mt-5">
        <h1> Welcome to admin Panel</h1>
    </div>
@endsection
