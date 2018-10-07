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
            {{ $dest->title }} ({{ $dest->created_at->diffForHumans() }})
        </div>
        <div class="card-body">
            <div class="row mb-3">
				<div class="form-group">
                    <a href="{{asset('/storage/destination/cover/' . $dest->avatar )}}">
                        <img class="img-fluid img-thumbnail profile-img" src="{{asset('/storage/destination/cover/thumbnail/' . $dest->avatar )}}" 
                        alt="Card image" width="200" height="200">
                    </a>
                    @foreach(unserialize($dest->images) as $img)
                        <a href="{{asset('/storage/destination/gallery/' . $img )}}">
						    <img class="img-fluid img-thumbnail profile-img" src="{{asset('/storage/destination/gallery/thumbnail/' . $img )}}" 
                            alt="Card image" width="200" height="200">
                        </a>
					@endforeach
				</div>
            </div>
            <p class="card-text">
                {!! $dest->description !!}
            </p>
        </div> 
        <div class="card-footer">
            <div class="row">
                <a href="#"  class="btn btn-warning btn-sm mr-2"  data-toggle="modal" data-target="#{{ $dest->id }}">Edit</a>
                {!! Form::open(['method' => 'DELETE', 'route' => ['destination.destroy', $dest->id] ]) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                {!! Form::close() !!} 
            </div>
        </div>
    </div>

    <div class="modal fade text-muted english" id="{{ $dest->id }}">
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
                    {{ Form::model($dest, array('route' => array('destination.update', $dest->id), 'files'=> true , 'method' => 'PUT')) }}
        
                        <div class="form-group">
                            {{ Form::label('title', 'Location') }}
                            {{ Form::text('title',null, array('class' => 'form-control', 'autofocus' => 'true')) }}
                        </div>
                        
                        <div class="form-group">
                            {{ Form::label('avatar', 'Profile Image') }}
                            {{ Form::file('avatar', array('class' =>'form-control btn btn-info')) }}
                            <br><br>
                            <img class="img-fluid img-thumbnail profile-img" src="{{asset('storage/destination/cover/thumbnail/' . $dest->avatar )}}" 
                             alt="Card image" width="100" heigth="100">
                        </div>

                        <div class="form-group">
                            {{ Form::label('images', 'Gallery Images') }}
                            {{ Form::file('images[]', array('multiple' =>true, 'class' =>'form-control btn btn-info')) }}
                            <br><br>
                            @foreach(unserialize($dest->images) as $img)
                                <img class="img-fluid img-thumbnail profile-img" src="{{asset('storage/destination/gallery/thumbnail/' . $img )}}" 
                                alt="Card image" width="100" height="100">
                            @endforeach
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
                
                <!-- Modal footer -->
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                </div> 
            </div>
        </div>
    </div>
    
@endsection