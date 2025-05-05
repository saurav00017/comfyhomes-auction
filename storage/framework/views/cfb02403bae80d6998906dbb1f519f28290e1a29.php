
<?php $__env->startSection('content'); ?>



<script src="<?php echo e(config('app.baseURL')); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo e(config('app.baseURL')); ?>/assets/js/bootstrap.min.js"></script>


<body>
	<div class="container-fluid">
										<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Bank Form</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Forms</a></li>
								<li class="breadcrumb-item ">Bank</li>
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
										<a href="<?php echo e(config('app.baseURL')); ?>/admin/bank-management" style="float: inline-end;"> <button type="submit" class="btn pull-right btn btn-primary panel-button add-btn" >Back</button></a><br>
										<h6 class="card-title mb-1">Update Bank Form</h6>
										<!-- <p class="text-muted card-sub-title">A form group layout for entering card information upon checkout.</p> -->

									</div>
									<hr>

								<form class="form-horizontal" role="form" method="POST" action="<?php echo e(config('app.baseURL')); ?>/admin/update-bank/<?php echo e($bank->id); ?>" enctype="multipart/form-data" >
																															<?php echo csrf_field(); ?>


									<div class="row">
										<div class="col-md-12 col-lg-12 col-xl-12" style="margin-top: 14px;">
											<div class="">

												<div class="form-group">
													<label class="" >Bank Icon:</label><sup style="color: red;">*</sup>
													<div class="img-wrap">
                             <img class="image-size slider-img"  src="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($bank->icon); ?>" alt="" style="height: 100px;">&nbsp;
                          </div><br>
                          <?php if($bank->icon!=""): ?>
													<input class="form-control" name="icon" type="file" placeholder="select file">
													<?php else: ?>
													<input class="form-control" name="icon" required="" type="file" placeholder="select file">
													<?php endif; ?>

												</div>

												<div class="form-group">
													<label class="" >Bank Name:</label><sup style="color: red;">*</sup>
													<input class="form-control" name="bank_name" required="" type="text" placeholder="Enter Bank Name" value="<?php echo e($bank->bank_name); ?>">
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


     <script src="<?php echo e(config('app.baseURL')); ?>/js/toaster.min.js"></script>
     <script src="<?php echo e(config('app.baseURL')); ?>/assets/js/jquery.min.js"></script>


 

 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
 <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>

 <script>
  $(".editor").on('keyup  mouseover',function(e) {
    var myEditor = document.querySelector('.editor')
    var html = myEditor.children[0].innerHTML;
    $('.new-editor').val(html);
  });

  <?php if(Session::has('message')): ?>
  var type = "<?php echo e(Session::get('alert-type', 'info')); ?>";
  switch(type){
    case 'info':
    toastr.info("<?php echo e(Session::get('message')); ?>");
    break;

    case 'warning':
    toastr.warning("<?php echo e(Session::get('message')); ?>");
    break;
    case 'success':
    toastr.success("<?php echo e(Session::get('message')); ?>");
    break;
    case 'error':
    toastr.error("<?php echo e(Session::get('message')); ?>");
    break;
  }
  <?php endif; ?>

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



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\auction-comfyhomes\resources\views/admin/bank/edit.blade.php ENDPATH**/ ?>