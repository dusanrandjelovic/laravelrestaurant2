@extends('layout')

@section('content')
 <div class="shopomotac razmakgore">

<div class="shopsidebar dashstil">
<a href="/user-reservations"> Moje rezervacije <i class="fas fa-caret-square-left"></i></a>
<a href="/user-orders"> Moje porudzbine <i class="fas fa-caret-square-left"></i></a>
<a href="/recipes"> Recepti <i class="fas fa-caret-square-left"></i></a>
</div>

<div class="shopmain">

 @include('inc.messages')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">

    <a href="/recipes/create" class="btn btn-primary">Dodaj recept</a>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(count($recipes))
                      <table class="table table-striped">
                       <tr>
                         <th>Naziv</th>
                         <th>Izmeni</th>
                         <th>Obrisi</th>
                       </tr>
                       @foreach($recipes as $recipe)
                       <tr>
                         <td>{{ $recipe->title }}</td>
              
                         <td><a href="/recipes/{{ $recipe->id }}/edit" class="btn btn-default"><i class="fas fa-edit"></i></a></td>
                         <td>
                           {!! Form::open(['action' => ['RecipesController@destroy', $recipe->id],
                           'method' => 'POST',
                           'onsubmit' => 'return confirm("Da li ste sigurni?")']) !!}
                           <!-- u notescontroler saljem i gadjam destroy da brisem
                         iz varijable $contact uzimam id onog kontakta koji se edituje-->


                           <!-- upisuje podatke na server put i pravi izmenu-->
                             {{ Form::hidden('_method', 'DELETE') }}

                           <button type="submit">
    <i class="fas fa-trash-alt"></i>
                                       </button>

                           {!! Form::close() !!}
                         </td>
                       </tr>
                       @endforeach
                      </table>
                      @else
                      <p>Nemate recepte.</p>
                    @endif

              {{ $recipes->links() }}
                </div>
              
            </div>
        </div>
    </div>
    

   </div><!--shopmain-->
    </div><!--shopomotac-->
@endsection



