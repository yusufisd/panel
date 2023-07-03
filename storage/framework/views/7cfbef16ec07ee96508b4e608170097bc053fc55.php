
<?php $__env->startSection('title'); ?>
    Başvurulacak Ülke Düzenle
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('/assets/libs/admin-resources/admin-resources.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color: brown">
                <h4 class="card-title" style="color:white">BAŞVURULACAK ÜLKE DÜZENLE</h4>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('danisman.basvurulcak.update')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php
                    $id = request()->id;
                    ?>
                    <?php $__currentLoopData = $kisi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ki): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <input type="hidden" value="<?php echo e($ki->id); ?>" name="id" id="">
                        <input type="hidden" value="<?php echo e($id); ?>" name="ogrenci_id" id="">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">ÜLKE</label>
                                <select name="ulke_id" class="form-control" id="">
                                    <option value="">Lütfen ülke seçin</option>

                                    <?php $__currentLoopData = $ulkeler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ulke): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php echo e($ki->ulke_id == $ulke->id ? 'selected' : ''); ?>

                                            value="<?php echo e($ulke->id); ?>"><?php echo e(strtoupper($ulke->country_name)); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="">ÜNİVERSİTE</label>
                                <input type="text" class="form-control" value="<?php echo e($ki->universite); ?>" name="universite"
                                    id="">
                            </div>
                            <div class="col-md-4">
                                <label for="">BÖLÜM</label>
                                <input type="text" class="form-control" value="<?php echo e($ki->bolum); ?>" name="bolum"
                                    id="">
                            </div>
                        </div><br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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

<?php echo $__env->make('danisman.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\panel\resources\views/danisman/pages/ulkeler/basvurulacak_edit.blade.php ENDPATH**/ ?>