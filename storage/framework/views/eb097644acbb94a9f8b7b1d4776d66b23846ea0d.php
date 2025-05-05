

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">


<?php $__env->startSection('content'); ?>

<style type="text/css">

    .full-row {
    position: relative;
    width: 100%;
    padding: 50px 0;
}

.swiper-wrapper {
    display: flex;
    align-items: center; /* Vertically centers the images */
    justify-content: flex-start; /* Align items to the start to avoid gaps */
}

.swiper-slide {
    display: flex;
    justify-content: center; /* Centers content inside the slide */
    align-items: center; /* Vertically aligns content inside the slide */
    margin: 0; /* Remove the left-right margin between slides */
}

.swiper-slide img {
    max-height: 100px; /* Ensure consistent image height */
    width: auto; /* Adjusts width proportionally to maintain aspect ratio */
    object-fit: contain; /* Ensures the image fits within the box without being cropped */
    display: block;
    margin: 0 auto;
}

.slider-area {
    text-align: center;
}

  /* Ensure all blog cards have the same height */


/*.table-striped tbody tr:nth-of-type(2n+2) {
    background-color: #cb0505;
    color: #fff;
}

.table-striped tbody tr:nth-of-type(2n+1) {
    background-color: #007a00;
        color: #fff;

}*/

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
    width: 50%;
    display: flex;
    justify-content: center;
    margin-top: 20px;
        margin-left: 25%;

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

.view-all{
    float: inline-end;
    margin-bottom: 5px;
}

.table-light tr {
    background-color: #C70039;
}

.blog-start .blog-card {
    display: flex;
    flex-direction: column;
    height: 100%;
}

.find-property{
        margin-left: 25%;

}

.slider-banner1 {
    width: 100%;
    height: 400px;
    min-height: 400px;
}

.swiper-wrapper img{
    width: 60%!important;
}

