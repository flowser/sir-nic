
  <!doctype html>
  <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
  <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
  <!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
  <!--[if gt IE 8]><!-->
  <html class="no-js')}}" lang="en">
  <!--<![endif]-->

  <head>
      <!--====== USEFULL META ======-->
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Transportation & Agency Template is a simple Smooth transportation and Agency Based Template" />
      <meta name="keywords" content="Portfolio, Agency, Onepage, Html, Business, Blog, Parallax" />
      <meta name="csrf-token" content="{{csrf_token()}}" />

      <!--====== TITLE TAG ======-->
      <title>Carries HTML5 Business Template</title>

      <!--====== FAVICON ICON =======-->
      <link rel="shortcut icon" type="image/ico" href="{{URL::asset('front_theme/img/favicon.png')}}" />

      <!--====== STYLESHEETS ======-->
      <link rel="stylesheet" href="{{URL::asset('front_theme/css/normalize.css')}}">
      <link rel="stylesheet" href="{{URL::asset('front_theme/css/animate.css')}}">
      <link rel="stylesheet" href="{{URL::asset('front_theme/css/stellarnav.min.css')}}">
      <link rel="stylesheet" href="{{URL::asset('front_theme/css/owl.carousel.css')}}">
      {{-- <link href="{{URL::asset('front_theme/css/bootstrap.min.css')}}" rel="stylesheet"> --}}
      <link href="{{URL::asset('front_theme/css/font-awesome.min.css')}}" rel="stylesheet">

      <style>
            .nav>li>a:focus,
             .nav>li>a:hover {
                text-decoration: none;
                background-color: #b75454;
            }
            .stellarnav>ul>li>a {
                padding: 9px 20px;

            }
            .btn{
                border-radius: 10px;
            }
            .col-container {
                display: flex;
                width: 100%;
              }
              .col {
                flex: 1;
                padding: 16px;
              }


      </style>

      <!--====== MAIN STYLESHEETS ======-->
      <link href="{{URL::asset('front_theme/style.css')}}" rel="stylesheet">
      <link href="{{URL::asset('front_theme/css/responsive.css')}}" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <script src="{{URL::asset('front_theme/js/vendor/modernizr-2.8.3.min.js')}}"></script>
      {{-- <!--[if lt IE 9]>
          <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
          <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
          <![endif]-->
          <!--[if lt IE 8]>
              <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
          <![endif]--> --}}
  </head>

  <body >

      <div id="app">
            <!--START TOP AREA-->
            <header class="top-area" id="home">
                <div class="top-area-bg" data-stellar-background-ratio="0.6"></div>
                <div class="header-top-area">
                    <!--MAINMENU AREA-->
                    <div class="mainmenu-area" id="mainmenu-area">
                        <div class="mainmenu-area-bg"></div>
                        <!--Navbar-->
                        <nav class="navbar navbar-expand-lg navbar-dark primary-color">
                            <div class="container">
                                <!-- Navbar brand -->
                                <a class="navbar-brand" href="#">Navbar</a>

                                <!-- Collapsible content -->
                                <div class="collapse navbar-collapse" id="basicExampleNav">
                                <!-- Links -->
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <router-link to="/pub" class="nav-link"> Home
                                            <span class="sr-only">(current)</span>
                                         </router-link>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Services</a>
                                    </li>
                                    {{-- <!-- Dropdown -->
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                    </li> --}}
                                </ul>
                                <!-- Links -->

                                {{-- <form class="form-inline">
                                    <div class="md-form my-0">
                                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                                    </div>
                                </form> --}}
                                <ul class="nav navbar-nav navbar-right" style="margin: 11px;">
                                        @if (Route::has('login'))
                                           @guest
                                               <li style="padding-right: 10px;"><a href="{{ route('login') }}" class="btn btn-success">Login</a></li>
                                           @endguest
                                                   {{-- <li style="padding-right: 10px;"><a href="#" class="btn btn-warning">Register</a></li> --}}
                                           {{-- @if (Route::has('register'))
                                                   <li style="padding-right: 10px;"><a href="#" class="btn btn-default">Link</a></li>
                                            @endif --}}
                                        @endif
                                </div>
                                <!-- Collapsible content -->
                            </div>
                        </nav>
                        <!--/.Navbar-->

                    </div>
                    <!--END MAINMENU AREA END-->
                </div>
                <!--HOME SLIDER AREA-->
                <div class="welcome-slider-area">
                    <div class="welcome-single-slide slider-bg-one">
                        <div class="container">
                            <div class="row flex-v-center" style="height: 500px;">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="welcome-text text-center" style="padding-top: 160px;">
                                        <h1 style="margin-bottom:0px">WE MAKE STRONGEST SERVICE ABOVE THE WORLD</h1>
                                        <p style="margin-bottom:0px">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                        <div class="home-button">
                                            <a href="#">Our Service</a>
                                            <a href="#">Get A Quate</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="welcome-single-slide slider-bg-two">
                        <div class="container">
                            <div class="row flex-v-center" style="height: 500px;">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="welcome-text text-center">
                                        <h1 style="margin-bottom:0px"> WE MAKE STRONGEST SERVICE ABOVE THE WORLD</h1>
                                        <p style="margin-bottom:0px">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                        <div class="home-button">
                                            <a href="#">Our Service</a>
                                            <a href="#">Get A Quate</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END HOME SLIDER AREA-->
            </header>
            <!--END TOP AREA-->

        <div class="content">
            <pub-main></pub-main>
        </div>
      </div>
  </body>

  <!--FOOER AREA END-->

      <script src="{{asset("js/app.js")}}"></script>
      <!--====== SCRIPTS JS ======-->
      <script src="{{URL::asset('front_theme/js/vendor/jquery-1.12.4.min.js')}}"></script>
      <script src="{{URL::asset('front_theme/js/vendor/bootstrap.min.js')}}"></script>

      <!--====== PLUGINS JS ======-->
      <script src="{{URL::asset('front_theme/js/vendor/jquery.easing.1.3.js')}}"></script>
      <script src="{{URL::asset('front_theme/js/vendor/jquery-migrate-1.2.1.min.js')}}"></script>
      <script src="{{URL::asset('front_theme/js/vendor/jquery.appear.js')}}"></script>
      <script src="{{URL::asset('front_theme/js/owl.carousel.min.js')}}"></script>
      <script src="{{URL::asset('front_theme/js/stellar.js')}}"></script>
      <script src="{{URL::asset('front_theme/js/wow.min.js')}}"></script>
      <script src="{{URL::asset('front_theme/js/stellarnav.min.js')}}"></script>
      <script src="{{URL::asset('front_theme/js/contact-form.js')}}"></script>
      <script src="{{URL::asset('front_theme/js/jquery.sticky.js')}}"></script>

      <!--===== ACTIVE JS=====-->
      <script src="{{URL::asset('front_theme/js/main.js')}}"></script>

  </html>
