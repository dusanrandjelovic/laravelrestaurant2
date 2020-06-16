@extends('layout')
@section('title', 'Vesti')

@section('content')
<div class="razmakgore">
<h1>Vesti</h1>

</div>

    @include('inc.messages')
@if(count($blogs) >0 )
<div class="row">

  @foreach ($blogs as $blog)
  <div class="col-md-6">
    <div class="card vest-margin">
        <div class="card-body">
      <h3><a href="news/{{ $blog->id }}">{{ $blog->text }}</a></h3>
      <!-- u url je note/1 -->
      <!-- u resource ruta note upucuje na notes controler, a metoda show se poziva -->
      <span class="badge badge-secondary">{{ $blog->due }}</span>
      </div>
    </div>
    </div>
  @endforeach

 </div>
 @else 
 <p>Nema novih vesti</p>
@endif
  {{$blogs->links()}}

@endsection