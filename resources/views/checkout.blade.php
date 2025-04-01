@extends('layout.app')
@section('head_style')
<link href="{{ asset('css/checkout.css') }}" rel="stylesheet">
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
        <h2 class="page-title">Checkout</h2>
    </div>

    <div class="row" >
        <!-- ITEMS-->
        <div class="col" id="checkout-items-wrapper">
            <div id="checkout-items" class="box">
                <h2 class="title">All Items</h2>
                <hr>
                @foreach($products as $product)
                <div class="item">
                    <h2 class="name">{{ $product['name'] }}</h2>
                    @foreach($product['items'] as $item)
                    <div class="sub-item">
                        <div class="col-left">
                            <img src="{{ asset('img/products/'.$item['image']) }}"/>
                            <div class="info">
                                <div class="name">{{ $item['variant_name'] }}</div>
                                <span>{{ $item['discount'] > 0 ? "Discount ".$item['discount']."%" : '' }}</span>
                            </div>
                        </div>
                        <div class="quantity">
                            x{{ $item['quantity'] }}
                        </div>
                        <div class="price">{{ env('CURRENCY','RM') }}{{ number_format($item['amount'],2,'.','') }}</div>
                    </div>
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>

        <!-- PAYMENT -->
        <div class="col" id="checkout-payment-wrapper">
            <!-- PAYMENT INFO -->
            <div class="box" id="payment-wrapper">
                <h2 class="title">Payment Details</h2>
                <hr>
                <div id="payment-info">
                    <div class="row total-before">
                        <label>Total Before Discounts</label>
                        <span>{{ env('CURRENCY','RM') }}{{ number_format($order->amount_before_discount,2,'.','') }}</span>
                    </div>

                    <div class="row total-after">
                        <label>Discount</label>
                        <span class="discount">-{{ env('CURRENCY','RM') }}{{ number_format($order->discount_amount,2,'.','') }}</span>
                    </div>
                </div>
            </div>

            <!-- PAYMENT FORM -->
            <div class="box" id="payment-form">
                <div class="col col-left">
                    <label>Total</label>
                    <span>{{ env('CURRENCY','RM') }}{{ number_format($order->amount_after_discount,2,'.','') }}</span>
                </div>
                <div class="col col-right">
                    <button class="btn btn-submit" type="button" >Pay</button>
                </div>
            </div>
        </div>
    </div>
</section>
<script>

</script>
@endif
@endsection



