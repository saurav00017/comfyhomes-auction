@extends('admin layouts.app')
@section('content')



<script src="{{config('app.baseURL')}}/assets/js/jquery.min.js"></script>
<script src="{{config('app.baseURL')}}/assets/js/bootstrap.min.js"></script>


<body>
	<div class="container-fluid">
										<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">EAuction Form</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Forms</a></li>
								<li class="breadcrumb-item ">EAuction</li>
								<li class="breadcrumb-item active" aria-current="page">add</li>
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
										<a href="{{config('app.baseURL')}}/admin/e-auction-management" style="float: inline-end;"> <button type="submit" class="btn pull-right btn btn-primary panel-button add-btn" >Back</button></a><br>
										<h6 class="card-title mb-1">Create EAuction Form</h6>
										<!-- <p class="text-muted card-sub-title">A form group layout for entering card information upon checkout.</p> -->

									</div>
									<hr>

														<form class="form-horizontal" role="form" method="POST" action="create-eauction" enctype="multipart/form-data" >
																															@csrf


									<div class="row">
										<div class="col-md-12 col-lg-12 col-xl-12" style="margin-top: 14px;">
											<div class="">

												<div class="form-group">
								           <p class="mg-b-10">Bank Name:<sup style="color: red;">*</sup></p>
								              <select class="form-control" name="bank_name" required="">
								                 <option value="">Select Bank Name:</option>                         
								            	   @foreach($bank as $banks)
								                 <option value="{{$banks->id}}">{{$banks->bank_name}}</option>
								                 @endforeach
								              </select>
                        </div>

												<div class="form-group">
													<label class="" >Branch Location:</label><sup style="color: red;">*</sup>
													<input class="form-control" name="branch_location" required="" type="text" placeholder="Enter Branch Location">
												</div>

												<div class="form-group">
													<label class="" >Branch Address:</label><sup style="color: red;">*</sup>
													<input class="form-control" name="branch_address" required="" type="text" placeholder="Enter Branch Address">
												</div>
												
												<div class="form-group">
													<label class="" >Branch Email:</label><sup style="color: red;">*</sup>
													<input class="form-control" name="branch_email" required="" type="email" placeholder="Enter Branch Email">
												</div>

												<div class="form-group">
													<label class="" >Branch Phone Number:</label><sup style="color: red;">*</sup>
													<input class="form-control" name="branch_phone" required="" type="number" placeholder="Enter Branch Phone Number">
												</div>

												<div class="form-group">
													<label class="" >Branch EAuction Date:</label><sup style="color: red;">*</sup>
													<input class="form-control" name="branch_eauction_sate" required="" type="date" placeholder="Enter Branch E-Auction Date">
												</div>
												
												<div class="form-group">
													<label class="" >Borrower Name:</label><sup style="color: red;">*</sup>
													<input class="form-control" name="borrower_name" required="" type="text" placeholder="Enter Borrower Name">
												</div>

												<div class="form-group">
													<label class="" >Description of Property:</label><sup style="color: red;">*</sup>
													<input class="form-control" name="description_property" required="" type="text" placeholder="Enter >Description of Property">
												</div>

												<div class="form-group">
													<label class="" >Reserve Price:</label><sup style="color: red;">*</sup>
													<input class="form-control" name="reserve_price" required="" type="text" placeholder="Enter Reserve Price">
												</div>

												<div class="form-group">
													<label class="" >Earnest Money:</label><sup style="color: red;">*</sup>
													<input class="form-control" name="earnest_money" required="" type="text" placeholder="Enter Earnest Money">
												</div>

												<div class="form-group">
													<label class="" >Due Amount:</label><sup style="color: red;">*</sup>
													<input class="form-control" name="due_amount" required="" type="text" placeholder="Enter Due Amount">
												</div>

												<div class="form-group">
													<label class="" >Bid Increment Amount:</label><sup style="color: red;">*</sup>
													<input class="form-control" name="bid_increment_amount" required="" type="text" placeholder="Enter Bid Increment Amount">
												</div>

										    <div class="form-group" id="possessionField">
								           <p class="mg-b-10">Possession:<sup style="color: red;">*</sup></p>
								               <select class="form-control" name="possession" required="">
								                  <option value="">Select Possession:</option>                         
								                  <option value="1">Physical Possession</option>
								                  <option value="2">Symbolic Possession</option>
								               </select>
                        </div>

                        <div class="form-group">
													<label class="" >Known Encumbrance:</label><sup style="color: red;">*</sup>
													<input class="form-control" name="known_encumbrance" required="" type="text" placeholder="Enter Known Encumbrance">
												</div>

												<div class="form-group">
													<label class="" >Auction Time:</label><sup style="color: red;">*</sup>
													<input class="form-control" name="auction_time" required="" type="time" placeholder="Enter Auction Time">
												</div>


												<div class="form-group">
													<label class="" >Auction Minute:</label><sup style="color: red;">*</sup>
													<input class="form-control" name="auction_minute" required="" type="number" placeholder="Auction Minute">
												</div>

												<div class="form-group">
													<label class="" >Bank Website:</label><sup style="color: red;">*</sup>
													<input class="form-control" name="bank_website" required="" type="text" placeholder="Auction Bank Website">
												</div>

												<div class="form-group">
													<label class="" >Place:</label><sup style="color: red;">*</sup>
													<input class="form-control" name="place" required="" type="text" placeholder="Enter Place">
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
$('#l1').removeClass('nav-item');
$('#l2').removeClass('nav-item');
$('#l3').removeClass('nav-item');
$('#l5').removeClass('nav-item');
$('#l6').removeClass('nav-item');
$('#l7').removeClass('nav-item');
$('#l8').removeClass('nav-item');
$('#l9').removeClass('nav-item');
$('#l10').removeClass('nav-item');
$('#l4').removeClass('nav-item');
$('#l11').addClass('nav-item');
$('#l12').removeClass('nav-item');
$('#l13').removeClass('nav-item');
$('#l14').removeClass('nav-item');
$('#l15').removeClass('nav-item');
$('#l16').removeClass('nav-item');
$('#l17').removeClass('nav-item');
$('#l18').removeClass('nav-item');
$('#l19').removeClass('nav-item');
$('#l20').removeClass('nav-item');
$('#l21').removeClass('nav-item');
$('#l22').removeClass('nav-item');
$('#l23').removeClass('nav-item');
$('#l24').removeClass('nav-item');
$('#l25').removeClass('nav-item');
</script>


@endsection