
<?php $__env->startSection('title'); ?>
    Profilim
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <!-- DataTables -->
    <link href="<?php echo e(asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo e(asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')); ?>" rel="stylesheet"
        type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="<?php echo e(asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')); ?>" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo e(URL::asset('/assets/libs/admin-resources/admin-resources.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  

    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color: gray">
                <h4 class="card-title" style="color:white">PROFİL</h4>
            </div>
            <div class="card-body">

                <div class="">
                    <div class="row">
                        <div class="col-md-6">
                            <p style="text-align: right">AD SOYAD :</p>
                        </div>
                        <div class="col-md-6">
                            <h4><?php echo e($data->name); ?> <?php echo e($data->surname); ?></h4>
                        </div>
                    </div><hr>

                    <div class="row">
                        <div class="col-md-6">
                            <p style="text-align: right">TELEFON :</p>
                        </div>
                        <div class="col-md-6">
                            <h4><?php echo e($data->phone); ?></h4>
                        </div>
                    </div><hr>

                    <div class="row">
                        <div class="col-md-6">
                            <p style="text-align: right">DEPARTMAN :</p>
                        </div>
                        <div class="col-md-6">
                            <h4><?php echo e($data->email); ?></h4>
                        </div>
                    </div><br>
                </div>

            </div>
        </div>
    </div> <!-- end col -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    
    <!-- JAVASCRIPT -->
    <script src="<?php echo e(asset('assets/libs/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/metismenu/metisMenu.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/simplebar/simplebar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/node-waves/waves.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/feather-icons/feather.min.js')); ?>"></script>
    <!-- pace js -->
    <script src="<?php echo e(asset('assets/libs/pace-js/pace.min.js')); ?>"></script>

    <!-- Required datatable js -->
    <script src="<?php echo e(asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
    <!-- Buttons examples -->
    <script src="<?php echo e(asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/jszip/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/pdfmake/build/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/pdfmake/build/vfs_fonts.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')); ?>"></script>

    <!-- Responsive examples -->
    <script src="<?php echo e(asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')); ?>"></script>

    <!-- Datatable init js -->
    <script src="<?php echo e(asset('assets/js/pages/datatables.init.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('ogrenci.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\panel\resources\views/ogrenci/pages/profil.blade.php ENDPATH**/ ?>