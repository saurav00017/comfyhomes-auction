@extends('layouts.app')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@section('content')
    <style type="text/css">
        .wishlist-selected i {
            color: purple !important;
            /* Changes star to purple */
        }


        .vertical-line {
            border-left: 1px solid #ccc;
            /* Line style */
            height: 30px;
            /* Adjust height as needed */
            margin: 0 10px;
            /* Space around the line */
        }


        #validationDefault03 {
            width: 229px;
        }


        input::placeholder {
            color: #333;
        }


        .property_type {
            width: 150px;
        }



        .search-bar {
            display: flex;
            margin-top: 20px;
            width: 61%;


        }

        .input-group {
            display: flex;
            align-items: center;
            background-color: #f0f0f0;
            border-radius: 50px;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .input-item {
            display: flex;
            align-items: center;
            margin-right: 20px;
        }

        .input-item i {
            margin-right: 10px;
            color: purple;
        }

        input[type="text"],
        select {
            border: none;
            background: none;
            outline: none;
            font-size: 16px;
            color: #333;
        }

        .search-btn {
            background-color: purple;
            color: white;
            padding: 10px 40px;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        input[type="text"] {

            color: #333;

        }



        .search-btn i {
            margin-right: 10px;
        }

        .search-btn:hover {
            background-color: #0056b3;
        }


        @media (min-width: 1023px) and (max-width: 1099px) {

            .search-bar {
                width: 85%;

            }

        }

        @media (min-width: 1200px) and (max-width: 1299px) {

            .search-bar {
                width: 70%;


            }

        }


        @media (min-width: 850px) and (max-width: 899px) {
            .search-bar {
                width: 94%;

            }


        }

        @media (min-width: 800px) and (max-width: 849px) {
            .search-bar {
                width: 94%;

            }

        }

        @media (min-width: 900px) and (max-width: 950px) {
            .search-bar {
                width: 95%;

            }

        }

        .page-header {
            background: linear-gradient(135deg, #6f42c1 0%, #4a1d96 100%);
            color: white;
            padding: 3rem 0;
            margin-bottom: 2rem;
        }

        .filter-card {
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            border: none;
            margin-bottom: 2rem;
        }

        .search-btn {
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 0 8px 8px 0 !important;
        }
        
        .reset-btn {
            background-color: #6c757d;
            color: white;
            border: none;
        }
        
        .form-select:focus, .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(111, 66, 193, 0.25);
        }
        
        .search-input-group .form-control {
            border-right: none;
        }
        
        .search-input-group .input-group-text {
            background-color: white;
            border-left: none;
        }
    </style>

    <!--============== Banner Section Start ==============-->
    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1 class="fw-bold mb-3">Current Property Auctions</h1>
                    <p class="lead mb-0">Browse through verified bank auction properties across India</p>
                </div>
                <div class="col-md-4 text-md-end">
                    <span class="badge bg-light text-dark p-2">
                        <i class="fas fa-home me-1"></i> {{ $property->total() }} Properties Listed
                    </span>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-white">
        <div class="container">
            <!-- Filter Button for Mobile -->
            <div class="mb-3 text-end d-md-none">
                <button class="btn btn-outline-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#filterCard">
                    🔍 Filter Properties
                </button>
            </div>


            <div class="card filter-card mb-4">
                <div class="card-body">
                    <form action="{{ route('verifiedProperty') }}" method="GET" class="row g-3" id="filterForm">
                        <div class="row g-3">
                            <!-- Location Search -->
                            <div class="col-md-3">
                                <label class="form-label">Location</label>
                                <div class="input-group search-input-group">
                                    <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                    <input type="text" class="form-control" id="location" value="{{ request('location') }}"
                                    name="location" placeholder="Search location...">
                                </div>
                            </div>
                            
                            <!-- Bank Search -->
                            <div class="col-md-3">
                                <label class="form-label">Bank</label>
                                <div class="input-group search-input-group">
                                    <span class="input-group-text"><i class="fas fa-university"></i></span>
                                    <input type="text" class="form-control" id="bank" 
                                    name="bank" value="{{ request('bank') }}" placeholder="Search bank...">
                                </div>
                            </div>
                            
                            <!-- Category Dropdown -->
                            <div class="col-md-2">
                                <label class="form-label">Category</label>
                                <select class="form-select" name="category" id="category">
                                    <option selected value="">All Categories</option>
                                    @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ request('category') == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                </select>
                            </div>
                            
                            <!-- Possession Dropdown -->
                            <div class="col-md-2">
                                <label class="form-label">Possession</label>
                                <select name="possession" id="possession" class="form-select">
                                    <option value="">All</option>
                                    <option value="1" {{ request('possession') == '1' ? 'selected' : '' }}>Physical
                                    </option>
                                    <option value="0" {{ request('possession') == '0' ? 'selected' : '' }}>Symbolic
                                    </option>
                                </select>
                            </div>
                            
                            <!-- Sort By Dropdown -->
                            <div class="col-md-2">
                                <label class="form-label">Sort By</label>
                                <select name="sort_by" id="sort_by" class="form-select">
                                    <option value="default" {{ request('sort_by') == 'default' ? 'selected' : '' }}>Default
                                    </option>
                                    <option value="newest" {{ request('sort_by') == 'newest' ? 'selected' : '' }}>Newest
                                    </option>
                                    <option value="recent" {{ request('sort_by') == 'recent' ? 'selected' : '' }}>Recent
                                    </option>
                                    <option value="price_high" {{ request('sort_by') == 'price_high' ? 'selected' : '' }}>
                                        Price: High to Low</option>
                                    <option value="price_low" {{ request('sort_by') == 'price_low' ? 'selected' : '' }}>
                                        Price: Low to High</option>
                                </select>
                            </div>
                        </div>
                        
                        <!-- Action Buttons -->
                        <div class="row mt-3">
                            <div class="col-12 d-flex justify-content-end">
                                <button type="button" onclick="window.location.href='{{ route('verifiedProperty') }}'" class="btn reset-btn me-2">
                                    <i class="fas fa-undo me-1"></i> Reset
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-search me-1"></i> Search
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Collapsible Filter Card (Always Open on PC) -->
           


            <!-- Property List -->
            <div class="row">

                @forelse ($property as $item)
                    <div class="col-12 mb-4">
                        <div class="property-list-item card border-0 shadow-sm">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <div class="position-relative h-100">
                                        @if (!empty($item->thumbnail) && file_exists(public_path('storage/' . $item->thumbnail)))
                                        <img src="{{ $item->thumbnail ? asset('storage/' . $item->thumbnail) : 'https://via.placeholder.com/500x300?text=No+Image' }}"
                                            class="img-fluid rounded-start h-100 w-100 object-fit-cover" alt="Property">
                                            @else
                                            <img src="{{ asset('assets/images/default-thumbnail.jpg') }}"
                                            class="img-fluid rounded-start h-100 w-100 object-fit-cover" alt="Property">
                                            @endif
                                        @if ($item->featured)
                                            <div class="position-absolute top-0 start-0 m-2">
                                                <span class="badge bg-primary">Verified</span>
                                            </div>
                                        @endif
                                        <div class="position-absolute top-0 end-0 m-2">
                                            <button
                                                class="btn btn-sm btn-light rounded-circle wishlist-btn {{ in_array($item->id, $wishlistIds ?? []) ? 'active' : '' }}"
                                                data-id="{{ $item->id }}">
                                                <i class="{{ in_array($item->id, $wishlistIds ?? []) ? 'fas' : 'far' }} fa-heart" style="color: purple;"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body h-100 d-flex flex-column">
                                        <div class="d-flex justify-content-between">
                                            <h4 class="card-title text-primary">
                                                {{ $item->property_type_one ?? 'Property' }}
                                            </h4>
                                            <span
                                                class="badge bg-success d-flex align-items-center justify-content-center">{{ $item->categories->name ?? 'Auction' }}</span>
                                        </div>
                                        <p class="text-muted mb-2">
                                            <i class="fas fa-map-marker-alt text-primary me-1"></i> {{ $item->locality }},
                                            {{ $item->district }}
                                        </p>

                                        @if ($item->auction_start_datetime)
                                            <div class="mb-2">
                                                <i class="fas fa-calendar-alt text-primary me-1"></i>
                                                <span class="text-muted">
                                                    {{ \Carbon\Carbon::parse($item->auction_start_datetime)->format('d M Y') }}
                                                </span>
                                            </div>
                                        @endif


                                        <div class="property-features mb-3">
                                            <div class="row g-2">
                                                <div class="col-4">
                                                    <div class="bg-light p-2 rounded text-center">
                                                        <small class="d-block text-muted">Area</small>
                                                        <span class="fw-bold">{{ $item->area ?? '-' }} Sq Ft</span>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="bg-light p-2 rounded text-center">
                                                        <small class="d-block text-muted">EMD</small>
                                                        <span
                                                            class="fw-bold">₹{{ number_format($item->emd_amount) }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="bg-light p-2 rounded text-center">
                                                        <small class="d-block text-muted">Possession</small>
                                                        <span
                                                            class="fw-bold">{{ $item->possession == '1' ? 'Physical' : 'Symbolic' }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-auto d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('storage/' . $item->bank->icon) ?? 'https://via.placeholder.com/24' }}"
                                                    alt="Bank" width="24" class="me-2">
                                                <span>{{ $item->bank->bank_name ?? $item->bank_name }}</span>
                                            </div>
                                            <div>
                                                <h4 class="text-primary mb-0">₹{{ number_format($item->property_price) }}
                                                </h4>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end mt-3">
                                            <a href="{{ route('auction.details', $item->slug) }}" class="btn btn-primary px-4">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No verified properties found.</p>
                @endforelse

                {{-- Add pagination links --}}
                <div class="d-flex justify-content-center mt-4">
                    {{ $property->links() }}
                </div>
            </div>
        </div>
    </section>

    <style>
        .property-list-item {
            transition: transform 0.3s ease;
        }

        .property-list-item:hover {
            transform: translateY(-5px);
        }

        .object-fit-cover {
            object-fit: cover;
        }
    </style>
    <!--============== Advance Search Section End ==============-->


    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(function() {
            const locations = @json($locations);
            const banks = @json($banks);
            $("#location").autocomplete({
                source: locations
            });
            $("#bank").autocomplete({
                source: banks
            });
        });
    </script>

    <script>
        document.getElementById('sort_by').addEventListener('change', () => {
            document.getElementById('filterForm').submit();
        });
        document.getElementById('possession').addEventListener('change', () => {
            document.getElementById('filterForm').submit();
        });
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
