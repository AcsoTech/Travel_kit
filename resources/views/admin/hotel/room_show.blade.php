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

<div class="row mb-3">
    <div class="card" style="width:100%">
        <div class="card-header">Room Type - {{ $room->room_type }}</div>
        <div class="card-body">
            <div class="row ml-2">
                @foreach(unserialize($room->images) as $img)
                    <div class="col-3 mt-3">
                        <a href="{{asset('/storage/room/gallery/' . $img )}}">
                            <img class="img-fluid img-thumbnail profile-img" src="{{asset('/storage/room/gallery/thumbnail/' . $img )}}" 
                            alt="Card image">
                        </a>
                    </div>  
                @endforeach
            </div>
            
            <div class="row ml-2 mt-3">
                <table class="table">
                    <tr>
                        <th>Room Type</th>
                        <td>{{ $room->room_type }}</td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>{{ $room->price }}</td>
                    </tr>
                    <tr>
                        <th>Service</th>
                        <td>
                             @isset($room->services)
                                @foreach(unserialize($room->services) as $ser)
                                    <p class="mr-5">{!! $ser !!}</p>
                                @endforeach  
                            @endisset
                        </td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{ $room->description }}</td>
                    </tr>
                </table>
            </div>
        </div> 
        <div class="card-footer">   
        <div class="row">
             <a href="#" class="btn btn-warning btn-sm mr-3" data-toggle="modal" data-target="#edit_room">Edit</a>
            {!! Form::open(['method' => 'DELETE', 'route' => ['room.destroy', $room->id] ]) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm mr-3']) !!}
            {!! Form::close() !!} 
            <a href="{{ route('hotel.show', $room->hotel_id) }}" class="btn btn-primary btn-sm">Back Hotel</a>
        </div>
        </div>
    </div>
</div>

 <div class="modal fade text-muted english" id="edit_room">
    <div class="modal-dialog modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
        
                <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit Room</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
                <!-- Modal body -->
            <div class="modal-body">   
                {{-- Using the Laravel HTML Form Collective to create our form --}}
                {{ Form::model($room, array('route' => array('room.update', $room->id), 'files'=> true , 'method' => 'PUT')) }}
                    
                    {{ Form::hidden('hotel_id',$room->hotel_id) }}
                    <div class="form-group">
                        {{ Form::label('images', 'Gallery Images') }}
                        {{ Form::file('images[]', array('multiple' =>true, 'class' =>'form-control btn btn-info')) }}
                        <br><br>
                        @isset($room->images)
                            @foreach(unserialize($room->images) as $img)
                                <img class="img-fluid img-thumbnail profile-img" src="{{asset('storage/room/gallery/thumbnail/' . $img )}}" 
                                alt="Card image" width="100" height="100">
                            @endforeach
                        @endisset
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
                    {{ Form::submit('Update Room', array(' class' => 'btn btn-success btn-lg btn-block mt-1')) }}
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