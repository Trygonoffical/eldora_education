

<?php $__env->startSection('content'); ?>
    <!-- Main Content -->

    <div class="hk-pg-body py-0">
        <!-- Container -->
        <div class="container-fluid">
            <!-- Row -->
            <div class="row auth-split">

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 position-relative mx-auto">
                    <div class="auth-content flex-column pt-8 pb-md-8 pb-13">


                        <div class="row">
                            <div class="col-xxl-5 col-xl-7 col-lg-10 mx-auto">

                                <h4 class="text-center mb-4">Student new registration</h4>

                                <div class=" mt-4"><span></span></div>
                                <div class="row gx-3">

                                    <form method="POST" action="<?php echo e(route('s_register')); ?>">
                                        <?php echo csrf_field(); ?>

                                        <div class="form-group col-lg-12">
                                            <label class="form-label">Name</label>
                                            
                                            <input id="name" type="text"
                                                class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="uname">

                                            <?php $__errorArgs = ['uname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <label class="form-label">Email</label>
                                            
                                            <input id="email" type="email"
                                                class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email">

                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label class="form-label">Password</label>
                                            <div class="input-group password-check">
                                                <span class="input-affix-wrapper affix-wth-text">
                                                    
                                                    <input id="password" type="password" class="form-control" name="password">

                                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong><?php echo e($message); ?></strong>
                                                        </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    <a href="#"
                                                        class="input-suffix text-primary text-uppercase fs-8 fw-medium">
                                                        <span>Show</span>
                                                        <span class="d-none">Hide</span>
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-rounded btn-uppercase btn-block">
                                            <?php echo e(__('Register')); ?>

                                        </button>
                                    </form>

                                </div>


                                


                            </div>
                        </div>

                    </div>
                    <!-- Page Footer -->

                    <!-- / Page Footer -->
                </div>
            </div>
            <!-- /Row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Page Body -->

    <!-- /Main Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Eldora\resources\views/studentrecords/stu_register.blade.php ENDPATH**/ ?>