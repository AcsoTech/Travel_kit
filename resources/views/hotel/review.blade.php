@extends('layouts.default')
<style>
    .container-scroll{
        background-color:white;
        height:100%;
    }
</style>
@section('slide')
    <div class="li-title ml-3">Hotel</div>
    <li>
    <a href="{{ url('/room') }}">Hotel</a>
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
    <div class="row mt-3">
        <div class="card bg-light col">  
            <div class="card-body">
                <p class="text-dark text-uppercase card-title font-weight-bold">
                   Mr.kyawsonaung
                </p>
                <p class="text-primary"><i class="fa fa-location-arrow"></i> Yangon</p>
                <p>
                    Badges are used to add additional information to 
                    any content. Use the .badge class together
                    with a contextual class (like .badge-secondary) 
                    within <span> elements to create rectangular badges.
                    Note that badges scale to match the size of the
                    parent element (if any):
                </p>
            </div>
       </div>
    </div>
     <div class="row mt-3">
        <div class="card bg-light col">  
            <div class="card-body">
                <p class="text-dark text-uppercase card-title font-weight-bold">
                   Mr.kyawsonaung
                </p>
                <p class="text-primary"><i class="fa fa-location-arrow"></i> Yangon</p>
                <p>
                    Badges are used to add additional information to 
                    any content. Use the .badge class together
                    with a contextual class (like .badge-secondary) 
                    within <span> elements to create rectangular badges.
                    Note that badges scale to match the size of the
                    parent element (if any):
                </p>
            </div>
       </div>
    </div>
     <div class="row mt-3">
        <div class="card bg-light col">  
            <div class="card-body">
                <p class="text-dark text-uppercase card-title font-weight-bold">
                   Mr.kyawsonaung
                </p>
                <p class="text-primary"><i class="fa fa-location-arrow"></i> Yangon</p>
                <p>
                    Badges are used to add additional information to 
                    any content. Use the .badge class together
                    with a contextual class (like .badge-secondary) 
                    within <span> elements to create rectangular badges.
                    Note that badges scale to match the size of the
                    parent element (if any):
                </p>
            </div>
       </div>
    </div>
     <div class="row mt-3">
        <div class="card bg-light col">  
            <div class="card-body">
                <p class="text-primary card-title">
                    One of the best hotel in Myanmar!
                </p>
                <p>
                    Badges are used to add additional information to 
                    any content. Use the .badge class together
                    with a contextual class (like .badge-secondary) 
                    within <span> elements to create rectangular badges.
                    Note that badges scale to match the size of the
                    parent element (if any):
                </p>
            </div>
       </div>
    </div>
   
@endsection