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
                        <h1 class="breadcumb-title">{{$property->property_name}}</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.html">Home</a></li>
                            <li>{{$property->property_name}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
Property Page Area
==============================-->
    <section class="space-top space-extra-bottom" style="background-color: #A4B5BA !important;">
        <div class="container">
            <div class="slider-area property-slider1">
                <div class="swiper th-slider mb-4" id="propertySlider" data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".property-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="property-slider-img">
                                <img src="{{config('app.baseURL')}}/storage/app/{{$property->thumbnil_image}}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper th-slider property-thumb-slider" data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}},"autoplayDisableOnInteraction":"true"}'>
                    <div class="swiper-wrapper" style=" height: 220px; 
    margin-bottom: 5px; 
    position: relative;">
                      

                       @php
    $totalImages = $property->property_image->count(); // Count of actual property images
    $dummyCount = max(0, 4 - $totalImages); // Calculate number of dummy images needed
@endphp

@foreach($property->property_image as $property_image)
    <div class="swiper-slide">
        <div class="property-slider-img">
            <!-- Construct the correct image URL -->
            <img 
                src="{{ config('app.baseURL') }}/storage/app/{{ $property_image->image }}" 
                alt="Property Image" 
                onerror="this.onerror=null; this.src='{{ config('app.baseURL') }}/assets/img/no-picture-available.webp';"
            >
        </div>
    </div>
@endforeach

<!-- Render dummy images if needed -->
@for ($i = 0; $i < $dummyCount; $i++)
    <div class="swiper-slide">
        <div class="property-slider-img">
            <img 
                src="{{ config('app.baseURL') }}/assets/img/no-picture-available.webp" 
                alt="Dummy Image"
            >
        </div>
    </div>
