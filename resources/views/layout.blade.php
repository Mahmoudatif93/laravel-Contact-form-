<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}"> <!-- assest to get css files -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css') }} "> <!-- assest to get css files -->
	<script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>


</head>
<body>
<!--start header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Laravel Pro</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('posts')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">HomePage</a>
      </li>
      @guest

      <li class="nav-item">
        <a class="nav-link" href="{{url('/register')}}">Register</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('/login')}}">Login</a>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link" href="">{{Auth::user()->name}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/logout')}}">LogOut</a>
      </li>
      @endguest
      




     
    </ul>
    

      

  </div>
</nav>
<!-- end header-->




	@yield("content")<!-- refer to section in posts page -->
</body>
</html>