@extends ("layoutadmin2")

@section("content")

@include('inc.messages')

<div class="row justify-content-center razmak">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Poruke

                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                    @if(count($messages) > 0)
                      <table class="table table-striped">
                       <tr>
                         <th>Ime</th>
                         <th>Email</th>
                         <th>Poruka</th>
                         <th>Obrisi</th>
                       </tr>
                       @foreach($messages as $message)
                       <tr>
                         <td><a href="/messages/{{ $message->id }}">{{ $message->name }}</a></td>
                         <td>{{ $message->email }}</td>
                         <td>{{ $message->message }}</td>
                         <td>
                           {!! Form::open(['action' => ['MessagesController@destroy', $message->id],
                           'method' => 'POST',
                           'onsubmit' => 'return confirm("Da li ste sigurni?")']) !!}
                       
                             {{ Form::hidden('_method', 'DELETE') }}

                           <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

                           {!! Form::close() !!}
                         </td>
                       </tr>
                       @endforeach
                      </table>
                      @else
                      <p>Nema proizvoda.</p>
                    @endif
             
                    {{$messages->links()}}
                </div>

            </div>
        </div>
    </div>


@endsection

