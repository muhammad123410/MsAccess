

<?php $__env->startSection('content'); ?>
<div class='m-auto'>
    <form action="<?php echo e(route('login')); ?>" method="post" class="mt-4 ">
        <?php echo csrf_field(); ?>
    
        <div class="form-group row">
            <div class="col-sm-3 text-bold">
                <label for="Username">Username:</label>
            </div>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" name='Username'>
            </div>
        </div>

    
        <div class="form-group row">
            <div class="col-sm-3">
                <label for="exampleInputPassword1">Password</label>
            </div>
            <div class="col-sm-9">
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
            </div>
           
          </div>
        <button class='btn btn-primary' type="submit">Login</button>

    </form>
</div>
            
        
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\FiverrFolder\MsAccess\resources\views/auth/login.blade.php ENDPATH**/ ?>