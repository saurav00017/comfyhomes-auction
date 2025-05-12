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
                    <h1 class="fw-bold mb-3">Privacy Policy</h1>
                    <p class="lead mb-0">How we collect, use, and protect your personal information</p>
                </div>
            </div>
        </div>
    </header>

    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="content-card">
                    <p class="text-muted">Last updated: November 15, 2023</p>
                    
                    <h3>1. Information We Collect</h3>
                    <p>We collect several types of information from and about users of our Service, including:</p>
                    <ul class="feature-list">
                        <li>Personal identification information (Name, email, phone number, etc.)</li>
                        <li>Financial information for transactions (processed securely through our payment partners)</li>
                        <li>Browsing behavior and usage data</li>
                        <li>Device and connection information</li>
                    </ul>
                    
                    <h3>2. How We Use Your Information</h3>
                    <p>We use the information we collect for various purposes:</p>
                    <ul class="feature-list">
                        <li>To provide and maintain our Service</li>
                        <li>To notify you about changes to our Service</li>
                        <li>To allow you to participate in interactive features</li>
                        <li>To provide customer support</li>
                        <li>To monitor the usage of our Service</li>
                        <li>To detect, prevent and address technical issues</li>
                    </ul>
                    
                    <h3>3. Data Security</h3>
                    <p>We implement appropriate technical and organizational measures to maintain the safety of your personal information including:</p>
                    <ul class="feature-list">
                        <li>SSL encryption for data transmission</li>
                        <li>Regular security audits</li>
                        <li>Limited access to personal data</li>
                        <li>Secure payment processing</li>
                    </ul>
                    <p>However, no internet transmission or electronic storage is 100% secure.</p>
                    
                    <h3>4. Data Retention</h3>
                    <p>We retain personal information only for as long as necessary to:</p>
                    <ul class="feature-list">
                        <li>Provide services you have requested</li>
                        <li>Comply with legal obligations</li>
                        <li>Resolve disputes</li>
                        <li>Enforce our agreements</li>
                    </ul>
                    
                    <h3>5. Your Rights</h3>
                    <p>You have the right to:</p>
                    <ul class="feature-list">
                        <li>Access the personal information we hold about you</li>
                        <li>Request correction of inaccurate information</li>
                        <li>Request deletion of your personal data</li>
                        <li>Object to certain processing activities</li>
                        <li>Withdraw consent where applicable</li>
                    </ul>
                    
                    <h3>6. Third-Party Services</h3>
                    <p>We may employ third-party companies to facilitate our Service, provide the Service on our behalf, or assist us in analyzing how our Service is used. These third parties have access only to the information needed to perform their functions.</p>
                    
                    <h3>7. Changes to This Policy</h3>
                    <p>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page.</p>
                    
                    <h3>8. Contact Us</h3>
                    <p>If you have any questions about this Privacy Policy, please contact us at privacy@propertyauction.com.</p>
                </div>
            </div>
        </div>
    </div>

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Back to top button functionality
        window.addEventListener('scroll', function() {
            var backToTop = document.getElementById('backToTop');
            if (window.pageYOffset > 300) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        });
        
        document.getElementById('backToTop').addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({top: 0, behavior: 'smooth'});
        });
    </script>
@endsection
