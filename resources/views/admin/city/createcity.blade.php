@extends('layouts.master')

@section('style')

@endsection
@section('slide')
<div class="li-title ml-3 english text-muted">Admin panel</div>
    <li>
        <a href="{{ asset('/admin/create') }}">City</a>
    </li>
    <li>
        <a href="">Flight</a>
    </li>
    <li>
        <a href="#">Bus</a>
    </li>
    <li>
        <a href="#">Restructure</a>
    </li>
    <hr>
    <div class="li-title ml-3">My Setting</div>
    <li>
        <a href="#">Events</a>
    </li>
    <li>
        <a href="#">About</a>
    </li>
    <li>
        <a href="#">Address</a>
    </li>
    <li>
        <a href="#">Contact</a>
    </li>

@endsection

@section('content')

    @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show mb-5">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>{{ $error }}</strong> 
        </div>
    @endforeach

    @if(session('status'))
        <div class="alert alert-success alert-dismissible fade show mb-5">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>{{ session('status') }}</strong> 
        </div>
    @endif
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-5">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>{{ session('success') }}</strong> 
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
                <form method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="city">City Name</label>
                        <input type="city" name="city" class="form-control" id="city" placeholder="Adding New City">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </form>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
             <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
            </div> 
      </div>
    </div>
  </div>
 
  <br><br>
  <table class="table english text-white">
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
                <a href="{{url('/admin/edit/'. $city->id )}}"  class="btn btn-primary btn-sm" >Edit</a>
                <a href="{{url('/admin/delete/'. $city->id )}}"  class="btn btn-danger btn-sm" >Delete</a> 
                
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
  

@endsection
