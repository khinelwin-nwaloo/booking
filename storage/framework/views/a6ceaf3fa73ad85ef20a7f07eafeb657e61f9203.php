<?php $__env->startSection('content'); ?>
<div class="page-header page-content">
  <a class="btn btn-primary" href="<?php echo e(url('/doctors/create')); ?>">
    <i class="fa fa-fw fa-plus"></i>  
    Add New Doctor
  </a>
</div>
<div class="page-content">
  <div class="row">
    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th class="th-sm">No</th>
          <th class="th-sm">Name</th>
          <th class="th-sm">Specilization</th>
          <th class="th-sm">Gender </th>
          <th class="th-sm">D.O.B</th>
          <th class="th-sm">Phone</th>
          <th class="th-sm">Email </th>
          <th class="th-sm"> Address</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody> 
        <?php $count = 0; ?>
        <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e(++$count); ?></td>
          <td><?php echo e($doctor->name); ?></td>
          <td><?php echo e($doctor->department->name); ?></td>
          <td><?php echo e($doctor->gender); ?></td>
          <td><?php echo e($doctor->dob); ?></td>
          <td><?php echo e($doctor->phone); ?></td>
          <td><?php echo e($doctor->email); ?></td>
          <td><?php echo e($doctor->address); ?></td>
          <td>
            <a href="<?php echo e(url('doctors/'.$doctor['id'].'/edit')); ?>" class="btn btn-primary">Edit</a>
            <form action="<?php echo e(url('/doctors/'.$doctor->id)); ?>" method="post" class="inline">

              <?php echo e(method_field('DELETE')); ?>

              <?php echo e(csrf_field()); ?>

              <a data-id="<?php echo e($doctor->id); ?>" class="red btn btn-danger" data-toggle="modal" data-target="#confirmDelete">
              Delete
              </a>

            </form>

            <?php echo $__env->make('partials.confirmdelete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>

</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script type="text/javascript">
  $(document).ready(function () {
    $('#dtBasicExample').DataTable({
      "paging": "simple" 
      // false to disable pagination (or any other option)
    });
    $('.dataTables_length').addClass('bs-select');
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\booking\resources\views/doctors/index.blade.php ENDPATH**/ ?>