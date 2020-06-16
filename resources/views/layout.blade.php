<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>@yield('title')</title>
    <link rel="icon" href="{{ 'img/logo.png' }}" type="image/icon">

   <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
   
     <link rel="stylesheet" type="text/css" href="{{ asset('css/user.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('css/jedanprodukt.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/kontakt.css') }}">
 <link rel="stylesheet" type="text/css" href="{{ asset('css/forma.css') }}">
      <link href="{{ asset('css/about.css') }}" rel="stylesheet">
        <link href="{{ asset('css/kontakt.css') }}" rel="stylesheet">
         <link href="{{ asset('css/gallery.css') }}" rel="stylesheet">
     <link href="{{ asset('css/gal.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/rezervacija.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    
    
        

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

 <style>
 .form-group {
    display: flex;
    flex-direction: column;
}
 
 /* user sidebar */
 .dashstil {
    align-items: start;
 }
 .dashstil a {
    color: #DB9423;
    text-align: left;
    margin: 12px 16px;
    padding: 0 0 6px 6px;
    border-left: 2px solid #303947;
   border-bottom: 2px solid #303947;
}
.dashstil a:hover {
   color: black;
}
.panel-heading {
  margin-bottom: 15px;
}
 /* /// */
 
 
 /* badge vesti */
 .badge {
    padding: .45em .6em;
}
.badge-secondary {
    background-color: #DB9423;
}
.vest-margin {
margin-bottom: 10px; 
}
 /* /// */

 main {
    top: 46px;
}
.razmakgore {
    margin-top: 80px;
}
.container {
    width: 100%;
     padding: 6px 15px;
}
.navbar {
    padding: 0px!important;
}
.logo {
    height: 30px;
    width: 110px;
}
.razmakuserlog {
  margin-top: 120px;
  margin-bottom: 20px;
}
button:focus, button:active, a:focus, a:active, input:focus {
      outline: 0;
      box-shadow: none!important;
  }
  
  .btn-primary {
    color: #fff;
    background-color: black;
    border-color: black;
    transition: 0.5s;
}
.btn-primary:hover, .btn-warning:hover {
  color: black;
  background-color: white;
  border-color: black;
  transition: 0.5s;
}

.btn-link {
    font-weight: 400;
    color: black;
    background-color: transparent;
}
.btn-link:hover {
 color: #DB9423; 
 text-decoration: none;
}

 .bg-white {
    background-color: white!important;
}
.navbar-light .navbar-nav .nav-link {
    color: rgba(0,0,0,.93)!important;
}
.navbar-light .navbar-nav .nav-link:hover {
    color: #DB9423!important;
}

.navbar-light .navbar-toggler {
    border-color: rgba(0,0,0,.9)!important;
}
.navbar-toggler {
    background-color: white !important;
}
.navbar-light .navbar-brand {
    color: black !important;
}

.page-item.active .page-link {
    background-color: black;
    border-color: black;
}
.page-link {
  color: black;
}
.page-link:hover {
 color: gray;
}

 .row {
    margin-left: 0px;
    margin-right: 0px;
}
    @media (min-width: 992px){
.container {
    max-width: 100%!important;
     padding: 3px 15px;
}
}
@media (min-width: 576px){
.container {
    max-width: 100%!important;
     padding: 3px 15px;
}
}
@media (max-width: 767.98px){
.navbar-expand-md>.container, .navbar-expand-md>.container-fluid {
    padding-right: 10px!important;
    padding-left: 10px!important;
}
}

        </style>

</head>
<body>
  <nav class="navbar navbar-expand-md navbar-light bg-white fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="logo" src= "{{ url('/img/logo.png') }}">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                       <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

        
                <li class=" nav-item dropdown" class="{{ Request::is('about') ? 'active' : '' }}">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="/about">About<span class="caret"></span></a>
                          <ul class="dropdown-menu">
            <li class="nav-item {{ Request::is('about') ? 'active' : '' }}"><a class="nav-link" href="/about">O nama</a></li>
          <li class="nav-item {{ Request::is('news') ? 'active' : '' }}"><a class="nav-link" href="/news">Vesti</a></li>
          <li class="nav-item {{ Request::is('reservation') ? 'active' : '' }}"><a class="nav-link" href="/reservation">Rezervacija</a></li>
          <li class="nav-item {{ Request::is('allrecipes') ? 'active' : '' }}"><a class="nav-link" href="/allrecipes">Recepti</a></li>
        </ul>
                         </li>
                <li class="nav-item {{ Request::is('menu') ? 'active' : '' }}"><a class="nav-link" href="/menu">Menu</a></li>
                 <li class="nav-item {{ Request::is('gallery') ? 'active' : '' }}"><a class="nav-link" href="/gallery">Galerija</a></li>
          <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}"><a class="nav-link" href="/contact">Kontakt</a></li>
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
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::guard('web')->user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="/dashboard" class="nav-link">Moj profil</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                        class="nav-link"
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
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false">
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
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                            
                        @endif
                    </ul>
                </div>
            </div>
        </nav>


<div>
    @yield('content')
</div>

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
    
<script src="{{ asset('js/app.js') }}"></script>

@yield('scripts')

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown3").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content3");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

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
    
    <script>
      AOS.init();
    </script>

</body>
</html>