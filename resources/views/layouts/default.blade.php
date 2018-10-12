<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap_4.css') }}">
    <link rel="stylesheet" href="{{ asset('css/simple-sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @yield('style')

</head>
<body>
    <div id="wrapper" class="fixed-top">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav english">
                
                <li class="sidebar-brand mb-5">
                   <img src="{{ asset('img/logo.png') }}" alt="hello" width="250" height="150">
                </li>
                <hr>
                <div class="slide-scroll">
                    @yield('slide')
                </div>

            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-md navbar-dark">
            <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#menu-toggle" id="menu-toggle"> 
                            <i class="fa fa-bars text-white"></i>Menu
                        </a>
                    <li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="logo-text" href="/">Taveller's Kit</a><br>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
    {{-- <div class="container-fluid mt-5 container-scroll" id="style-1"> --}}
    <div class="container-fluid mt-5">
        @yield('content')
    </div>               
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script> 
    <script src="{{ asset('js/bootstrap_4.js') }}"></script> 
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>