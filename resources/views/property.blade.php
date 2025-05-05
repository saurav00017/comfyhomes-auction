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
                        <h1 class="breadcumb-title">All Property</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.html">Home</a></li>
                            <li>Properties</li>
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
            <ul class="nav nav-tabs property-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="rent-tab" data-bs-toggle="tab" data-bs-target="#rent-tab-pane" type="button" role="tab" aria-controls="rent-tab-pane" aria-selected="true">Buy</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="buy-tab" data-bs-toggle="tab" data-bs-target="#buy-tab-pane" type="button" role="tab" aria-controls="buy-tab-pane" aria-selected="false">Rent</button>
                </li>
            </ul>
<!--             <div class="tab-content">
 -->               <!--  <div class="tab-pane fade show active" id="rent-tab-pane" role="tabpanel" aria-labelledby="rent-tab" tabindex="0">
                    <form class="property-search-form">
                        <label>Property Search</label>
                        <div class="form-group">
                            <i class="far fa-search"></i>
                            <input class="form-control" type="text" placeholder="Lisiting ID or Location">
                        </div>
                        <select class="form-select">
                            <option value="category" selected="selected">Category</option>
                            <option value="luxury">Luxury</option>
                            <option value="commercial">Commercial</option>
                        </select>
                        <select class="form-select">
                            <option value="offer_type" selected="selected">Offer Type</option>
                            <option value="popularity">Popularity</option>
                            <option value="rating">Rating</option>
                            <option value="date">Latest</option>
                        </select>
                        <button class="th-btn" type="submit"><i class="far fa-search"></i> Search</button>
                    </form>
                </div> -->
               <!--  <div class="tab-pane fade" id="buy-tab-pane" role="tabpanel" aria-labelledby="buy-tab" tabindex="0">
                    <form class="property-search-form">
                        <label>Property Search</label>
                        <div class="form-group">
                            <i class="far fa-search"></i>
                            <input class="form-control" type="text" placeholder="Lisiting ID or Location">
                        </div>
                        <select class="form-select">
                            <option value="category" selected="selected">Category</option>
                            <option value="luxury">Luxury</option>
                            <option value="commercial">Commercial</option>
                        </select>
                        <select class="form-select">
                            <option value="offer_type" selected="selected">Offer Type</option>
                            <option value="popularity">Popularity</option>
                            <option value="rating">Rating</option>
                            <option value="date">Latest</option>
                        </select>
                        <button class="th-btn" type="submit"><i class="far fa-search"></i> Search</button>
                    </form>
                </div> -->
