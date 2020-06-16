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
  <div class="panel-heading"><h3>Dodaj recept</h3>

  </div>

<div class="panel-body">

  {!! Form::open(['action' => 'RecipesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}   <!-- u notescontroler saljem i gadjam store metod da cuva podatke. Store komunicira i sa front i sa back-->
    <div class="form-group">
          <label for="title">Naslov:</label>
    {{ Form::text('title', '', ['placeholder' => 'Title', 'id' => 'inputkon']) }}
    </div>
    <div class="form-group">
          <label for="ingredients">Sastojci:</label>
    {{ Form::textArea('ingredients', '', ['placeholder' => 'Sastojci', 'id' => 'textareakon']) }}
    </div>
    <div class="form-group">
          <label for="description">Opis:</label>
    {{ Form::textArea('description', '', ['placeholder' => 'Opis', 'id' => 'textareakon']) }}
    </div>
  <div class="form-group">
        <label for="photo">Photo:</label>
        <input type="file" class="form-control" id="inputkon" name="photo"/>
    </div>

  {{ Form::submit('Dodaj recept', ['class' => 'btn btn-primary']) }}

  {!! Form::close() !!}

  </div>
</div>
</div>
</div>

   </div><!--shopmain-->
    </div><!--shopomotac-->
@endsection



