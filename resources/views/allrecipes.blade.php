@extends('layout')

@section('content')
@include('inc.messages')
<div class="razmakgore">
<h1>Recipes</h1>
</div>
<div class="recepti">
  @if(count($recipes) > 0)
                 
                  <div class="row">
                       @foreach($recipes as $recipe)
                      
                           <div class="col-md-4">
                    <img src="{{url('uploads/'.$recipe->photo)}}" alt="{{$recipe->photo}}">
                    <p> <a href="/recipes/{{$recipe->id}}"> {{ $recipe->title }}</a></p>
                  
             
              </div>
              
                       @endforeach
                       
                       </div>
                   @else
                       <p>Nema recepata</p>
                    @endif 
         </div> 
{{$recipes->links() }}
@endsection