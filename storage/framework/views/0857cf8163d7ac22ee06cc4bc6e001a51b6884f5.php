
<?php $__env->startSection('header'); ?>
    Clients Form
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('client.store')); ?>" method="post" class="mt-4" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        

        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Client Name:</label> 
            <input type="text" name="Client_Name" id="" class="form-control col-sm-9" value=<?php echo e($client[0]->Client_Name); ?>>
        </div>
        

        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Address:</label> 
            <input type="text" name="Address" id="" class="form-control col-sm-9" value=<?php echo e($client[0]->Address); ?>>
        </div>
        

        <div class="row m-2" >
            <label for="" class="font-weight-bold col-sm-3">Contact Number:</label> 
            <input type="text" name="Contact_Number" id="" class="form-control col-sm-9" value=<?php echo e($client[0]->Contact_Number); ?>>
        </div>
        

        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Type of Iraqi:</label> 
            <input type="text" name="Type_of_Iraqi" id="" class="form-control col-sm-9" value=<?php echo e($client[0]->Type_of_Iraqi); ?>>
        </div>
        

        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Iraqi Document Number:</label> 
            <input type="text" name="Iraqi_Document_number" id="" class="form-control col-sm-9" value=<?php echo e($client[0]->Iraqi_Document_number); ?>>
        </div>
        

        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Type of Australian id:</label> 
            <input type="text" name="Type_of_Australian_id" id="" class="form-control col-sm-9" value=<?php echo e($client[0]->Type_of_Australian_id); ?>>
        </div>
        

        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Australian id No:</label> 
            <input type="text" name="Australian_id_No" id="" class="form-control col-sm-9" value=<?php echo e($client[0]->Australian_Id_No); ?>>
        </div>

        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Date of Issue</label> 
            <input type="date" name="Date_of_issue" id="" class="form-control col-sm-9" value=<?php echo e($client[0]->Date_of_issue); ?>>
        </div>
        
        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Created by:</label> 
            <input type="text" name="Created_by" id="" class="form-control col-sm-9" value=<?php echo e($client[0]->Created_by); ?>>
        </div>

        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Image</label> 
            <input type="file" name="image" id="" class="form-control col-sm-9" value=<?php echo e($client[0]->image); ?>>
        </div>

        <div class="form-group row m-2">
            <label for="exampleFormControlSelect1" class="font-weight-bold col-sm-3">Authority</label>
            <select class="form-control col-sm-9" id="exampleFormControlSelect1" name='Authority'>
                <option value="FuLL Authority">FuLL Authority</option>
                <option value="Limited Authority">Limited Authority</option>
                <option value="Retirement Authority">Retirement Authority</option>
                <option value="Alive Statement">Alive Statement</option>
            </select>
          </div>



        
        <div class="row m-2 ml-4">
            <button type="submit"class= "btn btn-primary">Save</button>
        </div>
        
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\FiverrFolder\MsAccess\resources\views/Clients/create.blade.php ENDPATH**/ ?>