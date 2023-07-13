<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">PANEL</li>

                <li>
                    <a href="{{route('ogrenci.index')}}">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">ANASAYFA</span>
                    </a>
                </li>

                <li class="menu-title" data-key="t-apps">GENEL</li>

                <li>
                    <a href="{{route('ogrenci.programlar')}}">
                        <i data-feather="database"></i>
                        <span data-key="t-email">PROGRAMLAR</span>
                    </a>
                </li>

                

                <li>
                    <a href="{{route('ogrenci.danismanim')}}">
                        <i data-feather="user"></i>
                        <span data-key="t-contacts">DANIŞMANIM</span>
                    </a>
                </li>

              
                <li class="menu-title mt-2" data-key="t-components">ÜNİVERSİTELER</li>

                <li>
                    <a href="{{route('ogrenci.basvurulacak')}}">
                        <i data-feather="align-justify"></i>
                        <span data-key="t-components">BAŞVURULACAK</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('ogrenci.basvurulan')}}">
                        <i data-feather="list"></i>
                        <span data-key="t-components">BAŞVURULAN</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('ogrenci.onaylanan')}}">
                        <i data-feather="check-square"></i>
                        <span data-key="t-components">ONAYLANAN</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('ogrenci.reddedilen')}}">
                        <i data-feather="x-square"></i>
                        <span data-key="t-components">REDDEDİLEN</span>
                    </a>
                </li>



                <li class="menu-title mt-2" data-key="t-components">HESAP</li>

                <li>
                    <a href="{{route('ogrenci.profil')}}">
                        <i data-feather="user"></i>
                        <span data-key="t-components">PROFİLİM</span>
                    </a>
                </li>
                

            </ul>

           
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
