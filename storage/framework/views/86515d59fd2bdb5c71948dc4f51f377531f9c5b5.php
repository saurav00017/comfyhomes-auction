
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<?php $__env->startSection('content'); ?>

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
                <div class="col-12 mb-4">
                    <div class="property-list-item card border-0 shadow-sm">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="position-relative h-100">
                                    <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" 
                                         class="img-fluid rounded-start h-100 w-100 object-fit-cover" alt="Property">
                                    <div class="position-absolute top-0 start-0 m-2">
                                        <span class="badge bg-primary">Verified</span>
                                    </div>
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
                                        <h4 class="card-title text-primary">Luxury Villa</h4>
                                        <span class="badge bg-success">IBC Auction</span>
                                    </div>
                                    <p class="text-muted mb-2">
                                        <i class="fas fa-map-marker-alt text-primary me-1"></i> Bandra West, Mumbai
                                    </p>
                                    
                                    <div class="property-features mb-3">
                                        <div class="row g-2">
                                            <div class="col-4">
                                                <div class="bg-light p-2 rounded text-center">
                                                    <small class="d-block text-muted">Area</small>
                                                    <span class="fw-bold">2,500 sqft</span>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="bg-light p-2 rounded text-center">
                                                    <small class="d-block text-muted">EMD</small>
                                                    <span class="fw-bold">₹50,000</span>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="bg-light p-2 rounded text-center">
                                                    <small class="d-block text-muted">Possession</small>
                                                    <span class="fw-bold">Physical</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="mt-auto d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <img src="https://logo.clearbit.com/sbi.co.in" alt="Bank" width="24" class="me-2">
                                            <span>SBI Bank</span>
                                        </div>
                                        <div>
                                            <h4 class="text-primary mb-0">₹2.5 Cr</h4>
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
                
                <!-- Property Item 2 -->
                <div class="col-12 mb-4">
                    <div class="property-list-item card border-0 shadow-sm">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="position-relative h-100">
                                    <img src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" 
                                         class="img-fluid rounded-start h-100 w-100 object-fit-cover" alt="Property">
                                    <div class="position-absolute top-0 end-0 m-2">
                                        <button class="btn btn-sm btn-light rounded-circle">
                                            <i class="fas fa-heart text-danger"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body h-100 d-flex flex-column">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="card-title text-primary">Commercial Space</h4>
                                        <span class="badge bg-warning text-dark">DRT Auction</span>
                                    </div>
                                    <p class="text-muted mb-2">
                                        <i class="fas fa-map-marker-alt text-primary me-1"></i> Connaught Place, Delhi
                                    </p>
                                    
                                    <div class="property-features mb-3">
                                        <div class="row g-2">
                                            <div class="col-4">
                                                <div class="bg-light p-2 rounded text-center">
                                                    <small class="d-block text-muted">Area</small>
                                                    <span class="fw-bold">1,800 sqft</span>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="bg-light p-2 rounded text-center">
                                                    <small class="d-block text-muted">EMD</small>
                                                    <span class="fw-bold">₹75,000</span>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="bg-light p-2 rounded text-center">
                                                    <small class="d-block text-muted">Possession</small>
                                                    <span class="fw-bold">Symbolic</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="mt-auto d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <img src="https://logo.clearbit.com/hdfcbank.com" alt="Bank" width="24" class="me-2">
                                            <span>HDFC Bank</span>
                                        </div>
                                        <div>
                                            <h4 class="text-primary mb-0">₹4.2 Cr</h4>
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
            </div>
            
            <!-- Pagination -->
            <nav aria-label="Page navigation" class="mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">
                            <i class="fas fa-angle-left"></i>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
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
            var url = isSelected ? "<?php echo e(config('app.baseURL')); ?>/remove-from-wishlist" :
                "<?php echo e(config('app.baseURL')); ?>/add-to-wishlist";

            // Send AJAX request to add or remove from wishlist
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    property_id: propertyId,
                    _token: '<?php echo e(csrf_token()); ?>' // CSRF token for security
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


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\auction-comfyhomes\resources\views/search.blade.php ENDPATH**/ ?>