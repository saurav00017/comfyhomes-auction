@extends('layouts.app')
@section('content')
    <style>
        :root {
            --primary-purple: #6f42c1;
            --dark-purple: #4a1d96;
            --light-purple: #f0e9ff;
            --gold: #FFD700;
            --dark-gold: #D4AF37;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            /* display: flex; */
            align-items: center;
            min-height: 100vh;
        }
        
        .login-container {
            max-width: 500px;
            width: 100%;
            margin: 0 auto;
        }
        
        .login-card {
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(111, 66, 193, 0.15);
            overflow: hidden;
            border: none;
        }
        
        .login-header {
            background: linear-gradient(135deg, #6f42c1 0%, #4a1d96 100%);
            color: white;
            padding: 2rem;
            text-align: center;
        }
        
        .login-body {
            padding: 2rem;
            background: white;
        }
        
        .form-control:focus {
            border-color: var(--primary-purple);
            box-shadow: 0 0 0 0.25rem rgba(111, 66, 193, 0.25);
        }
        
        .btn-login {
            background: linear-gradient(135deg, #6f42c1 0%, #4a1d96 100%);
            color: white;
            border: none;
            padding: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-login:hover {
            background: linear-gradient(135deg, #5a32a0 0%, #3a1777 100%);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(111, 66, 193, 0.3);
        }
        
        .auth-divider {
            display: flex;
            align-items: center;
            margin: 1.5rem 0;
            color: #6c757d;
        }
        
        .auth-divider::before,
        .auth-divider::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid #dee2e6;
        }
        
        .auth-divider::before {
            margin-right: 1rem;
        }
        
        .auth-divider::after {
            margin-left: 1rem;
        }
        
        .social-login .btn {
            border-radius: 50px;
            padding: 10px;
            font-weight: 500;
        }
        
        .login-footer {
            text-align: center;
            margin-top: 1.5rem;
            color: #6c757d;
        }
        
        .login-footer a {
            color: var(--primary-purple);
            font-weight: 600;
        }
        
        .premium-badge {
            background: linear-gradient(135deg, #FFD700 0%, #D4AF37 100%);
            color: var(--primary-purple);
            padding: 6px 12px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 14px;
            display: inline-flex;
            align-items: center;
            margin-bottom: 1rem;
        }
        .login-error {
            border-radius: 8px; 
            padding: 12px 16px; 
            background-color: #f8d7da; 
            color: #842029;"
        }
    </style>
    <div class="container mt-4">
        <div class="login-container">
            <div class="login-card">
                <div class="login-header">
                    <h3><i class="fas fa-gavel me-2"></i> Property Auction</h3>
                    <p class="mb-0">Access your account to bid on premium properties</p>
                </div>
                
                <div class="login-body">

                    @if ($errors->any())
                        <div class="login-error alert alert-danger">
                            <ul class="mb-0 ps-3" style="list-style-type: disc;">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {{-- <div class="text-center">
                        <span class="premium-badge">
                            <i class="fas fa-crown me-1"></i> Premium Member Access
                        </span>
                    </div> --}}
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">
                                    <i class="fas fa-envelope text-purple"></i>
                                </span>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" value="{{ old('email') }}">
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">
                                    <i class="fas fa-lock text-purple"></i>
                                </span>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember">
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>
                            {{-- <a href="#" class="text-purple">Forgot password?</a> --}}
                        </div>
                        
                        <button type="submit" class="btn btn-login w-100 mb-3">
                            <i class="fas fa-sign-in-alt me-2"></i> Login
                        </button>
                        
                        {{-- <div class="auth-divider">OR</div> --}}
                        
                        {{-- <div class="social-login d-grid gap-2 mb-4">
                            <button class="btn btn-outline-primary">
                                <i class="fab fa-google me-2"></i> Continue with Google
                            </button>
                            <button class="btn btn-outline-dark">
                                <i class="fab fa-apple me-2"></i> Continue with Apple
                            </button>
                        </div> --}}
                        
                        <div class="login-footer">
                            Don't have an account? <a href="{{ url('/register') }}">Sign up</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection