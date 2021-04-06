
<?php $__env->startSection('header'); ?>
    See All Alive Statements
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Client id</th>
        <th scope="col">Auth Id</th>
        <th scope="col">Name in Austrilia</th>
        <th scope="col">Authority issue date</th>
        <th scope="col">Country Name</th>
        <th scope="col">Authority register Number</th>
        <th scope="col">Authority Name</th>
        <th scope="col">File</th>
      
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $Alive_Statements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Alive_Statement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($Alive_Statement->id); ?></th>
            <td><?php echo e($Alive_Statement->Client_id); ?></td>
            <td><?php echo e($Alive_Statement->Auth_Id); ?></td>
            <td><?php echo e($Alive_Statement->Name_in_Austrilia); ?></td>
            <td><?php echo e($Alive_Statement->Authority_issue_date); ?></td>
            <td><?php echo e($Alive_Statement->Country_Name); ?></td>
            <td><?php echo e($Alive_Statement->Authority_register_Number); ?></td>
            <td><?php echo e($Alive_Statement->Authority_Name); ?></td>
            <td><?php echo e($Alive_Statement->File); ?></td>
            
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\FiverrFolder\MsAccess\resources\views/Alive_Statement/index.blade.php ENDPATH**/ ?>