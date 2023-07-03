
<?php $__env->startSection('title'); ?>
    Öğrenci Düzenle
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('/assets/libs/admin-resources/admin-resources.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <style>
        .eve:hover {
            background-color: brown !important;
            cursor: pointer;

        }
    </style>

    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color: brown">
                <h4 class="card-title" style="color:white">ÖĞRENCİ DÜZENLE</h4>
            </div>



            <div class="card-body">

                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <form action="<?php echo e(route('danisman.ogrenci.update')); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                        <?php if($errors->any()): ?>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="alert alert-danger"><?php echo e($item); ?></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                        <div class="row">
                            <div onclick="deneme4()" class="eve" id="eve_genel_bilgiler"
                                style="background-color: brown;border-color:brown!important;border:solid;border-radius:10px; height:50px;width:200px; margin:2%;border-width:thin">
                                <h6 style="color:white;padding:5%">GENEL AYARLAR</h6>
                            </div>
                            <div onclick="deneme()" class="eve" id="eve_okul_bilgileri"
                                style="background-color: gray;border-color:brown!important;border:solid;border-radius:10px; height:50px;width:200px; margin:2%;border-width:thin">
                                <h6 style="color:white;padding:5%">OKUL AYARLARI</h6>
                            </div>
                            <div onclick="deneme2()" class="eve" id="eve_basvurulacak"
                                style="background-color: gray;border-color:brown!important;border:solid;border-radius:10px; height:50px;width:200px; margin:2%;border-width:thin">
                                <h6 style="color:white;padding:5%">PROGRAM AYARLARI</h6>
                            </div>
                            <div onclick="deneme3()" class="eve" id="eve_basvurulan"
                                style="background-color: gray;border-color:brown!important;border:solid;border-radius:10px; height:50px;width:200px; margin:2%;border-width:thin">
                                <h6 style="color:white;padding:5%">GÜVENLİK AYARLARI</h6>
                            </div>
                        </div><br>

                        <div class="genel" id="genel">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">AD</label>
                                    <input value="<?php echo e($item->name); ?>" type="text" class="form-control" name="name"
                                        id="">

                                </div>
                                <div class="col-md-6">
                                    <label for="">SOYAD</label>
                                    <input value="<?php echo e($item->surname); ?>" placeholder="Soyisim..." type="text"
                                        class="form-control" name="surname" id="">
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">DEPARTMAN</label>
                                    <select name="departman_id" class="form-control" id="">
                                        <option value="1">Lütfen ülke seçin</option>

                                        <?php $__currentLoopData = $departman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option <?php echo e($item->Danisman->department_id == $dep->id ? 'selected' : ''); ?>

                                                value="<?php echo e($dep->id); ?>"><?php echo e(strtoupper($dep->name)); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="">TELEFON</label>
                                    <input type="text" value="<?php echo e($item->phone); ?>" class="form-control" name="phone"
                                        id="">
                                </div>
                            </div><br>

                            
                        </div>

                        <div class="okul" id="okul" style="display: none">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">OKUDUĞU ŞEHİR</label>
                                    <select onchange="test2()" name="uni_il_id" class="form-control" id="uni_il_id">
                                        <option value="">Lütfen şehir seçin</option>

                                        <?php $__currentLoopData = $iller; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $il): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option <?php echo e($item->uni_il_id == $il->id ? 'selected' : ''); ?> value="<?php echo e($il->id); ?>"><?php echo e(strtoupper($il->il_name)); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="">ÜNİVERSİTE</label>
                                    <select onchange="test3()" disabled name="uni_id" class="form-control" id="uni_id">
                                        <option value=""><?php echo e($item->Universite->uni_name); ?></option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <label for="">FAKÜLTE</label>
                                    <select disabled name="fakulte_id" class="form-control" id="fakulte_id">

                                        <option value=""><?php echo e($item->Fakulte->fakulte_ad); ?></option>

                                    </select>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">BÖLÜM</label>
                                    <input type="text" name="bolum" value="<?php echo e($item->bolum); ?>" class="form-control"
                                        id="">
                                </div>
                                <div class="col-md-2">
                                    <label for="">SINIF</label>
                                    <input type="number" class="form-control" name="sinif" value="<?php echo e($item->sinif); ?>"
                                        id="">
                                </div>
                            </div>
                        </div>


                        <div class="program" id="program" style="display: none">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">GENEL PROGRAM</label>
                                    <select name="genel_program" class="form-control" id="">
                                        <option value="">Lütfen seçiniz</option>

                                        <?php $__currentLoopData = $genel_program; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option <?php echo e($item->genel_program == $pro->id ? 'selected' : ''); ?> value="<?php echo e($pro->id); ?>"><?php echo e($pro->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="">EĞİTİM PROGRAMI</label>
                                    <select name="egitim_programi" class="form-control" id="">
                                        <option value="">Lütfen seçiniz</option>

                                        <?php $__currentLoopData = $egitim_programi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option <?php echo e($item->egitim_program_id == $prog->id ? 'selected' : ''); ?> value="<?php echo e($prog->id); ?>"><?php echo e($prog->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="">AKADEMİK PROGRAMI</label>
                                    <select name="akademik_program" class="form-control" id="">
                                        <option value="">Lütfen seçiniz</option>

                                        <?php $__currentLoopData = $akademik_program; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option <?php echo e($item->akademik_prgram_id == $pro->id ? 'selected' : ''); ?> value="<?php echo e($pro->id); ?>"><?php echo e($pro->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="">DİL SINAVI</label>
                                    <select name="dil_sinavi" class="form-control" id="">
                                        <option value="">Lütfen seçiniz</option>

                                        <?php $__currentLoopData = $dil_sinavi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option <?php echo e($item->dil_sinavi_id == $pro->id ? 'selected' : ''); ?> value="<?php echo e($pro->id); ?>"><?php echo e($pro->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">PROSEDÜR</label>
                                    <input type="text" class="form-control" value="<?php echo e($item->prosedur); ?>" name="prosedur"
                                        id="">
                                </div>
                            </div>
                        </div>



                        <div class="guvenlik" id="guvenlik" style="display: none">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">E-MAİL</label>
                                    <input type="text" class="form-control" name="email"value="<?php echo e($item->email); ?>"
                                        id="">
                                </div>
                                <div class="col-md-6">
                                    <label for="">ŞİFRE</label>
                                    <input type="text"  class="form-control" name="password"
                                        id="">
                                </div>
                            </div>
                        </div>

                        <br><br>
                        <div>
                            <input type="submit" value="DÜZENLE" class="btn btn-primary" name="" id="">
                        </div>
                    </form>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        function deneme() {
            document.getElementById("genel").style.display = "none";
            document.getElementById("program").style.display = "none";
            document.getElementById("guvenlik").style.display = "none";
            document.getElementById("okul").style.display = "block";

            document.getElementById("eve_okul_bilgileri").style.backgroundColor = "brown";
            document.getElementById("eve_genel_bilgiler").style.backgroundColor = "gray";
            document.getElementById("eve_basvurulan").style.backgroundColor = "gray";
            document.getElementById("eve_basvurulacak").style.backgroundColor = "gray";
        }

        function deneme2() {
            document.getElementById("genel").style.display = "none";
            document.getElementById("okul").style.display = "none";
            document.getElementById("guvenlik").style.display = "none";
            document.getElementById("program").style.display = "block";

            document.getElementById("eve_basvurulacak").style.backgroundColor = "brown";
            document.getElementById("eve_genel_bilgiler").style.backgroundColor = "gray";
            document.getElementById("eve_basvurulan").style.backgroundColor = "gray";
            document.getElementById("eve_okul_bilgileri").style.backgroundColor = "gray";
        }

        function deneme3(){
            document.getElementById("genel").style.display = "none";
            document.getElementById("okul").style.display = "none";
            document.getElementById("program").style.display = "none";
            document.getElementById("guvenlik").style.display = "block";

            document.getElementById("eve_basvurulacak").style.backgroundColor = "gray";
            document.getElementById("eve_genel_bilgiler").style.backgroundColor = "gray";
            document.getElementById("eve_basvurulan").style.backgroundColor = "brown";
            document.getElementById("eve_okul_bilgileri").style.backgroundColor = "gray";
        }


        function deneme4() {
            document.getElementById("program").style.display = "none";
            document.getElementById("okul").style.display = "none";
            document.getElementById("guvenlik").style.display = "none";
            document.getElementById("genel").style.display = "block";

            document.getElementById("eve_genel_bilgiler").style.backgroundColor = "brown";
            document.getElementById("eve_basvurulan").style.backgroundColor = "gray";
            document.getElementById("eve_okul_bilgileri").style.backgroundColor = "gray";
            document.getElementById("eve_basvurulacak").style.backgroundColor = "gray";
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

<?php echo $__env->make('danisman.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\panel\resources\views/danisman/pages/ogrenci/edit.blade.php ENDPATH**/ ?>