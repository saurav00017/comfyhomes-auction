
@extends('layouts.app')
@section('content')
    <style>
        :root {
            --primary-color: #6f42c1;
            --secondary-color: #f8f9fa;
            --dark-color: #343a40;
            --light-color: #f8f9fa;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }
        
        .page-header {
            background: linear-gradient(135deg, #6f42c1 0%, #4a1d96 100%);
            color: white;
            padding: 3rem 0;
            margin-bottom: 2rem;
        }
        
        .content-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            padding: 2rem;
            margin-bottom: 2rem;
        }
        
        h2 {
            color: var(--primary-color);
            margin-top: 2rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }
        
        h3 {
            color: var(--dark-color);
            margin-top: 1.5rem;
            font-weight: 500;
        }
        
        ul.feature-list {
            list-style-type: none;
            padding-left: 0;
        }
        
        ul.feature-list li {
            padding-left: 1.5em;
            position: relative;
            margin-bottom: 0.5rem;
        }
        
        ul.feature-list li:before {
            content: "\f00c";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--primary-color);
        }
        
        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: var(--primary-color);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
            opacity: 0;
            transition: opacity 0.3s;
        }
        
        .back-to-top.visible {
            opacity: 1;
        }
    </style>
    <!-- Page Header -->
    <header class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1 class="fw-bold mb-3">Terms & Conditions</h1>
                    <p class="lead mb-0">Please read these terms carefully before using our auction platform</p>
                </div>
            </div>
        </div>
    </header>

    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="content-card">
                    <p class="text-muted">Last updated: November 15, 2023</p>
                    
                    <h3>1. Acceptance of Terms</h3>
                    <p>By accessing or using the Property Auction platform ("Service"), you agree to be bound by these Terms and Conditions ("Terms"). If you disagree with any part of the terms, you may not access the Service.</p>
                    
                    <h3>2. User Accounts</h3>
                    <p>When you create an account with us, you must provide accurate and complete information. You are responsible for maintaining the confidentiality of your account credentials.</p>
                    
                    <h3>3. Auction Participation</h3>
                    <p>By participating in any auction, you agree to:</p>
                    <ul class="feature-list">
                        <li>Provide accurate information in your bids</li>
                        <li>Honor any winning bids as legally binding contracts</li>
                        <li>Pay the full amount within the specified timeframe</li>
                        <li>Comply with all applicable laws and regulations</li>
                    </ul>
                    
                    <h3>4. Prohibited Activities</h3>
                    <p>You may not:</p>
                    <ul class="feature-list">
                        <li>Use the Service for any illegal purpose</li>
                        <li>Interfere with or disrupt the Service</li>
                        <li>Attempt to manipulate auction prices</li>
                        <li>Use any automated system to place bids</li>
                        <li>Impersonate any person or entity</li>
                    </ul>
                    
                    <h3>5. Intellectual Property</h3>
                    <p>The Service and its original content, features, and functionality are owned by Property Auction and are protected by international copyright, trademark, and other intellectual property laws.</p>
                    
                    <h3>6. Limitation of Liability</h3>
                    <p>Property Auction shall not be liable for any indirect, incidental, special, consequential or punitive damages resulting from your use of or inability to use the Service.</p>
                    
                    <h3>7. Governing Law</h3>
                    <p>These Terms shall be governed by and construed in accordance with the laws of India, without regard to its conflict of law provisions.</p>
                    
                    <h3>8. Changes to Terms</h3>
                    <p>We reserve the right to modify these terms at any time. We will provide notice of any changes by posting the new Terms on this page.</p>
                    
                    <h3>9. Contact Us</h3>
                    <p>If you have any questions about these Terms, please contact us at legal@propertyauction.com.</p>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection