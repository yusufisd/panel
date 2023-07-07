
<?php $__env->startSection('title'); ?>
    Danışman Ekle
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('/assets/libs/admin-resources/admin-resources.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color: gray">
                <h4 class="card-title" style="color:white">DANIŞMAN DÜZENLE</h4>
            </div>

            <div class="card-body">
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <form action="<?php echo e(route('danisman.update')); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                        <?php if($errors->any()): ?>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="alert alert-danger"><?php echo e($item); ?></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        <input type="hidden" name="id" value="<?php echo e($dat->id); ?>" id="">
                        <div class="row">
                            <div class="col-md-4">
                                <h5>GENEL BİLGİLER</h5>
                            </div>
                            <div class="col-md-4"></div>
                            <div style="text-align: right" class="col-md-4">
                                <a href="<?php echo e(route('superadmin.danisman.settings', $dat->id)); ?>">
                                    <button type="button" class="btn btn-danger">GÜVENLİK AYARLARI</button>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">AD</label>
                                <input value="<?php echo e($dat->name); ?>" type="text" class="form-control" name="name"
                                    id="">

                            </div>
                            <div class="col-md-6">
                                <label for="">SOYAD</label>
                                <input value="<?php echo e($dat->surname); ?>" type="text" class="form-control" name="surname"
                                    id="">
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="">DEPARTMAN</label>
                                <select name="departman_id" class="form-control" id="">
                                    <option value="1">Lütfen ülke seçin</option>

                                    <?php $__currentLoopData = $departman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php echo e($dat->department_id == $item->id ? 'selected' : ''); ?>

                                            value="<?php echo e($item->id); ?>"><?php echo e(strtoupper($item->name)); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="">TELEFON</label>
                                <input type="text" class="form-control" name="phone" value="<?php echo e($dat->phone); ?>"
                                    id="">
                            </div>
                        </div><br><br>

                        <div>
                            <input type="submit" value="EKLE" class="btn btn-primary" name="" id="">
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\panel\resources\views/superadmin/pages/danisman/edit.blade.php ENDPATH**/ ?>