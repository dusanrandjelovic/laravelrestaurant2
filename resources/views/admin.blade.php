@extends('layoutadmin2')

@section('content')

 <div class="row justify-content-center razmak">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin nalog
<a href="/news/create" class="pull-right btn btn-primary">Kreiraj vest</a>
                </div>

                <div class="panel-body">
                     @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Vase vesti</h3>

                    @if(count($blogs) > 0)
                      <table class="table table-striped">
                       <tr>
                         <th>Naslov</th>
                         <th>Datum</th>
                         <th>Edit</th>
                         <th>Delete</th>
                       </tr>
                       @foreach($blogs as $blog)
                       <tr>
                         <td>{{ $blog->text }}</td>
                         <td>{{ $blog->due}}</td>
                 <td><a href="/news/{{ $blog->id }}/edit"><i class="fas fa-edit"></i></a></td>
                <td>
                {!! Form::open(['action' => ['BlogsController@destroy', $blog->id], 'method' => 'POST', 
                'onsubmit' => 'return confirm("Da li ste sigurni?")']) !!}   <!-- u notescontroler saljem i gadjam destroy da brisem-->

  {{ Form::hidden('_method', 'DELETE') }}

<button type="submit"><i class="fas fa-trash-alt"></i></button>

{!! Form::close() !!}
                </td>  
                        
                       </tr>
                       @endforeach
                      </table>
                      @else
                      <p>Niste napisali vest.</p>
                    @endif 
          

                  
                    
                    
                   
                </div>
                {{ $blogs->links() }}
            </div>
        </div>
    </div>


@endsection
