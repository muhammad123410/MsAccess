
<?php $__env->startSection('header'); ?>
    Retirement Authorities
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php if(isset($client)): ?>
    <form action="<?php echo e(route('retirement_authorities.store')); ?>" method="post" class="mt-4">
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
            <label for="" class="font-weight-bold col-sm-3">Mother Full Name</label> 
            <input type="text" name="Mother_full_Name" id="" class="form-control col-sm-9">
        </div>
        

        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Retirement Type</label> 
            <input type="text" name="Retirement_Type" id="" class="form-control col-sm-9">
        </div>
        

        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Created By</label> 
            <input type="text" name="Created_by" id="" class="form-control col-sm-9">
        </div>

        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Place of Issues</label> 
            <input type="text" name="Place_of_issue" id="" class="form-control col-sm-9">
        </div>
        
        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Retirement Id No</label> 
            <input type="text" name="Retirement_Id_No" id="" class="form-control col-sm-9">
        </div>

    

        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Retirement Date of Issue</label> 
            <input type="date" name="Retirement_Date_of_issue" id="" class="form-control col-sm-9">
        </div>

        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Name of Bank</label> 
            <input type="text" name="Name_of_Bank" id="" class="form-control col-sm-9">
        </div>

        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Authority Issue Date</label> 
            <input type="date" name="Authority_issue_date" id="" class="form-control col-sm-9">
        </div>

        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Country</label> 
            <input type="text" name="Country_Name" id="" class="form-control col-sm-9">
        </div>

        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Authority register Number</label> 
            <input type="text" name="Authority_register_Number" id="" class="form-control col-sm-9">
        </div>

        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Authority Name</label> 
            <input type="text" name="Authority_Name" id="" class="form-control col-sm-9" value='Retirement Authorities'>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\FiverrFolder\MsAccess\resources\views/Retirement_Authorities/create.blade.php ENDPATH**/ ?>