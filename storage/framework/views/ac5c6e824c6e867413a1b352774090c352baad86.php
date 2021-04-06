
<?php $__env->startSection('header'); ?>
    Alive StateMent Form
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <?php if(isset($Client)): ?>
    <form action="<?php echo e(route('alive_statement.store')); ?>" method="post" class="mt-4">
        <?php echo csrf_field(); ?>
        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-2">Client id:</label> 
            <input type="text" name="Client_id" id="" class="form-control col-sm-10" value="<?php echo e($Client->id); ?>">
        </div>
        

        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-2">Auth Id:</label> 
            <input type="text" name="Auth_Id" id="" class="form-control col-sm-10">
        </div>
        

        <div class="row m-2" >
            <label for="" class="font-weight-bold col-sm-2">Name in Austrilia</label> 
            <input type="text" name="Name_in_Austrilia" id="" class="form-control col-sm-10">
        </div>

        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-2">Authority Issue Date</label> 
            <input type="date" name="Authority_issue_date" id="" class="form-control col-sm-10">
        </div>

        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-2">Country Name</label> 
            <input type="text" name="Country_Name" id="" class="form-control col-sm-10">
        </div>

        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-2">Authority register Number</label> 
            <input type="text" name="Authority_register_Number" id="" class="form-control col-sm-10">
        </div>

        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-2">Authority Name</label> 
            <input type="text" name="Authority_Name" id="" class="form-control col-sm-10" value="Alive Statement">
        </div>

        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-2">File</label> 
            <input type="file" name="file" id="" class="form-control col-sm-10">
        </div>

        <div class="row m-2 ml-4">
            <button type="submit"class= "btn btn-primary">Save</button>
        </div>

    </form>
    <?php else: ?>
        <p>Select your Authority <a href="<?php echo e(route('client.create')); ?>">here</a></p>.
    <?php endif; ?>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\FiverrFolder\MsAccess\resources\views/Alive_Statement/create.blade.php ENDPATH**/ ?>