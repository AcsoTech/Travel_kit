@extends('layouts.default')
@section('style')
<style>
    .container-scroll{
        background-color:white;
    }
</style>
@endsection 

@section('slide')

<ul class="list-unstyled components">
    <p>Star Rate</p>
    @for($i =1; $i<6; $i++)
        <li>
            <a href="{{ route('user.hotel.star', $i) }}">{{ $i }} &nbsp;<i class="fa fa-star text-warning"></i></a>
        </li>
    @endfor
</ul>
    
@endsection

@section('mess')
<button type="button" class="btn btn-default">{{ $city->city }}</button>
@endsection

@section('content')
@foreach($city->hotels as $hotel)
    <div class="row mt-1">
        <div class="card col" style="width:100%">
            <a href="{{ route('user.hotel.room',$hotel->id) }}" class="card-link">
                <div class="row mb-1">
                    <img class="card-img-top card-hotel-image col-6 pt-1" src="{{asset('/storage/hotel/cover/thumbnail/' . $hotel->avatar )}}" alt="Avatar">
                    <div class="card-body col-6 p-1">
                        <p class="text-primary card-title">{{ $hotel->name }} &nbsp;
                            {{ $hotel->star_rate }} <i class="fa fa-star text-warning"></i>
                        </p>
                        <p class="location-link text-primary">
                            <i class="fa fa-location-arrow"></i>
                            {{ $hotel->address }}
                        </p>
                        <p class="text-warning mt-2"><i class="fa fa-flag"></i>&nbsp; {{ $hotel->credit }}</p>
                        <p class="text-primary"> Hotel Price&nbsp;{{ $hotel->normal_price }} <i class="fa fa-money"></i></p>
                        <p class="text-success"> Our Price&nbsp;{{ $hotel->our_price }} <i class="fa fa-money"></i></p>
                    </div>
                </div>
            </a>
            
            <div class="card-footer bg-white">
                 <a href="{{ url('/review') }}" class="float-left card-link">
                    4 Like &nbsp;<i class="fa fa-heart-o"></i>
                </a>
                  <a href="#" class="float-right card-link" data-toggle="modal" data-target="#review">
                    6 Reviews &nbsp;<i class="fa fa-commenting-o"></i>
                </a>
            </div>
        </div>
    </div>
@endforeach

    <div class="fixed_button mb-1">
        <a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#filter">
            <i class="fa fa-balance-scale"></i> Filter
        </a>
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

    <div class="modal fade" id="filter">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                <p class="modal-title card-title">Sort and Filter</p>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="{{ route('user.hotel.filter') }}" method="post">
                    {{ csrf_field() }}
                <input type="hidden" name="city_id" value="{{ $city->id }}">
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="model-scroll" id="style-1">
                            <p class="text-light bg-info">Sort by: <i class="fa fa-sort"></i></p>
                            <div class="form-group">
                                <select class="form-control" name="sort">
                                    <option value="1">Price (Height to Low)</option>
                                    <option value="2">Price (Low to Hight)</option>
                                    <option value="3">Star (0 to 5)</option>
                                    <option value="4">Star (5 to 0)</option>
                                </select>
                            </div>
                            <br>
                            <p class="text-light bg-info">Filter by: <i class="fa fa-balance-scale"></i></p>
                            <h6>Star Rating</h6>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="star_rate" value="1">1
                                    <i class="fa fa-star text-warning"></i>
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="star_rate" value="2">2 
                                    <i class="fa fa-star text-warning"></i>
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="star_rate" value="3" checked>3
                                    <i class="fa fa-star text-warning"></i>
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="star_rate" value="4">4
                                    <i class="fa fa-star text-warning"></i>
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="star_rate" value="5">5
                                    <i class="fa fa-star text-warning"></i>
                                </label>
                            </div>
                            <br><br>
                            <h6>Price</h6>
                            <div class="form-group">
                                <input type="number" name="price" min="1000" class="form-control" placeholder="Almost Price">
                            </div>

                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection