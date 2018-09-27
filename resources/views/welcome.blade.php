<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap_4.css">
    <link rel="stylesheet" href="css/simple-sidebar.css">
    <link rel="stylesheet" href="css/test.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        
    </style>
</head>
<body>
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav english">
                
                <li class="sidebar-brand mb-5">
                   <img src="{{ asset('logo.png') }}" alt="hello" width="250" height="150">
                </li>
                <hr>
               <div class="s">
                <li>
                    <a href="{{ asset('/about') }}">About</a>
                </li>
                <li>
                    <a href="{{url('/home')}}">Home</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
               
                <hr>
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
            </div>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-sm bg-default side box">
 
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#menu-toggle" id="menu-toggle"> 
          <i class="fa fa-bars text-white"></i>
      </a>
   
  </ul>
  <ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="travel" href="#">Taveller's Kit</a>
            </li>
  </ul>
</nav>
  
        <!-- <a href="#menu-toggle" id="menu-toggle">Menu</a> -->
            <div class="container-fluid">
                
                <h1>Welcome Page</h1>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap_4.js"></script>
    <script>
        $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</body>
</html>