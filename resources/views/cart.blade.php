@extends('layout.app')
@section('head_style')
<link href="{{ asset('css/checkout.css') }}" rel="stylesheet">
<style>
    .drop-cart svg > *{
        fill: #d8d8d8;
        transition: 0.3s
    }

    .drop-cart:hover svg > *{
        fill: red;
    }

    #checkout-section .row{
        flex-wrap: wrap
    }

    #checkout-items-wrapper{
        margin-right: 0;
        width: 100%;
    }

    #checkout-items .item .sub-item{
        padding-left: 30px;
        position: relative;
    }

    #checkout-items .item .sub-item.active {
        border: 2px solid var(--clr-primary);
        background: rgb(226 0 0 / 5%);
    }
   
    #checkout-items .item .sub-item .col-left {
        width: 50%;
        flex: 1 0 50%
    }

    #checkout-items .item .sub-item .quantity {
        width: 20%;
        max-width: calc(5ch + 60px);

    }

    #checkout-items .item .sub-item .price {
        width: 20%;
        max-width: calc(5px + 10ch);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center
    }

    #checkout-items .item .sub-item .price .price-before {
        line-height: 1.1;
        font-size: 14px;
        color: gray;
        text-decoration: line-through
    }

    #checkout-items .item .sub-item .price .price-after {
        line-height: 1.1;
    }

    #checkout-items .item .sub-item .drop-cart {
        display: flex;
        padding: 5px;
        justify-content: center;
        align-items: center;
    }

   .quantity-input {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .quantity-input button {
        font-size: 16px;
        height: 30px;
        width: 30px;
        border: none;
        font-size: 18px;
        font-weight: 700;
        padding: 5px;
        line-height: 1;
    }

    .quantity-input button.minus {
        border-radius: 25px 0 0 25px;
        padding-left: 10px;
    }

    .quantity-input button.plus {
        border-radius: 0 25px 25px 0;
        padding-right: 10px;
    }

    .quantity-input input {
        font-size: 14px;
        height: 30px;
        border: none;
        background: #f1f1f1;
        outline: none;
        text-align: center;
        width: 5ch;
    }

    .out-of-stock .quantity {
        display: none;
    }

    .out-of-stock .price-before {
        display: none;
    }

    .out-of-stock .price-after {
        color: red !important;
        font-size: 14px;
    }

    .check-item{
        position: absolute;
        top: 10px;
        left: 8px;
        background: #d6d6d6;
        border-radius: 5px;
        height: 16px;
        width: 16px;
        display: flex;
        align-items: center;
        justify-content: center
    }

    .check-item svg{
        fill: gray
    }

    .sub-item.active .check-item{
        position: absolute;
        top: 10px;
        left: 8px;
        background: var(--clr-primary);
        border: 1px solid va(--clr-primary);
        border-radius: 5px;
        height: 16px;
        width: 16px;
    }

    .sub-item.active .check-item svg{
        fill: white
    }

    #cart-checkout-payment-wrapper{
        display: flex;
        width: 100%;
        justify-content: space-between;
        margin-top: 10px;
    }

    #cart-payment-wrapper{
        width: 45%;
        max-width: 275px;
    }

    #payment-info{
        padding: 0;
    }

    #cart-payment-form{
        width: calc(50% - 10px);
        margin-left: 10px;
        display: flex;
        justify-content: flex-end;
        align-items: center;    
        gap: 25px;
    }

    #cart-payment-form .col{
        display: flex;
        flex-direction: column;
        gap: 5px;
    }

    #cart-payment-form .col label{
        font-weight: 400;
        font-size: 14px;
        line-height: 1
    }

    #cart-payment-form .col span{
        font-size: 20px;
        font-weight: 700;
        line-height: 1
    }

    #cart-payment-form button{
        width: 200px;
    }

    #payment-info .row label {
        font-size: 14px;
        font-weight: 400;
    }

    #payment-info .row span {
        font-size: 14px;
        font-weight: 700;
    }

    .total-after{
        margin-bottom: 0 !important;
    }

    @media only screen and (max-width:767px){
        #checkout-items .item .sub-item {
            flex-wrap: wrap;
            position: relative
        }

        #checkout-items .item .sub-item .quantity {
            width: 20%;
            max-width: calc(5ch + 60px);
        }

        #checkout-items .item .sub-item .col-left {
            width: 100%;
            flex: 1 0 100%;
            margin-bottom: 10px
        }

        #checkout-items .item .sub-item .quantity {
            width: 50%;
            max-width: 50%;
            justify-content: flex-end;
            padding: 0;
            order: 2
        }

        #checkout-items .item .sub-item .price {
            width: 50%;
            max-width: 50%;
            align-items: flex-start;
            padding: 0;
            order: 1
        }

        #checkout-items .item .sub-item .price .price-before{
            font-size: 12px;
        }

        #checkout-items .item .sub-item .drop-cart {
            position: absolute;
            top: 8px;
            right: 8px;
        }

        #cart-checkout-payment-wrapper{
            flex-wrap: wrap
        }

        #cart-payment-wrapper{
            width: 100%;
            max-width: 100%;
        }

        #cart-payment-form{
            width: 100%;
            margin-left: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;    
            gap: 25px;
        }

        #cart-checkout-payment-wrapper {
            position: fixed;
            bottom: 0;
            left: 0;
            margin-bottom: 0;
            border-radius: var(--radius) var(--radius) 0 0;
            z-index: 10
        }

        #payment-info{
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #f1f1f1;
        }

        #checkout-items-wrapper {
            margin-bottom: 175px;
        }

        #cart-payment-form .btn-submit{
            max-width: 150px;
        }
    }

    #empty-cart{
        width: 80%;
        display: flex;
        flex-direction: column;
        gap: 10px;
        justify-content: center;
        align-items: center;
        margin: 15px auto;
        max-width: 350px
    }

    #empty-cart img{
        width: 80%;
        max-width: 160px;
    }

    #btn-checkout:disabled{
        color: #989898;
        background: #d8d8d8
    }
