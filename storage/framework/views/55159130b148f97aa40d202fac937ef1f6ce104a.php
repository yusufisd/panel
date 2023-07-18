
<?php $__env->startSection('title'); ?>
    Dil Sınavı Listele
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
    <?php
    $no = 1;
    ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: gray">
                    <h4 class="card-title" style="color:white">DİL SINAVI LİSTESİ</h4>
                </div>
                    <div class="card-body">

                        <table id="" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                                <tr>
                                    <th style="width:50px">No</th>
                                    <th>İsim</th>
                                    <th style="width:150px">İşlem</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td style="width:50px"><?php echo e($no++); ?></td>
                                        <td><?php echo e($item->name); ?></td>
                                        <td style="width:150px">
                                            <a href="<?php echo e(route('dil_sinavi.edit', $item->id)); ?>">
                                                <button type="button" class="btn btn-primary">Düzenle</button>
                                            </a>
                                            <button onclick="test(<?php echo e($item->id); ?>)" type="button"
                                                class="btn btn-danger">Sil</button>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('script'); ?>
        <script>
            function test(d) {
                Swal.fire({
                    title: 'Emin misiniz?',
                    text: "Seçtiğiniz içerik silinecek!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Evet, sil!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "<?php echo e(route('dil_sinavi.destroy')); ?>/" + d;
                    }
                })
            }
        </script>
        <!-- JAVASCRIPT -->
        <script src="<?php echo e(asset('assets/libs/jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/metismenu/metisMenu2.min.js')); ?>"></script>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\panel\resources\views/superadmin/pages/dil_sinavi/list.blade.php ENDPATH**/ ?>