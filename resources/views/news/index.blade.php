@extends('layout.app')
@section('head_style')
<style>
    .news{
        display: flex;
        flex-wrap: wrap;
    }

    .news .box{
        margin: 5px;
        flex: 0 0 calc(33.333% - 10px);
        border: 2px solid #f1f1f1;
        box-shadow: 0 0 0 rgba(255, 202, 138, 0.5);
        padding: 0;
        transform: scale(0.98);
        transition: 0.3s;
        background: #f1f1f1;
    }

    .news .box:hover{
        transform: scale(1);
        background: white;
    }

    .news .box:hover h4{
        color: var(--clr-primary)
    }

    .news .box img{
        width: 100%;
        border-radius: var(--radius) var(--radius) 0 0 ;
    }

    .news .box h4{
        padding: 5px 10px;
        font-size: 14px;
        color: #4e4e4e
    }

    .news .box > div{
        height: 48px
    }

    @media only screen and (max-width:768px){
        .news .box{
            flex: 0 0 calc(50% - 10px);
        }
    }

    @media only screen and (max-width:500px){
        .news .box{
            flex: 0 0 100%;
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
<section>
   
    <div class="row">
        <h2 class="page-title">News</h2>
    </div>
    <div class="row news">
        <div class="box" onclick="window.location.href='{{ route('news.single', ['news'=>'genshin_impact_5_4']) }}'">
            <img src="{{ asset('img/news/genshin-impact-5.4/cover.png') }}"/>
            <div>
                <h4>Genshin Impact "Moonlight Amidst Dreams" Update Highlights</h4>
            </div>
        </div>

        <div class="box" onclick="window.location.href='{{ route('news.single', ['news'=>'wildest_fortnite_collaboration_skins']) }}'">
            <img src="{{ asset('img/news/wildest-fortnite-collaboration-skins/cover.png') }}"/>
            <div>
                <h4>Wildest Fortnite Collaboration Skins</h4>
            </div>
        </div>

        

        <div class="box" onclick="window.location.href='{{ route('news.single', ['news'=>'star_rail_3_0']) }}'">
            <img src="{{ asset('img/news/star-rail-3.0/cover.png') }}"/>
            <div>
                <h4>Honkai: Star Rail 3.0 – New Titans, Heroes & Epic Adventures Await!</h4>
            </div>
        </div>

        <div class="box" onclick="window.location.href='{{ route('news.single', ['news'=>'fnatic_onic_emerges_as_m6_reigning_champions']) }}'">
            <img src="{{ asset('img/news/fnatic-onic-emerges-as-m6-reigning-champions/cover.png') }}"/>
            <div>
                <h4>Fnatic ONIC Emerges As M6’s Reigning Champions</h4>
            </div>
        </div>
    </div>
</section>
@endif
@endsection



