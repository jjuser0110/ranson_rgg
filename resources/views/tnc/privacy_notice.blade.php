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
    <h1>Privacy Notice</h1>
        <p><strong>Effective Date: January 2, 2025</strong></p>
        
        <h2>Who We Are?</h2>
        <p>Super Recharge (referred to "Super Recharge," "us," or "we") is committed to protecting and respecting your privacy.</p>
        <p>This Privacy Notice sets out the basis on which we collect, use, process, and store your personal information when you subscribe to any of our products and services, visit our website (superrecharge31.com), or interact with our Services. Please read this Notice in context with the Terms of Service of the service that you use. It may set out additional service-specific terms regarding your personal information which we collected from you and the related processing activities.</p>

        <h2>What is the Lawfulness of Processing?</h2>
        <p>Super Recharge will process your personal data based on the following grounds:</p>
        <ul>
            <li><strong>Performance of a contract</strong>: For example, to provide our Services, process your subscription, and generate billing information.</li>
            <li><strong>Legitimate business interests</strong>: Including fraud prevention, security of our services, and direct marketing.</li>
            <li><strong>Compliance with a legal obligation</strong>: For accounting, tax requirements, and any lawful request from government or law enforcement officials.</li>
            <li><strong>Consent</strong>: Where we rely on your consent to process certain personal data. You may withdraw consent at any time.</li>
        </ul>

        <h2>When Do We Collect Your Personal Information?</h2>
        <p>We collect your personal information in the following ways:</p>
        <ul>
            <li><strong>Information you give us:</strong> When you buy or use our Services, register for a Service, subscribe to newsletters, contact us, or apply for employment with Super Recharge.</li>
            <li><strong>Information we collect automatically:</strong> When you use our Services, visit our website, or browse through our online platforms. This includes cookies, IP address, device identifiers, browsing behavior, etc.</li>
            <li><strong>Information from third-party sources:</strong> We may also collect data from fraud-prevention agencies, credit check agencies, or business partners.</li>
        </ul>

        <h2>What Do We Collect?</h2>
        <p>The types of information we collect include:</p>
        <ul>
            <li><strong>Contact and billing information:</strong> Name, address, telephone number, email, payment information, etc.</li>
            <li><strong>Usage data:</strong> Call records, text records, websites visited, app usage, browsing activities, and device-specific data.</li>
            <li><strong>Location data:</strong> GPS data, cell tower information, Wi-Fi networks.</li>
        </ul>

        <h2>How Do We Use Your Information?</h2>
        <p>We use your personal information for the following purposes:</p>
        <ul>
            <li>Providing and managing the Services you have subscribed to.</li>
            <li>Sending service messages, promotional materials, and personalized content.</li>
            <li>Billing and payment collection, and managing customer service queries.</li>
            <li>Improving our Services and conducting research and analytics.</li>
            <li>Marketing and interest-based advertising.</li>
        </ul>

        <h2>Who Do We Share Your Information With?</h2>
        <p>We may share your information with the following entities:</p>
        <ul>
            <li><strong>Partners and Service Providers:</strong> For purposes such as fraud prevention, technical support, or improving customer experience.</li>
            <li><strong>Affiliates and Roaming Partners:</strong> To facilitate and extend the Services we provide.</li>
            <li><strong>Law Enforcement:</strong> If required to comply with legal obligations or requests from law enforcement agencies.</li>
            <li><strong>Other Organisations:</strong> If our company is reorganized, sold, or merged with another organization.</li>
        </ul>

        <h2>How Do We Protect Your Information?</h2>
        <p>We take measures to protect your personal data from unauthorized access, misuse, and destruction. Our security team continuously reviews and updates our security measures to protect your information. We will never ask for your secured personal details through unsolicited communication.</p>

        <h2>Do We Transfer Your Information Outside of Malaysia?</h2>
        <p>If we transfer your personal information to countries outside of Malaysia, we will take the necessary steps to ensure it is protected in accordance with applicable data protection laws.</p>

        <h2>What Are Your Rights?</h2>
        <p>You have the following rights regarding your personal data:</p>
        <ul>
            <li><strong>Right to withdraw consent:</strong> You can withdraw your consent at any time.</li>
            <li><strong>Right to access and correct your data:</strong> You can request a copy of the data we hold about you and request corrections if necessary.</li>
            <li><strong>Right to prevent processing:</strong> You can request us to cease processing your data for certain purposes, including marketing.</li>
        </ul>

        <h2>Changes to This Privacy Notice</h2>
        <p>We may update this Privacy Notice from time to time. Please review this page periodically for any changes. If we make significant changes, we will notify you via appropriate means.</p>
    </div>
</section>
@endsection



