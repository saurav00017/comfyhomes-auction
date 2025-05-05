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

<script src="{{config('app.baseURL')}}/assets/js/jquery-1.12.4.min.js"></script>
<script src="{{config('app.baseURL')}}/assets/js/bootstrap.min.js"></script>

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
							<h2 class="main-content-title tx-24 mg-b-5">Update Property</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item ">Property</li>
								<li class="breadcrumb-item active" aria-current="page">Update</li>
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
										<h6 class="card-title mb-1">Update Property</h6>
									</div>
									<hr>
                     <form class="form-horizontal" role="form" method="POST" action="{{config('app.baseURL')}}/admin/property-update/{{$property->id}}" enctype="multipart/form-data" >
																@csrf
									<div class="row">
										<div class="col-md-12 col-lg-12 col-xl-12" style="margin-top: 14px;">
											<div class="">


											<div class="form-group">
													<label class="">Property Name:</label><sup style="color: red;">*</sup>
													<div class="pos-relative">
														<input class="form-control pd-r-80" name="property_name" required="" type="text" placeholder="Enter Property Name" value="{{$property->property_name}}">
													</div>
											</div>


											<div class="form-group">
								                      <p class="mg-b-10">Property For:<sup style="color: red;">*</sup></p>
								                      <select class="form-control category" name="type" required="">
								                      <option value="">Select Property For:</option>                         
								                      <option value="1" <?php if ($property->type == 1) echo "selected"; ?>>Sale</option>
								                      <option value="2" <?php if ($property->type == 2) echo "selected"; ?>>Rent</option>
								                      </select>
                          					</div>

                      <div class="form-group">
												<label class="">Possession:</label><sup style="color: red;">*</sup>
													<div class="pos-relative">
														<input class="form-control pd-r-80" name="possession" required="" type="text" placeholder="Enter possession" value="{{$property->possession}}">
													</div>
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
														<input class="form-control pd-r-80" name="carpet_area" required="" type="text" placeholder="Enter Carpet Area" value="{{$property->carpet_area}}">
													</div>
											</div>


                      <div class="form-group">
												<label class="">Flat Type:</label><sup style="color: red;">*</sup>
													<div class="pos-relative">
														<input class="form-control pd-r-80" name="flat_type" required="" type="text" placeholder="Enter Flat Type" value="{{$property->flat_type}}">
													</div>
											</div>


										<div class="form-group">
											   <label class="">Property Furnished Type:</label><sup style="color: red;">*</sup>
													<div class="pos-relative">
													<select class="form-control " name="furnished_type" required="">                     
							                  <option value="">select Property Furnished Type</option>
							                      <option value="furnished" <?php if ($property->furnished_type == "furnished") echo "selected"; ?>>Furnished</option>
							                      <option value="unfurnished" <?php if ($property->furnished_type == "unfurnished") echo "selected"; ?>>Unfurnished</option>
							                      <option value="semifurnished" <?php if ($property->furnished_type == "semifurnished") echo "selected"; ?>>Semi-Furnished</option>
							                      </select>
												</div>
											</div>

										<!-- 	<div class="form-group">
												<label class="">No of Rooms:</label><sup style="color: red;">*</sup>
												  <div class="pos-relative">
														<input class="form-control pd-r-80" name="no_room" type="text" placeholder="Enter No of Rooms" value="{{$property->no_room}}">
												 </div>
											</div>

											<div class="form-group">
												<label class="">No of Bed Rooms:</label><sup style="color: red;">*</sup>
												  <div class="pos-relative">
														<input class="form-control pd-r-80" name="no_bed_room" type="text" placeholder="Enter No of Bed Rooms" value="{{$property->no_bed_room}}">
												 </div>
											</div>

											<div class="form-group">
												<label class="">No of Bath Rooms:</label><sup style="color: red;">*</sup>
												  <div class="pos-relative">
														<input class="form-control pd-r-80" name="no_bath_room" type="text" placeholder="Enter No of Bath Rooms" value="{{$property->no_bath_room}}">
												 </div>
											</div> -->


                     <div class="form-group">
											   <label class="">No Of Floors:</label><sup style="color: red;">*</sup>
													<div class="pos-relative">
													<select class="form-control " name="no_of_floor" required="">                     
    <option value="1" <?php if ($property->no_of_floor == 1) echo "selected"; ?>>1 Floor</option>
    <option value="2" <?php if ($property->no_of_floor == 2) echo "selected"; ?>>2 Floor</option>
    <option value="3" <?php if ($property->no_of_floor == 3) echo "selected"; ?>>3 Floor</option>
    <option value="4" <?php if ($property->no_of_floor == 4) echo "selected"; ?>>4 Floor</option>
    <option value="5" <?php if ($property->no_of_floor == 5) echo "selected"; ?>>5 Floor</option>
    <option value="6" <?php if ($property->no_of_floor == 6) echo "selected"; ?>>6 Floor</option>
    <option value="7" <?php if ($property->no_of_floor == 7) echo "selected"; ?>>7 Floor</option>
    <option value="8" <?php if ($property->no_of_floor == 8) echo "selected"; ?>>8 Floor</option>
    <option value="9" <?php if ($property->no_of_floor == 9) echo "selected"; ?>>9 Floor</option>
    <option value="10" <?php if ($property->no_of_floor == 10) echo "selected"; ?>>10 Floor</option>
    <option value="11" <?php if ($property->no_of_floor == 11) echo "selected"; ?>>11 Floor</option>
    <option value="12" <?php if ($property->no_of_floor == 12) echo "selected"; ?>>12 Floor</option>
    <option value="13" <?php if ($property->no_of_floor == 13) echo "selected"; ?>>13 Floor</option>
    <option value="14" <?php if ($property->no_of_floor == 14) echo "selected"; ?>>14 Floor</option>
    <option value="15" <?php if ($property->no_of_floor == 15) echo "selected"; ?>>15 Floor</option>
    <option value="16" <?php if ($property->no_of_floor == 16) echo "selected"; ?>>16 Floor</option>
    <option value="17" <?php if ($property->no_of_floor == 17) echo "selected"; ?>>17 Floor</option>
    <option value="18" <?php if ($property->no_of_floor == 18) echo "selected"; ?>>18 Floor</option>
    <option value="19" <?php if ($property->no_of_floor == 19) echo "selected"; ?>>19 Floor</option>
    <option value="20" <?php if ($property->no_of_floor == 20) echo "selected"; ?>>20 Floor</option>
    <option value="21" <?php if ($property->no_of_floor == 21) echo "selected"; ?>>21 Floor</option>
    <option value="22" <?php if ($property->no_of_floor == 22) echo "selected"; ?>>22 Floor</option>
    <option value="23" <?php if ($property->no_of_floor == 23) echo "selected"; ?>>23 Floor</option>
    <option value="24" <?php if ($property->no_of_floor == 24) echo "selected"; ?>>24 Floor</option>
    <option value="25" <?php if ($property->no_of_floor == 25) echo "selected"; ?>>25 Floor</option>
    <option value="26" <?php if ($property->no_of_floor == 26) echo "selected"; ?>>26 Floor</option>
    <option value="27" <?php if ($property->no_of_floor == 27) echo "selected"; ?>>27 Floor</option>
    <option value="28" <?php if ($property->no_of_floor == 28) echo "selected"; ?>>28 Floor</option>
    <option value="29" <?php if ($property->no_of_floor == 29) echo "selected"; ?>>29 Floor</option>
    <option value="30" <?php if ($property->no_of_floor == 30) echo "selected"; ?>>30 Floor</option>
    <option value="31" <?php if ($property->no_of_floor == 31) echo "selected"; ?>>31 Floor</option>
    <option value="32" <?php if ($property->no_of_floor == 32) echo "selected"; ?>>32 Floor</option>
    <option value="33" <?php if ($property->no_of_floor == 33) echo "selected"; ?>>33 Floor</option>
    <option value="34" <?php if ($property->no_of_floor == 34) echo "selected"; ?>>34 Floor</option>
    <option value="35" <?php if ($property->no_of_floor == 35) echo "selected"; ?>>35 Floor</option>
    <option value="36" <?php if ($property->no_of_floor == 36) echo "selected"; ?>>36 Floor</option>
    <option value="37" <?php if ($property->no_of_floor == 37) echo "selected"; ?>>37 Floor</option>
    <option value="38" <?php if ($property->no_of_floor == 38) echo "selected"; ?>>38 Floor</option>
    <option value="39" <?php if ($property->no_of_floor == 39) echo "selected"; ?>>39 Floor</option>
    <option value="40" <?php if ($property->no_of_floor == 40) echo "selected"; ?>>40 Floor</option>
					        
                          </select>
												</div>
											</div>

											<div class="form-group">
												<label class="">No of Towers:</label><sup style="color: red;">*</sup>
												  <div class="pos-relative">
														<input class="form-control pd-r-80" name="no_of_towers" required="" type="number" placeholder="Enter No of Towers" value="{{$property->no_of_towers}}">
												 </div>
											</div>

											<div class="form-group">
												<label class="">No of Lifts:</label><sup style="color: red;">*</sup>
												  <div class="pos-relative">
														<input class="form-control pd-r-80" name="no_of_lifts" required="" type="number" placeholder="Enter No of Lifts" value="{{$property->no_of_lifts}}">
												 </div>
											</div>

											<div class="form-group">
												<label class="">No of Flats:</label><sup style="color: red;">*</sup>
												  <div class="pos-relative">
														<input class="form-control pd-r-80" name="no_of_flats" required="" type="number" placeholder="Enter No of Flats" value="{{$property->no_of_flats}}">
												 </div>
											</div>

											<div class="form-group">
												<label class="">No of Balcony:</label><sup style="color: red;">*</sup>
												  <div class="pos-relative">
														<input class="form-control pd-r-80" name="no_of_blacony" required="" type="number" placeholder="Enter No of Balcony" value="{{$property->no_of_blacony}}">
												 </div>
											</div>

											<div class="form-group">
											   <label class="">Parking:</label><sup style="color: red;">*</sup>
													<div class="pos-relative">
													<select class="form-control " name="parking" required="">                     
							                  <option value="">select Parking</option>
							                      <option value="1" <?php if ($property->parking == 1) echo "selected"; ?>>Yes</option>
							                      <option value="2" <?php if ($property->parking == 2) echo "selected"; ?>>No</option>
							            </select>
												</div>
											</div>


											<div class="form-group">
											   <label class="">Property Location:</label><sup style="color: red;">*</sup>
												<div class="pos-relative">
												   <input class="form-control pd-r-80" name="location" required="" type="text" id="SearchLocation" placeholder="Enter Location" value="{{$property->location}}">
												</div>
											</div>

											<input type="hidden" name="latitude" id="latitude">
											<input type="hidden" name="longitude" id="longitude">


											<div class="form-group">
												<label class="">Map:</label><sup style="color: red;">*</sup>
												  <div class="pos-relative">
														<input class="form-control pd-r-80" required="" name="iframe" type="text" placeholder="Enter Map link" value="{{$property->iframe}}">
												 </div>
											</div>


											<div class="form-group hidden" id="sprice">
								               <label class="">Property Selling Price:</label><sup style="color: red;">*</sup>
								                <div class="pos-relative">
									            <input class="form-control pd-r-80" name="selling_price" required=""  type="text" placeholder="Enter Property Selling Price" value="{{$property->selling_price}}">
								            </div>
							                </div>

							            <!--     <div class="form-group hidden" id="deposite">
												<label class="">Deposite:</label><sup style="color: red;">*</sup>
												  <div class="pos-relative">
														<input class="form-control pd-r-80" name="deposite"  type="text" placeholder="Enter Deposite" value="{{$property->deposite}}">
												 </div>
											</div> -->

											<!-- <div class="form-group hidden" id="refund">
								                <p class="mg-b-10">Instant Deposite Refund:<sup style="color: red;">*</sup></p>
								                   <select class="form-control" name="instant_deposit_refund" > 
								                      <option value="">Select Instant Deposite Refund</option>                        
								                      <option value="Yes">Yes</option>
								                      <option value="No">No</option>
								                   </select>
                          				    </div>
 -->
