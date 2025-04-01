@extends('layout.app')
@section('head_style')
<link href="{{ asset('css/tnc.css')}}" rel="stylesheet"/>
@endsection
@section('content')
<section class="row">
    <div style="padding:25px 0">
        <a class="link-return" href="{{ route('home') }}">
        <svg viewBox="0 0 448 512" stroke="1" width="14" height="14"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
            Back to Home Page
        </a>
    </div>

    <div class="content">
        <h2>HOW DO WE USE COOKIES AND SIMILAR TECHNOLOGIES?</h2>
        <p>At <strong>Super Recharge (superrecharge31.com)</strong>, we use cookies, pixel tags, digital analytics network tools, and other similar technologies to enhance your experience when you visit and interact with our online services. These technologies help us understand user behavior, improve our services, and offer relevant content and advertisements.</p>

        <p>Selected third parties may also set cookies or place pixel tags on our website. Their use of such technologies is subject to their respective privacy policies and not covered by this notice, except for the purposes outlined below.</p>

        <h2>Cookies</h2>
        <p>A cookie is a small text file that a website sends to your browser, which may then store it on your device as an anonymous identifier. We use cookies for different purposes, categorized as follows:</p>

        <ul>
            <li><strong>Functionality Cookies</strong> – Ensure our website operates smoothly and remembers your preferences for future visits.</li>
            <li><strong>Analytics Cookies</strong> – Help us gather insights into how users interact with our website, enabling us to improve performance and user experience.</li>
            <li><strong>Advertising Cookies</strong> – Allow us to deliver tailored advertisements based on your browsing behavior and interests.</li>
        </ul>

        <p>Analytics and advertising cookies store information on a per-session basis, while functionality cookies may retain your preferences for subsequent visits.</p>

        <p>You can configure your browser to notify you before receiving a cookie, allowing you to decide whether to accept it. Additionally, most browsers allow you to disable cookies entirely. However, disabling cookies may affect certain website functions and limit your browsing experience.</p>

        <p>For more details about cookies, visit <a href="http://www.aboutcookies.org" target="_blank">www.aboutcookies.org</a>.</p>

        <h2>Pixel Tags</h2>
        <p>Pixel tags (also called clear gifs or web beacons) are invisible tags placed on certain pages of our website. These tags generate a generic notice when you visit a page and usually work in conjunction with cookies to record anonymous visit data. If you disable cookies, pixel tags will still detect website visits but without associating them with your browsing session.</p>

        <p>We may also use <strong>smart pixels</strong> in our email campaigns and newsletters to track email open rates and engagement levels. Users who disable automatic image downloads in their email settings will not receive our smart pixels unless they manually enable images.</p>

        <h2>Digital Analytics Network Tools</h2>
        <p>Super Recharge may use digital analytics tools to process and analyze general usage patterns across our website and services. We may build customer profiles based on internal data and personal information you provide to us or data obtained from trusted third parties. This information helps us improve customer support, optimize network services, and deliver personalized marketing campaigns.</p>

        <p>By continuing to use our website, you consent to our use of cookies and similar technologies as described in this notice. If you have any questions or concerns, please contact us through our website.</p> 
    </div>
</section>
@endsection



