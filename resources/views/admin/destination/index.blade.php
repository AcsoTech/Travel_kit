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
    
    <div class="row mt-3">
        <h5 class="text-muted">Destination 
            <a href="#" data-toggle="modal" data-target="#create_dest">  <i class="fa fa-plus-circle fa-lg" ></i></a>
        </h5>
    </div>

    {{-- @foreach ($dests->chunk(3) as $chunk_dests) --}}
        <div class="row mt-3">
            @foreach ($dests as $dest)
                <div class="card col-4  profile-img">
                    <div class="card-body">
                        <a href="{{asset('storage/destination/cover/' . $dest->avatar )}}">
                            <img class="card-img-top" src="{{asset('storage/destination/cover/thumbnail/' . $dest->avatar )}}" 
                             alt="Card image">
                        </a>
                        <h5 class="card-title mt-2">{{ $dest->title }} {{ $dest->selection }} </h5>
                        <p class="card-text">
                            <a href="{{ route('destination.show', $dest->id ) }}" class="text-muted">See More ...</a>
                        </p>
                        
                    </div>
                    
                </div>
            @endforeach
        </div>
    {{-- @endforeach --}}

    <div class="row mt-3">
		<div style="margin: auto; max-width: 300px;">{{ $dests->links() }}</div>
    </div>

    <div class="modal fade text-muted english" id="create_dest">
        <div class="modal-dialog modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Adding New Destination</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">   
                    {{-- Using the Laravel HTML Form Collective to create our form --}}
                    {{ Form::open(array('route' => 'destination.store','files'=> true))}}
        
                        <div class="form-group">
                            {{ Form::label('title', 'Location') }}
                            {{ Form::text('title',null, array('class' => 'form-control', 'autofocus' => 'true')) }}
                        </div>
                        
                        <div class="form-group">
                            {{ Form::label('avatar', 'Cover Image') }}
                            {{ Form::file('avatar', array('class' =>'form-control btn btn-info')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('images', 'Gallery Images') }}
                            {{ Form::file('images[]', array('multiple' =>true, 'class' =>'form-control btn btn-info')) }}
                        </div>


                        <div class="form-group">
                            {{ Form::label('description', 'Description') }}
                            {{ Form::textarea('description',null, array('class' => 'form-control')) }}
                        </div>
                        
                        <div class="form-group">
                            {{ Form::label('check', 'Selection') }}
                            {{ Form::checkbox('check',1, false) }}
                        </div>
                    
                        {{ Form::submit('Create New', array(' class' => 'btn btn-success btn-lg btn-block mt-5')) }}
                        {{ Form::close() }}
                
                    <!-- Modal footer -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                </div> 
            </div>
        </div>
    </div>
    
@endsection