/* Limit title to one line */
.blog-start .truncate-title {
    display: -webkit-box;
    -webkit-line-clamp: 1; /* Limits to 1 line */
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

/* Limit description to two lines */
.blog-start .truncate-description {
    display: -webkit-box;
    -webkit-line-clamp: 2; /* Limits to 2 lines */
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}

/* Ensure the 'Read More' link stays at the bottom */
.blog-start .blog-card .p-4 {
    flex-grow: 1; /* Makes content fill up available space */
    display: flex;
    flex-direction: column;
    justify-content: space-between; /* Space between the content and the 'Read More' button */
}

.blog-start .blog-card img {
    width: 100%;
    height: auto;
}

/* Ensure consistent layout for different screen sizes */
@media (min-width: 768px) {
    .blog-start .blog-card {
        height: auto;
    }
}


/* Media Queries */
@media (max-width: 768px) {
    .slider-banner1 {
        min-height: 400px;
        padding: 50px 0;
    }

    .find-property {
        font-size: 2rem;
    }

    .nav-underline {
        flex-direction: column;
        margin-bottom: 20px;
    }

    .nav-item {
        margin-bottom: 10px;
    }

    .search-bar {
        margin-top: 20px;
    }

    .input-group {
        flex-direction: column;
    }

    .input-item {
        margin-bottom: 10px;
    }

    .search-btn {
        width: 100%;
    }
}

@media (max-width: 576px) {
    .find-property {
        font-size: 1.5rem;
    }

    .input-item select,
    .input-item input {
        width: 100%;
    }
}

@media (min-width: 1023px) and (max-width: 1099px) {

.search-bar {
    width: 70%;
    display: flex;
    justify-content: center;
    margin-top: 20px;
    margin-left: 15%;
}

.find-property {
    margin-left: 16%;
}

}

@media (min-width: 1200px) and (max-width: 1299px) {

.search-bar {
    width: 58%;
    display: flex;
    justify-content: center;
    margin-top: 20px;
    margin-left: 20%;
}

}


@media (min-width: 850px) and (max-width: 899px) {
.search-bar {
    width: 94%;
    display: flex;
    justify-content: center;
    margin-top: 20px;
    margin-left: 3%;
}

.find-property {
    margin-left: 4%;
}
}

@media (min-width: 800px) and (max-width: 849px) {
.search-bar {
    width: 94%;
    display: flex;
    justify-content: center;
    margin-top: 20px;
    margin-left: 3%;
}
.find-property {
    margin-left: 4%;
}
}

@media (min-width: 900px) and (max-width: 950px) {
.search-bar {
    width: 95%;
    display: flex;
    justify-content: center;
    margin-top: 20px;
    margin-left: 3%;
}
.find-property {
    margin-left: 4%;
}
}

</style>


 <!--============== Slider Section Start ==============-->

       <div class="overlay-black w-100 slider-banner1 position-relative" style="background-image: url('assets/images/banner/2.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container h-100 position-relative">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-12">
                        <h1 class="mb-4 text-white find-property">Find Property</h1>

                    <div _ngcontent-pmm-c34="" class="search-tab d-flex align-items-center justify-content-center">
                        <ul _ngcontent-pmm-c34="" class="nav nav-underline">
                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li _ngcontent-pmm-c34="" class="nav-item ng-star-inserted">
                                <a _ngcontent-pmm-c34="" aria-current="page" href="<?php echo e(config('app.baseURL')); ?>/find-property?id=<?php echo e($categorys->id); ?>" class="nav-link li active"><?php echo e($categorys->name); ?></a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           <!--  <li _ngcontent-pmm-c34="" class="nav-item ng-star-inserted">
                                <a _ngcontent-pmm-c34="" aria-current="page" href="<?php echo e(config('app.baseURL')); ?>/find-property?id=6" class="nav-link li">Commercial</a>
                            </li>
                            <li _ngcontent-pmm-c34="" class="nav-item ng-star-inserted">
                                <a _ngcontent-pmm-c34="" aria-current="page" href="<?php echo e(config('app.baseURL')); ?>/find-property?id=4" class="nav-link li">Agricultural</a>
                            </li>
                            <li _ngcontent-pmm-c34="" class="nav-item ng-star-inserted">
                                <a _ngcontent-pmm-c34="" aria-current="page" href="<?php echo e(config('app.baseURL')); ?>/find-property?id=7" class="nav-link li">Industrial</a>
                            </li>
                            <li _ngcontent-pmm-c34="" class="nav-item ng-star-inserted">
                                <a _ngcontent-pmm-c34="" aria-current="page" href="<?php echo e(config('app.baseURL')); ?>/find-property?id=0" class="nav-link li">jwellery</a>
                            </li> -->
                        </ul>
                    </div>


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
        <!--============== Slider Section End ==============-->

         <!--============== Upcoming Auctions Properties Section Start ==============-->
        <div class="full-row bg-white">
            <div class="container">
               <!--  <div class="row">
                    <div class="col">
                        <h2 class="text-secondary double-down-line text-center">Upcoming Auctions</h2>
                        <span class="text-center mt-4 d-block mb-5">All of our Upcoming Auctions property of this month are include </span>
                    </div>
                </div> -->
                <!-- <div class="row">
                    <div class="col">
                        <div class="owl-carousel carousel-main">
                        <?php $__currentLoopData = $upcomingauction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $upcomingauctions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="search-details?id=<?php echo e($upcomingauctions->id); ?>">
                            <div class="featured-thumb hover-zoomer mb-4">
                                <div class="overlay-black overflow-hidden position-relative"> <img src="assets/images/thumbnail/01.jpg" alt="">
                                    <div class="featured bg-primary text-white">Verified</div>
                                    <div class="sale bg-secondary text-white">For Sale</div>
                                    <div class="price text-primary">₹ <?php echo e(number_format($upcomingauctions->property_price, 0, '.', ',')); ?></div>
                                    <div class="starmark text-white"><i class="far fa-star"></i></div>
                                </div>
                                <div class="featured-thumb-data shadow-one">
                                    <div class="p-4">
                                        <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> <?php echo e($upcomingauctions->taluka); ?> <?php echo e($upcomingauctions->district); ?></span> </div>
                                    <div class="px-4 pb-3 d-inline-block w-100">
                                       <div class="float-start" style="display: flex; align-items: center;">
    <img src="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($upcomingauctions->bank->icon); ?>" style="width: 20px; margin-right: 10px;">
    <?php echo e($upcomingauctions->bank->bank_name); ?>

</div>

                                   <div class="float-end">
    <i class="far fa-calendar-alt text-primary me-1"></i>
    <?php echo e(\Carbon\Carbon::parse($upcomingauctions->created_at)->diffForHumans()); ?>

</div>


                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </div>
                  </div>
                    </div> -->

                 <div class="row">
                    


               <div class="col-md-6">
    <div class="row">
        <div class="col">
            <h2 class="text-secondary double-down-line text-center">Live Auctions</h2>
            <span class="text-center mt-4 d-block mb-5">All of our Live Auctions properties for this month are included</span>
        </div>
                <?php if(!$upcomingauction->isEmpty()): ?>

        <div>
            <a href="<?php echo e(config('app.baseURL')); ?>/live-auction-search">
                <button class="btn btn-primary view-all">View All</button>
            </a>
        </div>
        <?php endif; ?>
    </div>

    <?php if($upcomingauction->isEmpty()): ?>
        <!-- Display image if no auction data is available -->
        <div class="text-center">
            <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/coming-soon.png" alt="No Auctions Available" style="max-width: 75%; height: auto;">
            <p>No auctions available at the moment. Please check back later.</p>
        </div>
    <?php else: ?>
        <!-- Table showing auction data -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped" style="border: 2px solid #ddd;">
                <thead class="table-light">
                    <tr>
                        <th scope="col" class="text-center" style="border: 2px solid #ddd;">Sr. No</th>
                        <th scope="col" class="text-center" style="border: 2px solid #ddd;">Auction ID</th>
                        <th scope="col" class="text-center" style="border: 2px solid #ddd;">Bank</th>
                        <th scope="col" class="text-center" style="border: 2px solid #ddd;">Location</th>
                        <th scope="col" class="text-center" style="border: 2px solid #ddd;">Auction Start Date</th>
                        <th scope="col" class="text-center" style="border: 2px solid #ddd;">Auction End Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $upcomingauction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $upcomingauctions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="text-center" style="border: 2px solid #ddd;"><?php echo e($loop->iteration + ($upcomingauction->currentPage() - 1) * $upcomingauction->perPage()); ?></td>
                        <td class="text-center" style="border: 2px solid #ddd;"><?php echo e($upcomingauctions->id); ?></td>
                        <td class="text-center" style="border: 2px solid #ddd;"><?php echo e($upcomingauctions->bank->bank_name); ?></td>
                        <td class="text-center" style="border: 2px solid #ddd;"><?php echo e($upcomingauctions->locality); ?></td>
                        <td class="text-center" style="border: 2px solid #ddd;"><?php echo e($upcomingauctions->auction_start_datetime); ?></td>
                        <td class="text-center" style="border: 2px solid #ddd;"><?php echo e($upcomingauctions->auction_end_datetime); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <?php if($upcomingauction->hasPages()): ?>
        <div class="pagination-container">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <!-- Previous Page Link -->
                    <?php if($upcomingauction->onFirstPage()): ?>
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                    <?php else: ?>
                        <li class="page-item">
                            <a class="page-link" href="<?php echo e($upcomingauction->previousPageUrl()); ?>" rel="prev">Previous</a>
                        </li>
                    <?php endif; ?>

                    <!-- Pagination Elements -->
                    <?php $__currentLoopData = $upcomingauction->links()->elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(is_string($element)): ?>
                            <li class="page-item disabled"><span class="page-link"><?php echo e($element); ?></span></li>
                        <?php endif; ?>
                        <?php if(is_array($element)): ?>
                            <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($page == $upcomingauction->currentPage()): ?>
                                    <li class="page-item active" aria-current="page"><span class="page-link"><?php echo e($page); ?></span></li>
                                <?php else: ?>
                                    <li class="page-item"><a class="page-link" href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <!-- Next Page Link -->
                    <?php if($upcomingauction->hasMorePages()): ?>
                        <li class="page-item">
                            <a class="page-link" href="<?php echo e($upcomingauction->nextPageUrl()); ?>" rel="next">Next</a>
                        </li>
                    <?php else: ?>
                        <li class="page-item disabled">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
        <?php endif; ?>
    <?php endif; ?>
</div>
 
   


           <div class="col-md-6">
    <div class="row">
        <div class="col">
            <h2 class="text-secondary double-down-line text-center">Verified Properties</h2>
            <span class="text-center mt-4 d-block mb-5">All of our Verified properties of this month are included</span>
        </div>
                        <?php if(!$auction->isEmpty()): ?>

        <div>
            <a href="<?php echo e(config('app.baseURL')); ?>/verify-auction">
                <button class="btn btn-primary view-all">View All</button>
            </a>
        </div>
        <?php endif; ?>
    </div>
     <?php if($auction->isEmpty()): ?>
        <!-- Display image if no auction data is available -->
        <div class="text-center">
            <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/coming-soon.png" alt="No Auctions Available" style="max-width: 100%; height: auto;">
            <p>No auctions available at the moment. Please check back later.</p>
        </div>
    <?php else: ?>

    <div class="table-responsive">
        <table class="table table-bordered table-striped" style="border: 2px solid #ddd;">
            <thead class="table-light">
                <tr style="background-color: purple!important;">
                    <th scope="col" class="text-center" style="border: 2px solid #ddd;">Sr. No</th>
                    <th scope="col" class="text-center" style="border: 2px solid #ddd;">Auction ID</th>
                    <th scope="col" class="text-center" style="border: 2px solid #ddd;">Bank</th>
                    <th scope="col" class="text-center" style="border: 2px solid #ddd;">Location</th>
                    <th scope="col" class="text-center" style="border: 2px solid #ddd;">Auction Start Date</th>
                    <th scope="col" class="text-center" style="border: 2px solid #ddd;">Auction End Date</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $auction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auctions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="text-center"><?php echo e($loop->iteration + ($auction->currentPage() - 1) * $auction->perPage()); ?></td> <!-- Adjusted for correct Sr. No -->
                    <td class="text-center"><?php echo e($auctions->id); ?></td>
                    <td class="text-center"><?php echo e($auctions->bank->bank_name); ?></td>
                    <td class="text-center"><?php echo e($auctions->locality); ?></td>
                    <td class="text-center"><?php echo e($auctions->auction_start_datetime); ?></td>
                    <td class="text-center"><?php echo e($auctions->auction_end_datetime); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <!-- Pagination Links -->
    <?php if($auction->hasPages()): ?> <!-- Show pagination only if there are pages -->
    <div class="pagination-container">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <!-- Previous Page Link -->
                <?php if($auction->onFirstPage()): ?>
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                <?php else: ?>
                    <li class="page-item">
                        <a class="page-link" href="<?php echo e($auction->previousPageUrl()); ?>" rel="prev">Previous</a>
                    </li>
                <?php endif; ?>

                <!-- Pagination Elements -->
                <?php $__currentLoopData = $auction->links()->elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- "Three Dots" Separator -->
                    <?php if(is_string($element)): ?>
                        <li class="page-item disabled"><span class="page-link"><?php echo e($element); ?></span></li>
                    <?php endif; ?>

                    <!-- Array Of Links -->
                    <?php if(is_array($element)): ?>
                        <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($page == $auction->currentPage()): ?>
                                <li class="page-item active" aria-current="page"><span class="page-link"><?php echo e($page); ?></span></li>
                            <?php else: ?>
                                <li class="page-item"><a class="page-link" href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <!-- Next Page Link -->
                <?php if($auction->hasMorePages()): ?>
                    <li class="page-item">
                        <a class="page-link" href="<?php echo e($auction->nextPageUrl()); ?>" rel="next">Next</a>
                    </li>
                <?php else: ?>
                    <li class="page-item disabled">
                        <a class="page-link" href="#">Next</a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
    <?php endif; ?> <!-- End of pagination check -->
    <?php endif; ?>
</div>



                 </div>
                </div>
            </div>
        </div>
        <!--============== Featured Properties Section End ==============-->

        

        <!--============== Tex Box Three Section Start ==============-->
        <!-- <div class="full-row bg-white p-0">
            <div class="container">
                <div class="divider py-5">
                    <div class="row row-cols-md-3 row-cols-1 g-4">
                        <div class="col">
                            <div class="text-center">
                                <div class="bg-primary rounded-circle round-icon d-table mx-auto text-white"><i class="flaticon-budget flat-medium" aria-hidden="true"></i></div>
                                <h4 class="my-4 text-secondary">Invest From $50000</h4>
                                <p>Malesuada in. Integer urna rutrum dui leo integer facilisi ante leo nonummy ante habitasse pulvinar penatibus.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-center">
                                <div class="bg-primary rounded-circle round-icon d-table mx-auto text-white"><i class="flaticon-diagram flat-medium" aria-hidden="true"></i></div>
                                <h4 class="my-4 text-secondary">Increase Per Annum</h4>
                                <p>Malesuada in. Integer urna rutrum dui leo integer facilisi ante leo nonummy ante habitasse pulvinar penatibus.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-center">
                                <div class="bg-primary rounded-circle round-icon d-table mx-auto text-white"><i class="flaticon-rent flat-medium" aria-hidden="true"></i></div>
                                <h4 class="my-4 text-secondary">Tenants In Place</h4>
                                <p>Malesuada in. Integer urna rutrum dui leo integer facilisi ante leo nonummy ante habitasse pulvinar penatibus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!--============== Tex Box Three Section End ==============-->

        <!--============== Verified Properties Section Start ==============-->
       <!--  <div class="full-row bg-white">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-secondary double-down-line text-center">Verified Properties</h2>
                        <span class="text-center mt-4 d-block mb-5">All of our Verified property of this month are include </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="owl-carousel carousel-main">
                        <?php $__currentLoopData = $auction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auctions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="search-details?id=<?php echo e($auctions->id); ?>">
                            <div class="featured-thumb hover-zoomer mb-4">
                                <div class="overlay-black overflow-hidden position-relative"> <img src="assets/images/thumbnail/01.jpg" alt="">
                                    <div class="featured bg-primary text-white">Verified</div>
                                    <div class="sale bg-secondary text-white">For Sale</div>
                                    <div class="price text-primary">₹ <?php echo e(number_format($auctions->property_price, 0, '.', ',')); ?> </div>
                                    <div class="starmark text-white"><i class="far fa-star"></i></div>
                                </div>
                                <div class="featured-thumb-data shadow-one">
                                    <div class="p-4">
                                        <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> <?php echo e($auctions->taluka); ?> <?php echo e($auctions->district); ?></span> </div>
                                    <div class="px-4 pb-3 d-inline-block w-100">
                                       <div class="float-start" style="display: flex; align-items: center;">
    <img src="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($auctions->bank->icon); ?>" style="width: 20px; margin-right: 10px;">
    <?php echo e($auctions->bank->bank_name); ?>

</div>

                                   <div class="float-end">
    <i class="far fa-calendar-alt text-primary me-1"></i>
    <?php echo e(\Carbon\Carbon::parse($auctions->created_at)->diffForHumans()); ?>

</div>


                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </div> -->
                    <!-- </div>
                </div>
            </div>
        </div> -->
        <!--============== Featured Properties Section End ==============-->

        <!--============== Happy Living Section Start ==============-->
        <!-- <div class="full-row living bg-one overlay-secondary-half" style="background-image: url('assets/images/haddyliving.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="living-list pe-4">
                            <h3 class="pb-4 mb-3 text-white">Make life for happy living</h3>
                            <ul>
                                <li class="mb-4 text-white d-flex">
                                    <i class="flaticon-reward flat-medium float-start d-table me-4 text-primary" aria-hidden="true"></i>
                                    <div class="ps-2">
                                        <h5 class="mb-3">Experience Quality</h5>
                                        <p>Ad non vivamus Elementum eget fringilla venenatis quisque, maecenas adipiscing aliquet justo. Libero. Gravida. Sapien, dolor nostra sem. Rutrum conubia inceptos egestas dolor class.</p>
                                    </div>
                                </li>
                                <li class="mb-4 text-white d-flex">
                                    <i class="flaticon-real-estate flat-medium float-start d-table me-4 text-primary" aria-hidden="true"></i>
                                    <div class="ps-2">
                                        <h5 class="mb-3">Experience Quality</h5>
                                        <p>Ad non vivamus Elementum eget fringilla venenatis quisque, maecenas adipiscing aliquet justo. Libero. Gravida. Sapien, dolor nostra sem. Rutrum conubia inceptos egestas dolor class.</p>
                                    </div>
                                </li>
                                <li class="mb-4 text-white d-flex">
                                    <i class="flaticon-seller flat-medium float-start d-table me-4 text-primary" aria-hidden="true"></i>
                                    <div class="ps-2">
                                        <h5 class="mb-3">Experience Quality</h5>
                                        <p>Ad non vivamus Elementum eget fringilla venenatis quisque, maecenas adipiscing aliquet justo. Libero. Gravida. Sapien, dolor nostra sem. Rutrum conubia inceptos egestas dolor class.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!--============== Happy Living Section End ==============-->



        <!-- <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="slider-area property-slider1">
                <div class="swiper th-slider property-thumb-slider" data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}},"autoplayDisableOnInteraction":"true"}'>
                    <div class="swiper-wrapper">
   
    <div class="swiper-slide">
        <div class="property-slider-img">
            <div class="row" style="flex-wrap: nowrap">
            <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/bank/sbi.png" alt="Dummy Image" style="width: 20%;">

            <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/bank/sbi.png" alt="Dummy Image" style="width: 20%;">
            <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/bank/sbi.png" alt="Dummy Image" style="width: 20%;">
            <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/bank/sbi.png" alt="Dummy Image" style="width: 20%;">
            <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/bank/sbi.png" alt="Dummy Image" style="width: 20%;">
            <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/bank/sbi.png" alt="Dummy Image" style="width: 20%;">



            

            </div>


        </div>
    </div>
  
                    </div>
                </div>

                <button data-slider-prev="#propertySlider" class="slider-arrow style3 slider-prev"><img src="assets/img/icon/arrow-left.svg" alt="icon"></button>
                <button data-slider-next="#propertySlider" class="slider-arrow style3 slider-next"><img src="assets/img/icon/arrow-right.svg" alt="icon"></button>
            </div>

    </div>
