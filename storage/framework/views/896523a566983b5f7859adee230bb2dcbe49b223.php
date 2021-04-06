
<?php $__env->startSection('header'); ?>
    Register Form
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('register.store')); ?>" method="post" class="mt-4" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
<div class="row">
    <div class="col-sm-6">
        
    
        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Client Name:</label> 
            <input type="text" name="Client_Name" id="" class="form-control col-sm-9">
        </div>
        
    
        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Address:</label> 
            <input type="text" name="Address" id="" class="form-control col-sm-9">
        </div>
        
    
        <div class="row m-2" >
            <label for="" class="font-weight-bold col-sm-3">Contact Number:</label> 
            <input type="text" name="Contact_Number" id="" class="form-control col-sm-9">
        </div>
        
    
        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Type of Iraqi:</label> 
            <input type="text" name="Type_of_Iraqi" id="" class="form-control col-sm-9">
        </div>
        
    
        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Iraqi Document Number:</label> 
            <input type="text" name="Iraqi_Document_number" id="" class="form-control col-sm-9">
        </div>
        
    
        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Type of Australian id:</label> 
            <input type="text" name="Type_of_Australian_id" id="" class="form-control col-sm-9">
        </div>
        
    
        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Australian id No:</label> 
            <input type="text" name="Australian_id_No" id="" class="form-control col-sm-9">
        </div>
    
        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Date of Issue</label> 
            <input type="date" name="Date_of_issue" id="" class="form-control col-sm-9">
        </div>
        
        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Created by:</label> 
            <input type="text" name="Created_by" id="" class="form-control col-sm-9">
        </div>
    
        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Image</label> 
            <input type="file" name="image" id="" class="form-control col-sm-9">
        </div>
    
        
        <div class="row m-2 ml-4">
            <button type="submit"class= "btn btn-primary">Save</button>
        </div>
    </div>
    <div class="col-sm-6">
        
        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">Username:</label> 
            <input type="text" name="UserName" id="" class="form-control col-sm-9">
        </div>

        <div class="row m-2">
            <label for="" class="font-weight-bold col-sm-3">password:</label> 
            <input type="password" name="password" id="" class="form-control col-sm-9">
        </div>
        
    </div>
</div>
    
    
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\FiverrFolder\MsAccess\resources\views/register/create.blade.php ENDPATH**/ ?>