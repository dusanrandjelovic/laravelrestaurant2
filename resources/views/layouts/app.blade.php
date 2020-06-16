<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    
     <title>Restoran | @yield('title')</title>
     
     <meta name="description" content="Great restaurant with barbeque food. The BBQ place is a modern and sophisticated restaurant
    that gives you a uniqiue taste.">
    <meta name="keywords" content="restaurant, barbeque, food">
    <meta name="author" content="Dusan Randjelovic | dusanrandjelovic92@gmail.com">
    
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    
 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  

  <link rel="icon" href="{{ 'img/logo.png' }}" type="image/icon">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/gallery.css') }}" rel="stylesheet">
     <link href="{{ asset('css/gal.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/rezervacija.css') }}" rel="stylesheet">
    <link href="{{ asset('css/kontakt.css') }}" rel="stylesheet">
    <link href="{{ asset('css/shop.css') }}" rel="stylesheet">
    

    <style>
 
main {
    top: 55px;
}
.razmakgore {
    margin-top: 80px;
}
.logo {
    height: 30px;
    width: 110px;
}
.row {
    margin-left: 0px;
    margin-right: 0px;
}
.container-fluid>.navbar-collapse, .container-fluid>.navbar-header, .container>.navbar-collapse, .container>.navbar-header {
    margin-right: 10px!important;
    margin-left: 10px!important;
}

       .panel-heading {
         padding: 30px 15px;
         display: flex;
         align-items: center;
         justify-content: space-between;
       }
       .editstr {
         margin-bottom: 40px;
       }
       
           @media (min-width: 768px) {
.navbar-right {
    float: right!important;
    margin-right: 0px!important;
}
}
    </style>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                       <img class="logo" src= "{{ url('/img/logo.png') }}">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">

        
                <li class="dropdown" class="{{ Request::is('about') ? 'active' : '' }}">
                <a class="dropdown-toggle" data-toggle="dropdown" href="/about">About<span class="caret"></span></a>
                          <ul class="dropdown-menu">
            <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="/about">O nama</a></li>
          <li class="{{ Request::is('news') ? 'active' : '' }}"><a href="/news">Vesti</a></li>
          <li class="{{ Request::is('reservation') ? 'active' : '' }}"><a href="/reservation">Rezervacija</a></li>
        </ul>
                         </li>
                                 <li class="{{ Request::is('proba') ? 'active' : '' }}"><a href="/proba">Proba</a></li>
                                   <li class="{{ Request::is('gallery') ? 'active' : '' }}"><a href="/gallery">Galerija</a></li>
                                     <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="/contact">Contact</a></li>
                        
                        
                                     <li class="nav-item">
                          <a class="nav-link" href="{{ url('/products') }}">Prodavnica</a>
                        </li>
                             <li class="nav-link row" id="header-bar">
                       
        @include('_header_cart')
  
    </li>
   <!--<li><a href="/contacts">Admin</a></li>-->


                        <!-- Authentication Links -->
                        @if (Auth::guard('web')->check())
                            
                        
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::guard('web')->user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="/dashboard">Moj profil</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            
                            
                            @elseif(Auth::guard('admin')->check())
                             <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::guard('admin')->user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="/admin">Ad profil</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @else
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                            
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

      
        @if(Request::is('/', 'about', 'menu', 'galerija', 'kontakt', 'rezervacija'))
        @yield ("content")
      @else
      <div class="razmakgore">
      @yield ("content")
      </div>
      @endif
      

    
    
    <footer>
      <div class="footersection">
      <h2>Let's Eat.</h2>
    <img src="{{url('/img/divider.png')}}">
    <p data-aos="fade-down">Consectetur adipiscing elit elit tellus,
     luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    <a href="/rezervacija" class="footerdugme">RESERVE TABLE</a>
    <p data-aos="fade-up">Or Call Us : 123 456 7890</p>
    <div class="mreze">
      <a href="https://sr-rs.facebook.com/" target="_blank"><i class="fab fa-facebook-square fa-1x"></i></a>
       <a href="https://twitter.com/login?lang=sr" target="_blank"><i class="fab fa-twitter-square fa-1x"></i></a>
        <a href="https://www.instagram.com/accounts/login/" target="_blank"><i class="fab fa-instagram fa-1x"></i></a>
<a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube fa-1x"></i></a>
  </div>
  </div>

    <div class="dno">
      <p>COPYRIGHT © 2019 BBQ RESTAURANT | CREDITS</p>
      <p>POWERED BY <a href="https://dusanrandjelovicportfolio.000webhostapp.com/" target="_blank">DUŠAN RANĐELOVIĆ</a></p>
    </div>
      <svg class="drugi" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
        <!--<polygon fill="white" points="0,100 100,0 100,100"/>-->
          <polygon fill="whitesmoke" points="100,0 100,0 50,50 100,100 0,0"/>
      </svg>
    </footer>
    
   

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/skripta.js') }}"></script>
    <script>
        const divs = document.querySelectorAll('.gal');
const body = document.body;
const prev = document.querySelector('.prev');
const next = document.querySelector('.next');

checkPrev = () => document.querySelector('.gal:first-child').classList.contains('show') ? prev.style.display = 'none' : prev.style.display = 'flex';

checkNext = () => document.querySelector('.gal:last-child').classList.contains('show') ? next.style.display = 'none' : next.style.display = 'flex';
			
Array.prototype.slice.call(divs).forEach(function (el) {
			el.addEventListener('click', function () {
				this.classList.toggle('show');
				body.classList.toggle('active');
				checkNext();
				checkPrev();
			});
});

prev.addEventListener('click', function() {
			const show = document.querySelector('.show');
			const event = document.createEvent('HTMLEvents');
			event.initEvent('click', true, false);

			show.previousElementSibling.dispatchEvent(event);
			show.classList.remove('show');
			body.classList.toggle('active');
			checkNext();
});

next.addEventListener('click', function() {
			const show = document.querySelector('.show');
			const event = document.createEvent('HTMLEvents');
			event.initEvent('click', true, false);

			show.nextElementSibling.dispatchEvent(event);
			show.classList.remove('show');
			body.classList.toggle('active');
			checkPrev();
});
    </script>
    
  @yield('scripts')
  
    <script>
      AOS.init();
    </script>
    
</body>
</html>
