@extends('admin layouts.app')
@section('content')



<script src="{{config('app.baseURL')}}/assets/js/jquery.min.js"></script>
<script src="{{config('app.baseURL')}}/assets/js/bootstrap.min.js"></script>


<body>
	<div class="container-fluid">
										<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Voting Form</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Forms</a></li>
								<li class="breadcrumb-item ">Voting</li>
								<li class="breadcrumb-item active" aria-current="page">Edit</li>
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
										<a href="{{config('app.baseURL')}}/admin/voting-management" style="float: inline-end;"> <button type="submit" class="btn pull-right btn btn-primary panel-button add-btn" >Back</button></a><br>
										<h6 class="card-title mb-1">Update Voting Form</h6>
										<!-- <p class="text-muted card-sub-title">A form group layout for entering card information upon checkout.</p> -->

									</div>
									<hr>

								<form class="form-horizontal" role="form" method="POST" action="{{config('app.baseURL')}}/admin/update-voting/{{$voting->id}}" enctype="multipart/form-data" >
																															@csrf


									<div class="row">
										<div class="col-md-12 col-lg-12 col-xl-12" style="margin-top: 14px;">
											<div class="">

												<div class="form-group">
						                      <label for="column_size">Voting Type :</label><sup style="color: red;">*</sup>
                                              <select class="form-control" name="voting_type" id="category">
                                              	<option>Select Category</option>
                                                 <option value="1"<?php if ($voting->voting_type == 1) echo "selected"; ?>>IBC Voting</option>
                                                 <option value="2"<?php if ($voting->voting_type == 2) echo "selected"; ?>>Association Voting</option>
                                                 <option value="3"<?php if ($voting->voting_type == 3) echo "selected"; ?>>Housing Society Voting</option>
                                                 <option value="4"<?php if ($voting->voting_type == 4) echo "selected"; ?>>NGO Voting</option>
                                                 <option value="5"<?php if ($voting->voting_type == 5) echo "selected"; ?>>AGM Voting</option>

                                              </select>
                                          </div>

												<div class="form-group">
													<label class="" >Question:</label><sup style="color: red;">*</sup>
													<input class="form-control" name="question" required="" type="text" placeholder="Enter Question" value="{{$voting->question}}">
												</div>

												<div class="form-group">
													<label class="" >Answer:</label><sup style="color: red;">*</sup>
													<input class="form-control" name="answer" required="" type="text" placeholder="Enter Answer" value="{{$voting->answer}}">
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
$('#l4').removeClass('nav-item');
$('#l5').removeClass('nav-item');
$('#l6').removeClass('nav-item');
$('#l7').removeClass('nav-item');
$('#l8').removeClass('nav-item');
$('#l9').addClass('nav-item');
$('#l10').removeClass('nav-item');
$('#l11').removeClass('nav-item');
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