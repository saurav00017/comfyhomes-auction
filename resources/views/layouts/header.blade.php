
<div id="content" class="site-content">
        <header class="realestate-header home2">
            <div class="realestate-header-container">
                <div class="container">
                    <div class="realestate-header-top-bar">
                        <div class="realestate-header-logo">
                            <a href="{{ url ('/') }}">
                                <img loading="lazy" src="assets/images/final logo.png" alt="realestate-logo">
                            </a>
                        </div>
                        <button class="realestate-not-filled-btn d-flex d-lg-none realestate-offcanvas-menu-btn"
                        data-bs-toggle="offcanvas" data-bs-target="#realestate-offcanvas-navigation">
                        <i class="fa-solid fa-bars-staggered"></i>
                    </button>
                    <div class="realestate-navigation-nav  d-none d-lg-block">
                        <ul class="realestate-navigation-nav-menus">
                            <li><a href="{{ url ('/') }}">Home</i></a>

                            </li>
                            <li><a href="#">Auction</a>

                            </li>
                            <li><a href="#">Notice</a>

                            </li>
                            <li><a href="#">Voting</a>

                            </li>
                            <li><a href="{{ url('premium') }}">Sevices</a>

                            </li>
                            <li><a href="#">Contact</a>

                            </li>
                            <li><a href="#">EAuction</a>

                            </li>
                        </ul>
                    </div>
 

                                       <div id="google_translate_element" class="text-right"> </div>

                                       <div id="custom_translate">
                                        <select id="languageSwitcher" onchange="translatePage()">
                                            <option value="">Select Language</option>
                                            <option value="en">English</option>
                                            <option value="hi">Hindi</option>
                                            <option value="mr">Marathi</option>
                                        </select>
                                    </div>
                    <div   class="realestate-navigation-quick realestate-submission-btn-container d-none d-lg-flex align-items-center">

                  @if(Auth::check())
                                        <div class="hover-text-secondary realestate-navigation-quick-login text-white ps-3 ps-lg-3 mb-3 mb-lg-0" style="display: flex; align-items: center;"> 
                                            <p style="margin-right: 10px;     margin-bottom: 4px;
                                            ">{{ ucfirst(Auth::user()->name) }}</p>
                                            /
                                            <a class="d-block" href="{{ config('app.baseURL') }}/logout" style="margin-left: 10px;">Logout</a> 
                                        </div>

                                        @else
                                        <div class="hover-text-secondary text-white ps-3 ps-lg-3 mb-3 mb-lg-0" style="display:flex;"> 
                                           <a class="d-block" href="{{ config('app.baseURL') }}/login">Login</a>/<a class="d-block" href="{{ config('app.baseURL') }}/register">Register</a>
                                       </div>
                                       @endif
                                    </div>
            </div>

        </div>
        <!-- end header code  -->
    </div>
</header>

    

        <!-- End Banner code  -->

        