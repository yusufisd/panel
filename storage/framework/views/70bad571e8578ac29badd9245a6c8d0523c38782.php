
<?php $__env->startSection('title'); ?>
    Başvurulacak Ülke
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('/assets/libs/admin-resources/admin-resources.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color: gray">
                <h4 class="card-title" style="color:white">BAŞVURULACAK ÜLKE</h4>
            </div>
            <div class="card-body">
                <div id="basvurulacak" style="display: none" class="table">

                            
                    <table class="table table-bordered mb-0">

                        <thead>
                            <tr>
                                <th><b>ÜLKE</b></th>
                                <th><b>ÜNİVERSİTE</b></th>
                                <th><b>BÖLÜM</b></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $basvuru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(strtoupper($basvuru->Ulke->country_name)); ?></td>
                                <td><?php echo e(strtoupper($basvuru->universite)); ?></td>
                                <td><?php echo e(strtoupper($basvuru->bolum)); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        </tbody>
                    </table>
                </div>
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

<?php echo $__env->make('ogrenci.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\panel\resources\views/ogrenci/pages/basvurulacak.blade.php ENDPATH**/ ?>