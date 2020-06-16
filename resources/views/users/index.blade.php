@extends('layoutadmin2')

@section('content')
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

                    <h3>korisnici</h3>

                    @if(count($users) > 0)
                      <table class="table table-striped">
                       <tr>
                       <th>Id</th>
                       <th>Name</th>
                         <th>Email</th>
                         
                      
                   
                       </tr>
                       @foreach($users as $user)
                       <tr>
                       <td>{{ $user->id }}</td>
                         <td>{{ $user->name }}</td>
                         <td>{{ $user->email}}</td>
         
              
                        
                       </tr>
                       @endforeach
                      </table>
                    @endif 
          {{$users->links()}}

                  
                    
                    
                   
                </div>
                
            </div>
        </div>
    </div>
  

@endsection
