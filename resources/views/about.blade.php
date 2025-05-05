@extends('layouts.app')
@section('content')


<!--============== Banner Section Start ==============-->
        <div class="page-banner full-row bg-gray py-5">
            <div class="container">
                <div class="row row-cols-md-2 row-cols-1 g-3">
                    <div class="col">
                        <h3 class="page-name text-secondary m-0">About</h3>
                    </div>
                    <div class="col">
                        <nav class="float-start float-md-end">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="index-1.html">Home</a></li>
                                <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                                <li class="breadcrumb-item active">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Banner Section End ==============-->

        <!--============== About Our Company Section Start ==============-->
        <div class="full-row bg-white">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h3 class="double-down-line-left text-secondary position-relative pb-4 mb-4">About Our Company</h3>
                    </div>
                </div>
                <div class="row about-company">
                    <div class="col-lg-7">
                        <div class="about-content">
                            <p>A tristique tempor quisque. Pulvinar. Sociosqu. Nostra tempor lacus iaculis enim consectetuer urna. Vehicula risus aliquet elementum proin senectus class vulputate dignissim. Potenti integer facilisis augue ridiculus. Augue
                                adipiscing, viverra cras et fusce laoreet fringilla amet varius imperdiet bibendum arcu, luctus feugiat etiam, tincidunt vivamus nullam, ridiculus, vehicula vitae magnis non etiam lacus lacinia magnis lacus elementum vel.
                                Laoreet mus nulla. Aliquam bibendum mi interdum in ridiculus ante.</p>
                            <p>Dui consectetuer, ornare proin sed nullam nunc aenean dolor bibendum proin venenatis semper faucibus metus dolor lobortis mattis, rhoncus hymenaeos. Placerat vulputate porttitor quisque accumsan porta maecenas scelerisque montes
                                dignissim mollis.</p>
                            <img src="assets/images/about/02.png" alt=""> </div>
                        <div class="fact-counter mt-5 md-mb-40">
                            <div class="row row-cols-md-3 row-cols-1 g-4">
                                <div class="col">
                                    <div class="count wow text-center" data-wow-duration="300ms">
                                        <div class="text-primary mb-3 d-flex justify-content-center">
                                            <h2 class="count-num" data-speed="3000" data-stop="1310">0</h2>
                                            <strong>+</strong>
                                        </div>
                                        <span class="h6">Deals Success</span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="count wow text-center" data-wow-duration="300ms">
                                        <div class="text-primary mb-3 d-flex justify-content-center">
                                            <h2 class="count-num" data-speed="3000" data-stop="946">0</h2>
                                            <strong>+</strong>
                                        </div>
                                        <span class="h6">Insurance Done</span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="count wow text-center" data-wow-duration="300ms">
                                        <div class="text-primary mb-3 d-flex justify-content-center"><strong>$</strong>
                                            <h2 class="count-num" data-speed="3000" data-stop="751867">0</h2>
                                            <strong>+</strong>
                                        </div>
                                        <span class="h6">Micro Finincing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="about-img"> <img src="assets/images/about/01.png" alt=""> </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== About Our Company Section End ==============-->

        <!--============== Text Box Five Section Start ==============-->
        <div class="full-row bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-7">
                        <div class="investment icon-primary icon-font video-popup position-relative" onclick="myFunction()"> <img src="assets/images/investment.png" alt="">
                            <a class="video-popup text-primary xy-center position-absolute font-medium hover-text-primary" href="https://vimeo.com/63931426" title="video popup"> <i class="fas fa-play"></i> </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5">
                        <h3 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Investment Oppertunity</h3>
                        <p class="pt-50">Best wishes on finding your dream home! Our Home Loan with its attractive features and competitive interest rates will help you make your dream home come in reality.</p>
                        <div class="p-4 hover-bg-white hover-shadow rounded"> <i class="flaticon-budget flat-medium icon-primary float-start me-3" aria-hidden="true"></i>
                            <div class="d-table">
                                <h5 class="text-secondary mb-3">Invest start from $105,000</h5>
                                <p>Pretium hymenaeos hendrerit a cursus porttitor sagittis metus hac gravida lacus volutpat.</p>
                            </div>
                        </div>
                        <div class="p-4 hover-bg-white hover-shadow rounded"> <i class="flaticon-increase flat-medium icon-primary float-start me-3" aria-hidden="true"></i>
                            <div class="d-table">
                                <h5 class="text-secondary mb-3">Profit up to 10 - 15 % per annum</h5>
                                <p>Pretium hymenaeos hendrerit a cursus porttitor sagittis metus hac gravida lacus volutpat.</p>
                            </div>
                        </div>
                        <div class="p-4 hover-bg-white hover-shadow rounded"> <i class="flaticon-rent flat-medium icon-primary float-start me-3" aria-hidden="true"></i>
                            <div class="d-table">
                                <h5 class="text-secondary mb-3">Tenants or lease properties</h5>
                                <p>Pretium hymenaeos hendrerit a cursus porttitor sagittis metus hac gravida lacus volutpat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Text Box Five Section End ==============-->

        <!--============== Happy Living Section Start ==============-->
        <div class="full-row living bg-one overlay-secondary-half" style="background-image: url( 'assets/images/haddyliving.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
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
        </div>
        <!--============== Happy Living Section End ==============-->

        <!--============== How it work Section Start ==============-->
        <div class="full-row bg-white">
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
        </div>
        <!--============== How it work Section End ==============-->

        <!--============== Achievement Section Start ==============-->
        <div class="full-row overlay-secondary" style="background-image: url( 'assets/images/counterbg.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container position-relative">
                <div class="fact-counter">
                    <div class="row row-cols-lg-4 row-cols-sm-2 row-cols-1 g-4">
                        <div class="col">
                            <div class="count wow text-center" data-wow-duration="300ms"> <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
                                <div class="count-num text-primary my-4" data-speed="3000" data-stop="1732">0</div>
                                <div class="text-white h5">Property Available</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="count wow text-center" data-wow-duration="300ms"> <i class="flaticon-man flat-large text-white" aria-hidden="true"></i>
                                <div class="count-num text-primary my-4" data-speed="3000" data-stop="341">0</div>
                                <div class="text-white h5">Registered Agents</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="count wow text-center" data-wow-duration="300ms"> <i class="flaticon-invention flat-large text-white" aria-hidden="true"></i>
                                <div class="count-num text-primary my-4" data-speed="3000" data-stop="2350">0</div>
                                <div class="text-white h5">People Are Invested</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="count wow text-center" data-wow-duration="300ms"> <i class="flaticon-investment flat-large text-white" aria-hidden="true"></i>
                                <div class="count-num text-primary my-4" data-speed="3000" data-stop="13780">0</div>
                                <div class="text-white h5">Total Investment</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Achievement Section End ==============-->

        <!--============== Our Team Section Start ==============-->
        <div class="full-row bg-white">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-secondary double-down-line text-center">Our Agents</h2>
                        <span class="text-center mt-4 d-block mb-5">Process to get your right one, almost easy, flexible and fun.</span>
                    </div>
                </div>
                <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
                    <div class="col">
                        <div class="hover-zoomer bg-white shadow-one">
                            <div class="overflow-hidden"> <img src="assets/images/team/01.png" alt=""> </div>
                            <div class="py-3 text-center">
                                <h5 class="text-secondary hover-text-primary"><a href="#">Karen Eilla Boyette</a></h5>
                                <span>Appartment Agent</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="hover-zoomer bg-white shadow-one">
                            <div class="overflow-hidden"> <img src="assets/images/team/02.png" alt=""> </div>
                            <div class="py-3 text-center">
                                <h5 class="text-secondary hover-text-primary"><a href="#">Walter Devid Moye</a></h5>
                                <span>Condos Agent</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="hover-zoomer bg-white shadow-one">
                            <div class="overflow-hidden"> <img src="assets/images/team/03.png" alt=""> </div>
                            <div class="py-3 text-center">
                                <h5 class="text-secondary hover-text-primary"><a href="#">Linda Dina Pate</a></h5>
                                <span>Commercial Building Agent</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Our Team Section End ==============-->

        <!--============== Partner Section Start ==============-->
        <div class="full-row bg-white pt-0">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-secondary double-down-line text-center">Whome We Worked</h2>
                        <span class="text-center mt-4 d-block mb-5">We listed our oppertunity and servies as a real estate company</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="partner">
                            <div class="owl-carousel partners">
                                <img src="assets/images/partner/1.png" alt="">
                                <img src="assets/images/partner/2.png" alt="">
                                <img src="assets/images/partner/3.png" alt="">
                                <img src="assets/images/partner/4.png" alt="">
                                <img src="assets/images/partner/5.png" alt="">
                                <img src="assets/images/partner/3.png" alt="">
                                <img src="assets/images/partner/1.png" alt="">
                                <img src="assets/images/partner/2.png" alt="">
                                <img src="assets/images/partner/3.png" alt="">
                                <img src="assets/images/partner/4.png" alt="">
                                <img src="assets/images/partner/5.png" alt="">
                                <img src="assets/images/partner/3.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Partner Section End ==============-->

        


@endsection