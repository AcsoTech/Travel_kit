@extends('layouts.default')

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
<button type="button" class="btn btn-default">{{ ( ! empty($hotels[0]) ? $hotels[0]->city->city : 'Not Available') }}</button>
@endsection

@section('content')
@foreach($hotels as $hotel)
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
        </div>
    </div>
@endforeach

    <div class="fixed_button mb-1">
        <a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#filter">
            <i class="fa fa-balance-scale"></i> Filter
        </a>
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
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="model-scroll" id="style-1">
                            <p class="text-light bg-info">Sort by: <i class="fa fa-sort"></i></p>
                            <div class="form-group">
                                <select class="form-control" name="sort">
                                    <option value="1">Price (Height to Low)</option>
                                    <option value="2">Price (Low to Hight)</option>
                                    <option value="3">Star (5 to 0)</option>
                                    <option value="4">Star (0 to 5)</option>
                                   
                                </select>
                            </div>
                            <br>
                            <p class="text-light bg-info">Filter by: <i class="fa fa-balance-scale"></i></p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">   
                                    <span class="input-group-text">Price</span>
                                </div>
                                <input type="number" name="min_price" class="form-control" placeholder="Min Price" required>
                                <input type="number" name="max_price" class="form-control" placeholder="Max Price" required>
                            </div>  
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

 