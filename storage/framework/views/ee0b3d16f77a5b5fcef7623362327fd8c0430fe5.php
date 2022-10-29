

<?php $__env->startSection('content'); ?>
    <!-- Main Content -->

    <div class="container-xxl">
        <h1>Update</h1>

        <form action="<?php echo e(route('userDel.update', $edit_records->id)); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <input type="text" class="form-control" name="upname" value=<?php echo e($edit_records->name); ?>>
               
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" value=<?php echo e($edit_records->email); ?>>
               
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="Update Password" >
               
            </div>
            

            <input type="submit" value="Update">
        </form>


    </div>
    <!-- /Main Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Eldora\resources\views/studentrecords/edit_records.blade.php ENDPATH**/ ?>