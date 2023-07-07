
<?php $__env->startSection('title'); ?>
    Öğrenci Listele
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

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: brown">
                    <h4 class="card-title" style="color:white">ÖĞRENCİ LİSTESİ</h4>
                </div>
                    <div class="card-body">

                        <table id="" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                                <tr>
                                    <th>AD SOYAD</th>
                                    <th>BAKİYE</th>
                                    <th>DEPARTMAN</th>
                                    <th>ÜLKE</th>
                                    <th>EMAİL</th>
                                    <th>TELEFON</th>
                                    <th style="width:100px">İşlem</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <a href="<?php echo e(route('danisman.ogrenci.detay',$item->id)); ?>"> 
                                                <?php echo e(strtoupper($item->name)); ?> <?php echo e(strtoupper($item->surname)); ?> 
                                            </a>
                                        </td>
                                        <td><?php echo e(strtoupper($item->bakiye)); ?> TL</td>
                                        <td><?php echo e(strtoupper($item->Danisman->Departman->name)); ?></td>
                                        <td><?php echo e(strtoupper($item->Danisman->Ulke())); ?></td>
                                        <td><?php echo e(($item->email)); ?></td>
                                        <td><?php echo e(strtoupper($item->phone)); ?></td>
                                        <td style="width:100px">
                                            <a href="<?php echo e(route('danisman.ogrenci.edit', $item->id)); ?>">
                                                <i style="color:blue; font-size:20px" class="fas fa-edit"></i>
                                            </a onclick="test(<?php echo e($item->id); ?>)">&nbsp;
                                            <i style="color:red; font-size:20px" class="fas fa-trash-alt"></i>
                                           
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
                        window.location.href = "<?php echo e(route('departman.destroy')); ?>/" + d;
                    }
                })
            }
        </script>
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

<?php echo $__env->make('danisman.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\panel\resources\views/danisman/pages/ogrenci/list.blade.php ENDPATH**/ ?>