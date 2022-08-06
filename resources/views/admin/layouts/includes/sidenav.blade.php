<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">

        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Core</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="@if ($menu == 'dashboard') active @endif">
                <a href=" {{ route('admin.dashboard') }} ">
                    <span class="pcoded-micon"><i class="fas fa-chart-area"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="@if ($menu == 'Skills') active @endif">
                <a href="{{ route('skills.index') }}">
                    <span class="pcoded-micon"><i class="fas fa-lightbulb"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Skills</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="@if ($menu == 'Projects') active @endif">
                <a href="{{ route('projects.index') }}">
                    <span class="pcoded-micon"><i class="fas fa-project-diagram"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Projects</span>
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
