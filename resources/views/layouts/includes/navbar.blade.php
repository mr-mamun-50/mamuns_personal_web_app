<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light fixed-top py-0">
    <!-- Container wrapper -->
    <div class="container">

        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar brand -->
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('public/images/asset_img/logo.png') }}" height="25" alt="M R Mamun" />
        </a>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse ms-3" id="navbarSupportedContent">

            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}/#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}/#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}/#skills">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}/#projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}/#videos">Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}/#qualifications">Qualifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}/#footer">Contact</a>
                </li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="profile d-flex align-items-center">
            <!-- Icon -->
            <a class="text-reset me-3" href="https://www.facebook.com/mamun20172018/" target="blank">
                <i class="fab fa-facebook"></i>
            </a>
            <a class="text-reset me-3" href="https://www.linkedin.com/in/m-r-mamun/" target="blank">
                <i class="fab fa-linkedin"></i>
            </a>

            <a class="text-reset btn btn-rounded shadow-2 border p-0" href="https://github.com/mr-mamun-50"
                target="blank">
                <i class="fab fa-github fa-lg mx-2"></i>
                <img src="https://avatars.githubusercontent.com/u/76045663?v=4" class="rounded-circle" height="30"
                    alt="Profile" />
            </a>

        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->
