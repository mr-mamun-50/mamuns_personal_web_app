<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">

        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Core</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="@if ($menu == 'dashboard') active @endif">
                <a href=" {{ route('admin.dashboard') }} ">
                    <span class="pcoded-micon"><i class="bi bi-speedometer2"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="@if ($menu == 'categories') active @endif">
                <a href="">
                    <span class="pcoded-micon"><i class="bi bi-tag"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Categories</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>

        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Services</div>
        <ul class="pcoded-item pcoded-left-item">

            <li class="@if ($menu == 'Softwares') active @endif">
                <a href="">
                    <span class="pcoded-micon"><i class="bi bi-window-sidebar"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Softwares</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="@if ($menu == 'Designs') active @endif">
                <a href="">
                    <span class="pcoded-micon"><i class="bi bi-bezier"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Designs</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>


    </div>
</nav>
