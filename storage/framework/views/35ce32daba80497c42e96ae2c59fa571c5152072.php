
<?php $__env->startSection('title'); ?>
    Email Gönder
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('/assets/libs/admin-resources/admin-resources.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color: gray">
                <h4 class="card-title" style="color:white">EMAİL GÖNDER</h4>
            </div><br>
            <div class="card-body">
                <form action="<?php echo e(route('mail.gonder.post')); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                    <div class="row container">
                        <label for="">KONU</label>
                        <input type="text" class="form-control" name="konu" id="">
                    </div><br>

                    <div class="row container">
                        <label for="">MESAJ</label>
                        <textarea name="mesaj" class="form-control" id="" cols="30" rows="3"></textarea>
                    </div><br><br><br>

                    <div class="row container">
                        <div style="text-align: left">

                            <input onclick="checkAll(this)" type="checkbox"  name="" id="tumu">
                            <label for="tumu">TÜMÜNÜ SEÇ</label>
                        </div>
                        <br><br>

                        <table id="" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                                <tr>
                                    <th style="width:50px">Seç</th>
                                    <th>Öğrenci</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
    
    
                            <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td style="width:50px">
                                            <input type="checkbox" name="select[<?php echo e($item->id); ?>]" id="tumu<?php echo e($item->id); ?>">
                                        </td>
                                        <td><?php echo e($item->name); ?> <?php echo e($item->surname); ?></td>
                                        <td><?php echo e($item->email); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
                            </tbody>
                        </table>
                    </div><br><br>
                    <div>
                        <input type="submit" value="EKLE" class="btn btn-primary" name="" id="">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

<script>
    function checkAll(o) {
  var boxes = document.getElementsByTagName("input");
  for (var x = 0; x < boxes.length; x++) {
    var obj = boxes[x];
    if (obj.type == "checkbox") {
      if (obj.name != "check")
        obj.checked = o.checked;
    }
  }
}
</script>

    <!-- JAVASCRIPT -->
    <script src="<?php echo e(URL::asset('/assets/libs/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/bootstrap/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/metismenu/metisMenu2.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/simplebar/simplebar.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/node-waves/node-waves.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/feather-icons/feather-icons.min.js')); ?>"></script>
    <!-- pace js -->
    <script src="<?php echo e(URL::asset('assets/libs/pace-js/pace-js.min.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\panel\resources\views/superadmin/pages/mail/add.blade.php ENDPATH**/ ?>