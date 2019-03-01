
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
      {{-- <link rel="stylesheet" href="{{URL::asset('css/app.css')}}"> --}}

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
<<<<<<< HEAD
=======
              .owl-carousel .owl-controls .owl-nav .owl-prev, .owl-carousel .owl-controls .owl-nav .owl-next, .owl-carousel .owl-controls .owl-dot {
                cursor: pointer;
                cursor: hand;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                padding:0px;
            }
>>>>>>> everything ll set before we run nm run production


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
<<<<<<< HEAD
                            <div class="container">
                                <!-- Navbar brand -->
                                <a class="navbar-brand" href="#">Navbar</a>

=======
                            <div class="container-fluid">
                                <!-- Navbar brand -->
                                {{-- {{$organisation}} --}}
                                <div class="navbar-header">
                                    <img src="assets/organisation/img/logo/{{$organisation->logo}}" alt="logo" style="width: 50px;padding-bottom: 1px;">
                                </div>
>>>>>>> everything ll set before we run nm run production
                                <!-- Collapsible content -->
                                <div class="collapse navbar-collapse" id="basicExampleNav">
                                <!-- Links -->
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
<<<<<<< HEAD
                                        <router-link to="/pub" class="nav-link"> Home
                                            <span class="sr-only">(current)</span>
                                         </router-link>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Services</a>
=======
                                        <a href="" class="nav-link"> Home
                                            <span class="sr-only">(current)</span>
                                         </a>
                                    </li>
                                    <li class="nav-item">
                                        <router-link to="/pub" class="nav-link"> About US
                                        </router-link>
                                    </li>
                                    <li class="nav-item">
                                       <router-link to="/pub" class="nav-link"> Our Profile
                                        </router-link>
>>>>>>> everything ll set before we run nm run production
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
                        <div class="container-fluid">
                            <div class="row flex-v-center" style="height: 500px;">
                                <div class="col-md">
                                    <div class="welcome-text text-center" style="padding-top: 160px;">
                                        <h1 style="margin-bottom:0px">WE MAKE STRONGEST SERVICE ABOVE THE WORLD</h1>
                                        <h2 style="margin-bottom:0px">{{$organisation->name}}</h2>
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
                        <div class="container-fluid">
                            <div class="row flex-v-center" style="height: 500px;">
                                <div class="col-md">
                                    <div class="welcome-text text-center">
                                        <h1 style="margin-bottom:0px"> WE MAKE STRONGEST SERVICE ABOVE THE WORLD</h1>
                                        <h2 style="margin-bottom:0px">{{$organisation->name}}</h2>
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

        <!--PROMO AREA-->
        <section class="promo-area" id="adverts">
            <div class="promo-bottom-area ">
                <div class="promo-botton-area-bg" data-stellar-background-ratio="0.6"></div>
                   <div class="container-fluid">

                    @if($organisation->adverts == null)
                            {{'sorry, There are no services set for this organisation'}}
                    @else
                       @foreach($adverts as $advert)
                            <div class="d-flex col-md text-center">
                                    <div class="col-md-4">
                                        <img class="card-img-top" src="assets/organisation/img/website/adverts/{{$advert->advert_image}}" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="promo-bottom-content wow fadeIn">
                                            <h2>{{$advert->title}}</h2>
                                            <h3>{{$advert->subtitle}}</h3>
                                            <p>{{$advert->details}}</p>
                                            <a href="#" class="read-more" style="width: 400px;">
                                                Contact us and Get a quote
                                                <span>{{$organisation->phone}}</span>,
                                                <span>{{$organisation->landline}}</span>,
                                                <span>{{$organisation->organisation_email}}</span>
                                            </a>
                                        </div>
                                    </div>
                            </div>
                       @endforeach
                    @endif
                </div>
            </div>
        </section>
        <!--PROMO AREA END-->

        <!--BLOG AREA-->
        <section class="blog-area ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md">
                        <div class="area-title text-center wow fadeIn">
                            <h2>Our Latest Service Models</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                        @if($servicemodels == null)
                            {{'sorry, There are no service models set for this organisation'}}
                       @else
                            @foreach($servicemodels as $servicemodel)
                                <div class=" d-flex col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                    <div class="card flex-fill ">
                                            <img class="card-img-top" src="assets/organisation/img/website/services/servicemodels/{{$servicemodel->image}}" alt="" style="height: 260px;">
                                    <div class="card-body text-center">
                                            <h3><a href="">{{$servicemodel->service->title}}</a></h3>
                                            <h3><a href="">{{$servicemodel->title}}</a></h3>
                                            <p> {{$servicemodel->details}}</p>
                                            {{-- <a href="single-blog.html" class="read-more">Read More</a> --}}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                        @endif
                </div>
            </div>
        </section>
        <section class="blog-area " id="services">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md">
                        <div class="area-title text-center wow fadeIn">
                            <h2>Our Latest Service</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                        @if($organisation->services == null)
                            {{'sorry, There are no services set for this organisation'}}
                       @else
                            @foreach($organisation->services as $service)
                                <div class=" d-flex col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                    <div class="card flex-fill ">
                                            <img class="card-img-top" src="assets/organisation/img/website/services/{{$service->service_image}}" alt="" style="height: 260px;">
                                    <div class="card-body text-center">
                                            <h3><a href="">{{$service->title}}</a></h3>
                                            <p> {{$service->service_details}}</p>
                                            {{-- <a href="single-blog.html" class="read-more">Read More</a> --}}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                        @endif
                </div>
            </div>
        </section>
        <!--BLOG AREA END-->


        {{-- <!--CLIENTS AREA-->
        <section class="clients-area  wow fadeIn" id="clients">
            <div class="container-fluid">
               <div class="row">
                       <div class="col-md">
                           <div class="area-title text-center wow fadeIn">
                               <h2>Our Clients</h2>
                          </div>
                       </div>
                   </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="client-list">
                            <div class="single-client">
                                <img src="{{asset('front_theme/img/client/1.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CLIENTS AREA END--> --}}
      </div>
              <!--FOOER AREA-->
        <div class="footer-area dark-bg">
            <div class="footer-area-bg"></div>
            <div class="footer-top-area wow fadeIn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="subscribe-content">
                                <h2>{{$organisation->name}}</h2>
                                <p>WE OFFER QUICK & POWERFUL LOGISTICS SOLUTION</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="subscriber-form-area">
                                <form action="#" class="subsriber-form">
                                    <label for="subscriber-mail"><i class="fa fa-envelope-o"></i></label>
                                    <input type="email" name="subscriber-mail" id="subscriber-mail" placeholder="Enter Your Mail">
                                    <button type="submit">subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer-border"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-area wow fadeIn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                            <div class="single-footer-widget footer-about">
                                <h3>About Us</h3>

                                    @if($organisation->about == null)
                                        {{'sorry, There are no About Us set for this organisation'}}
                                   @else
                                    <p style="color:white">{{$organisation->about->who_we_are}}.</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                <div class="single-footer-widget list-widget" style="color:white">
                                    <h3>Contacts</h3>
                                        <ul>
                                            <li><i class=""></i> <a href="/about">{{$organisation->name}}</a></li>
                                            <li><i class="fa fa-phone"></i> <a href="callto:{{$organisation->phone}}">{{$organisation->phone}}</a></li>
                                            <li><i class="fa fa-phone"></i> <a href="callto:{{$organisation->landline}}">{{$organisation->landline}}</a></li>
                                            <li><i class="fa fa-map-marker"></i> <a href="mailto:{{$organisation->organisation_email}}">{{$organisation->organisation_email}}</a></li>
                                            <li><i class=""></i>{{$organisation->ward->name}} ward, {{$organisation->constituency->name}} Constituency,</li>
                                            <li><i class=""></i> {{$organisation->county->name}},.</li>
                                            <li><i class=""></i> {{$organisation->country->name}}</li>
                                        </ul>
                                </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                            <div class="single-footer-widget twitter-widget " style="color:white">
                                <h3>Our Services</h3>
                                <ul>

                                    @if($organisation->services == null)
                                        {{'sorry, There are no >services set for this organisation'}}
                                   @else
                                        @foreach($organisation->services as $service)
                                        <li>
                                            <div class="twitter-icon"><i class="fa fa-gear"></i></div>
                                            <div class="tweet-detail">
                                                <p>{{$service->title}}</p>
                                            </div>
                                        </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                            <div class="single-footer-widget instafeed-widget">
                                <h3>Customer Service</h3>
                                <ul>
                                    <li><a href="#"><img src="{{asset('front_theme/img/instafeed/1.jpg')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('front_theme/img/instafeed/2.jpg')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('front_theme/img/instafeed/3.jpg')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('front_theme/img/instafeed/4.jpg')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('front_theme/img/instafeed/5.jpg')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('front_theme/img/instafeed/6.jpg')}}" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer-border"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="footer-copyright wow fadeIn">
                                <p>
                                    Copyright &copy;
                                    <script>document.write(new Date().getFullYear());</script>
                                    All rights reserved | Designed By
                                     <a href="http://www.teifinnovate.foundation" target="Marines Graphics" style="color:purple">Marines Graphics</a>
                                </p>

                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="footer-social-bookmark text-right wow fadeIn">
                                <ul class="social-bookmark">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--FOOER AREA END-->
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
