<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">PANEL</li>

                <li>
                    <a href="<?php echo e(route('danisman.index')); ?>">
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
                        <li><a href="<?php echo e(route('danisman.genel_program.add')); ?>" data-key="t-inbox">-PROGRAM EKLE</a></li>
                        <li><a href="<?php echo e(route('danisman.genel_program.list')); ?>" data-key="t-read-email">-PROGRAMLAR</a></li>
                    </ul>
                </li>

                

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="book-open"></i>
                        <span data-key="t-contacts">EĞİTİM PROGRAMI</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('danisman.egitim_programi.add')); ?>" data-key="t-user-grid">-PROGRAM EKLE</a></li>
                        <li><a href="<?php echo e(route('danisman.egitim_programi.list')); ?>" data-key="t-user-list">-PROGRAMLAR</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="trello"></i>
                        <span data-key="t-tasks">AKADEMİK PROGRAM</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('danisman.akademik_program.add')); ?>" key="t-task-list">-PROGRAM EKLE</a></li>
                        <li><a href="<?php echo e(route('danisman.akademik_program.list')); ?>" key="t-kanban-board">-PROGRAMLAR</a></li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="cast"></i>
                        <span data-key="t-tasks">DİL SINAVI</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('danisman.dil_sinavi.add')); ?>" key="t-task-list">-DİL SINAVI EKLE</a></li>
                        <li><a href="<?php echo e(route('danisman.dil_sinavi.list')); ?>" key="t-kanban-board">-DİL SINAVLARI</a></li>
                    </ul>
                </li>
                <li class="menu-title" data-key="t-pages">ÖĞRENCİ</li>

                <li>
                    <a href="<?php echo e(route('danisman.ogrenci.add')); ?>" >
                        <i data-feather="user-plus"></i>
                        <span data-key="t-pages">ÖĞRENCİ EKLE</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(route('danisman.ogrenci.list')); ?>" >
                        <i data-feather="users"></i>
                        <span data-key="t-pages">ÖĞRENCİLERİM</span>
                    </a>
                </li>


                <li class="menu-title" data-key="t-pages">MUHASEBE</li>

                <li>
                    <a href="<?php echo e(route('danisman.borc.ekle')); ?>" >
                        <i data-feather="file-text"></i>
                        <span data-key="t-pages">ÖĞRENCİ BORÇLANDIR</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(route('danisman.tahsilat.ekle')); ?>" >
                        <i data-feather="file-text"></i>
                        <span data-key="t-pages">ÖĞRENCİ TAHSİLAT</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(route('danisman.borc.list')); ?>" >
                        <i data-feather="file-text"></i>
                        <span data-key="t-pages">BORÇ LİSTESİ</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(route('danisman.tahsilat.list')); ?>" >
                        <i data-feather="file-text"></i>
                        <span data-key="t-pages">TAHSİLAT LİSTESİ</span>
                    </a>
                </li>

                


            </ul>

           
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<?php /**PATH C:\xampp\htdocs\panel\resources\views/danisman/layouts/sidebar.blade.php ENDPATH**/ ?>