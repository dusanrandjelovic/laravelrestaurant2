@extends('layoutadmin2')
@section('title', 'Vesti')

@section('content')


<div class="row justify-content-center razmak">

    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">

<div class="panel-heading">
  <p>{{ $recipe->title }}</p>
<a href="/admin-recipes" class="pull-right btn btn-primary">Pocetna</a>
</div>

<div class="panel-body">


          <ul class="list-group">
       
            <li class="list-group-item">
              Email: {{ $recipe->ingredients }}
            </li>
            <li class="list-group-item">
              Poruka: {{ $recipe->description }}
            </li>
            <li class="list-group-item">
              Poruka: {{ !empty($recipe->photo) ? $recipe->photo:'' }}
            </li>

          </ul>


      </div>
  </div>
</div>
</div>


@endsection