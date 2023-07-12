
<?php $__env->startSection('title'); ?>
    Ayarlar
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('/assets/libs/admin-resources/admin-resources.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color: gray">
                <h4 class="card-title" style="color:white">AYARLAR</h4>
            </div><br>




            <div class="card-body">
                <?php if($errors->any()): ?>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $it): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="alert alert-danger ">
                            <?php echo e($it); ?>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

                <form action="<?php echo e(route('settings.post')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">EMAİL</label>
                            <input type="text" class="form-control" value="<?php echo e($auth->email); ?>" name="email"
                                id="">
                        </div>
                        <div class="col-md-4">
                            <label for="">ÖNCEKİ ŞİFRE</label>
                            <input type="text" class="form-control" placeholder="Önceki şifre..." name="old_password"
                                id="">
                        </div>
                        <div class="col-md-4">
                            <label for="">YENİ ŞİFRE</label>
                            <input type="text" class="form-control" placeholder="Yeni şifre..." name="password"
                                id="">
                        </div>
                    </div>
                    <br><br>
                    <div>
                        <input type="submit" value="KAYDET" class="btn btn-primary" name="" id="">
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\panel\resources\views/superadmin/auth/setting.blade.php ENDPATH**/ ?>