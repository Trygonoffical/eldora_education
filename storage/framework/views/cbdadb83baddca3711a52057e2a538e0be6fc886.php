

<?php $__env->startSection('content'); ?>
    <!-- Main Content -->

    <h1 class="pl-5 text-center text-primary">Mock Test</h1>


    <div class=" container-fluid">


        <?php if(count($quest) > 0): ?>
            <?php $__currentLoopData = $quest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row  mb-3 h-100  p-2 ml-1 ">
                    <div class="col-lg-8 w-65 card card-border">
                        


                        
                        <div class="-12 mt-4">
                            
                            <?php echo $item->question; ?>

                        </div>
                       
                    </div>

                    <div class="col-lg-4 w-32 card   card-border " id="view-test-sidebar">

                        <h2 class="text-center h3">Answers </h2>

                        <div class="">
                            <select class="form-select" aria-label="Default select example">
                                
                                <option value="1">Question 1</option>
                                <option value="2">Question 2</option>
                                <option value="3">Question 3</option>
                                <option value="4">Question 4</option>
                                <option value="5">Question 5</option>
                                <option value="6">Question 6</option>
                                <option value="7">Question 7</option>
                                <option value="8">Question 8</option>
                                <option value="9">Question 9</option>
                                <option value="10">Question 10</option>
                                <option value="11">Question 11</option>
                                <option value="12">Question 12</option>
                                <option value="13">Question 13</option>
                                <option value="14">Question 14</option>
                                <option value="15">Question 15</option>
                                <option value="16">Question 16</option>
                                <option value="17">Question 17</option>
                                <option value="18">Question 18</option>
                                <option value="19">Question 19</option>
                                <option value="20">Question 20</option>
                                <option value="21">Question 21</option>
                                <option value="22">Question 22</option>
                                <option value="23">Question 23</option>
                                <option value="24">Question 24</option>
                                <option value="25">Question 25</option>
                                <option value="26">Question 26</option>
                                <option value="27">Question 27</option>
                                <option value="28">Question 28</option>
                                <option value="29">Question 29</option>
                                <option value="30">Question 30</option>
                                <option value="31">Question 31</option>
                                <option value="32">Question 32</option>
                                <option value="33">Question 33</option>
                                <option value="34">Question 34</option>
                                <option value="35">Question 35</option>
                                <option value="36">Question 36</option>
                                <option value="37">Question 37</option>
                                <option value="38">Question 38</option>
                                <option value="39">Question 39</option>
                                <option value="40">Question 40</option>

                            </select>


                            <div class="form-floating">
                                <textarea class="form-control mt-3" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px"></textarea>
                                <label for="floatingTextarea">Write answer</label>
                            </div>
                        </div>
                        
                            
                                <a href="#" type="submit" class="btn btn-primary mt-3">Save answer</a>



                                
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#staticBackdrop" id="submit-paper">
                                    Submit Paper
                                </button>

                               

                            

                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

 <!-- Modal -->
 <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
 tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
 <div class="modal-dialog">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="staticBackdropLabel">Save and exit</h5>
             <button type="button" class="close" data-dismiss="modal"
                 aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div>
         
         <div class="modal-footer">
             <button type="button" class="btn btn-secondary"
                 data-dismiss="modal">Close</button>
             <button type="button" class="btn btn-primary">Confirm</button>
         </div>
     </div>
 </div>
</div>


    </div>










    <!-- /Main Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.test', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Eldora\resources\views/test/viewTest.blade.php ENDPATH**/ ?>