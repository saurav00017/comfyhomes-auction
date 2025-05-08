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
        }

        .auction-header {
            background: linear-gradient(135deg, #6f42c1 0%, #4a1d96 100%);
            color: white;
            padding: 2rem 0;
            border-radius: 0 0 20px 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .property-image {
            height: 400px;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .gallery-thumbnail {
            height: 80px;
            width: 100%;
            object-fit: cover;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .gallery-thumbnail:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .detail-card {
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border: none;
            transition: all 0.3s ease;
        }

        .detail-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }

        .badge-verified {
            background-color: var(--primary-color);
            font-size: 0.8rem;
        }

        .price-tag {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        .feature-icon {
            font-size: 1.5rem;
            color: var(--primary-color);
            margin-right: 10px;
        }

        .countdown-timer {
            background-color: var(--dark-color);
            color: white;
            padding: 1rem;
            border-radius: 8px;
            text-align: center;
        }

        .countdown-number {
            font-size: 2rem;
            font-weight: 700;
        }

        .countdown-label {
            font-size: 0.8rem;
            opacity: 0.8;
        }

        .btn-bid {
            background-color: var(--primary-color);
            color: white;
            font-weight: 600;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-bid:hover {
            background-color: #5a32a0;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .document-card {
            border-left: 4px solid var(--primary-color);
        }

        .wishlist-btn {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background-color: white;
            border: none;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .wishlist-btn.active {
            background-color: #f3e9ff;
        }

        .premium-content-wrapper {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
        }

        .premium-content-blur {
            filter: blur(6px);
            transition: filter 0.3s ease;
            user-select: none;
            pointer-events: none;
        }

        .premium-cta-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 90%;
            z-index: 10;
        }

        .premium-cta-card {
            background: rgba(255, 255, 255, 0.95);
            border: 1px solid rgba(111, 66, 193, 0.2);
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 8px 32px rgba(111, 66, 193, 0.15);
            backdrop-filter: blur(4px);
        }

        .premium-sparkle {
            position: absolute;
            top: -15px;
            right: -15px;
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #FFD700 0%, #D4AF37 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6f42c1;
            font-size: 1.2rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            animation: sparklePulse 2s infinite;
        }

        @keyframes sparklePulse {
            0% {
                transform: scale(1);
                opacity: 1;
            }

            50% {
                transform: scale(1.1);
                opacity: 0.9;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }
    </style>
    <!-- Header Section -->
    @if (!$isPremium)
        <div class="sticky-top bg-warning text-center py-2 shadow-sm">
            <span><i class="fas fa-crown me-1"></i> Enjoy full access with Premium!</span>
            <a href="{{ route('subscription.plans') }}" class="btn btn-dark btn-sm ms-2">Upgrade Now</a>
        </div>
    @endif
    <header class="auction-header mb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1 class="fw-bold mb-3">{{ $auction->property_type_one }} in {{ $auction->locality }},
                        {{ $auction->district }}</h1>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-map-marker-alt me-2"></i>
                        <span>{{ $auction->locality }}, {{ $auction->district }}, {{ $auction->state }}</span>
                    </div>
                    <div class="d-flex flex-wrap gap-2">
                        @if ($auction->featured == 1)
                            <span class="badge badge-verified p-2"
                                style="
                        background: linear-gradient(135deg, #FFD700 0%, #D4AF37 100%);
                        color: #6f42c1;
                        padding: 6px 12px;
                        border-radius: 20px;
                        font-weight: 600;
                        font-size: 14px;
                        display: inline-flex;
                        align-items: center;
                        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
                    ">
                                <i class="fas fa-check-circle me-1"></i> Verified Property
                            </span>
                        @endif
                        <span class="badge bg-success p-2">{{ $auction->categories->name ?? 'Auction' }}</span>
                    </div>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0 d-flex justify-content-md-end gap-2 flex-wrap">
                    <!-- WhatsApp -->
                    <a href="https://wa.me/?text={{ urlencode(request()->fullUrl()) }}" target="_blank"
                        class="btn btn-success rounded-circle" title="Share on WhatsApp"
                        style="width: 38px; height: 38px; display: flex; align-items: center; justify-content: center;">
                        <i class="fab fa-whatsapp"></i>
                    </a>

                    <!-- Facebook -->
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                        target="_blank" class="btn btn-primary rounded-circle" title="Share on Facebook"
                        style="width: 38px; height: 38px; display: flex; align-items: center; justify-content: center;">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <!-- Twitter -->
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}" target="_blank"
                        class="btn btn-info text-white rounded-circle" title="Share on Twitter"
                        style="width: 38px; height: 38px; display: flex; align-items: center; justify-content: center;">
                        <i class="fab fa-twitter"></i>
                    </a>

                    <!-- Email -->
                    <a href="mailto:?subject=Check this Auction Property&body={{ urlencode(request()->fullUrl()) }}"
                        class="btn btn-dark rounded-circle" title="Share via Email"
                        style="width: 38px; height: 38px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-envelope"></i>
                    </a>

                    <!-- Wishlist -->
                    <button class="wishlist-btn active ms-2" data-id="{{ $auction->id }}" title="Add to Wishlist"
                        style="width: 38px; height: 38px; background: white; border: none;">
                        <i class="{{ $isInWishlist ? 'fas' : 'far' }} fa-heart"
                            style="color: purple; font-size: 20px;"></i>
                    </button>
                </div>

            </div>
        </div>
    </header>



    <div class="container mb-5">
        <div class="row">
            <!-- Main Image and Gallery -->
            <div class="col-lg-8">
                @if ($auction->thumbnail)
                    <div class="mb-4">
                        <img src="{{ asset('storage/app/public/' . $auction->thumbnail) }}" class="property-image w-100"
                            alt="Property Image" id="mainImage">
                    </div>
                @endif
                @if ($auction->images->count() > 0)
                    <div class="row g-3 mb-4">
                        @unless ($auction->images->contains('image_path', $auction->thumbnail))
                            <div class="col-3">
                                <img src="{{ asset('storage/app/public/' . $auction->thumbnail) }}" class="gallery-thumbnail"
                                    onclick="changeMainImage(this)"
                                    data-src="{{ asset('storage/app/public/' . $auction->thumbnail) }}">
                            </div>
                        @endunless
                        @foreach ($auction->images as $image)
                            <div class="col-3">
                                <img src="{{ asset('storage/app/public/' . $image->image_path) }}"
                                    class="gallery-thumbnail" onclick="changeMainImage(this)"
                                    data-src="{{ asset('storage/app/public/' . $image->image_path) }}">
                            </div>
                        @endforeach
                    </div>
                @endif

                <!-- Property Details -->
                <div class="card detail-card mb-4">
                    <div class="card-body">
                        <h3 class="card-title mb-4">Property Details</h3>

                        <div class="row mb-3">
                            <div class="col-md-4">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-user feature-icon"></i>
                                    <div>
                                        <h6 class="mb-0">Borrower Name</h6>
                                        <p class="text-muted mb-0">{{ $auction->borrower_name }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-home feature-icon"></i>
                                    <div>
                                        <h6 class="mb-0">Property Type</h6>
                                        <p class="text-muted mb-0">{{ $auction->property_type_one }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-key feature-icon"></i>
                                    <div>
                                        <h6 class="mb-0">Possession Type</h6>
                                        <p class="text-muted mb-0">
                                            {{ $auction->possession == '1' ? 'Physical' : 'Symbolic' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-tag feature-icon"></i>
                                    <div>
                                        <h6 class="mb-0">Property Price</h6>
                                        <p class="text-muted mb-0">₹{{ number_format($auction->property_price) }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-tags feature-icon"></i>
                                    <div>
                                        <h6 class="mb-0">Market Price</h6>
                                        <p class="text-muted mb-0">₹{{ number_format($auction->market_price) }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-ruler-combined feature-icon"></i>
                                    <div>
                                        <h6 class="mb-0">Area</h6>
                                        <p class="text-muted mb-0">{{ number_format($auction->area) }} Sq Ft</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="mb-3">
                            <h5>Description</h5>
                            @if ($isPremium)
                                <p class="text-muted">
                                    {!! $auction->description !!}
                                </p>
                            @else
                                <div>
                                    <div class="">
                                        <a href="{{ route('subscription.plans') }}" class="btn btn-warning">
                                            <i class="fas fa-unlock me-1"></i> Unlock Full Description
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Auction Terms -->
                <div class="card detail-card mb-4">
                    <div class="card-body">
                        <h3 class="card-title mb-4">Auction Terms</h3>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-gavel feature-icon"></i>
                                    <div>
                                        <h6 class="mb-0">Reserve Price</h6>
                                        <p class="text-muted mb-0">₹{{ number_format($auction->reserve_price) }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-coins feature-icon"></i>
                                    <div>
                                        <h6 class="mb-0">EMD Amount</h6>
                                        <p class="text-muted mb-0">₹{{ number_format($auction->emd_amount) }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-arrow-up feature-icon"></i>
                                    <div>
                                        <h6 class="mb-0">Bid Increment</h6>
                                        <p class="text-muted mb-0">₹{{ number_format($auction->bid_increment) }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-file-signature feature-icon"></i>
                                    <div>
                                        <h6 class="mb-0">EMD Submission</h6>
                                        <p class="text-muted mb-0">
                                            {{ \Carbon\Carbon::parse($auction->emd_submission)->format('d M Y') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Documents -->
                <div class="card detail-card mb-4">
                    <div class="card-body premium-content-wrapper">
                        <h3 class="card-title mb-4">Documents</h3>
                        @if ($isPremium)
                            <div class="document-card p-3 mb-3 bg-light rounded">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-1">Auction File</h6>
                                        {{-- <p class="text-muted mb-0">PDF • 1.1 MB</p> --}}
                                    </div>
                                    <a href="{{ asset('storage/app/public/' . $auction->document) }}"
                                        class="btn btn-outline-primary" target="_blank">
                                        <i class="fas fa-download me-1"></i> Download
                                    </a>
                                </div>
                            </div>
                        @else
                            <div class="premium-content-blur">
                                <div class="document-card p-3 mb-3 bg-light rounded opacity-50">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="mb-1 text-muted">Auction File</h6>
                                            <p class="text-muted mb-0">PDF • 1.1 MB</p>
                                        </div>
                                        <button class="btn btn-outline-secondary" disabled>
                                            <i class="fas fa-lock me-1"></i> Locked
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="premium-cta-overlay">
                                <div class="premium-cta-card">
                                    <div class="premium-sparkle">
                                        <i class="fas fa-file-alt"></i>
                                    </div>
                                    <h5 class="mb-2">Access Full Documents</h5>
                                    <p class="text-muted small mb-3">Premium members get complete auction paperwork</p>
                                    <div class="d-flex gap-2 justify-content-center">
                                        <a href="{{ route('subscription.plans') }}" class="btn btn-warning btn-sm">
                                            <i class="fas fa-gem me-1"></i> Upgrade
                                        </a>
                                        <a href="{{ route('subscription.plans') }}"
                                            class="btn btn-outline-primary btn-sm">
                                            <i class="fas fa-info-circle me-1"></i> Features
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Auction Timer -->
                <div class="card detail-card mb-4">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-4">Auction Ends In</h4>
                        <div class="countdown-timer mb-3" id="auctionCountdown">
                            <div class="row text-center">
                                <div class="col-3">
                                    <div class="countdown-number" id="countdown-days">00</div>
                                    <div class="countdown-label">Days</div>
                                </div>
                                <div class="col-3">
                                    <div class="countdown-number" id="countdown-hours">00</div>
                                    <div class="countdown-label">Hours</div>
                                </div>
                                <div class="col-3">
                                    <div class="countdown-number" id="countdown-minutes">00</div>
                                    <div class="countdown-label">Minutes</div>
                                </div>
                                <div class="col-3">
                                    <div class="countdown-number" id="countdown-seconds">00</div>
                                    <div class="countdown-label">Seconds</div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mb-3">
                            <p class="mb-1"><i class="fas fa-calendar-alt me-2"></i> Starts:
                                {{ \Carbon\Carbon::parse($auction->auction_start_datetime)->format('d M Y, h:i A') }}</p>
                            <p class="mb-1"><i class="fas fa-calendar-alt me-2"></i> Ends:
                                {{ \Carbon\Carbon::parse($auction->auction_end_datetime)->format('d M Y, h:i A') }}</p>
                            <p><i class="fas fa-calendar-alt me-2"></i> Inspection: 10 Nov 2023 to 15 Nov 2023</p>
                        </div>
                    </div>
                </div>

                <!-- Current Bid -->
                {{-- <div class="card detail-card mb-4">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Current Bid</h4>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="mb-0">Highest Bid:</h5>
                            <div class="price-tag">₹5,75,00,000</div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="mb-0">Bid Increment:</h5>
                            <div class="text-primary fw-bold">₹1,00,000</div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Next Bid:</h5>
                            <div class="price-tag">₹5,76,00,000</div>
                        </div>
                    </div>
                </div> --}}

                <!-- Bank Information -->
                <div class="card detail-card mb-4">
                    <div class="card-body premium-content-wrapper">
                        @if ($isPremium)
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{ asset('storage/app/public/' . $auction->bank->icon) }}" alt="Bank Logo"
                                    width="50" class="me-3">
                                <div>
                                    <h4 class="mb-0">{{ $auction->bank->bank_name }}</h4>
                                    {{-- <p class="text-muted mb-0">NPA Asset Management</p> --}}
                                </div>
                            </div>

                            <div class="mb-3">
                                <h6>Contact Information</h6>
                                <p class="mb-1"><i class="fas fa-user me-2"></i> {{ $auction->bank_contact_name }}</p>
                                <p class="mb-1"><i class="fas fa-phone me-2"></i> {{ $auction->bank_contact_phone }}
                                </p>
                                <p class="mb-0"><i class="fas fa-envelope me-2"></i> {{ $auction->bank_contact_email }}
                                </p>
                            </div>

                            <div class="mb-3">
                                <h6>Branch Address</h6>
                                <p class="mb-0">
                                    {{ $auction->branch_address }}
                                </p>
                            </div>

                            <a href="tel:{{ $auction->bank_contact_phone }}" class="btn btn-outline-primary w-100">
                                <i class="fas fa-phone-alt me-1"></i> Contact Bank
                            </a>
                        @else
                            <div class="premium-content-blur">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-light rounded" style="width:50px;height:50px;"></div>
                                    <div>
                                        <h4 class="mb-0 text-muted">Bank Name Hidden</h4>
                                    </div>
                                </div>
                                <p class="text-muted">Contact details available for premium members</p>
                                <div class="bg-light p-3 rounded">
                                    <p class="text-muted mb-1">Branch: *********</p>
                                    <p class="text-muted mb-1">Phone: *********</p>
                                    <p class="text-muted mb-0">Email: *********</p>
                                </div>
                            </div>

                            <div class="premium-cta-overlay">
                                <div class="premium-cta-card">
                                    <div class="premium-sparkle">
                                        <i class="fas fa-crown"></i>
                                    </div>
                                    <h5 class="mb-2">Unlock Bank Details</h5>
                                    <p class="text-muted small mb-3">Get direct contact information with premium access</p>
                                    <a href="{{ route('subscription.plans') }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-gem me-1"></i> Upgrade Now
                                    </a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Location Map -->
                {{-- <div class="card detail-card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Location</h4>
                        <div class="ratio ratio-16x9 mb-3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3773.651944315546!2d72.7935573153781!3d18.96389298715874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce6e593e5a4b%3A0x7f4c1a8a4b4b4b4b!2sMalabar%20Hill%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1620000000000!5m2!1sen!2sin" 
                                    style="border:0;" 
                                    allowfullscreen="" 
                                    loading="lazy"></iframe>
                        </div>
                        <p class="text-muted mb-0">
                            <i class="fas fa-map-marker-alt text-danger me-1"></i> 
                            Malabar Hill, Mumbai, Maharashtra - 400006
                        </p>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function changeMainImage(element) {
            document.getElementById('mainImage').src = element.src;
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.wishlist-btn').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const auctionId = this.getAttribute('data-id');
                    const btn = this;
                    const icon = btn.querySelector('i');

                    fetch("{{ route('wishlist.toggle') }}", {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            },
                            body: JSON.stringify({
                                auction_id: auctionId
                            })
                        })
                        .then(response => {
                            if (response.redirected) {
                                window.location.href = response.url;
                                return;
                            }

                            return response.json();
                        })
                        .then(data => {
                            if (data && data.status === 'added') {
                                icon.classList.remove('far');
                                icon.classList.add('fas');
                                icon.style.color = 'purple';
                            } else if (data && data.status === 'removed') {
                                button.querySelector('i').classList.remove('fas');
                                button.querySelector('i').classList.add('far');
                            }
                        });
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the end time from PHP variable (ISO 8601 format)
            const endTime = new Date("{{ $auction->auction_end_datetime }}").getTime();

            // Update countdown every second
            const countdownInterval = setInterval(function() {
                const now = new Date().getTime();
                const distance = endTime - now;

                // Calculate time units
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display values with leading zeros
                document.getElementById("countdown-days").textContent = days.toString().padStart(2, '0');
                document.getElementById("countdown-hours").textContent = hours.toString().padStart(2, '0');
                document.getElementById("countdown-minutes").textContent = minutes.toString().padStart(2,
                    '0');
                document.getElementById("countdown-seconds").textContent = seconds.toString().padStart(2,
                    '0');

                // If auction ended
                if (distance < 0) {
                    clearInterval(countdownInterval);
                    document.getElementById("auctionCountdown").innerHTML = `
                    <div class="alert alert-danger text-center py-2">
                        <i class="fas fa-gavel me-2"></i> Auction has ended
                    </div>
                `;
                }
            }, 1000);
        });
    </script>

@endsection
