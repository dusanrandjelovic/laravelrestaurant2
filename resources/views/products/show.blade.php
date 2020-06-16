@extends('layout')

@section('title', 'Dusan Shop')

@section('content')
<div class="omotacpoj razmakgore">
    
    <div class="slikapoj">
        <img class="slpoj" src="/{{ $product->photo }}" alt="slika">
    
     
    </div>
    
    <div class="tekstpoj">
       <span id="status"></span>
        <h3> {{ $product->name }}</h3> 
    
              <ul class="list-group">
                <li class="list-group-item">
                {{ $product->description }}
               </li>
                
                 <p> Cena: {{ $product->price }} RSD</p>
                
              
    
              </ul>
              <p class="btn-holder"><a href="javascript:void(0);" data-id="{{ $product->id }}" class="btn btn-warning btn-block text-center add-to-cart" role="button">Dodaj u korpu</a>
                                <i class="fa fa-circle-o-notch fa-spin btn-loading" style="font-size:24px; display: none"></i>
                            </p>
    
          </div>
        </div>

<div class="donjideopoj">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sastojci</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Alergen info</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Promocija</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
             {!! nl2br(e($product->longdesc))!!}
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
           {!! nl2br(e($product->details))!!}
          </div>
          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
              {{ $product->code }}
          </div>
        </div>
    
        
      </div>  


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