</section> -->



 <!--============== Blog Section Start ==============-->
      <div class="full-row bg-white">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-secondary double-down-line text-center">Loan Partners</h2>
                <span class="text-center mt-4 d-block mb-5">
                    The most recent posted articles and valuable tips.
                </span>
            </div>
        </div>

        <div class="row">
            <div class="slider-area property-slider1">
                <!-- Swiper Container -->
                <div class="swiper th-slider property-thumb-slider">
                    <div class="swiper-wrapper">
                        <!-- Swiper Slide 1 -->
                        <div class="swiper-slide">
                            <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/bank/sbi.png" alt="Dummy Image">
                        </div>
                        <!-- Swiper Slide 2 -->
                        <div class="swiper-slide">
                            <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/bank/kotak.png" alt="Dummy Image">
                        </div>
                        <!-- Swiper Slide 3 -->
                        <div class="swiper-slide">
                            <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/bank/icici.png" alt="Dummy Image">
                        </div>
                        <!-- Swiper Slide 4 -->
                        <div class="swiper-slide">
                            <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/bank/hdfc.png" alt="Dummy Image">
                        </div>

                        <div class="swiper-slide">
                            <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/bank/maharashtra.png" alt="Dummy Image">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/bank/saraswatbank.png" alt="Dummy Image">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/bank/central.png" alt="Dummy Image">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/bank/pnb.png" alt="Dummy Image">
                        </div>

                        


                         
                    </div>
                </div>
                <!-- Navigation Buttons -->
                <button class="slider-arrow style3 slider-prev" data-slider-prev="#propertySlider"></button>
                <button class="slider-arrow style3 slider-next" data-slider-next="#propertySlider"></button>
            </div>
        </div>
    </div>
