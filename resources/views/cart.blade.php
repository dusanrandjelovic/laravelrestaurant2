@extends('layout')

@section('title', 'Cart')

@section('content')
<div class="razmakgore">
    <span id="status"></span>

    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Sajt</th>
            <th style="width:10%">Cena</th>
            <th style="width:8%">Količina</th>
            <th style="width:22%" class="text-center">Ukupno</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>

        <?php $total = 0 ?>

        @if(session('cart'))
            @foreach((array) session('cart') as $id => $details)

                <?php $total += $details['price'] * $details['quantity'] ?>

                <tr>
                    <td data-th="Sajt">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ $details['photo'] }}" width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Cena">{{ $details['price'] }} <i class="fas fa-euro-sign"></i></td>
                    <td data-th="Količina">
                        <input type="number" min="0" value="{{ $details['quantity'] }}" class="form-control quantity" />
                        
                    </td>
                    <td data-th="Ukupno" class="text-center"><span class="product-subtotal">{{ $details['price'] * $details['quantity'] }}</span> <i class="fas fa-euro-sign"></i></td>
                    <td class="actions" data-th="">
                        <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fas fa-sync-alt"></i></button>
                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="far fa-trash-alt"></i></button>
                        <i class="fas fa-spinner" style="font-size:24px; display: none"></i>
                       
                    </td>
                </tr>
            @endforeach
        @endif

        </tbody>
        <tfoot>
      
        <tr>
            <td><a href="{{ url('/products') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Nastavi kupovinu</a></td>
            
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Račun: <span class="cart-total">{{ $total }}</span> <i class="fas fa-euro-sign"></i></strong></td>
        </tr>
        </tfoot>
    </table>
    
     <div class="naruci">
<a href="checkout">Naruči <i class="fas fa-chevron-circle-right"></i></a>
</div>
    
</div>
@endsection

@section('scripts')


    <script type="text/javascript">

        $(".update-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            var parent_row = ele.parents("tr");

            var quantity = parent_row.find(".quantity").val();

            var product_subtotal = parent_row.find("span.product-subtotal");

            var cart_total = $(".cart-total");

            var loading = parent_row.find(".btn-loading");

            loading.show();

            $.ajax({
                url: '{{ url('update-cart') }}',
                method: "get",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: quantity},
                dataType: "json",
                success: function (response) {

                    loading.hide();

                    $("span#status").html('<div class="alert alert-success">'+response.msg+'</div>');

                    $("#header-bar").html(response.data);

                    product_subtotal.text(response.subTotal);

                    cart_total.text(response.total);
                }
            });
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            var parent_row = ele.parents("tr");

            var cart_total = $(".cart-total");

            if(confirm("Da li ste sigurni?")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "post",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    dataType: "json",
                    success: function (response) {

                        parent_row.remove();

                        $("span#status").html('<div class="alert alert-success">'+response.msg+'</div>');

                        $("#header-bar").html(response.data);

                        cart_total.text(response.total);
                    }
                });
            }
        });

    </script>

@endsection