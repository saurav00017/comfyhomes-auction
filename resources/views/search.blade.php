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
            <!-- Search and Filter -->
            <div class="row mb-4">
                <div class="col-md-8">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search properties...">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search me-2"></i> Search
                        </button>
                    </div>
                </div>
                <div class="col-md-4">
                    <select class="form-select">
                        <option selected>Sort by: Newest First</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                    </select>
                </div>
            </div>

            <!-- Property List -->
            <div class="row">
                <!-- Property Item 1 -->

                @forelse ($property as $item)
                    <div class="col-12 mb-4">
                        <div class="property-list-item card border-0 shadow-sm">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <div class="position-relative h-100">
                                        <img src="{{ $item->thumbnail ? asset('storage/' . $item->thumbnail) : 'https://via.placeholder.com/500x300?text=No+Image' }}"
                                            class="img-fluid rounded-start h-100 w-100 object-fit-cover" alt="Property">
                                        @if ($item->verified)
                                            <div class="position-absolute top-0 start-0 m-2">
                                                <span class="badge bg-primary">Verified</span>
                                            </div>
                                        @endif
                                        <div class="position-absolute top-0 end-0 m-2">
                                            <button class="btn btn-sm btn-light rounded-circle">
                                                <i class="far fa-heart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body h-100 d-flex flex-column">
                                        <div class="d-flex justify-content-between">
                                            <h4 class="card-title text-primary">{{ $item->property_type_one ?? 'Property' }}</h4>
                                            <span class="badge bg-success">{{ $item->category->name ?? 'Auction' }}</span>
                                        </div>
                                        <p class="text-muted mb-2">
                                            <i class="fas fa-map-marker-alt text-primary me-1"></i> {{ $item->locality }}, {{ $item->district }}
                                        </p>

                                        <div class="property-features mb-3">
                                            <div class="row g-2">
                                                <div class="col-4">
                                                    <div class="bg-light p-2 rounded text-center">
                                                        <small class="d-block text-muted">Area</small>
                                                        <span class="fw-bold">{{ $item->area ?? '-' }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="bg-light p-2 rounded text-center">
                                                        <small class="d-block text-muted">EMD</small>
                                                        <span class="fw-bold">₹{{ number_format($item->emd_amount) }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="bg-light p-2 rounded text-center">
                                                        <small class="d-block text-muted">Possession</small>
                                                        <span class="fw-bold">{{ $item->possession }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-auto d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ $item->bank->logo_url ?? 'https://via.placeholder.com/24' }}" alt="Bank" width="24"
                                                    class="me-2">
                                                <span>{{ $item->bank->name ?? $item->bank_name }}</span>
                                            </div>
                                            <div>
                                                <h4 class="text-primary mb-0">₹{{ number_format($item->property_price) }}</h4>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end mt-3">
                                            <a href="#" class="btn btn-primary px-4">View Details</a>
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


    <script type="text/javascript">
        $(document).on('click', '.starmark', function() {
            var propertyId = $(this).data('property-id'); // Get property ID from data attribute
            var element = this;
            var isSelected = $(element).find('i').hasClass('wishlist-selected');

            // Toggle the visual state of the star
            if (isSelected) {
                $(element).find('i').removeClass('wishlist-selected').css('color', 'white'); // Deselect
            } else {
                $(element).find('i').addClass('wishlist-selected').css('color', 'purple'); // Select
            }

            // Determine the action based on the current state (add or remove)
            var url = isSelected ? "{{ config('app.baseURL') }}/remove-from-wishlist" :
                "{{ config('app.baseURL') }}/add-to-wishlist";

            // Send AJAX request to add or remove from wishlist
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    property_id: propertyId,
                    _token: '{{ csrf_token() }}' // CSRF token for security
                },
                success: function(response) {
                    if (response.status === 'success') {
                        if (isSelected) {
                            toastr.success(
                                'Property removed from wishlist'); // Toastr success alert for removal
                        } else {
                            toastr.success(
                                'Property added to wishlist'); // Toastr success alert for addition
                        }
                    } else {
                        toastr.error('Failed to update wishlist'); // Toastr error alert
                    }
                },
                error: function(xhr) {
                    toastr.error('Error: ' + xhr.responseText, 'Error'); // Toastr error alert
                }
            });
        });



        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
    </script>
@endsection
