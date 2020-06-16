@extends('layout')

@section('title', 'Checkout')

@section('content')

<div class="omotaccekaut">
       
<div class="formacekaut">
@include('inc.messages')
 @if (Auth::guard('web')->check())
 
<div>
@if(session('cart'))
@foreach(session('cart') as $id => $details)
<p>{{ $details['name'] }} / {{ $details['quantity'] }}</p>
@endforeach
@else
<p>Nista niste narucili</p>
@endif
</div>
<form action="/usercart/submit" method="POST">
{{ csrf_field() }}
<div class="form-group">
@if(session('cart'))
            @foreach(session('cart') as $id => $details)
<input type="hidden" name="product[]" id="product" class="hidden" value="{{ $details['name'] }} - {{ $details['price'] }}
                - {{ $details['quantity'] }}" checked>
    @endforeach
              @endif
</div>


<div>
           <button type="submit" name="submit" class="klik">Kupi</button>
         </div>

</form>

 @else
 
 <div>
@if(session('cart'))
@foreach(session('cart') as $id => $details)
<p>{{ $details['name'] }} / {{ $details['quantity'] }}</p>
@endforeach
@else
<p>Nista niste narucili</p>
@endif
</div>
 
<form action="/cart/submit" method="POST">
{{ csrf_field() }}
<div class="form-group">
<label for="name"></label>
           <input type="text" name="name" placeholder="Ime i prezime" id="inputkon">
</div>
<div class="form-group">
<label for="telefon"></label>
           <input type="text" name="telefon" value="" placeholder="Telefon" id="inputkon">
</div>

<div class="form-group">
<label for="adresa"></label>
           <input type="text" name="adresa" placeholder="Adresa" id="inputkon">
</div>

<div class="form-group">
@if(session('cart'))
            @foreach(session('cart') as $id => $details)
<input type="hidden" name="product[]" id="product" class="hidden" value="{{ $details['name'] }} - {{ $details['price'] }}
                - {{ $details['quantity'] }}" checked>
    @endforeach
              @endif
</div>




<div>
           <button type="submit" name="submit" class="klik">Kupi</button>
         </div>

</form>
@endif
</div>

<div class="cekautsl">
    <div><h2>Naručivanje</h2>
        <p>
        Slanjem svojih podataka uspešno ste obavili naručivanje sajtova iz korpe. 
  </p>
  <p>
        Kontaktiraćemo vas radi potrvđivanja narudžbine. 
  </p>
  <p>
        Zip fajlovi sa kodovima naručenih sajtova biće vam poslati na email nakon uplate. 
  </p>
  </div>
</div>

                    </div>

@endsection