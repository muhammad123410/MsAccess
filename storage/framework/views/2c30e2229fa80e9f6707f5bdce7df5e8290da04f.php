
<?php $__env->startSection('header'); ?>
    Full Authorities View
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Client id</th>
        <th scope="col">Auth Id</th>
        <th scope="col">Name in Austrilia</th>
        <th scope="col">Name in Kurdistan</th>
        <th scope="col">Authority issue date</th>
        <th scope="col">Created_by</th>
        <th scope="col">Authority register Number</th>
        <th scope="col">Authority Name</th>
        <th scope="col">File</th>
        <th scope="col">Place_of_issue</th>
      
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $Full_Authorities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Full_Authority): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($Full_Authority->id); ?></th>
            <td><?php echo e($Full_Authority->Client_id); ?></td>
            <td><?php echo e($Full_Authority->Auth_Id); ?></td>
            <td><?php echo e($Full_Authority->Name_in_Austrilia); ?></td>
            <td><?php echo e($Full_Authority->Name_in_Kurdistan); ?></td>
            <td><?php echo e($Full_Authority->Authority_issue_date); ?></td>
            <td><?php echo e($Full_Authority->Created_by); ?></td>
            <td><?php echo e($Full_Authority->Authority_register_Number); ?></td>
            <td><?php echo e($Full_Authority->Authority_Name); ?></td>
            <td><?php echo e($Full_Authority->File); ?></td>
            <td><?php echo e($Full_Authority->Place_of_issue); ?></td>
            
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\FiverrFolder\MsAccess\resources\views/Full_Authorities/index.blade.php ENDPATH**/ ?>