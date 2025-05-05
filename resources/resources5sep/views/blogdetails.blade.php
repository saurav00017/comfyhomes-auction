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
                        <h1 class="breadcumb-title">Living sustainability: A day in the life at Propberriees residence</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.html">Home</a></li>
                            <li>Blog Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
    Blog Area
==============================-->
    <section class="th-blog-wrapper blog-details overflow-hidden space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-30">
                <div class="col-xxl-12 col-lg-12">
                    <div class="th-blog blog-single mb-0">
                        <div class="blog-img">
                            <img src="{{config('app.baseURL')}}/storage/app/{{$blog->image}}" alt="Blog Image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <!-- <a class="author" href="blog.html"><i class="far fa-user"></i>by David Smith</a> -->
                                <a href="blog.html"><i class="far fa-clock"></i>{{ \Carbon\Carbon::parse($blog->created_at)->format('d F, Y') }}</a>
                                <!-- <a href="blog.html"><i class="far fa-house-building"></i>Modern House</a> -->
                            </div>
                            <h2 class="blog-title">{{$blog->title}}.</h2>
                            <p class="blog-text">{{$blog->description}}</p>
                            
                           
                          
                            </div>
                        </div>
                    </div>                   
                </div>
                
            </div>
        </div>
    </section><!--==============================
    Popup Modal v1
============================== -->
    <div class="th-modal modal fade" id="portfolioModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="container">
                    <button type="button" class="icon-btn btn-close bg-title-dark" data-bs-dismiss="modal" aria-label="Close"><i class="fa-regular fa-xmark"></i></button>
                    <div class="page-single bg-title-dark">
                        <div class="page-img mb-30">
                            <img class="w-100 rounded-20" src="assets/img/project/project_pop1_1.png" alt="portfolio Image">
                        </div>
                        <div class="page-content">
                            <h2 class="h3 page-title text-white fw-medium">Where Visibility Meets Success</h2>
                            <div class="row gy-30">
                                <div class="col-xl-7">
                                    <p class="mb-20 text-light">The timeline varies depending on the complexity of the project. Simple projects may take a few weeks, while more complex ones could extend to several months. Timelines are influenced by factors like scope, feedback iterations, and client responsiveness.</p>

                                    <p class="mb-xl-4 mb-0 text-light">Project timelines vary based on complexity and scope. Small projects may take a few weeks, while larger ones could span several months. Timelines are established during project kickoff. We use a range of industry-standard tools such as Sketch.</p>
                                </div>
                                <div class="col-xl-5">
                                    <div class="checklist">
                                        <ul>
                                            <li class="text-light"><strong>Service Category:</strong> Rubix Carabil Tower</li>
                                            <li class="text-light"><strong>Clients:</strong> David Malan</li>
                                            <li class="text-light"><strong>Project Date:</strong> 13 June, 2020</li>
                                            <li class="text-light"><strong>Avenue End Date:</strong> 22 July, 2023</li>
                                            <li class="text-light"><strong>Locations:</strong> NewYork - 2546 Firs, USA</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="row gy-30 gx-40 align-items-center">
                                <div class="col-xl-6">
                                    <div class="page-img mb-0">
                                        <img class="w-100 rounded-20" src="assets/img/project/project_pop2_1.png" alt="portfolio Image">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <h4 class="box-title text-white fw-medium">Services Benefits:</h4>
                                    <p class="text-light">We can do both. We can adhere to existing brand guidelines, ensuring consistency, or help develop new ones if a client is looking for a fresh identity. Our goal is to align the UI/UX design with the brand's overall strategy product meets the needs.</p>
                                    <div class="checklist style3">
                                        <ul>
                                            <li class="text-light"><i class="far fa-check-circle"></i>We use the latest diagnostic equipment</li>
                                            <li class="text-light"><i class="far fa-check-circle"></i>Automotive service our clients receive</li>
                                            <li class="text-light"><i class="far fa-check-circle"></i>We are a member of Professional Service</li>
                                            <li class="text-light"><i class="far fa-check-circle"></i>Digital how will activities impact traditional</li>
                                            <li class="text-light"><i class="far fa-check-circle"></i>Architect and technical engineer</li>
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


@endsection