<div id="content" class="site-content">
    <header class="realestate-header home2">
        <div class="realestate-header-container">
            <div class="container">
                <div class="realestate-header-top-bar">
                    <div class="realestate-header-logo">
                        <a href="{{ url('/') }}">
                            <img loading="lazy" src="{{ asset('assets/images/logo/logo_header.png') }}" alt="realestate-logo">
                        </a>
                    </div>
                    <button class="realestate-not-filled-btn d-flex d-lg-none realestate-offcanvas-menu-btn"
                        data-bs-toggle="offcanvas" data-bs-target="#realestate-offcanvas-navigation">
                        <i class="fa-solid fa-bars-staggered"></i>
                    </button>
                    <div class="realestate-navigation-nav  d-none d-lg-block">
                        <ul class="realestate-navigation-nav-menus">
                            <li><a href="{{ url('/') }}">Home</i></a>

                            </li>
                            <li><a href="{{ route('verifiedProperty') }}">Auction</a>

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

                    <div>
                        <select class="header-select" id="languageSwitcher" onchange="translatePage()">
                            <option value="">Select Language</option>
                            <option value="en">English</option>
                            <option value="hi">Hindi</option>
                            <option value="mr">Marathi</option>
                        </select>
                    </div>
                    <div
                        class="realestate-navigation-quick realestate-submission-btn-container d-none d-lg-flex align-items-center">
                        @if (Auth::check())
                            <div class="dropdown ps-3 mb-3 mb-lg-0">
                                <button class="btn btn-light text-dark dropdown-toggle user-dropdown-btn" type="button"
                                    id="userMenuButton" data-bs-toggle="dropdown" aria-expanded="false"
                                    style="min-width: 140px;">
                                    {{ ucfirst(Auth::user()->name) }}
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end " aria-labelledby="userMenuButton">
                                    <li><a class="dropdown-item" href="{{ route('wishlist.index') }}"><i
                                                class="fas fa-heart me-2"></i>My Wishlist</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-danger"
                                            href="{{ config('app.baseURL') }}/logout"><i
                                                class="fas fa-sign-out-alt me-2"></i>Logout</a></li>
                                </ul>
                            </div>
                        @else
                            <div
                                class="hover-text-secondary text-white ps-3 ps-lg-3 mb-3 mb-lg-0 d-flex align-items-center">
                                <a class="btn login-btn me-2" href="{{ config('app.baseURL') }}/login">Login</a>
                                <a class="btn register-btn" href="{{ config('app.baseURL') }}/register">Register</a>
                            </div>
                        @endif
                    </div>

                </div>

            </div>
            <!-- end header code  -->
        </div>
    </header>



    <!-- End Banner code  -->
