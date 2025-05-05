

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


                                    <div class="mb-4">
                                        <h6 class="section-title">Basic Information</h6>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="category">Auction Category:</label><sup
                                                        class="text-danger">*</sup>
                                                    <select class="form-control" name="category" id="category"
                                                        required="">
                                                        <option value="">Select Category</option>
                                                        <option value="1"
                                                            <?php echo e(old('category', $auction->category ?? '') == 1 ? 'selected' : ''); ?>>
                                                            IBC Auction</option>
                                                        <option value="2"
                                                            <?php echo e(old('category', $auction->category ?? '') == 2 ? 'selected' : ''); ?>>
                                                            Car Auction</option>
                                                        <option value="3"
                                                            <?php echo e(old('category', $auction->category ?? '') == 3 ? 'selected' : ''); ?>>
                                                            Drt Auction</option>
                                                        <option value="4"
                                                            <?php echo e(old('category', $auction->category ?? '') == 4 ? 'selected' : ''); ?>>
                                                            Jewellery Auction</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Bank Name:</label><sup class="text-danger">*</sup>
                                                    <select class="form-control" name="bank_name" required="">
                                                        <option value="">Select Bank Name</option>
                                                        <?php $__currentLoopData = $bank; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banks): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($banks->id); ?>"
                                                                <?php echo e(old('category', $auction->bank_name ?? '') == $banks->id ? 'selected' : ''); ?>>
                                                                <?php echo e($banks->bank_name); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Property Category:</label><sup class="text-danger">*</sup>
                                                    <select class="form-control" name="property_type" required="">
                                                        <option value="">Select Property Type</option>
                                                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($categorys->id); ?>"
                                                                <?php echo e(old('category', $auction->category ?? '') == $categorys->id ? 'selected' : ''); ?>>
                                                                <?php echo e($categorys->name); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Location Information Section -->
                                    <div class="mb-4">
                                        <h6 class="section-title">Location Information</h6>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>State:</label><sup class="text-danger">*</sup>
                                                    <input class="form-control" name="state" required="" type="text"
                                                        placeholder="Enter State" value="<?php echo e($auction->state); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>District:</label><sup class="text-danger">*</sup>
                                                    <input class="form-control" name="district" required=""
                                                        type="text" placeholder="Enter District"
                                                        value="<?php echo e($auction->district); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Locality:</label><sup class="text-danger">*</sup>
                                                    <input class="form-control" name="locality" required=""
                                                        type="text" placeholder="Enter Locality"
                                                        value="<?php echo e($auction->locality); ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Property Details Section -->
                                    <div class="mb-4">
                                        <h6 class="section-title">Property Details</h6>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Property Type:</label><sup class="text-danger">*</sup>
                                                    <input class="form-control" name="property_type_one" type="text"
                                                        required="" placeholder="Enter Property Type"
                                                        value="<?php echo e($auction->property_type_one); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Area (Sq.Ft):</label><sup class="text-danger">*</sup>
                                                    <input class="form-control" name="area" required=""
                                                        type="text" placeholder="Enter Area"
                                                        value="<?php echo e($auction->area); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Possession:</label><sup class="text-danger">*</sup>
                                                    <select class="form-control" name="possession" required="">
                                                        <option value="">Select Possession</option>
                                                        <option value="1"
                                                            <?php echo e(old('possession', $auction->possession ?? '') == 1 ? 'selected' : ''); ?>>
                                                            Physical Possession</option>
                                                        <option value="2"
                                                            <?php echo e(old('possession', $auction->possession ?? '') == 2 ? 'selected' : ''); ?>>
                                                            Symbolic Possession</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Pricing Information Section -->
                                    <div class="mb-4">
                                        <h6 class="section-title">Pricing Information</h6>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Property Price:</label><sup class="text-danger">*</sup>
                                                    <input class="form-control" name="property_price" type="number"
                                                        onkeypress="if(this.value.length==10)" required=""
                                                        placeholder="Enter Property Price"
                                                        value="<?php echo e($auction->property_price); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Reserve Price:</label><sup class="text-danger">*</sup>
                                                    <input class="form-control" name="reserve_price" type="number"
                                                        onkeypress="if(this.value.length==10)"
                                                        placeholder="Enter Reserve Price"
                                                        value="<?php echo e($auction->reserve_price); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Market Price:</label><sup class="text-danger">*</sup>
                                                    <input class="form-control" name="market_price" type="number"
                                                        onkeypress="if(this.value.length==10)" required=""
                                                        placeholder="Enter Market Price"
                                                        value="<?php echo e($auction->market_price); ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Auction Details Section -->
                                    <div class="mb-4">
                                        <h6 class="section-title">Auction Details</h6>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>EMD Amount:</label><sup class="text-danger">*</sup>
                                                    <input class="form-control" name="emd_amount" required=""
                                                        type="number" onkeypress="if(this.value.length==10)"
                                                        placeholder="Enter EMD Amount"
                                                        value="<?php echo e($auction->emd_amount); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Bid Increment:</label><sup class="text-danger">*</sup>
                                                    <input class="form-control" name="bid_increment" required=""
                                                        type="number" onkeypress="if(this.value.length==10)"
                                                        placeholder="Enter Bid Increment"
                                                        value="<?php echo e($auction->bid_increment); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Verified:</label><sup class="text-danger">*</sup>
                                                    <select class="form-control" name="featured" required>
                                                        <option value="">Select Verification</option>
                                                        <option value="1"
                                                            <?php echo e(old('featured', $auction->featured ?? '') == 1 ? 'selected' : ''); ?>>
                                                            Yes</option>
                                                        <option value="2"
                                                            <?php echo e(old('featured', $auction->featured ?? '') == 2 ? 'selected' : ''); ?>>
                                                            No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>EMD Submission Deadline:</label><sup class="text-danger">*</sup>
                                                    <input class="form-control" name="emd_submission" required=""
                                                        type="datetime-local" value="<?php echo e($auction->emd_submission); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Auction Start Date/Time:</label><sup class="text-danger">*</sup>
                                                    <input class="form-control" name="auction_start_datetime"
                                                        required="" type="datetime-local"
                                                        value="<?php echo e($auction->auction_start_datetime); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Auction End Date/Time:</label><sup class="text-danger">*</sup>
                                                    <input class="form-control" name="auction_end_datetime"
                                                        required="" type="datetime-local"
                                                        value="<?php echo e($auction->auction_end_datetime); ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Image Upload Section -->
                                    <div class="mb-4">
                                        <h6 class="section-title">Property Images</h6>
                                        <div class="row">
                                            <!-- Thumbnail Image -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="thumbnail">Thumbnail Image:</label>
                                                    <small class="form-text text-muted">Current thumbnail (Recommended:
                                                        600x400px)</small>

                                                    <!-- Show existing thumbnail if exists -->
                                                    <?php if($auction->thumbnail): ?>
                                                        <div class="mb-2">
                                                            <img src="<?php echo e(Storage::url($auction->thumbnail)); ?>"
                                                                style="max-width: 200px;" class="img-thumbnail mb-2">
                                                            <div class="form-check">
                                                                <input type="checkbox" name="remove_thumbnail"
                                                                    id="remove_thumbnail" class="form-check-input">
                                                                <label for="remove_thumbnail"
                                                                    class="form-check-label">Remove current
                                                                    thumbnail</label>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>

                                                    <!-- New thumbnail upload -->
                                                    <input class="form-control" type="file" name="thumbnail"
                                                        id="thumbnail" accept="image/*">
                                                    <small class="text-muted">Leave blank to keep current image</small>
                                                    <div class="mt-2">
                                                        <img id="thumbnail-preview" src="#"
                                                            alt="New Thumbnail Preview"
                                                            style="max-width: 200px; display: none;">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Detail Images -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="detail_images">Detail Images:</label>
                                                    <small class="form-text text-muted">Current gallery images
                                                        (Recommended: 1200x800px)</small>

                                                    <!-- Display existing detail images -->
                                                    <?php if($auction->images->count() > 0): ?>
                                                        <div class="current-images mb-3">
                                                            <?php $__currentLoopData = $auction->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <div
                                                                    class="image-container d-inline-block mr-2 mb-2 position-relative">
                                                                    <img src="<?php echo e(Storage::url($image->image_path)); ?>"
                                                                        style="max-width: 100px;" class="img-thumbnail">
                                                                    <div class="form-check position-absolute"
                                                                        style="top: 5px; left: 5px;">
                                                                        <input type="checkbox" name="remove_images[]"
                                                                            value="<?php echo e($image->id); ?>"
                                                                            class="form-check-input">
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <small class="text-muted d-block">Check images to
                                                                remove</small>
                                                        </div>
                                                    <?php endif; ?>

                                                    <!-- New images upload -->
                                                    <input class="form-control" type="file" name="detail_images[]"
                                                        id="detail_images" multiple accept="image/*">
                                                    <small class="text-muted">Add more images to the gallery</small>
                                                    <div class="mt-2" id="detail-images-preview"
                                                        style="display: flex; flex-wrap: wrap; gap: 10px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Additional Information Section -->
                                    <div class="mb-4">
                                        <h6 class="section-title">Additional Information</h6>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="file">Upload Document:</label>
                                                    <sup class="text-danger">*</sup>

                                                    <div class="input-group">
                                                        <input class="form-control" type="file" name="document"
                                                            id="document"
                                                            <?php echo e(empty($auction->document) ? 'required' : ''); ?>>

                                                        <?php if(!empty($auction->document)): ?>
                                                            <div class="input-group-append">
                                                                <a href="<?php echo e(Storage::url($auction->document)); ?>"
                                                                    target="_blank" class="btn btn-outline-primary">
                                                                    <i class="fas fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>

                                                    <?php if(!empty($auction->document)): ?>
                                                        <small class="text-muted mt-1 d-block">Current file will be
                                                            replaced when uploading new file</small>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="description">Description:</label><sup
                                                        class="text-danger">*</sup>
                                                    <textarea class="form-control" id="summernote" name="description" required><?php echo e($auction->description); ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group text-center mt-4">
                                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
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

        // Thumbnail preview
        document.getElementById('thumbnail').addEventListener('change', function(e) {
            const preview = document.getElementById('thumbnail-preview');
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }
                reader.readAsDataURL(file);
            }
        });

        // Detail images preview
        document.getElementById('detail_images').addEventListener('change', function(e) {
            const previewContainer = document.getElementById('detail-images-preview');
            previewContainer.innerHTML = '';

            if (e.target.files.length > 0) {
                previewContainer.style.display = 'flex';

                for (let i = 0; i < e.target.files.length; i++) {
                    const file = e.target.files[i];
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.alt = 'Preview ' + (i + 1);
                        img.style.maxWidth = '100px';
                        img.style.maxHeight = '100px';
                        previewContainer.appendChild(img);
                    }

                    reader.readAsDataURL(file);
                }
            } else {
                previewContainer.style.display = 'none';
            }
        });
    </script>

    <style>
        .section-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid #eee;
        }

        .form-group label {
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .text-danger {
            color: #dc3545;
        }

        .btn-primary {
            background-color: #467fcf;
            border-color: #467fcf;
        }

        .btn-lg {
            padding: 0.5rem 2rem;
            font-size: 1.1rem;
        }

        .section-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid #eee;
        }

        .form-text.text-muted {
            font-size: 0.8rem;
            color: #6c757d !important;
        }

        #thumbnail-preview,
        #detail-images-preview img {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\auction-comfyhomes\resources\views/admin/auction/edit.blade.php ENDPATH**/ ?>