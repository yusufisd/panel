<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">PANEL</li>

                <li>
                    <a href="index">
                        <i data-feather="home"></i>
                        <span class="badge rounded-pill bg-soft-success text-success float-end">9+</span>
                        <span data-key="t-dashboard">ANASAYFA</span>
                    </a>
                </li>

                <li class="menu-title" data-key="t-apps">PROGRAM</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="mail"></i>
                        <span data-key="t-email">GENEL PROGRAM</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('genel_program.add')}}" data-key="t-inbox">-PROGRAM EKLE</a></li>
                        <li><a href="{{route('genel_program.list')}}" data-key="t-read-email">-PROGRAMLAR</a></li>
                    </ul>
                </li>

                

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="users"></i>
                        <span data-key="t-contacts">EĞİTİM PROGRAMI</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('egitim_programi.add')}}" data-key="t-user-grid">-PROGRAM EKLE</a></li>
                        <li><a href="{{route('egitim_programi.list')}}" data-key="t-user-list">-PROGRAMLAR</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="trello"></i>
                        <span data-key="t-tasks">AKADEMİK PROGRAM</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('akademik_program.add')}}" key="t-task-list">-PROGRAM EKLE</a></li>
                        <li><a href="{{route('akademik_program.list')}}" key="t-kanban-board">-PROGRAMLAR</a></li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="trello"></i>
                        <span data-key="t-tasks">DİL SINAVI</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('dil_sinavi.add')}}" key="t-task-list">-DİL SINAVI EKLE</a></li>
                        <li><a href="{{route('dil_sinavi.list')}}" key="t-kanban-board">-DİL SINAVLARI</a></li>
                    </ul>
                </li>
                <li class="menu-title" data-key="t-pages">GENEL</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="layers"></i>
                        <span data-key="t-authentication">DEPARTMAN</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('departman.add')}}" data-key="t-login">DEPARTMAN EKLE</a></li>
                        <li><a href="{{route('departman.list')}}" data-key="t-register">DEPARTMANLAR</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="file-text"></i>
                        <span data-key="t-pages">DANIŞMAN</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('danisman.add')}}" key="t-starter-page">DANIŞMAN EKLE</a></li>
                        <li><a href="{{route('danisman.list')}}" key="t-maintenance">DANIŞMANLAR</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="file-text"></i>
                        <span data-key="t-pages">ÖĞRENCİ</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('ogrenci.add')}}" key="t-starter-page">ÖĞRENCİ EKLE</a></li>
                        <li><a href="{{route('ogrenci.list')}}" key="t-maintenance">ÖĞRENCİLER</a></li>
                    </ul>
                </li>

                

                <li class="menu-title mt-2" data-key="t-components">MUHASEBE</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="briefcase"></i>
                        <span data-key="t-components">ÖĞRENCİ</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts" key="t-alerts">BORÇ EKLE</a></li>
                        <li><a href="ui-buttons" key="t-buttons">BORÇ LİSTESİ</a></li>
                        <li><a href="ui-tahs" key="t-buttons">TAHSİLAT</a></li>
                        <li><a href="ui-tahsi" key="t-buttons">TAHSİLAT LİSTESİ</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="gift"></i>
                        <span data-key="t-ui-elements">DANIŞMAN</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="extended-lightbox" data-key="t-lightbox">ÖDEME YAP</a></li>
                        <li><a href="extended-rangeslider" data-key="t-range-slider">TÜM ÖDEMELER</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="box"></i>
                        <span data-key="t-forms">CARİ EKSTRE</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="form-elements" data-key="t-form-elements">EKSTRE</a></li>
                    </ul>
                </li>

                
                
                

            </ul>

           
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
