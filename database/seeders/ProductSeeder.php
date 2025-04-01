<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Models\Product;


class ProductSeeder extends Seeder
{

    public function run()
    {
        Product::truncate();

        $products = [
            [
                'name'=>'Garena Shell',
                'short_name'=>'garena-shell',
                'description'=>'"<h4>What is Garena Shells?</h4>\n<p>Garena Shells is the online currency of Garena gaming platform and Garena operated games. Garena users can use their Garena Shells to purchase in-game items, products and services.</p>\n\n<p>Popular Garena operated online games include Moonlight Blade, Blade & Soul, Ring of Elysium, PUBG Lite and all time favourites FIFA Online 4.</p>\n\n<p>Garena mobile games include ROV, Call of Duty: Mobile, Contra, Speed Drifters and Free Fire. Head over to the Garena Platform for more fun things that you can do!</p>\n\n<p>All you need to do to get your hands on some Garena Shells and choose the denomination that you want, make the payment with your favourite payment method and redeem it on the Garena website.</p>\n\n<p>What are you waiting for? Buy Garena Shells to enjoy your favourite online games now!</p>"',
                'short_description'=>'Garena Shells are the online currency used in games operated by Garena, a gaming platform. Players can use Garena Shells to buy in-game items, upgrades, and premium mods.',
                'guide'=>'"<h4>How to reload Garena account with Garena Shells?</h4>\n<ol>\n    <li>Go to <a href=\"https://shop.garena.my/\" target=\"_blank\">Garena Topup Center</a>.</li>\n    <li>Login to your Garena Account.</li>\n    <li>Click Shell Top Up and select Garena Prepaid Card.</li>\n    <li>Enter your Garena Shell Prepaid Card Password and click Confirm to complete top up.</li>\n</ol>"',
                'others'=>null,
                'tags'=>'Garena, Game Credits',
                'sku'=>'GRH001',
                'image'=>'garena_shells.png',
                'status'=>1,
                'label'=>'trend'
            ],
            [
                'name'=>'Ragnarok M: Eternal Love',
                'short_name'=>'ragnarok',
                'description'=>'"<h4>Ragnarok M: Eternal Love shows off the background of Rune Midgards splendor. </h4>\n<p>Classic gameplay features that are equipped with several modern touches!</p><p> Explore the world of Rune Midgard and enjoy this perfect adventure! Become an important part of the world of Ragnarok M: Eternal Love!</p><p>The latest 3D display tinged with classic art, attractive designs for Prontera, Geffen, Payon and more! </p><p>Learn about Rune Midgards epic story through various narrative lines! </p><p>Go and surround the whole world without level limits, find a variety of NPCs and find unique stories.</p>"',
                'short_description'=>'Buy Ragnarok M: Eternal Love Mobile Games with Republic.GG. Malaysia gaming platform. Pay Using Digi or Digi Reload Card.',
                'guide'=>'',
                'others'=>null,
                'tags'=>'MMORPG, Game Credits',
                'sku'=>'GRH002',
                'image'=>'ragnarok.png',
                'status'=>1,
                'label'=>'best'
            ],

            [
                'name'=>'Honor of Kings',
                'short_name'=>'honor-of-kings',
                'description'=>'"<h4>About Honor of Kings</h4>\n<p>Honor of Kings is the world\'s most-played mobile MOBA that offers the ultimate competitive experience on mobile. Become immersed in the battlefield as you squad up with your friends, choose from unique heroes with amazing skills, and enjoy the extreme fun of fierce team fights. In each battle, a team of five players advance along three lanes, with the goal of taking down nine towers, and ultimately destroy the enemy\'s crystal to claim victory.</p>"',
                'short_description'=>'Become immersed in the battlefield as you squad up with your friends, choose from unique heroes with amazing skills, and enjoy the extreme fun of fierce team fights.',
                'guide'=>'"<h4>How to redeem Honor of Kings Token Redeem Code?</h4>\n<ol>\n    <li>Visit <a href=\"https://www.midasbuy.com/midasbuy/br/redeem/hok\" target=\"_blank\">MidasBuy</a> and log into your account.</li>\n    <li>Navigate to the Honor of Kings Tokens Top Up page and enter your Honor of Kings Player ID.</li>\n    <li>Go to the Redeem Code page and enter the redemption code provided.</li>\n    <li>The code will be redeemed, and the player will receive their reward.</li></ol>"',
                'others'=>null,
                'tags'=>'Global, PVP',
                'sku'=>'GRH003',
                'image'=>'honor_of_kings.png',
                'status'=>1,
                'label'=>'trend'
            ],

            [
                'name'=>'Mobile Legends: Adventure',
                'short_name'=>'mobile-legends-adventure',
                'description'=>'"<h4>About Mobile Legends: Adventure</h4>\n<p>Mobile Legends: Adventure (MLA) is a relaxing idle RPG that can be fit perfectly into a busy daily schedule. Embark on the adventure with 100+ unique heroes, to reveal the truth behind a horrifying prophecy and save the Land of Dawn from destruction!.</p>"',
                'short_description'=>'Mobile Legends: Adventure M-Cash allows users to purchase to unlock premium content and style your character. Equip your hero with useful items like skins, rewards, passes and more.',
                'guide'=>'"<h4>How to redeem Mcash?</h4>\n<ol>\n    <li>Go to the official <a href=\"https://m.mladventure.net/assistant/?path=redeem\" target=\"_blank\">Mobile Legends Adventure Gift Redemption</a> page.</li>\n<li>Enter the M-Cash PIN code.</li>\n<li>Input your MLA Account ID and Server.</li>\n<li>Obtain the MLA verification code and enter it, then click on the REDEEM button.</li>\n<li>Return to the MLA game and receive the M-Cash via in-game mail.</li></ol>"',
                'others'=>null,
                'tags'=>'Mobile Game, RPG',
                'sku'=>'GRH004',
                'image'=>'mobile_legends_adventure.png',
                'status'=>1,
                'label'=>'best'
            ],

            [
                'name'=>'Steam Wallet Code (MYR)',
                'short_name'=>'steam-wallet-code-my',
                'description'=>'"<h4>Important</h4>\n<p>Steam users only allowed to redeem the Steam Wallet Code according to your original Steam Wallet\'s currency settings.</p>\n\n<h4>What is STEAM?</h4>\n<p>STEAM is one of the most popular gaming platforms to play your favourite games. Gamers can select from thousands of titles including bestsellers, indie hits, casual favourites, Dota 2 items, PUBG, CSGO, Team Fortress 2 items & more.</p>\n<p>With the Steam Wallet Codes, access to thousands of games - from Action to Indie and everything in between - is now super easy. Just add credit to your Steam account, which can be easily purchased here. You no longer need a credit card on Steam to add funds to your Steam Wallet. Works just like a gift certificate, redeem games, software and more on the Steam platform.</p><h4>What is Steam Wallet Code or Steam Gift Card?</h4>\n<p>Steam Wallet Code or Steam Gift Card is STEAM\'s prepaid card used to deposit and reload the stated value into your Steam Account balance, which you can use to buy your favourite games. Choose from all the best titles from current blockbusters, greatest hits, to the best of the independents.</p>"',
                'short_description'=>'Steam Wallet Code (MYR) can be used to add balance to Steam Wallet. It is usable by all Valve Steam users with Malaysian Ringgit steam wallet.',
                'guide'=>'"<h4>How to Redeem Steam Wallet Code?</h4>\n<ol>\n<li><a href=\"https://store.steampowered.com//login/\" target=\"blank\">Login</a> to your Steam account.</li>\n<li>Go to <a href=\"https://store.steampowered.com/steamaccount/addfunds\" target=\"blank\"> Redeem a Steam Wallet Code</a> page.</li>\n<li>Click Redeem a Steam Gift Card or Wallet Code.</li>\n<li>Enter the Steam Wallet Code and click Continue.</li>\n<li>The funds will be added to your account and be ready for use to buy games on STEAM!.</li></ol>"',
                'others'=>null,
                'tags'=>'Steam',
                'sku'=>'GRH005',
                'image'=>'steam.png',
                'status'=>1,
                'label'=>'best'
            ],

            [
                'name'=>'Razer Gold (MYR)',
                'short_name'=>'razer-gold-my',
                'description'=>'"<h4>About Razer Gold Malaysia</h4>\n<p>Razer Gold is the unified virtual credit for gamers worldwide. Use Razer Gold for over 2,500 games and entertainment content to buy games and in-game items.</p>"',
                'short_description'=>'Get more bang for your buck with exclusive game deals and get rewarded with Razer Silver, the loyalty rewards program for gamers.',
                'guide'=>'"<h4>How to use direct top-up with Razer Gold PIN?</h4>\n<ol>\n<li>You can top up by using Razer Gold PIN if the game supports Razer Pin direct top up as payment method.</li>\n<li>On the payment page, select Razer Gold PIN (or Direct Top-up).</li>\n<li>Depending on the game, it may require you to either insert your user id or to log in to your game account or enter your character information.</li>\n<li>Enter your Razer Gold Serial Number and PIN code.</li>\n<li>Follow the on-screen instructions.</li>\n<p>Remember to redeem your Razer Silver if you have an existing Razer Gold wallet or simply sign up for one <a href=\"https://razerid.razer.com/new\" target=\"_blank\">here</a>.</p></ol>"',
                'others'=>null,
                'tags'=>'Razer, Razer Gold',
                'sku'=>'GRH006',
                'image'=>'razer.png',
                'status'=>1,
                'label'=>'best'
            ],

            [
                'name'=>'Nintendo eShop Gift Card (JP)',
                'short_name'=>'nintendo-eshop-card',
                'description'=>'"<h4>Nintendo Switch Online</h4>\n<p>The Nintendo eShop Gift Card can also be used to begin a Nintendo Switch Online subscription. Here are the benefits of subscribing to Nintendo Switch Online:</p>\n <li>Play online with other players be it co-op or battle in games like Mario Kart and Super Smash Bros. Ultimate.</li>\n<li>Enjoy classic NES games with newly added online support! Titles are addded regularly.</li>\n<li>With your save data backed up regularly, you can easily retrive them anywhere, anytime.</li>\n<li>Enhance your Switch experience with the smartphone app that lets you voice call other players when playing online.</li>\n<li>Enjoy member-exclusive deals and purchase limited edition products!</li>"',
                'short_description'=>'Buy a Nintendo eShop Gift Card NO and start shopping on the eShop! Redeem the gift card directly into your Nintendo account via Nintendo\'s, Nintendo Switch. Once redeemed, you can start buying any Nintendo games available on the eShop.',
                'guide'=>'"<h4>How to redeem Nintendo eShop Gift Card?</h4>\n<ol>\n<li>Select the Nintendo eShop icon in the HOME menu.</li>\n<li>Scroll left and select \"Add Funds\".</li>\n<li>Select \"Redeem a Nintendo eShop Card\".</li>\n<li>Enter the 16-characters activation code, then select \"OK\" to complete the transaction.</li></p></ol>"',
                'others'=>null,
                'tags'=>'Nitendo',
                'sku'=>'GRH007',
                'image'=>'nintendo.png',
                'status'=>1,
                'label'=>'best'
            ],

            [
                'name'=>'Google Play Gift Card (MY)',
                'short_name'=>'google-play-gift-card',
                'description'=>'"<h4>About Google Play Gift Card Malaysia</h4>\n<p>Google Play Gift Card Malaysia is the prepaid top up card for Google Play Balance. It can be redeemed to pay for thousands of books, songs, movies, apps, magazines and many more on Google Play store.</p>\n<p>You can purchase it for yourself or gift it to your friends and family to show them that you are thinking of them. With the Google Play Gift Card, you do not have to worry if you\'re buying the right music album for your nephew or which books your aunt would like to read.</p>\n\n<h4>What can I buy with my Google Play Gift Card?</h4>\n<p>The Google Play Gift Card will give you access to the content available in the Google Store. This includes apps, games, movies, music and many other digital content.</p>\n<p>You will be able to access it anytime, anywhere via any web browser, Android device as well as other devices that are able to support the Google Play store. You can also download movies and TV shows for offline viewing.</p>"',
                'short_description'=>'The Google Play Gift Card is so versatile that it\'s suitable for all ages, and all styles!',
                'guide'=>'"<h4>How to Redeem Google Play Gift Card?</h4>\n<ol>\n<li>Open Google Play Store app.</li>\n<li>Touch the Menu icon on the top left corner.</li>\n<li>Tap Redeem on the Menu.</li>\n<li>Enter your code to redeem.</li></p></ol>"',
                'others'=>null,
                'tags'=>'Google Play',
                'sku'=>'GRH008',
                'image'=>'google_play.png',
                'status'=>1,
                'label'=>'trend'
            ],

            [
                'name'=>'GoCash',
                'short_name'=>'go-cash',
                'description'=>'"<h4>About GoCash Game Card</h4>\n<p>GoCash Game Card is a currency of choice for gamers that wish to play online games like MMO, FPS, and much more. Users can connect to any GoCash supported content provider and play at leisure without difficulties, providing an easy way for users to access GoCash games from around the world.</p>\n<h4>Why use a GoCash Game Card?</h4>\n<p>With the GoCash Game Card, you will have access to global top rated online games. You will also be able to earn Gopoints and win free rewards with a GoCash membership.</p>\n<p>It’s not just easy, but safe, secure and risk-free. All you need to do is choose the amount that you wish to purchase, add to cart and complete the transaction with your preferred payment methods.</p>"',
                'short_description'=>'GoCash Game Card is a global micro-transaction portal website company. ',
                'guide'=>'"<h4>How to use GoCash Game Card?</h4>\n<ol>\n<li>Purchase a GoCash Game Card.</li>\n<li>Pick a game from GoCash Games or Go directly to game portal</li>\n<li>Select GoCash as Payment Option.</li><li>Enter your GoCash Game Card PIN number</li></ol>"',
                'others'=>null,
                'tags'=>'GoCash',
                'sku'=>'GRH009',
                'image'=>'go_cash.png',
                'status'=>1,
                'label'=>'best'
            ],

            [
                'name'=>'Nexon Cash Card',
                'short_name'=>'nexon-cash-card',
                'description'=>'"<h4>About Nexon Cash Card</h4>\n<p>It can be used to purchase Nexon Cash, which is the virtual currency used in various online games developed by Nexon. Players can use Nexon Cash to buy in-game items, customization options, or other virtual goods within the games.</p>\n<p>Moreover, the Nexon Game Card or formerly known as Karma Koin is accepted by over 15 different game publishers, so you can use this gift card for a variety of different games. Players who have bought a Karma Koin gift card in the past can continue to use it just like a Nexon Game Card.</p>\n"',
                'short_description'=>'Nexon Game Card is a form of prepaid game card that could be used as an alternative to credit cards when shopping for gaming products.',
                'guide'=>'"<h4>How to Redeem Nexon Game Card?</h4>\n<ol>\n<li>Visit the website of the game you want to redeem your codes for.</li>\n<li>Select Nexon Game Card as the payment option during checkout.</li>\n<li>Follow the instructions given.</li></ol>"',
                'others'=>null,
                'tags'=>'Nexon',
                'sku'=>'GRH010',
                'image'=>'nexon_cash_card.png',
                'status'=>1,
                'label'=>'trend'
            ],

            [
                'name'=>'Mobile Legends Diamonds Pin',
                'short_name'=>'mobile-legends-pin',
                'description'=>'"<h4>About Mobile Lengends Diamonds</h4>\n<p>Mobile Legends diamonds allows users to unlock premium content and style your character. Equip your hero with useful items like skins, rewards, passes and more. You can also use Mobile Legends Diamonds to summon new heroes that will make you unstoppable and many more!</p>\n<h4>What is Mobile Legends: Bang Bang?</h4>\n<p>Mobile Legends: Bang Bang is an extremely popular MOBA mobile game. Its real-time 5 on 5 PVP battles are similar to League of Legends. You can fight over three lanes to take the enemy\'s tower. With 4 jungle areas, 18 defense towers, 2 Wild Bosses, complete reproductions of classic MOBA maps and full-on 5v5 and human vs. human battles, levelling up and gaining experience and gold to unlock heroes has never been more fun. There are 103 heroes and new ones are being added! Choose your favorite heroes and build the perfect team with your friends.</p>\n"',
                'short_description'=>'Mobile Legends Diamonds Pin is the digital prepaid code for Mobile Legends gamers to top up in-game credit for Mobile Legends, also known as Diamonds.',
                'guide'=>'"<h4>How to Redeem?</h4>\n<ol>\n<li>Launch the Mobile Legends game on your device.</li>\n<li>Go to your profile page by tapping your avatar icon in the top-left corner of the main screen.</li>\n<li>Look for the "Redemption Code" option, which is usually found under the "Settings" tab.</li><li>Enter the redeem code in the provided field. Make sure to type it exactly as it appears, including any uppercase letters and dashes.</li><li>Tap on the "Okay" button after entering the code.</li><li>Once redeem complete diamonds sent directly to your in-game mailbox. Check there if you don\'t receive them immediately</li></ol>"',
                'others'=>null,
                'tags'=>'Mobile Legends, Diamonds',
                'sku'=>'GRH011',
                'image'=>'mobile_legends_pin.png',
                'status'=>1,
                'label'=>'trend'
            ],

            [
                'name'=>'PlayStation Network Card (MY)',
                'short_name'=>'playstation-network-card-my',
                'description'=>'"<h4>About PlayStation Network Card (PSN)</h4>\n<p>Add funds to your PlayStation® Network wallet without the need for a credit card. Top up your PlayStation® Network wallet with Gaming Republic Hub to purchase thousands of exclusive games, add-on content, movies, music, and more through PlayStation®Store and Sony Entertainment Network Store, accessible with your PS5, PS4, PS3 or PSP, or PC.</p>\n<h4>PlayStation Plus Membership</h4>\n<p>Discover your next great adventure with brand-new catalogs of hundreds of current and classic games, limited-time trials, online multiplayer, member-exclusive discounts and more, with a choice of three new membership options.</p>\n"',
                'short_description'=>'Purchase thousands of exclusive games, add-on content, movies, music, and more through PlayStation®Store and Sony Entertainment Network Store.',
                'guide'=>'"<h4>PlayStation Network Card Redemption Guide:</h4>\n<ol>\n<li>Sign in to PlayStation Network on your PS5, PS4, PS3, PSP or PC.</li>\n<li>Head to PlayStation Store and select the Redeem Codes icon at the top of the page.</li>\n<li>Enter the PSN card code and the funds will be added to your wallet instantly.</li></ol>"',
                'others'=>null,
                'tags'=>'PlayStation, PS5, PS4, PS3, PSP',
                'sku'=>'GRH012',
                'image'=>'playstation_network_card.png',
                'status'=>1,
                'label'=>'best'
            ],
            [
                'name'=>'Free Fire Max Diamonds Pins',
                'short_name'=>'free-fire-max-diamonds',
                'description'=>'"<h4>About Free Fire Max Diamonds</h4>\n<p>Free Fire Max Diamond allows you to purchase weapons, pets, skins and items in Store. Plus, you can participate in Luck Royale and Diamond Spin to obtain various unique character skins, weapon skins, weapon upgrades and even cosmetics.</p>\n<p>With over 100 secure payment options, buy and receive your code instantly. There is no need to go through the App Store or Google Play Store anymore. Simply redeem your code and buy all the characters, weapons and skins that you want!</p>\n<h4>What are Free Fire Max Diamonds Used for?</h4>\n<p>Based on the same principle as PUBG Mobile Unknown Cash or Apex Legends Coins, Free Fire Max Diamonds work the same way. Free Fire Max Diamonds is actually an in-game currency that is used to buy in-game items or cosmetics and to make sure your gameplay is accelerated.</p>\n<p>Iconic characters like Misha, Nikita, Kelly, Kapella and many others can be purchased with Free Fire Max Diamonds. You can also participate in Luck Royale and Diamond Spin to obtain other unique skins and upgrade weapons. Purchase some Free Fire Max Diamonds and buy some in-game shiny items to set yourself apart from other players!</p>\n"',
                'short_description'=>'Quick and convenient, the Free Fire Max Diamonds code makes sure you can acquire the in-game currency.',
                'guide'=>'"<h4>How to redeem Free Fire Diamonds?</h4>\n<ol>\n<li>Visit <a target=\"_blank\" href\"https://shop.garena.sg/\">Free Fire top up center</a> and enter your Free Fire Player id.</li>\n<li>Select Garena PPC, Enter the code and click \"confirm\".</li>\n<li>You will receive Free Fire Diamonds in your Free Fire account immediately after redemption.</li></ol>"',
                'others'=>null,
                'tags'=>'Free Fire Max, Garena',
                'sku'=>'GRH013',
                'image'=>'free_fire_max_diamonds.png',
                'status'=>1,
                'label'=>'best'
            ],
            
            [
                'name'=>'Eudemons Point Card ',
                'short_name'=>'eudemons-point',
                'description'=>'"<h4>About Eudemons Point</h4>\n<p>Experience an fantasy story with faithful pets across Yartland in Eudemons, a western style online multiplayer RPG. Fight, explore, social & interact with friends, and raise pets to enjoy your own adventure.</p>\n<p>Thanks to the Eudemons Online Point Card, you\'re able to equip yourself with premium items like legendary mounts, enchanting costumes, and faithful pets that will accompany you on your thrilling escapades. You can also boost your gameplay and ascend the ranks at warp speed with experience boosts, turning your character into an unstoppable force within the realm of Eudemons Online.</p>\n"',
                'short_description'=>'Eudemons Online Point Card is your ultimate key to unlocking a wealth of potential within the game.',
                'guide'=>'"<h4>How to redeem?</h4>\n<ol>\n<li>Visit <a target=\"_blank\" href=\"https://shoppingmall.eudemons.com/EoPage/en/GameCard.aspx?channel=ndtqcard\">Eudemons Online Webshop</a> to top-up Eudemons Online.</li></ol>\n"',
                'others'=>null,
                'tags'=>'Eudemons',
                'sku'=>'GRH014',
                'image'=>'eudemons_point.png',
                'status'=>1,
                'label'=>'trend'
            ],

            [
                'name'=>'Cherry Credits CC',
                'short_name'=>'cherry-credits',
                'description'=>'"<h4>About Cherry Credits CC</h4>\n<p>Launched in 2007, the CC currency is now used in over 1,000 games, including the very popular games such as Dragon Nest, bleach Mobile, Atlantic Online and Attack of the Earthlings.</p>\n<p>With Cherry Credits, buying and recharging in-game currency is so easy. All you have to do is to create your free account. Your credits are kept in your free e-wallet on the CC website. CC will enhance your gaming experience no matter what game you\'re playing.</p>\n"',
                'short_description'=>'Global virtual credit system which you can use to make purchases online via Cherry Exchange or directly through merchants who support this payment method.',
                'guide'=>'"<h4>How to top-up CC with Cherry Credits:</h4>\n<ol>\n<li>Visit <a target=\"_blank\" href=\"https://www.cherrycredits.com/TopUp\">Cherry Credits CC Top Up webshop</a>.</li>\n<li>Log in to your Cherry Credits Account.</li>\n<li>Next, choose "Cherry Credits Prepaid Card / ePIN" as your Top Up method.</li>\n<li>Enter the Serial Number and Security Code.</li>\n<li>Enter the Security Code and hit "Submit" to complete the process!</li>\n</ol>"',
                'others'=>null,
                'tags'=>'Cherry Credits, CC',
                'sku'=>'GRH015',
                'image'=>'cherry_credits.png',
                'status'=>1,
                'label'=>'trend'
            ],

            [
                'name'=>'MyCard MY',
                'short_name'=>'mycard-my',
                'description'=>'"<h4>About MyCard</h4>\n<p>The safe and easy features of this payment platform allow buyers to purchase premium content of online games and services in a convenient, hassle-free environment.</p>\n<p>Launched by Smart Crown Technology Co,. Ltd, MyCard is one of the most widely used game point cards in Hong Kong, Macao and Taiwan. It serves as an international digital content point platform and provides both local and international digital content services.</p>\n<p>MyCard provides players with a safe shopping environment and their excellent customer service ensures that MyCard users experience the best of all that the MyCard platform has to offer.</p>\n"',
                'short_description'=>'MyCard (MY / SEA) provides users the access to pay for 1,000+ digital content worldwide.',
                'guide'=>'"<h4>How to top-up MyCard Points (MY/SEA):</h4>\n<ol>\n<li>Go to <a target=\"_blank\" href=\"https://www.mycard520.com/web/en-us/Redeem\">MyCard Payment Center</a>.</li>\n<li>Enter your MyCard serial number and password then click \"proceed\".</li>\n<li>Select your game or digital content.</li>\n<li>Enter your game\'s member ID and password and click \"confirm\".</li>\n</ol>"',
                'others'=>null,
                'tags'=>'MyCard MY, MyCard',
                'sku'=>'GRH016',
                'image'=>'mycard_my.png',
                'status'=>1,
                'label'=>'trend'
            ],

            [
                'name'=>'PUBG',
                'short_name'=>'pubg',
                'description'=>'"<h4>About PUBG</h4>\n<p>The official PLAYERUNKNOWNS BATTLEGROUNDS designed exclusively for mobile. Play free anywhere, anytime. PUBG MOBILE delivers the most intense free-to-play multiplayer action on mobile.</p>\n"',
                'short_description'=>'Buy PUBG Mobile Mobile Games, Google Play, App Store with Us. Malaysia gaming platform. Pay Using Digi or Digi Reload Card.',
                'guide'=>'"<h4>Use the SERIAL PIN to redeem the UC.</h4>\n<ol>\n<li>Buy the package below.</li>\n<li>Get the PIN from your purchase history.</li>\n<li>Go to <a href="https://bit.ly/2waN5oy">https://bit.ly/2waN5oy</a>.</li>\n<li>Enter your PUBGM Player ID and choose Unipin Voucher.</li>\n<li>Select the quantity and click "Pay Now"</li>\n<li>Select Unipin Voucher payment channel.</li>\n<li>Enter the Serial Number and the 16-Digit PIN.</li>\n<li>Hooray! you will receive your UC in-game.</li>\n</ol>"',
                'others'=>null,
                'tags'=>'Pubg, Pub G',
                'sku'=>'GRH017',
                'image'=>'pubg.png',
                'status'=>1,
                'label'=>'trend'
            ]
        ];
        Product::insert($products);
    }
}