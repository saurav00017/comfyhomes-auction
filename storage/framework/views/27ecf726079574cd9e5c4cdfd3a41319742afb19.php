
<?php $__env->startSection('content'); ?>

<style type="text/css">

    .col-lg-6 {
    flex: 0 0 auto;
    width: 33%;
}


    .page-banner{
            margin-top: 7%;

    }
   

    @media (max-width: 768px) {

        form .row{

            padding: 3%;
        }

}

</style>


<!--============== Banner Section Start ==============-->
        <div class="page-banner full-row bg-gray py-5">
            <div class="container">
                <div class="row row-cols-md-2 row-cols-1 g-3">
                    <div class="col">
                        <h3 class="page-name text-secondary m-0">Contact</h3>
                    </div>
                    <div class="col">
                        <nav class="float-start float-md-end">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="index-1.html">Home</a></li>
                                <li class="breadcrumb-item active">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Banner Section End ==============-->

        <!--============== Contact Information Section Start ==============-->
        <!-- <div class="full-row bg-white">
            <div class="container">
                <div class="row row-cols-lg-3 row-cols-1">
                    <div class="col">
                        <div class="contact-info">
                            <h3 class="mb-4 text-secondary">Support</h3>
                            <div class="d-flex">
                                <div class="circle me-4"><img src="assets/images/team/01.png" alt=""></div>
                                <div class="contact-details">
                                    <h5>Lawrance Kyle</h5>
                                    <span class="d-block">Support Member</span> <a class="text-primary" href="#">www.support@homex.com</a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="contact-info">
                            <h3 class="mb-4 text-secondary">Contacts</h3>
                            <ul>
                                <li class="d-flex mb-4"> <i class="fas fa-map-marker-alt text-primary me-2 font-13 mt-2"></i>
                                    <div class="contact-address">
                                        <h5 class="text-secondary">Address</h5>
                                        <span>Office No. 221, Hinjewadi, Pune, Maharashtra</span> </div>
                                </li>
                                <li class="d-flex mb-4"> <i class="fas fa-phone-alt text-primary me-2 font-13 mt-2"></i>
                                    <div class="contact-address">
                                        <h5 class="text-secondary">Call Us</h5>
                                        <span class="d-table">91-9970876727</span> <span> </span> </div>
                                </li> -->
                                <!-- <li class="d-flex mb-4"> <i class="fas fa-envelope text-primary me-2 font-13 mt-2"></i>
                                    <div class="contact-address">
                                        <h5 class="text-secondary">Email Adderss</h5>
                                        <span>vebsigns@gmail.com</span> </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="contact-info">
                            <h3 class="mb-5 text-secondary">Social</h3>
                            <div class="media-widget text-secondary hover-text-primary">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fas fa-rss"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!--============== Contact Information Section End ==============-->

        <!--============== Get In Touch Section Start ==============-->
        <div class="full-row bg-white pt-0" style="     margin-top: 5%;">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-secondary double-down-line text-center">Get In Touch</h2>
                        <span class="text-center mt-4 d-block mb-5"></span> </div>
                </div>
                <div class="row">
                    <div class="col">
                        <form  class="w-100" action="contact" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-lg-12">
                                 <div class="row">

                                  <div class="col-lg-6">
                                    <input type="text" id="name" required="" name="name" class="form-control bg-gray mb-4" placeholder="Your Name*">
                                 </div>
                                 <div class="col-lg-6">
                                    <input type="text" id="email" required="" name="email" class="form-control bg-gray mb-4" placeholder="Email Address*">
                                 </div>
<!--                                     <input type="text" id="site-link" name="site-link" class="form-control bg-gray mb-3" placeholder="Website">
 -->                                   
                                 <div class="col-lg-6">

                                  <input type="text" id="subject" required="" name="subject" class="form-control bg-gray mb-4" placeholder="Subject">
                              </div>
                                </div>
                                <div class="col-lg-12">
                                    <textarea id="message" required="" name="message" class="form-control bg-gray mb-4" rows="5" placeholder="Type Comments..."></textarea>
                                </div>

                                <button type="submit" value="send message" class="btn btn-primary">Send Message</button>
                                <div class="col-lg-12">
                                    <div class="error-handel">
                                        <div class="d-none" id="success">Your email sent Successfully, Thank you.</div>
                                        <div class="d-none" id="error"> Error occurred while sending email. Please try again later.</div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Get In Touch Section End ==============-->

        <!--============== Map Section Start ==============-->
        <div class="full-row bg-white p-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div id="map" class="contact-location"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Map Section End ==============-->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/comfyhomes/public_html/auction/resources/views/contact.blade.php ENDPATH**/ ?>