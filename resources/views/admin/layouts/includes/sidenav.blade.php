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
                    <span class="pcoded-micon"><i class="fas fa-splotch"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Projects</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="@if ($menu == 'videos') active @endif">
                <a href="{{ route('videos.index') }}">
                    <span class="pcoded-micon"><i class="fas fa-video"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Videos</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>

        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">User</div>
        <ul class="pcoded-item pcoded-left-item">

            <li class="@if ($menu == 'messages') active @endif">
                <a href="{{ route('messages.index') }}">
                    <span class="pcoded-micon"><i class="fas fa-comment-dots"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Messages</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

        </ul>


    </div>
</nav>
