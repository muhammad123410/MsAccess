
  <?php $__env->startSection('header'); ?>
    Clients View
  <?php $__env->stopSection(); ?>
  <?php $__env->startSection('content'); ?>
  <table class="table-responsive">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Client Name</th>
          <th scope="col">Address</th>
          <th scope="col">Contact Number</th>
          <th scope="col">Type of Iraqi</th>
          <th scope="col">Iraqi Document number</th>
          <th scope="col">Type of Australian id</th>
          <th scope="col">Australian Id No</th>
          <th scope="col">Date of issue</th>
          <th scope="col">Created by</th>
          <th scope="col">image</th>
        </tr>
      </thead>
      <tbody>
          <?php $__currentLoopData = $Clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
              <th scope="row"><?php echo e($Client->id); ?></th>
              

              <td><?php echo e($Client->Client_Name); ?></td>
              <td><?php echo e($Client->Address); ?></td>
              <td><?php echo e($Client->Contact_Number); ?></td>
              <td><?php echo e($Client->Type_of_Iraqi); ?></td>
              <td><?php echo e($Client->Iraqi_Document_number); ?></td>
              <td><?php echo e($Client->Type_of_Australian_id); ?></td>
              <td><?php echo e($Client->Australian_Id_No); ?></td>
              <td><?php echo e($Client->Date_of_issue); ?></td>
              <td><?php echo e($Client->Created_by); ?></td>
              <td><img src='storage/cover_image/<?php echo e($Client->file); ?>' class="img-thumbnail" alt='<?php echo e($Client->Client_Name); ?> has no image'></td>
              
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
      </tbody>
  </table>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\FiverrFolder\MsAccess\resources\views/Clients/index.blade.php ENDPATH**/ ?>