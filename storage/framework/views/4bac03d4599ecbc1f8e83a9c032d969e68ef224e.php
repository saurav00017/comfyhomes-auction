<?php $__env->startSection('content'); ?>

 <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Contact</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.html">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
Contact Area  
==============================-->
    <div class="space" style="background-color: #A4B5BA !important;">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Get In Touch</span>
                <h2 class="sec-title text-theme">Our Contact Information</h2>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-xl-4 col-lg-6">
                    <div class="about-contact-grid style2">
                        <div class="about-contact-icon">
                            <i class="fal fa-location-dot"></i>
                        </div>
                        <div class="about-contact-details">
                            <h6 class="about-contact-details-title">Our Address</h6>
                            <p class="about-contact-details-text">Office-724,Gera Imperium, near  </p>
                            <p class="about-contact-details-text">wipro circle, Hinjewadi Phase 2.</p>
                            <p class="about-contact-details-text"></p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="about-contact-grid style2">
                        <div class="about-contact-icon">
                            <i class="fal fa-phone"></i>
                        </div>
                        <div class="about-contact-details">
                            <h6 class="about-contact-details-title">Phone Number</h6>
                            <p class="about-contact-details-text"><a href="tel:9975706345">+91-9975706345 </a></p>
                            <p class="about-contact-details-text"><a href="tel:9560365659">+91-9560365659 </a></p>




                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="about-contact-grid style2">
                        <div class="about-contact-icon">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <div class="about-contact-details">
                            <h6 class="about-contact-details-title">Email Address</h6>
                            <p class="about-contact-details-text"><a href="mailto:enquiry@propberries.com">enquiry@propberries.com</a></p>
                            
<!--                             <p class="about-contact-details-text"><a href="mailto:support24@realar.com"></a></p>
 -->                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
Contact Area   
==============================-->
    <div class="space contact-area-3 z-index-common" data-bg-src="assets/img/bg/contact-bg-1-1.png" data-overlay="title" data-opacity="3">
        <div class="contact-bg-shape3-1 spin shape-mockup " data-bottom="5%" data-left="12%">
            <img src="assets/img/shape/section_shape_2_1.jpg" alt="img">
        </div>
        <div class="container">
            <div class="row gx-35">
                <div class="col-lg-6">
                    <div class="appointment-wrap2 bg-white me-xxl-5">
                        <h2 class="form-title text-theme">Schedule a visit</h2>
                        <form action="<?php echo e(config('app.baseURL')); ?>/contact" method="POST" class="appointment-form">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="form-group style-border style-radius col-12">
                                    <input type="text" class="form-control" name="name" required="" id="name" placeholder="Your Name*">
                                    <i class="fal fa-user"></i>
                                </div>
                                 <div class="form-group style-border style-radius col-12">
                                    <input type="number" class="form-control" name="contact_no" required="" onkeypress="if(this.value.length==10)" id="contact_no" placeholder="Your Contact Number*">
                                    <i class="fal fa-phone"></i>
                                </div>
                                <div class="form-group style-border style-radius col-12">
                                    <input type="email" class="form-control" name="email" required="" id="email" placeholder="Your Email*">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="form-group style-border style-radius col-md-12">
                                    <select name="subject" id="subject" name="service_type" class="form-select" required="">
                                        <option value="" disabled="" selected="" hidden="">Select Service Type</option>
                                        <option value="Real Estate">Real Estate</option>
                                        <option value="Apartment">Apartment</option>
                                        <option value="Residencial">Residencial</option>
                                        <option value="Deluxe">Deluxe</option>
                                    </select>
                                    <i class="fal fa-angle-down"></i>
                                </div>
                                <div class="col-12 form-group style-border style-radius">
                                    <i class="far fa-comments"></i>
                                    <textarea placeholder="Type Your Message" class="form-control" name="message" required=""></textarea>
                                </div>
                                <div class="col-12 form-btn mt-4">
                                    <button class="th-btn">Submit Message <span class="btn-icon"><img src="assets/img/icon/paper-plane.svg" alt="img"></span></button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="location-map contact-sec-map z-index-common">
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3781.3841222736187!2d73.7361591749649!3d18.60178478250769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bbd07ea09f63%3A0xeadc794121db6da4!2sProp%20One%20Realty%20Services%20Pvt%20Ltd.!5e0!3m2!1sen!2sin!4v1724837454295!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="location-map-address bg-theme">
                <div class="thumb">
                    <img src="assets/img/property/property_inner_1.jpg" alt="img">
                </div>
                <div class="media-body">
                    <h4 class="title">Address:</h4>
                    <p class="text">Office-724,Gera Imperium, near wipro circle, Hinjewadi Phase 2, Pune</p>
                    <h4 class="title">Post Code:</h4>
                    <p class="text">411057</p>
                </div>
            </div>
        </div>
    </div><!--==============================
	Footer Area
==============================-->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/propberries/public_html/resources/views/contact.blade.php ENDPATH**/ ?>