@extends('layoutadmin2')

@section('content')
@include('inc.messages')
<div class="razmak">

<div class="red">

 <p><a href="/admin-recipes?odobren=1">Odobreni</a></p>
 <p><a href="/admin-recipes?odobren=0">Neodobreni</a></p>

</div>

<div class="shopmain row justify-content-center">
    <div class="col-md-11">
        <div class="card">
           
                <div class="card-header">Recepti

                </div>

                <div class="card-body">
                     @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                @if(count($recipes))
                      <table class="table table-striped">
                       <tr>
                         <th>Title</th>
                       <!--  <th>Opis</th>-->
                    <!--  <th>Slika</th>-->
                        <th>Odobren</th>
                        <th>Edit</th>
                        <th>Delete</th>
                   
                       </tr>
                       @foreach($recipes as $recipe)
                       <tr>
                         <td><a href="admin-recipes/{{ $recipe->id }}">{{ $recipe->title }}</a></td>
                     
                         <td>{{ !empty($recipe->odobren) ? 'Odobren':'Nije odobren'}}</td>
                 <td><a href="/admin-recipes/{{ $recipe->id }}/edit" class="btn btn-default"><i class="fas fa-edit"></i></a></td>
                   <td>
                {!! Form::open(['action' => ['AdminRecipesController@destroy', $recipe->id], 'method' => 'POST', 
                'onsubmit' => 'return confirm("Da li ste sigurni?")']) !!}   <!-- u notescontroler saljem i gadjam destroy da brisem-->

  {{ Form::hidden('_method', 'DELETE') }}

<button type="submit" class="btn btn-danger">
    <i class="fas fa-trash-alt"></i>
                                       </button>

{!! Form::close() !!}
                </td>  
                
                        
                       </tr>
                       @endforeach
                      </table>
                    @else
                    <p>Nema recepata</p>
                    @endif
          
{{$recipes->links() }}
                  
                    
                    
                   
                </div>
                
            </div>
        
    </div>
    
    </div><!--shopmain-->
    </div><!--shopomotac-->

@endsection

