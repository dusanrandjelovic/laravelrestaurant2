@extends('layout')

@section('title', 'Products')

@section('content')

<div class="shopomotac razmakgore">

<div class="shopsidebar">
    
     <div>

<form action="/search" method="get">
<div class="form-group">
  <input type="search" class="form-control" name="search" placeholder="Pretraga...">
</div>
<div class="form-group">
  <button class="btn btn-primary" type="submit">Pretraga</button>
</div>
</form>
</div>

<div class="filter">

<div>

 
 <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="/about">Kategorije<span class="caret"></span></a>
                          <ul class="dropdown-menu">
          <li><a href="/products?category=Sendviči">Sendviči</a></li>
          <li><a href="/products?category=Pice">Pice</a></li>
          <li><a href="/products?category=Poslastice">Poslastice</a></li>
          <li><a href="/products?category=Gotovajela">Gotovajela</a></li>
        </ul>
                         </li>

 </div>
 <div>
     
      <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="/about">Sortiraj po ceni <span class="caret"></span></a>
                          <ul class="dropdown-menu">
            <li><a href="{{ route('shop', ['price' => request('price'), 'sort' => 'desc']) }}">Opadajuće</a></li>
          <li><a href="{{ route('shop', ['price' => request('price'), 'sort' => 'asc']) }}">Rastuće</a></li>
         
        </ul>
                         </li>

 </div>
 
    
    </div><!--filter-->
    </div>
    
    <div class="shopmain">

    <div class="products">

        <span id="status"></span>

        <div class="row">

            @foreach($products as $product)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a href="/product/{{$product->id}}"><img src="{{ $product->photo }}" width="500" height="300"></a>
                        <div class="caption">
                            <h4><a href="/product/{{$product->id}}">{{ $product->name }}</a></h4>
                          
                            <p><strong>Cena: </strong> {{ $product->price }} <i class="fas fa-euro-sign"></i></p>
                            <p class="btn-holder"><a href="javascript:void(0);" data-id="{{ $product->id }}" class="btn btn-warning btn-block text-center add-to-cart" role="button">Dodaj u korpu</a>
                                
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div><!-- End row -->
 {{$products->links()}}
    </div>
    
    </div><!--shopmain-->

</div><!--shopomotac-->

@endsection

@section('scripts')

    <script type="text/javascript">
        $(".add-to-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            ele.siblings('.btn-loading').show();

            $.ajax({
                url: '{{ url('add-to-cart') }}' + '/' + ele.attr("data-id"),
                method: "get",
                data: {_token: '{{ csrf_token() }}'},
                dataType: "json",
                success: function (response) {

                    ele.siblings('.btn-loading').hide();

                    $("span#status").html('<div class="alert alert-success">'+response.msg+'</div>');
                    $("#header-bar").html(response.data);
                }
            });
        });
    </script>

@stop