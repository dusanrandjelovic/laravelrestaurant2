@extends('layoutadmin2')

@section('content')
<div class="row justify-content-center razmak">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
  <div class="panel-heading"><h3>Azuriraj recept</h3>

</div>

@include('inc.messages')
<div class="panel-body">
{!! Form::open(['action' => ['BlogcommentsController@update', $blogcomment->id], 'method' => 'POST']) !!}   <!-- u notescontroler saljem i gadjam store metod da cuva podatke. Store komunicira i sa front i sa back-->
  <div class="form-group">
     <div><label for="name">Ime:</label></div>
  {{ Form::text('name', $blogcomment->name, ['id' => 'inputkon']) }}
   </div>
  <div class="form-group">
     <div><label for="body">Komentar:</label></div>
  {{ Form::textArea('body', $blogcomment->body, ['id' => 'textareakon']) }}
   </div>
  <div class="form-group">
    <div><label for="odobren">Odobrenje:</label></div> 
  {{ Form::text('odobren', $blogcomment->odobren, ['id' => 'inputkon']) }}
   </div>
  <input type="text" value="{{ $blogcomment->blog_id }}" name="blog_id">
<!-- upisuje podatke na server put i pravi izmenu-->
  {{ Form::hidden('_method', 'PUT') }}

{{ Form::submit('Azuriraj', ['class' => 'btn btn-primary']) }}

{!! Form::close() !!}
</div>
</div>
</div>
</div>
@endsection
