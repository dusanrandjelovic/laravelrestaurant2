@extends('layoutadmin2')
@section('title', 'Vesti')

@section('content')


<div class="row justify-content-center razmak">

    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">

<div class="panel-heading">
  {{ $message->name }}
<a href="/messages" class="pull-right btn btn-primary">Pocetna</a>
</div>

<div class="panel-body">


          <ul class="list-group">
       
            <li class="list-group-item">
              Email: {{ $message->email }}
            </li>
            <li class="list-group-item">
              Poruka: {{ $message->message }}
            </li>
          

          </ul>


      </div>
  </div>
</div>
</div>


@endsection