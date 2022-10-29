

<?php $__env->startSection('content'); ?>
    <!-- Main Content -->

    <div class="container-xxl">
        <h1>upload</h1>

        <form action="<?php echo e(route('fileupload')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <input type="text" class="form-control" name="catname">
            </div>
            <div class="form-group">
                <input type="file" class="form-control" name="file">
            </div>

            <input type="submit" value="submit">
        </form>


    </div>
    <!-- /Main Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Eldora\resources\views/studyMaterial/uploadfiles.blade.php ENDPATH**/ ?>