<!--             </div>
 -->            <!-- <div class="th-sort-bar">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md">
                        <p class="woocommerce-result-count">Showing 1–9 of 16 results</p>
                    </div>

                    <div class="col-md-auto">
                        <div class="sorting-filter-wrap">
                            <form class="woocommerce-ordering" method="get">
                                <select name="orderby" class="orderby" aria-label="Shop order">
                                    <option value="menu_order" selected="selected">Default Sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by latest</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                            </form>
                            <div class="nav" role="tablist">
                                <a class="active" href="#" id="tab-shop-list" data-bs-toggle="tab" data-bs-target="#tab-list" role="tab" aria-controls="tab-grid" aria-selected="false"><i class="fa-light fa-grid-2"></i></a>
                                <a href="#" id="tab-shop-grid" data-bs-toggle="tab" data-bs-target="#tab-grid" role="tab" aria-controls="tab-grid" aria-selected="true"><i class="fa-solid fa-list"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade active show" id="tab-list" role="tabpanel" aria-labelledby="tab-shop-list">
                    <div class="row gy-40">
                        @foreach($property as $propertys)
                        <div class="col-md-6 col-xl-4">
                            <div class="property-card2">
                                <div class="property-card-thumb img-shine">
                                    <img src="{{config('app.baseURL')}}/storage/app/{{$propertys->thumbnil_image}}" alt="img">
                                </div>
                                <div class="property-card-details">
                                    <div class="media-left">
                                        <h4 class="property-card-title"><a href="property-details.html">{{$propertys->property_name}}</a></h4>
                                        @if($propertys->type==1)
                                        <h5 class="property-card-price">RS {{$propertys->selling_price}}</h5>
                                        @else
                                        <h5 class="property-card-price">RS {{$propertys->deposite}}</h5>
                                        <h5 class="property-card-price">RS {{$propertys->rent}}</h5>
                                        @endif
                                        <p class="property-card-location">{{$propertys->location}}</p>
                                    </div>
                                    <div class="btn-wrap">
                                        <a href="{{config('app.baseURL')}}/property-details?id={{$propertys->id}}" class="th-btn style-border2 th-btn-icon">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                     @endforeach
                    </div>

                </div>
                <div class="tab-pane fade" id="tab-grid" role="tabpanel" aria-labelledby="tab-shop-grid">
                    <div class="property-card-wrap style-dark">
                        <div class="property-thumb img-shine" data-mask-src="assets/img/shape/property-card1-img-mask.png">
                            <img src="assets/img/property/property1-1.png" alt="img">
                        </div>
                        <div class="property-card style-dark">
                            <div class="property-card-number">
                                01 </div>
                            <div class="property-card-details">
                                <span class="property-card-subtitle">Apartment</span>
                                <h4 class="property-card-title"><a href="property-details.html">Villa Berkel-Enschot</a></h4>
                                <p class="property-card-text">Rapidiously myocardinate cross-platform intellectual capital model. Appropriately create interactive infrastructures</p>
                                <div class="property-card-price-meta">
                                    <h5 class="property-card-price">$45,000.00</h5>
                                    <div class="property-ratting-wrap">
                                        <div class="star-ratting">
                                            <i class="fas fa-star"></i>
                                            4.9
                                        </div>
                                        10 Review
                                    </div>
                                </div>
                                <div class="property-card-meta">
                                    <span><img src="assets/img/icon/property-icon1-1.svg" alt="img">Bed 4</span>
                                    <span><img src="assets/img/icon/property-icon1-2.svg" alt="img">Bath 2</span>
                                    <span><img src="assets/img/icon/property-icon1-3.svg" alt="img">1500 sqft</span>
                                </div>
                                <div class="property-btn-wrap">
                                    <div class="property-author-wrap">
                                        <img src="assets/img/property/property-user-1-1.png" alt="img">
                                        <a href="property-details.html">Admin</a>
                                    </div>
                                    <a href="property-details.html" class="th-btn style-border2 th-btn-icon">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="property-card-wrap style-dark">
                        <div class="property-thumb img-shine" data-mask-src="assets/img/shape/property-card1-img-mask.png">
                            <img src="assets/img/property/property1-2.png" alt="img">
                        </div>
                        <div class="property-card style-dark">
                            <div class="property-card-number">
                                02 </div>
                            <div class="property-card-details">
                                <span class="property-card-subtitle">Apartment</span>
                                <h4 class="property-card-title"><a href="property-details.html">Toronto Townhouse</a></h4>
                                <p class="property-card-text">Rapidiously myocardinate cross-platform intellectual capital model. Appropriately create interactive infrastructures</p>
                                <div class="property-card-price-meta">
                                    <h5 class="property-card-price">$45,000.00</h5>
                                    <div class="property-ratting-wrap">
                                        <div class="star-ratting">
                                            <i class="fas fa-star"></i>
                                            4.9
                                        </div>
                                        10 Review
                                    </div>
                                </div>
                                <div class="property-card-meta">
                                    <span><img src="assets/img/icon/property-icon1-1.svg" alt="img">Bed 4</span>
                                    <span><img src="assets/img/icon/property-icon1-2.svg" alt="img">Bath 2</span>
                                    <span><img src="assets/img/icon/property-icon1-3.svg" alt="img">1500 sqft</span>
                                </div>
                                <div class="property-btn-wrap">
                                    <div class="property-author-wrap">
                                        <img src="assets/img/property/property-user-1-2.png" alt="img">
                                        <a href="property-details.html">Admin</a>
                                    </div>
                                    <a href="property-details.html" class="th-btn style-border2 th-btn-icon">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="property-card-wrap style-dark">
                        <div class="property-thumb img-shine" data-mask-src="assets/img/shape/property-card1-img-mask.png">
                            <img src="assets/img/property/property1-3.png" alt="img">
                        </div>
                        <div class="property-card style-dark">
                            <div class="property-card-number">
                                03 </div>
                            <div class="property-card-details">
                                <span class="property-card-subtitle">Apartment</span>
                                <h4 class="property-card-title"><a href="property-details.html">Virgin Vineyard House</a></h4>
                                <p class="property-card-text">Rapidiously myocardinate cross-platform intellectual capital model. Appropriately create interactive infrastructures</p>
                                <div class="property-card-price-meta">
                                    <h5 class="property-card-price">$45,000.00</h5>
                                    <div class="property-ratting-wrap">
                                        <div class="star-ratting">
                                            <i class="fas fa-star"></i>
                                            4.9
                                        </div>
                                        10 Review
                                    </div>
                                </div>
                                <div class="property-card-meta">
                                    <span><img src="assets/img/icon/property-icon1-1.svg" alt="img">Bed 4</span>
                                    <span><img src="assets/img/icon/property-icon1-2.svg" alt="img">Bath 2</span>
                                    <span><img src="assets/img/icon/property-icon1-3.svg" alt="img">1500 sqft</span>
                                </div>
                                <div class="property-btn-wrap">
                                    <div class="property-author-wrap">
                                        <img src="assets/img/property/property-user-1-3.png" alt="img">
                                        <a href="property-details.html">Admin</a>
                                    </div>
                                    <a href="property-details.html" class="th-btn style-border2 th-btn-icon">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="property-card-wrap style-dark">
                        <div class="property-thumb img-shine" data-mask-src="assets/img/shape/property-card1-img-mask.png">
                            <img src="assets/img/property/property1-4.png" alt="img">
                        </div>
                        <div class="property-card style-dark">
                            <div class="property-card-number">
                                04 </div>
                            <div class="property-card-details">
                                <span class="property-card-subtitle">Apartment</span>
                                <h4 class="property-card-title"><a href="property-details.html">Apartments Auckland</a></h4>
                                <p class="property-card-text">Rapidiously myocardinate cross-platform intellectual capital model. Appropriately create interactive infrastructures</p>
                                <div class="property-card-price-meta">
                                    <h5 class="property-card-price">$45,000.00</h5>
                                    <div class="property-ratting-wrap">
                                        <div class="star-ratting">
                                            <i class="fas fa-star"></i>
                                            4.9
                                        </div>
                                        10 Review
                                    </div>
                                </div>
                                <div class="property-card-meta">
                                    <span><img src="assets/img/icon/property-icon1-1.svg" alt="img">Bed 4</span>
                                    <span><img src="assets/img/icon/property-icon1-2.svg" alt="img">Bath 2</span>
                                    <span><img src="assets/img/icon/property-icon1-3.svg" alt="img">1500 sqft</span>
                                </div>
                                <div class="property-btn-wrap">
                                    <div class="property-author-wrap">
                                        <img src="assets/img/property/property-user-1-4.png" alt="img">
                                        <a href="property-details.html">Admin</a>
                                    </div>
                                    <a href="property-details.html" class="th-btn style-border2 th-btn-icon">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="mt-60 text-center">
               @if ($property->lastPage() > 1)
    <div class="th-pagination">
        <ul>
            <!-- Previous Page Link -->
            @if ($property->onFirstPage())
                <li><span class="prev-page disabled"><i class="far fa-arrow-left me-2"></i>Previous</span></li>
            @else
                <li><a class="prev-page" href="{{ $property->previousPageUrl() }}"><i class="far fa-arrow-left me-2"></i>Previous</a></li>
            @endif

            <!-- Pagination Elements -->
            @foreach ($property->getUrlRange(1, $property->lastPage()) as $page => $url)
                @if ($page == $property->currentPage())
                    <li><span class="active">{{ $page }}</span></li>
                @else
                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach

            <!-- Next Page Link -->
            @if ($property->hasMorePages())
                <li><a class="next-page" href="{{ $property->nextPageUrl() }}">Next<i class="far fa-arrow-right ms-2"></i></a></li>
            @else
                <li><span class="next-page disabled">Next<i class="far fa-arrow-right ms-2"></i></span></li>
            @endif
        </ul>
    </div>
@endif


            </div>
        </div>
    </section>
@endsection