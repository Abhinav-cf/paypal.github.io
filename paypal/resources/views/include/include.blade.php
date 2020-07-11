<!DOCTYPE html>
<html lang="en">
<head>
    <title>Navbar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('../css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('../css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('../css/style.css')}}">
    <script src="{{asset('../js/bootstrap.min.js')}}"></script>
</head>
<body>
@section('navigation')
<nav class="navbar navbar-expand-lg navbar-light static-top">
    <div class="container">
      <a class="navbar-brand" href="#">
            <img src="{{asset('img/logo.png')}}" alt="logo">
          </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home
                </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="service">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signup">Signup</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
@show

<div class="container">
    @yield('content')
</div>

@section('footer')
<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4 pb-4 mt-5">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">
      <div class="row">
        <div class="col-md-6">
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Footer Content</h5>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa repellat voluptas illum quaerat, voluptates velit itaque sed id ratione quis perferendis cum quod necessitatibus quo</p>
  
        </div>
        <hr class="clearfix w-100 d-md-none">
  
        <!-- Grid column -->
        <div class="col-md-2">
  
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
  
          <ul class="list-unstyled list-text">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>
  
        </div>
        <hr class="clearfix w-100 d-md-none">
        <div class="col-md-2">
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
  
          <ul class="list-unstyled list-text">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>
  
        </div>
        <hr class="clearfix w-100 d-md-none">
        <div class="col-md-2">
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
          <ul class="list-unstyled list-text">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer -->
@show
</body>
</html>