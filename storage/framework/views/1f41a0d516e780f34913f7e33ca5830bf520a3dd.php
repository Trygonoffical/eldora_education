

<?php $__env->startSection('content'); ?>
    <!-- Main Content -->

    <div class="hk-pg-body">
        <div class="row">
            <div class="col-md-12 mb-md-4 mb-3">
                <div class="card card-border mb-0 h-100">
                    
                    <div class="card-body">
                        <div class="contact-list-view">
                            <table id="datable_1" class="table nowrap w-100 mb-5">
                                <thead>
                                    <tr>
                                        <th><span class="form-check fs-6 mb-0">
                                            <input type="checkbox" class="form-check-input check-select-all" id="customCheck1">
                                            <label class="form-check-label" for="customCheck1"></label>
                                        </span></th>
                                        <th>File Type</th>
                                        <th>File Name</th>
                                        <th>Updated on</th>
                                        <th>Edit/Delete</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                        <?php if( count($std) > 0): ?>
                                            <?php $__currentLoopData = $std; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div class="media align-items-center">
                                                    
                                                    <div class="media-head me-2">
                                                        <div class="avatar avatar-xs avatar-rounded">
                                                            <img src="<?php echo e(asset('default_images/pdf.png')); ?>" alt="user" class="avatar-img">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="text-high-em"><?php echo e($item->file); ?></div> 
                                                       
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                               <div><?php echo e($item->catname); ?></div>
                                            </td>
                                            <td><?php echo e($item->created_at); ?></td>
                                            
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    
                                                    
                                                    <a type="submit" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Edit" href="/stdDel/<?php echo e($item->id); ?>/edit/"><span class="icon"><span class="feather-icon"><i data-feather="edit-2"></i></span></span></a>


                                                    <form action="<?php echo e(route('stdDel.destroy', $item->id)); ?>" method="post">
                                                       
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button" type="submit" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Delete">
                                                            <span class="icon"><span class="feather-icon"><i data-feather="trash"></i></span></span>
                                                        </button>
                                                    </form>
                                                   
                                                   
                                                </div>
                                            </td>
                                        </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                            
                                        <?php endif; ?>
                                        
                                    
                                 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>	
        









    </div>
    





    <!-- /Main Content -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Eldora\resources\views/studymaterial/viewfiles.blade.php ENDPATH**/ ?>