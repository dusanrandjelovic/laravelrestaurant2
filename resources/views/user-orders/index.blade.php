@extends ("layout")
@section('title', 'Moje porudzbine')

@section("content")
<div class="shopomotac razmakgore">

<div class="shopsidebar dashstil">
<a href="/user-reservations"> Moje rezervacije <i class="fas fa-caret-square-left"></i></a>
<a href="/user-orders"> Moje porudzbine <i class="fas fa-caret-square-left"></i></a>
<a href="/recipes"> Recepti <i class="fas fa-caret-square-left"></i></a>
</div>

<div class="shopmain">
    
    @include('inc.messages')
    
<h3>Moje porudzbine</h3>
<div class="panel-heading">
<a href="/checkout" class="btn btn-primary">Naruci iz korpe</a>
</div>



@if(count($userorders))
                      <table class="table table-striped">
                       <tr>
                        <th>Broj porudzbine</th>
                         <th>Poruceno-RSD-kolicina</th>
                   
                       </tr>
                       @foreach($userorders as $userorder)
                       <tr>
                         <td>{{ $userorder->id }}</td>
                       <!--  <td>{{ $userorder->user->email }}</td>  -->
                         <td>{{ $userorder->ordered }}</td>
                          
                       </tr>
                       @endforeach
                      </table>
                      @else
                      <p>Nemate porudzbina</p>
                    @endif
{{ $userorders->links() }}
</div><!--shopmain-->
    </div><!--shopomotac-->
@endsection