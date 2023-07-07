
<?php $__env->startSection('title'); ?>
    Danışman Güvenlik Ayarları
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('/assets/libs/admin-resources/admin-resources.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color: gray">
                <h4 class="card-title" style="color:white">DANIŞMAN GÜVENLİK</h4>
            </div>

            <div class="card-body">
                    <form action="<?php echo e(route('superadmin.danisman.settings.post')); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                        <?php if($errors->any()): ?>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="alert alert-danger"><?php echo e($item); ?></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        <input type="hidden" name="id" value="<?php echo e($data->id); ?>" id="">


                        <h5>GÜVENLİK</h5><br>

                        <div class="row">
                            <div class="col-md-4">
                                <label for="">E-MAİL</label>
                                <input type="text" class="form-control" name="email" value="<?php echo e($data->email); ?>"
                                    id="">
                            </div>
                            <div class="col-md-4">
                                <label for="">ÖNCEKİ ŞİFRE</label>
                                <input type="text" class="form-control" name="old_password" placeholder="Önceki şifre..."
                                    id="">
                            </div>
                            <div class="col-md-4">
                                <label for="">YENİ ŞİFRE</label>
                                <input type="text" class="form-control" name="password" placeholder="Yeni şifre..."
                                    id="">
                            </div>
                        </div><br>
                        <div>
                            <input type="submit" value="EKLE" class="btn btn-primary" name="" id="">
                        </div>
                    </form>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\panel\resources\views/superadmin/pages/danisman/settings.blade.php ENDPATH**/ ?>