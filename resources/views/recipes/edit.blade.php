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


     <div class="row justify-content-center">
      <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
  <div class="panel-heading"><h3>Azuriraj recept</h3>

  </div>



<div class="panel-body">
{!! Form::open(['action' => ['RecipesController@update', $recipe->id], 'method' => 'POST']) !!}   <!-- u notescontroler saljem i gadjam store metod da cuva podatke. Store komunicira i sa front i sa back-->
 <div class="form-group">
     <label for="title">Naslov</label>
  {{ Form::text('title', $recipe->title, ['id' => 'inputkon']) }}
  </div>
  <div class="form-group">
      <label>Sastojci</label>
  {{ Form::textarea('ingredients', $recipe->ingredients, ['id' => 'textareakon']) }}
  </div>
  <div class="form-group">
      <label>Opis</label>
  {{ Form::textArea('description', $recipe->description, ['id' => 'textareakon']) }}
  </div>
  
  <div class="form-group">
        <label for="photo">Photo:</label>
        <input type="file" class="form-control" id="inputkon" name="photo" value="{{ $recipe->photo }}"/>
    </div>
  {{ Form::hidden('_method', 'PUT') }}

{{ Form::submit('Azuriraj', ['class' => 'btn btn-primary']) }}

{!! Form::close() !!}
</div>
</div>
</div>
</div>

   </div><!--shopmain-->
    </div><!--shopomotac-->
@endsection



