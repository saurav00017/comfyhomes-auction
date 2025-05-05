@extends('layouts.app')
<style>

    .premium-container {
            background-color: #007ac9;
            padding: 40px;
            border-radius: 10px;
            text-align: center;
            color: white;
            margin-top: 2%!important;
            width: 75%!important;
        }
        .premium-container h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #ffc107;
        }
        .premium-container button {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .premium-container button:hover {
            background-color: #218838;
        }
        .login-register {
            margin-top: 15px;
        }
        .login-register a {
            color: #fff;
            text-decoration: underline;
        }
        .app-links img {
            width: 150px;
            margin-top: 20px;
        }
        /* Modal and blurred background styling */
.full-row {
    transition: filter 0.3s ease;
}

/* Modal container */
.premium-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 999;
}

/* Modal content */
.premium-content {
    background-color: #007ac9;
    padding: 40px;
    border-radius: 10px;
    text-align: center;
    color: white;
    width: 400px;
}

.premium-content button {
    background-color: #28a745;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

.premium-content button:hover {
    background-color: #218838;
}

.login-register a {
    color: #fff;
    text-decoration: underline;
}

.hidden{
    display: none;
}





.col-md-3{

    margin-left: 5%;

}

    




    </style>
@section('content')



<!--============== Banner Section Start ==============-->
        <div class="page-banner full-row bg-gray py-5">
            <div class="container">
                <div class="row row-cols-md-2 row-cols-1 g-3">
                    <div class="col">
                        <h3 class="page-name text-secondary m-0">Auction History</h3>
                    </div>
                    <div class="col">
                        <nav class="float-start float-md-end">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="index-1.html">Home</a></li>
                                <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                                <li class="breadcrumb-item active">Auction History</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Banner Section End ==============-->


        <!--============== FAQ Section Start ==============-->
        <div class="full-row bg-white py-80">
            <div class="container">
                <div class="row">
                   
                    <div class="col-lg-9">
                        <div class="info-pages bg-gray px-4 py-5">
                            <div class="faq-item mb-4"> 
                                <div class="d-table">
                                    <h5 class="mb-2 text-secondary">Home > {{$property->district}} > {{$property->bank->bank_name}}</h5>

                                    <h4 class="mb-2 text-secondary">{{$property->property_type_one}}</h4>
                                    <p><img class="text-primary mr-1" src="{{ config('app.baseURL') }}/storage/app/{{ $property->bank->icon }}" alt="Icon" style="width: 2%!important"> {{$property->bank->bank_name}}</p>
                                    <div style="display:flex;">
                                    <h3 class="mb-2 text-secondary">Description</h3> @if($subscription_available==1)  <h3 class="mb-2 text-secondary" style="margin-left: 5%; cursor: pointer;color: #337ab7!important;" id="show-premium">Auction History</h3>
                                    @endif
                                     </div>
                                    <hr>
                                    <div style="display: flex;">
                                    <div class="col-md-3">
                                        <p style="color: black; font-weight: 600;">Bank Name</p>
                                    </div>

                                    <div class="col-md-3">
                                        <p>{{$property->bank->bank_name}}</p>
                                    </div>
                                    </div>

                                    <div style="display: flex;">
                                    <div class="col-md-3">
                                        <p style="color: black; font-weight: 600;">Property Type</p>
                                    </div>

                                    <div class="col-md-3">
                                        <p>{{$property->property_type_one}}</p>
                                    </div>
                                    </div>

                                    <div style="display: flex;">
                                    <div class="col-md-3">
                                        <p style="color: black; font-weight: 600;">Area</p>
                                    </div>

                                    <div class="col-md-3">
                                        <p>{{$property->area}} Sqft</p>
                                    </div>
                                    </div>

                                    <div style="display: flex;">
                                    <div class="col-md-3">
                                        <p style="color: black; font-weight: 600;">Possession</p>
                                    </div>

                                    <div class="col-md-3">
                                        @if($property->possession==1)
                                        <p>Physical</p>
                                        @else
                                        <p>Symbolic</p>
                                        @endif
                                    </div>
                                    </div>

                                    <div style="display: flex;">
                                    <div class="col-md-3">
                                        <p style="color: black; font-weight: 600;">Locality</p>
                                    </div>

                                    <div class="col-md-3">
                                        <p>{{$property->locality}}</p>
                                    </div>
                                    </div>

                                    <div style="display: flex;">
                                    <div class="col-md-3">
                                        <p style="color: black; font-weight: 600;">City</p>
                                    </div>

                                    <div class="col-md-3">
                                        <p>{{$property->district}}</p>
                                    </div>
                                    </div>

                                     <div style="display: flex;">
                                    <div class="col-md-3">
                                        <p style="color: black; font-weight: 600;">Reserve Price</p>
                                    </div>

                                    <div class="col-md-3">
                                        <p>₹ {{ number_format($property->reserve_price, 0, '.', ',') }}</p>
                                    </div>
                                    </div>

                                     <div style="display: flex;">
                                    <div class="col-md-3">
                                        <p style="color: black; font-weight: 600;">Market Price Range</p>
                                    </div>

                                    <div class="col-md-3">
                                        <p>₹ {{ number_format($property->market_price, 0, '.', ',') }}</p>
                                    </div>
                                    </div>

                                    <div style="display: flex;">
                                    <div class="col-md-3">
                                        <p style="color: black; font-weight: 600;">Emd Amount</p>
                                    </div>

                                    <div class="col-md-3">
                                         <p>₹ {{ number_format($property->emd_amount, 0, '.', ',') }}</p>                                    
                                     </div>
                                    </div>

                                    <div style="display: flex;">
                                    <div class="col-md-3">
                                        <p style="color: black; font-weight: 600;">Emd Submission</p>
                                    </div>

                                    <div class="col-md-3">
                                        <p>{{$property->emd_submission}}</p>
                                    </div>
                                    </div>

                                    <div style="display: flex;">
                                    <div class="col-md-3">
                                        <p style="color: black; font-weight: 600;">Auction Start Date & Time</p>
                                    </div>

                                    <div class="col-md-3">
                                        <p>{{$property->auction_start_datetime}}</p>
                                    </div>
                                    </div>

                                    <div style="display: flex;">
                                    <div class="col-md-3">
                                        <p style="color: black; font-weight: 600;">Auction End Date & Time</p>
                                    </div>

                                    <div class="col-md-3">
                                        <p>{{$property->auction_end_datetime}}</p>
                                    </div>
                                    </div>

                                    @if($subscription_available==0)

                                    <div>

                                    <div style="display: flex;">
                                    <div class="col-md-3">
                                        <p style="color: black; font-weight: 600;">Contact Number</p>
                                    </div>

                                    <div class="col-md-3">
                                        <p>8585854554</p>
                                    </div>
                                    </div>

                                    <div style="display: flex;">
                                    <div class="col-md-3">
                                        <p style="color: black; font-weight: 600;">Email</p>
                                    </div>

                                    <div class="col-md-3">
                                        <p>test@gmail.com</p>
                                    </div>
                                    </div>

                                    </div>
                                    @endif

                                     @if(Auth::check())
                                @if($subscription_available == 1)
                                    <!-- If user is logged in and subscription is available -->
                                    <a href="{{ config('app.baseURL') }}/path-to-document/{{$property->document}}" class="btn btn-primary">Download Document</a>
                                @else
                                    <!-- Show premium modal if user does not have an active subscription -->
                                    <button class="btn btn-primary" id="show-premium">Download Document</button>
                                @endif
                            @else
                                <!-- If the user is not logged in -->
                                <button class="btn btn-primary" id="show-premium">Download Document</button>
                            @endif
                        </div>
                                    
                                     </div>
                            </div>


                            
                           
                            
                            
                

                        </div>


                    </div>

<!--  <div class="premium-container">
    <h1>BECOME PREMIUM MEMBER</h1>
    <p>View auction history</p>
    <a href="{{config('app.baseURL')}}/premium"><button>GET PREMIUM</button></a>
    <div class="login-register">
        <p>If you are already a premium member <a href="{{config('app.baseURL')}}/login">LOGIN</a> | <a href="#">REGISTER</a></p>
    </div>
   
</div> -->

<!-- Premium Modal (Hidden by default) -->
    <div id="premium-modal" class="premium-modal hidden" >
        <div class="premium-content">
            <h1>BECOME PREMIUM MEMBER</h1>
            <p>View auction history</p>
            <a href="{{config('app.baseURL')}}/premium"><button>GET PREMIUM</button></a>
            <div class="login-register">
                <p>If you are already a premium member <a href="{{config('app.baseURL')}}/login">LOGIN</a> | <a href="#">REGISTER</a></p>
            </div>
        </div>
    </div>
                   
                </div>
            </div>
        </div>
        <!--============== FAQ Section End ==============-->

<script type="text/javascript">
    document.getElementById('show-premium').addEventListener('click', function() {

        $('#premium-modal').removeClass('hidden');

    document.getElementById('premium-modal').style.display = 'flex';

    // Blur the background
    document.querySelector('.full-row').style.filter = 'blur(5px)';
});

// Optionally, you can add a close button to the modal to allow users to exit the modal view.
document.getElementById('premium-modal').addEventListener('click', function() {
    // Hide the modal
    document.getElementById('premium-modal').style.display = 'none';

    // Remove the blur from the background
    document.querySelector('.full-row').style.filter = 'none';
});



</script>



@endsection