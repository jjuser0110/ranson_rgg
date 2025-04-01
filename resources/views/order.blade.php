@extends('layout.app')
@section('head_style')
<link href="{{ asset('css/profile.css') }}" rel="stylesheet"/>
<style>
    #order-options {
        display: flex;
        width: 100%;
        justify-content: space-around;
        background: #f1f1f1;
        border-radius: var(--radius);
        padding: 8px;
        overflow-y: auto
    }

    #order-options .option{
        display: flex;
        flex: 0 0 25%;
        padding: 8px;
        background: #f1f1f1;
        justify-content: center;
        font-weight: 700;
        color: #6f6f6f;
        cursor: pointer

    }

    #order-options .option.active{
        background: var(--clr-primary);
        color: white;
        border-radius: var(--radius);
    }

    .order{
        display: flex;
        width: calc(100% - 10px);
        background: var(--bg-light);
        border-radius: var(--radius);
        flex-direction: column;
        margin: 5px;
        padding: 15px;
        margin-bottom: 15px;
    }

    .order .overview{
        width: 100%;
        display: flex;
        justify-content: space-between;
        border-bottom: 2px solid #e9e9e9;
        padding-bottom: 10px;
    }

    .order-items{
        display: flex;
        flex-direction: column;
        padding: 10px;
        padding-bottom: 0;
    }

    .order-items .product-name{
        color: var(--clr-txt-primary);
        font-weight: 700;
        margin-bottom: 5px;
        font-size: 12px
    }

    .order-items img{
        width: 50px;
        height: 50px;
        border-radius: var(--radius)
    }

    .order-items .item{
        background: #ffffff;
        display: flex;
        justify-content: space-between;
        padding: 10px;
        margin-bottom: 5px;
        border: 1px solid #e6e6e6;
        border-radius: var(--radius);
        width: 100%
    }

    .order-items .item .item-info{
        display: flex;
        gap: 10px;
        align-items: center;
    }

    .order-id{
        color: #3c3c3c;
        margin-bottom: 5px;
    }

    .order-id span{
        color: var(--clr-txt-primary);
        font-weight: 700;
    }

    .order-date{
        font-size: 12px;
        color: #3c3c3c
    }

    .order-date{
        font-size: 12px;
        color: #3c3c3c
    }

    .order .price{
        display: flex;
        gap: 5px;
        margin-bottom: 5px
    }

    .order .price .before-price{
        color: #3c3c3c;
        font-size: 15px;
        text-decoration: line-through
    }
    
    .order .price .after-price{
        font-weight: 700
    }

    .order .status{
        text-align: right;
        text-transform: capitalize;
        font-weight: 700;
        font-size: 14px;
        line-height: 1;
    }

    .order .status.refunded{
        color: blue
    }

    .order .status.completed{
        color: green
    }

    .order .status.failed{
        color: red
    }

    .order .status.pending{
        color: orange
    }

    .order .item .item-price{
        width: fit-content
    }
    
    .order .item .item-name{
        font-weight: 700;
        font-size: 14px
    }

    .order .item .item-price{
        gap: 14px;
        display: flex;
        align-items: center;
    }

    .order .item .item-price > div{
        gap: 3px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .order .item .item-price .price{
        font-size: 14px;
        font-weight: 600;
        margin: 0;
        line-height: 1
    }
    
    .order .item .item-price .discount{
        font-size: 12px;
        color: var(--clr-accent)
    }

    .order .item .quantity{
        width: 3ch;
        font-weight: 700;
        font-size: 14px;
        line-height: 1
    }
        
    .custom-pagination{
        display: flex;
        justify-content: center;
        gap: 5px;
    }

       

    .custom-pagination a{
        border: 1px solid #f1f1f1;
        width: 24px;
        height: 24px;
        background: #f1f1f1;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 8px;
        text-decoration: none;
        color: #3c3c3c
    }

    .custom-pagination a:hover{
        color: var(--clr-hover)
    }

    .custom-pagination a.active{
        background: var(--clr-primary);
        color: white
    }


    @media only screen and (max-width:768px){
        .order-id {
            font-size: 14px;
        }

        .order .price .before-price {
            font-size: 14px;
            text-align: right;
        }

        .order .price .after-price{
            font-size: 14px;
            text-align: right;
        }

        .order .status {
            font-size: 12px;
        }

        .order-items img {
            width: 40px;
            height: 40px;
        }

        .order-items .item {
            flex-wrap: wrap;
        }

        .order .item .item-name {
            font-size: 14px;
        }

        .order .item .item-price .discount {
            font-size: 12px;
        }

        .order .item .item-price .price {
            font-size: 14px;
        }

        .order .item .quantity {
            font-size: 14px;
        }
    }


    @media only screen and (max-width:500px){
        .order{
            padding: 10px;
        }

        .order-id {
            font-size: 12px;
        }

        .order .price .before-price {
            font-size: 12px;
            text-align: right;
        }

        .order .price .after-price{
            font-size: 12px;
            text-align: right;
        }

        .order .status {
            font-size: 12px;
        }

        .order-items{
            padding: 5px;
        }

        .order-items img {
            width: 40px;
            height: 40px;
        }

        .order-items .item {
            flex-wrap: wrap;
        }

        .order .item .item-name {
            font-size: 12px;
        }

        .order-items .item .item-info {
            width: 100%;
        }

        .order .item .item-price {
            justify-content: space-between;
            width: 100%;
            margin-top: 10px;
        }

        .order .item .item-price > div {
            gap: 0;
            align-items: flex-start;
        }

        .order .item .item-price .discount {
            font-size: 10px;
        }

        .order .item .item-price .price {
            font-size: 12px;
        }
        .order .item .quantity {
            font-size: 12px;
        }
    }
</style>
@endsection

@section('content')
<section id="profile-wrapper">
    <div class="col col-left">
        @include('layout.profile_menu')
    </div>
    <div class="col col-right">
        <h2 class="title">Order History</h2>
        <hr>
        <div id="order-options">
            <div class="option {{ $status == 'pending' ? 'active' : '' }}" data-status='pending'>Pending</div>
            <div class="option {{ $status == 'completed' ? 'active' : '' }}" data-status='completed'>Completed</div>
            <div class="option {{ $status == 'failed' ? 'active' : '' }}" data-status='failed'>Failed</div>
            <div class="option {{ $status == 'refunded' ? 'active' : '' }}" data-status='refunded'>Refunded</div>
        </div>
        <div id="orders">
            @if(count($orders) > 0)
            @foreach($orders as $order)
            <div class="order">
                <div class="overview">
                    <div class="left">
                        <div class="order-id">Order ID: <span>{{ $order->code }} </span></div>
                        <div class="order-date">{{ $order->updated_at }}</div>
                    </div>
                    <div class="right">
                        <div class="price">
                            @if($order->amount_after_discount != $order->amount_before_discount)
                            <div class="before-price">{{ env('CURRENCY', 'RM')}} {{ number_format($order->amount_before_discount, 2, '.', '') }}</div>
                            @endif
                            <div class="after-price">{{ env('CURRENCY', 'RM')}} {{ number_format($order->amount_after_discount, 2, '.', '') }}</div>
                          
                        </div>
                        <div class="status {{ $order->status }}">
                            {{ $order->status }}
                        </div>
                    </div>
                </div>
                <div class="order-items">
                @php $item_group = [] @endphp
                @foreach($order->items as $item)
                    @if(!in_array($item->product_name, $item_group))
                    @php array_push($item_group, $item->product_name) @endphp
                    <div class="product-name">{{ $item->product_name}}</div>
                    @endif
                    <div class="item">
                        <div class="item-info">
                            <img src="{{ asset('img/products/'.$item->image) }}">
                            <div class="item-name">
                               {{ $item->variant_name }}
                            </div>
                        </div>
                        <div class="item-price">
                            <div>
                                <div class="price">{{ env('CURRENCY', 'RM') }}{{ number_format($item->amount , 2, '.', '') }}</div>
                                @if($item->discount && $item->discount > 0)
                                <div class="discount">{{ $item->discount }}% discount</div>
                                @endif
                            </div>
                            <div class="quantity">x{{ $item->quantity }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>  
            </div>
            @endforeach
            @else
            <div style="padding: 15px;text-align: center;">No data found</div>
            @endif
        </div>
        @php
        $max = 5;
        $startPage = max(1, $page - 2);
        $endPage = min($max_page, $page + 2);
        if ($endPage - $startPage < $max - 1) {
            if ($startPage == 1) {
                $endPage = min($max_page, $startPage + $max - 1);
            } else {
                $startPage = max(1, $endPage - $max + 1);
            }
        }
        @endphp

        <div class="custom-pagination">
    
            @if($page > 1)
            <a href="{{ route('order', ['status' => $status, 'page' => $page - 1]) }}"><</a>
            @endif

            @for ($i = $startPage; $i <= $endPage; $i++)
            <a class="{{ $page == $i ? 'active' : '' }}" href="{{ route('order', ['status' => $status, 'page' => $i]) }}"
            class="{{ $i == $page ? 'active' : '' }}">
                {{ $i }}
            </a>
            @endfor

            @if($page < $max_page)
            <a href="{{ route('order', ['status' => $status, 'page' => $page + 1]) }}">></a>
            @endif
        </div> 
    </div>
</section>
<script>
    $(document).ready(function(){
        $('#link-orders').addClass('active');

        $('#order-options .option').on('click', function(){
            window.location.href="{{ route('order', ['status'=>'__STATUS__']) }}".replace('__STATUS__', $(this).data('status') ?? 'pending');
        });
    });
</script>
@endsection



