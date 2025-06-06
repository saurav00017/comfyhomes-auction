@extends('admin layouts.app')
@section('content')

<style type="text/css">
	
	.hidden{
          display: none!important;
	}

	.mg-lg-t-0 {
    margin-top: 10px;
}

</style>
 <head>
<!-- <script src="{{config('app.baseURL')}}/assets/js/jquery.min.js"></script>
<script src="{{config('app.baseURL')}}/assets/js/bootstrap.min.js"></script>
 -->
    <!---Select2 css-->
<!-- <link href="{{config('app.baseURL')}}/assets/plugins/select2/css/select2.min.css" rel="stylesheet"> -->
<!-- Jquery js-->
<!-- <script src="{{config('app.baseURL')}}/assets/plugins/jquery/jquery.min.js"></script> -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuwC7d5K2ZlPEEXF9Rn4PXzHEosJhSaE8&libraries=places&callback=initialize" async defer></script>


<link href="{{config('app.baseURL')}}/admin-assets/plugins/select2/css/select2.min.css" rel="stylesheet">

<!-- Jquery js-->
<script src="{{config('app.baseURL')}}/admin-assets/plugins/jquery/jquery.min.js"></script>

<script src="{{config('app.baseURL')}}/admin-assets/js/jquery-1.12.4.min.js"></script>
<script src="{{config('app.baseURL')}}/admin-assets/js/bootstrap.min.js"></script>

<link href="{{config('app.baseURL')}}/admin-assets/switcher/css/switcher.css" rel="stylesheet">
        <link href="{{config('app.baseURL')}}/admin-assets/switcher/demo.css" rel="stylesheet">
    
</head>   

<script type="text/javascript">
  $('select').selectpicker();

</script>





