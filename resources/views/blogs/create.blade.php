@extends('layoutadmin2')

@section('content')

<div class="admin-center">
    <a href="/admin" class="btn btn-default">Povratak nazad</a>
  <h3>Dodaj vest</h3>

  @include('inc.messages')


{!! Form::open(['action' => 'BlogsController@store', 'method' => 'POST']) !!}   <!-- u notescontroler saljem i gadjam store metod da cuva podatke. Store komunicira i sa front i sa back-->
  <div class="form-group">
      <div>
       <label>Naslov</label>
       </div>
  {{ Form::text('naslov', '', ['id' => 'inputkon']) }}
  </div>
   <div class="form-group">
       <div>
       <label>Tekst</label>
       </div>
  {{ Form::textArea('tekst', '', ['id' => 'textareakon']) }}
  </div>
   <div class="form-group">
       <div>
       <label>Datum</label>
       </div>
  {{ Form::text('datum', '', ['id' => 'inputkon']) }}
  </div>

{{ Form::submit('Dodaj vest', ['class' => 'btn btn-primary']) }}

{!! Form::close() !!}
</div>
@endsection