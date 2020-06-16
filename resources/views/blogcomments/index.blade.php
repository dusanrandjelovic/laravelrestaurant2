@extends('layoutadmin2')

@section('content')
@include('inc.messages')
<div class="shopomotac">

<div class="shopmain">
    <div class="row justify-content-center razmak">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><p>Komentari</p>
                </div>

                <div class="panel-body">
                     @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                    @if(count($blogcomments) > 0)
                      <table class="table table-striped">
                       <tr>
                       <th>Vest</th>
                         <th>Naslov</th>
                         <th>Odobren</th>
                      <th>Edit</th>
                      <th>Delete</th>
                   
                       </tr>
                       @foreach($blogcomments as $blogcomment)
                       <tr>
                       <td>{{ $blogcomment->blog->text }}</td>
                         <td>{{ $blogcomment->name }}</td>
                         <td>{{ $blogcomment->odobren}}</td>
                 <td><a href="/blogcomments/{{ $blogcomment->id }}/edit" class="btn btn-default"><i class="fas fa-edit"></i></a></td>
                  <td>
                           {!! Form::open(['action' => ['BlogcommentsController@destroy', $blogcomment->id],
                           'method' => 'POST',
                           'onsubmit' => 'return confirm("Da li ste sigurni?")']) !!}
                          
                             {{ Form::hidden('_method', 'DELETE') }}

                             <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

                           {!! Form::close() !!}
                         </td>
                        
                       </tr>
                       @endforeach
                      </table>
                    @endif 
          {{$blogcomments->links()}}

                  
                    
                    
                   
                </div>
                
            </div>
        </div>
    </div>
    </div><!--shopmain-->
    </div><!--shopomotac-->

@endsection
