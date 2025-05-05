@extends('layouts.app')
<style>
    .truncate-description {
    display: -webkit-box;
    -webkit-line-clamp: 2; /* Number of lines to show */
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}

</style>
@section('content')



<!--============== Banner Section Start ==============-->
        <div class="page-banner full-row bg-gray py-5">
            <div class="container">
                <div class="row row-cols-md-2 row-cols-1 g-3">
                    <div class="col">
                        <h3 class="page-name text-secondary m-0">Notice Details</h3>
                    </div>
                    <div class="col">
                        <nav class="float-start float-md-end">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="index-1.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="blog.html">Notice</a></li>
                                <li class="breadcrumb-item active">Notice Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Banner Section End ==============-->

        <!--============== Blog Details & Sidebar Section Start ==============-->
        <div class="full-row bg-white">
            <div class="container">
                <div class="row">
                   
                    <div class="col-lg-8 order-lg-1">
                        <div class="blog-details bg-white text-ordinary mb-30">
                            <div class="thumb-two overlay-black overflow-hidden position-relative"> <img src="{{ config('app.baseURL') }}/storage/app/{{$notice->image}}" alt="image">
                                <div class="date text-white position-absolute z-index-9">{{ \Carbon\Carbon::parse($notice->created_at)->format('F j, Y') }}</div>
                            </div>
                            <div class="blog-content mt-5">
                                <div class="blog-info">
                                    <h4 class="mb-4 text-secondary">{{$notice->title}}</h4>
                                    <p>{{$notice->description}}</p>
                                    
                                </div>
                               
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Blog Details & Sidebar Section End ==============-->





@endsection