@extends('layoutadmin2')

@section('content')
@include('inc.messages')

<div class="row justify-content-center razmak">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Proizvodi

    <a href="/admin-products/create" class="pull-right btn btn-primary">Dodaj proizvod</a>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                    @if(count($adminproducts))
                      <table class="table table-striped">
                       <tr>
                         <th>Name</th>
                         <th>Category</th>
                         <th>Price</th>
                         <th>Izmeni</th>
                         <th>Obrisi</th>
                       </tr>
                       @foreach($adminproducts as $adminproduct)
                       <tr>
                         <td><a href="/admin-products/{{ $adminproduct->id }}">{{ $adminproduct->name }}</a></td>
                         <td>{{ $adminproduct->category}}</td>
                         <td>{{ $adminproduct->price}}</td>
                         <td><a href="/admin-products/{{ $adminproduct->id }}/edit" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
                         <td>
                           {!! Form::open(['action' => ['AdminProductsController@destroy', $adminproduct->id],
                           'method' => 'POST',
                           'onsubmit' => 'return confirm("Da li ste sigurni?")']) !!}
                           <!-- u notescontroler saljem i gadjam destroy da brisem
                         iz varijable $contact uzimam id onog kontakta koji se edituje-->


                           <!-- upisuje podatke na server put i pravi izmenu-->
                             {{ Form::hidden('_method', 'DELETE') }}

                           <button type="submit" class="btn btn-danger">
    <i class="fas fa-trash-alt"></i>
                                       </button>

                           {!! Form::close() !!}
                         </td>
                       </tr>
                       @endforeach
                      </table>
                      @else
                      <p>Nema proizvoda.</p>
                    @endif
                  1 - Na stanju.
                  2 - Nije na stanju.

                    {{$adminproducts->links()}}
                </div>

            </div>
        </div>
    </div>

@endsection
