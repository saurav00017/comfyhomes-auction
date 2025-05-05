@extends('layouts.app')
@section('content')


 <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">About Us</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index-2.html">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
About Area  
==============================-->
    <div class="overflow-hidden space" style="background-color: #A4B5BA !important;">
        <div class="sec-bg-shape2-1 spin shape-mockup d-xl-block d-none" data-bottom="25%" data-right="12%">
            <img src="assets/img/shape/section_shape_2_1-1.jpg" alt="img">
        </div>
        <div class="sec-bg-shape2-1 jump shape-mockup d-xl-block d-none" data-bottom="0%" data-left="5%">
            <img src="assets/img/shape/section_shape_2_3-1.jpg" alt="img">
        </div>
        <div class="container">
            <div class="about-page-wrap">
                <div class="row gy-40 justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <div class="title-area mb-0">
                            <h2 class="sec-title text-theme mb-2">Propberries Vission & Mission</h2>
                            <p class="mb-0 text-theme">You are the center of our process. Your needs, your wants, and your goals. We actively listen, always keep it even keel — never rushing you or pushing something you don’t need. </p>
                            <p class="text-theme">Full transparency is our goal. We stay connected while building your home, clearly outlining next steps and collaborating with you to select personal design details. From day one, your peace of mind is our highest priority.</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="img-box3">
                            <div class="img1">
                                <img src="assets/img/normal/about_3_1-1.png" alt="About">
                            </div>
                            <!-- <div class="about-tag">
                                <div class="about-experience-tag">
                                    <span class="circle-title-anime">Realar Living Solutions</span>
                                </div>
                                <a href="../../watch-1.html?v=_sI_Ps7JSEk" class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="img-box3">
                            <div class="img1">
                                <img src="assets/img/normal/about_3_2-1.png" alt="About">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <p class="text-theme">We design homes for how people live. Centered Design is our philosophy, our approach to creating spaces that energize and inspire.</p>
                        <p class="text-theme">Our floor plan designs focus on three elements: natural light, color, and clean air all qualities that support your wellbeing and energy levels. When you walk into our homes, you’ll see design that puts people first, and more importantly, you’ll feel it.</p>
                    </div>
                    <div class="col-lg-6">
                        <p class="text-theme">That’s why we build every home like it’s our own. Building locally since 1988, we hold ourselves to the highest standards of quality and construction integrity. In addition to the 28 required county inspections, we complete nine formal Inland inspections, plus nine more third-party critical inspections — that’s 18 additional formal inspections on every Inland Home, by choice. Our goal is that each home will serve your family, and others, for generations to come.</p>
                        <div class="about-wrap2 style-theme mt-50">
                            <div class="checklist style4">
                                <ul>
                                    <li><img src="assets/img/icon/checkmark-2.svg" alt="img">Quality real estate services</li>
                                    <li><img src="assets/img/icon/checkmark-2.svg" alt="img">100% Satisfaction guarantee</li>
                                    <li><img src="assets/img/icon/checkmark-2.svg" alt="img">Highly professional team</li>
                                    <li><img src="assets/img/icon/checkmark-2.svg" alt="img">Dealing always on time</li>
                                </ul>
                            </div>
                            <div class="call-btn">
                                <div class="icon-btn bg-theme">
                                    <img src="assets/img/icon/phone-1.svg" alt="img">
                                </div>
                                <div class="btn-content">
                                    <h6 class="btn-title text-theme">Call Us 24/7</h6>
                                    <span class="btn-text"><a class="text-theme" href="tel:+9975706345">+91-997-570-6345</a></span><br>
                                    <span class="btn-text"><a class="text-theme" href="tel:+919560365659">+91-956-036-5659 </a></span>




                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="img-box3">
                            <div class="img1">
                                <img src="assets/img/normal/about_3_3-1.png" alt="About">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
