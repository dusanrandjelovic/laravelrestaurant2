@extends ("layout")
@section('title', 'Contact')

@section("content")

<main>
    <div class="errormsg">
@include('inc.messages')
</div>
      <div class="mainsection">
          
     <img src="img/divider.png">
     <h4 data-aos="fade-down">Reserve A Table</h4>
     <h1>Contact Us.</h1>
     <p data-aos="fade-up">Consectetur adipiscing elit elit tellus,
       luctus nec ullamcorper mattis, pulvinar dapibus leo.​ Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      
     </div>
          
     <svg class="prvi" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
       <!--<polygon fill="white" points="0,100 100,0 100,100"/>-->
         <polygon fill="whitesmoke" points="0,0 0,100 50,50 100,100 0,100"/>
     </svg>

    </main>

    <section id="prvideokontakt">
         
      <div class="prvideosectionkontakt">
        <h2 data-aos="fade-down">Are you hungry?</h2>
     <h4 data-aos="fade-up">COME, DINE WITH US!</h4>
     <p><em>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh.</em></p>

  <div class="prvideored">
  <div>
    <h4>For Restaurant</h4>
    <h4>098 765 4321</h4>
  </div>
<div>
 <div class="vl"></div>
</div>
  <div>
    <h4>Private Dinning</h4>
    <h4>123 456 7890</h4>
  </div>
  </div>

      <img src="img/divider.png">
      <h3 data-aos="fade-up">Have feedback?</h3>
      <p><em>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh.</em></p>
     </div>

     </section>

     <section id="drugideokontakt">
        
        <div>
            
              {!! Form::open(['url' => 'contact/submit', 'id' => 'formakon']) !!}
    
     
     
       {{ Form::text('name', '', ['id' => 'inputkon', 'placeholder' => 'Vase ime']) }}
    
      
     
       {{ Form::text('email', '', ['id' => 'inputkon', 'placeholder' => 'Vas email'] ) }}

  
     
       {{ Form::textarea('poruka', '', ['id' => 'textareakon', 'placeholder' => 'Vasa poruka']) }}
  
  {{ Form::submit('Pošalji!', ['class' => 'klik']) }}
{!! Form::close() !!} 
  
        </div>

        <div>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d22643.860293905393!2d20.451975529174995!3d44.811733382434596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ssr!2srs!4v1559078270425!5m2!1ssr!2srs" frameborder="0" allowfullscreen></iframe>
        </div>

       </section>

       <section id="trecideokontakt">
        <img src="img/divider.png">
         <h3 class="boja">Open Hours</h3>
       <div class="trecideored">
         <div>
            <h4 class="boja">MON - FRI</h4>
            <h4 class="boja">SAT - SUN</h4>
         </div>
         <div>
            <h4>12 PM --- 11 PM</h4>
            <h4>10 AM --- 2 AM</h4>
         </div>
       </div>

       <div class="trecideoredmob">
         <div>
            <h4 class="boja">MON - FRI</h4>
            <h4>12 PM --- 11 PM</h4>
         </div>
         <div>
            <h4 class="boja">SAT - SUN</h4>
            <h4>10 AM --- 2 AM</h4>
         </div>
       </div>

         <h2>Happy Hours</h2>
         <h3>Enjoy 50% OFF</h3>
         <p>Every Thursday, 4PM – 7PM</p>

         </section>


@endsection
