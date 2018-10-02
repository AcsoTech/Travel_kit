@extends('layouts.default')

@section('slide')
<li>
    <a href="{{ route('city.index') }}">City</a>
</li>
<li>
    <a href="{{ route('destination.index') }}">Destination</a>
</li>
@endsection

@section('content')
    <div class="col-md-8 offset-2">
        <div class="jumbotron">
            <h1 class="display-3">Jumbo heading</h1>
            <p class="lead">Jumbo helper text</p>
            <hr class="my-2">
            <p>More info</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
            </p>
        </div>
    </div>
@endsection