<div>
    <div class="dropdown cartdropdown">
        <button type="button" data-toggle="dropdown" id="cartdugme">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
        </button>
   
        <div class="dropdown-menu cartdown">
            
            <div class="row total-header-section">
                <div class="col-lg-6 col-sm-6 col-6">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                </div>

                <?php $total = 0 ?>
                @foreach((array) session('cart') as $id => $details)
                    <?php $total += $details['price'] * $details['quantity'] ?>
                @endforeach

                <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                    <p>Ukupno: <span class="text-info">{{ $total }} <i class="fas fa-euro-sign"></i></span></p>
                </div>
            </div>
            
             <div class="row">
                <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                    <a href="{{ url('cart') }}" class="btn btn-primary btn-block">Korpa</a>
                </div>
            </div>

            @if(session('cart'))
                @foreach((array) session('cart') as $id => $details)
                    <div class="row cart-detail">
                        <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                            <img src="/{{ $details['photo'] }}" />
                        </div>
                        <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                            <p>{{ $details['name'] }}</p>
                            <span class="price text-info">{{ $details['price'] }} <i class="fas fa-euro-sign"></i></span> <span class="count"> Količina: {{ $details['quantity'] }}</span>
                        </div>
                    </div>
                @endforeach
            @endif
            
        </div>
    </div>
</div>