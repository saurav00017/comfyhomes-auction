

<script src="<?php echo e(config('app.baseURL')); ?>/assets/js/jquery.min.js"></script>

<!-- Include Summernote CSS and JS from CDN -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


<?php $__env->startSection('content'); ?>

    <body>
        <div class="container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div>
                    <h2 class="main-content-title tx-24 mg-b-5">Auction Form</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Forms</a></li>
                        <li class="breadcrumb-item ">Auction</li>
                        <li class="breadcrumb-item active" aria-current="page">Udate</li>
                    </ol>
                </div>

            </div>
            <!-- End Page Header -->
            <div>

                <!-- Row -->

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card custom-card">
                            <div class="card-body">

                                <div>
                                    <a href="<?php echo e(config('app.baseURL')); ?>/admin/auction-management"
                                        style="float: inline-end;"> <button type="submit"
                                            class="btn pull-right btn btn-primary panel-button add-btn">Back</button></a><br>
                                    <h6 class="card-title mb-1">Udate Auction Form</h6>
                                    <!-- <p class="text-muted card-sub-title">A form group layout for entering card information upon checkout.</p> -->

                                </div>
                                <hr>

                                <form class="form-horizontal" role="form" method="POST"
                                    action="<?php echo e(config('app.baseURL')); ?>/admin/update-auction/<?php echo e($auction->id); ?>"
                                    enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>


                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-xl-12" style="margin-top: 14px;">
                                            <div class="">
                                                <!-- <div class="form-group">
                 <label class="" >Bank Name:</label><sup style="color: red;">*</sup>
                 <input class="form-control" name="bank_name" required="" type="text" placeholder="Enter Bank Name" value="<?php echo e($auction->bank_name); ?>">
                </div> -->



                                                <div class="form-group">
                                                    <label for="column_size">Auction :</label><sup
                                                        style="color: red;">*</sup>
                                                    <select class="form-control" name="category" id="category">
                                                        <option>Select Category</option>
                                                        <option value="1">IBC Auction</option>
                                                        <option value="2">Car Auction</option>
                                                        <option value="3">Drt Auction</option>
                                                        <option value="4">Jewellery Auction</option>
                                                    </select>
                                                </div>


                                                <div class="form-group">
                                                    <p class="mg-b-10">Bank Name:<sup style="color: red;">*</sup></p>
                                                    <select class="form-control" name="bank_name" required="">
                                                        <option value="">Select Bank Name:</option>
                                                        <?php $__currentLoopData = $bank; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banks): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($banks->id); ?>" <?php if ($auction->bank_name == $banks->id) {
                                                                echo 'selected';
                                                            } ?>>
                                                                <?php echo e($banks->bank_name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>


                                                <div class="form-group">
                                                    <label class="">State:</label><sup style="color: red;">*</sup>
                                                    <input class="form-control" name="state" required="" type="text"
                                                        placeholder="Enter State"value="<?php echo e($auction->state); ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label class="">District:</label><sup style="color: red;">*</sup>
                                                    <input class="form-control" name="district" required=""
                                                        type="text" placeholder="Enter City"
                                                        value="<?php echo e($auction->district); ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label class="">Locality:</label><sup style="color: red;">*</sup>
                                                    <input class="form-control" name="locality" required=""
                                                        type="text" placeholder="Enter Locality"
                                                        value="<?php echo e($auction->locality); ?>">
                                                </div>

                                                <div class="form-group">
                                                    <p class="mg-b-10">Possession:<sup style="color: red;">*</sup></p>
                                                    <select class="form-control" name="possession" required="">
                                                        <option value="">Select Possession:</option>
                                                        <option value="1" <?php if ($auction->possession == 1) {
                                                            echo 'selected';
                                                        } ?>>Physical Possession
                                                        </option>
                                                        <option value="2" <?php if ($auction->possession == 2) {
                                                            echo 'selected';
                                                        } ?>>Symbolic Possession
                                                        </option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <p class="mg-b-10">Featured:<sup style="color: red;">*</sup></p>
                                                    <select class="form-control" name="featured" required="">
                                                        <option value="">Select Featured:</option>
                                                        <option value="1" <?php if ($auction->featured == 1) {
                                                            echo 'selected';
                                                        } ?>>Yes</option>
                                                        <option value="2" <?php if ($auction->featured == 2) {
                                                            echo 'selected';
                                                        } ?>>No</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label class="">Area:</label><sup style="color: red;">*</sup>
                                                    <input class="form-control" name="area" required=""
                                                        type="text" placeholder="Enter Area Sq.Ft"
                                                        value="<?php echo e($auction->area); ?>">
                                                </div>


                                                <div class="form-group">
                                                    <label class="">Property Category:</label><sup
                                                        style="color: red;">*</sup>
                                                    <input class="form-control" name="property_type" required=""
                                                        type="text" placeholder="Enter Property Type"
                                                        value="<?php echo e($auction->property_type); ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label class="">Property Type:</label><sup
                                                        style="color: red;">*</sup>
                                                    <input class="form-control" name="property_type_one" type="text"
                                                        required="" placeholder="Enter Property Type"
                                                        value="<?php echo e($auction->property_type_one); ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label class="">Property Price:</label><sup
                                                        style="color: red;">*</sup>
                                                    <input class="form-control" name="property_price" required=""
                                                        type="number" onkeypress="if(this.value.length==10)"
                                                        placeholder="Enter Property Price"
                                                        value="<?php echo e($auction->property_price); ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label class="">Reserve Price:</label><sup
                                                        style="color: red;">*</sup>
                                                    <input class="form-control" name="reserve_price" required=""
                                                        type="number" onkeypress="if(this.value.length==10)"
                                                        placeholder="Enter Reserve Price"
                                                        value="<?php echo e($auction->reserve_price); ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label class="">Market Price:</label><sup
                                                        style="color: red;">*</sup>
                                                    <input class="form-control" name="market_price" type="number"
                                                        onkeypress="if(this.value.length==10)" required=""
                                                        placeholder="Enter Market Price"
                                                        value="<?php echo e($auction->market_price); ?>">
                                                </div>


                                                <div class="form-group">
                                                    <label class="">Emd Amount:</label><sup
                                                        style="color: red;">*</sup>
                                                    <input class="form-control" name="emd_amount" required=""
                                                        type="number" onkeypress="if(this.value.length==10)"
                                                        placeholder="Enter Emd Amount"
                                                        value="<?php echo e($auction->emd_amount); ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label class="">Bid Increment:</label><sup
                                                        style="color: red;">*</sup>
                                                    <input class="form-control" name="bid_increment" required=""
                                                        type="number" onkeypress="if(this.value.length==10)"
                                                        placeholder="Enter Bid Increment"
                                                        value="<?php echo e($auction->bid_increment); ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label class="">Emd Submission:</label><sup
                                                        style="color: red;">*</sup>
                                                    <input class="form-control" name="emd_submission" required=""
                                                        type="datetime-local" placeholder="Enter Emd Submission"
                                                        value="<?php echo e($auction->emd_submission); ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label class="">Auction Start Date Time:</label><sup
                                                        style="color: red;">*</sup>
                                                    <input class="form-control" name="auction_start_datetime"
                                                        required="" type="datetime-local"
                                                        placeholder="Enter Auction Start Date Time"
                                                        value="<?php echo e($auction->auction_start_datetime); ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label class="">Auction Start Date Time:</label><sup
                                                        style="color: red;">*</sup>
                                                    <input class="form-control" name="auction_end_datetime"
                                                        required="" type="datetime-local"
                                                        placeholder="Enter Auction Start Date Time"
                                                        value="<?php echo e($auction->auction_end_datetime); ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="fiel">Upload Document:</label><sup
                                                        style="color: red;">*</sup>
                                                    <?php if($auction->document != ''): ?>
                                                        <input class="form-control" type="file" name="document">
                                                    <?php else: ?>
                                                        <input class="form-control" type="file" name="document"
                                                            required>
                                                    <?php endif; ?>


                                                </div>

                                                <div class="form-group">
                                                    <label for="description">Description:</label><sup
                                                        style="color: red;">*</sup>
                                                    <textarea class="form-control" id="summernote" name="description" required><?php echo e($auction->description); ?></textarea>
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




        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>

        <script>
            $(".editor").on('keyup  mouseover', function(e) {
                var myEditor = document.querySelector('.editor')
                var html = myEditor.children[0].innerHTML;
                $('.new-editor').val(html);
            });

            <?php if(Session::has('message')): ?>
                var type = "<?php echo e(Session::get('alert-type', 'info')); ?>";
                switch (type) {
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

        <script>
            $(document).ready(function() {
                $('#summernote').summernote({
                    height: 300, // Set editor height
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\auction-comfyhomes\resources\views/admin/auction/edit.blade.php ENDPATH**/ ?>