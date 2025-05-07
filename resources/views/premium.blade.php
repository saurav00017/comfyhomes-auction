@extends('layouts.app')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<style type="text/css">

@import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap");

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Source Sans Pro", sans-serif;
}

h1 {
    text-align: center;
    margin-top: 2rem;
}

p {
    text-align: center;
    margin-bottom: 4rem;
}

.pricing {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding-bottom: 2.5rem;


    .plan {
        background-color: #fff;
        padding: 2.5rem;
        margin: 12px;
        border-radius: 5px;
        text-align: center;
        transition: 0.3s;
        cursor: pointer;

        h2 {
            font-size: 22px;
            margin-bottom: 12px;
        }

        .price {
            margin-bottom: 1rem;
            font-size: 30px;
        }

        ul.features {
            list-style-type: none;
            text-align: left;

            li {
                margin: 8px;

                .fas {
                    margin-right: 4px;
                }

                .fa-check-circle {
                    color: #6ab04c;
                }

                .fa-times-circle {
                    color: #eb4d4b;
                }
            }
        }

        button {
            border: none;
            width: 100%;
            padding: 12px 35px;
            margin-top: 1rem;
            background-color: #6ab04c;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        &.popular {
            border: 2px solid purple;
            position: relative;
            transform: scale(1.08);

            span {
                position: absolute;
                top: -20px;
                left: 50%;
                transform: translateX(-50%);
                background-color: purple;
                color: #fff;
                padding: 4px 20px;
                font-size: 18px;
                border-radius: 5px;
            }
        }

        &:hover {
            box-shadow: 5px 7px 67px -28px rgba(0, 0, 0, 0.37);
        }
    }
}

.discount-badge {
    display: inline-block;
    background-color: #e84118;
    color: #fff;
    font-size: 14px;
    padding: 4px 12px;
    border-radius: 12px;
}

.price small {
    font-size: 16px;
    text-decoration: line-through;
    color: #888;
    margin-left: 8px;
}

.discount-container {
    margin-bottom: 1rem;
}

.duration {
    font-size: 14px;
    color: #555;
    margin-bottom: 1rem;
}
    .confirmationModal {
        margin-top: 10%;

    }


    .page-banner {
        margin-top: 10%;

    }
</style>
@section('content')




    <!--============== Banner Section Start ==============-->
    <div class="page-banner full-row bg-gray py-5">
        <div class="container">
            <div class="row row-cols-md-2 row-cols-1 g-3">
                <div class="col">
                    <h3 class="page-name text-secondary m-0">Pricing Table</h3>
                </div>
                <div class="col">
                    <nav class="float-start float-md-end">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="index-1.html">Home</a></li>
                            <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                            <li class="breadcrumb-item active">Premium Plans</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--============== Banner Section End ==============-->

    <!--============== Price Table Section Start ==============-->
    <div class="full-row bg-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-secondary double-down-line text-center"> Premium Plans</h2>
                    <span class="text-center mt-4 d-block mb-5">We listed our oppertunity and servies as a real estate
                        company</span>
                </div>
            </div>
            <div class="pricing">
                @foreach ($premium as $premiumItem)
                    <div class="plan popular">
                        <span>Most Popular</span>
                        <h2>Pro</h2>
                        <div class="price">
                            ₹{{ $premiumItem->price - $premiumItem->offer_price }}
                            <small>₹{{ $premiumItem->price }}</small>
                        </div>
        
                        <div class="discount-container">
                            <strong class="discount-badge">{{ $premiumItem->offer_percentage }}% Off</strong>
                        </div>
        
                        <div class="duration">
                            <strong>Duration:</strong> {{ $premiumItem->days }} Days
                        </div>
                        <ul class="features">
                            <li><i class="fas fa-check-circle"></i> Unlimited Listing</li>
                            <li><i class="fas fa-check-circle"></i> 30 Days Free</li>
                            <li><i class="fas fa-check-circle"></i> High Rank Search Engine</li>
                            <li><i class="fas fa-check-circle"></i> {{ $premiumItem->email_support == '1' ? 'check' : 'times' }}
                                Certification</li>
                            <li><i class="fas fa-{{ $premiumItem->email_support == '1' ? 'check' : 'times' }}-circle"></i> Email
                                Support</li>
                            <li><i class="fas fa-check-circle"></i> Payment Guarantee</li>
                        </ul>
                        @guest
                            <button onclick="window.location.href='{{ config('app.baseURL') }}/register'">Register Now</button>
                        @else
                            <button onclick="showConfirmationModal({{ $premiumItem->id }})">Buy
                                Now</button>
                        @endguest
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Confirmation Modal --}}
    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Confirm Purchase</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to buy this plan?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="confirmPurchase">OK</button>
                </div>
            </div>
        </div>
    </div>
    <!--============== Price Table Section End ==============-->


    <script>
        let selectedPlanId = null;

        function showConfirmationModal(planId) {
            selectedPlanId = planId;
            $('#confirmationModal').modal('show');
        }

        $('#confirmPurchase').on('click', function() {
            if (selectedPlanId) {
                $.ajax({
                    url: '{{ route('buy.plan') }}', // Update this route accordingly
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        plan_id: selectedPlanId
                    },
                    success: function(response) {
                        if (response.success) {
                            alert('Purchase successful!');
                            $('#confirmationModal').modal('hide');
                            // Optionally redirect or refresh the page
                            window.location.reload();
                        } else {
                            alert('An error occurred. Please try again.');
                        }
                    },
                    error: function() {
                        alert('An error occurred. Please try again.');
                    }
                });
            }
        });
    </script>

@endsection
