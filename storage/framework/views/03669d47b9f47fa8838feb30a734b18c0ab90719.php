
<?php $__env->startSection('header'); ?>
    Retirement Authorities View
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
            <th scope="col">Mother_Full_Name</th>
            <th scope="col">Retirement_Type</th>
            <th scope="col">Retirement_Id_No</th>
            <th scope="col">Retirement_Date_of_Issue</th>
            <th scope="col">Name_of_the_Bank</th>
            <th scope="col">Authority_issue_date</th>
            <th scope="col">Authority_register_Number</th>
            <th scope="col">Created_by</th>
            <th scope="col">File</th>
            <th scope="col">Place_of_issue</th>
          
          </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $Retirement_Authorities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Retirement_Authority): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($Retirement_Authority->id); ?></th>
                <td><?php echo e($Retirement_Authority->Client_id); ?></td>
                <td><?php echo e($Retirement_Authority->Auth_Id); ?></td>
                <td><?php echo e($Retirement_Authority->Name_in_Austrilia); ?></td>
                <td><?php echo e($Retirement_Authority->Name_in_Kurdistan); ?></td>
                <td><?php echo e($Retirement_Authority->Mother_Full_Name); ?></td>
                <td><?php echo e($Retirement_Authority->Retirement_Type); ?></td>
                <td><?php echo e($Retirement_Authority->Retirement_Id_No); ?></td>
                <td><?php echo e($Retirement_Authority->Retirement_Date_of_Issue); ?></td>
                <td><?php echo e($Retirement_Authority->Name_of_the_Bank); ?></td>
                <td><?php echo e($Retirement_Authority->Authority_issue_date); ?></td>
                <td><?php echo e($Retirement_Authority->Country_Name); ?></td>
                <td><?php echo e($Retirement_Authority->Authority_register_Number); ?></td>
                <td><?php echo e($Retirement_Authority->Authority_Name); ?></td>
                <td><?php echo e($Retirement_Authority->Created_by); ?></td>
                <td><?php echo e($Retirement_Authority->File); ?></td>
                <td><?php echo e($Retirement_Authority->Place_of_issue); ?></td>
                
                
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\FiverrFolder\MsAccess\resources\views/Retirement_Authorities/index.blade.php ENDPATH**/ ?>