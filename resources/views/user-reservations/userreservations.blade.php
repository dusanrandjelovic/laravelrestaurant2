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


@if(count($userreservations))
                      <table class="table table-striped">
                       <tr>
                        <th>Ime</th>
                        <th>Email</th>
                         <th>Sektor / Broj mesta</th>
                         <th>Datum</th>
                   
                       </tr>
                       @foreach($userreservations as $userreservation)
                       <tr>
                         <td>{{ $userreservation->user->name }}</td>
                         <td>{{ $userreservation->user->email }}</td>
                         <td>{{ $userreservation->brmesta }}</td>
                         <td>{{ $userreservation->datum }}</td>
                          
                       </tr>
                       @endforeach
                      </table>
                      @else
                      <p>Nemate rezervacija</p>
                    @endif
{{ $userreservations->links() }}

</div>
                
                </div>
            </div>
        </div>


@endsection