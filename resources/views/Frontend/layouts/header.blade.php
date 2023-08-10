<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url('Frontend/img/favicon-32x32.png')}}" rel="icon">
  <link href="{{url('Frontend/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('Frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('Frontend/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{url('Frontend/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{url('Frontend/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{url('Frontend/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{url('Frontend/vendor/remixicon/remixicon.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('Frontend/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Nova
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    .login-button {
    background-color: #274361;
    color: #ffffff;
    padding: 12px 30px;
    border: none;
    border-radius: 50px;
    font-family: sans-serif
    cursor: pointer;
    transition: transform 0.3s ease-in-out;
}
.login-button:hover {
    transform: translateY(-5px);
}

.booking-button {
    background-color: greenyellow;
    color: #1b2f45;
    font-weight: 900;
    padding: 12px 30px;
    border: none;
    border-radius: 50px;
    font-family: sans-serif
    cursor: pointer;
    transition: transform 0.3s ease-in-out;
}
.booking-button:hover {
    transform: translateY(-5px);
}

#signup{
    background-color:#56B8E6;
    margin-right: -50px

}

//getstarted

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.documentation-container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

h1, h2 {
    color: #333;
}

.section {
    margin-bottom: 30px;
}

.section h2 {
    margin-bottom: 10px;
}

code {
    background-color: #f4f4f4;
    padding: 2px 5px;
    border-radius: 4px;
    font-family: monospace;
}

a {
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}


  </style>
</head>

<body class="page-index">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        {{-- <a href="{{url('/')}}" class="logo d-flex align-items-center"> --}}
        <img style="height:120px; weidth:120px" src="{{url('Frontend/img/logo.png')}}" alt="LOGO">
    {{-- </a> --}}
        <a href="{{url('/')}}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
        <h1 class="d-flex align-items-center" style="margin-left: -150px">OTG Ride</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar" style="max-width:1250px";>
        <ul>
          <li><a href="{{url('/')}}" class="active">Home</a></li>
          <li><a href="{{url('/about')}}">About</a></li>
          <li><a href="{{url('/vision')}}">Vision</a></li>
          <li><a href="{{url('/faq')}}">FAQs</a></li>
        <li><a href=" {{url('/contact')}}">Contact</a></li>
        <li><a href=" {{url('/booking')}}">
            <button class="booking-button">
                Book Now
            </button>
        </a></li>
        <li><a href=" {{url('/login')}}">
            <button class="login-button">
                Login
            </button>
        </a></li>
        <li><a href="{{(url('signup'))}}">
            <button class="login-button" id="signup">
                Signup
            </button>

        </a></li>
    </ul>
</nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
