@extends('layout.app')
@section('head_style')
<style>
    .promotion{
        display: flex;
        flex-wrap: wrap
    }

    .promotion .box{
        width: 50%;
        border: 2px solid #f1f1f1;
        margin: 0 0 15px;
        box-shadow: 0 0 0 rgba(255, 202, 138, 0.5);
        padding: 0;
        transform: scale(0.98);
        transition: 0.3s;
        display: flex;
        background: linear-gradient(360deg, #e8e8e8, #ffffff);
    }

    .promotion .box .info{
        padding: 15px;
    }

    .promotion .box:hover{
        transform: scale(1);
    }

    .promotion .box:hover h4{
        color: var(--clr-primary)
    }

    .promotion .box img{
        height: 170px;
        border-radius: var(--radius)  0 0 var(--radius) ;
    }

    .promotion .box h4{
        font-size: 16px;
        color: #4e4e4e;
        margin-bottom: 10px;
        line-height: 1;
    }

    .promotion .box p{
        font-size: 14px;
        color: #181818;
        margin-bottom: 15px;
        overflow: hidden;
        max-height: 55px;
    }

    .promotion .tags{
        display: flex;
        flex-wrap: wrap;
        gap: 5px;
    }

    .promotion .tags div{
        font-size: 10px;
        background: purple;
        color: white;
        padding: 2px 6px;
        border-radius: 2px;
    }

    @media only screen and (max-width:1199px){
        .promotion .box{
            width: 100%
        }
    }

    @media only screen and (max-width:767px){
        .promotion .box{
            flex-direction: column;
        
        }

        .promotion .box img{
            width: 100%;
            height: auto;
            border-radius: var(--radius) var(--radius) 0 0
        
        }
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
        <h2 class="page-title">Promotions</h2>
    </div>

    <div class="row promotion">
        <div class="box" onclick="window.location.href='{{ route('product.view', ['product'=>'mycard-my']) }}'">
            <img src="{{ asset('img/promotions/steam.png') }}"/>
            <div class="info">
                <h4>Steam Credit (MY) 10% Discount!</h4>
                <p>Enjoy 10% discount from purchase Steam Credit (MY). Place your order now before stock out! </p>
                <div class="tags">
                    <div>Steam</div>
                    <div>Steam Credit</div>
                    <div>Discount</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@endsection