<body>
	<div class="container-fluid">
										<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Create Property</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item ">Property</li>
								<li class="breadcrumb-item active" aria-current="page">Add</li>
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
									<a href="{{config('app.baseURL')}}/admin/property-management" style="float: inline-end;" > <button type="submit" class="btn pull-right btn btn-primary panel-button add-btn">Back</button></a><br>
										<h6 class="card-title mb-1">Create Property</h6>
									</div>
									<hr>
                     <form class="form-horizontal" role="form" method="POST" action="property-create" enctype="multipart/form-data" >
																@csrf
									<div class="row">
										<div class="col-md-12 col-lg-12 col-xl-12" style="margin-top: 14px;">
											<div class="">


										 <div class="form-group">
													<label class="">Property Name:</label><sup style="color: red;">*</sup>
													<div class="pos-relative">
														<input class="form-control pd-r-80" name="property_name" required="" type="text" placeholder="Enter Carpet Area">
													</div>
											</div>

											<div class="form-group">
								                      <p class="mg-b-10">Property For:<sup style="color: red;">*</sup></p>
								                      <select class="form-control category" name="type" required="">
								                      <option value="">Select Property For:</option>                         
								                      <option value="1">Sale</option>
								                      <option value="2">Rent</option>
								                      </select>
                          					</div>

                          				<!-- 	<div class="form-group">
								                 <label class=""> Property Floor No:</label><sup style="color: red;">*</sup>
								                  <div class="pos-relative">
									                <input class="form-control pd-r-80" name="floor" required="" type="text" placeholder="Enter Floor No">
								                  </div>
							                </div>
 -->


                      <div class="form-group">
													<label class="">Carpet Area:</label><sup style="color: red;">*</sup>
													<div class="pos-relative">
														<input class="form-control pd-r-80" name="carpet_area" required="" type="text" placeholder="Enter Carpet Area">
													</div>
											</div>


                          					<div class="form-group">
												<label class="">Built Up Area:</label><sup style="color: red;">*</sup>
													<div class="pos-relative">
														<input class="form-control pd-r-80" name="built_area" required="" type="text" placeholder="Enter Built Up Area">
													</div>
											</div>


										<div class="form-group">
											   <label class="">Property Furnished Type:</label><sup style="color: red;">*</sup>
													<div class="pos-relative">
													<select class="form-control " name="furnished_type" required="">                     
							                  <option value="">select Property Furnished Type</option>
							                      <option value="furnished">Furnished</option>
							                      <option value="unfurnished">Unfurnished</option>
							                      <option value="semifurnished">Semi-Furnished</option>
							                      </select>
												</div>
											</div>


											 <div class="form-group">
												<label class="">No of Rooms:</label><sup style="color: red;">*</sup>
												  <div class="pos-relative">
														<input class="form-control pd-r-80" name="no_room" type="text" placeholder="Enter No of Rooms">
												 </div>
											</div>

											<div class="form-group">
												<label class="">No of Bed Rooms:</label><sup style="color: red;">*</sup>
												  <div class="pos-relative">
														<input class="form-control pd-r-80" name="no_bed_room" type="text" placeholder="Enter No of Bed Rooms">
												 </div>
											</div>

											<div class="form-group">
												<label class="">No of Bath Rooms:</label><sup style="color: red;">*</sup>
												  <div class="pos-relative">
														<input class="form-control pd-r-80" name="no_bath_room" type="text" placeholder="Enter No of Bath Rooms">
												 </div>
											</div>

											<div class="form-group">
											   <label class="">Parking:</label><sup style="color: red;">*</sup>
													<div class="pos-relative">
													<select class="form-control " name="parking" required="">                     
							                  <option value="">select Parking</option>
							                      <option value="1">Yes</option>
							                      <option value="2">No</option>
							            </select>
												</div>
											</div>



											<div class="form-group">
											   <label class="">Property Location:</label><sup style="color: red;">*</sup>
												<div class="pos-relative">
												   <input class="form-control pd-r-80" name="location" required="" type="text" id="SearchLocation" placeholder="Enter Location">
												</div>
											</div>

											<input type="hidden" name="latitude" id="latitude">
											<input type="hidden" name="longitude" id="longitude">


											<div class="form-group">
												<label class="">Map:</label><sup style="color: red;">*</sup>
												  <div class="pos-relative">
														<input class="form-control pd-r-80" name="iframe" type="text" placeholder="Enter Map link">
												 </div>
											</div>


											<div class="form-group hidden" id="sprice">
								               <label class="">Property Selling Price:</label><sup style="color: red;">*</sup>
								                <div class="pos-relative">
									            <input class="form-control pd-r-80" name="selling_price"  type="text" placeholder="Enter Property Selling Price">
								            </div>
							                </div>

							                <div class="form-group hidden" id="deposite">
												<label class="">Deposite:</label><sup style="color: red;">*</sup>
												  <div class="pos-relative">
														<input class="form-control pd-r-80" name="deposite" type="text" placeholder="Enter Deposite">
												 </div>
											</div>

											<div class="form-group hidden" id="refund">
								                <p class="mg-b-10">Instant Deposite Refund:<sup style="color: red;">*</sup></p>
								                   <select class="form-control" name="instant_deposit_refund" > 
								                      <option value="">Select Instant Deposite Refund</option>                        
								                      <option value="Yes">Yes</option>
								                      <option value="No">No</option>
								                   </select>
                          				    </div>


							       <div class="form-group hidden" id="rent">
												<label class="">Monthly Rent:</label><sup style="color: red;">*</sup>
												  <div class="pos-relative">
														<input class="form-control pd-r-80" name="rent" type="text" placeholder="Enter Monthly Rent">
												 </div>
											</div>



							       <!--   <div class="form-group">
													<label class="">Property Video:</label><sup style="color: red;">*</sup>
													<div class="pos-relative">
														<input class="form-control pd-r-80" name="property_video"  type="file">
													</div>
												</div> -->

												<div class="form-group">
													<label class="">Thumbnail Image:</label><sup style="color: red;">*</sup>
													<input class="form-control" name="thumbnil_image" type="file">
												</div>

						                        <div class="form-group">
							                       <label class="">Image:</label><sup style="color: red;">*</sup>
							                       <div class="pos-relative">
								                    <input class="form-control pd-r-80" name="image" required="" type="file">
							                    </div>
						                       </div>


						              <div class="form-group">
                            <p class="mg-b-10">Property Amenety:<sup style="color: red;">*</sup></p>
                              <select class="form-control select2" name="amenety_id[]" multiple="multiple" required=""> 
                                <option value="">Select Property Amenety</option>                        
								                 @foreach($amenety as $amenetys)
								                      <option value="{{$amenetys->id}}">{{$amenetys->name}}</option>
								                 @endforeach
								              </select>
                          </div>


						                       <div class="form-group">
												<label class="">Description:</label><sup style="color: red;">*</sup>
												  <div class="pos-relative">
														<input class="form-control pd-r-80" name="description" type="text" placeholder="Enter Description">
												 </div>
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

