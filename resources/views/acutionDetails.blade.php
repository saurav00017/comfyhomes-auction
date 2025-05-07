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
    </style>
    <!-- Header Section -->
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
                        <span class="badge bg-success p-2">{{ $auction->categories->name ?? 'Auction' }}</span>
                    </div>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <button class="btn btn-light me-2">
                        <i class="fas fa-share-alt me-1"></i> Share
                    </button>
                    <button class="wishlist-btn active" data-id="{{ $auction->id }}">
                        <i class="{{ $isInWishlist ? 'fas' : 'far' }} fa-heart" style="color: purple;"></i>

                    </button>
                </div>
            </div>
        </div>
    </header>

    <div class="container mb-5">
        <div class="row">
            <!-- Main Image and Gallery -->
            <div class="col-lg-8">
                <div class="mb-4">
                    <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                        class="property-image w-100" alt="Property Image" id="mainImage">
                </div>

                <div class="row g-3 mb-4">
                    <div class="col-3">
                        <img src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                            class="gallery-thumbnail" onclick="changeMainImage(this)">
                    </div>
                    <div class="col-3">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                            class="gallery-thumbnail" onclick="changeMainImage(this)">
                    </div>
                    <div class="col-3">
                        <img src="https://images.unsplash.com/photo-1605276374104-dee2a0ed3cd6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                            class="gallery-thumbnail" onclick="changeMainImage(this)">
                    </div>
                    <div class="col-3">
                        <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                            class="gallery-thumbnail" onclick="changeMainImage(this)">
                    </div>
                </div>

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
                                        <p class="text-muted mb-0">John Smith</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-home feature-icon"></i>
                                    <div>
                                        <h6 class="mb-0">Property Type</h6>
                                        <p class="text-muted mb-0">Luxury Villa</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-key feature-icon"></i>
                                    <div>
                                        <h6 class="mb-0">Possession Type</h6>
                                        <p class="text-muted mb-0">Physical Possession</p>
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
                                        <p class="text-muted mb-0">₹7,50,00,000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-tags feature-icon"></i>
                                    <div>
                                        <h6 class="mb-0">Market Price</h6>
                                        <p class="text-muted mb-0">₹8,75,00,000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-ruler-combined feature-icon"></i>
                                    <div>
                                        <h6 class="mb-0">Area</h6>
                                        <p class="text-muted mb-0">3,500 Sq Ft</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="mb-3">
                            <h5>Description</h5>
                            <p class="text-muted">
                                This luxurious villa is located in the prestigious Malabar Hill area, offering breathtaking
                                sea views. The property features 4 bedrooms, 5 bathrooms, a spacious living area, modern
                                kitchen, and a private garden. The villa comes with high-end finishes, premium fixtures, and
                                ample natural light throughout.
                            </p>
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
                                        <p class="text-muted mb-0">₹5,25,00,000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-coins feature-icon"></i>
                                    <div>
                                        <h6 class="mb-0">EMD Amount</h6>
                                        <p class="text-muted mb-0">₹10,50,000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-arrow-up feature-icon"></i>
                                    <div>
                                        <h6 class="mb-0">Bid Increment</h6>
                                        <p class="text-muted mb-0">₹1,00,000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-file-signature feature-icon"></i>
                                    <div>
                                        <h6 class="mb-0">EMD Submission</h6>
                                        <p class="text-muted mb-0">Demand Draft in favor of SBI</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Documents -->
                <div class="card detail-card mb-4">
                    <div class="card-body">
                        <h3 class="card-title mb-4">Documents</h3>
                        <div class="document-card p-3 mb-3 bg-light rounded">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-1">Auction File</h6>
                                    <p class="text-muted mb-0">PDF • 1.1 MB</p>
                                </div>
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="fas fa-download me-1"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Auction Timer -->
                <div class="card detail-card mb-4">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-4">Auction Ends In</h4>
                        <div class="countdown-timer mb-3">
                            <div class="row text-center">
                                <div class="col-3">
                                    <div class="countdown-number">05</div>
                                    <div class="countdown-label">Days</div>
                                </div>
                                <div class="col-3">
                                    <div class="countdown-number">12</div>
                                    <div class="countdown-label">Hours</div>
                                </div>
                                <div class="col-3">
                                    <div class="countdown-number">45</div>
                                    <div class="countdown-label">Minutes</div>
                                </div>
                                <div class="col-3">
                                    <div class="countdown-number">30</div>
                                    <div class="countdown-label">Seconds</div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mb-3">
                            <p class="mb-1"><i class="fas fa-calendar-alt me-2"></i> Starts: 15 Nov 2023, 10:00 AM</p>
                            <p class="mb-1"><i class="fas fa-calendar-alt me-2"></i> Ends: 20 Nov 2023, 05:00 PM</p>
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
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/State_Bank_of_India_logo.svg/1200px-State_Bank_of_India_logo.svg.png"
                                alt="Bank Logo" width="50" class="me-3">
                            <div>
                                <h4 class="mb-0">State Bank of India</h4>
                                <p class="text-muted mb-0">NPA Asset Management</p>
                            </div>
                        </div>

                        <div class="mb-3">
                            <h6>Contact Information</h6>
                            <p class="mb-1"><i class="fas fa-user me-2"></i> Mr. Rajesh Kumar</p>
                            <p class="mb-1"><i class="fas fa-phone me-2"></i> +91 98765 43210</p>
                            <p class="mb-0"><i class="fas fa-envelope me-2"></i> auctions@sbi.co.in</p>
                        </div>

                        <div class="mb-3">
                            <h6>Branch Address</h6>
                            <p class="mb-0">
                                SBI Main Branch, Nariman Point, Mumbai - 400021, Maharashtra
                            </p>
                        </div>

                        <a href="#" class="btn btn-outline-primary w-100">
                            <i class="fas fa-phone-alt me-1"></i> Contact Bank
                        </a>
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
@endsection
