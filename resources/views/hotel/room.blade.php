@extends('layouts.default')

@section('slide')
    
@endsection

@section('mess')
<button type="button" class="btn btn-default">{{ $hotel->name }}</button>
@endsection

@section('content')
    <div class="row">
        <div class="card" style="width:100%; font-size:14px;">
            <div class="row">
                <div class="col-lg-6">
                    <img class="card-img-top img-thumbnail" src="{{asset('/storage/hotel/cover/thumbnail/' . $hotel->avatar )}}" alt="Avatar">
                </div>
                <div class="col-lg-6">
                    <div class="jumbotron">
                    <div class="row mb-2 ml-1">
                        <a href="{{ url('/review') }}" class="float-left card-link">
                            4 Like &nbsp;<i class="fa fa-heart-o"></i>
                        </a>
                        <a href="#" class="float-right card-link" data-toggle="modal" data-target="#review">
                            6 Reviews &nbsp;<i class="fa fa-commenting-o"></i>
                        </a>
                    </div>
                        {!!  $hotel->description !!}
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach(unserialize($hotel->images) as $img)
                    <div class="col-sm-6 col-lg-3">
                    <img  class="mt-1 img-thumbnail" src="{{asset('/storage/hotel/gallery/thumbnail/' . $img )}}" alt="Gallery">
                    </div>
                @endforeach
            </div>
            <div class="row mt-1">
                <div class="col-lg-6">
                    <table class="table">
                        <tr>
                            <th>Address</th>
                            <td>{{ $hotel->address }}</td>
                        </tr>
                        <tr>
                            <th>Normal Price</th>
                            <td>{{ $hotel->normal_price }}</td>
                        </tr>
                        <tr>
                            <th>Our Price</th>
                            <td>{{ $hotel->our_price }}</td>
                        </tr>
                            <tr>
                            <th>Credit</th>
                            <td>{{ $hotel->credit }}</td>
                        </tr>
                    </table>
                </div>
            </div>  
        </div>
    </div>
       
    <div class="row">
        @foreach ($hotel->rooms as $room)
        <div class="card mt-1" style="width:100%; font-size:14px;">
            <div class="jumbotron">
                <div class="col-lg-4 offset-lg-4 col-sm-8 offset-sm-2">
                    <div id="room_image{{ $room->id }}" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            @foreach(unserialize($room->images) as $img )
                                <li data-target="#room_image{{ $room->id }}" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                            @endforeach
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            @foreach(unserialize($room->images) as $img )
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <img src="{{asset('/storage/room/gallery/thumbnail/' . $img )}}"" alt="{{ $loop->index }}" width="500">
                                </div>
                            @endforeach
                        </div>
                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#room_image{{ $room->id }}" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#room_image{{ $room->id }}" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
                    <h6 class="text-primary text-center mt-2">{{ $room->room_type }}</h6>
                    <div class="row ml-1">
                        @foreach (unserialize($room->services) as $service)
                            <p class="text-primary mr-3">{!! $service !!}</p>
                        @endforeach
                    </div>
                    {!! $room->description !!}
            </div>
        </div>
        @endforeach
    </div>
    <div class="modal fade" id="review">
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
                                    Badgessss are used to add additional information to 
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
                        <textarea class="form-control" rows="7" id="comment" placeholder="Write Something ..."></textarea>
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