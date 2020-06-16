@extends ("layoutadmin2")
@section('title', 'Sve porudzbine')

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

<h2>Sve porudzbine korisnika</h2>


@include('inc.messages')


@if(count($userorders))
                      <table class="table table-striped">
                       <tr>
                        <th>Ime</th>
                        <th>Email</th>
                         <th>Naruceno</th>
                    
                   
                       </tr>
                       @foreach($userorders as $userorder)
                       <tr>
                         <td>{{ $userorder->user->name }}</td>
                         <td>{{ $userorder->user->email }}</td>
                         <td>{{ $userorder->ordered }}</td>
                       
                          
                       </tr>
                       @endforeach
                      </table>
                      @else
                      <p>Nemate rezervacija</p>
                    @endif
{{ $userorders->links() }}

</div>
                
                </div>
            </div>
        </div>
      

@endsection