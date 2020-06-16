@extends ("layout")
@section('title', 'Početna')

@section("content")

<main id="mainhome">
      <div class="mainsection">
     <img src="{{url('img/divider.png')}}">
     <h3 data-aos="fade-down">Best in Richmond, VA</h3>
     <h1>Steaks & BBQ</h1>
     <p data-aos="fade-up">Consectetur adipiscing elit elit tellus,
       luctus nec ullamcorper mattis, pulvinar dapibus leo.​ Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
     <div class="dugmici">
     <a href="/rezervacija" class="bojapozadina">RESERVATIONS</a>
     <a href="/menu" class="inheritpozadina">EXPLORE MENU</a>
   </div>
     </div>
     <svg class="prvi" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
       <!--<polygon fill="white" points="0,100 100,0 100,100"/>-->
         <polygon fill="whitesmoke" points="0,0 0,100 50,50 100,100 0,100"/>
     </svg>
    </main>

    <section id="prvideohome">
      <div class="prvideosectionhome">
        <img src="{{url('img/bbbq.png')}}" class="rostilj">
        <h2 data-aos="fade-down">The BBQ Place.</h2>
     <img src="{{url('img/divider.png')}}">
     <h4 data-aos="fade-up">OUR DELICIOUS STORY</h4>
     <p><strong>Luctus nec ullamcorper mattis, pulvinar dapibus leo adipiscing elit elit tellus.</strong></p>
     <p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor
       eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
     <a href="/rezervacija">RESERVATIONS</a>
     </div>

     <div class="prvideoslikelaptop">
     <img src="{{url('img/usp1.jpg')}}">
   </div>
   <div class="prvideoslikelaptop">
     <img src="{{url('img/usp2.jpg')}}">
   </div>


 <!--slike za mobilni-->
 <div class="slikeomotac">
 <div class="prvideoslike">
 <img src="{{url('img/usp1.jpg')}}">
</div>
<div class="prvideoslike">
 <img src="{{url('img/usp2.jpg')}}">
</div>
</div>

    </section>

    <section id="drugideohome">
      <div>
       <h3 data-aos="fade-down">Featured on</h3>
     </div>
     <div class="drugideoslike">
       <img src="{{url('img/mag1.png')}}">
  <img src="{{url('img/mag2.png')}}">
  <img src="{{url('img/mag3.png')}}">
<img src="{{url('img/mag4.png')}}">
</div>
      </section>

      <section id="trecideohome">
        <div class="trecideosectionhome">
        <h2>Featured Delicacies</h2>
        <h4 data-aos="fade-down">FRESH FROM THE GRILL</h4>
        <img src="{{url('img/divider.png')}}">
        <p data-aos="fade-up"><em>All meats are served with house pickles</em></p>
       </div>
        <svg class="drugi" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
          <!--<polygon fill="white" points="0,100 100,0 100,100"/>-->
            <polygon fill="whitesmoke" points="100,0 100,0 50,50 100,100 0,0"/>
        </svg>
        </section>

        <section id="cetvrtideohome">
          <div class="meniajtem">
          <div>
            <h3>Spaghetti with grilled mackerel</h3>
            <h3 class="cena">$ 50</h3>
            <p>Consec tetur adipi elit
Vuctus nec ullam corper</p>
            </div>
            <div>
             <img src="{{url('img/food1.png')}}">
              </div>
              </div>

              <div class="meniajtem">
              <div>
                <h3>Chicken Nuggets with Potato</h3>
                <h3 class="cena">$ 30</h3>
                <p>Consec tetur adipi elit
    Vuctus nec ullam corper</p>
                </div>
                <div>
                 <img src="{{url('img/food2.png')}}">
                  </div>
                  </div>

                  <div class="meniajtem">
                  <div>
                    <h3>Chicken in Teriyaki Sauce</h3>
                    <h3 class="cena">$ 46</h3>
                    <p>Consec tetur adipi elit
        Vuctus nec ullam corper</p>
                    </div>
                    <div>
                     <img src="{{url('img/food3.png')}}">
                      </div>
                      </div>

                      <div class="meniajtem">
                      <div>
                        <h3>Grilled mackerel steak</h3>
                        <h3 class="cena">$ 57</h3>
                        <p>Consec tetur adipi elit
            Vuctus nec ullam corper</p>
                        </div>
                        <div>
                         <img src="{{url('img/food4.png')}}">
                          </div>
                          </div>

                          <div class="meniajtem">
                          <div>
                            <h3>Grilled salmon fillet with salad</h3>
                            <h3 class="cena">$ 50</h3>
                            <p>Consec tetur adipi elit
                Vuctus nec ullam corper</p>
                            </div>
                            <div>
                             <img src="{{url('img/food5.png')}}">
                              </div>
                              </div>

                              <div class="meniajtem">
                              <div>
                                <h3>Grilled and Fried Chicken</h3>
                                <h3 class="cena">$ 35</h3>
                                <p>Consec tetur adipi elit
                    Vuctus nec ullam corper</p>
                                </div>
                                <div>
                                 <img src="{{url('img/food6.png')}}">
                                  </div>
                                  </div>
          </section>

          <section id="petideohome">
            <div class="petideosectionhome">
            <img src="{{url('img/bbq-beli.png')}}">
            <h4 data-aos="fade-down">Enjoy 50% OFF on all drinks</h4>
            <h2>Happy Hours</h2>
            <p data-aos="fade-up">Every Thursday, 4PM – 7PM</p>
            <a href="/rezervacija">RESERVE A TABLE</a>
           </div>
            <svg class="prvi" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
              <!--<polygon fill="white" points="0,100 100,0 100,100"/>-->
                <polygon fill="whitesmoke" points="0,0 0,100 50,50 100,100 0,100"/>
            </svg>
            </section>

            <section id="sestideohome">
              <div class="sestideosectionhome">
               <h2 data-aos="fade-down">They all love our food</h2>
               <img src="{{url('img/divider.png')}}">
               <p data-aos="fade-up">Consectetur adipiscing elit elit tellus, luctus nec ullamcorper mattis,
                  pulvinar dapibus leo.​ Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
              <div class="klijenti">
              <div>
               <img src="{{url('img/client1-free-img.png')}}">
               <p>"Amazing taste, and juicy steaks!! Best ever!!"</p>
               <p class="imeklijenta">- Laura Petracio</p>
              </div>

              <div>
               <img src="{{url('img/client2-free-img.png')}}">
               <p>"Amazing taste, and juicy steaks!! Best ever!!"</p>
               <p class="imeklijenta">- Harold Z</p>
              </div>

              <div>
               <img src="{{url('img/client3-free-img.png')}}">
               <p>"Amazing taste, and juicy steaks!! Best ever!!"</p>
               <p class="imeklijenta">- Laura Petracio</p>
              </div>

              <div>
               <img src="{{url('img/client4-free-img.png')}}">
               <p>"Amazing taste, and juicy steaks!! Best ever!!"</p>
               <p class="imeklijenta">- Harold Z</p>
              </div>
              </div>
              </section>


@endsection