Why Choose Us Area  
==============================-->
    <div class="why-sec-1 overflow-hidden space bg-theme">
        <div class="sec-bg-shape2-1 text-white spin shape-mockup d-xl-block d-none" data-bottom="15%" data-left="12%">
            <img src="assets/img/shape/section_shape_2_1-1.jpg" alt="img">
        </div>
        <div class="sec-bg-shape2-3 text-white jump shape-mockup d-xl-block d-none" data-bottom="0%" data-right="7%">
            <img src="assets/img/shape/section_shape_2_3-1.jpg" alt="img">
        </div>
        <div class="container">
            <div class="row justify-content-lg-between align-items-center">
                <div class="col-lg-6">
                    <div class="title-area">
                        <h2 class="sec-title text-white">Why Choose Us?</h2>
                        <p class="text-light">We are a real estate firm with over 20 years of expertise, and our main goal is to provide amazing locations to our partners and clients. Within the luxury real estate market, our agency offers customized solutions.</p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <a href="{{config('app.baseURL')}}/contact" class="th-btn style-border th-btn-icon">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="swiper th-slider" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="service-card style4">
                            <div class="service-card-icon">
                                <img src="assets/img/icon/service-icon4-1-1.svg" alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="{{config('app.baseURL')}}/property">Property Valuation</a></h3>
                            <p class="box-text">Generous amounts of south facing glazing maximize the solar gains for most of the year.</p>
                            <div class="service-img img-shine">
                                <img src="assets/img/service/1-1-1.png" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-card style4">
                            <div class="service-card-icon">
                                <img src="assets/img/icon/service-icon4-2-1.svg" alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="{{config('app.baseURL')}}/property">Property Management</a></h3>
                            <p class="box-text">All living, dining, kitchen and play areas were devised by attached to the home.</p>
                            <div class="service-img img-shine">
                                <img src="assets/img/service/1-2-1.png" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-card style4">
                            <div class="service-card-icon">
                                <img src="assets/img/icon/service-icon4-1-1.svg" alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="{{config('app.baseURL')}}/property">Invest Opportunities</a></h3>
                            <p class="box-text">All-inclusive real estate services to facilitate the easy management of your properties.</p>
                            <div class="service-img img-shine">
                                <img src="assets/img/service/1-3-1.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        <!--==============================
