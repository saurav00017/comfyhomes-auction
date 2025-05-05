

<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Auction Details</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(config('app.baseURL')); ?>/admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo e(config('app.baseURL')); ?>/admin/auction-management">Auctions</a></li>
                            <li class="breadcrumb-item active">View</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-body">
        <section class="card">
            <div class="card-header">
                <h4 class="card-title">Auction #<?php echo e($auction->id); ?></h4>
                <div class="heading-elements">
                    <a href="<?php echo e(config('app.baseURL')); ?>/admin/edit-auction/<?php echo e($auction->id); ?>" class="btn btn-primary">Edit</a>
                </div>
            </div>
            <div class="card-body">
                <!-- Basic Information -->
                <div class="row mb-2">
                    <div class="col-12">
                        <h5 class="section-title">Basic Information</h5>
                        <hr>
                    </div>
                    <div class="col-md-4">
                        <p><strong>Category:</strong> 
                            <?php switch($auction->category):
                                case (1): ?> IBC Auction <?php break; ?>
                                <?php case (2): ?> Car Auction <?php break; ?>
                                <?php case (3): ?> Drt Auction <?php break; ?>
                                <?php case (4): ?> Jewellery Auction <?php break; ?>
                                <?php default: ?> Unknown
                            <?php endswitch; ?>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p><strong>Bank:</strong> <?php echo e($auction->bank->bank_name ?? 'N/A'); ?></p>
                    </div>
                    <div class="col-md-4">
                        <p><strong>Property Type:</strong> <?php echo e($auction->propertyType->name ?? 'N/A'); ?></p>
                    </div>
                </div>

                <!-- Location Information -->
                <div class="row mb-2">
                    <div class="col-12">
                        <h5 class="section-title">Location Information</h5>
                        <hr>
                    </div>
                    <div class="col-md-4">
                        <p><strong>State:</strong> <?php echo e($auction->state); ?></p>
                    </div>
                    <div class="col-md-4">
                        <p><strong>District:</strong> <?php echo e($auction->district); ?></p>
                    </div>
                    <div class="col-md-4">
                        <p><strong>Locality:</strong> <?php echo e($auction->locality); ?></p>
                    </div>
                </div>

                <!-- Property Details -->
                <div class="row mb-2">
                    <div class="col-12">
                        <h5 class="section-title">Property Details</h5>
                        <hr>
                    </div>
                    <div class="col-md-4">
                        <p><strong>Property Type:</strong> <?php echo e($auction->property_type_one); ?></p>
                    </div>
                    <div class="col-md-4">
                        <p><strong>Area:</strong> <?php echo e($auction->area); ?> Sq.Ft</p>
                    </div>
                    <div class="col-md-4">
                        <p><strong>Possession:</strong> 
                            <?php echo e($auction->possession == 1 ? 'Physical Possession' : 'Symbolic Possession'); ?>

                        </p>
                    </div>
                </div>

                <!-- Pricing Information -->
                <div class="row mb-2">
                    <div class="col-12">
                        <h5 class="section-title">Pricing Information</h5>
                        <hr>
                    </div>
                    <div class="col-md-4">
                        <p><strong>Property Price:</strong> ₹<?php echo e(number_format($auction->property_price)); ?></p>
                    </div>
                    <div class="col-md-4">
                        <p><strong>Reserve Price:</strong> ₹<?php echo e(number_format($auction->reserve_price)); ?></p>
                    </div>
                    <div class="col-md-4">
                        <p><strong>Market Price:</strong> ₹<?php echo e(number_format($auction->market_price)); ?></p>
                    </div>
                    <div class="col-md-4">
                        <p><strong>EMD Amount:</strong> ₹<?php echo e(number_format($auction->emd_amount)); ?></p>
                    </div>
                    <div class="col-md-4">
                        <p><strong>Bid Increment:</strong> ₹<?php echo e(number_format($auction->bid_increment)); ?></p>
                    </div>
                    <div class="col-md-4">
                        <p><strong>Verified:</strong> <?php echo e($auction->featured == 1 ? 'Yes' : 'No'); ?></p>
                    </div>
                </div>

                <!-- Auction Timeline -->
                <div class="row mb-2">
                    <div class="col-12">
                        <h5 class="section-title">Auction Timeline</h5>
                        <hr>
                    </div>
                    <div class="col-md-4">
                        <p><strong>EMD Submission:</strong> <?php echo e(date('d M Y h:i A', strtotime($auction->emd_submission))); ?></p>
                    </div>
                    <div class="col-md-4">
                        <p><strong>Start Date/Time:</strong> <?php echo e(date('d M Y h:i A', strtotime($auction->auction_start_datetime))); ?></p>
                    </div>
                    <div class="col-md-4">
                        <p><strong>End Date/Time:</strong> <?php echo e(date('d M Y h:i A', strtotime($auction->auction_end_datetime))); ?></p>
                    </div>
                </div>

                <!-- Property Images -->
                <div class="row mb-2">
                    <div class="col-12">
                        <h5 class="section-title">Property Images</h5>
                        <hr>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title">Thumbnail</h6>
                            </div>
                            <div class="card-body text-center">
                                <?php if($auction->thumbnail): ?>
                                    <img src="<?php echo e(Storage::url($auction->thumbnail)); ?>" class="img-fluid" style="max-height: 300px;">
                                <?php else: ?>
                                    <p class="text-muted">No thumbnail available</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title">Gallery Images</h6>
                            </div>
                            <div class="card-body">
                                <?php if($auction->images->count() > 0): ?>
                                    <div class="row">
                                        <?php $__currentLoopData = $auction->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-md-4 mb-2">
                                                <img src="<?php echo e(Storage::url($image->image_path)); ?>" class="img-thumbnail">
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                <?php else: ?>
                                    <p class="text-muted">No gallery images available</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Documents -->
                <div class="row mb-2">
                    <div class="col-12">
                        <h5 class="section-title">Documents</h5>
                        <hr>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title">Auction Document</h6>
                            </div>
                            <div class="card-body">
                                <?php if($auction->document): ?>
                                    <a href="<?php echo e(Storage::url($auction->document)); ?>" target="_blank" class="btn btn-primary">
                                        <i class="fas fa-download"></i> Download Document
                                    </a>
                                <?php else: ?>
                                    <p class="text-muted">No document available</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Description -->
                <div class="row">
                    <div class="col-12">
                        <h5 class="section-title">Description</h5>
                        <hr>
                        <div class="card">
                            <div class="card-body">
                                <?php echo $auction->description; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<style>
    .section-title {
        font-size: 1.25rem;
        font-weight: 600;
        color: #5A8DEE;
        margin-bottom: 1rem;
    }
    .card {
        margin-bottom: 2rem;
    }
    .img-thumbnail {
        max-height: 150px;
        object-fit: cover;
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\auction-comfyhomes\resources\views/admin/auction/view.blade.php ENDPATH**/ ?>