
<?php $__env->startSection('title'); ?>
    Ekstre
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('/assets/libs/admin-resources/admin-resources.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color: gray">
                <h4 class="card-title" style="color:white">EKSTRE</h4>
            </div><br>
            <div class="card-body">
                <form action="<?php echo e(route('ekstre.list')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">EKSTRE TİPİ</label>
                            <select name="type" class="form-control" id="">
                                <option value="">Lütfen ekstre tipi seçin</option>
                                <option value="0">GELİR</option>
                                <option value="1">GİDER</option>
                                <option value="2">HEPSİ</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">BAŞLANGIÇ TARİHİ</label>
                            <input type="date" class="form-control" name="baslangic" id="">
                        </div>
                        <div class="col-md-4">
                            <label for="">BİTİŞ TARİHİ</label>
                            <input type="date" class="form-control" name="bitis" id="">
                        </div>
                    </div><br><br>

                    <div>
                        <input type="submit" value="KAYDET" class="btn btn-primary" id="">
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\panel\resources\views/superadmin/pages/ekstre/add.blade.php ENDPATH**/ ?>