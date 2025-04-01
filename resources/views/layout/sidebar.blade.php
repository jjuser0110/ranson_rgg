<div id="sidebar">
    <div class="logo-wrapper">
        <img src="{{ asset('img/logo.png') }}" />
        <div class="btn-close-sidebar" onclick="hideSidebar()">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="white" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-left"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M5 12l6 6" /><path d="M5 12l6 -6" /></svg>
        </div>
    </div>

    <div class="sidebar-links">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('promotion.index') }}">Promotions</a>
        <!-- <a href="{{ route('news.index') }}">News</a> -->
        <a href="{{ route('about_us') }}">About Us</a>
        <a href="{{ route('contact_us') }}">Contact Us</a>
        <a href="{{ route('order') }}">My Orders</a>
        <a href="{{ route('load_cart') }}">My Carts</a>

    </div>

</div>