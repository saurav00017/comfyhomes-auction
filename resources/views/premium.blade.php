@extends('layouts.app')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<style type="text/css">
    .confirmationModal{
            margin-top: 10%;

    }


    .page-banner{
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
                        <span class="text-center mt-4 d-block mb-5">We listed our oppertunity and servies as a real estate company</span> </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="price-table1 py-80">
                            <div class="row row-cols-md-3 row-cols-1 g-4">
    @if($premium->isEmpty())
        <p>No premium subscriptions available at the moment.</p>
    @else
        @foreach($premium as $premiumItem)
        <div class="col">
            <div class="pricing-table text-center bg-white shadow-one">
                <div class="price-top-one bg-gray position-relative">
                    <h4 class="text-secondary" style="color:purple!important;">Basic</h4>
                    <h3 class="text-primary" style="color:purple!important;">₹ {{$premiumItem->price}}</h3>
                    <p style="color:purple!important;">{{$premiumItem->description}}</p>
                </div>
                <ul class="pricing-content-one position-relative z-index-9">
                    @if($premiumItem->category_listing==1)
                    <li>One Category Listing</li>
                    @else
                    <li>Unlimited Category Listing</li>
                    @endif
                    @if($premiumItem->email_support==1)
                    <li>Email Support</li>
                    @endif
                    <li>30 Days Free</li>

                    @if($premiumItem->certification_type==1)
                    <li>Primary Certification</li>
                    @else
                    <li>Premium Certification</li>
                    @endif

                    @if($premiumItem->search_engine_type==1)
                    <li>Free Search Engine</li>
                    @else
                    <li>High Rank Search Engine</li>
                    @endif

                    @if($premiumItem->refund_instruction==1)
                    <li>100% Payment Gurantee</li>
                    @else
                    <li>No Payment Guarantee</li>
                    @endif
                </ul>

                @guest
                  <a class="btn btn-primary mt-4 mb-5" href="{{config('app.baseURL')}}/register">Register Now</a>
                @else
                  <a class="btn btn-primary mt-4 mb-5" href="javascript:void(0);" onclick="showConfirmationModal({{ $premiumItem->id }})">Buy Now</a>               
                 @endguest            
            </div>
        </div>
        @endforeach
    @endif

    <!-- Modal HTML -->
<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
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

                                <!-- <div class="col">
                                    <div class="pricing-table active text-center bg-white shadow-one">
                                        <div class="price-top-one text-white bg-primary position-relative">
                                            <h4>Standard</h4>
                                            <h3>$79.99<sub>/ mo</sub></h3>
                                            <p>Free of charge one standard listing active for 30 days</p>
                                        </div>
                                        <ul class="pricing-content-one position-relative z-index-9">
                                            <li>Unlimited Category Listing</li>
                                            <li>No Extra Charges</li>
                                            <li>Email Support</li>
                                            <li>100% Payment Gurantee</li>
                                            <li>Premium Certification</li>
                                            <li>High Rank Serach Engine</li>
                                        </ul>
                                        <a class="btn btn-primary mt-4 mb-5" href="#">Register Now</a>
                                        <div class="free bg-primary text-white py-4">Start 10 Days Free Trial</div>
                                    </div>
                                </div> -->
                               <!--  <div class="col">
                                    <div class="pricing-table text-center bg-white shadow-one">
                                        <div class="price-top-one bg-gray position-relative">
                                            <h4 class="text-secondary">Professional</h4>
                                            <h3 class="text-primary">$79.99<sub>/ mo</sub></h3>
                                            <p>Free of charge one standard listing active for 30 days</p>
                                        </div>
                                        <ul class="pricing-content-one position-relative z-index-9">
                                            <li>One Category Listing</li>
                                            <li>30 Days Free</li>
                                            <li>Email Support</li>
                                            <li>No Payment Gurantee</li>
                                            <li>Primary Certification</li>
                                            <li>Free Serach Engine</li>
                                        </ul>
                                        <a class="btn btn-primary mt-4 mb-5" href="#">Register Now</a> </div>
                                </div> -->
                            </div>
                        </div>
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
                url: '{{ route("buy.plan") }}', // Update this route accordingly
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