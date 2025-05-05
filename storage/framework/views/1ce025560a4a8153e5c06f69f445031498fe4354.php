<!--==============================
    Mobile Menu
  ============================== -->
    <div class="th-menu-wrapper onepage-nav">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="<?php echo e(config('app.baseURL')); ?>">
                    <img src="assets/img/propberries.jpeg" alt="Propberries" style="border-radius: 11px;">
                </a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li>
                        <a href="<?php echo e(config('app.baseURL')); ?>">
                            Home
                        </a>
                        
                    </li>
                    <li><a href="<?php echo e(config('app.baseURL')); ?>/about-us">
                            About Us
                        </a></li>
                    <li><a href="<?php echo e(config('app.baseURL')); ?>/property">
                            Properties
                        </a></li>
                    <li><a href="<?php echo e(config('app.baseURL')); ?>/blog">
                            Blog
                        </a></li>
                    <li><a href="<?php echo e(config('app.baseURL')); ?>/testimonial">
                            Testimonials
                        </a></li>
                    
                    <li><a href="<?php echo e(config('app.baseURL')); ?>/contact">
                            Contact Us
                        </a></li>
                </ul>
            </div>
        </div>
    </div><!--==============================
	Header Area
==============================-->
    <header class="th-header header-default">
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="<?php echo e(config('app.baseURL')); ?>">
                                    <img src="assets/img/propberries.jpeg" alt="Propberries" style="border-radius: 11px;">
                                </a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li>
                                        <a href="<?php echo e(config('app.baseURL')); ?>">
                                            Home
                                        </a>
                                    </li>
                                    <li><a href="<?php echo e(config('app.baseURL')); ?>/about-us">
                                            About Us
                                        </a></li>
                                    <li><a href="<?php echo e(config('app.baseURL')); ?>/property">
                                            Properties
                                        </a></li>    
                                    <li><a href="<?php echo e(config('app.baseURL')); ?>/blog">
                                            Blogs
                                        </a></li>
                                    <li><a href="<?php echo e(config('app.baseURL')); ?>/testimonial">
                            Testimonials
                        </a></li>    
                                    <li><a href="<?php echo e(config('app.baseURL')); ?>/contact">
                                            Contact Us
                                        </a></li>
                                </ul>
                            </nav>
                            <div class="header-button d-flex d-lg-none">
                                <button type="button" class="th-menu-toggle sidebar-btn">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-auto d-none d-xxl-block">
                            <div class="header-button">
                                <a href="<?php echo e(config('app.baseURL')); ?>/contact" class="th-btn style-border th-btn-icon">Enquire Now</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><?php /**PATH /home/propberries/public_html/resources/views/layouts/header.blade.php ENDPATH**/ ?>