</style>
@endsection
@section('content')
@if(isset($error))
<div id="failed">
    <img src="{{ asset('img/no_result.png') }}"/>
    <label>{{ $error }}</label>
    <button class="btn btn-submit" onclick="window.location.href='{{ route('home') }}'">Back to home page</button>
</div>
@else
<!-- CHECKOUT -->
<section class="single-checkout" id="checkout-section">
   
    <div class="row">
        <h2 class="page-title">Carts</h2>
    </div>

    <div class="row" >
        <!-- ITEMS-->
        <div class="col" id="checkout-items-wrapper">
            <div id="checkout-items" class="box">
                <h2 class="title">All Items</h2>
                <hr>
                @foreach($carts as $key => $cart)
                <div class="item">
                    <h2 class="name" id="{{ $key }}">{{ $cart['name'] }}</h2>
                    @foreach($cart['items'] as $item)
                    <div class="sub-item" id="item-{{ $item['id'] }}" data-id="{{ $item['id'] }}">
                        <div class='check-item'>
                        <svg viewBox="0 0 448 512" width="12" height="12"><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                        </div>
                        <div class="col-left">
                            <img src="{{ asset('img/products/'.$item['short_name'].'/'.$item['image']) }}"/>
                            <div class="info">
                                <div class="name">{{ $item['variant_name'] }}</div>
                                <span>{{ $item['discount'] > 0 ? "Discount ".$item['discount']."%" : '' }}</span>
                            </div>
                        </div>
                        <div class="quantity">
                            <div class="quantity-input">
                                <button class="minus"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="4" stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-minus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /></svg></button>
                                <input type="text" value="{{ $item['quantity'] }}" min="1" max="{{ $item['stock'] }}">
                                <button class="plus"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="4" stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg></button>
                            </div>
                        </div>
                        <div class="price">
                            @if($item['discount'] && $item['discount'] > 0)
                            <div class="price-after">{{ env('CURRENCY','RM') }}{{ number_format( (($item['price'] * (1 - $item['discount'] / 100))) * $item['quantity'] ,2,'.','') }} </div> 
                            <div class="price-before">{{ env('CURRENCY','RM') }}{{ number_format( ($item['price']) * $item['quantity'] ,2,'.','') }} </div> 
                            @else
                            <div class="price-after">{{ env('CURRENCY','RM') }}{{ number_format( ($item['price']) * $item['quantity'] ,2,'.','') }} </div> 
                            @endif
                        </div>
                        <div class="drop-cart">
                            <svg viewBox="0 0 448 512" height="16" weight="16"><path d="M135.2 17.7L128 32 32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l384 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0-7.2-14.3C307.4 6.8 296.3 0 284.2 0L163.8 0c-12.1 0-23.2 6.8-28.6 17.7zM416 128L32 128 53.2 467c1.6 25.3 22.6 45 47.9 45l245.8 0c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endforeach
                <div id="empty-cart" class="hide">
                    <img src="{{ asset('img/no_result.png') }}"/>
                    <label>Cart is empty</label>
                    <button class="btn btn-submit" onclick="window.location.href='{{ route('home') }}'">Add item</button>
                </div>
            </div>
        </div>

        <!-- PAYMENT -->
        <div class="row box" id="cart-checkout-payment-wrapper">
            <!-- PAYMENT INFO -->
            <div id="cart-payment-wrapper">
                <div id="payment-info">
                    <div class="row total-before">
                        <label>Total Before Discounts</label>
                        <span id="cart-checkout-before">{{ env('CURRENCY','RM') }}{{ number_format(0,2,'.','') }}</span>
                    </div>

                    <div class="row total-after">
                        <label>Discount</label>
                        <span class="discount" id="cart-checkout-discount">-{{ env('CURRENCY','RM') }}{{ number_format(0,2,'.','') }}</span>
                    </div>
                </div>
            </div>

            <!-- PAYMENT FORM -->
            <div  id="cart-payment-form">
                <div class="col col-left">
                    <label>Total</label>
                    <span id="cart-checkout-total">{{ env('CURRENCY','RM') }}{{ number_format(0,2,'.','') }}</span>
                </div>
                <div class="col col-right">
                    <button class="btn btn-submit" id="btn-checkout" type="button">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const carts = @json($carts);
    var selected = [];

    function drop_cart(id){
        selected = selected.filter(item => item !== id); 
        for (let category in carts) {
            if (carts[category].items) {
                for (let i = 0; i < carts[category].items.length; i++) {
                    if (carts[category].items[i].id === id) {
                        carts[category].items.splice(i, 1);
                        break;
                    }
                }
            }
        }
    }

    function calculate_total(){
        let total_price = 0;
        let total_discount = 0;
        let total_price_after = 0;
        for (let category in carts) {
            if (carts[category].items) {
                if(carts[category].items.length > 0){
                    for (let i = 0; i < carts[category].items.length; i++) {
                        if ($.inArray(carts[category].items[i].id, selected) !== -1) {
                            var price = carts[category].items[i].price;
                            var price_after = price;
                            var discount = 0;
                            if( carts[category].items[i].discount &&  carts[category].items[i].discount > 0){
                                discount = (carts[category].items[i].price / 100) * carts[category].items[i].discount;
                                price_after = price - discount;
                            }
                            total_discount += discount * carts[category].items[i].quantity;
                            total_price +=  fixDecimals(price *  carts[category].items[i].quantity);
                            total_price_after +=  fixDecimals(price_after *  carts[category].items[i].quantity);
                        }
                    }
                }
                else{
                    console.log(`#${category}`);
                    $(`#${category}`).closest('.item').remove();
                    delete carts[category];
                }
            }
        }
        $('#cart-checkout-before').html("{{ env('CURRENCY','RM') }}"+ensureDecimals(fixDecimals(total_price)));
        $('#cart-checkout-discount').html("{{ env('CURRENCY','RM') }}"+total_discount.toFixed(2));
        $('#cart-checkout-total').html("{{ env('CURRENCY','RM') }}"+ensureDecimals(fixDecimals(total_price_after)));

        if(total_price == 0){
            $('#btn-checkout').prop('disabled', true);
        }
        else{
            $('#btn-checkout').prop('disabled', false);
        }
        
        if ($('#checkout-items').find('.item').length > 0) {
           $('#empty-cart').addClass('hide');
        } else {
           $('#empty-cart').removeClass('hide');
        }
    }

    function updateQuantity(id, quantity){
        showLoading();
        $.ajax({
            url: "{{ route('user.update_cart_quantity') }}",
            method: 'POST',
            data: { cart:id, quantity:quantity},
            headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}'},
            success: function(response) {
                let parent;
                if(response.success == true || response.action == "update"){
                    parent = $(`#item-${response.cart}`);
                    if(response.success != true){
                        setDefaultSwal('error','',response.message);
                    }

                    if(response.data.price_after != false && response.data.price_after > 0){
                        $(parent).find('.price-after').first().html("{{ env('CURRENCY','RM') }}"+response.data.price_after);
                        $(parent).find('.price-before').first().html("{{ env('CURRENCY','RM') }}"+response.data.price_before);
                    }
                    else{
                        $(parent).find('.price-after').first().html("{{ env('CURRENCY','RM') }}"+response.data.price_before);
                    }
                    $(parent).find('input[type="text"]').first().val(response.data.quantity);
                    for (let category in carts) {
                        if (carts[category].items) {
                            for (let i = 0; i < carts[category].items.length; i++) {
                                if (carts[category].items[i].id === response.cart) {
                                    carts[category].items[i].quantity = response.data.quantity;
                                    break;
                                }
                            }
                        }
                    }
                }
                else if(response.action == "delete"){
                    parent = $(`#item-${response.cart}`);
                    $(parent).addClass('out-of-stock').removeClass('active');
                    $(parent).find('.quantity').first().css('opacity',0).css('pointer-events', 'none');
                    $(parent).find('.price-before').first().remove();
                    $(parent).find('.price-after').html('Out of Stock');
                    $(parent).find('.check-item').prop('disabled', true).css('pointer-events', 'none');
                    setDefaultSwal('error','',response.message);
                    drop_cart(response.cart);
                }
                else{
                    setDefaultSwal('error','',response.message);
                }
                calculate_total();
            },
            error: function() {
                setDefaultSwal('error','', "There is something wrong, please try again.");
            },
            complete: function(){
                hideLoading();
            }
        });
    }

    $(document).ready(function(){
        $('.quantity input').on('change',function(){
            let quantity = $(this).val();
            let cart = $(this).closest('.sub-item').data('id');
            updateQuantity(cart, quantity);
        });

        $('.plus').on('click', function() {
            let parent = $(this).closest('.quantity');
            let cart = $(this).closest('.sub-item').data('id');
            let input = $(parent).find('input').first();
            $(input).val(parseInt($(input).val()) + 1);
            $(input).trigger('change');
        });

        $('.minus').on('click', function() {
            let parent = $(this).closest('.quantity');
            let cart = $(this).closest('.sub-item').data('id');
            let input = $(parent).find('input').first();
            if(parseInt($(input).val()) > 1){
                $(input).val(parseInt($(input).val()) - 1);
                $(input).trigger('change');
            }
            else{
                console.log(parseInt($(input).val()))
            }
        });

        $('.check-item').on('click',function() {
            let parent = $(this).closest('.sub-item');
            if($(parent).hasClass('out-of-stock')){
                return false;
            }
            let cart = $(parent).data('id');
            if(cart){
                const index = selected.indexOf(cart);
                if (index === -1) {
                    selected.push(cart);
                    console.log('Cart added:', cart);
                    $(parent).addClass('active');
                } else {
                    selected.splice(index, 1);
                    $(parent).removeClass('active');
                    console.log('Cart removed:', cart);
                }
            }
            calculate_total();
        });

        $('.drop-cart').on('click',function(){
            let cart = $(this).closest('.sub-item').data('id');
            showLoading();
            $.ajax({
                url: "{{ route('user.drop_cart') }}",
                method: 'POST',
                data: { cart:cart},
                headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}'},
                success: function(response) {
                    if(response.success == true){
                        let parent = $(`#item-${response.cart}`);
                        setDefaultSwal('success','',response.message);
                        $(parent).remove();
                        drop_cart(response.cart);
                        calculate_total();
                    }
                    else{
                        setDefaultSwal('error','',response.message);
                    }
                },
                error: function() {
                    setDefaultSwal('error','', "There is something wrong, please try again.");
                },
                complete: function(){
            
                    hideLoading();
                }
            });
        
        });

        calculate_total();

        $('#btn-checkout').on('click',function(){
            $(this).prop('disabled', true);
            showLoading();
            $.ajax({
                url: "{{ route('checkout.create_multiple') }}",
                method: 'POST',
                data: { items:selected },
                headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}'},
                success: function(response) {
                    if(response.success == true){
                        if(response.redirect){
                            window.location.href = response.redirect;
                        }
                        else{
                            setDefaultSwal('error','','There is something wrong, please try again.');
                        }
                        
                    }
                    else{
                        setDefaultSwal('error','',response.message);
                    }
                },
                error: function() {
                    setDefaultSwal('error','', "There is something wrong, please try again.");
                },
                complete: function(){
                    hideLoading();
                }
            });
        });
    });
</script>
@endif
@endsection



