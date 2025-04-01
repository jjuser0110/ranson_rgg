@extends('layout.app')
@section('head_style')
<link href="{{ asset('css/single_product.css') }}" rel="stylesheet">
@endsection
@section('content')
@if(isset($error))
<div>
    <div>{{ $error }}</div>
    <button>Back to home page</button>    
</div>
@else
<!-- INNER HEADER -->
<div class="inner-header">
    <div class="content">
        <div class="product-image">
            <img src="{{ asset('img/products/'.$product->image) }}">
        </div>
        <div class="product-descriptions">
            <div class="product-name">{{ $product->name }}</div>
            <div class="product-tags">
                @php
                $tags = explode(',',$product->tags);
                @endphp
                @if(isset($tags) && count($tags) > 0)
                @foreach($tags as $tag)
                <div>{{ trim($tag) }}</div>
                @endforeach
                @endif
            </div>
            <p class="product-short-descriptions">{{ $product->short_description }}</p>
        </div>
    </div>
</div>

<!-- SINGLE PRODUCT -->
<section class="single-product">
    <div class="main row">
        <!-- VARIANT -->
        <div class="product-variants-wrapper box">
            <h2 class="title">Options</h2>
            <div class="product-variants"> 
                @if(count($variants) > 0)
                @foreach($variants as $variant)
                @if($variant->quantity > 0 )
                <div class="variant" data-id="{{ $variant->id }}" id="variant-{{ $variant->id }}">
                    <div class="variant-info">
                        <!-- <img src="{{ asset('img/products/'.$product->short_name.'/'.$variant->image) }}"> -->
                        <h5>{{$variant->name}}</h5> 
                    </div>
                    <div class="price-wrapper">
                        @if(isset($variant->discount) && $variant->discount > 0)
                        <div class="price">{{ env('CURRENCY','RM') }}{{ number_format($variant->price * (1 - $variant->discount / 100), 2) }} </div>
                        <div class="price-before">{{ env('CURRENCY','RM') }}{{ number_format($variant->price, 2, '.', '') }}</div>
                        @else
                        <div class="price">{{ env('CURRENCY','RM') }}{{ number_format($variant->price, 2, '.', '') }}</div>
                        @endif
                    </div>
                </div>
                @else
                <div class="variant" data-id="false" style="background:#f1f1f1">
                    <div class="variant-info">
                        <!-- <img src="{{ asset('img/products/'.$product->short_name.'/'.$variant->image) }}"> -->
                        <h5>{{$variant->name}}</h5> 
                    </div>
                    <div class="price-wrapper">
                        <div class="price" style="color:red;font-size:12px">Out of Stock</div>
                    </div>
                </div>
                @endif
                @endforeach
                @else
                <div class="no-variant">No item available</div>
                @endif
            </div>
        </div>

        <!-- ORDER -->
        <div class="payment-wrapper box" id="order">
            <h2 class="title">Order</h2>
            <div id="order-with-item" class="hide">
                <div class="quantity-wrapper">
                    Quantity
                    <div class="quantity-input">
                        <button class="minus"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="4" stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-minus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /></svg></button>
                        <input type="text" id="quantity" value="1" min="0">
                        <button class="plus"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="4" stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg></button>
                    </div>
                </div>
                <div class="order-wrapper">
                    <div id="order-items">
                        <div class="order-item">
                            <div id="order-product">
                                Garena Shell
                            </div>
                            <div id="order-variant">
                                2300 Shells
                            </div>
                        </div>
                        <div class="order-quantity-wrapper">

                        <svg width="12"  height="12"  viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>
                        <span id="order-quantity">1</span>
                    </div>
                    </div>
                    <div id="order-total">
                        <h4>Total</h4>
                        <div id="order-amount">RM 0.00</div>
                    </div>
                    <hr>
                    <div id="order-actions">
                        @if(Auth::check())
                        <button class="btn btn-hover-primary" id="btn-add-to-cart" type="button">
                        <svg viewBox="0 0 576 512" height="24" width="24"><path d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48l45.5 0c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5L488 384c13.3 0 24-10.7 24-24s-10.7-24-24-24l-288.3 0c-11.5 0-21.4-8.2-23.6-19.5L170.7 288l288.5 0c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32L360 32l0 102.1 23-23c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-64 64c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l23 23L312 32 120.1 32C111 12.8 91.6 0 69.5 0L24 0zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z"/></svg>
                        </button>
                        <button class="btn btn-hover-primary" id="btn-buy-now" type="button">Buy Now</button>
                        @else
                        <button class="btn btn-hover-primary" id="btn-login-first" onclick="$('#modal-login').show()" type="button">Login</button>
                        @endif
                    </div>
                </div>
            </div>
            <div id="order-without-item">
                No items selected
            </div>
        </div>
    </div>

    <!-- BOTTOM SECTION -->
    <div class="row" id="bottom-section">
        <!-- COL LEFT -->
        <div class="col" id="single-product-others-wrapper">
            <!-- DESCRIPTION -->
            <div class="box row">
                <div id="description-wrapper" class="box-content">
                    <h2 class="title">Description</h2>
                    <div class="content">
                        {!! json_decode($product->description) !!}
                    </div>
                </div>
            </div>

            <!-- GUIDE -->
            <div class="box row">
                <div id="guide-wrapper" class="box-content">
                    <h2 class="title">Guide</h2>
                    <div class="content">
                        {!! json_decode($product->guide) !!}
                    </div>
                </div>
            </div>

            <!-- OTHERS -->
            @if(isset($product->others) && $product->others != null)
            <div class="box row">
                <div id="other-wrapper" class="box-cotent">
                    <h2 class="title">Others</h2>
                </div>
            </div>
            @endif
        </div>

        <!-- COL RIGHT -->
        <div class="col" id="other-products">
            <!-- OTHER PRODUCT -->
            <div class="box row">
                <div>
                    <h2 class="title">Other Products</h2>
                </div>
                <div class="others-product-wrapper">
                    @foreach($others as $other)
                    <a class="product" href="{{ route('product.view', ['product' => $other->short_name]) }}">
                        <img src="{{ asset('img/products/'.$other->image) }}"/>
                        <div class="name">{{ $other->name }}</div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const product = @json($product);
    const variants = @json($variants);
    var variant = false;
    var quantity = 1;

    document.querySelector('.plus').addEventListener('click', function() {
        let input = document.getElementById('quantity');
        let currentValue = parseInt(input.value);
        quantity = currentValue + 1;
        input.value = quantity;
        addItems();
    });

    document.querySelector('.minus').addEventListener('click', function() {
        let input = document.getElementById('quantity');
        let currentValue = parseInt(input.value);
        if (currentValue > 1) {
            quantity = currentValue - 1;
            input.value = quantity;
            addItems();
        }
    });

    $(document).ready(function(){
        $('#quantity').on('change', function(){
            quantity = $(this).val();
            addItems();
        });

        $('.variant').on('click',function(){
            if($(this).data('id') == false){
                return false;
            }
            variant = variants.find(v => v.id === $(this).data('id'));
            
            $('.variant').removeClass('active');
            $(this).addClass('active');
            quantity = 1;
            addItems();
        });

        $('#btn-add-to-cart').on('click', function(){
            if(variant && product){
                let btn = $(this);   
                $(btn).prop('disabled', true);
                showLoading();
                $.ajax({
                    url: "{{ route('user.add_to_cart') }}",
                    method: 'POST',
                    data: { product:product, variant:variant, quantity:quantity},
                    headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}'},
                    success: function(response) {
                        console.log(response);
                        if(response.success == true){
                            setDefaultSwal('success','',response.message);
                            $('#cart-count').html(response.cart);
                        }
                        else{
                            setDefaultSwal('error','',response.message);
                        }
                    },
                    error: function() {
                        setDefaultSwal('error','', "There is something wrong, please try again.");
                    },
                    complete: function(){
                        $(btn).prop("disabled", false);
                        hideLoading();
                    }
                });
            
            }
            else{
                setDefaultSwal('error','','No product selected.');
            }
        });

        $('#btn-buy-now').on('click', function(){
            if(variant && product){
                let btn = $(this);
                $(btn).prop('disabled', true);
                showLoading();
                $.ajax({
                    url: "{{ route('checkout.create') }}",
                    method: 'POST',
                    data: { product:product.id, variant:variant.id, quantity:quantity},
                    headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}'},
                    success: function(response) {
                        console.log(response);
                        if(response.success == true && response.order){
                            window.location.href = "{{ route('checkout.single',['order'=>'__ORDERCODE__']) }}".replace('__ORDERCODE__',response.order);
                        }
                        else{
                            setDefaultSwal('error','',response.message);
                        }
                    },
                    error: function() {
                        setDefaultSwal('error','', "There is something wrong, please try again.");
                    },
                    complete: function(){
                        $(btn).prop("disabled", false);
                        hideLoading();
                    }
                });
            
            }
            else{
                setDefaultSwal('error','','No product selected.');
            }
        });
    });

    function addItems(){
        console.log('qweqwe');
        if(variant){
            $('#order-product').html(product.name);
            $('#order-variant').html(variant.name);
            
            $('#quantity').val(quantity);
            $('#order-quantity').html(quantity);
            if($('#order-with-item').hasClass('hide')){
                $('#order-without-item').addClass('hide');
                $('#order-with-item').removeClass('hide');
            }

            let price = variant.price;
            if(variant.discount && variant.discount > 0){
                price =  price * (1 - variant.discount / 100);

            }
            price = price.toFixed(2);
            var total = price * quantity;
            $('#order-amount').html("{{ env('CURRENCY', 'RM') }} "+total.toFixed(2));
        }
    }
</script>
@endif
@endsection



