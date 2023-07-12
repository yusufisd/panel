<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">PANEL</li>

                <li>
                    <a href="<?php echo e(route('ogrenci.index')); ?>">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">ANASAYFA</span>
                    </a>
                </li>

                <li class="menu-title" data-key="t-apps">GENEL</li>

                <li>
                    <a href="<?php echo e(route('ogrenci.programlar')); ?>">
                        <i data-feather="mail"></i>
                        <span data-key="t-email">PROGRAMLAR</span>
                    </a>
                </li>

                

                <li>
                    <a href="<?php echo e(route('ogrenci.danismanim')); ?>">
                        <i data-feather="users"></i>
                        <span data-key="t-contacts">DANIŞMANIM</span>
                    </a>
                </li>

              
                <li class="menu-title mt-2" data-key="t-components">ÜNİVERSİTELER</li>

                <li>
                    <a href="<?php echo e(route('ogrenci.basvurulacak')); ?>">
                        <i data-feather="briefcase"></i>
                        <span data-key="t-components">BAŞVURULACAK</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(route('ogrenci.basvurulan')); ?>">
                        <i data-feather="briefcase"></i>
                        <span data-key="t-components">BAŞVURULAN</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(route('ogrenci.onaylanan')); ?>">
                        <i data-feather="briefcase"></i>
                        <span data-key="t-components">ONAYLANAN</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(route('ogrenci.reddedilen')); ?>">
                        <i data-feather="briefcase"></i>
                        <span data-key="t-components">REDDEDİLEN</span>
                    </a>
                </li>



                <li class="menu-title mt-2" data-key="t-components">HESAP</li>

                <li>
                    <a href="<?php echo e(route('ogrenci.profil')); ?>">
                        <i data-feather="briefcase"></i>
                        <span data-key="t-components">PROFİLİM</span>
                    </a>
                </li>
                

            </ul>

           
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<?php /**PATH C:\xampp\htdocs\panel\resources\views/ogrenci/layouts/sidebar.blade.php ENDPATH**/ ?>