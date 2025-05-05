
 <div id="page-wrapper" class="bg-white">
    <!--============== Header Section Start ==============-->
        <header id="header" class="w-100 nav-on-top">
<!--             <div class="top-header bg-white py-4">
 -->               <!--  <div class="container">
                    <div class="row align-items-center"> -->
                       <!--  <div class="col-md-2">
                            <div class="logo pe-xl-4"> <img src="assets/images/logo/vebsigns.png" alt=""> </div>
                        </div> -->
                      <!--   <div class="col-md-3">
                            <i class="fas fa-phone-alt font-small text-primary float-start me-3" aria-hidden="true"></i>
                            <div class="d-table">
                                <h6 class="text-secondary line-height-normal mb-0">Have any question?</h6>
                                <span>+91-9970876727</span>
                            </div>
                        </div> -->
                       <!--  <div class="col-md-5"> <i class="fas fa-map-marker-alt font-small text-primary float-start me-3" aria-hidden="true"></i>
                            <div class="d-table">
                                <h6 class="text-secondary line-height-normal mb-0">Find us in office</h6>
                                <span>Office No. 221, Hinjewadi, Pune, Maharashtra</span>
                            </div>
                        </div> -->
                        <!-- <div class="col-md-2">
                            <a class="btn btn-primary d-table ms-auto" href="dashboard-submit-property.html">Submit Peoperty</a>
                        </div> -->
                   <!--  </div>
                </div> -->
<!--             </div>
 -->            <div class="main-nav bg-primary hover-border-white-nav py-2 logo-hide">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="logo pe-xl-4"> <img src="assets/images/logo/vebsigns.png" alt=""> </div>
                        </div>
                        <div class="col">
                            <nav class="navbar navbar-light white-nav navbar-expand-lg p-0">
                                <!-- <a class="navbar-brand p-0" href="#"><img class="nav-logo" src="assets/images/logo/vebsigns.png" alt="" style="width: 170px !important;"></a> -->
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto">
                                        <li class="nav-item"> <a class="nav-link" href="<?php echo e(config('app.baseURL')); ?>/">Home</a></li>
<!--                                         <li class="nav-item"> <a class="nav-link" href="<?php echo e(config('app.baseURL')); ?>/search">Auction</a> </li>
 -->                                        

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="<?php echo e(config('app.baseURL')); ?>/search" id="navbarDropdown"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Auction
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li>
                                                <a class="dropdown-item" href="<?php echo e(config('app.baseURL')); ?>/search?id=1">IBC Auction</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="<?php echo e(config('app.baseURL')); ?>/search?id=2">Car Auction</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="<?php echo e(config('app.baseURL')); ?>/search?id=3">DRT Auction</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="<?php echo e(config('app.baseURL')); ?>/search?id=4">Jewellery Auction</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="<?php echo e(config('app.baseURL')); ?>/search?id=5">Surface Auction</a>
                                            </li>
                                            
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="<?php echo e(config('app.baseURL')); ?>/notice" id="navbarDropdown"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Notice
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li>
                                                <a class="dropdown-item" href="<?php echo e(config('app.baseURL')); ?>/notice">IBC Auction</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="<?php echo e(config('app.baseURL')); ?>/notice">Car Auction</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="<?php echo e(config('app.baseURL')); ?>/notice">DRT Auction</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="<?php echo e(config('app.baseURL')); ?>/notice">Jewelry Auction</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Voting
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li>
                                                <a class="dropdown-item" href="<?php echo e(config('app.baseURL')); ?>/car-auction">IBC Voting</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="<?php echo e(config('app.baseURL')); ?>/car-auction">Association Voting</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="<?php echo e(config('app.baseURL')); ?>/real-estate-auction">Housing Society Voting</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="<?php echo e(config('app.baseURL')); ?>/jewelry-auction">NGO Voting</a>
                                            </li>
                                             <li>
                                                <a class="dropdown-item" href="<?php echo e(config('app.baseURL')); ?>/jewelry-auction">AGM Voting</a>
                                            </li>
                                        </ul>
                                    </li>





                                        <!-- <li class="nav-item"> <a class="nav-link" href="<?php echo e(config('app.baseURL')); ?>/notice">Notice</a> </li>
                                        <li class="nav-item"> <a class="nav-link" href="#">Votior</a> </li>   -->
                                        <li class="nav-item"> <a class="nav-link" href="<?php echo e(config('app.baseURL')); ?>/premium">Service</a></li>
                                        
                                    </ul>
                                   <?php if(Auth::check()): ?>
                                   <div class="hover-text-secondary text-white ps-3 ps-lg-3 mb-3 mb-lg-0" style="display: flex; align-items: center;"> 
    <p style="margin-right: 10px;     margin-bottom: 4px;
"><?php echo e(ucfirst(Auth::user()->name)); ?></p>
    /
    <a class="d-block" href="<?php echo e(config('app.baseURL')); ?>/logout" style="margin-left: 10px;">Logout</a> 
</div>

                                   <?php else: ?>
                                     <div class="hover-text-secondary text-white ps-3 ps-lg-3 mb-3 mb-lg-0" style="display:flex;"> 
                                     <a class="d-block" href="<?php echo e(config('app.baseURL')); ?>/login">Login</a>/<a class="d-block" href="<?php echo e(config('app.baseURL')); ?>/register">Register</a>
                                     </div>
                                  <?php endif; ?>

                                  <div id="google_translate_element" class="text-right"> </div>

<div id="custom_translate">
    <select id="languageSwitcher" onchange="translatePage()">
        <option value="">Select Language</option>
        <option value="en">English</option>
        <option value="hi">Hindi</option>
        <option value="mr">Marathi</option>
    </select>
</div>








                                </div>
                            </nav>

                        </div>

                    </div>
                </div>
            </div>
        </header>
        <!--============== Header Section End ==============--><?php /**PATH C:\xampp\htdocs\auction\resources\views/layouts/header.blade.php ENDPATH**/ ?>