@extends('layouts.app')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@section('content')
    <style type="text/css">
        .wishlist-selected i {
            color: purple !important;
            /* Changes star to purple */
        }

        .page-banner {

            margin-top: 12%;

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
    </style>

    <!--============== Banner Section Start ==============-->
    <div class="page-banner bg-light py-4">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                <h1 class="mb-3 mb-md-0 text-primary fw-bold">Auction Properties</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 bg-transparent p-0">
                        <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Properties</a></li>
                        <li class="breadcrumb-item active text-primary" aria-current="page">Auctions</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section class="py-5 bg-white">
        <div class="container">
            <!-- Filter Button for Mobile -->
            <div class="mb-3 text-end d-md-none">
                <button class="btn btn-outline-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#filterCard">
                    🔍 Filter Properties
                </button>
            </div>


            <!-- Collapsible Filter Card (Always Open on PC) -->
            <div class="collapse d-md-block" id="filterCard">
                <div class="card card-body shadow-sm mb-4 mt-3">
                    <form action="{{ route('verifiedProperty') }}" method="GET" class="row g-3" id="filterForm">
                        <!-- Sort By and Possession OUTSIDE collapsible, but still INSIDE the form -->
                        <div class="row g-3 align-items-end">
                            <div class="col-md-2 col-6">
                                <label for="sort_by" class="form-label">Sort By</label>
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

                            <div class="col-md-2 col-6">
                                <label for="possession" class="form-label">Possession</label>
                                <select name="possession" id="possession" class="form-select">
                                    <option value="">All</option>
                                    <option value="1" {{ request('possession') == '1' ? 'selected' : '' }}>Physical
                                    </option>
                                    <option value="0" {{ request('possession') == '0' ? 'selected' : '' }}>Symbolic
                                    </option>
                                </select>
                            </div>
                        </div>

                        <!-- Collapsible Filter Section -->
                        <div class="collapse d-md-block" id="filterCard">
                            <div class="card card-body shadow-sm mb-4 mt-3">
                                <div class="row g-3">
                                    <div class="col-md-3">
                                        <label for="location" class="form-label">Location</label>
                                        <input type="text" id="location" name="location" class="form-control"
                                            placeholder="Search location..." value="{{ request('location') }}">
                                    </div>

                                    <div class="col-md-3">
                                        <label for="bank" class="form-label">Bank</label>
                                        <input type="text" id="bank" name="bank" class="form-control"
                                            placeholder="Search bank..." value="{{ request('bank') }}">
                                    </div>

                                    <div class="col-md-3">
                                        <label for="category" class="form-label">Category</label>
                                        <select name="category" id="category" class="form-select">
                                            <option value="">All</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ request('category') == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-12 text-end">
                                        <button type="submit" class="btn btn-primary px-4">Search</button>
                                        <a href="{{ route('verifiedProperty') }}"
                                            class="btn btn-secondary px-4 ms-2">Reset</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>


            <!-- Property List -->
            <div class="row">

                @forelse ($property as $item)
                    <div class="col-12 mb-4">
                        <div class="property-list-item card border-0 shadow-sm">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <div class="position-relative h-100">
                                        <img src="{{ $item->thumbnail ? asset('storage/' . $item->thumbnail) : 'https://via.placeholder.com/500x300?text=No+Image' }}"
                                            class="img-fluid rounded-start h-100 w-100 object-fit-cover" alt="Property">
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
                                                class="badge bg-success d-flex align-items-center justify-content-center">{{ $item->category->name ?? 'Auction' }}</span>
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
                                            <a href="{{ route('auction.details') }}" class="btn btn-primary px-4">View Details</a>
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
