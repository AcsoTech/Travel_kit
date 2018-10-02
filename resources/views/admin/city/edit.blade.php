@extends('layouts.master')

@section('style')

@endsection
@section('slide')
<div class="li-title ml-3 english text-muted">Admin panel</div>
    <li>
        <a href="{{ asset('/admin/create') }}">City</a>
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

                <form method="post" action="{{url('/admin/update/'. $cities->id )}}">
                    {{csrf_field()}}
                   
                        <div class="form-group">
                            <label for="city">City Name</label>
                            
                            <input type="city" name="city" class="form-control" id="city" value="{{$cities->city}}">
                        </div>
            
                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                </form>
@endsection