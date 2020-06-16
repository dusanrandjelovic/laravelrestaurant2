@extends('layout')

@section('title', 'Dusan Shop')


@section('content')


      <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="first-slide" src="{{url('/img/sl4.jpg')}}" alt="First slide">
                <div class="container">
                  <div class="carousel-caption text-left">
                    <h1>Prodavnica sajtova.</h1>
                    <p>Naručite sajtove koji vam se dopadaju. </p>
                    <p><a class="btn btn-lg btn-primary" href="/products" role="button">Shop</a></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img class="second-slide" src="{{url('/img/sl5.jpg')}}" alt="Second slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1>Frontend i Bekend.</h1>
                    <p>Možete imati kodove za prodavnicu, admin panel, login sistem.</p>
                    <p><a class="btn btn-lg btn-primary" href="/products" role="button">Naručite</a></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img class="third-slide" src="{{url('https://images.unsplash.com/photo-1583063854186-94f06e4169db?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=752&q=80')}}" alt="Third slide">
                <div class="container">
                  <div class="carousel-caption text-right">
                    <h1>Restoran sajt.</h1>
                    <p>Izuzetan dizajn za restoran.</p>
                    <p><a class="btn btn-lg btn-primary" href="/product/2" role="button">Naručite</a></p>
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>


          <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                <h1 class="display-4">Usluge</h1>
                <p class="lead">Izrada sajtova.</p>
              </div>
          
              <div class="container">
                <div class="card-deck mb-3 text-center">
                  <div class="card mb-4 box-shadow">
                    <div class="card-header">
                      <h4 class="my-0 font-weight-normal">Frontend</h4>
                    </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title">7000 <small class="text-muted">RSD</small></h1>
                      <ul class="list-unstyled mt-3 mb-4">
                        <li>Galerija slika</li>
                        <li>Prilagodljiv dizajn</li>
                        <li>Kontakt forma</li>
                        <li>Mapa</li>
                      </ul>
                       <a href="/products"><button type="button" class="btn btn-lg btn-block btn-outline-primary">Izaberite</button></a>
                    </div>
                  </div>
                  <div class="card mb-4 box-shadow">
                    <div class="card-header">
                      <h4 class="my-0 font-weight-normal">WordPress</h4>
                    </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title">10 000 <small class="text-muted">RSD</small></h1>
                      <ul class="list-unstyled mt-3 mb-4">
                        <li>Baza podataka</li>
                        <li>Prilagodljiv dizajn</li>
                        <li>Prodavnica</li>
                        <li>Kontakt forma</li>
                      </ul>
                     <a href="/kontakt"><button type="button" class="btn btn-lg btn-block btn-primary">Naručite</button></a>
                    </div>
                  </div>
                  <div class="card mb-4 box-shadow">
                    <div class="card-header">
                      <h4 class="my-0 font-weight-normal">Frontend i Bekend</h4>
                    </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title">19 000 <small class="text-muted">RSD</small></h1>
                      <ul class="list-unstyled mt-3 mb-4">
                        <li>Baza podataka</li>
                        <li>Prilagodljiv dizajn</li>
                        <li>Admin panel</li>
                        <li>Prodavnica</li>
                      </ul>
                       <a href="/products"><button type="button" class="btn btn-lg btn-block btn-primary">Pravi izbor</button></a>
                    </div>
                  </div>
                </div>
                </div>




                <script src="{{ asset('js/main.js') }}"></script>

@endsection