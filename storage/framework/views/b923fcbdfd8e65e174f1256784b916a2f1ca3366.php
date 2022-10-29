

<?php $__env->startSection('content'); ?>
    <!-- Main Content -->

    <div class="hk-pg-body py-0">
        <!-- Container -->
        <div class="container">
            <!-- Row -->

            <div class="row ">
                <div class="col-xxl-5 col-xl-7 col-lg-10 mx-auto">

                    <h4 class="text-center mb-4 text-info">Create Question</h4>

                </div>

            </div>
        </div>

        <div class="container-lg">
           
                
            
            <form method="POST" action="<?php echo e(route('question')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">

                    <div class="form-group col-lg-4">
                        <label class="form-label">Test id</label>
                        <select class="form-select" aria-label="Default select example" name="t_id">

                            <option value="1">1</option>
                            <option value="2">2</option>

                        </select>

                    </div>
                    <div class="form-group col-lg-4">
                        <label class="form-label">Question number</label>
                 
                        <input id="name" type="text" class="form-control" name='ques_no'>

                    </div>

                    <div class="form-group col-lg-4">
                        <label class="form-label">Question type</label>
                        <select class="form-select" aria-label="Default select example" name="q_type">
                           
                            <option value="MCQ">MCQ</option>
                            <option value="fill_blanks">Fill in the blanks</option>

                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-4">
                        <label class="form-label">Category</label>
                        <select class="form-select" aria-label="Default select example" name="category">
                       
                            <option value="Listening">Listening</option>
                            <option value="Reading">Reading</option>
                            <option value="Writing">Writing</option>


                        </select>
                    </div>
                    <div class="form-group col-lg-4" >
                        <label class="form-label">Section</label>
                        <select class="form-select" aria-label="Default select example" name="section">

                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>


                        </select>
                    </div>
                </div>




                <div class="row">
                    <div class="form-group col-md-12 m-auto">
                        <label class="form-label">Question</label>
                        <textarea class="form-control ed1" placeholder="Write question" name="question" style="height: 100px"></textarea>
                      


                    </div>

                    <div class="form-group col-lg-12 m-auto">
                        <label class="form-label">Answer</label>

                        <textarea class="form-control" placeholder="Write answer" name="answer" id="floatingTextarea2" style="height: 100px"></textarea>
                      


                    </div>

                    <div class="form-group col-lg-8 m-auto">
                        <button type="submit" class="btn btn-primary btn-rounded btn-uppercase btn-block mt-5">
                            <?php echo e(__('Submit question')); ?>

                        </button>
                    </div>
                </div>

            </form>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Eldora\resources\views/test/createTest.blade.php ENDPATH**/ ?>