</div>


                       
       
        <!--============== How it work Section Start ==============-->
       <!--  <div class="full-row bg-white">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-secondary double-down-line text-center">How It Work</h2>
                        <span class="text-center mt-4 d-block mb-5">We listed our oppertunity and servies as a real estate company</span> </div>
                </div>
                <div class="row row-cols-md-3 row-cols-1">
                    <div class="col">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="left-arrow">
                                <div class="icon-area">
                                    <div class="bg-primary text-white rounded-circle position-absolute">1</div>
                                    <i class="flaticon-investor flat-medium icon-primary"></i>
                                </div>
                            </div>
                            <h5 class="text-secondary mt-5 mb-4">Discussion</h5>
                            <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="left-arrow">
                                <div class="icon-area">
                                    <div class="bg-primary text-white rounded-circle position-absolute">2</div>
                                    <i class="flaticon-search flat-medium icon-primary"></i>
                                </div>
                            </div>
                            <h5 class="text-secondary mt-5 mb-4">Files Review</h5>
                            <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="left-arrow">
                                <div class="icon-area">
                                    <div class="bg-primary text-white rounded-circle position-absolute">3</div>
                                    <i class="flaticon-handshake flat-medium icon-primary"></i>
                                </div>
                            </div>
                            <h5 class="text-secondary mt-5 mb-4">Acquire</h5>
                            <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="left-arrow">
                                <div class="icon-area">
                                    <div class="bg-primary text-white rounded-circle position-absolute">4</div>
                                    <i class="flaticon-strategy flat-medium icon-primary"></i>
                                </div>
                            </div>
                            <h5 class="text-secondary mt-5 mb-4">Managment</h5>
                            <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="left-arrow">
                                <div class="icon-area">
                                    <div class="bg-primary text-white rounded-circle position-absolute">5</div>
                                    <i class="flaticon-diagram flat-medium icon-primary"></i>
                                </div>
                            </div>
                            <h5 class="text-secondary mt-5 mb-4">Survey</h5>
                            <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="left-arrow">
                                <div class="icon-area">
                                    <div class="bg-primary text-white rounded-circle position-absolute">6</div>
                                    <i class="flaticon-money flat-medium icon-primary"></i>
                                </div>
                            </div>
                            <h5 class="text-secondary mt-5 mb-4">Collect</h5>
                            <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!--============== How it work Section End ==============-->

        

        <!--============== Positive Thinking Section Start ==============-->
        <!-- <div class="full-row overlay-secondary" style="background-image: url('assets/images/making.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat; background-attachment: fixed;">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="text-white">
                            <h2 class="text-white double-down-line-left position-relative pb-4 mb-5"><span class="h4 d-block">Start Study</span>Making your positive thinking</h2>
                            <p>Malesuada hac lectus. Ligula donec. Sodales odio conubia facilisis, sagittis velit rutrum sodales, conubia. Curae; nunc conubia accumsan vitae congue ornare ultricies bibendum justo. Mus sit porta luctus ultricies platea duis
                                cum aliquam tristique gravida accumsan orci velit lobortis posuere, eu ullamcorper quam eget. Tempor urna, luctus leo parturient augue.</p>
                            <a class="btn btn-primary mt-4" href="#">Download Brochure</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!--============== Positive Thinking Section End ==============-->

        <!--============== Blog Section Start ==============-->
       <!--  <div class="full-row bg-white">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-secondary double-down-line text-center">Recent Blogs</h2>
                        <span class="text-center mt-4 d-block mb-5">The most recent posted articles and valuable tips.</span> </div>
                </div>
                <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4 blog-start">

    <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blogs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col">
            <div class="hover-zoomer thumb-two shadow-one blog-card">
                <div class="overlay-black overflow-hidden position-relative"> 
                    <img src="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($blogs->image); ?>" alt="image">
                    <div class="date text-white position-absolute z-index-9"><?php echo e(\Carbon\Carbon::parse($blogs->created_at)->format('F j, Y')); ?></div>
                </div>
                <div class="p-4">
                    <h6 class="text-secondary hover-text-primary mb-4 truncate-title">
                        <a href="blog-details.html"><?php echo e($blogs->title); ?></a>
                    </h6>
                    <p class="truncate-description"><?php echo e($blogs->description); ?></p>
                    <a class="mt-3 text-primary hover-text-secondary" href="<?php echo e(config('app.baseURL')); ?>/blogdetails?id=<?php echo e($blogs->id); ?>">Read More</a>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->
              <!--     <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blogs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col">
                        <div class="hover-zoomer thumb-two shadow-one">
                            <div class="overlay-black overflow-hidden position-relative"> <img src="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($blogs->image); ?>" alt="image">
                                <div class="date text-white position-absolute z-index-9"><?php echo e(\Carbon\Carbon::parse($blogs->created_at)->format('F j, Y')); ?>

