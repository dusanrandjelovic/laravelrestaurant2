@extends('layoutadmin2')
@section('title', 'Vesti')

@section('content')


<div class="row justify-content-center razmak">

    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">

<div class="panel-heading">
 {{ $adminproduct->name }}
<a href="/admin" class="pull-right btn btn-primary">Pocetna</a>
</div>

<div class="panel-body">


          <ul class="list-group">
          <li class="list-group-item">
              <a href="{{ $adminproduct->link }}" target="_blank"> Vidi </a>
            </li>
            <li class="list-group-item">
              Datum: {{ $adminproduct->price }}
            </li>
            <li class="list-group-item">
              Opis: {{ $adminproduct->category }}
            </li>
            <li class="list-group-item">
              Dijagnoze: {{ $adminproduct->longdesc }}
            </li>
            <li class="list-group-item">
              Lekovi: {{ $adminproduct->details }}
            </li>

          </ul>


      </div>
  </div>
</div>
</div>


@endsection