@extends('layouts.master')
@section('slide')
    @include('layouts.adminslide')
@endsection
@section('content')
    <div class="col-md-8 offset-2">
        @foreach ($errors->all() as $message)
        <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Invalid !</strong> {{ $message }}
        </div>
        @endforeach

        @if(session('flash_message'))
            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Notification</strong> {{ session('flash_message') }}
            </div>
        @endif

        <button type="button" class="btn btn-success ml-5 pt-2" data-toggle="modal" data-target="#myModal">
        Add City <i class="fa fa-plus-circle fa-lg"></i>
    </button>
    
    <div class="modal fade text-muted english" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Adding New City</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">   
                    {{-- Using the Laravel HTML Form Collective to create our form --}}
                    {{ Form::open(array('route' => 'city.store')) }}

                    <div class="form-group">
                        {{ Form::label('city', 'City Name') }}
                        {{ Form::text('city', null, array('class' => 'form-control','placeholder' => 'Yangon' )) }}
                    <br>   
                        {{ Form::submit('Create New', array(' class' => 'btn btn-success btn-lg btn-block')) }}
                        {{ Form::close() }}
                    </div>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                </div> 
            </div>
        </div>
    </div>

    <table class="table english text-white mt-5">
        <thead>
        <tr>
            <th>#</th>
            <th>City</th>
            <th>Created_at</th>
            <th>Updated_at</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            @foreach($cities as $city)
            
                <tr>
                    <td>{{ $city->id }}</td>
                    <td>{{$city->city }}</td>
                    <td>{{$city->created_at }}</td>
                    <td>{{$city->updated_at }}</td>
                    <td>
                        <div class="row">
                            <a href="#"  class="btn btn-primary btn-sm mr-2"  data-toggle="modal" data-target="#{{ $city->id }}">Edit</a>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['city.destroy', $city->id] ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!} 
                        </div>
                    </td>
                </tr>
                   <div class="modal fade text-muted english" id="{{ $city->id }}">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit City</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                
                                <!-- Modal body -->
                                <div class="modal-body">   
                                    {{-- Using the Laravel HTML Form Collective to create our form --}}
                                   {{ Form::open(array('route' => array('city.update', $city->id), 'method' => 'PUT')) }}

                                    <div class="form-group">
                                        {{ Form::label('city', 'City Name') }}
                                        {{ Form::text('city', $city->city , array('class' => 'form-control','placeholder' => 'Yangon' )) }}
                                    <br>   
                                        {{ Form::submit('Save', array(' class' => 'btn btn-success btn-lg btn-block')) }}
                                        {{ Form::close() }}
                                    </div>
                                </div>
                                
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                </div> 
                            </div>
                        </div>
                    </div>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection