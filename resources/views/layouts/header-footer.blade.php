<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Welcome to the official website for Lancaster University, Ghana's Students Council">
    <meta name="author" content="Peter Perez, Andrews Lartey, Prince, Tano">

    <meta name="keywords" content="Lancaster University, Lancaster University Ghana, student union, lancastergh, Lancaster Ghana Students Council, Lancaster Computer Science">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LGSC- Welcome</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('/css/grid.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/semantic.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/dropdown.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/Semantic-UI-Alert.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/responsive.css') }}" rel="stylesheet">


    
</head>
<body>
    <div class="header">
        <div class="space-10"></div>
        <div class="row">
            <div class="col-sm-12 col-md-10 offset-md-1 col-lg-10 offset-lg-1">
                <div class="ui secondary  menu">
                    <div class="left menu">
                        <a class="item logo" href="{{ url('/') }}">
                            <img src="images/logo.png">
                        </a>
                    </div>
                  <a class="item desktop-menu" href="{{ url('events') }}" {{{ (Request::is('events') ? 'class=active' : '') }}}>
                    EVENTS
                  </a>
                  <a class="item desktop-menu" href="{{ url('clubs-societies') }}" {{{ (Request::is('clubs-societies') ? 'class=active' : '') }}}>
                    CLUBS &amp; SOCIETIES
                  </a>
                  <a class="item desktop-menu" href="{{ url('blog') }}" {{{ (Request::is('blog') ? 'class=active' : '') }}}>
                    BLOG
                  </a>
                  <a class="item desktop-menu" href="{{ url('about-us') }}" {{{ (Request::is('about-us') ? 'class=active' : '') }}}>
                    ABOUT US
                  </a>
                  <a class="item desktop-menu" href="{{ url('things-to-do') }}" {{{ (Request::is('things-to-do') ? 'class=active' : '') }}}>
                    THINGS TO DO
                  </a>
                  <div class="item mobile-menu" style="display: none;">
                      <div class="ui icon top left dropdown button">
                          <i class="bars icon"></i> Menu
                          <div class="menu">
                            <div class="item"><a href="{{ url('events') }}">EVENTS</a></div>
                            <div class="item"><a href="{{ url('clubs-societies') }}">CLUBS &amp; SOCIETIES</a></div>
                            <div class="item"><a href="{{ url('blog') }}">BLOG</a></div>
                            <div class="item"><a href="{{ url('about-us') }}">ABOUT US</a></div>
                            <div class="item"><a href="{{ url('things-to-do') }}">THINGS TO DO</a></div>
                            <div class="ui divider"></div>
                            <div class="item need-help-mobile" style="display: none;">Need help?</div>
                          </div>
                        </div>
                    </div>
                  <div class="right menu">
                    <a class="item">
                      <a class="item need-help-desktop" href="#">
                        Need Help?
                      </a>
                      <a class="item portal" href="#">
                        Portal
                      </a>
                    </a>
                    <a href="{{ url('signin') }}" class="item">
                        <button class="ui button login-button">
                          Login
                        </button>
                    </a>
                  </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    <div class="main-content">
        @yield('content')
    </div>
<div class="space-50"></div>
    <footer>
            <div class="space-50"></div>
            <div class="row">
                <div class="col-sm-12 col-lg-10 offset-md-1 col-lg-10 offset-lg-1" style="text-align: center;">
                        <h1 class="banner-title">Interested in being a content creator?</h1>
                        <p class="black-shade-1 banner-desc">If you want to publish articles, events or any legit information on the SRC website as a student of Lancaster University, now you can!</p>
                        <a href="{{ asset('signin') }}"><button class="ui button">Get Started</button></a>
                </div>
            </div>

            <div class="space-30"></div>

            <div class="row">
                <div class="col-sm-12 col-lg-10 offset-md-1 col-lg-10 offset-lg-1">

                    <div class="ui divider"></div>
                    <div class="space-30"></div>
                    <div class="row">
                        <div class="col-sm-12 col-md-3 col-lg-3 padding-bottom-30">
                            <h3>Contact</h3>
                            <span>lgsc@lancastergh.edu</span><br/>
                            <span>contact@lancastergh.edu</span>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3 padding-bottom-30">
                            <h3>Address</h3>
                            <span class="black-shade-1">#22 Jungle oad, East Legon, Accra, Ghana.</span>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3 padding-bottom-30">
                            <h3>Social</h3>
                            <div class="social-icons">
                                <a href="#" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-50"></div>
    </footer>

    <script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('/js/semantic.min.js') }}"></script>
    <script src="{{ asset('/js/dropdown.min.js') }}"></script>
    <script src="{{ asset('/js/Semantic-UI-Alert.js') }}"></script>

    <script type="text/javascript">
        $('.dropdown')
          .dropdown({
            // you can use any ui transition
            transition: 'drop'
          });
    </script>

</body>
</html>
