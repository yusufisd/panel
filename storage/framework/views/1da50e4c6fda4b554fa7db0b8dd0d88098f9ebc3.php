
<?php $__env->startSection('title'); ?>
    Tahsilat Ekle
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('/assets/libs/admin-resources/admin-resources.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color: brown">
                <h4 class="card-title" style="color:white">TAHSİLAT EKLE</h4>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('danisman.tahsilat.ekle.post')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">ÖĞRENCİ</label>
                            <select name="ogr_id" class="form-control" id="">
                                <option value="">Lütfen öğrenci seçin</option>

                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($o->id); ?>"><?php echo e(strtoupper($o->name)); ?> <?php echo e(strtoupper($o->surname)); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="">TUTAR</label>
                            <input type="number" name="tutar" class="form-control" id="">
                        </div>
                        <div class="col-md-7">
                            <label for="">AÇIKLAMA</label>
                            <input type="text" class="form-control" name="description" id="">
                        </div>
                    </div>
                    <br>
                    <div class="right">
                        <input type="submit" class="btn btn-primary" value="KAYDET" name="" id="">
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

<?php echo $__env->make('danisman.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\panel\resources\views/danisman/pages/muhasebe/tahsilat_ekle.blade.php ENDPATH**/ ?>