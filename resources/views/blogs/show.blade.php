@extends('layout')
@section('title', 'Vesti')

@section('content')
<div class="razmakgore">
<a class="btn btn-primary" href="/news">Sve vesti</a>

@include('inc.messages')

 <h2>{{ $blog->text }}</h2>
<p>{{ $blog->body }}</p>
<hr>

 <h4>Ostavite komentar:</h4>

<div class="comment-form">
 {!! Form::open(['route' => ['comments.store', $blog->id], 'method' => 'POST', 'id' => 'formakon']) !!}  
<div class="comment-margin">
      <div>{{ Form::label('ime') }}</div>
   {{ Form::text('ime', '', ['id' => 'inputkon']) }}
</div>
<div class="comment-margin" >
   <div>{{ Form::label('komentar') }}</div>
  {{ Form::textarea('komentar', '', ['id' => 'textareakon']) }}
</div>
<div style="display:none;">
    <input name="my_name" type="text" value="" id="my_name">
    <input name="my_time" type="text" value="eyJpdiI6IkxoeWhKc3prN2puZllEajRwZ3lrc0I5bU42bUFWbzF1NEVVOEhxbG9WcFE9IiwidmFsdWUiOiJxNEtBT0NpYW5lUjJvWXp6VE45a1U0V3dNbk9Jd2RUNW42NFpiQWtTRllRPSIsIm1hYyI6IjAyMWQ0NWI1NTVkYTBjZTAxMTdhZmJmNTY0ZDI4Nzg4NzU3ODU4MjM1Y2MxNTVkYjAwNmFhNzBmNTdlNmJmMjkifQ==" id="my_time">
</div>
<div>
{{ Form::submit('Dodaj komentar', ['class' => 'btn btn-primary']) }}
</div>
{!! Form::close() !!}
</div>

<div>
  @foreach($blog->blogcomments as $blogcomment)
  @if($blogcomment->odobren == '1')
         <p>
  <strong>{{ $blogcomment->created_at->diffForHumans() }}: &nbsp;</strong> {{ $blogcomment->name }}
  <strong>&nbsp; {{ $blogcomment->created_at }}</strong></p>
  <p>{{ $blogcomment->body }}</p>
  <hr>
        
    @endif
 
  @endforeach
 </div>
 


</div>
@endsection