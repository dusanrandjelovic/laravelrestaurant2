@extends('layout')

@section('content')
 <div class="shopomotac razmakgore">

<div class="shopsidebar dashstil">
<a href="/user-reservations"> Moje rezervacije <i class="fas fa-caret-square-left"></i></a>
<a href="/user-orders"> Moje porudzbine <i class="fas fa-caret-square-left"></i></a>
<a href="/recipes"> Recepti <i class="fas fa-caret-square-left"></i></a>
</div>

<div class="shopmain">
 
<div class="cont">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dobrodosli {{Auth::user()->name}}!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Mozete napraviti rezervaciju brzo.</p>
                    <p><a href="/reservation">Napravi rezervaciju</a></p>
                    <p>Zahvaljujuci nalogu mozete jos brze obaviti porudzbinu proizvoda iz korpe. jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj</p>
                      <p><a href="/cart">Korpa</a></p>
                      <p>Napisite svoj recept. Kada ga admin odobri bice prikazan. jjjjjjjjjjjjjjjjjjjjjjjjj</p>
                       <p><a href="/recipes/create">Dodaj recept</a></p>
                </div>
            </div>
        </div>
    </div>
</div>



   </div><!--shopmain-->
    </div><!--shopomotac-->
@endsection