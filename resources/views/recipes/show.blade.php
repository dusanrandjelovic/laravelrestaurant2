@extends('layout')

@section('content')
 <div class="razmakgore">

 
 <div class="row justify-content-center">

    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">

<div class="panel-heading">
<h4>{{$recipe->title}}</h4>
</div>

<div class="panel-body">


          <ul class="list-group">
            <li class="list-group-item">
              Sastojci:  {{$recipe->ingredients}}
            </li>
             <li class="list-group-item">
              Opis:  {{$recipe->description}}
            </li>
          </ul>

      <hr>
      <div class="well">
        <img src="{{url('uploads/'.$recipe->photo)}}" alt="{{$recipe->photo}}">
      </div>
      
      </div>
  </div>
</div>
</div>

   </div><!--razmakgore-->

@endsection






