
<?php $__env->startSection('header'); ?>
    Full Authorities Form
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php if(isset($Client)): ?>
    <form action="<?php echo e(route('full_authorities.store')); ?>" method="post" class="mt-4">
        <?php echo csrf_field(); ?>
        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Client id:</label> 
            <input type="text" name="Client_id" id="" class="form-control col-sm-9" value="<?php echo e($Client->id); ?>">
        </div>
        

        
        

        <div class="row m-2" >
            <label for="" class="font-weight-bold col-sm-3">Name in Austrilia</label> 
            <input type="text" name="Name_in_Austrilia" id="" class="form-control col-sm-9">
        </div>
        

        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Name in Kurdistan</label> 
            <input type="text" name="Name_in_Kurdistan" id="" class="form-control col-sm-9">
        </div>

        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Authority Issue Date</label> 
            <input type="date" name="Authority_issue_date" id="" class="form-control col-sm-9">
        </div>

        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Authority register Number</label> 
            <input type="text" name="Authority_register_Number" id="" class="form-control col-sm-9">
        </div>

        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Authority Name</label> 
            <input type="text" name="Authority_Name" id="" class="form-control col-sm-9" value="Full Authorities">
        </div>

        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Place of Issues</label> 
            <input type="text" name="Place_of_issue" id="" class="form-control col-sm-9">
        </div>

        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Created by</label> 
            <input type="text" name="Created_by" id="" class="form-control col-sm-9">
        </div>

        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">File</label> 
            <input type="file" name="file" id="" class="form-control col-sm-9">
        </div>


        
        <div class="row m-2 ml-4">
            <button type="submit"class= "btn btn-primary">Save</button>
        </div>

    </form>    
    <?php else: ?>
        <p>Select your Authority <a href="<?php echo e(route('client.create')); ?>">here</a></p>
    <?php endif; ?>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\FiverrFolder\MsAccess\resources\views/Full_Authorities/create.blade.php ENDPATH**/ ?>