@extends('layoutadmin2')

@section('content')
<div class="admin-center">
<a href="/admin-recipes" class="btn btn-default">Povratak nazad</a>

  <h3>Edit</h3>

@include('inc.messages')

{!! Form::open(['action' => ['AdminRecipesController@update', $recipe->id], 'method' => 'POST']) !!}   <!-- u notescontroler saljem i gadjam store metod da cuva podatke. Store komunicira i sa front i sa back-->

  <div class="form-group">
  <div><label for="odobren">Odobrenje</label></div>
           <select name="odobren">
                <option value="1">odobri</option>
                  <option value="0">neodobri</option>
           </select>
     </div>      
<!-- upisuje podatke na server put i pravi izmenu-->
  {{ Form::hidden('_method', 'PUT') }}

{{ Form::submit('Azuriraj', ['class' => 'btn btn-primary']) }}

{!! Form::close() !!}
</div>
@endsection