Testimonial Area  
==============================-->
    <section class="overflow-hidden space" style="background-color: #A4B5BA !important;">
        <div class="sec-bg-shape2-1 spin shape-mockup d-xl-block d-none" data-bottom="2%" data-left="-1%">
            <img src="assets/img/shape/section_shape_2_1.jpg" alt="img">
        </div>
        <div class="sec-bg-shape2-3 jump shape-mockup d-xl-block d-none" data-top="-1%" data-right="10%">
            <img src="assets/img/shape/section_shape_2_3.jpg" alt="img">
        </div>
        <div class="container th-container2">
            <div class="row justify-content-lg-between align-items-center">
                <div class="col-xxl-6 col-lg-7">
                    <div class="title-area">
                        <span class="sub-title">Testimonial</span>
                        <h2 class="sec-title text-theme">What Our Customers Says</h2>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <div class="icon-box">
                            <button data-slider-prev="#testiSlider3" class="slider-arrow style5 default slider-prev"><img src="assets/img/icon/arrow-left.svg" alt=""></button>
                            <button data-slider-next="#testiSlider3" class="slider-arrow style5 default slider-next"><img src="assets/img/icon/arrow-right.svg" alt=""></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="swiper th-slider testi-slider3" id="testiSlider3" data-slider-options='{"spaceBetween":"32","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2"},"1400":{"slidesPerView":"3"}},"centeredSlides": "true"}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testi-card style3">
                            <p class="testi-card_text">“A home that perfectly blends sustainability with luxury until I discovered Ecoland Residence. From the moment I stepped into this community, I knew it was where I wanted to live. The commitment to eco-friendly living, coupled with modern amenities, is truly commendable.”</p>
                            <div class="testi-grid_review">
                                <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                            </div>
                            <div class="testi-card_profile">
                                <div class="quote-icon">
                                    <img src="assets/img/icon/qoute.svg" alt="icon">
                                </div>
                                <div class="avatar">
                                    <img src="assets/img/testimonial/testi_1_2.png" alt="avatar">
                                </div>
                                <div class="testi-card_profile-details">
                                    <h3 class="testi-card_name">Andrew Simon</h3>
                                    <span class="testi-card_desig">Property Expert</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card style3">
                            <p class="testi-card_text">“A home that perfectly blends sustainability with luxury until I discovered Ecoland Residence. From the moment I stepped into this community, I knew it was where I wanted to live. The commitment to eco-friendly living, coupled with modern amenities, is truly commendable.”</p>
                            <div class="testi-grid_review">
                                <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                            </div>
                            <div class="testi-card_profile">
                                <div class="quote-icon">
                                    <img src="assets/img/icon/qoute.svg" alt="icon">
                                </div>
                                <div class="avatar">
                                    <img src="assets/img/testimonial/testi_2_2.png" alt="avatar">
                                </div>
                                <div class="testi-card_profile-details">
                                    <h3 class="testi-card_name">Ralph Edwards</h3>
                                    <span class="testi-card_desig">Property Expert</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card style3">
                            <p class="testi-card_text">“A home that perfectly blends sustainability with luxury until I discovered Ecoland Residence. From the moment I stepped into this community, I knew it was where I wanted to live. The commitment to eco-friendly living, coupled with modern amenities, is truly commendable.”</p>
                            <div class="testi-grid_review">
                                <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                            </div>
                            <div class="testi-card_profile">
                                <div class="quote-icon">
                                    <img src="assets/img/icon/qoute.svg" alt="icon">
                                </div>
                                <div class="avatar">
                                    <img src="assets/img/testimonial/testi_2_1.png" alt="avatar">
                                </div>
                                <div class="testi-card_profile-details">
                                    <h3 class="testi-card_name">Andrew Simon</h3>
                                    <span class="testi-card_desig">Property Expert</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card style3">
                            <p class="testi-card_text">“A home that perfectly blends sustainability with luxury until I discovered Ecoland Residence. From the moment I stepped into this community, I knew it was where I wanted to live. The commitment to eco-friendly living, coupled with modern amenities, is truly commendable.”</p>
                            <div class="testi-grid_review">
                                <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                            </div>
                            <div class="testi-card_profile">
                                <div class="quote-icon">
                                    <img src="assets/img/icon/qoute.svg" alt="icon">
                                </div>
                                <div class="avatar">
                                    <img src="assets/img/testimonial/testi_1_1.png" alt="avatar">
                                </div>
                                <div class="testi-card_profile-details">
                                    <h3 class="testi-card_name">Ralph Edwards</h3>
                                    <span class="testi-card_desig">Property Expert</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card style3">
                            <p class="testi-card_text">“A home that perfectly blends sustainability with luxury until I discovered Ecoland Residence. From the moment I stepped into this community, I knew it was where I wanted to live. The commitment to eco-friendly living, coupled with modern amenities, is truly commendable.”</p>
                            <div class="testi-grid_review">
                                <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                            </div>
                            <div class="testi-card_profile">
                                <div class="quote-icon">
                                    <img src="assets/img/icon/qoute.svg" alt="icon">
                                </div>
                                <div class="avatar">
                                    <img src="assets/img/testimonial/testi_1_2.png" alt="avatar">
                                </div>
                                <div class="testi-card_profile-details">
                                    <h3 class="testi-card_name">Andrew Simon</h3>
                                    <span class="testi-card_desig">Property Expert</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card style3">
                            <p class="testi-card_text">“A home that perfectly blends sustainability with luxury until I discovered Ecoland Residence. From the moment I stepped into this community, I knew it was where I wanted to live. The commitment to eco-friendly living, coupled with modern amenities, is truly commendable.”</p>
                            <div class="testi-grid_review">
                                <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                            </div>
                            <div class="testi-card_profile">
                                <div class="quote-icon">
                                    <img src="assets/img/icon/qoute.svg" alt="icon">
                                </div>
                                <div class="avatar">
                                    <img src="assets/img/testimonial/testi_2_2.png" alt="avatar">
                                </div>
                                <div class="testi-card_profile-details">
                                    <h3 class="testi-card_name">Ralph Edwards</h3>
                                    <span class="testi-card_desig">Property Expert</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card style3">
                            <p class="testi-card_text">“A home that perfectly blends sustainability with luxury until I discovered Ecoland Residence. From the moment I stepped into this community, I knew it was where I wanted to live. The commitment to eco-friendly living, coupled with modern amenities, is truly commendable.”</p>
                            <div class="testi-grid_review">
                                <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                            </div>
                            <div class="testi-card_profile">
                                <div class="quote-icon">
                                    <img src="assets/img/icon/qoute.svg" alt="icon">
                                </div>
                                <div class="avatar">
                                    <img src="assets/img/testimonial/testi_2_1.png" alt="avatar">
                                </div>
                                <div class="testi-card_profile-details">
                                    <h3 class="testi-card_name">Andrew Simon</h3>
                                    <span class="testi-card_desig">Property Expert</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card style3">
                            <p class="testi-card_text">“A home that perfectly blends sustainability with luxury until I discovered Ecoland Residence. From the moment I stepped into this community, I knew it was where I wanted to live. The commitment to eco-friendly living, coupled with modern amenities, is truly commendable.”</p>
                            <div class="testi-grid_review">
                                <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                            </div>
                            <div class="testi-card_profile">
                                <div class="quote-icon">
                                    <img src="assets/img/icon/qoute.svg" alt="icon">
                                </div>
                                <div class="avatar">
                                    <img src="assets/img/testimonial/testi_1_1.png" alt="avatar">
                                </div>
                                <div class="testi-card_profile-details">
                                    <h3 class="testi-card_name">Ralph Edwards</h3>
                                    <span class="testi-card_desig">Property Expert</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
