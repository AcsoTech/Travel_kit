@extends('layouts.default')

@section('style')
<style>
    .container-scroll{
        background-color:white;
    }
</style>
@endsection 

@section('slide')
    <div class="li-title ml-3">Hotel</div>
    <li>
        <a href="">1</a>
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
        <div class="row">
            <div class="card-deck english text-center">
                <div class="card bg-default">

                    <div id="demo" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="card-img-top " src="{{asset('img/hotel/hotel1.jpg')}}" 
                                width="150" height="150" alt="Card image cap">
                            </div>
                            <div class="carousel-item">
                                <img class="card-img-top " src="{{asset('img/hotel/hotel3.jpg')}}" 
                                width="150" height="150" alt="Card image cap">
                            </div>
                            <div class="carousel-item">
                                <img class="card-img-top " src="{{asset('img/hotel/hotel2.jpg')}}" 
                                width="150" height="150" alt="Card image cap">
                            </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>

                    <P class="p-1 m-2">Standard Double <i class="fa fa-angle-right float-right"></i></P>
                    <P class="p-1 m-2"><i class="fa fa-user-o "></i> Max 2 adults</P><hr>
                    <p class="text-center text-primary"><i class="fa fa-angle-down float-center" 
                        data-toggle="collapse" data-target="#demo1"></i>  Show More Options 
                    </p>
                    <div id="demo1" class="collapse">
                        <div class="card-body text-left pt-0">
                            <p class="card-text text-success"><i class="fa fa-user "></i>&nbsp;&nbsp;2<P>
                            <p class="card-text text-success"><i class="fa fa-check "></i> &nbsp;&nbsp;Breakfast<P>
                            <p class="card-text text-success"><i class="fa fa-certificate"></i> &nbsp;&nbsp;Special detail<P>
                            <p class="card-text text-success"><i class="fa fa-tags"></i>&nbsp;&nbsp; $3</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
@endsection