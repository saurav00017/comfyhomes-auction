

<style type="text/css">
    .page-banner{
            margin-top: 4%;

    }
</style>

<?php $__env->startSection('content'); ?>
<!--============== Banner Section Start ==============-->
        <div class="page-banner full-row bg-gray py-5">
            <div class="container">
                <div class="row row-cols-md-2 row-cols-1 g-3">
                    <div class="col">
                        <h3 class="page-name text-secondary m-0">Register</h3>
                    </div>
                    <div class="col">
                        <nav class="float-start float-md-end">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="index-1.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item active">Register</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Banner Section End ==============-->

        <!--============== Register Section Start ==============-->
        <div class="full-row bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="mb-5">
 <h4 class="mb-4 text-secondary">Welcome</h4>
                           <!--  <p>Adipiscing lacinia pede proin vulputate habitasse donec adipiscing. Cubilia Interdum hac turpis et dignissim vehicula porta nostra dictum nostra semper. Dictumst congue dictum. Nam massa id, netus interdum amet Metus turpis
                                scelerisque aptent sapien penatibus potenti.</p> -->
                            <p>Are you looking to buy a property with full confidence? You’re in the right place! At Auction, we specialize in auctions of verified properties, ensuring a smooth, transparent, and secure process.</p>
                        </div>
                        <div class="login-condition flat-small flat-primary">
                            <h5 class="mb-4 text-secondary">Keep in a mind a few basic password rules :</h5>
                            <div class="row">
                                <div class="col-md-8 col-xl-6">
                                    <ul>
                                        <li><i class="flaticon-checked text-primary"></i>Change your passwords periodically</li>
                                        <li><i class="flaticon-checked text-primary"></i>Avoid re-using password for multiple site</li>
                                        <li><i class="flaticon-checked text-primary"></i>Use complex characters including uppercase and number</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="mt-sm-50">
                            <a href="<?php echo e(route('login')); ?>" class="text-secondary me-3">Login</a>
                            <a href="<?php echo e(config('app.baseURL')); ?>/register" class="down-active text-secondary">Register</a>

                            <!-- <form class="mt-5 icon-form" method="post" action="<?php echo e(config('app.baseURL')); ?>/register"> -->

                     <form method="POST" action="<?php echo e(config('app.baseURL')); ?>/register">
    <?php echo csrf_field(); ?>

    <!-- Username input -->
    <div class="mb-3 user">
        <label class="form-label" for="exampleInputEmail1">Username</label>
        <input id="exampleInputEmail1" name="name" type="text" class="form-control bg-gray" placeholder=""
               value="<?php echo e(old('name')); ?>">
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-danger"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <!-- Email input -->
    <div class="mb-3 email">
        <label class="form-label" for="exampleInputEmail2">Email address</label>
        <input id="exampleInputEmail2" name="email" type="email" class="form-control bg-gray" placeholder=""
               value="<?php echo e(old('email')); ?>">
        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-danger"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <!-- Contact Number input -->
    <div class="mb-3 password">
        <label class="form-label">Contact Number</label>
        <input id="exampleInputPassword2" name="number" type="number" class="form-control bg-gray" placeholder=""
               value="<?php echo e(old('number')); ?>">
        <?php $__errorArgs = ['number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-danger"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <!-- Password input -->
    <div class="mb-3 password">
        <label class="form-label" for="exampleInputPassword1">Password</label>
        <input id="exampleInputPassword1" name="password" type="password" class="form-control bg-gray" placeholder="">
        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-danger"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <!-- Terms and conditions checkbox -->
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="terms" <?php echo e(old('terms') ? 'checked' : ''); ?>>
        <label class="form-check-label" for="exampleCheck1">Accept Terms and Conditions</label>
    </div>

    <button type="submit" class="btn btn-primary mt-15">Register</button>
    <a class="text-secondary hover-text-primary d-block mt-4" href="#">View Terms and Conditions</a>
</form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Register Section End ==============-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\auction-comfyhomes\resources\views/auth/register.blade.php ENDPATH**/ ?>