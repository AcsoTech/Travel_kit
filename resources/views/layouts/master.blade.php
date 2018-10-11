<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap_4.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin_style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @yield('style')
</head>
<body>
    <nav class="navbar navbar-expand-md bg-info navbar-light fixed-top">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="{{ url()->previous() }}"> <i class="fa fa-arrow-left"></i> &nbsp; Back</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('hotel.index') }}">Hotel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Other
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('destination.index') }}">Destination</a>
                    <a class="dropdown-item" href="{{ route('city.index') }}">City</a>
                </div>
                </li>
            </ul>
        </div>  
    </nav>
<br>

<div class="container mt-5">
    
    @if(session('flash_message'))
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Notification :</strong> {{ session('flash_message') }}
        </div>
    @endif

    @if(session('error_message'))
        <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Notic !</strong> {{ session('error_message') }}
        </div>
    @endif

    @yield('content')

</div>

    @yield('script')
    <script src="https://cdn.ckeditor.com/4.10.1/full/ckeditor.js"></script>
    <script>
			CKEDITOR.replace( 'description' );
	</script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap_4.js') }}"></script>
</body>
</html>