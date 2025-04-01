@extends('layout.app')
@section('head_style')
<style>

    .row{
        max-width: 1024px !important;
    }
    .upper{
        display: flex;
        justify-content: center;
        position: relative;
        flex-direction: column;
        align-items: center;
    }
    .upper img{
        width:  100%;
        max-width: 1200px;
        margin: auto;
    }

    .upper h1{
        text-align: center;
        padding: 15px;
        margin-bottom: 25px;
    }

    .block{
        margin-bottom: 50px;
        width: 75%
    }

    .block .inner-block img{
        width: 100%;
        margin-bottom: 15px
    }

    .block .inner-block h2{
        margin-bottom: 15px
    }

    .block .inner-block p{
        margin-bottom: 15px;
        line-height: 1.5
    }

    .link-return{
        display: flex;
        gap: 5px;
        align-items: center;
        font-weight: 600;
        color: black;
        line-height: 1
    }

    .link-return{
        display: flex;
        gap: 5px;
        align-items: center;
        font-weight: 600;
        color: var(--clr-txt-primary);
    }

    .link-return svg{
        fill: var(--clr-txt-primary)
    }

    .link-return:hover {
        color: var(--clr-primary);
    }

    .link-return:hover svg{
        fill: var(--clr-primary);
    }

    @media only screen and (max-width:767px){
        .block{
            width: 90%
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
   
    <div  style="padding:25px 0" class="row">
        <a class="link-return" href="{{ route('news.index') }}">
        <svg viewBox="0 0 448 512" stroke="1" width="14" height="14"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
            Back to News
        </a>
    </div>

    <div class="row" id="main">
        @include('source.news.'.$page)
    </div>
</section>
<script>
  
</script>
@endif
@endsection



