<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>FINIT - Feira Internacional de Neg&#243;cios, Inova&#231;&#227;o e Tecnologia - @yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/outros.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon" />

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top" style="padding: 10px;font-family: Gotham Bold;">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="{{ url('/') }}" style="float: left;"><img src="{{ asset('assets/img/logo.png') }}" alt="Logo FINIT"></a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ url('/') }}">HOME</a></li>
                        <li><a href="{{ url('/blog') }}">BLOG</a></li>
                        <li><a href="{{ url('/contato') }}">CONTATO</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

<footer id="footer">
<div class="footer-top">
  <div class="container text-center">
    <h3 style="color:white;font-family:Gotham Book;display:inline;">INFORMA&#199;&#213;ES</h3>
    <p style="font-family:Gotham Book;">finit@finit.mg.gov.br</p>
    <div class="footer-logo text-center">
        <img class="img-responsive" src="{{ asset('assets/img/finit-rodape.png') }}" alt="">
        </div>
    <div class="social-icons">
      <ul>
        <li><a class="facebook" href="{{ url('http://facebook.com/finitmg') }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a class="instagram" href="{{ url('http://instagram.com/finitmg') }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
        <li><a class="twitter" href="{{ url('http://twitter.com/finit_mg') }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a class="linkedin" href="{{ url('https://www.linkedin.com/company-beta/15079310/') }}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
      </ul>
    </div>
  </div>
</div>
</footer>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/scripts/maskedinput/jquery.maskedinput.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/scripts/maskedinput/init-maskedinput.js') }}" type="text/javascript"></script>
    <script src="//flickrembed.com/embed_v2.js.php?source=flickr&layout=responsive&input=www.flickr.com/photos/sectes/sets/72157676254709376&sort=0&by=album&theme=slider&scale=fill&skin=default&id=59139de5ec1f1"></script>
</body>
</html>