Team Area  
==============================-->
    <section class="space bg-theme">
        <div class="sec-bg-shape2-3 jump shape-mockup d-xxl-block d-none text-white" data-bottom="5%" data-right="8%">
            <img src="assets/img/shape/section_shape_2_3-1.jpg" alt="img">
        </div>
        <div class="container">
            <div class="row justify-content-lg-between align-items-center">
                <div class="col-lg-6">
                    <div class="title-area">
                        <h2 class="sec-title text-white">Propberries Team</h2>
                        <p class="text-light">Meet The Awesome Team</p>
                    </div>
                </div>
                <!--<div class="col-auto">-->
                <!--    <div class="sec-btn">-->
                <!--        <a href="team-1.html" class="th-btn style-border th-btn-icon">View All Team</a>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
            <div class="slider-area team-slider3">
                <div class="swiper th-slider" id="teamSlider3" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1400":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card style3">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/team_2_2-1.png" alt="Team">
                                    </div>
                                    <div class="th-social-wrap">
                                        <div class="th-social">
                                            <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a>
                                            
                                            <a target="_blank" href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                        <a class="icon-btn" href="#"><img src="assets/img/icon/arrow-right-2.svg" alt="img"></a>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <div class="media-left">
                                        <h3 class="box-title"><a href="#">Vinod Singh</a></h3>
                                        <span class="team-desig">Director</span>
                                    </div>
                                    <a class="icon-btn" href="tel:+919975706345"><img src="assets/img/icon/phone-1.svg" alt="img"></a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card style3">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/team_2_2-1.png" alt="Team">
                                    </div>
                                    <div class="th-social-wrap">
                                        <div class="th-social">
                                            <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a>
                                            
                                            <a target="_blank" href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                        <a class="icon-btn" href="#"><img src="assets/img/icon/arrow-right-2.svg" alt="img"></a>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <div class="media-left">
                                        <h3 class="box-title"><a href="#">Ved Singh</a></h3>
                                        <span class="team-desig">Associate Director</span>
                                    </div>
                                    <a class="icon-btn" href="tel:+919560365659 "><img src="assets/img/icon/phone-1.svg" alt="img"></a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card style3">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/team_2_2-1.png" alt="Team">
                                    </div>
                                    <div class="th-social-wrap">
                                        <div class="th-social">
                                            <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="#/"><i class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a>
                                            
                                            <a target="_blank" href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                        <a class="icon-btn" href="#"><img src="assets/img/icon/arrow-right-2.svg" alt="img"></a>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <div class="media-left">
                                        <h3 class="box-title"><a href="#">Hanuman Musale</a></h3>
                                        <span class="team-desig">Manager</span>
                                    </div>
                                    <a class="icon-btn" href="tel:+919560365659 "><img src="assets/img/icon/phone-1.svg" alt="img"></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <button data-slider-prev="#teamSlider3" class="slider-arrow style6 slider-prev"><img src="assets/img/icon/arrow-left-2.svg" alt="icon"></button>
                <button data-slider-next="#teamSlider3" class="slider-arrow style6 slider-next"><img src="assets/img/icon/arrow-right-2.svg" alt="icon"></button>
            </div>
        </div>
    </section>
    
    @endsection
    