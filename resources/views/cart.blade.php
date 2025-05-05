@extends('layouts.app')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@section('content')

<style type="text/css">



.featured-thumb .starmark .fa-shopping-cart{

        margin-left: 25%;

}


    .wishlist-selected i {
    color: purple !important;  /* Changes star to purple */
}

.views{
        margin-left: 4%;
}

    .page-banner{

        margin-top: 12%;

    }

    .vertical-line {
        border-left: 1px solid #ccc; /* Line style */
        height: 30px; /* Adjust height as needed */
        margin: 0 10px; /* Space around the line */
    }


#validationDefault03{
    width: 229px;
}


input::placeholder {
        color: #333;
    }


    .property_type{
        width: 150px;
    }



.search-bar {
    display: flex;
    margin-top: 20px;
        width: 61%;


}

.input-group {
    display: flex;
    align-items: center;
    background-color: #f0f0f0;
    border-radius: 50px;
    padding: 10px 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.input-item {
    display: flex;
    align-items: center;
    margin-right: 20px;
}

.input-item i {
    margin-right: 10px;
    color: purple;
}

input[type="text"], select {
    border: none;
    background: none;
    outline: none;
    font-size: 16px;
    color: #333;
}

.search-btn {
    background-color: purple;
    color: white;
    padding: 10px 40px;
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
}

input[type="text"]{

    color: #333;

}



.search-btn i {
    margin-right: 10px;
}

.search-btn:hover {
    background-color: #0056b3;
}


@media (min-width: 1023px) and (max-width: 1099px) {

.search-bar {
    width: 85%;
    
}

}

@media (min-width: 1200px) and (max-width: 1299px) {

.search-bar {
    width: 70%;
    
    
}

}


@media (min-width: 850px) and (max-width: 899px) {
.search-bar {
    width: 94%;
    
}


}

@media (min-width: 800px) and (max-width: 849px) {
.search-bar {
    width: 94%;
   
}

}

@media (min-width: 900px) and (max-width: 950px) {
.search-bar {
    width: 95%;
    
}

}










}

</style>

 <!--============== Banner Section Start ==============-->
        <div class="page-banner full-row bg-gray py-5">
            <div class="container">
                <div class="row row-cols-md-2 row-cols-1 g-3">
                    <div class="col">
                        <h3 class="page-name text-secondary m-0">Auction Whishlist Property</h3>
                    </div>
                    <div class="col">
                        <nav class="float-start float-md-end">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="index-1.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item active">Auction Whishlist Property</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Banner Section End ==============-->

        <!--============== Advance Search Section Start ==============-->
        <div class="full-row bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 order-lg-2">
                        <div class="sidebar-widget">
<!--                             <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Advance Search</h4>
 -->                           <!--  <form method="post" action="action-page-post.html">
                                <div class="row g-2">
                                    <div class="col-md-12">
                                        <div class="d-inline-block text-ordinary hover-text-primary formicon"> <a class="checkbox-collapse" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Additional Features</a> </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="collapse" id="multiCollapseExample1">
                                                    <div class="card card-body px-0 border-0">
                                                        <div class="row">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </form> -->
                        </div>
                        
                        
                    </div>
                    <div class="col-lg-10 order-lg-1">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="pb-4 mt-md-50">
                                    <div class="row">
                                        <div class="col-md-12">
                                            

                                              </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                       <div class="row row-cols-1 g-4">
                                        @foreach($property as $propertys)
                                        <div class="col">
                                            <div class="featured-thumb list list2 hover-zoomer">
                                                <div class="overlay-black overflow-hidden position-relative image-area">
                                                    @if($propertys->auction) 
                                                    @foreach($propertys->auction as $auction)
                                                    <img src="{{config('app.baseURL')}}/storage/app/{{$auction->property_image}}" alt="" style="height:318px;">
                                                   
                                                    @if($auction->featured==1)
                                                    <div class="featured bg-primary text-white" style="background-color:#25d366!important;">Verified</div>
                                                    @endif
                                                    <div class="price text-primary">₹ {{ number_format($auction->property_price, 0, '.', ',') }}</div>
                                                     @endforeach
                                                    @endif


<!--                                                     <div class="starmark text-white"><i class="far fa-star"></i></div>
 -->                
<!--  <div class="starmark text-white" data-property-id="{{ $propertys->id }}" onclick="toggleWishlist(this)">
    <i class="far fa-star"></i>
</div> -->




 @if($propertys->auction) 
                                                    @foreach($propertys->auction as $auction)
<div class="starmark text-white" data-property-id="{{ $auction->id }}">
    <i class="fas fa-shopping-cart {{ in_array($auction->id, $userWishlist) ? 'wishlist-selected' : '' }}" 
       style="color: {{ in_array($auction->id, $userWishlist) ? 'purple' : 'white' }};"></i><br>

    @if(in_array($auction->id, $userWishlist))
        <span style="font-size:10px;" onclick="removeFromCart({{ $auction->id }})">Remove from Cart</span>
    @else
        <span style="font-size:10px;" onclick="addToCart({{ $auction->id }})">Add to Cart</span>
    @endif
</div>

@endforeach
@endif




                                </div>


                                                <div class="featured-thumb-data shadow-one">
                                                                                                                                    <div></div>

                                                    <div></div>
                                                     
                                                    <div class="p-4">
