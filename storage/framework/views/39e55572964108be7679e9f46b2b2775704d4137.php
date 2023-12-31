
<?php $__env->startSection('title'); ?>
    Öğrenci Ekle
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('/assets/libs/admin-resources/admin-resources.min.css')); ?>" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color: gray">
                <h4 class="card-title" style="color:white">ÖĞRENCİ EKLE</h4>
            </div>



            <div class="card-body">
                <form action="<?php echo e(route('ogrenci.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                    <?php if($errors->any()): ?>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="alert alert-danger"><?php echo e($item); ?></div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    <BR>
                    <h5>GENEL BİLGİLER</h5><BR>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">AD</label>
                            <input placeholder="İsim..." type="text" class="form-control" name="name" id="">

                        </div>
                        <div class="col-md-4">
                            <label for="">SOYAD</label>
                            <input placeholder="Soyisim..." type="text" class="form-control" name="surname"
                                id="">
                        </div>
                        <div class="col-md-4">
                            <label for="">TC NO</label>
                            <input placeholder="TC kimlik numarası..." type="number" class="form-control" name="tc_no"
                                id="">
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col-md-4">
                            <label for="">DOĞUM TARİHİ</label>
                            <input type="date" class="form-control" name="birthday" id="">

                        </div>
                        <div class="col-md-4">
                            <label for="">TELEFON</label>
                            <input placeholder="Telefon..." type="text" class="form-control" name="phone"
                                id="">
                        </div>
                        <div class="col-md-4">
                            <label for="">PASAPORT NUMARASI</label>
                            <input placeholder="Pasaport numarası..." type="number" class="form-control" name="passport_no"
                                id="">
                        </div>
                    </div><br>


                    <div class="row">
                        <div class="col-md-4">
                            <label for="">BABA ADI</label>
                            <input placeholder="Baba adı..." type="text" class="form-control" name="father_name"
                                id="">

                        </div>
                        <div class="col-md-4">
                            <label for="">ANNE ADI</label>
                            <input placeholder="Anne adı..." type="text" class="form-control" name="mother_name"
                                id="">
                        </div>
                        <div class="col-md-4">
                            <label for="">REFERANS</label>
                            <input placeholder="Referans..." type="number" class="form-control" name="referance"
                                id="">
                        </div>
                    </div><br><br><hr>

                    <h5>OKUL BİLGİLERİ</h5><br>

                    <div class="row">
                        <div class="col-md-3">
                            <label for="">OKUDUĞU ŞEHİR</label>
                            <select onchange="test2()" name="uni_il_id" class="form-control" id="uni_il_id">
                                <option value="">Lütfen şehir seçin</option>

                                <?php $__currentLoopData = $iller; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>"><?php echo e(strtoupper($item->il_name)); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">ÜNİVERSİTE</label>
                            <select onchange="test3()" disabled name="uni_id" class="form-control" id="uni_id">
                                <option value="">Lütfen önce şehir seçin</option>
                            </select>
                        </div>
                        <div class="col-md-5">
                            <label for="">FAKÜLTE</label>
                            <select disabled name="fakulte_id" class="form-control" id="fakulte_id">

                                <option value="">Lütfen önce üniversite seçin</option>

                            </select>
                        </div>

                    </div><br>

                    <div class="row">
                        <div class="col-md-4">
                            <label for="">BÖLÜM</label>
                            <input type="text" name="bolum" placeholder="Bölüm..." class="form-control" id="">
                        </div>
                        <div class="col-md-2">
                            <label for="">SINIF</label>
                            <input type="number" class="form-control" name="sinif" placeholder="Sınıf..."
                                id="">
                        </div>
                    </div><br><br><hr>
                    
                    <h5>PROGRAM</h5><br>

                    <div class="row">
                        <div class="col-md-3">
                            <label for="">GENEL PROGRAM</label>
                            <select name="genel_program" class="form-control" id="">
                                <option value="">Lütfen seçiniz</option>

                                <?php $__currentLoopData = $genel_program; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="">EĞİTİM PROGRAMI</label>
                            <select name="egitim_programi" class="form-control" id="">
                                <option value="">Lütfen seçiniz</option>

                                <?php $__currentLoopData = $egitim_programi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="">AKADEMİK PROGRAMI</label>
                            <select name="akademik_program" class="form-control" id="">
                                <option value="">Lütfen seçiniz</option>

                                <?php $__currentLoopData = $akademik_program; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="">DİL SINAVI</label>
                            <select name="dil_sinavi" class="form-control" id="">
                                <option value="">Lütfen seçiniz</option>

                                <?php $__currentLoopData = $dil_sinavi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">PROSEDÜR</label>
                            <input type="text" class="form-control" placeholder="Prosedür..." name="prosedur" id="">
                        </div>
                    </div><br><br><hr>

                    <h5>GÜVENLİK</h5><br>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">E-MAİL</label>
                            <input type="text" class="form-control" name="email" placeholder="Email..."
                                id="">
                        </div>
                        <div class="col-md-6">
                            <label for="">ŞİFRE</label>
                            <input type="text" class="form-control" name="password" placeholder="Şifre..."
                                id="">
                        </div>
                    </div><br>
                    <div>
                        <input type="submit" value="EKLE" class="btn btn-primary" name="" id="">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        function test2() {
            var il_id = $('#uni_il_id').val()
            $("#uni_id").removeAttr('disabled');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'GET',
                url: '<?php echo e(route('uni.getir')); ?>',
                data: 'id=' + il_id,
                success: function(data) {
                    $("#uni_id").html("");
                    for (i = 0; i < data.length; i++) {
                        var opt = "<option value='" + data[i].uni_id + "' >" + data[i].uni_name + "</option>";
                        $("#uni_id").append(opt);
                    }
                }
            });
        }

        function test3() {
            var uni_id = $('#uni_id').val()
            $("#fakulte_id").removeAttr('disabled');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'GET',
                url: '<?php echo e(route('fakulte.getir')); ?>',
                data: 'id=' + uni_id,
                success: function(data) {
                    $("#fakulte_id").html("");
                    for (i = 0; i < data.length; i++) {
                        var opt = "<option value='" + data[i].fakulte_id + "' >" + data[i].fakulte_ad + "</option>";
                        $("#fakulte_id").append(opt);
                    }
                }
            });
        }
    </script>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\panel\resources\views\superadmin\pages\ogrenci\add.blade.php ENDPATH**/ ?>