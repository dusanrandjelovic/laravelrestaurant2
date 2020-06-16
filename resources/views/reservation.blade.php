@extends ("layout")
@section('title', 'Rezervacija')

@section("content")


    <section id="prvideorez">
      <div class="prvideosectionrez">
      <img src="img/divider.png">
      <h3 data-aos="fade-up">Reserve your seat.</h3>
     </div>
@include('inc.messages')
     </section>

     <section id="drugideorez">
         @if (Auth::guard('web')->check())
        <form action="/userreservation/submit" method="POST" id="formarez">
{{ csrf_field() }}
<div>
<label for="userdatum"></label>
<select name="userdatum" id="inputrez">
    <option disabled selected value> -- Datum -- </option>
                <option>21. Mart 2020.</option>
                <option>22. Mart 2020.</option>
                <option>23. Mart 2020.</option>
                <option>24. Mart 2020.</option>
                <option>25. Mart 2020.</option>
           </select>

<label for="userbrmesta"></label>
           <select name="userbrmesta" id="inputrez">
               <option disabled selected value> -- Broj mesta -- </option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
           </select>
</div>
<div>
           <button type="submit" name="submit" id="buttonrez">Send</button>
         </div>
</form>
         @else
<form action="/reservation/submit" method="POST" id="formarez">
{{ csrf_field() }}
<div>
<label for="name"></label>
           <input type="text" name="name" placeholder="Name" id="inputrez">

<label for="email"></label>
           <input type="text" name="email" value="" placeholder="Email" id="inputrez">
</div>

<div>
<label for="telefonl"></label>
           <input type="text" name="telefon" value="" placeholder="Phone" id="inputrez">

<label for="brmesta"></label>
           <select name="brmesta" id="inputrez">
               <option disabled selected value> -- Broj mesta -- </option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
           </select>
</div>

<div>
<label for="datum"></label>
<select name="datum" id="inputrez">
    <option disabled selected value> -- Datum -- </option>
                <option>11. Maj 2020.</option>
                <option>12. Maj 2020.</option>
                <option>13. Maj 2020.</option>
                <option>14. Maj 2020.</option>
                <option>15. Maj 2020.</option>
           </select>
<label for="sektor"></label>
<select name="sektor" id="inputrez">
    <option disabled selected value> -- Sektor -- </option>
                <option>Pušački</option>
                <option>Nepušački</option>
           </select>
</div>
<div>
           <button type="submit" name="submit" id="buttonrez">Send</button>
         </div>
       
       </form>    
@endif

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
