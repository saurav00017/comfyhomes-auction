@extends('admin layouts.app')


     <script src="{{config('app.baseURL')}}/assets/js/jquery.min.js"></script>
     <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


@section('content')


<body>
	<div class="container-fluid">
										<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Notice Form</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Forms</a></li>
								<li class="breadcrumb-item ">Notice</li>
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
										<a href="{{config('app.baseURL')}}/admin/notice-management" style="float: inline-end;"> <button type="submit" class="btn pull-right btn btn-primary panel-button add-btn" >Back</button></a><br>
										<h6 class="card-title mb-1">Update Notice Form</h6>
										<!-- <p class="text-muted card-sub-title">A form group layout for entering card information upon checkout.</p> -->

									</div>
									<hr>

									<form class="form-horizontal" role="form" method="POST" action="{{config('app.baseURL')}}/admin/update-notice/{{$notice->id}}" enctype="multipart/form-data" >
																															@csrf


									<div class="row">
										<div class="col-md-12 col-lg-12 col-xl-12" style="margin-top: 14px;">
											<div class="">

											<!-- 	<div class="form-group">
													<label class="" >Image:</label><sup style="color: red;">*</sup>
													<div class="img-wrap">
                             <img class="image-size slider-img"  src="{{config('app.baseURL')}}/storage/app/{{$notice->image}}" alt="" style="height: 100px;">&nbsp;
                          </div>
                          @if($notice->image!="")
													<input class="form-control" name="image" type="file" placeholder="select file">
													@else
													<input class="form-control" name="image" required="" type="file" placeholder="select file">
													@endif
												</div> -->

												<!--  <div class="form-group">
												 <label for="column_size">Select Column Size:</label><sup style="color: red;">*</sup>
                            <select class="form-control" name="column_size" id="column_size">
                               <option value="col-md-2">2 Columns</option>
                               <option value="col-md-3">3 Columns</option>
                               <option value="col-md-4">4 Columns</option>
                               <option value="col-md-5">5 Columns</option>
                               <option value="col-md-6">6 Columns</option>
                               <option value="col-md-7">7 Columns</option>
                               <option value="col-md-8">8 Columns</option>
                               <option value="col-md-9">9 Columns</option>
                               <option value="col-md-10">10 Columns</option>
                               <option value="col-md-11">11 Columns</option>
                               <option value="col-md-12">12 Columns</option>
                            </select>
                        </div> -->

                        <div class="form-group">
													<label class="" >Column Width:</label><sup style="color: red;">*</sup>
													<input class="form-control" name="column_width" required="" type="number" placeholder="Enter Coloumn Width" value="{{$notice->column_width}}">
												</div>

												<div class="form-group">
													<label class="" >Logo:</label><sup style="color: red;">*</sup>
                          <div class="img-wrap">
                             <img class="image-size slider-img"  src="{{config('app.baseURL')}}/storage/app/{{$notice->image}}" alt="" style="height: 100px;">&nbsp;
                          </div><br>													
                          @if($notice->image)
													<input class="form-control" name="image" type="file">
													@else
                          <input class="form-control" name="image" required="" type="file">
                          @endif
												</div>

												<div class="form-group">
													<label class="" >Title:</label><sup style="color: red;">*</sup>
													<input class="form-control" name="title" required="" type="text" placeholder="Enter Title" value="{{$notice->title}}">
												</div>

												<div class="form-group">
													<label class="" >Description:</label><sup style="color: red;">*</sup>
													<textarea class="form-control" name="description" id="summernote" required="">{{$notice->description}}</textarea>
												</div>

												<div class="form-group">
													<label class="" >Advertiser Name:</label><sup style="color: red;">*</sup>
													<input class="form-control" name="advertiser_name" required="" type="text" placeholder="Enter Advertiser Name" value="{{$notice->advertiser_name}}">
												</div>
												
												<div class="form-group">
													<label class="" >Advertiser Address:</label><sup style="color: red;">*</sup>
													<input class="form-control" name="advertiser_address" required="" type="text" placeholder="Enter Advertiser Name" value="{{$notice->advertiser_address}}">
												</div>

													<div class="form-group">
													<label class="" >Advertiser Place:</label><sup style="color: red;">*</sup>
													<input class="form-control" name="advertiser_place" required="" type="text" placeholder="Enter Advertiser Name" value="{{$notice->advertiser_place}}">
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


<!-- <script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300,  // Set editor height
        });
    });
</script>
 -->


 <script>
    // Function to remove HTML tags
    function stripHtmlTags(input) {
        var tempDiv = document.createElement("div");
        tempDiv.innerHTML = input;
        return tempDiv.textContent || tempDiv.innerText || "";
    }

    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300,  // Set editor height
        });

        // Handle form submission
        $('form').on('submit', function(e) {
            // Get the content from Summernote editor
            var content = $('#summernote').val();

            // Strip HTML tags from content
            var plainText = stripHtmlTags(content);

            // Set the stripped content back to the textarea before submitting
            $('#summernote').val(plainText);
        });
    });
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