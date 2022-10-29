

<?php $__env->startSection('content'); ?>
    <!-- Main Content -->

    <div class="container-xxl">
        <h1>Update</h1>

        <form action="<?php echo e(route('stdDel.update', $edit->id)); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <input type="text" class="form-control" name="ucatname" value=<?php echo e($edit->catname); ?>>
               
            </div>
            <div class="form-group">
                <input type="file" class="form-control" name="file" placeholder=<?php echo e($edit->file); ?>>
            </div>

            <input type="submit" value="Update">
        </form>


    </div>
    <!-- /Main Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Eldora\resources\views/studymaterial/edit.blade.php ENDPATH**/ ?>