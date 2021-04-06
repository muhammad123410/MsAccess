
<?php $__env->startSection('header'); ?>
    Limited Authorities View
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="table-responsive">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Client id</th>
            <th scope="col">Auth Id</th>
            <th scope="col">Name in Austrilia</th>
            <th scope="col">Name in Kurdistan</th>
            <th scope="col">Property_Type</th>
            <th scope="col">Property_No</th>
            <th scope="col">Property_resisted_No</th>
            <th scope="col">Place_of_property</th>
            <th scope="col">Authority_issue_date</th>
            <th scope="col">Authority_register_Number</th>
            <th scope="col">Authority_Name</th>
            <th scope="col">Created_by</th>
            <th scope="col">File</th>
          
          </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $Limited_Authorities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Limited_Authority): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($Limited_Authority->id); ?></th>
                <td><?php echo e($Limited_Authority->Client_id); ?></td>
                <td><?php echo e($Limited_Authority->Auth_Id); ?></td>
                <td><?php echo e($Limited_Authority->Name_in_Austrilia); ?></td>
                <td><?php echo e($Limited_Authority->Name_in_Kurdistan); ?></td>
                <td><?php echo e($Limited_Authority->Property_Type); ?></td>
                <td><?php echo e($Limited_Authority->Property_No); ?></td>
                <td><?php echo e($Limited_Authority->Property_resisted_No); ?></td>
                <td><?php echo e($Limited_Authority->Place_of_property); ?></td>
                <td><?php echo e($Limited_Authority->Authority_issue_date); ?></td>
                <td><?php echo e($Limited_Authority->Authority_register_Number); ?></td>
                <td><?php echo e($Limited_Authority->Authority_Name); ?></td>
                <td><?php echo e($Limited_Authority->Created_by); ?></td>
                <td><?php echo e($Limited_Authority->File); ?></td>
                
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\FiverrFolder\MsAccess\resources\views/Limited_Authorities/index.blade.php ENDPATH**/ ?>