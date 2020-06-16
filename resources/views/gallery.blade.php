@extends ("layout")
@section('title', 'Galerija')

@section("content")

<main>
      <div class="mainsection">
     <img src="{{url('/img/divider.png')}}">
     <h4 data-aos="fade-down">Best BBQ</h4>
     <h1>Our Gallery.</h1>
     <p data-aos="fade-up">Consectetur adipiscing elit elit tellus,
       luctus nec ullamcorper mattis, pulvinar dapibus leo.​ Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
     </div>
     <svg class="prvi" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
       <!--<polygon fill="white" points="0,100 100,0 100,100"/>-->
         <polygon fill="whitesmoke" points="0,0 0,100 50,50 100,100 0,100"/>
     </svg>
    </main>

    <section id="prvideogal">
       <div class="prvideotext">
         <h2 data-aos="fade-down">Are you hungry?</h2>
         <h4 data-aos="fade-up">COME, DINE WITH US!</h4>

       </div>
<img src="{{url('/img/divider.png')}}">

     </section>

     <section id="red2">
          <h2>Our Gallery</h2>
          <p>Beautyfull photos</p>

          <div class="galerija">
             
                <span class="prev">&lt;</span>
                <span class="next">&gt;</span>
                <div class="kontejner">
                    <div class="gal"><img src="{{url('/img/sl1.jpg')}}" alt=""></div>
                    <div class="gal" class="vertical"><img src="{{url('/img/sl2.jpg')}}" alt=""></div>
                    <div class="gal" class="horizontal"><img src="{{url('/img/sl3.jpg')}}" alt=""></div>
                    <div class="gal"><img src="{{url('/img/sl4.jpg')}}" alt=""></div>
                    <div class="gal"><img src="{{url('/img/sl5.jpg')}}" alt=""></div>
                    <div class="gal" class="big"><img src="{{url('/img/sl6.jpg')}}" alt=""></div>
                    <div class="gal"><img src="{{url('/img/sl7.jpg')}}" alt=""></div>
                    <div class="gal" class="vertical"><img src="{{url('/img/sl8.jpg')}}" alt=""></div>
                    <div class="gal"><img src="{{url('/img/sl9.jpg')}}" alt=""></div>
                    <div class="gal" class="horizontal"><img src="{{url('/img/sl10.jpg')}}" alt=""></div>
                    <div class="gal"><img src="{{url('/img/sl11.jpg')}}" alt=""></div>
                    <div class="gal" class="big"><img src="{{url('/img/sl12.jpg')}}" alt=""></div>
                    <div class="gal"><img src="{{url('/img/sl13.jpg')}}" alt=""></div>
                    <div class="gal" class="horizontal"><img src="{{url('/img/sl14.jpg')}}" alt=""></div>
                    <div class="gal"><img src="{{url('/img/sl15.jpg')}}" alt=""></div>
                    <div class="gal" class="big"><img src="{{url('/img/sl16.jpg')}}" alt=""></div>
                  
                </div>

          </div>
      </section>

@endsection