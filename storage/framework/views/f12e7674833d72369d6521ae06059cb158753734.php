

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>


          .premium-container {
        background-color: #007ac9;
        padding: 40px;
        border-radius: 10px;
        text-align: center;
        color: white;
        margin-top: 2%!important;
        width: 75%!important;
    }
    .premium-container h1 {
        margin-bottom: 20px;
        font-size: 24px;
        color: #ffc107;
    }
    .premium-container button {
        background-color: #28a745;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }
    .premium-container button:hover {
        background-color: #218838;
    }
    .login-register {
        margin-top: 15px;
    }
    .login-register a {
        color: #fff;
        text-decoration: underline;
    }
    .app-links img {
        width: 150px;
        margin-top: 20px;
    }
    .premium-modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 999;
    }
    .premium-content {
        background-color: purple;
        padding: 40px;
        border-radius: 10px;
        text-align: center;
        color: white;
        width: 50%;
    }
    .premium-content button {
        background-color: #eaceea;
        color: purple;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }
    .premium-content button:hover {
        background-color: #218838;
    }
    .hidden {
        display: none;
    }



         span{
        font-family: "Poppins", sans-serif;
        font-weight: 500;
  font-style: normal;
    }



        .body-section .container {
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        footer .container {
          
            border-radius: 8px;
            box-shadow: 0 0 0px rgba(0, 0, 0, 0)!important;
        }

        .section-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: purple;
/*            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
*/            padding-bottom: 5px;
            margin-bottom: 20px;
                    font-family: "Poppins", sans-serif;

        }

        .detail-row {
            margin-bottom: 10px;
        }

        .detail-row span {
            font-weight: bold;
        }

        .detail-row div {
            margin-bottom: 5px;
        }

        .go-back {
            color: purple;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 20px;
                float: inline-end;
                    font-family: "Poppins", sans-serif;


        }

        .go-back:hover {
            text-decoration: underline;
        }

        .text-secondary {
            color: #6c757d;
        }
    </style>
<?php $__env->startSection('content'); ?>
<div class="full-row body-section bg-white py-80">
<div class="container">
<a href="javascript:void(0);" class="go-back" onclick="history.back()">&laquo; Go Back</a>
    <h3 class="section-title">Auction Details</h3>
    <hr>

    <div>
<!--         <h4 class="section-title">General Detail</h4>
 -->        <div class="row detail-row">
            <div class="col-md-6">
                <span>Bank Name</span>: <?php echo e($property->bank->bank_name); ?>

            </div>
                  <?php if($property->category!=4): ?>

            <div class="col-md-6">
                <span>Property Type</span>: <?php echo e($property->property_type_one); ?>

            </div>
            <?php endif; ?>
        </div>
      <?php if($property->category!=4): ?>

        <div class="row detail-row">
            <div class="col-md-6">
                <span>Area</span>: <?php echo e($property->area); ?> Sqft
            </div>
            <div class="col-md-6">
                <span>Possession</span>: <?php if($property->possession==1): ?>
                                        Physical
                                        <?php else: ?>
                                        Symbolic
                                        <?php endif; ?>
            </div>
        </div>
      <?php endif; ?>
        <div class="row detail-row">
            <div class="col-md-6">
                <span>Locality</span>: <?php echo e($property->locality); ?>

            </div>
            <div class="col-md-6">
                <span>City</span>:<?php echo e($property->district); ?>

            </div>
        </div>
        <div class="row detail-row">
            <div class="col-md-6">
                <span>Reserve Price</span>: ₹ <?php echo e(number_format($property->reserve_price, 0, '.', ',')); ?>

            </div>
            <div class="col-md-6">
                <span>Market Price Range</span>: ₹ <?php echo e(number_format($property->market_price, 0, '.', ',')); ?>

            </div>
        </div>
        <div class="row detail-row">
            <div class="col-md-6">
                <span>Emd Amount</span>: ₹ <?php echo e(number_format($property->emd_amount, 0, '.', ',')); ?>

            </div>
             <div class="col-md-6">
                <span>Emd Submission</span>: <?php echo e($property->emd_submission); ?>

            </div>
        </div>
        <div class="row detail-row">
           
            <div class="col-md-6">
                <span>Auction Start Date & Time</span>: <?php echo e($property->auction_start_datetime); ?>

            </div>

            <div class="col-md-6">
                <span>Auction End Date & Time</span>: <?php echo e($property->auction_end_datetime); ?>

            </div>
        </div>

        <div class="row detail-row">
           
            <div class="col-md-12">
            <span>Description</span>:
        <?php echo $property->description; ?>

            </div>

            
        </div>



        
    </div>

    <!-- Inspection Detail Section -->
      <?php if($subscription_available==0): ?>
    <div>
        <div class="row detail-row">
            <div class="col-md-6">
                <span>Contact Number</span>: 8585854554
            </div>
            <div class="col-md-6">
                <span>Email</span>: test@gmail.com
            </div>
        </div>
       <!--  <div class="row detail-row">
            <div class="col-md-6">
                <span>Branch Address</span>: #36, Housing Board Colony, New Bus Stand Road
            </div>
        </div> -->
    </div>
    <?php endif; ?>

    <!-- Download Document Button -->
<?php if(Auth::check()): ?>
    <?php if($subscription_available == 0): ?>
        <!-- If user is logged in and subscription is available -->
        <a href="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($property->document); ?>" class="btn btn-primary">Download Document</a>
    <?php else: ?>
        <!-- Show premium modal if user does not have an active subscription -->
        <button class="btn btn-primary" id="show-premium-download">Download Document</button>
    <?php endif; ?>
<?php else: ?>
    <!-- If the user is not logged in -->
    <button class="btn btn-primary" id="show-premium-download">Download Document</button>
<?php endif; ?>

<!-- Premium Modal -->
<div id="premium-modal" class="premium-modal hidden">
    <div class="premium-content">
        <h1>Join Premium Membership</h1>
        <p>View and download auction Document</p>
        <a href="<?php echo e(config('app.baseURL')); ?>/premium"><button>GET PREMIUM</button></a>
        <div class="login-register">
            <p>If you are already a premium member <a href="<?php echo e(config('app.baseURL')); ?>/login">LOGIN</a> | <a href="<?php echo e(config('app.baseURL')); ?>/register">REGISTER</a></p>
        </div>
    </div>
</div>

</div>
</div>


<script>
    // Show the premium modal when the download button is clicked
    document.getElementById('show-premium-download').addEventListener('click', function() {
        var modal = document.getElementById('premium-modal');
        modal.classList.remove('hidden');
        modal.style.display = 'flex';
    });

    // Close the modal when clicking outside the content
    document.getElementById('premium-modal').addEventListener('click', function(event) {
        if (event.target === this) {
            this.style.display = 'none';
        }
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/comfyhomes/public_html/auction/resources/views/acutionDetails.blade.php ENDPATH**/ ?>