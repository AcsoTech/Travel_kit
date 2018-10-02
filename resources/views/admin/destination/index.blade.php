@extends('layouts.master')
@section('slide')
    @include('layouts.adminslide')
@endsection
@section('content')

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
        @endif`
    <button type="button" class="btn btn-success ml-5 pt-2" data-toggle="modal" data-target="#myModal">
        Add New Destination<i class="fa fa-plus-circle fa-lg"></i>
    </button>
    <div class="modal fade text-muted english" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Adding New Destination</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">   
                    {{-- Using the Laravel HTML Form Collective to create our form --}}
                   
                    {{ Form::open(array('route' => 'destination.store','enctype'=>'multipart/form-data')) }}

                    <div class="form-group">
                        {{ Form::label('name', 'City Name') }}
                        {{ Form::text('name', null, array('class' => 'form-control','placeholder' => 'Yangon' )) }}
                    <br> 
                        {{ Form::label('img', 'Image') }}
                        {{ Form::file('img')}}
                    <br>
                        {{ Form::label('detail', 'Detail') }}
                        {{ Form::textarea('detail', null, array('class' => 'form-control','rows'=>'3','cols'=>'3' )) }}
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
    <div class="col bg-white english">
        <h5 class="text-muted">Top destination</h5>
        <div class="row">
        @foreach($dest as $dd)
            <div class="card col-lg-4 col-md-6 col-sm-12 noradius">
                  <div class="row">
                      <div class="card-text col-5">
                        <img class="card-img-top" src="{{asset('uploads/'.$dd->img)}}" alt="Card image cap">
                      </div>
                      <div class="card-text col-7 text-muted">
                        <h5>{{ $dd->name }}</h5>
                        <p>{{ $dd->detail }}</p>
                      </div>
                  </div>
            </div>
         @endforeach
           
           
        </div>
        <a href="" class="btn-block showmore text-muted  mt-1">Show More</a>
    </div> 
</div>


@endsection