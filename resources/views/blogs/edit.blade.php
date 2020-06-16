@extends('layoutadmin2')

@section('content')
<div class="admin-center">
<a href="/admin" class="btn btn-default">Povratak nazad</a>

  <h3>Edit</h3>


@include('inc.messages')

{!! Form::open(['action' => ['BlogsController@update', $blog->id], 'method' => 'POST']) !!}   
 <div class="form-group">
    <div><label>Naslov</label></div>
  {{ Form::text('naslov', $blog->text, ['id' => 'inputkon']) }}
  </div>
  
    <div class="form-group">
    <div><label>Tekst</label></div>
  {{ Form::textArea('tekst', $blog->body, ['id' => 'textareakon']) }}
  </div>
  
    <div class="form-group">
    <div><label>Datum</label></div>
  {{ Form::text('datum', $blog->due, ['id' => 'inputkon']) }}
  </div>
<!-- upisuje podatke na server put i pravi izmenu-->
  {{ Form::hidden('_method', 'PUT') }}

{{ Form::submit('Azuriraj', ['class' => 'btn btn-primary']) }}

{!! Form::close() !!}
</div>
@endsection
