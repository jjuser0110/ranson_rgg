<footer>
    <div class="row">
        <div class="col">
            
            <img class="logo" src="{{ asset('img/logo.png') }}">
        </div>
        <div class="col">
            <h4>About Super Recharge</h4>
            <a href="{{ route('about_us') }}">About Us</a>
            <a href="{{ route('contact_us') }}">Contact Us</a>
        </div>
        <div class="col">
            <h4>Links</h4>
            <a href="{{ route('home') }}">Products</a>
            <a href="{{ route('news.index') }}">News</a>
            <a href="{{ route('promotion.index') }}">Promotions</a>
        </div>
        <div class="col">
            <h4>Terms & Policies</h4>
            <a href="{{ route('tnc.terms_of_services') }}">Terms of Service</a>
            <a href="{{ route('tnc.cookies_notice') }}">Cookie Notice</a>
            <a href="{{ route('tnc.privacy_notice') }}">Privacy Notice</a>
        </div>
    </div>
    <div class="row" style="margin:0 auto">
        <p>© 2023 Super Recharge. All Rights Reserved.</p>
    </div>
</footer>