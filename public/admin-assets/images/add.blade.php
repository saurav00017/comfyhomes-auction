@extends('layouts.app')
@section('content')

<script src="{{config('app.baseURL')}}/assets/js/jquery.min.js"></script>
<script src="{{config('app.baseURL')}}/assets/js/bootstrap.min.js"></script>


<body>
	<div class="container-fluid">
										<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Add Property Features</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item ">Property Features</li>
								<li class="breadcrumb-item active" aria-current="page">Add</li>
							</ol>
						</div>
						
					</div>
					<!-- End Page Header -->

					<!-- Row -->
					<form class="form-horizontal" role="form" method="POST" action="add" enctype="multipart/form-data" >
																@csrf

					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Property Features Add</h6>
										<!-- <p class="text-muted card-sub-title">A form group layout for entering card information upon checkout.</p> -->
									</div>
									<div class="row">
										<div class="col-md-12 col-lg-12 col-xl-12" style="margin-top: 14px;">
											<div class="">
												<div class="form-group">
													<label class="">Property Features</label>
													<input class="form-control" name="property_feature_name" required="" type="text">
												</div>
												<!-- <div class="form-group">
													<label class="">Image</label>
													<div class="pos-relative">
														<input class="form-control pd-r-80" name="image" required="" type="file">
													</div>
												</div> -->
												
												
												<!-- <div class="form-group mg-b-20">
													<label class="ckbox">
														<input checked type="checkbox"><span class="tx-13">I agree terms and conditions</span>
													</label>
												</div> -->
												<button class="btn ripple btn-main-primary btn-block">Submit</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
					<!-- End Row -->

					

				</div>
			</div>
			<!-- End Main Content-->
</body>
<script type="text/javascript">
$('#l1').removeClass('active');
$('#l2').removeClass('active');
$('#l3').removeClass('active');
$('#l5').removeClass('active');
$('#l6').addClass('active');
$('#l7').removeClass('active');
$('#l8').removeClass('active');
$('#l9').removeClass('active');
$('#l10').removeClass('active');
$('#l4').removeClass('active');
$('#l11').removeClass('nav-item');
$('#l12').removeClass('nav-item');
$('#l13').removeClass('nav-item');
</script>

@endsection