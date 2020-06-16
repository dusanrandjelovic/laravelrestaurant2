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


    <link href="{{ asset('css/adminstil.css') }}" rel="stylesheet">
    <link href="{{ asset('css/forma.css') }}" rel="stylesheet">
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        
<style>
.red {
    display: flex;
    justify-content: space-between;
    width: 35%;
    margin: 0 auto;
}
.razmak {
    margin: 25px 4px;
}
.admin-center {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 10px 12px 20px;
}
a {
    color: #DB9423;
}
a:hover {
    color: black;
}
     .row {
    margin-left: 0px;
    margin-right: 0px;
}
.panel-default {
   /* border-color: #d3e0e9; */
   border-color: black;
}
.panel-default>.panel-heading {
    color: #333;
    background-color: whitesmoke;
    border-color: #d3e0e9;
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 15px;
}
  .btn-primary {
    color: #fff;
    background-color: black;
    border-color: black;
    transition: 0.5s;
}
.btn-danger {
    color: red;
    background-color: white;
    border-color: red;
    transition: 0.5s;
}
.btn-primary:hover, .btn-danger:hover {
  color: black;
  background-color: white;
  border-color: black;
  transition: 0.5s;
}
.page-item.active .page-link {
    background-color: black;
    border-color: black;
}
.page-link:hover {
 color: gray;
}
.page-item.active:hover .page-link:hover {
 background-color: black;
 color: white;
 border-color: black;
}
.pagination>li>a, .pagination>li>span {
    color: black;
}
.pagination>li>a:hover, .pagination>li>span:hover {
  color: black;
}
</style>
</head>
<body>
<div class="main-nav">
<img src="{{ url('/img/logo.png') }}" alt="dusan randjelovic logo">
<a href="/admin">{{ Auth::guard('admin')->user()->name }}</a>
<a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
</div>
<main>
    <aside>
      <nav class="topnav" id="myTopnav">
      
      @if (Auth::guard('admin')->check())
      <a href="/admin"><i class="fas fa-book"></i> Home</a>
        <a href="/users"><i class="fas fa-book"></i> Korisnici</a>
        <a href="/reservations"><i class="fas fa-caret-square-left"></i> Rezervacije</a>
         <a href="/all-user-reservations"><i class="fas fa-caret-square-left"></i> User Rezervacije</a>
        <a href="/messages"><i class="fas fa-caret-square-left"></i> Poruke</a>
        <a href="/blogcomments"><i class="fas fa-caret-square-left"></i> Komentari</a>
        <a href="/admin-products"><i class="fas fa-caret-square-left"></i> Proizvodi</a>
        <a href="/orders"><i class="fas fa-caret-square-left"></i> Porudzbine</a>
        <a href="/all-user-orders"><i class="fas fa-caret-square-left"></i> User Porudzbine</a>
         <a href="/admin-recipes"><i class="fas fa-caret-square-left"></i> Recepti</a>
    
    @elseif(Auth::guard('web')->check())
    <a href="#cetvrtideo"><i class="far fa-check-circle"></i> Home</a>
    <a href="#petideo"><i class="fas fa-chess-king"></i> Recepti</a>
    <a href="#sestideo"><i class="fas fa-envelope"></i> Contact</a>
    @endif
        <a href="javascript:void(0);" style="font-size:25px;" class="icon" onclick="myFunction()"><i class="fas fa-bars"></i></a>
    </nav>
    </aside>

    <article>
    @yield('content')
    </article>
    </main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
  function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
              x.className += " responsive";
          } else {
              x.className = "topnav";
          }
      }
</script>

 

</body>
</html>