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
        <h1>Terms of Service</h1>
        
        <h2>Introduction</h2>
        <p>Welcome to Super Recharge ("Super Recharge," "we," "us," "our"). By accessing and using our website, <strong>superrecharge31.com</strong> (the "Platform"), and purchasing any digital content, products, or services (the "Services"), you agree to be bound by these Terms of Service ("Terms").</p>
        <p>These Terms govern your use of the Platform and any transactions made. We may modify these Terms at any time without prior notice. Your continued use of the Platform constitutes acceptance of any updates.</p>
        <p>If you are under 18 years old (the "Legal Age"), you must obtain permission from a parent or legal guardian to create an account and use our Services.</p>
        
        <h2>Account Registration, Subscription, and Payment</h2>
        <ul>
            <li>You must create an account with a valid mobile number.</li>
            <li>Maintain the security of your login credentials and report unauthorized access to <strong>support@superrecharge31.com</strong>.</li>
            <li>Your account may be suspended if inactive for <strong>24 consecutive months</strong>.</li>
            <li>Deleting your account results in permanent removal of personal data.</li>
        </ul>
        
        <h2>User Representations and Warranties</h2>
        <ul>
            <li>You are of Legal Age or have obtained parental/guardian consent.</li>
            <li>You provide accurate and truthful personal information.</li>
            <li>You are responsible for maintaining account confidentiality.</li>
        </ul>
        
        <h2>Identity Verification</h2>
        <p>We may require identity verification to confirm account ownership and prevent fraud. You may need to provide legally recognized identification documents.</p>
        
        <h2>Prohibited Activities</h2>
        <ul>
            <li>Violating any applicable laws.</li>
            <li>Providing false or misleading information.</li>
            <li>Hacking or compromising Platform security.</li>
            <li>Unauthorized use of intellectual property.</li>
            <li>Harassing or defaming others.</li>
        </ul>
        <p>Violations may result in account suspension or termination.</p>
        
        <h2>Dispute Resolution</h2>
        <p>Contact us at <strong>cs@superrecharge31.com</strong> for transaction disputes. We will investigate but resolutions depend on third-party providers.</p>
        
        <h2>Intellectual Property Rights</h2>
        <p>All content on the Platform is owned by Super Recharge and its licensors. You may not copy or modify any content without permission.</p>
        
        <h2>Suspension or Termination of Service</h2>
        <ul>
            <li>We may suspend your account for violations or fraudulent activities.</li>
            <li>Inactive accounts for over 24 months may be terminated.</li>
            <li>You can request account termination, processed within <strong>30 days</strong>.</li>
        </ul>
        
        <h2>Disclaimers and Limitation of Liability</h2>
        <p>The Platform is provided "AS-IS" without guarantees of uninterrupted service. We are not responsible for external disruptions.</p>
        
        <h2>Indemnification</h2>
        <p>You agree to indemnify Super Recharge from claims, damages, or expenses arising from your Platform use.</p>
        
        <h2>Force Majeure</h2>
        <p>We are not responsible for delays due to unforeseen circumstances such as natural disasters or cyber-attacks.</p>
        
        <h2>Governing Law</h2>
        <p>These Terms are governed by the laws of <strong>Malaysia</strong>. Disputes are subject to Malaysian courts.</p>
        
        <h2>Miscellaneous</h2>
        <p>These Terms constitute the entire agreement. If any provision is invalid, the remaining Terms remain enforceable.</p>
        <p>For inquiries, contact <strong>support@superrecharge31.com</strong>.</p>
        <p><strong>Last Updated:</strong>23/8/2022</p>
    </div>
</section>
@endsection