<div class="d-flex justify-content-between align-items-center" style="margin-right: 5%;">
 @if($propertys->auction)  <!-- Check if auction is not null -->
        @foreach($propertys->auction as $auction)  <!-- Loop through auctions if it’s a collection -->
            @if($auction->subCategory)
                <h5 class="text-secondary hover-text-primary mb-2 mb-lg-0" style="color:purple!important;">
                    {{ $auction->subCategory->subcategory }}
                </h5>
            @else
                <p>No subcategory available</p>
            @endif
        @endforeach
    @else
        <p>No auction data available</p>
    @endif

       <div>
        @if($propertys->auction)
        @foreach($propertys->auction as $auction)
        @if($auction->category == 1)
            <span class="location">IBC Auction</span>
        @endif 
        @if($auction->category == 2)
            <span class="location">Car Auction</span>
        @endif 
        @if($auction->category == 3)
            <span class="location">Drt Auction</span>
        @endif 
        @if($auction->category == 4)
            <span class="location">Jewellery Auction</span>
        @endif
        @endforeach
        @endif 
    </div>
</div>

                                                      @if($propertys->auction)
                                                         @foreach($propertys->auction as $auction)
                                                        <span class="location"><i class="fas fa-map-marker-alt text-primary" style="color:purple!important;"></i> {{$auction->locality}}</span>
                                                          @endforeach
                                                    @endif
                                                         </div>
                                                    <div class="bg-gray quantity px-4 pt-4">
                                                        <ul>
                                                              @if($propertys->auction)
                                                              @foreach($propertys->auction as $auction)
                                                            <li><span>{{$auction->area}}</span> Sqft</li>
                                                            <li><span></span></li>
                                                            @if($auction->possession==1)
                                                            <li>Physical Possession</li>
                                                            @else
                                                            <li>Symbolic Possession</li>
                                                            @endif
                                                            <li><span>EMD ₹</span> {{$auction->emd_amount}} </li>
                                                             @endforeach
                                                    @endif
                                                            
                                                        </ul>
                                                    </div>
                                                   <div class="p-4 d-inline-block w-100 author d-flex justify-content-between align-items-center">
    <div class="d-flex align-items-center">
        @if($propertys->auction)  <!-- Check if auction is not null -->
        @foreach($propertys->auction as $auction)  <!-- Loop through auctions if it’s a collection -->
            @if($auction->bank)
        <img src="{{ config('app.baseURL') }}/storage/app/{{ $auction->bank->icon }}" alt="Icon" style="width: 20px; margin-right: 8px;">
        <span>{{ $auction->bank->bank_name }}</span>
        @else
          <p>No subcategory available</p>
        @endif
        @endforeach
        @else
        <p>No auction data available</p>
    @endif

    </div>

    <div>
        <i class="far fa-calendar-alt text-primary mr-1" style="color: purple!important;"></i> 
        {{ \Carbon\Carbon::parse($propertys->created_at)->diffForHumans() }}
    </div>
</div>






                                                    <div class="col-md-3" style=" float: inline-end; padding: 1%;">
                            <a class="btn btn-primary d-table ms-auto viewdetails" href="{{config('app.baseURL')}}/search-details?id={{$propertys->id}}'">View Details</a>
                        </div>
                        <div class="views">
                             @if($propertys->auction)
                              @foreach($propertys->auction as $auction)
                                 <i class="far fa-user" style="color: purple;"></i> {{$auction->auction_view}} views
                              @endforeach
                            @endif
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
        <!--============== Advance Search Section End ==============-->


        <!-- Toastr CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<script type="text/javascript">

 $(document).on('click', '.starmark', function() {
    var propertyId = $(this).data('property-id'); // Get property ID from data attribute
    var element = this;
    var isSelected = $(element).find('i').hasClass('wishlist-selected');
    
    // Toggle the visual state of the star
    if (isSelected) {
        $(element).find('i').removeClass('wishlist-selected').css('color', 'white');  // Deselect
    } else {
        $(element).find('i').addClass('wishlist-selected').css('color', 'purple');  // Select
    }

    // Determine the action based on the current state (add or remove)
    var url = isSelected ? "{{ config('app.baseURL') }}/remove-from-wishlist" : "{{ config('app.baseURL') }}/add-to-wishlist";

    // Send AJAX request to add or remove from wishlist
    $.ajax({
        url: url,
        type: 'POST',
        data: {
            property_id: propertyId,
            _token: '{{ csrf_token() }}'  // CSRF token for security
        },
        success: function(response) {
            if (response.status === 'success') {
                if (isSelected) {
                    toastr.success('Property removed from wishlist');  // Toastr success alert for removal

                     setTimeout(function() {
            location.reload();  // Refresh the page after a short delay
        }, 1000);


                } else {
                    toastr.success('Property added to wishlist');  // Toastr success alert for addition
                }
            } else {
                toastr.error('Failed to update wishlist');  // Toastr error alert
            }
        },
        error: function(xhr) {
            toastr.error('Error: ' + xhr.responseText, 'Error');  // Toastr error alert
        }
    });
});



toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": true,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
};


</script>

       
@endsection
