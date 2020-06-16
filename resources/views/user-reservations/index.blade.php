@extends ("layout")
@section('title', 'Moje rezervacije')

@section("content")
<div class="shopomotac razmakgore">

<div class="shopsidebar dashstil">
<a href="/user-reservations"> Moje rezervacije <i class="fas fa-caret-square-left"></i></a>
<a href="/user-orders"> Moje porudzbine <i class="fas fa-caret-square-left"></i></a>
<a href="/recipes"> Recepti <i class="fas fa-caret-square-left"></i></a>
</div>

<div class="shopmain">

@include('inc.messages')

<h3>Moje rezervacije</h3>
<div class="panel-heading">
<a href="/reservation" class="btn btn-primary">Rezervisi mesto</a>
</div>

@if(count($userreservations))
                      <table class="table table-striped">
                       <tr>
                        <th>Broj rezervacije</th>
                         <th>Broj mesta</th>
                         <th>Datum</th>
                   
                       </tr>
                       @foreach($userreservations as $userreservation)
                       <tr>
                         <td>{{ $userreservation->id}}</td>
                         <td>{{ $userreservation->brmesta }}</td>
                         <td>{{ $userreservation->datum }}</td>
                          
                       </tr>
                       @endforeach
                      </table>
                      @else
                      <p>Nemate rezervacija</p>
                    @endif
{{ $userreservations->links() }}
</div><!--shopmain-->
    </div><!--shopomotac-->
@endsection