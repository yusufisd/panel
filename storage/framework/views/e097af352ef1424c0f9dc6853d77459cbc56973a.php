<?php $__env->startSection('title'); ?>
    Yönetim Paneli
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('/assets/libs/admin-resources/admin-resources.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Panel
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-xl-2 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">DEPARTMANLAR</span><hr>
                            <h3 style="text-align: center" class="mb-3">
                                <span class="counter-value" data-target="10">0</span>
                            </h3><hr>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-2 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">DANIŞMANLAR</span><hr>
                            <h3 style="text-align: center" class="mb-3">
                                <span class="counter-value" data-target="10">0</span>
                            </h3><hr>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-2 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">ÖĞRENCİLER</span><hr>
                            <h3 style="text-align: center" class="mb-3">
                                <span class="counter-value" data-target="10">0</span>
                            </h3><hr>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-2 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">AKADEMİK PROGRAM</span><hr>
                            <h3 style="text-align: center" class="mb-3">
                                <span class="counter-value" data-target="10">0</span>
                            </h3><hr>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-2 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">EĞİTİM PROGRAMI</span><hr>
                            <h3 style="text-align: center" class="mb-3">
                                <span class="counter-value" data-target="10">0</span>
                            </h3><hr>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-2 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">DİL SINAVI</span><hr>
                            <h3 style="text-align: center" class="mb-3">
                                <span class="counter-value" data-target="10">0</span>
                            </h3><hr>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div><!-- end row-->


    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Customer List</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown">
                            <a class=" dropdown-toggle" href="#" id="dropdownMenuButton2" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted">All Members<i class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                                <a class="dropdown-item" href="#">Members</a>
                                <a class="dropdown-item" href="#">New Members</a>
                                <a class="dropdown-item" href="#">Old Members</a>
                            </div>
                        </div>
                    </div>
                </div><!-- end card header -->

                <div class="card-body px-0">
                    <div class="px-3" data-simplebar style="max-height: 386px;">
                        <div class="d-flex align-items-center pb-4">
                            <div class="avatar-md me-4">
                                <img src="<?php echo e(URL::asset('./assets/images/users/avatar-2.jpg')); ?>"
                                    class="img-fluid rounded-circle" alt="">
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="font-size-15 mb-1"><a href="" class="text-dark">Randy Matthews</a></h5>
                                <span class="text-muted">Randy@gmail.com</span>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <div class="dropdown align-self-start">
                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Copy</a>
                                        <a class="dropdown-item" href="#">Save</a>
                                        <a class="dropdown-item" href="#">Forward</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center pb-4">
                            <div class="avatar-md me-4">
                                <img src="<?php echo e(URL::asset('./assets/images/users/avatar-4.jpg')); ?>"
                                    class="img-fluid rounded-circle" alt="">
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="font-size-15 mb-1"><a href="" class="text-dark">Vernon Wood</a></h5>
                                <span class="text-muted">Vernon@gmail.com</span>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <div class="dropdown align-self-start">
                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Copy</a>
                                        <a class="dropdown-item" href="#">Save</a>
                                        <a class="dropdown-item" href="#">Forward</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center pb-4">
                            <div class="avatar-md me-4">
                                <img src="<?php echo e(URL::asset('./assets/images/users/avatar-5.jpg')); ?>"
                                    class="img-fluid rounded-circle" alt="">
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="font-size-15 mb-1"><a href="" class="text-dark">Howard Rhoades</a></h5>
                                <span class="text-muted">Howard@gmail.com</span>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <div class="dropdown align-self-start">
                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Copy</a>
                                        <a class="dropdown-item" href="#">Save</a>
                                        <a class="dropdown-item" href="#">Forward</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center pb-4">
                            <div class="avatar-md me-4">
                                <img src="<?php echo e(URL::asset('./assets/images/users/avatar-6.jpg')); ?>"
                                    class="img-fluid rounded-circle" alt="">
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="font-size-15 mb-1"><a href="" class="text-dark">Arthur Zurcher</a></h5>
                                <span class="text-muted">Arthur@gmail.com</span>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <div class="dropdown align-self-start">
                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Copy</a>
                                        <a class="dropdown-item" href="#">Save</a>
                                        <a class="dropdown-item" href="#">Forward</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center pb-4">
                            <div class="avatar-md me-4">
                                <img src="<?php echo e(URL::asset('./assets/images/users/avatar-8.jpg')); ?>"
                                    class="img-fluid rounded-circle" alt="">
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="font-size-15 mb-1"><a href="" class="text-dark">Angela Palmer</a></h5>
                                <span class="text-muted">Angela@gmail.com</span>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <div class="dropdown align-self-start">
                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Copy</a>
                                        <a class="dropdown-item" href="#">Save</a>
                                        <a class="dropdown-item" href="#">Forward</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center pb-3">
                            <div class="avatar-md me-4">
                                <img src="<?php echo e(URL::asset('./assets/images/users/avatar-9.jpg')); ?>"
                                    class="img-fluid rounded-circle" alt="">
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="font-size-15 mb-1"><a href="" class="text-dark">Dorothy Wimson</a></h5>
                                <span class="text-muted">Dorothy@gmail.com</span>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <div class="dropdown align-self-start">
                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Copy</a>
                                        <a class="dropdown-item" href="#">Save</a>
                                        <a class="dropdown-item" href="#">Forward</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-4">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Selling Products</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown align-self-start">
                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-horizontal-rounded font-size-18 text-dark"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Copy</a>
                                <a class="dropdown-item" href="#">Save</a>
                                <a class="dropdown-item" href="#">Forward</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </div>

                </div><!-- end card header -->

                <div class="card-body px-0 pt-2 ">
                    <div class="table-responsive border-0 px-3" data-simplebar style="max-height: 395px;">
                        <table class="table align-middle table-nowrap ">
                            <tbody>
                                <tr>
                                    <td style="width: 50px;">
                                        <div class="avatar-md me-4">
                                            <img src="<?php echo e(URL::asset('./assets/images/product/img-1.png')); ?>"
                                                class="img-fluid" alt="">
                                        </div>
                                    </td>

                                    <td>
                                        <div>
                                            <h5 class="font-size-15"><a href="" class="text-dark">Half sleeve
                                                    T-shirt</a></h5>
                                            <span class="text-muted">$240.00</span>
                                        </div>
                                    </td>

                                    <td>
                                        <p class="mb-1"><a href="" class="text-dark">Available</a></p>
                                        <span class="text-muted">243K</span>
                                    </td>

                                    <td>
                                        <div class="text-end">
                                            <ul class="mb-1 ps-0">
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                            </ul>
                                            <span class="text-muted mt-1">145 Sales</span>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="width: 50px;">
                                        <div class="avatar-md me-4">
                                            <img src="<?php echo e(URL::asset('./assets/images/product/img-2.png')); ?>"
                                                class="img-fluid" alt="">
                                        </div>
                                    </td>

                                    <td>
                                        <div>
                                            <h5 class="font-size-15"><a href="" class="text-dark">Light blue
                                                    T-shirt</a></h5>
                                            <span class="text-muted">$650.00</span>
                                        </div>
                                    </td>

                                    <td>
                                        <p class="mb-1"><a href="" class="text-dark">Out Of Stock</a></p>
                                        <span class="text-muted">1,253K</span>
                                    </td>

                                    <td>
                                        <div class="text-end">
                                            <ul class="mb-1 ps-0">
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bx-star text-warning"></li>
                                            </ul>
                                            <span class="text-muted mt-1">260 Sales</span>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="width: 50px;">
                                        <div class="avatar-md me-4">
                                            <img src="<?php echo e(URL::asset('./assets/images/product/img-3.png')); ?>"
                                                class="img-fluid" alt="">
                                        </div>
                                    </td>

                                    <td>
                                        <div>
                                            <h5 class="font-size-15"><a href="" class="text-dark">Black Color
                                                    T-shirt</a></h5>
                                            <span class="text-muted">$325.00</span>
                                        </div>
                                    </td>

                                    <td>
                                        <p class="mb-1"><a href="" class="text-dark">Available</a></p>
                                        <span class="text-muted">2,586K</span>
                                    </td>

                                    <td>
                                        <div class="text-end">
                                            <ul class="mb-1 ps-0">
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                            </ul>
                                            <span class="text-muted mt-1">220 Sales</span>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="width: 50px;">
                                        <div class="avatar-md me-4">
                                            <img src="<?php echo e(URL::asset('./assets/images/product/img-4.png')); ?>"
                                                class="img-fluid" alt="">
                                        </div>
                                    </td>

                                    <td>
                                        <div>
                                            <h5 class="font-size-15"><a href="" class="text-dark"></a>Hoodie
                                                (Blue)</h5>
                                            <span class="text-muted">$170.00</span>
                                        </div>
                                    </td>

                                    <td>
                                        <p class="mb-1"><a href="" class="text-dark">Available</a></p>
                                        <span class="text-muted">4,565K</span>
                                    </td>

                                    <td>
                                        <div class="text-end">
                                            <ul class="mb-1 ps-0">
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                            </ul>
                                            <span class="text-muted mt-1">165 Sales</span>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="width: 50px;">
                                        <div class="avatar-md me-4">
                                            <img src="<?php echo e(URL::asset('./assets/images/product/img-5.png')); ?>"
                                                class="img-fluid" alt="">
                                        </div>
                                    </td>

                                    <td>
                                        <div>
                                            <h5 class="font-size-15"><a href="" class="text-dark"></a>Half sleeve
                                                T-Shirt</h5>
                                            <span class="text-muted">$150.00</span>
                                        </div>
                                    </td>

                                    <td>
                                        <p class="mb-1"><a href="" class="text-dark">Out Of Stock</a></p>
                                        <span class="text-muted">5,265K</span>
                                    </td>

                                    <td>
                                        <div class="text-end">
                                            <ul class="mb-1 ps-0">
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bx-star text-warning"></li>
                                            </ul>
                                            <span class="text-muted mt-1">165 Sales</span>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="width: 50px;">
                                        <div class="avatar-md me-4">
                                            <img src="<?php echo e(URL::asset('./assets/images/product/img-6.png')); ?>"
                                                class="img-fluid" alt="">
                                        </div>
                                    </td>

                                    <td>
                                        <div>
                                            <h5 class="font-size-15"><a href="" class="text-dark"></a>Green color
                                                T-shirt</h5>
                                            <span class="text-muted">$120.00</span>
                                        </div>
                                    </td>

                                    <td>
                                        <p class="mb-1"><a href="" class="text-dark">Available</a></p>
                                        <span class="text-muted">125K</span>
                                    </td>

                                    <td>
                                        <div class="text-end">
                                            <ul class="mb-1 ps-0">
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bx-star text-warning"></li>
                                            </ul>
                                            <span class="text-muted mt-1">165 Sales</span>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-4">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Customer List</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown">
                            <a class=" dropdown-toggle" href="#" id="dropdownMenuButton2"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted">All Members<i class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                                <a class="dropdown-item" href="#">Members</a>
                                <a class="dropdown-item" href="#">New Members</a>
                                <a class="dropdown-item" href="#">Old Members</a>
                            </div>
                        </div>
                    </div>
                </div><!-- end card header -->

                <div class="card-body px-0">
                    <div class="px-3" data-simplebar style="max-height: 386px;">
                        <div class="d-flex align-items-center pb-4">
                            <div class="avatar-md me-4">
                                <img src="<?php echo e(URL::asset('./assets/images/users/avatar-2.jpg')); ?>"
                                    class="img-fluid rounded-circle" alt="">
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="font-size-15 mb-1"><a href="" class="text-dark">Randy Matthews</a></h5>
                                <span class="text-muted">Randy@gmail.com</span>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <div class="dropdown align-self-start">
                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Copy</a>
                                        <a class="dropdown-item" href="#">Save</a>
                                        <a class="dropdown-item" href="#">Forward</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center pb-4">
                            <div class="avatar-md me-4">
                                <img src="<?php echo e(URL::asset('./assets/images/users/avatar-4.jpg')); ?>"
                                    class="img-fluid rounded-circle" alt="">
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="font-size-15 mb-1"><a href="" class="text-dark">Vernon Wood</a></h5>
                                <span class="text-muted">Vernon@gmail.com</span>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <div class="dropdown align-self-start">
                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Copy</a>
                                        <a class="dropdown-item" href="#">Save</a>
                                        <a class="dropdown-item" href="#">Forward</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center pb-4">
                            <div class="avatar-md me-4">
                                <img src="<?php echo e(URL::asset('./assets/images/users/avatar-5.jpg')); ?>"
                                    class="img-fluid rounded-circle" alt="">
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="font-size-15 mb-1"><a href="" class="text-dark">Howard Rhoades</a></h5>
                                <span class="text-muted">Howard@gmail.com</span>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <div class="dropdown align-self-start">
                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Copy</a>
                                        <a class="dropdown-item" href="#">Save</a>
                                        <a class="dropdown-item" href="#">Forward</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center pb-4">
                            <div class="avatar-md me-4">
                                <img src="<?php echo e(URL::asset('./assets/images/users/avatar-6.jpg')); ?>"
                                    class="img-fluid rounded-circle" alt="">
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="font-size-15 mb-1"><a href="" class="text-dark">Arthur Zurcher</a></h5>
                                <span class="text-muted">Arthur@gmail.com</span>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <div class="dropdown align-self-start">
                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Copy</a>
                                        <a class="dropdown-item" href="#">Save</a>
                                        <a class="dropdown-item" href="#">Forward</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center pb-4">
                            <div class="avatar-md me-4">
                                <img src="<?php echo e(URL::asset('./assets/images/users/avatar-8.jpg')); ?>"
                                    class="img-fluid rounded-circle" alt="">
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="font-size-15 mb-1"><a href="" class="text-dark">Angela Palmer</a></h5>
                                <span class="text-muted">Angela@gmail.com</span>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <div class="dropdown align-self-start">
                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Copy</a>
                                        <a class="dropdown-item" href="#">Save</a>
                                        <a class="dropdown-item" href="#">Forward</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center pb-3">
                            <div class="avatar-md me-4">
                                <img src="<?php echo e(URL::asset('./assets/images/users/avatar-9.jpg')); ?>"
                                    class="img-fluid rounded-circle" alt="">
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="font-size-15 mb-1"><a href="" class="text-dark">Dorothy Wimson</a></h5>
                                <span class="text-muted">Dorothy@gmail.com</span>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <div class="dropdown align-self-start">
                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Copy</a>
                                        <a class="dropdown-item" href="#">Save</a>
                                        <a class="dropdown-item" href="#">Forward</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div><!-- end row -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <!-- apexcharts -->
    <!-- JAVASCRIPT -->
    <script src="<?php echo e(asset('assets/libs/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/bootstrap/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/metismenu/metisMenu2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/simplebar/simplebar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/node-waves/node-waves.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/feather-icons/feather-icons.min.js')); ?>"></script>
    <!-- pace js -->
    <script src="<?php echo e(asset('assets/libs/pace-js/pace-js.min.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\panel\resources\views/index.blade.php ENDPATH**/ ?>