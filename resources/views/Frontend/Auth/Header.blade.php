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

  <!-- Google Fonts -->
  {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"> --}}

  <!-- Vendor CSS Files -->
  {{-- <link href="{{url('Frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"> --}}
  {{-- <link href="{{url('Frontend/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet"> --}}
  {{-- <link href="{{url('Frontend/vendor/aos/aos.css')}}" rel="stylesheet"> --}}
  {{-- <link href="{{url('Frontend/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet"> --}}
  {{-- <link href="{{url('Frontend/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet"> --}}
  {{-- <link href="{{url('Frontend/vendor/remixicon/remixicon.css')}}" rel="stylesheet"> --}}

  <!-- Template Main CSS File -->
  {{-- <link href="{{url('Frontend/css/main.css')}}" rel="stylesheet"> --}}
  <link rel="stylesheet" href="{{url('Frontend/css/booking.css')}}">
  <link rel="stylesheet" href="{{url('Frontend/css/login.css')}}">
  <link rel="stylesheet" href="{{url('Frontend/css/signup.css')}}">
  <link rel="stylesheet" href="{{url('Frontend/css/Header.css')}}">

  </style>
</head>

<body>

    <nav class="navbar">
        <div class="logo">
        <a href="{{url('/')}}">
          <img id="logo" src="{{url('Frontend/img/logo.png')}}" alt="Logo">
        </a>
        </div>

        <div class="close-icon">
          <a href="{{url('/')}}"><img id="close" src="https://img.icons8.com/?size=512&id=43974&format=png" alt="Close"></a>
        </div>
      </nav>


</body>
