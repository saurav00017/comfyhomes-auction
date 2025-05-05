@extends('admin layouts.app')
@section('content')

<script src="{{config('app.baseURL')}}/assets/js/jquery.min.js"></script>
<script src="{{config('app.baseURL')}}/assets/js/bootstrap.min.js"></script>


<body>
	<div class="container-fluid">
										<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5"> Update Blog</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item ">Blog</li>
								<li class="breadcrumb-item active" aria-current="page">Edit</li>
							</ol>
						</div>
						
					</div>
					<!-- End Page Header -->

					<!-- Row -->
			

					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
									<a href="{{config('app.baseURL')}}/admin/blog-management" style="float: inline-end;" > <button type="submit" class="btn pull-right btn btn-primary panel-button add-btn">Back</button></a><br>
										<h6 class="card-title mb-1">Update Blog</h6>
									
									</div>
									<hr>
		<form class="form-horizontal" role="form" method="POST" action="{{config('app.baseURL')}}/admin/blog-update/{{$blog->id}}" enctype="multipart/form-data" >
																@csrf									<div class="row">
										<div class="col-md-12 col-lg-12 col-xl-12" style="margin-top: 14px;">
											<div class="">
												<div class="form-group">
													<label class="">Image:</label><sup style="color: red;">*</sup>
													@if($blog->image!="" && $blog->image!=null)
                           <div class="img-wrap">
                            <img class="image-size "  src="{{config('app.baseURL')}}/storage/app/{{$blog->image}}" alt="" style="height: 100px;">&nbsp;
                           </div>
                          @endif

													@if($blog->image!="" && $blog->image!=null)
													<input class="form-control" name="image" type="file" >
													@else
													<input class="form-control" name="image" required=""  type="file" >
													@endif
												</div>
												<div class="form-group">
													<label class="">Title:</label><sup style="color: red;">*</sup>
													<input class="form-control" name="title" required="" type="text" value="{{$blog->title}}" placeholder="Enter Title">
												</div>
												<div class="form-group">
													<label class="">Description:</label><sup style="color: red;">*</sup>
													<input class="form-control" name="description" required="" type="text" value="{{$blog->description}}" placeholder="Enter Description">
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
<script type="text/javascript">
$('#l1').removeClass('active');
$('#l2').removeClass('active');
$('#l3').removeClass('active');
$('#l5').removeClass('active');
$('#l6').removeClass('active');
$('#l7').removeClass('active');
$('#l8').removeClass('active');
$('#l9').removeClass('active');
$('#l10').removeClass('active');
$('#l4').removeClass('active');
$('#l11').removeClass('active');
$('#l12').removeClass('active');
$('#l13').removeClass('active');
$('#l14').removeClass('active');
$('#l16').addClass('active');


</script>
</body>


@endsection