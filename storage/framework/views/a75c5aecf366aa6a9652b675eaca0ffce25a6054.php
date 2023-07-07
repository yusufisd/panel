
<?php $__env->startSection('title'); ?>
    Borçı Ekle
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('/assets/libs/admin-resources/admin-resources.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color: brown">
                <h4 class="card-title" style="color:white">BORÇ EKLE</h4>
            </div>
            <div class="card-body">
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                <form action="<?php echo e(route('danisman.borc.duzenle.post')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" value="<?php echo e($item->id); ?>" name="borc_id" id="">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">ÖĞRENCİ</label>
                            <select name="ogr_id" class="form-control" id="">
                                <option value="">Lütfen öğrenci seçin</option>

                                <?php $__currentLoopData = $ogr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php echo e($item->ogr_id == $o->id ? 'selected' : ''); ?> value="<?php echo e($o->id); ?>"><?php echo e(strtoupper($o->name)); ?> <?php echo e(strtoupper($o->surname)); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="">TUTAR</label>
                            <input type="number" value="<?php echo e($item->tutar); ?>" name="tutar" class="form-control" id="">
                        </div>
                        <div class="col-md-7">
                            <label for="">AÇIKLAMA</label>
                            <input type="text" value="<?php echo e($item->description); ?>" class="form-control" name="description" id="">
                        </div>
                    </div>
                    <br>
                    <div class="right">
                        <input type="submit" class="btn btn-primary" value="KAYDET" name="" id="">
                    </div>

                </form>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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

<?php echo $__env->make('danisman.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\panel\resources\views/danisman/pages/muhasebe/borc_edit.blade.php ENDPATH**/ ?>