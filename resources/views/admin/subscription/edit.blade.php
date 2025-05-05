@extends('admin layouts.app')
@section('content')

<script src="{{config('app.baseURL')}}/assets/js/jquery.min.js"></script>
<script src="{{config('app.baseURL')}}/assets/js/bootstrap.min.js"></script>


<body>
	<div class="container-fluid">
										<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Subscription Form</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Forms</a></li>
								<li class="breadcrumb-item ">Subscription</li>
								<li class="breadcrumb-item active" aria-current="page">Update</li>
							</ol>
						</div>
						
					</div>
					<!-- End Page Header -->
				<div >

					<!-- Row -->

					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card custom-card">
								<div class="card-body">

									<div>
										<a href="{{config('app.baseURL')}}/admin/subscription-management" style="float: inline-end;"> <button type="submit" class="btn pull-right btn btn-primary panel-button add-btn" >Back</button></a><br>
										<h6 class="card-title mb-1">Update Subscription Form</h6>
										<!-- <p class="text-muted card-sub-title">A form group layout for entering card information upon checkout.</p> -->

									</div>
									<hr>

														<form class="form-horizontal" role="form" method="POST" action="{{config('app.baseURL')}}/admin/update-subscription/{{$subscription->id}}" enctype="multipart/form-data" >
																															@csrf


									<div class="row">
										<div class="col-md-12 col-lg-12 col-xl-12" style="margin-top: 14px;">
											<div class="">
												<div class="form-group">
													<label class="" >No OF Days:</label><sup style="color: red;">*</sup>
													<input class="form-control" name="days" required="" type="number" placeholder="Enter No of Days" value="{{$subscription->days}}">
												</div>

												<div class="form-group">
													<label class="" >Price:</label><sup style="color: red;">*</sup>
													<input class="form-control" name="price" required="" type="text" placeholder="Enter Price"value="{{$subscription->price}}">
												</div>

												<div class="form-group">
													<label class="" >Discont Price:</label><sup style="color: red;">*</sup>
													<input class="form-control" name="offer_price" required="" type="text" placeholder="Enter Discount Price" value="{{$subscription->offer_price}}">
												</div>

												<div class="form-group">
													<label class="" >Discont Percentage:</label><sup style="color: red;">*</sup>
													<input class="form-control" name="offer_percentage" required="" type="text" placeholder="Enter Discont Percentage" value="{{$subscription->offer_percentage}}">
												</div>

													<div class="form-group">
								           <p class="mg-b-10">Refund Instruction:<sup style="color: red;">*</sup></p>
								            <select class="form-control" name="refund_instruction" required="">
								              <option value="">Select Refund Instruction:</option>                         
								                 <option value="1">Yse</option>
								                 <option value="2">No</option>
								              </select>
                        </div>

												<div class="form-group">
								           <p class="mg-b-10">Category Listing:<sup style="color: red;">*</sup></p>
								            <select class="form-control" name="category_listing" required="">
								              <option value="">Select Category Listing:</option>                         
								                 <option value="1">Limited Listing</option>
								                 <option value="2">Unlimited Listing</option>
								                 <option value="3">One Listing</option>
								              </select>
                        </div>

                        <div class="form-group">
								           <p class="mg-b-10">Extera Charges:<sup style="color: red;">*</sup></p>
								            <select class="form-control" name="extra_chaerges" required="">
								              <option value="">Select Extera Charges:</option>                         
								                 <option value="1">Yes</option>
								                 <option value="2">No</option>
								              </select>
                        </div>

                        <div class="form-group">
								           <p class="mg-b-10">Email Support:<sup style="color: red;">*</sup></p>
								            <select class="form-control" name="email_support" required="">
								              <option value="">Select Email Support:</option>                         
								                 <option value="1">Yes</option>
								                 <option value="2">No</option>
								              </select>
                        </div>

                         <div class="form-group">
								           <p class="mg-b-10">Certification Type:<sup style="color: red;">*</sup></p>
								            <select class="form-control" name="certification_type" required="">
								              <option value="">Select Certification Type:</option>                         
								                 <option value="1">Primary</option>
								                 <option value="2">Premium</option>
								              </select>
                        </div>

                         <div class="form-group">
								           <p class="mg-b-10">Search Engine Type:<sup style="color: red;">*</sup></p>
								            <select class="form-control" name="search_engine_type" required="">
								              <option value="">Select Search Engine Type:</option>                         
								                 <option value="1">Free</option>
								                 <option value="2">High Rank</option>
								              </select>
                        </div>


												<div class="form-group">
													<label class="" >Description:</label><sup style="color: red;">*</sup>
													<input class="form-control" name="description" required="" type="text" placeholder="Enter Description" value="{{$subscription->description}}">
												</div>
												
									


							    

																		
											
												<button class="btn ripple btn-main-primary btn-block">Submit</button>
											</div>
										</div>
									</div>
								</form>
								</div>
							</div>
						</div>
					</div>
			</div>
					<!-- End Row -->

					

				</div>
			</div>
			<!-- End Main Content-->

			<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


     <script src="{{config('app.baseURL')}}/js/toaster.min.js"></script>
     <script src="{{config('app.baseURL')}}/assets/js/jquery.min.js"></script>


 

 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
 <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>

 <script>
  $(".editor").on('keyup  mouseover',function(e) {
    var myEditor = document.querySelector('.editor')
    var html = myEditor.children[0].innerHTML;
    $('.new-editor').val(html);
  });

  @if(Session::has('message'))
  var type = "{{ Session::get('alert-type', 'info') }}";
  switch(type){
    case 'info':
    toastr.info("{{ Session::get('message') }}");
    break;

    case 'warning':
    toastr.warning("{{ Session::get('message') }}");
    break;
    case 'success':
    toastr.success("{{ Session::get('message') }}");
    break;
    case 'error':
    toastr.error("{{ Session::get('message') }}");
    break;
  }
  @endif

</script>


</body>






<script type="text/javascript">
$('#l1').addClass('active');
$('#l2').removeClass('active');
$('#l3').removeClass('active');
$('#l5').removeClass('active');
$('#l6').removeClass('active');
$('#l7').removeClass('active');
$('#l8').removeClass('active');
$('#l9').removeClass('active');
$('#l10').removeClass('active');
$('#l4').removeClass('active');
</script>



@endsection