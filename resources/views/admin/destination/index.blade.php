@extends('layouts.default')

@section('slide')
<li>
    <a href="{{ route('city.index') }}">City</a>
</li>
<li>
    <a href="{{ route('admin.home') }}">Home</a>
</li>
<li>
    <a href="{{ route('destination.index') }}">Destination</a>
</li>
@endsection

@section('content')
    <div class="col-md-10 offset-1">
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
    
        <button type="button" class="btn btn-success ml-5 pt-2" data-toggle="modal" data-target="#create_dest">
            Add Destination <i class="fa fa-plus-circle fa-lg"></i>
        </button>
        
         <div class="col bg-white english">
        <h5 class="text-muted">Top destination</h5>
      
            <div class="row">
                  @foreach ($dests as $dest)
            <div class="card col-lg-4 col-md-6 col-sm-12 noradius" style="background-color:#D3D3D3">
                <div class="row">
                    <div class="card-text col-5">
                        <img class="card-img-top" src="{{asset('/uploads/images/admin/destination/profile/' . $dest->profile )}}" alt="Card image cap">
                    </div>
                    <div class="card-text col-7 text-muted">
                        <h5>{{$dest->place}}</h5>
                        <p>{{ $dest->description }}</p>
                        <p><a href="#">Detail</a></p>
                        <div class="form-group">
                            <div class="row">
                            {!! Form::open(['method' => 'EDIT', 'route' => ['destination.edit', $dest->id] ]) !!}
                                {!! Form::submit('Edit', ['class' => 'btn btn-primary btn-sm m-1']) !!}
                                {!! Form::close() !!} 
                                
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['destination.destroy', $dest->id] ]) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm m-1']) !!}
                                    {!! Form::close() !!} 
                            </div>
                        
                        </div>
                    </div>
                    
                </div>
            </div>
               @endforeach

        </div>
     
            <a href="" class="btn-block showmore text-muted  mt-1">Show More</a>
        </div>
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
                                {{ Form::label('place', 'Place') }}
                                {{ Form::text('place',null, array('class' => 'form-control', 'autofocus' => 'true')) }}
                            </div>
                            
                            <div class="form-group">
                                {{ Form::label('profile', 'Profile Image') }}
                                {{ Form::file('profile', array('class' =>'form-control btn btn-info')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('images', 'Gallery Images') }}
                                {{ Form::file('images[]', array('multiple' =>true, 'class' =>'form-control btn btn-info')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('description', 'Description') }}
                                {{ Form::textarea('description',null, array('class' => 'form-control')) }}
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
    </div>
    
@endsection