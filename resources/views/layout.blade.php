<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Himalayan Homestay Nepal</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Owl Carousel for Testimonial-->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> --}}

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    <header class="header_area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{ url('/') }}"> <img src="{{ asset('images/logo1.png') }}" alt="image failed to load"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li> 
                        <li class="nav-item"><a class="nav-link" href="{{ route('foodAccomodation') }}">Food & Accomodation</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('gallery') }}">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('activities') }}">Activities</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('about-us') }}">About us</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('foodAccomodation') }}">Contact</a></li>
                    </ul>
                </div> 
            </nav>
        </div>
    </header>
    <div>
        @yield('content')
    </div>
    <footer class="page-footer font-small special-color-dark pt-4" style="background-color: grey; color: #fff;">

        <!-- Footer Elements -->
        <div class="container">
    
          <!-- Social buttons -->
          <ul class="list-unstyled list-inline text-center">
            <li class="list-inline-item">
              <a class="btn-floating btn-fb mx-1" href="https://www.facebook.com/himalayanhomestaynepal" target="_blank" style="color: #fff;">
                <i class="fa fa-facebook" style="font-size: 40px;"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-gplus mx-1" href="https://www.instagram.com" target="_blank" style="color: #fff;">
                <i class="fa fa-instagram" style="font-size: 40px;"> </i>
              </a>
            </li>
          </ul>
          <!-- Social buttons -->
    
        </div>
        <!-- Footer Elements -->
    
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3" style="margin-bottom: 10px;"> &copy; 2018-2019 Copyright <br>
         Site by&nbsp; <a href="http://www.prabhubudhathoki.com.np" style="color: purple;" target="_blank">Prabhu Budhathoki</a>
        </div>
        <!-- Copyright -->
    
      </footer>

</body>
</html>