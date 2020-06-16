@extends ("layout")
@section('title', 'O nama')

@section("content")

<main>
      <div class="mainsection">
     <img src="{{url('/img/divider.png')}}">
     <h4 data-aos="fade-down">Know More</h4>
     <h1>About Us.</h1>
     <p data-aos="fade-up">Consectetur adipiscing elit elit tellus,
       luctus nec ullamcorper mattis, pulvinar dapibus leo.​ Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
     </div>
     <svg class="prvi" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
       <!--<polygon fill="white" points="0,100 100,0 100,100"/>-->
         <polygon fill="whitesmoke" points="0,0 0,100 50,50 100,100 0,100"/>
     </svg>
    </main>

    <section id="prvideo">
      <div class="prvideosection">
        <h2 data-aos="fade-down">Our Resto.</h2>
     <h4 data-aos="fade-up">SERVING BEST STEAKS AND BBQS SINCE 1984</h4>
     <p><em>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh.</em></p>
      <img src="{{url('/img/divider.png')}}">
     <p><strong>Consectetur adipiscing elit elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.​ Lorem ipsum dolor
       sit amet, consectetur adipiscing elit.</strong></p>
     <p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.
       Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
     </div>

     </section>

     <section id="drugideo">
         <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{url('/img/slide1.jpg')}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{url('/img/slide2.jpg')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{url('/img/slide3.jpg')}}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      
       </section>

       <section id="trecideo">
    <div class="trecideosection">
    <h2>A few words about us</h2>
    <p>Serving best BBQ and Steaks since 1984</p>
    <p class="hl">______</p>
    <p><strong>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit
       nunc tortor eu nibh.</strong></p>
    <p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue.
      Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus.
       Praesent elementum hendrerit tortor. Sed semper lorem at felis.</p>
       <a href="/menu">VIEW MENU</a>
      </div>

      <div class="trecideoslika">
        <!--<img src="img/pozadina.jpg" alt="">-->
        <p>Free WiFi for everyone</p>
        </div>
         </section>

         <section id="cetvrtideo">
           <div class="cetvrtideosection">
           <div>
       <h2>Our Food Policy</h2>
       <p>Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi.
         Sed pretium, ligula sollicitudin laoreet viverra,
         tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</p>
         </div>
         <div>
     <h2>Our Core Values</h2>
     <p>Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi.
       Sed pretium, ligula sollicitudin laoreet viverra,
       tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</p>
       </div>
       </div>

       <svg class="prvi" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
         <!--<polygon fill="white" points="0,100 100,0 100,100"/>-->
           <polygon fill="whitesmoke" points="0,0 0,100 50,50 100,100 0,100"/>
       </svg>
       <svg class="drugi" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
         <!--<polygon fill="white" points="0,100 100,0 100,100"/>-->
           <polygon fill="whitesmoke" points="100,0 100,0 50,50 100,100 0,0"/>
       </svg>
           </section>

           <section id="petideo">
            <div class="petideolevo">
              <div>
                <h2>Renowned Chefs</h2>
                <p class="razmakpetideo">Meet the taste experts</p>
                <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor
                  libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</p>
                </div>
                <div>
                  <p class="hl2">_____</p>
                  <h3>Careers</h3>
                  <h4>Be a part of our restaurant</h4>
                  <p class="marginadole">Morbi purus libero, faucibus adipi, commodo quis, gravida id. Praesent elementum hendrerit tortor.</p>
                    <p><a href="/kontakt">APPLY TODAY</a></p>
                  </div>
              </div>

              <div class="petideodesno">
                <div class="kuvar">
                  <img src="{{url('/img/chef1.png')}}">
                  <h4>Arthur Lee</h4>
                    <p>FOUNDER / HEAD CHEF</p>
                      <img src="{{url('/img/divider.png')}}">
                      <div class="mrezekuvari">
                        <a href="https://sr-rs.facebook.com/" target="_blank"><i class="fab fa-facebook-square fa-1x"></i></a>
                         <a href="https://twitter.com/login?lang=sr" target="_blank"><i class="fab fa-twitter-square fa-1x"></i></a>
                          <a href="https://www.instagram.com/accounts/login/" target="_blank"><i class="fab fa-instagram fa-1x"></i></a>
                  <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube fa-1x"></i></a>
                    </div>
                  </div>
                  <div class="kuvar">
                    <img src="{{url('/img/chef2.png')}}">
                    <h4>James Lee</h4>
                      <p>CO-FOUNDER / CHEF</p>
                        <img src="{{url('/img/divider.png')}}">
                        <div class="mrezekuvari">
                          <a href="https://sr-rs.facebook.com/" target="_blank"><i class="fab fa-facebook-square fa-1x"></i></a>
                           <a href="https://twitter.com/login?lang=sr" target="_blank"><i class="fab fa-twitter-square fa-1x"></i></a>
                            <a href="https://www.instagram.com/accounts/login/" target="_blank"><i class="fab fa-instagram fa-1x"></i></a>
                    <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube fa-1x"></i></a>
                    </div>
                  </div>
                    <div class="kuvar">
                      <img src="{{url('/img/chef3.png')}}">
                      <h4>Suzanne Grey</h4>
                        <p>CHEF</p>
                          <img src="{{url('/img/divider.png')}}">
                          <div class="mrezekuvari">
                            <a href="https://sr-rs.facebook.com/" target="_blank"><i class="fab fa-facebook-square fa-1x"></i></a>
                             <a href="https://twitter.com/login?lang=sr" target="_blank"><i class="fab fa-twitter-square fa-1x"></i></a>
                              <a href="https://www.instagram.com/accounts/login/" target="_blank"><i class="fab fa-instagram fa-1x"></i></a>
                      <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube fa-1x"></i></a>
                      </div>
                      </div>
                      <div class="kuvar">
                        <img src="{{url('/img/chef4.png')}}">
                        <h4>Max Broody</h4>
                          <p>CHEF</p>
                            <img src="{{url('/img/divider.png')}}">
                            <div class="mrezekuvari">
                              <a href="https://sr-rs.facebook.com/" target="_blank"><i class="fab fa-facebook-square fa-1x"></i></a>
                               <a href="https://twitter.com/login?lang=sr" target="_blank"><i class="fab fa-twitter-square fa-1x"></i></a>
                                <a href="https://www.instagram.com/accounts/login/" target="_blank"><i class="fab fa-instagram fa-1x"></i></a>
                        <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube fa-1x"></i></a>
                        </div>
                        </div>
                </div><!--petideodesno kraj -->
             </section>

             <section id="sestideo">
                 <h2>Review Us On</h2>
                 <a href="https://sr-rs.facebook.com/" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>
                  <a href="https://twitter.com/login?lang=sr" target="_blank"><i class="fab fa-twitter-square fa-2x"></i></a>
                   <a href="https://www.instagram.com/accounts/login/" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
               </section>

@endsection