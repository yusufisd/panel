<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8" />
    <title> <?php echo $__env->yieldContent('title'); ?> | Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo e(URL::asset('assets/images/favicon.ico')); ?>">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <?php echo $__env->make('danisman.layouts.head-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>


<?php $__env->startSection('body'); ?>

    <?php echo $__env->make('danisman.layouts.body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldSection(); ?>
<!-- Begin page -->
<div id="layout-wrapper">
    <?php echo $__env->make('danisman.layouts.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('danisman.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">

                    <?php if(!Route::is('danisman.index')): ?>
                        <div class="col-md-8">
                            <?php echo $__env->yieldContent('content'); ?>
                        </div>
                        <div class="col-md-4 position-sticky">
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                    <!-- card -->
                                    <div class="card card-h-100">
                                        <!-- card body -->
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <span
                                                        class="text-muted mb-3 lh-1 d-block text-truncate">DEPARTMANLAR</span>
                                                    <hr>
                                                    <h3 style="text-align: center" class="mb-3">
                                                        <span class="counter-value"
                                                            data-target="<?php echo e(departmanCount()); ?>">0</span>
                                                    </h3>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->

                                <div class="col-xl-6 col-md-6">
                                    <!-- card -->
                                    <div class="card card-h-100">
                                        <!-- card body -->
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <span
                                                        class="text-muted mb-3 lh-1 d-block text-truncate">DANIŞMANLAR</span>
                                                    <hr>
                                                    <h3 style="text-align: center" class="mb-3">
                                                        <span class="counter-value"
                                                            data-target="<?php echo e(danismanCount()); ?>">0</span>
                                                    </h3>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                    <!-- card -->
                                    <div class="card card-h-100">
                                        <!-- card body -->
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <span
                                                        class="text-muted mb-3 lh-1 d-block text-truncate">ÖĞRENCİLER</span>
                                                    <hr>
                                                    <h3 style="text-align: center" class="mb-3">
                                                        <span class="counter-value"
                                                            data-target="<?php echo e(ogrenciCount()); ?>">0</span>
                                                    </h3>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->

                                <div class="col-xl-6 col-md-6">
                                    <!-- card -->
                                    <div class="card card-h-100">
                                        <!-- card body -->
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">AKADEMİK
                                                        PROGRAMLAR</span>
                                                    <hr>
                                                    <h3 style="text-align: center" class="mb-3">
                                                        <span class="counter-value"
                                                            data-target="<?php echo e(akademikCount()); ?>">1</span>
                                                    </h3>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                    <!-- card -->
                                    <div class="card card-h-100">
                                        <!-- card body -->
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">EĞİTİM
                                                        PROGRAMLARI</span>
                                                    <hr>
                                                    <h3 style="text-align: center" class="mb-3">
                                                        <span class="counter-value"
                                                            data-target="<?php echo e(egitimCount()); ?>">0</span>
                                                    </h3>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->

                                <div class="col-xl-6 col-md-6">
                                    <!-- card -->
                                    <div class="card card-h-100">
                                        <!-- card body -->
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">DİL
                                                        SINAVLARI</span>
                                                    <hr>
                                                    <h3 style="text-align: center" class="mb-3">
                                                        <span class="counter-value"
                                                            data-target="<?php echo e(dilCount()); ?>">0</span>
                                                    </h3>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->
                            </div>

                        </div>
                    <?php endif; ?>
                    <?php if(Route::is('danisman.index')): ?>
                        <div class="col-md-12">
                            <?php echo $__env->yieldContent('content'); ?>
                        </div>
                    <?php endif; ?>

                </div>

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        <?php echo $__env->make('danisman.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- end main content-->
</div>
<!-- END layout-wrapper -->

<!-- JAVASCRIPT -->
<?php echo $__env->make('danisman.layouts.vendor-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\panel\resources\views/danisman/layouts/master.blade.php ENDPATH**/ ?>