<!-- 
							                <div class="form-group hidden" id="rent">
												<label class="">Monthly Rent:</label><sup style="color: red;">*</sup>
												  <div class="pos-relative">
														<input class="form-control pd-r-80" name="rent" type="text" placeholder="Enter Monthly Rent" value="{{$property->rent}}">
												 </div>
											</div> -->


										<div class="form-group">
											<p class="mg-b-10">Property Amenety:<sup style="color: red;">*</sup></p>
											<select class="form-control select2" required="" multiple="multiple" name="amenety_id[]">
											<?php	echo $property; ?>
								        @foreach($property->property_amenety as $property_amenety)
                          <?php $amenety_id= $property_amenety->amenety_id; ?>
                            <option value="{{$property_amenety->amenety_id}}" selected="">{{$property_amenety->amenety->name}}</option>
                          @endforeach

                          @foreach($amenety as $amenetys) 
                              <option value="{{$amenetys->id}}">{{$amenetys->name}}</option>
                          @endforeach
                       
									     </select>
										</div>



							       <!--   <div class="form-group">
													<label class="">Property Video:</label><sup style="color: red;">*</sup>
													<div class="pos-relative">
														<input class="form-control pd-r-80" name="property_video"  type="file">
													</div>
												</div> -->

												<div class="form-group">
													<label class="">Thumbnail Image:</label><sup style="color: red;">*</sup>
													<div class="img-wrap">
                    <img class="image-size slider-img"  src="{{config('app.baseURL')}}/storage/app/{{$property->thumbnil_image}}" alt="" style="height: 100px;">&nbsp;

                    </div>
													<input class="form-control" name="thumbnail_image" type="file">
												</div>



												

						                        <div class="form-group">
							                       <label class="">Image:</label><sup style="color: red;">*</sup><br>
							                       <div class="mb-1 ml-1 custom-div form-group" style="width: -1px; overflow-x: auto; display: inline-flex;">
                    @foreach($property->property_image as $property_image)
                    @if($property_image->image!="" && $property_image->image!=null)
                    <div class="img-wrap">
                    <a href="{{config('app.baseURL')}}/admin/remove_image/{{$property_image->id}}"><span class="close">&times;</span></a>
                     <a href="{{config('app.baseURL')}}/admin/download/{{$property_image->id}}"><span class="close" style="right: 24px!important;"><i class="fa fa-download" style="font-size: 14px!important;margin-bottom: -11px;"></i></span></a>
                    <img class="image-size slider-img"  src="{{config('app.baseURL')}}/storage/app/{{$property_image->image}}" alt="" style="height: 100px;">&nbsp;

                    </div>
                    @endif
                    
                    @endforeach

      
                  </div>
							                       <div class="pos-relative">
							                       @if($property->property_image!="[]")
								                    <input class="form-control pd-r-80" name="image"  type="file">
								                    @else
								                     <input class="form-control pd-r-80" name="image" required=""  type="file">
								                    @endif

							                    </div>
						                       </div>


						                       <div class="form-group">
												<label class="">Description:</label><sup style="color: red;">*</sup>
												  <div class="pos-relative">
														<input class="form-control pd-r-80" name="description" required="" type="text" placeholder="Enter Description" value="{{$property->description}}">
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
     <script src="{{config('app.baseURL')}}/assets/js/jquery.min.js"></script>


 

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