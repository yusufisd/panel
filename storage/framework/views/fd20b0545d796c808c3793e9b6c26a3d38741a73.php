<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">PANEL</li>

                <li>
                    <a href="<?php echo e(route('superadmin.index')); ?>">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">ANASAYFA</span>
                    </a>
                </li>

                <li class="menu-title" data-key="t-apps">PROGRAM</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="database"></i>
                        <span data-key="t-email">GENEL PROGRAM</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('genel_program.add')); ?>" data-key="t-inbox">-PROGRAM EKLE</a></li>
                        <li><a href="<?php echo e(route('genel_program.list')); ?>" data-key="t-read-email">-PROGRAMLAR</a></li>
                    </ul>
                </li>

                

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="book-open"></i>
                        <span data-key="t-contacts">EĞİTİM PROGRAMI</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('egitim_programi.add')); ?>" data-key="t-user-grid">-PROGRAM EKLE</a></li>
                        <li><a href="<?php echo e(route('egitim_programi.list')); ?>" data-key="t-user-list">-PROGRAMLAR</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="trello"></i>
                        <span data-key="t-tasks">AKADEMİK PROGRAM</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('akademik_program.add')); ?>" key="t-task-list">-PROGRAM EKLE</a></li>
                        <li><a href="<?php echo e(route('akademik_program.list')); ?>" key="t-kanban-board">-PROGRAMLAR</a></li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="cast"></i>

                        <span data-key="t-tasks">DİL SINAVI</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('dil_sinavi.add')); ?>" key="t-task-list">-DİL SINAVI EKLE</a></li>
                        <li><a href="<?php echo e(route('dil_sinavi.list')); ?>" key="t-kanban-board">-DİL SINAVLARI</a></li>
                    </ul>
                </li>
                <li class="menu-title" data-key="t-pages">GENEL</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="layers"></i>
                        <span data-key="t-authentication">DEPARTMAN</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('departman.add')); ?>" data-key="t-login">DEPARTMAN EKLE</a></li>
                        <li><a href="<?php echo e(route('departman.list')); ?>" data-key="t-register">DEPARTMANLAR</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="user"></i>
                        <span data-key="t-pages">DANIŞMAN</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('danisman.add')); ?>" key="t-starter-page">DANIŞMAN EKLE</a></li>
                        <li><a href="<?php echo e(route('danisman.list')); ?>" key="t-maintenance">DANIŞMANLAR</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="users"></i>
                        <span data-key="t-pages">ÖĞRENCİ</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('ogrenci.add')); ?>" key="t-starter-page">ÖĞRENCİ EKLE</a></li>
                        <li><a href="<?php echo e(route('ogrenci.list')); ?>" key="t-maintenance">ÖĞRENCİLER</a></li>
                    </ul>
                </li>

                

                <li class="menu-title mt-2" data-key="t-components">MUHASEBE</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="align-justify"></i>
                        <span data-key="t-components">ÖĞRENCİ</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('.borc.list')); ?>" key="t-buttons">BORÇ LİSTESİ</a></li>
                        <li><a href="<?php echo e(route('.tahsilat.list')); ?>" key="t-buttons">TAHSİLAT LİSTESİ</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="align-justify"></i>
                        <span data-key="t-ui-elements">DANIŞMAN</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('danisman_muhasebe.odeme_yap')); ?>" data-key="t-lightbox">ÖDEME YAP</a></li>
                        <li><a href="<?php echo e(route('danisman_muhasebe.odeme_list')); ?>" data-key="t-range-slider">TÜM ÖDEMELER</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="archive"></i>
                        <span data-key="t-forms">CARİ EKSTRE</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('ekstre.add')); ?>" data-key="t-form-elements">EKSTRE</a></li>
                    </ul>
                </li>

                
                
                

            </ul>

           
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<?php /**PATH C:\xampp\htdocs\panel\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>