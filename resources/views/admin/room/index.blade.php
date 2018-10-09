@extends('layouts.master')
@section('content')
    <div class="row mt-3">
        <h5 class="text-muted">Create Room
            <a href="#" data-toggle="modal" data-target="#create_room">  <i class="fa fa-plus-circle fa-lg" ></i></a>
        
        </h5>
    </div>

    @foreach ($errors->all() as $message)
    <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Invalid !</strong> {{ $message }}
    </div>
    @endforeach

    @foreach ($rooms as $room)
        <div class="row mt-3">
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
        </div>
    @endforeach

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
                        

                        <div class="form-group">
                            {{ Form::label('images', 'Gallery Images') }}
                            {{ Form::file('images[]', array('multiple' =>true, 'class' =>'form-control btn btn-info')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::hidden('hotel_id',1, array('class' => 'form-control', 'autofocus' => 'true')) }}
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
                
                <!-- Modal footer -->
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                </div> 
            </div>
        </div>
    </div>
@endsection