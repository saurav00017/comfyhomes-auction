@extends('layouts.app')
<style type="text/css">
    .viewdetails{
        margin-bottom: 5%;

    }
</style>
@section('content')



<div id="page-wrapper" class="bg-white">
        <div class="row">
            <div class="full-row py-0">
                <div class="container-fluid">
                    <div class="row">
                         <div class="col-lg-3 p-0"> 
                            <div class="advance-sidebar bg-primary text-white"> <a class="hover-text-secondary" href="index-1.html"><i class="fas fa-angle-left me-1"></i>Back Home</a>
                                <h4 class="double-down-line-left-white position-relative pb-4 mt-4 mb-5">Property Search</h4>
                                <form class="transparent-white" method="post" action="action-page-post.html">
                                    <div class="row row-cols-1 g-4">
                                        <div class="col">
                                            <label class="form-label">Property Type</label>
                                            <div class="select-arrow text-white">
                                                <select class="form-control form-select">
                                                        <option>Select</option>
                                                        <option>USA</option>
                                                        <option>Australia</option>
                                                        <option>Russia</option>
                                                        <option>France</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Property Status</label>
                                            <div class="select-arrow text-white">
                                                <select class="form-control form-select">
                                                        <option>Select</option>
                                                        <option>USA</option>
                                                        <option>Australia</option>
                                                        <option>Russia</option>
                                                        <option>France</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">State / Location</label>
                                            <div class="select-arrow text-white">
                                                <select class="form-control form-select">
                                                        <option>Select</option>
                                                        <option>USA</option>
                                                        <option>Australia</option>
                                                        <option>Russia</option>
                                                        <option>France</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">City</label>
                                            <div class="select-arrow text-white">
                                                <select class="form-control form-select">
                                                        <option>Select</option>
                                                        <option>USA</option>
                                                        <option>Australia</option>
                                                        <option>Russia</option>
                                                        <option>France</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Number Of Beds</label>
                                            <div class="range-slider pb-5">
                                                <input id="beds-room" type="text" name="price" value="5">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Number Of Baths</label>
                                            <div class="range-slider pb-5">
                                                <input id="bath-room" type="text" name="price" value="2">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Area</label>
                                            <div class="layout-slider pb-5"> <span>
                                                <input id="Slider1" type="text" name="price" value="30000.5; 60000">
                                                </span> </div>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Price</label>
                                            <div class="price-range pb-5">
                                                <div class="price-filter"> <span class="price-slider">
                                                    <input class="filter-price" type="text" name="price" value="100000;900000">
                                                    </span> </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row my-4">
                                                <div class="col-xxl-6 col-lg-12 col-md-6">
                                                    <ul class="check-submit">
                                                        <li>
                                                            <input id="feature-1" class="d-none" type="checkbox">
                                                            <label for="feature-1">Parking Garage</label>
                                                        </li>
                                                        <li>
                                                            <input id="feature-2" class="d-none" type="checkbox">
                                                            <label for="feature-2">Security System</label>
                                                        </li>
                                                        <li>
                                                            <input id="feature-3" class="d-none" type="checkbox">
                                                            <label for="feature-3">Garden</label>
                                                        </li>
                                                        <li>
                                                            <input id="feature-4" class="d-none" type="checkbox">
                                                            <label for="feature-4">Fire Place</label>
                                                        </li>
                                                        <li>
                                                            <input id="feature-5" class="d-none" type="checkbox">
                                                            <label for="feature-5">Emeargency</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-xxl-6 col-lg-12 col-md-6">
                                                    <ul class="check-submit">
                                                        <li>
                                                            <input id="feature-8" class="d-none" type="checkbox">
                                                            <label for="feature-8">Swiming Pool</label>
                                                        </li>
                                                        <li>
                                                            <input id="feature-9" class="d-none" type="checkbox">
                                                            <label for="feature-9">Air Condition</label>
                                                        </li>
                                                        <li>
                                                            <input id="feature-10" class="d-none" type="checkbox">
                                                            <label for="feature-10">Fire Protection</label>
                                                        </li>
                                                        <li>
                                                            <input id="feature-11" class="d-none" type="checkbox">
                                                            <label for="feature-11">Home Theater</label>
                                                        </li>
                                                        <li>
                                                            <input id="feature-12" class="d-none" type="checkbox">
                                                            <label for="feature-12">Gym & Sports</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-xxl-12 col-lg-12 col-md-12">
                                                    <button type="submit" class="btn btn-white mt-4">Search</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <div class="col-lg-9 p-0">
                            <div class="w-100 bg-white shadow-sm text-secondary">
                                <ul class="nav-menu d-flex">
                                    <li class="active"> <a href="property-search-grid.html">Property</a> </li>
                                    <li> <a href="agent-search.html">Agents</a> </li>
                                    <li> <a href="dashboard-listing.html">Manage Listing</a> </li>
                                </ul>
                            </div>
                            <div class="col-md-12 ps-0">
                                <div class="property-thumview mt-4 px-5">
                                    <div class="row py-4">
                                        <div class="col-md-9">
                                             <form method="get" action="{{config('app.baseURL')}}/search">
                            <div class="row g-3">
                                <div class="col-md-6 col-lg-2">
                                    <div class="select-arrow">
                                        <select class="form-control form-select bg-white" name="property_type" style="    border: 1px solid #ececec;">
                                                <option value="">All Category</option>
                                                @foreach($category as $categorys)
                                                <option value="{{$categorys->id}}">{{$categorys->name}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-6">
                                    <input type="text" class="form-control" id="validationDefault03" placeholder="Enter Neighborhood, City or State" required="" name="city">
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <button type="submit" class="btn btn-primary w-100">Search Property</button>
                                </div>
                            </div>
                        </form>
                                        </div>
                                       
                                    </div>
                                    <div class="row row-cols-1 g-4">
                                        @foreach($property as $propertys)
                                        <div class="col">
                                            <div class="featured-thumb list list2 hover-zoomer">
                                                <div class="overlay-black overflow-hidden position-relative image-area"> <img src="assets/images/thumbnail/01.jpg" alt="">
                                                    <div class="featured bg-primary text-white">Featured</div>
                                                    <div class="sale bg-secondary text-white">For Sale</div>
                                                    <div class="price text-primary">₹ {{ number_format($propertys->property_price, 0, '.', ',') }}</div>
                                                    <div class="starmark text-white"><i class="far fa-star"></i></div>
                                                </div>
                                                <div class="featured-thumb-data shadow-one">
                                                    <div class="p-4">
                                                        <h5 class="text-secondary hover-text-primary mb-2">{{$propertys->category->name}}</h5>
                                                        <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> {{$propertys->taluka}} {{$propertys->district}}</span> </div>
                                                    <div class="bg-gray quantity px-4 pt-4">
                                                        <ul>
                                                            <li><span>{{$propertys->area}}</span> Sqft</li>
                                                            <li><span></span></li>
                                                            @if($propertys->possession==1)
                                                            <li>Physical Possession</li>
                                                            @else
                                                            <li>Symbolic Possession</li>
                                                            @endif
                                                            <li><span>EMD ₹</span> {{$propertys->emd_amount}} </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div class="p-4 d-inline-block w-100 author">
                                                        <div class="float-start"><i class="text-primary mr-1"><img class="text-primary mr-1" src="{{ config('app.baseURL') }}/storage/app/{{ $propertys->bank->icon }}" alt="Icon" style="width: 3%!important"></i> {{$propertys->bank->bank_name}}</div>
                                                        <div class="float-end"><i class="far fa-calendar-alt text-primary mr-1"></i> {{ \Carbon\Carbon::parse($propertys->created_at)->diffForHumans() }}</div>
                                                    </div>

                                                    <div class="col-md-3" style=" float: inline-end; margin-right: 2%; margin-top: 5%;">
                            <a class="btn btn-primary d-table ms-auto viewdetails" href="{{config('app.baseURL')}}/search-details?id={{$propertys->id}}'">View Details</a>
                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                                   
                                    </div> 
                                 <div class="row justify-content-center my-5">
    <div class="col-auto">
        @if ($property->hasPages())
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    {{-- Previous Page Link --}}
                    @if ($property->onFirstPage())
                        <li class="page-item disabled"><span class="page-link">Previous</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $property->previousPageUrl() }}" rel="prev">Previous</a></li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($property->getUrlRange(1, $property->lastPage()) as $page => $url)
                        @if ($page == $property->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($property->hasMorePages())
                        <li class="page-item"><a class="page-link" href="{{ $property->nextPageUrl() }}" rel="next">Next</a></li>
                    @else
                        <li class="page-item disabled"><span class="page-link">Next</span></li>
                    @endif
                </ul>
            </nav>
        @endif
    </div>
</div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Scroll to top -->
            <a href="#" class="bg-secondary text-white" id="scroll"><i class="fas fa-angle-up"></i></a>
            <!-- End Scroll To top -->
        </div>
    </div>
    <!-- Wrapper End -->




@endsection