@extends('layout.app')
@section('head_style')
<style>
    section .row{
        display: flex;
        max-width: 1024px;
        margin: 100px auto;
    }

    section .row .col{
        width: 50%;
    }

    section .row .col img{
        width: 100%;
        max-width: 500px;
    }

    section .row.dou{
        align-items: center;
    }

    section .row.dou .col{
        align-items: center;
        padding: 15px;
    }

    section .row.dou .col h2{
        margin-bottom: 15px;
    }

    #goals{
        flex-direction: column;
    }

    #goals h2{
        width: 100%; 
        margin-bottom: 15px;
        text-align: center;
    }

    #tri .col{
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    #tri .item{
        flex: 0 0 calc(33.333% - 20px);
        margin: 10px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        align-items: center;
        padding: 25px;
        border: 1px solid #f1f1f1;
        border-radius: var(--radius);
        transform: scale(0.98);
        transition: 0.3s
    }

    #tri .item:hover{
        background: var(--clr-primary);
        transform: scale(1);
    }

    #tri .item:hover h4, #tri .item:hover p {
        color: white;
    }

    #tri .item img{
        width: 60%;
        max-width: 100px;
    }

    #tri .item p{
        text-align: center
    }

    @media only screen and (max-width: 768px){
        section .row{
            flex-wrap: wrap;
            margin: 50px auto;
        }
    
        section .row .col {
            width: 100%;
        }

        section .row.dou .col img{
            width: 80%;
            margin: 0 10%;
        }

        section .row.dou .col h2{
            margin-bottom: 10px;
        }

        section .row.dou .col h2, section .row.dou .col p{
            text-align: center;
        }

        section .row.reverse{
            flex-direction: column-reverse;
        }

        #tri .item{
            flex: 0 0 100%;
            margin: 15px 0;
        }

        #goals h2{
            margin-bottom: 10px;
        }
    }
</style>
@endsection
@section('content')
<!-- ABOUT US -->
<section>
    <div class="row dou">
        <div class="col"><img style="width:80%" src="{{ asset('img/about_us.png') }}"/></div>
        <div class="col">
            <h2>About Super Recharge</h2>
            <p>Super Recharge is your go-to platform for online game credits and digital games. Specializing in providing fast and secure top-ups, we offer a wide range of gaming credits including Steam, Garena, and many other popular gaming platforms. Our mission is to make it easier for gamers to access the credits they need to enjoy their favorite games without any hassle.<br>

Whether you're purchasing Steam Wallet credits, Garena top-ups, or looking to buy a new game, Super Recharge ensures that every transaction is seamless, secure, and instant. We also offer a wide variety of games, allowing you to conveniently add new titles to your collection with just a few clicks.<br>

Founded by gaming enthusiasts, Super Recharge is committed to providing the gaming community with the most reliable and innovative digital solutions. Our platform is designed to cater to all your gaming needs, making it easier than ever to enhance your gaming experience.<br>

Join Super Recharge today and recharge your gaming adventure with ease!</p>
        </div>
    </div>

    <div class="row dou reverse">
        <div class="col">
            <h2>Service we offer</h2>
            <p>We offer instant top-ups for popular gaming platforms like Steam and Garena, digital game purchases, in-game items and accessories, as well as game gift cards for added convenience and flexibility.</p>
        </div>
        <div class="col"><img src="{{ asset('img/services.jpg') }}"/></div>
    </div>

    <div class="row" id="goals">
        <h2> Our Goals</h2>
        <div id="tri" >
            <div class="col">
                <div class="item">
                    <img src="{{ asset('img/empower.png') }}" />
                    <h4>To Provide Seamless Gaming Transactions</h4>
                    <p>Our top priority is to ensure that every top-up, game purchase, and transaction on our platform is smooth, fast, and secure. We are committed to making your gaming experience more convenient and enjoyable.</p>
                </div>
                <div class="item">
                    <img src="{{ asset('img/trust.png') }}" />
                    <h4>To Expand Our Game Offerings</h4>
                    <p>We aim to continually expand our selection of games and credits to provide you with a broad range of options. Whether you’re into mainstream games or indie titles, we ensure that you have access to the best content.</p>
                </div>
                <div class="item">
                    <img src="{{ asset('img/innovate.png') }}" />
                    <h4>To Build a Strong Gaming Community</h4>
                    <p>We strive to create a platform where gamers can come together, share experiences, and find solutions for all their gaming needs. By offering great services and engaging with the gaming community, we aim to foster lasting relationships with our users.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection