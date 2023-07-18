
<?php $__env->startSection('title'); ?>
    Şifreyi Değiştir
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('/assets/libs/admin-resources/admin-resources.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color: brown">
                <h4 class="card-title" style="color:white">ŞİFRE DEĞİŞTİR</h4>
            </div><br>

            <?php if($errors->any()): ?>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="container">
                        <div class=" alert alert-danger">
                            <?php echo e($e); ?>

                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>


            <div class="card-body">
                <form action="<?php echo e(route('danisman.sifre.degistir.post')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">Mevcut Şifre</label>
                            <input type="text" class="form-control" name="old_password" id="">
                        </div>
                        <div class="col-md-4">
                            <label for="">Yeni Şifre</label>
                            <input type="text" class="form-control" name="password" id="">
                        </div>
                        <div class="col-md-4">
                            <label for="">Yeni Şifre Tekrar</label>
                            <input type="text" class="form-control" name="password_confirm" id="">
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

<?php echo $__env->make('danisman.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\panel\resources\views/danisman/pages/ayar/sifre_degistir.blade.php ENDPATH**/ ?>