@extends('layoutadmin2')

@section('content')

<div class="admin-center">
@include('inc.messages')

<p>Promeni podatke o leku</p>


<div class="panel-body">
{!! Form::open(['action' => ['AdminProductsController@update', $adminproduct->id], 'method' => 'POST']) !!}   <!-- u notescontroler saljem i gadjam store metod da cuva podatke. Store komunicira i sa front i sa back-->
<div class="form-group">
     <div><label>Naziv</label></div>
  {{ Form::text('name', $adminproduct->name, ['id' => 'inputkon']) }}
</div>
<div class="form-group">
     <div><label>Opis</label></div>
  {{ Form::textarea('description', $adminproduct->description, ['id' => 'inputkon']) }}
</div>
<div>
    <div><label>Dug opis</label></div>
  {{ Form::textarea('longdesc', $adminproduct->longdesc, ['id' => 'inputkon']) }}
</div>
<div>
    <div><label>Detalji</label></div>
  {{ Form::textarea('details', $adminproduct->details, ['id' => 'inputkon']) }}
</div>
<div>
    <div><label>Kod</label></div>
  {{ Form::textarea('code', $adminproduct->code, ['id' => 'inputkon']) }}
</div>
<div>
    <div><label>Slika</label></div>
  {{ Form::text('photo', $adminproduct->photo, ['id' => 'inputkon']) }}
</div>
<div>
    <div><label>Cena</label></div>
  {{ Form::text('price', $adminproduct->price, ['id' => 'inputkon']) }}
</div>
<div>
    <div><label>Kategorija</label></div>
  {{ Form::text('category', $adminproduct->category, ['id' => 'inputkon']) }}
</div>
<div>
    <div><label>Link</label></div>
  {{ Form::text('link', $adminproduct->link, ['id' => 'inputkon']) }}
</div>


<!-- upisuje podatke na server put i pravi izmenu-->
  {{ Form::hidden('_method', 'PUT') }}

{{ Form::submit('Azuriraj', ['class' => 'btn btn-primary']) }}

{!! Form::close() !!}
</div>



</div>

@endsection