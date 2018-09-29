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
    <div class="row mt-3">
        <div class="card col" style="width: 28rem;">
            <a href="{{ url('/room') }}" class="card-link">
                <div class="row mb-1">
                    <img class="card-img-top card-hotel-image col-6 pt-1" src="{{asset('img/hotel/hotel1.jpg')}}" alt="Card image cap">
                    <div class="card-body col-6 p-1">
                        <p class="text-primary card-title">Bangan King Hotel &nbsp;
                            3 <i class="fa fa-star text-warning"></i>
                        </p>
                        <p class="location-link text-primary">
                            <i class="fa fa-location-arrow"></i>
                            No (15/B), 26 Street, Between 76 Street and 75 Street, Chan Aye 
                            Tharsan Township, Central Mandalay, Mandalay, Myanmar - View on map agoda
                        </p>
                        <p class="text-dark mt-2"><i class="fa fa-flag-o"></i>&nbsp; Excellent 8.8</p>
                        <p class="text-success"><i class="fa fa-wifi"></i>&nbsp; Free Wi-fi</p>
                        <p class="text-success"><i class="fa fa-cutlery"></i>&nbsp; Free Breafast</p>
                        <p class="text-success"><i class="fa fa-check"></i>&nbsp; Pay at the hotel</p>
                    </div>
                </div>
            </a>
            
            <div class="card-footer bg-white">
                 <a href="{{ url('/review') }}" class="float-left card-link">
                    4 Like &nbsp;<i class="fa fa-heart-o"></i>
                </a>
                  <a href="#" class="float-right card-link" data-toggle="modal" data-target="#myModal">
                    6 Reviews &nbsp;<i class="fa fa-commenting-o"></i>
                </a>
            </div>
        </div>
    </div>
     <div class="row mt-3">
        <div class="card col" style="width: 28rem;">
            <a href="{{ url('/room') }}" class="card-link">
                <div class="row mb-1">
                    <img class="card-img-top card-hotel-image col-6 pt-1" src="{{asset('img/hotel/hotel1.jpg')}}" alt="Card image cap">
                    <div class="card-body col-6 p-1">
                        <p class="text-primary card-title">Bangan King Hotel &nbsp;
                            3 <i class="fa fa-star text-warning"></i>
                        </p>
                        <p class="location-link text-primary">
                            <i class="fa fa-location-arrow"></i>
                            No (15/B), 26 Street, Between 76 Street and 75 Street, Chan Aye 
                            Tharsan Township, Central Mandalay, Mandalay, Myanmar - View on map agoda
                        </p>
                        <p class="text-dark mt-2"><i class="fa fa-flag-o"></i>&nbsp; Excellent 8.8</p>
                        <p class="text-success"><i class="fa fa-wifi"></i>&nbsp; Free Wi-fi</p>
                        <p class="text-success"><i class="fa fa-cutlery"></i>&nbsp; Free Breafast</p>
                        <p class="text-success"><i class="fa fa-check"></i>&nbsp; Pay at the hotel</p>
                    </div>
                </div>
            </a>
            <div class="card-footer bg-white">
                 <a href="{{ url('/review') }}" class="float-left card-link">
                    4 Like &nbsp;<i class="fa fa-heart-o"></i>
                </a>
                <a href="#" class="float-right card-link" data-toggle="modal" data-target="#myModal">
                    6 Reviews &nbsp;<i class="fa fa-commenting-o"></i>
                </a>
            </div>
        </div>
    </div>
     <div class="row mt-3">
        <div class="card col" style="width: 28rem;">
            <a href="{{ url('/room') }}" class="card-link">
                <div class="row mb-1">
                    <img class="card-img-top card-hotel-image col-6 pt-1" src="{{asset('img/hotel/hotel1.jpg')}}" alt="Card image cap">
                    <div class="card-body col-6 p-1">
                        <p class="text-primary card-title">Bangan King Hotel &nbsp;
                            3 <i class="fa fa-star text-warning"></i>
                        </p>
                        <p class="location-link text-primary">
                            <i class="fa fa-location-arrow"></i>
                            No (15/B), 26 Street, Between 76 Street and 75 Street, Chan Aye 
                            Tharsan Township, Central Mandalay, Mandalay, Myanmar - View on map agoda
                        </p>
                        <p class="text-dark mt-2"><i class="fa fa-flag-o"></i>&nbsp; Excellent 8.8</p>
                        <p class="text-success"><i class="fa fa-wifi"></i>&nbsp; Free Wi-fi</p>
                        <p class="text-success"><i class="fa fa-cutlery"></i>&nbsp; Free Breafast</p>
                        <p class="text-success"><i class="fa fa-check"></i>&nbsp; Pay at the hotel</p>
                    </div>
                </div>
            </a>
            <div class="card-footer bg-white">
                <a href="{{ url('/review') }}" class="float-left card-link">
                    4 Like &nbsp;<i class="fa fa-heart-o"></i>
                </a>
                <a href="#" class="float-right card-link" data-toggle="modal" data-target="#myModal">
                    6 Reviews &nbsp;<i class="fa fa-commenting-o"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                <p class="modal-title card-title">Hotel Reviews</p>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="model-scroll" id="style-1">
                        <div class="card bg-light col">  
                            <div class="card-body">
                                <p class="text-dark text-uppercase card-title font-weight-bold">
                                Mr.kyawsonaung 
                                </p>
                                <p class="text-primary"><i class="fa fa-location-arrow"></i> Yangon (4 day ago)</p>
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
                        <div class="card bg-light col">  
                            <div class="card-body">
                                <p class="text-dark text-uppercase card-title font-weight-bold">
                                Mr.Aung Nyi Thit
                                </p>
                                <p class="text-primary"><i class="fa fa-location-arrow"></i> Yangon  (1 day ago)</p>
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
                        <div class="card bg-light col">  
                            <div class="card-body">
                                <p class="text-dark text-uppercase card-title font-weight-bold">
                                Mr.Sai Yan Naing 
                                </p>
                                <p class="text-primary"><i class="fa fa-location-arrow"></i> Yangon (2 day ago)</p>
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
                        <div class="card bg-light col">  
                            <div class="card-body">
                                <p class="text-dark text-uppercase card-title font-weight-bold">
                                Mr.Htet Htet Kyaw 
                                </p>
                                <p class="text-primary"><i class="fa fa-location-arrow"></i> Yangon (3 m ago)</p>
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
                        <div class="card bg-light col">  
                            <div class="card-body">
                                <p class="text-dark text-uppercase card-title font-weight-bold">
                                Mr.Nay Chi Thit
                                </p>
                                <p class="text-primary"><i class="fa fa-location-arrow"></i> Yangon  (5 hr ago)</p>
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
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <input class="form-control" type="text"  placeholder="Write Something ..." 
                    data-toggle="modal" data-target="#comment">
                    <!-- <button class="btn btn-success mr-5" data-toggle="modal" data-target="#comment">Comment</button> -->
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="comment">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-muted">Comment</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                  
                <div class="modal-body">
                    <form action="" class="english bg-white">
                        <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" id="address" placeholder="Enter address" name="email">
                        </div>
                        <div class="form-group">
                        <label for="comment">Comment:</label>
                        <textarea class="form-control" rows="8" id="comment" placeholder="Write Something ..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary">Post</button>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" type="submit" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
        
            </div>
        </div>
    </div>
   
    
@endsection