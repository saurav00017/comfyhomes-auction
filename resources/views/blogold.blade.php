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
                        <h1 class="breadcumb-title">Blog Post</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.html">Home</a></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
Blog Area
==============================-->
    <section class="th-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-lg-12">

                @foreach($blog as $blogs)
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="{{config('app.baseURL')}}/storage/app/{{$blogs->image}}" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <!-- <a class="author" href="blog.html"><i class="far fa-user"></i>by David Smith</a> -->
                                <a href="blog.html"><i class="far fa-clock"></i>{{ \Carbon\Carbon::parse($blogs->created_at)->format('d F, Y') }}</a>
                                <!-- <a href="blog.html"><i class="far fa-house-building"></i>{{$blogs->title}}</a> -->
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html"></a></h2>
                            <p class="blog-text">{{$blogs->description}}.</p>
                            <a href="{{config('app.baseURL')}}/blog-details?id={{$blogs->id}}" class="th-btn style-border2 th-btn-icon">Read More</a>
                        </div>
                    </div>
                @endforeach 

                    <div class="th-pagination ">
                        <ul>
                            <!-- <li><a class="prev-page" href="blog.html"><i class="far fa-arrow-left me-2"></i>Previous</a></li> -->
                            <!-- <li><a class="active" href="blog.html">1</a></li>
                            <li><a href="blog.html">2</a></li>
                            <li><a href="blog.html">3</a></li> -->

                                {{ $blog->links() }}

<!--                             <li><a class="next-page" href="blog.html">Next<i class="far fa-arrow-right ms-2"></i></a></li>
 -->                        </ul>
                    </div>
                </div>
               
            </div>
        </div>
    </section>


@endsection