</div>
                            </div>
                            <div class="p-4">
                                <h6 class="text-secondary hover-text-primary mb-4"><a href="blog-details.html"><?php echo e($blogs->title); ?>.</a></h6>
                                <p><?php echo e($blogs->description); ?></p>
                                <a class="mt-3 text-primary hover-text-secondary" href="">Read More</a>
                            </div>
                        </div>
                    </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->
                    <!-- <div class="col">
                        <div class="hover-zoomer thumb-two shadow-one">
                            <div class="overlay-black overflow-hidden position-relative"> <img src="assets/images/blog/02.jpg" alt="image">
                                <div class="date text-white position-absolute z-index-9">November 10, 2018</div>
                            </div>
                            <div class="p-4">
                                <h6 class="text-secondary hover-text-primary mb-4"><a href="blog-details.html">Your investment is our heart, so you can stay in relax.</a></h6>
                                <p>Nunc tempus, auctor mauris montes, attis fringilla dignissim. Vitae habitant estibulum quisque commodo.</p>
                                <a class="mt-3 text-primary hover-text-secondary" href="#">Read More</a>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col">
                        <div class="hover-zoomer thumb-two shadow-one">
                            <div class="overlay-black overflow-hidden position-relative"> <img src="assets/images/blog/03.jpg" alt="image">
                                <div class="date text-white position-absolute z-index-9">October 31, 2018</div>
                            </div>
                            <div class="p-4">
                                <h6 class="text-secondary hover-text-primary mb-4"><a href="blog-details.html">What do you thinking for your family house planing.</a></h6>
                                <p>Nunc tempus, auctor mauris montes, attis fringilla dignissim. Vitae habitant estibulum quisque commodo.</p>
                                <a class="mt-3 text-primary hover-text-secondary" href="#">Read More</a>
                            </div>
                        </div>
                    </div> -->
                <!-- </div>
            </div>
        </div> -->
        <!--============== Blog Section End ==============-->

        <!--============== Massage Box One Section Start ==============-->
       <!--  <div class="full-row bg-primary py-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h3 class="text-white text-center line-height-50">How to Become Easy and Flexible to Living in Los Angles. Get A Comfortable Appartment in Budget.</h3>
                    </div>
                </div>
            </div>
        </div> -->
        <!--============== Massage Box One Section End ==============-->


        <div class="full-row bg-white">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-secondary double-down-line text-center">Services</h2>
                        <span class="text-center mt-4 d-block mb-5">We listed our oppertunity and servies as a real estate company</span> 
                    </div>
                   </div>

                <div class="row">
                    <div class="col">
                        <div class="price-table1 py-10">
                            <div class="row row-cols-md-3 row-cols-1 g-4">
        <?php $__currentLoopData = $premium; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $premiumItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col">
            <div class="pricing-table text-center bg-white shadow-one">
                <div class="price-top-one bg-gray position-relative">
                    <h4 class="text-secondary" style="color:purple!important;">Basic</h4>
                    <h3 class="text-primary" style="color:purple!important;">₹ <?php echo e($premiumItem->price); ?></h3>
                    <p  style="color:purple!important;"><?php echo e($premiumItem->description); ?></p>
                </div>
                <ul class="pricing-content-one position-relative z-index-9">
                    <?php if($premiumItem->category_listing==1): ?>
                    <li>One Category Listing</li>
                    <?php else: ?>
                    <li>Unlimited Category Listing</li>
                    <?php endif; ?>
                    <?php if($premiumItem->email_support==1): ?>
                    <li>Email Support</li>
                    <?php endif; ?>
                    <li>30 Days Free</li>

                    <?php if($premiumItem->certification_type==1): ?>
                    <li>Primary Certification</li>
                    <?php else: ?>
                    <li>Premium Certification</li>
                    <?php endif; ?>

                    <?php if($premiumItem->search_engine_type==1): ?>
                    <li>Free Search Engine</li>
                    <?php else: ?>
                    <li>High Rank Search Engine</li>
                    <?php endif; ?>

                    <?php if($premiumItem->refund_instruction==1): ?>
                    <li>100% Payment Gurantee</li>
                    <?php else: ?>
                    <li>No Payment Guarantee</li>
                    <?php endif; ?>
                </ul>

                <?php if(auth()->guard()->guest()): ?>
                  <a class="btn btn-primary mt-4 mb-5" href="<?php echo e(config('app.baseURL')); ?>/register">Register Now</a>
                <?php else: ?>
                  <a class="btn btn-primary mt-4 mb-5" href="javascript:void(0);" onclick="showConfirmationModal(<?php echo e($premiumItem->id); ?>)">Buy Now</a>               
                 <?php endif; ?>            
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Swiper
    var swiper = new Swiper('.th-slider', {
        effect: 'slide',
        loop: true,  // Enable continuous loop without any gaps
        slidesPerView: 'auto',  // Dynamically show as many slides as fit
        spaceBetween: 0,  // Set space between slides to 0 for continuous scrolling
        autoplay: {
            delay: 0,  // No delay for continuous scroll
            disableOnInteraction: false,  // Keep autoplay running on interaction
        },
        speed: 3000,  // Adjust speed for smooth scrolling (3 seconds for a full transition)
        loopedSlides: 6,  // Ensures continuous scrolling without gap
        breakpoints: {
            0: {
                slidesPerView: 2,  // 2 slides on small screens
                spaceBetween: 0,  // No space between on small screens
            },
            576: {
                slidesPerView: 3,  // 3 slides for medium screens
            },
            768: {
                slidesPerView: 4,  // 4 slides for larger screens
            },
            992: {
                slidesPerView: 5,  // 5 slides for larger devices
            },
            1200: {
                slidesPerView: 6,  // 6 slides for wide screens
            },
        },
        navigation: {
            nextEl: '.slider-next',  // Next button
            prevEl: '.slider-prev',  // Previous button
        },
    });
});
           
</script>






<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\auction\resources\views/index.blade.php ENDPATH**/ ?>