<script type="text/javascript">
  $(document).ready(function(){
    var autocomplete;
    var id = 'SearchLocation';
    autocomplete = new google.maps.places.Autocomplete((document.getElementById(id)),{
      types:['geocode'],
    })
    
    google.maps.event.addListener(autocomplete, 'place_changed', function(){
      var place = autocomplete.getPlace();
       jQuery("#latitude").val(place.geometry.location.lat());
      jQuery("#longitude").val(place.geometry.location.lng());
      
    })
  });
</script>

	<script>
        $('#SearchLocation').on('click',function(){
            if (navigator.geolocation) {
              // Request the user's location
              navigator.geolocation.getCurrentPosition(function(position) {
                // Get the latitude and longitude from the position object
                var lat = position.coords.latitude;
                var lng = position.coords.longitude;
                console.log(position);
                console.log(lat);
                console.log(lng);

                $('#latitude').val(lat);
                 $('#longitude').val(lng);
                 $('#lat').val(lat);
                 $('#long').val(lng);
                
                // Use the latitude and longitude to get the user's live location
                // ...
                $.ajax({
                  url:'https://maps.googleapis.com/maps/api/geocode/json?latlng='+lat+','+lng+'&sensor=true&key=AIzaSyAhj-UGGa7AUgSXcPjF0-UbsMLI9I_RC8Q&libraries=places&callback=initialize',
                  method:'GET',
                  success:function(res){
                    
                   // var result = JSON.parse(res);
                    var address = res.results[0].formatted_address;
                    $('#userLocation').val(address);
                  }
                  
                });
              });
            }
                
        });

      </script>

      	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


     <script src="{{config('app.baseURL')}}/js/toaster.min.js"></script>
     <script src="{{config('app.baseURL')}}/admin-assets/js/jquery.min.js"></script>


 

 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
 <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>

 <!-- Form-elements js-->
<script src="{{config('app.baseURL')}}/admin-assets/js/advanced-form-elements.js"></script>
<script src="{{config('app.baseURL')}}/admin-assets/js/select2.js"></script>
<!--Sumoselect js-->
<script src="{{config('app.baseURL')}}/admin-assets/plugins/sumoselect/jquery.sumoselect.js"></script>


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

<script>
    $('.category').change(function(){

      var resID=$(this).val();



      if(resID==1)
      { 

      	$('#sprice').removeClass("hidden");
        $('#rent').addClass("hidden");
        $('#deposite').addClass("hidden");
        $('#refund').addClass("hidden");




      }

      if(resID==2)
      {

      $('#sprice').addClass("hidden");
        $('#rent').removeClass("hidden");
        $('#deposite').removeClass("hidden");
        $('#refund').removeClass("hidden");





      }


     
      
      


      console.log(resID);
    });
  </script>




<script type="text/javascript">
$('#l1').removeClass('active');
$('#l2').removeClass('active');
$('#l3').removeClass('active');
$('#l5').addClass('active');
$('#l6').removeClass('active');
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