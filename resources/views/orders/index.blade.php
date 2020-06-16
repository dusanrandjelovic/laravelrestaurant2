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

                    <h3>Porudzbine</h3>

                    @if(count($orders) > 0)
                      <table class="table table-striped">
                       <tr>
                       <th>Id</th>
                       <th>Name</th>
                         <th>Phone</th>
                         <th>Ordered</th>
                      
                   
                       </tr>
                       @foreach($orders as $order)
                       <tr>
                       <td>{{ $order->id }}</td>
                         <td>{{ $order->name }}</td>
                         <td>{{ $order->phone}}</td>
                         <td>{{ $order->ordered}}</td>
              
                        
                       </tr>
                       @endforeach
                      </table>
                      @else
                      <p>Nemate rezervacija</p>
                    @endif 
          {{$orders->links()}}

                  
                    
                    
                   
                </div>
                
            </div>
        </div>
    </div>
  

@endsection
