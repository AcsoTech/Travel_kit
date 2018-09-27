@extends('layouts.default')

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
    <h3>Room Service</h3>
    <div class="container pl-4">
        <div class="row">
            <div class="card-deck english">
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
                                        <img class="card-img-top " src="{{asset('img/hotel1.jpg')}}" 
                                        width="200" height="200" alt="Card image cap">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="card-img-top " src="{{asset('img/hotel3.jpg')}}" 
                                        width="200" height="200" alt="Card image cap">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="card-img-top " src="{{asset('img/hotel2.jpg')}}" 
                                        width="200" height="200" alt="Card image cap">
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


        
                    <!-- <img class="card-img-top " src="{{asset('img/hotel1.jpg')}}" 
                    width="200" height="200" alt="Card image cap"> -->
                    <h5 class="p-1 m-2">Standard Double <i class="fa fa-angle-right float-right"></i></h5>
                    <h6 class="p-1 m-2"><i class="fa fa-user-o "></i> Max 2 adults</h6><hr>
                   <p class="text-center text-primary"><i class="fa fa-angle-down float-center" 
                   data-toggle="collapse" data-target="#demo1"></i>  Show More Options </p>
                        <div id="demo1" class="collapse">
                            <div class="card-body text-left pt-0">
                                    <p class="card-text text-success"><i class="fa fa-user "></i>&nbsp;&nbsp;  2<br>
                                    <i class="fa fa-check "></i> &nbsp;&nbsp;  Breakfast<br>
                                    <i class="fa fa-certificate"></i> &nbsp;&nbsp; Special detail<br>
                                    <i class="fa fa-tags"></i> &nbsp;&nbsp; $3</p>
                                    
                                    </p>
                            </div>
                        </div>
                </div>
                <div class="card bg-default">
                    <div id="mo" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#mo" data-slide-to="0" class="active"></li>
                            <li data-target="#mo" data-slide-to="1"></li>
                            <li data-target="#mo" data-slide-to="2"></li>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="card-img-top " src="{{asset('img/hotel2.jpg')}}" 
                                width="200" height="200" alt="Card image cap">
                            </div>
                            <div class="carousel-item">
                                <img class="card-img-top " src="{{asset('img/hotel1.jpg')}}" 
                                width="200" height="200" alt="Card image cap">
                            </div>
                            <div class="carousel-item">
                                <img class="card-img-top " src="{{asset('img/hotel3.jpg')}}" 
                                width="200" height="200" alt="Card image cap">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#mo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#mo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                </div>

                    <!-- <img class="card-img-top " src="{{asset('img/hotel2.jpg')}}" 
                    width="200" height="200" alt="Card image cap"> -->
                    <h5 class="p-1 m-2">Superior Double Room <i class="fa fa-angle-right float-right"></i></h5>
                    <h6 class="p-1 m-2"><i class="fa fa-user-o "></i> Max 2 adults,plus 1 on extra bed<br>2 children(0-5 years)stay FREE!</h6><hr>
                   <p class="text-center text-primary"><i class="fa fa-angle-down float-center" 
                   data-toggle="collapse" data-target="#demo2"></i>  Show More Options </p>
                        <div id="demo2" class="collapse">
                            <div class="card-body text-left pt-0 text-success">
                                    <p class="card-text"><i class="fa fa-user fa-2x "></i>  2 &nbsp;&nbsp;<i class="fa fa-user "></i> 2<br>
                                    <i class="fa fa-check "></i>  Breakfast<br>
                                    <i class="fa fa-certificate"></i> &nbsp;&nbsp;Special detail<br>
                                    <i class="fa fa-tags"></i> &nbsp;&nbsp;$3</p>
                                    
                                    </p>
                            </div>
                        </div>
                </div> 
                
            </div>
        </div>
    </div>
@endsection