@extends('layoutadmin2')

@section('content')

<div class="admin-center">

  <h1>Kreiraj product</h1>

  @include('inc.messages')

  <div class="panel-body">
  {!! Form::open(['action' => 'AdminProductsController@store', 'method' => 'POST']) !!}   <!-- u notescontroler saljem i gadjam store metod da cuva podatke. Store komunicira i sa front i sa back-->
<div>
    <div>
    <label>Name</label>
    </div>
    {{ Form::text('name', '', ['id' => 'inputkon']) }}
  </div>

  <div>
  <div>
    <label>Desc</label>
    </div>
    {{ Form::textarea('description', '', ['id' => 'inputkon']) }}
</div>

<div>
<div>
    <label>Long</label>
    </div>
    {{ Form::textarea('longdesc', '', ['id' => 'inputkon']) }}
</div>

<div>
    <div>
    <label>Details</label>
    </div>
    {{ Form::text('details', '', ['id' => 'inputkon']) }}
  </div>

  <div>
    <div>
    <label>Code</label>
    </div>
    {{ Form::text('code', '', ['id' => 'inputkon']) }}
  </div>

  <div>
    <div>
    <label>Photo</label>
    </div>
    {{ Form::text('photo', '', ['id' => 'inputkon']) }}
  </div>

  <div>
    <div>
    <label>Price</label>
    </div>
    {{ Form::text('price', '', ['id' => 'inputkon']) }}
  </div>

  <div>
    <div>
    <label>Category</label>
    </div>
    {{ Form::text('category', '', ['id' => 'inputkon']) }}
  </div>

  <div>
    <div>
    <label>Link</label>
    </div>
    {{ Form::text('link', '', ['id' => 'inputkon']) }}
  </div>


  {{ Form::submit('Dodaj', ['class' => 'btn btn-primary']) }}

  {!! Form::close() !!}
  </div>

</div>

@endsection