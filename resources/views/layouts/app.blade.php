<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda+One">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
 <body class="container">
   
   
        <nav class="navbar navbar-expand-xl navbar-light bg-light">
            <a href="#" class="navbar-brand"><i class="fa fa-cube"></i>Brand<b>Name</b></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
      
            <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
                <div class="navbar-nav">
                    <a href="#" class="nav-item nav-link active">Home</a>
                    <a href="#" class="nav-item nav-link">Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Web Design</a>
                            <a href="#" class="dropdown-item">Web Development</a>
                            <a href="#" class="dropdown-item">Graphic Design</a>
                            <a href="#" class="dropdown-item">Digital Marketing</a>
                        </div>
                    </div>
                    <a href="{{route('post')}} " class="nav-item nav-link">Post</a>
                    <a href=" {{route('sim')}} " class="nav-item nav-link">Sim</a>
                </div>
                
                <div class="navbar-nav ml-auto">
                    @guest
                         <a href="{{route('register')}} " class="nav-item nav-link">Register</a>
                    <a href="{{route('login')}} " class="nav-item nav-link">Login</a>
                    @endguest
                   
                    @auth
                        <a href="#" class="nav-item nav-link notifications"><i class="fa fa-bell-o"></i><span class="badge">1</span></a>
                    <a href="#" class="nav-item nav-link messages"><i class="fa fa-envelope-o"></i><span class="badge">10</span></a></a>
                    <div class="nav-item dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"> {{auth()->user()->name}}<b class="caret"></b></a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item"><i class="fa fa-user-o"></i> Profile</a></a>
                            <a href="#" class="dropdown-item"><i class="fa fa-calendar-o"></i> Calendar</a></a>
                            <a href="#" class="dropdown-item"><i class="fa fa-sliders"></i> Settings</a></a>
                            <div class="dropdown-divider"></div>
                            <form action="{{route('logout')}} " method="post" class="d-inline">
                            @csrf
                            <button type="submit" class="dropdown-item" ><i class="material-icons">&#xE8AC;</i>Logout</button>
                            
                     
                            </form>
                              </div>
                    </div>
                    @endauth
                    
                </div>
            </div>
        </nav>
         @yield('content')
         @yield('scripts')
</body>
</html>