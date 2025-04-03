<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Models\ProductVariant;


class ProductVariantSeeder extends Seeder
{

    public function run()
    {
        ProductVariant::truncate();

        $variants = [
            [
                'product_id'=>1,
                'name'=>'65 Shells',
                'short_name'=>'65-shells',
                'image'=>'garena_shell_square.png',
                'sku'=>'GRH001-01',
                'description'=>null,
                'price'=>5.40,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],
            [
                'product_id'=>1,
                'name'=>'130 Shells',
                'short_name'=>'130-shells',
                'image'=>'garena_shell_square.png',
                'sku'=>'GRH001-02',
                'description'=>null,
                'price'=>10.80,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],
            [
                'product_id'=>1,
                'name'=>'260 Shells',
                'short_name'=>'260-shells',
                'image'=>'garena_shell_square.png',
                'sku'=>'GRH001-03',
                'price'=>21.60,
                'discount'=>0,
                'tag'=>null,
                'description'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],
            [
                'product_id'=>1,
                'name'=>'390 Shells',
                'short_name'=>'390-shells',
                'image'=>'garena_shell_square.png',
                'sku'=>'GRH001-04',
                'price'=>32.40,
                'discount'=>2,
                'tag'=>null,
                'description'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],
            [
                'product_id'=>1,
                'name'=>'650 Shells',
                'short_name'=>'650-shells',
                'image'=>'garena_shell_square.png',
                'sku'=>'GRH001-05',
                'price'=>54.00,
                'discount'=>2,
                'tag'=>null,
                'description'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],
            [
                'product_id'=>1,
                'name'=>'1300 Shells',
                'short_name'=>'1300-shells',
                'image'=>'garena_shell_square.png',
                'sku'=>'GRH001-06',
                'price'=>108.00,
                'discount'=>2,
                'tag'=>null,
                'description'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],
            [
                'product_id'=>1,
                'name'=>'2600 Shells',
                'short_name'=>'2600-shells',
                'image'=>'garena_shell_square.png',
                'sku'=>'GRH001-07',
                'price'=>216.00,
                'discount'=>2,
                'tag'=>null,
                'description'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>2,
                'name'=>'6+1Big Cat Coins',
                'short_name'=>'big-cat-099',
                'image'=>'conquer_square.png',
                'sku'=>'GRH002-01',
                'description'=>null,
                'price'=>4.90,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>0,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>2,
                'name'=>'12+2Big Cat Coins',
                'short_name'=>'big-cat-199',
                'image'=>'conquer_square.png',
                'sku'=>'GRH002-02',
                'description'=>null,
                'price'=>9.50,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>0,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>2,
                'name'=>'18+3Big Cat Coins',
                'short_name'=>'big-cat-499',
                'image'=>'conquer_square.png',
                'sku'=>'GRH002-03',
                'description'=>null,
                'price'=>13.50,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>0,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>2,
                'name'=>'24+4Big Cat Coins',
                'short_name'=>'big-cat-799',
                'image'=>'conquer_square.png',
                'sku'=>'GRH002-04',
                'description'=>null,
                'price'=>18.50,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>2,
                'name'=>'30+6Big Cat Coins',
                'short_name'=>'big-cat-1599',
                'image'=>'conquer_square.png',
                'sku'=>'GRH002-05',
                'description'=>null,
                'price'=>23.50,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>2,
                'name'=>'60+12Big Cat Coins',
                'short_name'=>'big-cat-2999',
                'image'=>'conquer_square.png',
                'sku'=>'GRH002-06',
                'description'=>null,
                'price'=>44.90,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>2,
                'name'=>'120+25Big Cat Coins',
                'short_name'=>'big-cat-5999',
                'image'=>'conquer_square.png',
                'sku'=>'GRH002-07',
                'description'=>null,
                'price'=>90.90,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],


            [
                'product_id'=>3,
                'name'=>'Honor of Kings 16 Tokens',
                'short_name'=>'hok-16',
                'image'=>'honor_of_kings_square.png',
                'sku'=>'GRH003-01',
                'description'=>null,
                'price'=>1.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],
            [
                'product_id'=>3,
                'name'=>'Honor of Kings 80 Tokens',
                'short_name'=>'hok-80',
                'image'=>'honor_of_kings_square.png',
                'sku'=>'GRH003-02',
                'description'=>null,
                'price'=>5.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],
            [
                'product_id'=>3,
                'name'=>'Honor of Kings 240 Tokens',
                'short_name'=>'hok-240',
                'image'=>'honor_of_kings_square.png',
                'sku'=>'GRH003-03',
                'description'=>null,
                'price'=>15.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],
            [
                'product_id'=>3,
                'name'=>'Honor of Kings 400 Tokens',
                'short_name'=>'hok-400',
                'image'=>'honor_of_kings_square.png',
                'sku'=>'GRH003-04',
                'description'=>null,
                'price'=>25.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],
            [
                'product_id'=>3,
                'name'=>'Honor of Kings 560 Tokens',
                'short_name'=>'hok-560',
                'image'=>'honor_of_kings_square.png',
                'sku'=>'GRH003-05',
                'description'=>null,
                'price'=>30.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],
            [
                'product_id'=>3,
                'name'=>'Honor of Kings 830 Tokens',
                'short_name'=>'hok-830',
                'image'=>'honor_of_kings_square.png',
                'sku'=>'GRH003-06',
                'description'=>null,
                'price'=>45.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],
            [
                'product_id'=>3,
                'name'=>'Honor of Kings 1245 Tokens',
                'short_name'=>'hok-1245',
                'image'=>'honor_of_kings_square.png',
                'sku'=>'GRH003-07',
                'description'=>null,
                'price'=>65.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],
            [
                'product_id'=>3,
                'name'=>'Honor of Kings 2508 Tokens',
                'short_name'=>'hok-2508',
                'image'=>'honor_of_kings_square.png',
                'sku'=>'GRH003-08',
                'description'=>null,
                'price'=>130.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>3,
                'name'=>'Honor of Kings 4180 Tokens',
                'short_name'=>'hok-4180',
                'image'=>'honor_of_kings_square.png',
                'sku'=>'GRH003-09',
                'description'=>null,
                'price'=>220.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>3,
                'name'=>'Honor of Kings 8360 Tokens',
                'short_name'=>'hok-8360',
                'image'=>'honor_of_kings_square.png',
                'sku'=>'GRH003-10',
                'description'=>null,
                'price'=> 450.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],


            [
                'product_id'=>4,
                'name'=>'Mcash 99',
                'short_name'=>'mcash-99',
                'image'=>'mobile_legends_adventure_square.png',
                'sku'=>'GRH004-01',
                'description'=>null,
                'price'=> 4.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>4,
                'name'=>'Mcash 199',
                'short_name'=>'mcash-199',
                'image'=>'mobile_legends_adventure_square.png',
                'sku'=>'GRH004-02',
                'description'=>null,
                'price'=> 8.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>4,
                'name'=>'Mcash 299',
                'short_name'=>'mcash-299',
                'image'=>'mobile_legends_adventure_square.png',
                'sku'=>'GRH004-03',
                'description'=>null,
                'price'=> 12.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>4,
                'name'=>'Mcash 499',
                'short_name'=>'mcash-499',
                'image'=>'mobile_legends_adventure_square.png',
                'sku'=>'GRH004-04',
                'description'=>null,
                'price'=> 20.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>4,
                'name'=>'Mcash 699',
                'short_name'=>'mcash-699',
                'image'=>'mobile_legends_adventure_square.png',
                'sku'=>'GRH004-05',
                'description'=>null,
                'price'=> 30.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>5,
                'name'=>'Steam Wallet Code RM5',
                'short_name'=>'steam-wallet-5',
                'image'=>'steam_wallet_square.png',
                'sku'=>'GRH005-01',
                'description'=>null,
                'price'=> 5.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>5,
                'name'=>'Steam Wallet Code RM10',
                'short_name'=>'steam-wallet-10',
                'image'=>'steam_wallet_square.png',
                'sku'=>'GRH005-02',
                'description'=>null,
                'price'=> 10.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>5,
                'name'=>'Steam Wallet Code RM20',
                'short_name'=>'steam-wallet-20',
                'image'=>'steam_wallet_square.png',
                'sku'=>'GRH005-03',
                'description'=>null,
                'price'=> 20.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>5,
                'name'=>'Steam Wallet Code RM50',
                'short_name'=>'steam-wallet-50',
                'image'=>'steam_wallet_square.png',
                'sku'=>'GRH005-04',
                'description'=>null,
                'price'=> 50.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>5,
                'name'=>'Steam Wallet Code RM100',
                'short_name'=>'steam-wallet-100',
                'image'=>'steam_wallet_square.png',
                'sku'=>'GRH005-05',
                'description'=>null,
                'price'=> 100.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>5,
                'name'=>'Steam Wallet Code RM200',
                'short_name'=>'steam-wallet-200',
                'image'=>'steam_wallet_square.png',
                'sku'=>'GRH005-06',
                'description'=>null,
                'price'=> 200.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>6,
                'name'=>'Razer Gold RM5',
                'short_name'=>'razer-gold-5',
                'image'=>'razer_gold_square.png',
                'sku'=>'GRH006-01',
                'description'=>null,
                'price'=> 5.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>6,
                'name'=>'Razer Gold RM10',
                'short_name'=>'razer-gold-10',
                'image'=>'razer_gold_square.png',
                'sku'=>'GRH006-02',
                'description'=>null,
                'price'=> 10.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>6,
                'name'=>'Razer Gold RM20',
                'short_name'=>'razer-gold-20',
                'image'=>'razer_gold_square.png',
                'sku'=>'GRH006-03',
                'description'=>null,
                'price'=> 20.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>6,
                'name'=>'Razer Gold RM30',
                'short_name'=>'razer-gold-30',
                'image'=>'razer_gold_square.png',
                'sku'=>'GRH006-04',
                'description'=>null,
                'price'=> 30.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>6,
                'name'=>'Razer Gold RM40',
                'short_name'=>'razer-gold-40',
                'image'=>'razer_gold_square.png',
                'sku'=>'GRH006-05',
                'description'=>null,
                'price'=> 40.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>6,
                'name'=>'Razer Gold RM50',
                'short_name'=>'razer-gold-50',
                'image'=>'razer_gold_square.png',
                'sku'=>'GRH006-06',
                'description'=>null,
                'price'=> 50.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>6,
                'name'=>'Razer Gold RM100',
                'short_name'=>'razer-gold-100',
                'image'=>'razer_gold_square.png',
                'sku'=>'GRH006-07',
                'description'=>null,
                'price'=> 100.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>6,
                'name'=>'Razer Gold RM200',
                'short_name'=>'razer-gold-200',
                'image'=>'razer_gold_square.png',
                'sku'=>'GRH006-08',
                'description'=>null,
                'price'=> 200.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>6,
                'name'=>'Razer Gold RM300',
                'short_name'=>'razer-gold-300',
                'image'=>'razer_gold_square.png',
                'sku'=>'GRH006-09',
                'description'=>null,
                'price'=> 300.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>6,
                'name'=>'Razer Gold RM500',
                'short_name'=>'razer-gold-500',
                'image'=>'razer_gold_square.png',
                'sku'=>'GRH006-10',
                'description'=>null,
                'price'=> 500.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>7,
                'name'=>'Gift Card Japan 500 Yen',
                'short_name'=>'nintendo-500',
                'image'=>'nintendo_ecard_square.png',
                'sku'=>'GRH007-01',
                'description'=>null,
                'price'=> 17.50,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>7,
                'name'=>'Gift Card Japan 1000 Yen',
                'short_name'=>'nintendo-1000',
                'image'=>'nintendo_ecard_square.png',
                'sku'=>'GRH007-02',
                'description'=>null,
                'price'=> 35.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>7,
                'name'=>'Gift Card Japan 2000 Yen',
                'short_name'=>'nintendo-2000',
                'image'=>'nintendo_ecard_square.png',
                'sku'=>'GRH007-03',
                'description'=>null,
                'price'=> 70.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],


            [
                'product_id'=>7,
                'name'=>'Gift Card Japan 3000 Yen',
                'short_name'=>'nintendo-3000',
                'image'=>'nintendo_ecard_square.png',
                'sku'=>'GRH007-04',
                'description'=>null,
                'price'=> 105.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],


            [
                'product_id'=>7,
                'name'=>'Gift Card Japan 5000 Yen',
                'short_name'=>'nintendo-5000',
                'image'=>'nintendo_ecard_square.png',
                'sku'=>'GRH007-05',
                'description'=>null,
                'price'=> 175.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],


            [
                'product_id'=>7,
                'name'=>'Gift Card Japan 9000 Yen',
                'short_name'=>'nintendo-9000',
                'image'=>'nintendo_ecard_square.png',
                'sku'=>'GRH007-06',
                'description'=>null,
                'price'=> 315.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>8,
                'name'=>'Gift Card MYR10',
                'short_name'=>'gift-card-myr10',
                'image'=>'google_gift_card_square.png',
                'sku'=>'GRH008-01',
                'description'=>null,
                'price'=> 10.50,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],


            [
                'product_id'=>8,
                'name'=>'Gift Card MYR20',
                'short_name'=>'gift-card-myr20',
                'image'=>'google_gift_card_square.png',
                'sku'=>'GRH008-02',
                'description'=>null,
                'price'=> 20.50,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>8,
                'name'=>'Gift Card MYR50',
                'short_name'=>'gift-card-myr50',
                'image'=>'google_gift_card_square.png',
                'sku'=>'GRH008-03',
                'description'=>null,
                'price'=> 50.50,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>8,
                'name'=>'Gift Card MYR100',
                'short_name'=>'gift-card-myr100',
                'image'=>'google_gift_card_square.png',
                'sku'=>'GRH008-04',
                'description'=>null,
                'price'=> 100.50,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>8,
                'name'=>'Gift Card MYR200',
                'short_name'=>'gift-card-myr200',
                'image'=>'google_gift_card_square.png',
                'sku'=>'GRH008-04',
                'description'=>null,
                'price'=> 200.50,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>9,
                'name'=>'GoCash US $5',
                'short_name'=>'go-cash-5',
                'image'=>'go_cash_square.png',
                'sku'=>'GRH009-01',
                'description'=>null,
                'price'=> 25.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>9,
                'name'=>'GoCash US $10',
                'short_name'=>'go-cash-10',
                'image'=>'go_cash_square.png',
                'sku'=>'GRH009-02',
                'description'=>null,
                'price'=> 50.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>9,
                'name'=>'GoCash US $15',
                'short_name'=>'go-cash-15',
                'image'=>'go_cash_square.png',
                'sku'=>'GRH009-03',
                'description'=>null,
                'price'=> 75.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>9,
                'name'=>'GoCash US $20',
                'short_name'=>'go-cash-20',
                'image'=>'go_cash_square.png',
                'sku'=>'GRH009-04',
                'description'=>null,
                'price'=> 100.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>9,
                'name'=>'GoCash US $50',
                'short_name'=>'go-cash-50',
                'image'=>'go_cash_square.png',
                'sku'=>'GRH009-05',
                'description'=>null,
                'price'=> 250.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>9,
                'name'=>'GoCash US $100',
                'short_name'=>'go-cash-100',
                'image'=>'go_cash_square.png',
                'sku'=>'GRH009-06',
                'description'=>null,
                'price'=> 500.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>10,
                'name'=>'3000 WON Nexon Cash',
                'short_name'=>'nexon-cash-3000',
                'image'=>'nexon_cash_square.png',
                'sku'=>'GRH010-01',
                'description'=>null,
                'price'=> 10.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>10,
                'name'=>'5000 WON Nexon Cash',
                'short_name'=>'nexon-cash-5000',
                'image'=>'nexon_cash_square.png',
                'sku'=>'GRH010-02',
                'description'=>null,
                'price'=> 18.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>10,
                'name'=>'10000 WON Nexon Cash',
                'short_name'=>'nexon-cash-10000',
                'image'=>'nexon_cash_square.png',
                'sku'=>'GRH010-03',
                'description'=>null,
                'price'=> 36.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>10,
                'name'=>'30000 WON Nexon Cash',
                'short_name'=>'nexon-cash-30000',
                'image'=>'nexon_cash_square.png',
                'sku'=>'GRH010-04',
                'description'=>null,
                'price'=> 108.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>10,
                'name'=>'50000 WON Nexon Cash',
                'short_name'=>'nexon-cash-50000',
                'image'=>'nexon_cash_square.png',
                'sku'=>'GRH010-05',
                'description'=>null,
                'price'=> 180.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>11,
                'name'=>'11 Diamonds Pin',
                'short_name'=>'mobile-legend-pin-11',
                'image'=>'mobile_legends_pin_square.png',
                'sku'=>'GRH011-01',
                'description'=>null,
                'price'=> 1.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>0,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>11,
                'name'=>'55 Diamonds Pin',
                'short_name'=>'mobile-legend-pin-55',
                'image'=>'mobile_legends_pin_square.png',
                'sku'=>'GRH011-02',
                'description'=>null,
                'price'=> 5.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>0,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>11,
                'name'=>'275 Diamonds Pin',
                'short_name'=>'mobile-legend-pin-275',
                'image'=>'mobile_legends_pin_square.png',
                'sku'=>'GRH011-03',
                'description'=>null,
                'price'=> 23.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>0,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>11,
                'name'=>'565 Diamonds Pin',
                'short_name'=>'mobile-legend-pin-565',
                'image'=>'mobile_legends_pin_square.png',
                'sku'=>'GRH011-04',
                'description'=>null,
                'price'=> 46.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>0,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>11,
                'name'=>'1155 Diamonds Pin',
                'short_name'=>'mobile-legend-pin-1155',
                'image'=>'mobile_legends_pin_square.png',
                'sku'=>'GRH011-05',
                'description'=>null,
                'price'=> 92.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>0,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>11,
                'name'=>'1765 Diamonds Pin',
                'short_name'=>'mobile-legend-pin-1765',
                'image'=>'mobile_legends_pin_square.png',
                'sku'=>'GRH011-06',
                'description'=>null,
                'price'=> 138.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>0,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>11,
                'name'=>'2975 Diamonds Pin',
                'short_name'=>'mobile-legend-pin-2975',
                'image'=>'mobile_legends_pin_square.png',
                'sku'=>'GRH011-07',
                'description'=>null,
                'price'=> 230.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>0,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>11,
                'name'=>'6000 Diamonds Pin',
                'short_name'=>'mobile-legend-pin-6000',
                'image'=>'mobile_legends_pin_square.png',
                'sku'=>'GRH011-08',
                'description'=>null,
                'price'=> 460.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>0,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>11,
                'name'=>'12000 Diamonds Pin',
                'short_name'=>'mobile-legend-pin-12000',
                'image'=>'mobile_legends_pin_square.png',
                'sku'=>'GRH011-09',
                'description'=>null,
                'price'=> 920.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>5,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>12,
                'name'=>'PSN Card RM30',
                'short_name'=>'psn-30',
                'image'=>'playstation_network_card_square.png',
                'sku'=>'GRH012-01',
                'description'=>null,
                'price'=> 31.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>12,
                'name'=>'PSN Card RM50',
                'short_name'=>'psn-50',
                'image'=>'playstation_network_card_square.png',
                'sku'=>'GRH012-02',
                'description'=>null,
                'price'=> 51.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>12,
                'name'=>'PSN Card RM100',
                'short_name'=>'psn-100',
                'image'=>'playstation_network_card_square.png',
                'sku'=>'GRH012-03',
                'description'=>null,
                'price'=> 101.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>12,
                'name'=>'PSN Card RM200',
                'short_name'=>'psn-200',
                'image'=>'playstation_network_card_square.png',
                'sku'=>'GRH012-04',
                'description'=>null,
                'price'=> 201.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>12,
                'name'=>'PSN Card RM250',
                'short_name'=>'psn-250',
                'image'=>'playstation_network_card_square.png',
                'sku'=>'GRH012-05',
                'description'=>null,
                'price'=> 251.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>12,
                'name'=>'PSN Card RM300',
                'short_name'=>'psn-300',
                'image'=>'playstation_network_card_square.png',
                'sku'=>'GRH012-06',
                'description'=>null,
                'price'=> 301.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>13,
                'name'=>'Free Fire Max 100 Diamonds',
                'short_name'=>'free-fire-max-100',
                'image'=>'free_fire_max_diamonds_square.png',
                'sku'=>'GRH013-01',
                'description'=>null,
                'price'=> 5.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>13,
                'name'=>'Free Fire Max 210 Diamonds',
                'short_name'=>'free-fire-max-210',
                'image'=>'free_fire_max_diamonds_square.png',
                'sku'=>'GRH013-02',
                'description'=>null,
                'price'=> 10.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>13,
                'name'=>'Free Fire Max 530 Diamonds',
                'short_name'=>'free-fire-max-530',
                'image'=>'free_fire_max_diamonds_square.png',
                'sku'=>'GRH013-03',
                'description'=>null,
                'price'=> 25.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>13,
                'name'=>'Free Fire Max 1080 Diamonds',
                'short_name'=>'free-fire-max-1080',
                'image'=>'free_fire_max_diamonds_square.png',
                'sku'=>'GRH013-04',
                'description'=>null,
                'price'=> 50.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>13,
                'name'=>'Free Fire Max 2200 Diamonds',
                'short_name'=>'free-fire-max-2200',
                'image'=>'free_fire_max_diamonds_square.png',
                'sku'=>'GRH013-05',
                'description'=>null,
                'price'=> 90.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>14,
                'name'=>'Eudemons Point Card US0.99',
                'short_name'=>'eudemons-099',
                'image'=>'eudemons_point_square.png',
                'sku'=>'GRH014-01',
                'description'=>null,
                'price'=> 4.50,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>14,
                'name'=>'Eudemons Point Card US1.99',
                'short_name'=>'eudemons-199',
                'image'=>'eudemons_point_square.png',
                'sku'=>'GRH014-02',
                'description'=>null,
                'price'=> 8.90,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>14,
                'name'=>'Eudemons Point Card US4.99',
                'short_name'=>'eudemons-499',
                'image'=>'eudemons_point_square.png',
                'sku'=>'GRH014-03',
                'description'=>null,
                'price'=> 22.30,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>14,
                'name'=>'Eudemons Point Card US7.99',
                'short_name'=>'eudemons-1',
                'image'=>'eudemons_point_square.png',
                'sku'=>'GRH014-04',
                'description'=>null,
                'price'=> 35.60,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>14,
                'name'=>'Eudemons Point Card US15.99',
                'short_name'=>'eudemons-1599',
                'image'=>'eudemons_point_square.png',
                'sku'=>'GRH014-05',
                'description'=>null,
                'price'=> 71.25,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>14,
                'name'=>'Eudemons Point Card US29.99',
                'short_name'=>'eudemons-1',
                'image'=>'eudemons_point_square.png',
                'sku'=>'GRH014-06',
                'description'=>null,
                'price'=> 133.50,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>14,
                'name'=>'Eudemons Point Card US59.99',
                'short_name'=>'eudemons-5999',
                'image'=>'eudemons_point_square.png',
                'sku'=>'GRH014-07',
                'description'=>null,
                'price'=> 267.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>15,
                'name'=>'Cherry Credits 5000 CC',
                'short_name'=>'cherry-credits-5000',
                'image'=>'cherry_credits_square.png',
                'sku'=>'GRH015-01',
                'description'=>null,
                'price'=> 17.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>15,
                'name'=>'Cherry Credits 10000 CC',
                'short_name'=>'cherry-credits-10000',
                'image'=>'cherry_credits_square.png',
                'sku'=>'GRH015-02',
                'description'=>null,
                'price'=> 34.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>15,
                'name'=>'Cherry Credits 30000 CC',
                'short_name'=>'cherry-credits-30000',
                'image'=>'cherry_credits_square.png',
                'sku'=>'GRH015-03',
                'description'=>null,
                'price'=> 102.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>15,
                'name'=>'Cherry Credits 50000 CC',
                'short_name'=>'cherry-credits-50000',
                'image'=>'cherry_credits_square.png',
                'sku'=>'GRH015-04',
                'description'=>null,
                'price'=> 170.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>15,
                'name'=>'Cherry Credits 100000 CC',
                'short_name'=>'cherry-credits-100000',
                'image'=>'cherry_credits_square.png',
                'sku'=>'GRH015-05',
                'description'=>null,
                'price'=> 340.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>16,
                'name'=>'MyCard iPoint 30pts MY',
                'short_name'=>'mycard-30',
                'image'=>'mycard_my_square.png',
                'sku'=>'GRH016-01',
                'description'=>null,
                'price'=> 4.20,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>0,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>16,
                'name'=>'MyCard iPoint 50pts MY',
                'short_name'=>'mycard-50',
                'image'=>'mycard_my_square.png',
                'sku'=>'GRH016-02',
                'description'=>null,
                'price'=> 7.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>0,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>16,
                'name'=>'MyCard iPoint 90pts MY',
                'short_name'=>'mycard-90',
                'image'=>'mycard_my_square.png',
                'sku'=>'GRH016-03',
                'description'=>null,
                'price'=> 12.60,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>0,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>16,
                'name'=>'MyCard iPoint 150pts MY',
                'short_name'=>'mycard-150',
                'image'=>'mycard_my_square.png',
                'sku'=>'GRH016-04',
                'description'=>null,
                'price'=> 21.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>0,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>16,
                'name'=>'MyCard iPoint 170pts MY',
                'short_name'=>'mycard-170',
                'image'=>'mycard_my_square.png',
                'sku'=>'GRH016-05',
                'description'=>null,
                'price'=> 23.80,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>0,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>16,
                'name'=>'MyCard iPoint 300pts MY',
                'short_name'=>'mycard-300',
                'image'=>'mycard_my_square.png',
                'sku'=>'GRH016-06',
                'description'=>null,
                'price'=> 42.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>0,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>16,
                'name'=>'MyCard iPoint 350pts MY',
                'short_name'=>'mycard-350',
                'image'=>'mycard_my_square.png',
                'sku'=>'GRH016-07',
                'description'=>null,
                'price'=> 49.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>0,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>16,
                'name'=>'MyCard iPoint 400pts MY',
                'short_name'=>'mycard-400',
                'image'=>'mycard_my_square.png',
                'sku'=>'GRH016-08',
                'description'=>null,
                'price'=> 56.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>0,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>16,
                'name'=>'MyCard iPoint 450pts MY',
                'short_name'=>'mycard-450',
                'image'=>'mycard_my_square.png',
                'sku'=>'GRH016-09',
                'description'=>null,
                'price'=> 63.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>0,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>16,
                'name'=>'MyCard iPoint 500pts MY',
                'short_name'=>'mycard-500',
                'image'=>'mycard_my_square.png',
                'sku'=>'GRH016-10',
                'description'=>null,
                'price'=> 70.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>0,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>16,
                'name'=>'MyCard iPoint 750pts MY',
                'short_name'=>'mycard-750',
                'image'=>'mycard_my_square.png',
                'sku'=>'GRH016-11',
                'description'=>null,
                'price'=> 105.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>0,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>16,
                'name'=>'MyCard iPoint 1000pts MY',
                'short_name'=>'mycard-1000',
                'image'=>'mycard_my_square.png',
                'sku'=>'GRH016-12',
                'description'=>null,
                'price'=> 140.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>0,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>16,
                'name'=>'MyCard iPoint 1150pts MY',
                'short_name'=>'mycard-1150',
                'image'=>'mycard_my_square.png',
                'sku'=>'GRH016-13',
                'description'=>null,
                'price'=> 161.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>0,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>16,
                'name'=>'MyCard iPoint 1490pts MY',
                'short_name'=>'mycard-1490',
                'image'=>'mycard_my_square.png',
                'sku'=>'GRH016-14',
                'description'=>null,
                'price'=> 208.60,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>0,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>16,
                'name'=>'MyCard iPoint 1690pts MY',
                'short_name'=>'mycard-1690',
                'image'=>'mycard_my_square.png',
                'sku'=>'GRH016-15',
                'description'=>null,
                'price'=> 236.60,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>0,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>16,
                'name'=>'MyCard iPoint 2000pts MY',
                'short_name'=>'mycard-2000',
                'image'=>'mycard_my_square.png',
                'sku'=>'GRH016-16',
                'description'=>null,
                'price'=> 280.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>0,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>16,
                'name'=>'MyCard iPoint 2500pts MY',
                'short_name'=>'mycard-2500',
                'image'=>'mycard_my_square.png',
                'sku'=>'GRH016-17',
                'description'=>null,
                'price'=> 350.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>0,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>16,
                'name'=>'MyCard iPoint 3000pts MY',
                'short_name'=>'mycard-3000',
                'image'=>'mycard_my_square.png',
                'sku'=>'GRH016-18',
                'description'=>null,
                'price'=> 420.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>10,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>16,
                'name'=>'MyCard iPoint 3290pts MY',
                'short_name'=>'mycard-3290',
                'image'=>'mycard_my_square.png',
                'sku'=>'GRH016-19',
                'description'=>null,
                'price'=> 460.60,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>0,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>16,
                'name'=>'MyCard iPoint 5000pts MY',
                'short_name'=>'mycard-5000',
                'image'=>'mycard_my_square.png',
                'sku'=>'GRH016-20',
                'description'=>null,
                'price'=> 700.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>10,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>16,
                'name'=>'MyCard iPoint 10000pts MY',
                'short_name'=>'mycard-10000',
                'image'=>'mycard_my_square.png',
                'sku'=>'GRH016-21',
                'description'=>null,
                'price'=> 1400.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>10,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>17,
                'name'=>'PUBGM - 60 UC',
                'short_name'=>'pubg-60',
                'image'=>'pubg.png',
                'sku'=>'GRH017-1',
                'description'=>null,
                'price'=> 6.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>10,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>17,
                'name'=>'PUBGM - 325 UC',
                'short_name'=>'pubg-325',
                'image'=>'pubg.png',
                'sku'=>'GRH017-2',
                'description'=>null,
                'price'=> 28.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>10,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>17,
                'name'=>'PUBGM - 660 UC',
                'short_name'=>'pubg-660',
                'image'=>'pubg.png',
                'sku'=>'GRH017-3',
                'description'=>null,
                'price'=> 56.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>10,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>17,
                'name'=>'PUBGM - 1800 UC',
                'short_name'=>'pubg-1800',
                'image'=>'pubg.png',
                'sku'=>'GRH017-4',
                'description'=>null,
                'price'=> 140.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>10,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>17,
                'name'=>'PUBGM - 3850 UC',
                'short_name'=>'pubg-3850',
                'image'=>'pubg.png',
                'sku'=>'GRH017-5',
                'description'=>null,
                'price'=> 280.00,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>10,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>2,
                'name'=>'298+75Big Cat Coins',
                'short_name'=>'big-cat-7999',
                'image'=>'conquer_square.png',
                'sku'=>'GRH002-08',
                'description'=>null,
                'price'=>277.90,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],

            [
                'product_id'=>2,
                'name'=>'598+150Big Cat Coins',
                'short_name'=>'big-cat-9999',
                'image'=>'conquer_square.png',
                'sku'=>'GRH002-09',
                'description'=>null,
                'price'=>455.90,
                'discount'=>0,
                'tag'=>null,
                'quantity'=>100,
                'status'=>1,
                'remarks'=>null
            ],



        ];
        ProductVariant::insert($variants);
    }
}
