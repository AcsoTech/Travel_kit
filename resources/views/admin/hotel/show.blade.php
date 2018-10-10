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
            <div class="float-left"><p class="text-primary">Hotel Name - {{ $hotel->name }}</p></div>
            <div class="float-right"><p class="text-warning">{{ $hotel->star_rate }}&nbsp;<i class="fa fa-star"></i></p></div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
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
            <div class="row mb-3">
                <table class="table">
                    <tbody>
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
                         <tr>
                            <th>Description</th>
                            <td>{{ $hotel->description }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <hr>
            <div class="row ml-2 mb-3">
                <h5 class="text-muted">Available Room
                    <a href="#" data-toggle="modal" data-target="#create_room">  
                    <i class="fa fa-plus-circle fa-lg" ></i></a>
                </h5>
            </div>
              <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Room Type</th>
                        <th>Price</th>
                        <th>Service</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($hotel->rooms as $room)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><a href="{{ route('room.show' , $room->id) }}">{{ $room->room_type }}</a></td>
                            <td>{{ $room->price }}</td>
                            <td>@isset($room->services)
                                    <div class="row">
                                        @foreach(unserialize($room->services) as $ser)
                                            <p class="text-primary mr-3">{!! $ser !!}</p>
                                        @endforeach  
                                    </div>
                                @endisset
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
                
                        <div class="row">
                            <div class="form-group col-6">
                                {{ Form::label('room_type', 'Room Type') }}
                                {{ Form::text('room_type',null, array('class' => 'form-control', 'autofocus' => 'true')) }}
                            </div>
                            <div class="form-group col-6">
                                {{ Form::label('price', 'Price') }}
                                {{ Form::number('price',null, array('class' => 'form-control')) }}
                            </div>
                        </div>

                        <div class="row ml-1 mt-3">
                            <div class="form-group mr-3">
                                {{ Form::label('service', 'Wifi') }}
                                {!! Form::checkbox('services[]','<i class="fa fa-wifi"></i>&nbsp; Wifi') !!}                               
                            </div>

                            <div class="form-group mr-3">
                                {{ Form::label('service', 'Bath') }}
                                {!! Form::checkbox('services[]','<i class="fa fa-bath"></i>&nbsp; Bath') !!}
                            </div>

                            <div class="form-group mr-3">
                                {{ Form::label('service', 'BreakFast') }}
                                {!! Form::checkbox('services[]','<i class="fa fa-birthday-cake"></i>&nbsp; Breakfast') !!}      
                            </div>

                            <div class="form-group mr-3">
                                {{ Form::label('service', 'Dinner') }}
                                {!! Form::checkbox('services[]','<i class="fa fa-birthday-cake"></i>&nbsp; Dinner') !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('description', 'Description') }}
                            {{ Form::textarea('description',null, array('class' => 'form-control')) }}
                        </div>
                        {{ Form::submit('Create New', array(' class' => 'btn btn-success btn-lg btn-block mt-1')) }}
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
        
                        <div class="row">
                            <div class="form-group col-6">
                                {{ Form::label('name', 'Hotel Name') }}
                                {{ Form::text('name',null, array('class' => 'form-control', 'autofocus' => 'true')) }}
                            </div>
                            <div class="form-group col-6">
                                {{ Form::label('address', 'Address') }}
                                {{ Form::text('address',null, array('class' => 'form-control')) }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                {{ Form::label('normal_price', 'Normal Price') }}
                                {{ Form::number('normal_price',null, array('class' => 'form-control')) }}
                            </div>
                            <div class="form-group col-6">
                                {{ Form::label('our_price', 'Our Price') }}
                                {{ Form::number('our_price',null, array('class' => 'form-control')) }}
                            </div>
                        </div>

                            <div class="row">
                            <div class="form-group col-6">
                                {{ Form::label('star_rate', 'Star Rate') }}
                                {{ Form::number('star_rate',null, array('class' => 'form-control')) }}
                            </div>
                            <div class="form-group col-6">
                                {{ Form::label('credit', 'Credit') }}
                                {{ Form::text('credit',null, array('class' => 'form-control')) }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                {{ Form::label('avatar', 'Profile Image') }}
                                {{ Form::file('avatar', array('class' =>'form-control btn btn-info')) }}
                                <br><br>
                                <img class="img-fluid img-thumbnail profile-img" src="{{asset('storage/hotel/cover/thumbnail/' . $hotel->avatar )}}" 
                                alt="Card image" width="100" heigth="100">
                            </div>

                            <div class="form-group col-6">
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
                        </div>
                        <div class="form-group">
                            {{ Form::label('description', 'Description') }}
                            {{ Form::textarea('description',null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('selection', 'Selection') }}
                            {{ Form::checkbox('selection', 1, false) }}
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