@endfor




                        

                        
                    </div>
                </div>

                <button data-slider-prev="#propertySlider" class="slider-arrow style3 slider-prev"><img src="assets/img/icon/arrow-left.svg" alt="icon"></button>
                <button data-slider-next="#propertySlider" class="slider-arrow style3 slider-next"><img src="assets/img/icon/arrow-right.svg" alt="icon"></button>
            </div>
            <div class="row gx-30">
                <div class="col-xxl-8 col-lg-7">
                    <div class="property-page-single">
                        <div class="page-content">
                            <div class="property-meta mb-30">
                                <!-- <a class="property-tag" href="blog.html">Featured</a> -->
                                <a href="blog.html"><img src="assets/img/icon/calendar.svg" alt="img">{{ \Carbon\Carbon::parse($property->created_at)->format('d F, Y') }}</a>
                                <!-- <a href="blog.html"><img src="assets/img/icon/comments.svg" alt="img">32 Comments</a> -->
                            </div>
                            <h2 class="page-title">About This Property</h2>
                            <p class="mb-30">{{$property->description}}</h2>
                            <ul class="property-grid-list">
                                
                                <li>
                                    <div class="property-grid-list-icon">
                                        <img src="assets/img/icon/property-single-icon1-2.svg" alt="img">
                                    </div>
                                    <div class="property-grid-list-details">
                                        <h4 class="property-grid-list-title">Type</h4>
                                        <p class="property-grid-list-text">Residencial</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="property-grid-list-icon">
                                        <img src="assets/img/icon/property-single-icon1-3.svg" alt="img">
                                    </div>
                                    <div class="property-grid-list-details">
                                        <h4 class="property-grid-list-title">Room</h4>
                                        <p class="property-grid-list-text">{{$property->no_room}}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="property-grid-list-icon">
                                        <img src="assets/img/icon/property-single-icon1-4.svg" alt="img">
                                    </div>
                                    <div class="property-grid-list-details">
                                        <h4 class="property-grid-list-title">Bedroom</h4>
                                        <p class="property-grid-list-text">{{$property->no_bed_room}}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="property-grid-list-icon">
                                        <img src="assets/img/icon/property-single-icon1-5.svg" alt="img">
                                    </div>
                                    <div class="property-grid-list-details">
                                        <h4 class="property-grid-list-title">Bath</h4>
                                        <p class="property-grid-list-text">{{$property->no_bath_room}}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="property-grid-list-icon">
                                        <img src="assets/img/icon/property-single-icon1-6.svg" alt="img">
                                    </div>
                                    <div class="property-grid-list-details">
                                        <h4 class="property-grid-list-title">Purpose</h4>
                                        @if($property->type==1)
                                        <p class="property-grid-list-text">For Sale</p>
                                        @else
                                        <p class="property-grid-list-text">For Rent</p>
                                        @endif

                                    </div>
                                </li>
                                <li>
                                    <div class="property-grid-list-icon">
                                        <img src="assets/img/icon/property-single-icon1-7.svg" alt="img">
                                    </div>
                                    <div class="property-grid-list-details">
                                        <h4 class="property-grid-list-title">Carpet Sqft</h4>
                                        <p class="property-grid-list-text">{{$property->carpet_area}}</p>
                                    </div>
                                </li>
                                 <li>
                                    <div class="property-grid-list-icon">
                                        <img src="assets/img/icon/property-single-icon1-7.svg" alt="img">
                                    </div>
                                    <div class="property-grid-list-details">
                                        <h4 class="property-grid-list-title">Build Sqft</h4>
                                        <p class="property-grid-list-text">{{$property->built_area}}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="property-grid-list-icon">
                                        <img src="assets/img/icon/property-single-icon1-8.svg" alt="img">
                                    </div>
                                    <div class="property-grid-list-details">
                                        <h4 class="property-grid-list-title">Parking</h4>
                                        @if($property->parking==1)
                                        <p class="property-grid-list-text">Yes</p>
                                        @else
                                        <p class="property-grid-list-text">No</p>
                                        @endif

                                    </div>
                                </li>
                              <!--   <li>
                                    <div class="property-grid-list-icon">
                                        <img src="assets/img/icon/property-single-icon1-9.svg" alt="img">
                                    </div>
                                    <div class="property-grid-list-details">
                                        <h4 class="property-grid-list-title">Elevator</h4>
                                        <p class="property-grid-list-text">Yes</p>
                                    </div>
                                </li> -->
                                
                            </ul>
                            <!-- <h3 class="page-title mt-50 mb-30">From Our Gallery</h3>
                            <div class="row gy-4">
                                <div class="col-xl-5">
                                    <div class="property-gallery-card">
                                        <div class="property-gallery-card-img">
                                            <img class="w-100" src="assets/img/property/property_inner_6.jpg" alt="img">
                                        </div>
                                        <a class="icon-btn popup-image" href="assets/img/property/property_inner_6.jpg"><i class="fal fa-magnifying-glass-plus"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-7">
                                    <div class="property-gallery-card">
                                        <div class="property-gallery-card-img">
                                            <img class="w-100" src="assets/img/property/property_inner_7.jpg" alt="img">
                                        </div>
                                        <a class="icon-btn popup-image" href="assets/img/property/property_inner_7.jpg"><i class="fal fa-magnifying-glass-plus"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-7">
                                    <div class="property-gallery-card">
                                        <div class="property-gallery-card-img">
                                            <img class="w-100" src="assets/img/property/property_inner_8.jpg" alt="img">
                                        </div>
                                        <a class="icon-btn popup-image" href="assets/img/property/property_inner_8.jpg"><i class="fal fa-magnifying-glass-plus"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-5">
                                    <div class="property-gallery-card">
                                        <div class="property-gallery-card-img">
                                            <img class="w-100" src="assets/img/property/property_inner_9.jpg" alt="img">
                                        </div>
                                        <a class="icon-btn popup-image" href="assets/img/property/property_inner_9.jpg"><i class="fal fa-magnifying-glass-plus"></i></a>
                                    </div>
                                </div>
                            </div> -->
                            <h3 class="page-title mt-50 mb-25">Features & amenities</h3>
                            <!-- <div class="row gy-3">
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="checklist">
                                        <ul>
                                            <li><i class="far fa-square-check"></i>Airconditioning</li>
                                            <li><i class="far fa-square-check"></i>Balcony</li>
                                            <li><i class="far fa-square-check"></i>Garage</li>
                                            <li><i class="far fa-square-check"></i>Landscaping</li>
                                            <li><i class="far fa-square-check"></i>Outdoor Kitchen</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="checklist">
                                        <ul>
                                            <li><i class="far fa-square-check"></i>Barbeque</li>
                                            <li><i class="far fa-square-check"></i>Recreation</li>
                                            <li><i class="far fa-square-check"></i>Microwave</li>
                                            <li><i class="far fa-square-check"></i>Basketball</li>
                                            <li><i class="far fa-square-check"></i>Fireplace</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="checklist">
                                        <ul>
                                            <li><i class="far fa-square-check"></i>24x7 Seccurity</li>
                                            <li><i class="far fa-square-check"></i>Indoor Game</li>
                                            <li><i class="far fa-square-check"></i>Pool</li>
                                            <li><i class="far fa-square-check"></i>Tanis Courts</li>
                                            <li><i class="far fa-square-check"></i>Internet</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="checklist">
                                        <ul>
                                            <li><i class="far fa-square-check"></i>Jaguzzi</li>
                                            <li><i class="far fa-square-check"></i>Modern Kitchen</li>
                                            <li><i class="far fa-square-check"></i>Refrigerator</li>
                                            <li><i class="far fa-square-check"></i>Window Coverings</li>
                                            <li><i class="far fa-square-check"></i>Washer</li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                       <div class="row gy-3">
    @if($property->property_amenety && $property->property_amenety->count() > 0)
        @foreach($property->property_amenety->chunk(5) as $amenityChunk)
            <div class="col-xxl-3 col-sm-6">
                <div class="checklist">
                    <ul>
                        @foreach($amenityChunk as $amenity)
                            <li><i class="far fa-square-check"></i>{{ $amenity->amenety->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach
    @else
        <p>No amenities available for this property.</p>
    @endif
</div>


                            <h3 class="page-title mt-45 mb-30">Location</h3>
                            <div class="location-map">
                                <div class="contact-map">
                                    <iframe src="{{$property->iframe}}" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                                <div class="location-map-address">
                                    <div class="thumb">
                                        <img src="assets/img/property/property_inner_1.jpg" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="title">Address:</h4>
                                        <p class="text">{{$property->location}}</p>
                                        
                                    </div>
                                </div>
                            </div>
                           <!--  <div class="row align-items-center justify-content-between">
                                <div class="col-lg-auto">
                                    <h3 class="page-title mt-50 mb-30">Floor Plan</h3>
                                </div>
                                <div class="col-lg-auto">
                                    <ul class="nav nav-tabs property-tab mt-50" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="floor-tab1" data-bs-toggle="tab" data-bs-target="#floor-tab1-pane" type="button" role="tab" aria-controls="floor-tab1-pane" aria-selected="true">First Floor</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="floor-tab2" data-bs-toggle="tab" data-bs-target="#floor-tab2-pane" type="button" role="tab" aria-controls="floor-tab2-pane" aria-selected="false">Second Floor</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="floor-tab3" data-bs-toggle="tab" data-bs-target="#floor-tab3-pane" type="button" role="tab" aria-controls="floor-tab3-pane" aria-selected="false">Third Floor</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="floor-tab4" data-bs-toggle="tab" data-bs-target="#floor-tab4-pane" type="button" role="tab" aria-controls="floor-tab4-pane" aria-selected="false">Top Garden </button>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->
                            <!-- <div class="tab-content">
                                <div class="tab-pane fade show active" id="floor-tab1-pane" role="tabpanel" aria-labelledby="floor-tab1" tabindex="0">
                                    <div class="property-grid-plan">
                                        <div class="property-grid-thumb">
                                            <img src="assets/img/property/property_inner_10.jpg" alt="img">
                                        </div>
                                        <div class="property-grid-details">
                                            <h4 class="property-grid-title">First Floor </h4>
                                            <p class="property-grid-text">doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="floor-tab2-pane" role="tabpanel" aria-labelledby="floor-tab2" tabindex="0">
                                    <div class="property-grid-plan">
                                        <div class="property-grid-thumb">
                                            <img src="assets/img/property/property_inner_10.jpg" alt="img">
                                        </div>
                                        <div class="property-grid-details">
                                            <h4 class="property-grid-title">Second Floor </h4>
                                            <p class="property-grid-text">doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="floor-tab3-pane" role="tabpanel" aria-labelledby="floor-tab3" tabindex="0">
                                    <div class="property-grid-plan">
                                        <div class="property-grid-thumb">
                                            <img src="assets/img/property/property_inner_10.jpg" alt="img">
                                        </div>
                                        <div class="property-grid-details">
                                            <h4 class="property-grid-title">Third Floor </h4>
                                            <p class="property-grid-text">doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="floor-tab4-pane" role="tabpanel" aria-labelledby="floor-tab4" tabindex="0">
                                    <div class="property-grid-plan">
                                        <div class="property-grid-thumb">
                                            <img src="assets/img/property/property_inner_10.jpg" alt="img">
                                        </div>
                                        <div class="property-grid-details">
                                            <h4 class="property-grid-title">Top Garden </h4>
                                            <p class="property-grid-text">doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore.</p>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                           <!--  <h3 class="page-title mt-50 mb-30">Property Video</h3>
                            <div class="video-box2 mb-30">
                                <img src="assets/img/property/property_inner_3.jpg" alt="img">
                                <a href="../../watch.html?v=_sI_Ps7JSEk" class="play-btn style4 popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget-property-contact">
                            @if($property->type==1)
                            <h4 class="widget_subtitle">For Sale</h4>
                            @else
                            <h4 class="widget_subtitle">For Rent</h4>
                            @endif

                            @if($property->type==1)
                            <h4 class="widget_price">RS {{$property->selling_price}}</h4>
                            @else
                            <h4 class="widget_price">RS {{$property->rent}}</h4>
                            @endif

                            <p class="widget_text">I am interested in this property</p>
                            <form action="{{config('app.baseURL')}}/enquiry" method="post" class="widget-property-contact-form">

                                @csrf

                                <input type="hidden" name="property_id" value="{{$property->id}}">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control style-border" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control style-border" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone_no" class="form-control style-border" placeholder="Phone Number">
                                </div>
                                <button class="th-btn style-white th-btn-icon mt-15">Submit</button>
                            </form>
                        </div>
                        <!-- <div class="widget  ">
                            <h3 class="widget_title">Featured Listing</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-1.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Exploring The Green Spaces Of Realar Residence</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="far fa-calendar"></i>22/6/2024</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-2.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Harmony With Nature Of Realar Residence</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="far fa-calendar"></i>25/6/2024</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-3.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Exploring The Green Spaces Of Realar Residence</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="far fa-calendar"></i>27/6/2024</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="widget widget_banner  " data-bg-src="assets/img/widget/widget-banner.png">
                            <div class="widget-banner text-center">
                                <h3 class="title">Need Help? We Are Here To Help You</h3>
                                <div class="logo"><img src="assets/img/propberries.jpeg" alt="img"></div>
                                <h4 class="subtitle">You Get Online support</h4>
                                <h5 class="link"><a href="tel:9975706345">+91-997-570-6345</a></h5>
                                <h5 class="link"><a href="tel:9560365659">+91-956-036-5659</a></h5>

                               <a href="{{config('app.baseURL')}}/contact" class="th-btn style-border th-btn-icon">Read More</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection