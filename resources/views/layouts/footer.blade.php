<style type="text/css">
.copyright {
        background-color: #0f1a2e;
        padding: 20px 0;
        color: #a0aec0;
    }
    .line-menu li {
        display: inline-block;
        margin-right: 10px;
    }
    .line-menu a {
        color: #a0aec0;
        transition: color 0.3s ease;
    }
    .line-menu a:hover {
        color: #4299e1;
    }
    .footer-widget li {
    margin-bottom: 10px;
        font-size: larger;
        color: white!important;

}
</style><!============== Subscribe Section Start ==============-->
        <!-- <div class="full-row bg-gray p-0">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="divider py-80">
                            <div class="row align-items-center g-3">
                                <div class="col-lg-7">
                                    <h4 class="text-secondary mb-0">Enter your email for subscribe to get monthly newslatter</h4>
                                </div>
                                <div class="col-lg-5">
                                    <form class="subscribe">
                                        <div class="input-group">
                                            <input type="email" class="form-control" placeholder="Enter your email">
                                            <button class="btn btn-primary" type="submit">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!--============== Subscribe Section End ==============-->

        <!--============== Footer Section Start ==============-->
        <footer class="full-row">
            <div class="container">
                <div class="row ">
                    <div class="col mt-50">
                        <div class="divider py-80">
                            <div class="row g-4">
                                <div class="col-lg-4">
                                    <div class="footer-widget">
                                        <div class="footer-logo mb-4">
                                            <a href="#"><img class="logo-bottom" src="{{ asset('assets/images/logo/logo_footer.png') }}" alt="image" style="width: 100px !important;"></a>
                                        </div>
                                        <p class="pb-20">Risus commodo congue augue phasellus morbi hymenaeos ante tincidunt eu orci dictum bibendum lacus platea primis mi lacinia felis gravida natoque bibendum cubilia montes tristique et arcu blandit risus. Lobortis
                                            dignissim nam.
                                        </p>
                                         <div class="col">
                                            <div class="footer-widget">
                                                <ul>  
                                                    <div style="display: flex; align-items: center; gap:10px;">
                                                    <li class="fa fa-phone"></li><p>+91-9970876727</p>
                                                    </div>
                                                    <div style="display: flex; align-items: center; gap:10px;">
                                                    <li class="fa fa-envelope"></li><p>vebsigns@gmail.com</p>
                                                   </div>
                                                </ul>
                                            </div>
                                          
                                        </div>
                                         <div class="footer-widget media-widget mt-2 mb-2 text-secondary hover-text-primary">
                                                <!-- <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                <a href="#"><i class="fas fa-rss"></i></a> -->

                                                <img src="assets/img/linkdin.png" style="width: 5%;     margin-right: 5px;">
                                                <img src="assets/img/instagram.png" style="width: 5%;     margin-right: 5px;">
                                                <img src="assets/img/facebook.png" style="width: 5%;     margin-right: 5px;">

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="20px" style="enable-background:new 0 0 30 30;" xml:space="preserve">


                                          
                                          
                        
                       
                                          
                                          <path d="M26.37,26l-8.795-12.822l0.015,0.012L25.52,4h-2.65l-6.46,7.48L11.28,4H4.33l8.211,11.971L12.54,15.97L3.88,26h2.65 l7.182-8.322L19.42,26H26.37z M10.23,6l12.34,18h-2.1L8.12,6H10.23z"></path></svg>
                                            </div>                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row row-cols-md-3 row-cols-1">
                                        <div class="col">
                                            <div class="footer-widget footer-nav">
                                                <h4 class="widget-title text-secondary double-down-line-left position-relative">Auction</h4>
                                                <ul>
                                            <li>
                                                <a href="{{ route('verifiedProperty', ['category' => 4]) }}">Industrial Auction</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('verifiedProperty', ['category' => 6]) }}">Vehicle Auction</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('verifiedProperty', ['category' => 2]) }}">Commercial Auction</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('verifiedProperty', ['category' => 5]) }}">Jewellery Auction</a>
                                            </li>
                                                </ul>
                                            </div>
                                        </div>


                                        <div class="col">
                                            <div class="footer-widget footer-nav">
                                                <h4 class="widget-title text-secondary double-down-line-left position-relative">Notice</h4>
                                                <ul>
                                                     <li>
                                                <a href="{{ url('/notice') }}">IBC Notice</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/notice') }}">Car Notice</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/notice') }}">DRT Notice</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/notice') }}">Jewellery Notice</a>
                                            </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="footer-widget">
                                                <h4 class="widget-title text-secondary double-down-line-left position-relative">Quick Links</h4>
                                                <ul>
                                                    <li>
                                                <a href="{{ url('/properties') }}">Properties</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/verify-auction') }}">Auction</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/contact') }}">Contact Us</a>
                                            </li>
                                            </ul>
                                            </div>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Copyright Start -->
            <div class="copyright">
                <div class="container">
                    <div class="row row-cols-sm-2 row-cols-1">
                        <div class="col"><span>© 2025 Vebsigns All right reserved</span></div>
                        <div class="col">
                            <ul class="line-menu text-ordinary float-end">
                                <li><a href="{{ url('/privacy') }}">Privacy & Policy</a></li>
                                <li>|</li>
                                <li><a href="{{ url('/terms') }}">Terms and Condition</a></li>
                                <li>|</li>
                                <li><a href="#">Site Map</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Copyright End -->
        </footer>