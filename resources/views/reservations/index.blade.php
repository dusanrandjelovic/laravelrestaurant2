@extends ("layoutadmin2")
@section('title', 'Sve rezervacije')

@section("content")
@include('inc.messages')

    <div class="row justify-content-center razmak">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin nalog
                </div>

                <div class="panel-body">
                     @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
<h2>Sve rezervacije</h2>


@if(count($reservations))
                      <table class="table table-striped">
                       <tr>
                        <th>Ime</th>
                        <th>Email</th>
                         <th>Sektor / Broj mesta</th>
                         <th>Datum</th>
                         <th>Vreme</th>
                   
                       </tr>
                       @foreach($reservations as $reservation)
                       <tr>
                         <td>{{ $reservation->name }}</td>
                         <td>{{ $reservation->email }}</td>
                         <td>{{ $reservation->table->number }} / {{ $reservation->table->seats }}</td>
                         <td>{{ $reservation->date }}</td>
                         <td>{{ $reservation->hour }}</td>
                          
                       </tr>
                       @endforeach
                      </table>
                      @else
                      <p>Nema rezervacija</p>
                    @endif
{{ $reservations->links() }}

</div>
                
                </div>
            </div>
        </div>


@endsection
