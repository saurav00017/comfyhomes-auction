
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<?php $__env->startSection('content'); ?>

<style type="text/css">



.featured-thumb .starmark .fa-shopping-cart{

        margin-left: 25%;

}


    .wishlist-selected i {
    color: purple !important;  /* Changes star to purple */
}

.views{
        margin-left: 4%;
}

    .page-banner{

        margin-top: 12%;

    }

    .vertical-line {
        border-left: 1px solid #ccc; /* Line style */
        height: 30px; /* Adjust height as needed */
        margin: 0 10px; /* Space around the line */
    }


#validationDefault03{
    width: 229px;
}


input::placeholder {
        color: #333;
    }


    .property_type{
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

input[type="text"], select {
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

input[type="text"]{

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










}

</style>

 <!--============== Banner Section Start ==============-->
        <div class="page-banner full-row bg-gray py-5">
            <div class="container">
                <div class="row row-cols-md-2 row-cols-1 g-3">
                    <div class="col">
                        <h3 class="page-name text-secondary m-0">Auction Property</h3>
                    </div>
                    <div class="col">
                        <nav class="float-start float-md-end">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="index-1.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item active">Auction Property</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Banner Section End ==============-->

        <!--============== Advance Search Section Start ==============-->
        <div class="full-row bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 order-lg-2">
                        <div class="sidebar-widget">
<!--                             <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Advance Search</h4>
 -->                           <!--  <form method="post" action="action-page-post.html">
                                <div class="row g-2">
                                    <div class="col-md-12">
                                        <div class="d-inline-block text-ordinary hover-text-primary formicon"> <a class="checkbox-collapse" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Additional Features</a> </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="collapse" id="multiCollapseExample1">
                                                    <div class="card card-body px-0 border-0">
                                                        <div class="row">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </form> -->
                        </div>
                        
                        
                    </div>
                    <div class="col-lg-10 order-lg-1">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="pb-4 mt-md-50">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- <form class="selecting-command d-flex flex-wrap" method="get">
                                                <label class="me-10">Shorts By :</label>
                                                <div class="select-arrow me-30">
                                                    <select class="form-control form-select bg-gray">
                                                        <option>Default Order</option>
                                                        <option>Newest First</option>
                                                        <option>Oldest First</option>
                                                        <option>Top Rated</option>
                                                        <option>Most Popular</option>
                                                    </select>
                                                </div>
                                                <label>1-10 of 25 results</label>
                                            </form> -->

                                         <!--    <form method="get" action="<?php echo e(config('app.baseURL')); ?>/search">
                            <div class="row g-3">
                                <div class="col-md-6 col-lg-2">
                                    <div class="select-arrow">
                                        <select class="form-control form-select bg-white" name="property_type" style="    border: 1px solid #ececec;">
                                                <option value="">All Category</option>
                                                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($categorys->id); ?>"><?php echo e($categorys->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-6">
                                    <input type="text" class="form-control" id="validationDefault03" placeholder="Enter Neighborhood, City or State" required="" name="city">
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <button type="submit" class="btn btn-primary w-100">Search Property</button>
                                </div>
                            </div>
                        </form> -->

                        <form method="get" action="<?php echo e(config('app.baseURL')); ?>/search">
                    <div class="search-bar">
    <div class="input-group">
       <!--  <div class="input-item">
            <i class="fas fa-map-marker-alt"></i>
            <input type="text" placeholder="Enter City">
        </div> -->
        <div class="input-item">
            <i class="fas fa-home"></i>
             <select class="property_type" name="property_type">
                                                <option value="">All Category</option>
                                                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($categorys->id); ?>"><?php echo e($categorys->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
        </div>
               <div class="vertical-line"></div>


         <div class="input-item">
            <input type="text" id="validationDefault03" placeholder="Enter City or State Name" required="" name="city">
        </div>
        <button class="search-btn" style="border-radius: 28px;">
            <i class="fas fa-search"></i> Search
        </button>
    </div>
</div>
</form>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                       <div class="row row-cols-1 g-4">
                                        <?php $__currentLoopData = $property; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $propertys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col">
                                            <div class="featured-thumb list list2 hover-zoomer">
                                                <div class="overlay-black overflow-hidden position-relative image-area"> 
                                                    <img src="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($propertys->property_image); ?>" alt="" style="height:318px;">
                                                    <?php if($propertys->featured==1): ?>
                                                    <div class="featured bg-primary text-white" style="background-color:#25d366!important;">Verified</div>
                                                    <?php endif; ?>
                                                    <div class="price text-primary">₹ <?php echo e(number_format($propertys->property_price, 0, '.', ',')); ?></div>
<!--                                                     <div class="starmark text-white"><i class="far fa-star"></i></div>
 -->                
<!--  <div class="starmark text-white" data-property-id="<?php echo e($propertys->id); ?>" onclick="toggleWishlist(this)">
    <i class="far fa-star"></i>
</div> -->


<div class="starmark text-white" data-property-id="<?php echo e($propertys->id); ?>">
    <i class="fas fa-shopping-cart <?php echo e(in_array($propertys->id, $userWishlist) ? 'wishlist-selected' : ''); ?>" 
       style="color: <?php echo e(in_array($propertys->id, $userWishlist) ? 'purple' : 'white'); ?>;"></i><br>

           <span style="font-size:10px;">Add to Cart</span>

</div>




                                </div>
                                                <div class="featured-thumb-data shadow-one">
                                                    <div></div>
                                                     
                                                    <div class="p-4">
<div class="d-flex justify-content-between align-items-center" style="margin-right: 5%;">
    <h5 class="text-secondary hover-text-primary mb-2 mb-lg-0" style="color:purple!important;"><?php echo e($propertys->subCategory->subcategory); ?></h5>
    <div>
        <?php if($propertys->category == 1): ?>
            <span class="location">IBC Auction</span>
        <?php endif; ?> 
        <?php if($propertys->category == 2): ?>
            <span class="location">Car Auction</span>
        <?php endif; ?> 
        <?php if($propertys->category == 3): ?>
            <span class="location">Drt Auction</span>
        <?php endif; ?> 
        <?php if($propertys->category == 4): ?>
            <span class="location">Jewellery Auction</span>
        <?php endif; ?> 
    </div>
</div>


                                                        <span class="location"><i class="fas fa-map-marker-alt text-primary" style="color:purple!important;"></i> <?php echo e($propertys->locality); ?></span> </div>
                                                    <div class="bg-gray quantity px-4 pt-4">
                                                        <ul>
                                                            <?php if($propertys->category!=4): ?>
                                                            <li><span><?php echo e($propertys->area); ?></span> Sqft</li>
                                                            <li><span></span></li>
                                                            <?php if($propertys->possession==1): ?>
                                                            <li>Physical Possession</li>
                                                            <?php else: ?>
                                                            <li>Symbolic Possession</li>
                                                            <?php endif; ?>
                                                            <?php endif; ?>
                                                            <li><span>EMD ₹</span> <?php echo e($propertys->emd_amount); ?> </li>
                                                            
                                                        </ul>
                                                    </div>
                                                   <div class="p-4 d-inline-block w-100 author d-flex justify-content-between align-items-center">
    <div class="d-flex align-items-center">
        <img src="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($propertys->bank->icon); ?>" alt="Icon" style="width: 20px; margin-right: 8px;">
        <span><?php echo e($propertys->bank->bank_name); ?></span>
    </div>
    <div>
        <i class="far fa-calendar-alt text-primary mr-1" style="color: purple!important;"></i> 
        <?php echo e(\Carbon\Carbon::parse($propertys->created_at)->diffForHumans()); ?>

    </div>
</div>






                                                    <div class="col-md-3" style=" float: inline-end; padding: 1%;">
                            <a class="btn btn-primary d-table ms-auto viewdetails" href="<?php echo e(config('app.baseURL')); ?>/search-details?id=<?php echo e($propertys->id); ?>'">View Details</a>
                        </div>
                        <div class="views">
    <i class="far fa-user" style="color: purple;"></i> <?php echo e($propertys->auction_view); ?> views
</div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                   
                                    </div> 
                         <div class="row justify-content-center my-5">
    <div class="col-auto">
        <?php if($property->hasPages()): ?>
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    
                    <?php if($property->onFirstPage()): ?>
                        <li class="page-item disabled"><span class="page-link">Previous</span></li>
                    <?php else: ?>
                        <li class="page-item"><a class="page-link" href="<?php echo e($property->previousPageUrl()); ?>" rel="prev">Previous</a></li>
                    <?php endif; ?>

                    
                    <?php $__currentLoopData = $property->getUrlRange(1, $property->lastPage()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($page == $property->currentPage()): ?>
                            <li class="page-item active" aria-current="page"><span class="page-link"><?php echo e($page); ?></span></li>
                        <?php else: ?>
                            <li class="page-item"><a class="page-link" href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    
                    <?php if($property->hasMorePages()): ?>
                        <li class="page-item"><a class="page-link" href="<?php echo e($property->nextPageUrl()); ?>" rel="next">Next</a></li>
                    <?php else: ?>
                        <li class="page-item disabled"><span class="page-link">Next</span></li>
                    <?php endif; ?>
                </ul>
            </nav>
        <?php endif; ?>
    </div>
</div>
                    </div>
                </div>
            </div>
        </div>
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
    // if (isSelected) {
    //     $(element).find('i').removeClass('wishlist-selected').css('color', 'white');  // Deselect
    // } else {
    //     $(element).find('i').addClass('wishlist-selected').css('color', 'purple');  // Select
    // }

    // Determine the action based on the current state (add or remove)
    var url = isSelected ? "<?php echo e(config('app.baseURL')); ?>/remove-from-wishlist" : "<?php echo e(config('app.baseURL')); ?>/add-to-wishlist";

    // Send AJAX request to add or remove from wishlist
    $.ajax({
        url: url,
        type: 'POST',
        data: {
            property_id: propertyId,
            _token: '<?php echo e(csrf_token()); ?>'  // CSRF token for security
        },
        success: function(response) {
            if (response.status === 'success') {
                if (isSelected) {
                                                $(element).find('i').removeClass('wishlist-selected').css('color', 'white');  // Deselect

                    toastr.success('Property removed from wishlist');  // Toastr success alert for removal
                } else {
        $(element).find('i').addClass('wishlist-selected').css('color', 'purple');  // Select

                    toastr.success('Property added to wishlist');  // Toastr success alert for addition
                }
            } else {
                toastr.error('Failed to update wishlist');  // Toastr error alert
            }
        },
        error: function(xhr) {
            if (xhr.status === 401) {
                // Redirect to login page if user is not logged in
                window.location.href = "<?php echo e(route('login')); ?>";
            } else {
                toastr.error('Error: ' + xhr.responseText, 'Error');  // Toastr error alert
            }
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/comfyhomes/public_html/auction/resources/views/search.blade.php ENDPATH**/ ?>