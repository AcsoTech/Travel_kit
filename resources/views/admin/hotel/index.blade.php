@extends('layouts.master')

@section('content')
    <div class="row mt-3">
        <h5 class="text-muted">Avaliable hotel in {{ $city->city }}
            <a href="#" data-toggle="modal" data-target="#create_dest">  <i class="fa fa-plus-circle fa-lg" ></i></a>
        </h5>
    </div>
    <div class="row mt-3">
        @foreach ($city->hotels as $hotel)
            <div class="card col-4  profile-img">
                <div class="card-body">
                    <a href="{{ route('hotel.show', $hotel->id) }}">
                        <img class="card-img-top" src="{{asset('storage/destination/cover/thumbnail/index_5bb6863026578.png')}}" 
                            alt="Card image">
                    </a>
                    <h5 class="card-title mt-2">{{ $hotel->name }}</h5>
                    <p class="card-text">
                        {{ $hotel->address }} 
                    </p>
                    
                </div>
            </div>
        @endforeach
    </div>

    <div class="modal fade text-muted english" id="create_dest">
        <div class="modal-dialog modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Adding New Hotel</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body model-scroll"  id="style-1">
                    {{-- Using the Laravel HTML Form Collective to create our form --}}
                    {{ Form::open(array('route' => 'hotel.store','files'=> true))}}
                        {{ Form::hidden('city_id', $city->id ) }}
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
                                {{ Form::label('avatar', 'Cover') }}
                                {{ Form::file('avatar', array('class' =>'form-control btn btn-info')) }}
                            </div>

                            <div class="form-group col-6">
                                {{ Form::label('images', 'Gallery Images') }}
                                {{ Form::file('images[]', array('multiple' =>true, 'class' =>'form-control btn btn-info')) }}
                            </div>
                        </div>
                        


                        <div class="form-group">
                            {{ Form::label('description', 'Description') }}
                            {{ Form::textarea('description',null, array('class' => 'form-control')) }}
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
 @endsection

