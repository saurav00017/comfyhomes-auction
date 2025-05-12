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
            align-items: center;
            min-height: 100vh;
        }

        .register-container {
            max-width: 500px;
            width: 100%;
            margin: 0 auto;
        }

        .register-card {
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(111, 66, 193, 0.15);
            overflow: hidden;
            border: none;
        }

        .register-header {
            background: linear-gradient(135deg, #6f42c1 0%, #4a1d96 100%);
            color: white;
            padding: 2rem;
            text-align: center;
        }

        .register-body {
            padding: 2rem;
            background: white;
        }

        .form-control:focus {
            border-color: var(--primary-purple);
            box-shadow: 0 0 0 0.25rem rgba(111, 66, 193, 0.25);
        }

        .btn-register {
            background: linear-gradient(135deg, #6f42c1 0%, #4a1d96 100%);
            color: white;
            border: none;
            padding: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-register:hover {
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

        .social-register .btn {
            border-radius: 50px;
            padding: 10px;
            font-weight: 500;
        }

        .register-footer {
            text-align: center;
            margin-top: 1.5rem;
            color: #6c757d;
        }

        .register-footer a {
            color: var(--primary-purple);
            font-weight: 600;
        }

        .premium-benefits {
            background: var(--light-purple);
            border-radius: 12px;
            padding: 1.5rem;
            margin-top: 1.5rem;
            border-left: 4px solid var(--gold);
        }

        .benefit-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 0.75rem;
        }

        .benefit-item i {
            color: var(--gold);
            margin-right: 10px;
            margin-top: 3px;
        }

        .password-strength {
            height: 4px;
            background: #e9ecef;
            margin-top: 8px;
            border-radius: 2px;
            overflow: hidden;
        }

        .strength-bar {
            height: 100%;
            width: 0%;
            background: #dc3545;
            transition: all 0.3s ease;
        }

        .error-message {
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: 0.25rem;
            display: flex;
            align-items: center;
        }

        .error-message i {
            margin-right: 5px;
        }

        .is-invalid {
            border-color: #dc3545;
        }

        .is-invalid:focus {
            border-color: #dc3545;
            box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
        }
    </style>

    <div class="container mt-4">
        <div class="register-container">
            <div class="register-card">
                <div class="register-header">
                    <h3><i class="fas fa-gavel me-2"></i> Create Account</h3>
                    <p class="mb-0">Register to bid on premium properties</p>
                </div>

                <div class="register-body">
                    <form method="POST" action="{{ url('/register') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">
                                    <i class="fas fa-user text-purple"></i>
                                </span>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                       id="username" placeholder="Choose a username" name="name" 
                                       value="{{ old('name') }}" required>
                            </div>
                            @error('name')
                                <div class="error-message">
                                    <i class="fas fa-exclamation-circle"></i>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="contact" class="form-label">Phone Number</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">
                                    <i class="fas fa-phone text-purple"></i>
                                </span>
                                <input type="tel" class="form-control @error('number') is-invalid @enderror" 
                                       id="contact" name="number" placeholder="Enter your phone number" 
                                       value="{{ old('number') }}" required>
                            </div>
                            @error('number')
                                <div class="error-message">
                                    <i class="fas fa-exclamation-circle"></i>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">
                                    <i class="fas fa-envelope text-purple"></i>
                                </span>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                       name="email" id="email" placeholder="Enter your email" 
                                       value="{{ old('email') }}" required>
                            </div>
                            @error('email')
                                <div class="error-message">
                                    <i class="fas fa-exclamation-circle"></i>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">
                                    <i class="fas fa-lock text-purple"></i>
                                </span>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" 
                                       id="password" name="password" placeholder="Create a password" required>
                            </div>
                            @error('password')
                                <div class="error-message">
                                    <i class="fas fa-exclamation-circle"></i>
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="password-strength">
                                <div class="strength-bar" id="strengthBar"></div>
                            </div>
                            <small class="text-muted">Minimum 8 characters with numbers and symbols</small>
                        </div>

                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">
                                    <i class="fas fa-lock text-purple"></i>
                                </span>
                                <input type="password" class="form-control" id="confirmPassword"
                                    placeholder="Confirm your password" required>
                            </div>
                        </div>

                        <div class="form-check mb-4">
                            <input class="form-check-input @error('terms') is-invalid @enderror" type="checkbox" 
                                   id="terms" name="terms" {{ old('terms') ? 'checked' : '' }} required>
                            <label class="form-check-label" for="terms">
                                I agree to the <a href="{{ url('/terms') }}" class="text-purple">Terms of Service</a> and <a
                                    href="{{ url('/privacy') }}" class="text-purple">Privacy Policy</a>
                            </label>
                            @error('terms')
                                <div class="error-message">
                                    <i class="fas fa-exclamation-circle"></i>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-register w-100 mb-3">
                            <i class="fas fa-user-plus me-2"></i> Create Account
                        </button>

                        <div class="register-footer">
                            Already have an account? <a href="{{ url('/login') }}">Sign in</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Password strength indicator
        document.getElementById('password').addEventListener('input', function() {
            const password = this.value;
            const strengthBar = document.getElementById('strengthBar');
            let strength = 0;

            if (password.length >= 8) strength += 1;
            if (password.match(/[a-z]/) && password.match(/[A-Z]/)) strength += 1;
            if (password.match(/\d/)) strength += 1;
            if (password.match(/[^a-zA-Z\d]/)) strength += 1;

            // Update strength bar
            if (strength === 0) {
                strengthBar.style.width = '0%';
                strengthBar.style.backgroundColor = '#dc3545';
            } else if (strength === 1) {
                strengthBar.style.width = '25%';
                strengthBar.style.backgroundColor = '#dc3545';
            } else if (strength === 2) {
                strengthBar.style.width = '50%';
                strengthBar.style.backgroundColor = '#fd7e14';
            } else if (strength === 3) {
                strengthBar.style.width = '75%';
                strengthBar.style.backgroundColor = '#ffc107';
            } else {
                strengthBar.style.width = '100%';
                strengthBar.style.backgroundColor = '#28a745';
            }
        });
    </script>

    <script>
        document.querySelector('form').addEventListener('submit', function(e) {
            const password = document.getElementById('password').value.trim();
            const confirmPassword = document.getElementById('confirmPassword').value.trim();

            if (password !== confirmPassword) {
                e.preventDefault();
                const errorDiv = document.createElement('div');
                errorDiv.className = 'error-message';
                errorDiv.innerHTML = '<i class="fas fa-exclamation-circle"></i> Password and Confirm Password do not match.';
                
                const confirmPassGroup = document.getElementById('confirmPassword').parentNode.parentNode;
                if (!confirmPassGroup.nextElementSibling.classList.contains('error-message')) {
                    confirmPassGroup.parentNode.insertBefore(errorDiv, confirmPassGroup.nextElementSibling);
                }
                document.getElementById('confirmPassword').focus();
            }
        });
    </script>
@endsection