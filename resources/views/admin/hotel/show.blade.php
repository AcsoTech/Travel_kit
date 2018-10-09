{{-- @extends('layouts.master')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Hotel name</th>
                <th>Hotel address</th>
                <th>Normal Price</th>
                <th>Our Price</th>
                <th>Star Rate</th>
                <th>Credit</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>{{ $hotel->name }}</td>
            <td>{{ $hotel->address }}</td>
            <td>{{ $hotel->normal_price }}</td>
            <td>{{ $hotel->our_price }}</td>
            <td>{{ $hotel->star_rate }}</td>
            <td>{{ $hotel->credit }}</td>
            </tr>
        </tbody>
    </table>
@endsection
 --}}
@extends('layouts.master')

@section('content')
    <div>
        @foreach ($errors->all() as $message)
        <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Invalid !</strong> {{ $message }}
        </div>
        @endforeach
    </div>

    <div class="card">
        <div class="card-header">
            {{ $hotel->name }}
        </div>
        <div class="card-body">
            <div class="row mb-3">
				<div class="form-group">
                    <a href="{{asset('/storage/hotel/cover/' . $hotel->avatar )}}">
                        <img class="img-fluid img-thumbnail profile-img" src="{{asset('/storage/hotel/cover/thumbnail/' . $hotel->avatar )}}" 
                        alt="Card image" width="200" height="200">
                    </a>
                    @isset($hotel->images)
                        @foreach(unserialize($hotel->images) as $img)
                            <a href="{{asset('/storage/hotel/gallery/' . $img )}}">
                                <img class="img-fluid img-thumbnail profile-img" src="{{asset('/storage/hotel/gallery/thumbnail/' . $img )}}" 
                                alt="Card image" width="200" height="200">
                            </a>
					    @endforeach
                    @endisset
				</div>
            </div>
            <div class="row mb-3">
                <h5 class="text-muted">Create Room
                    <a href="#" data-toggle="modal" data-target="#create_room">  
                    <i class="fa fa-plus-circle fa-lg" ></i></a>
                </h5>
            </div>
            <div class="row mb-3">
                @foreach ($hotel->rooms as $room)
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                @foreach(unserialize($room->images) as $img)
                                    <div class="col-3 mt-3">
                                        <a href="{{asset('/storage/room/gallery/' . $img )}}">
                                            <img class="img-fluid img-thumbnail profile-img" src="{{asset('/storage/room/gallery/thumbnail/' . $img )}}" 
                                            alt="Card image" width="200" height="200">
                                        </a>
                                    </div>  
                                @endforeach
                            </div>
                            
                            <div class="card-title mt-2">
                                <p>{{ $room->roomtype }} </p>
                                <p>
                                    @foreach(unserialize($room->service) as $ser)
                                        <p class="text-primary">{!! $ser !!}</p>
                                    @endforeach
                                </p>
                                <p>{{ $room->hotel_id}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <p class="card-text">
                {!! $hotel->description !!}
            </p>
        </div> 
        <div class="card-footer">
            <div class="row">
                <a href="#"  class="btn btn-warning btn-sm mr-2"  data-toggle="modal" data-target="#edit_hotel">Edit</a>
                {!! Form::open(['method' => 'DELETE', 'route' => ['hotel.destroy', $hotel->id] ]) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                {!! Form::close() !!} 
            </div>
        </div>
    </div>

    <div class="modal fade text-muted english" id="create_room">
        <div class="modal-dialog modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
            
                    <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add New Room </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                    <!-- Modal body -->
                <div class="modal-body">   
                    {{-- Using the Laravel HTML Form Collective to create our form --}}
                    {{ Form::open(array('route' => 'room.store','files'=> true))}}
                        
                        {{ Form::hidden('hotel_id',$hotel->id) }}
                        <div class="form-group">
                            {{ Form::label('images', 'Gallery Images') }}
                            {{ Form::file('images[]', array('multiple' =>true, 'class' =>'form-control btn btn-info')) }}
                        </div>
                
                        <div class="form-group">
                            {{ Form::label('roomtype', 'Room Type') }}
                            {{ Form::text('roomtype',null, array('class' => 'form-control', 'autofocus' => 'true')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('service', 'Wifi') }}
                            {!! Form::checkbox('service[]','<i class="fa fa-wifi"></i>&nbsp; Wifi') !!}
                            
                        </div>

                        <div class="form-group">
                            {{ Form::label('service', 'Bath') }}
                            {!! Form::checkbox('service[]','<i class="fa fa-bath"></i>&nbsp; Bath') !!}
                            
                        </div>

                        <div class="form-group">
                            {{ Form::label('service', 'BreakFast') }}
                            {!! Form::checkbox('service[]','<i class="fa fa-birthday-cake"></i>&nbsp; Breakfast') !!}
                            
                        </div>

                        <div class="form-group">
                            {{ Form::label('service', 'Dinner') }}
                            {!! Form::checkbox('service[]','<i class="fa fa-birthday-cake"></i>&nbsp; Dinner') !!}
                        </div>
                        {{ Form::submit('Create New', array(' class' => 'btn btn-success btn-lg btn-block mt-5')) }}
                    {{ Form::close() }}
                </div>
                    <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                </div> 
            </div>
        </div>
    </div>

    
    <div class="modal fade text-muted english" id="edit_hotel">
        <div class="modal-dialog modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">   
                    {{-- Using the Laravel HTML Form Collective to create our form --}}
                    {{ Form::model($hotel, array('route' => array('hotel.update', $hotel->id), 'files'=> true , 'method' => 'PUT')) }}
        
                        <div class="form-group">
                            {{ Form::label('title', 'Location') }}
                            {{ Form::text('title',null, array('class' => 'form-control', 'autofocus' => 'true')) }}
                        </div>
                        
                        <div class="form-group">
                            {{ Form::label('avatar', 'Profile Image') }}
                            {{ Form::file('avatar', array('class' =>'form-control btn btn-info')) }}
                            <br><br>
                            <img class="img-fluid img-thumbnail profile-img" src="{{asset('storage/hotel/cover/thumbnail/' . $hotel->avatar )}}" 
                             alt="Card image" width="100" heigth="100">
                        </div>

                        <div class="form-group">
                            {{ Form::label('images', 'Gallery Images') }}
                            {{ Form::file('images[]', array('multiple' =>true, 'class' =>'form-control btn btn-info')) }}
                            <br><br>
                            @isset($hotel->images)
                                @foreach(unserialize($hotel->images) as $img)
                                    <img class="img-fluid img-thumbnail profile-img" src="{{asset('storage/hotel/gallery/thumbnail/' . $img )}}" 
                                    alt="Card image" width="100" height="100">
                                @endforeach
                            @endisset
                        </div>

                        <div class="form-group">
                            {{ Form::label('description', 'Description') }}
                            {{ Form::textarea('description',null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('check', 'Selection') }}
                            {{ Form::checkbox('check', 1, false) }}
                        </div>
                        
                        
                    
                        {{ Form::submit('Update', array(' class' => 'btn btn-success btn-lg btn-block mt-5')) }}
                    {{ Form::close() }}
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                </div> 
            </div>
        </div>
    </div>
    
@endsection