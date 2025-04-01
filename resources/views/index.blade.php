@extends('layout.app')
@section('content')
<section class="product-section bg-white">
    <div class='row'>
        <h2>Top Sales</h2>
        <div class="products">
            @foreach($products as $product)
            @if($product->label == 'best')
            <div class="product" onclick="window.location.href='{{ route('product.view', ['product' => $product->short_name]) }}'">
                <div class="image-wrapper">
                    <img style="height:150px" src="{{ asset('img/products/'.$product->image) }}"/>
                </div>
                <h4 class="product-name">{{ $product->name }}</h4>
                <div class="product-options">
                    <div class="left"></div>
                    <div class="right">
                        <div class="price">From RM {{ number_format($product->lowest_price, 2, '.', '') }}</div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>

<section class="product-section bg-grey" >
    <div class="row">
        <h2>Trending Products</h2>
        <div class="products">
            @foreach($products as $product)
            @if($product->label == 'trend')
            <div class="product" onclick="window.location.href='{{ route('product.view', ['product' => $product->short_name]) }}'">
                <div class="image-wrapper">
                    <img style="height:150px" src="{{ asset('img/products/'.$product->image) }}"/>
                </div>
                <h4 class="product-name">{{ $product->name }}</h4>
                <div class="product-options">
                    <div class="left"></div>
                    <div class="right">
                        <div class="price">From RM {{ number_format($product->lowest_price, 2, '.', '') }}</div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>
@endsection



