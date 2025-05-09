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

        .contact-header {
            background: linear-gradient(135deg, #6f42c1 0%, #4a1d96 100%);
            color: white;
            padding: 3rem 0;
            border-radius: 0 0 20px 20px;
            margin-bottom: 3rem;
        }

        .contact-card {
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(111, 66, 193, 0.15);
            border: none;
            transition: all 0.3s ease;
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(111, 66, 193, 0.25);
        }

        .contact-icon {
            width: 60px;
            height: 60px;
            background: var(--light-purple);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--primary-purple);
            margin-bottom: 1.5rem;
        }

        .btn-contact {
            background: linear-gradient(135deg, #6f42c1 0%, #4a1d96 100%);
            color: white;
            border: none;
            padding: 12px 24px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-contact:hover {
            background: linear-gradient(135deg, #5a32a0 0%, #3a1777 100%);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(111, 66, 193, 0.3);
        }

        .form-control:focus {
            border-color: var(--primary-purple);
            box-shadow: 0 0 0 0.25rem rgba(111, 66, 193, 0.25);
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

        .contact-map {
            border-radius: 12px;
            overflow: hidden;
            height: 100%;
            min-height: 300px;
        }
    </style>

    <!-- Header Section -->
    <header class="contact-header">
        <div class="container text-center">
            <h1 class="fw-bold mb-3">Contact Us</h1>
            <p class="lead mb-0">We're here to help with any questions about our property auctions</p>
        </div>
    </header>

    <div class="container mb-5">
        <div class="row g-4">
            <!-- Contact Information -->
            <div class="col-lg-4">
                <div class="contact-card h-100 p-4">
                    <div class="text-center">
                        <div class="contact-icon mx-auto">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h4>Our Office</h4>
                        <p class="text-muted">
                            Office No. 219, Gera Imperium Rise<br>
                            Hinjewadi Phase 2, Pune - 411002<br>
                            Maharashtra, India
                        </p>
                    </div>

                    <div class="text-center mt-4">
                        <div class="contact-icon mx-auto">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h4>Call Us</h4>
                        <p class="text-muted">
                            +91 2068317000<br>
                            Mon-Fri: 9am-6pm
                        </p>
                    </div>

                    <div class="text-center mt-4">
                        <div class="contact-icon mx-auto">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h4>Email Us</h4>
                        <p class="text-muted">
                            info@comfyhomes.in<br>
                            support@comfyhomes.in
                        </p>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-5">
                <div class="contact-card h-100 p-4">
                    <h3 class="mb-4">Send Us a Message</h3>
                    <form method="POST" action="{{ route('contact.submit') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                   id="name" name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="error-message">
                                    <i class="fas fa-exclamation-circle"></i>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                   id="email" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="error-message">
                                    <i class="fas fa-exclamation-circle"></i>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control @error('phone') is-invalid @enderror" 
                                   id="phone" name="phone" value="{{ old('phone') }}">
                            @error('phone')
                                <div class="error-message">
                                    <i class="fas fa-exclamation-circle"></i>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> --}}

                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <select class="form-select @error('subject') is-invalid @enderror" 
                                    id="subject" name="subject" required>
                                <option value="" selected disabled>Select a subject</option>
                                <option value="Auction Inquiry" {{ old('subject') == 'Auction Inquiry' ? 'selected' : '' }}>Auction Inquiry</option>
                                <option value="Property Question" {{ old('subject') == 'Property Question' ? 'selected' : '' }}>Property Question</option>
                                <option value="Technical Support" {{ old('subject') == 'Technical Support' ? 'selected' : '' }}>Technical Support</option>
                                <option value="Feedback" {{ old('subject') == 'Feedback' ? 'selected' : '' }}>Feedback</option>
                                <option value="Other" {{ old('subject') == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                            @error('subject')
                                <div class="error-message">
                                    <i class="fas fa-exclamation-circle"></i>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Your Message</label>
                            <textarea class="form-control @error('message') is-invalid @enderror" 
                                      id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                            @error('message')
                                <div class="error-message">
                                    <i class="fas fa-exclamation-circle"></i>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-contact">
                            <i class="fas fa-paper-plane me-2"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>

            <!-- Map -->
            <div class="col-lg-3">
                <div class="contact-card h-100 p-0 overflow-hidden">
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3781.5028405169573!2d73.71644771488688!3d18.596439487364815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sOffice%20No.%20219%2C%20Gera%20Imperium%20Rise%2C%20Hinjewadi%20Phase%202%2C%20Pune%20!5e0!3m2!1sen!2sin!4v1675232643336!5m2!1sen!2sin" 
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="p-3 text-center">
                        <h5 class="mb-2">Our Location</h5>
                        <p class="text-muted small mb-0">Visit our office during business hours</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection