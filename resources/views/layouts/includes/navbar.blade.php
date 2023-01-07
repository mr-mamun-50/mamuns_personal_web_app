<!-- Navbar -->
<nav class="py-0 navbar navbar-expand-lg navbar-dark bg-dark text-light fixed-top">
    <!-- Container wrapper -->
    <div class="container">

        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar brand -->
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/asset_img/logo.png') }}" height="25" alt="M R Mamun" />
        </a>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse ms-3" id="navbarSupportedContent">

            <!-- Left links -->
            <ul class="mb-2 navbar-nav me-auto mb-lg-0">
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
                <li class="nav-item d-flex align-items-center ms-lg-3">
                    <div class="">
                        <a class="px-3 py-2 nav-link btn btn-outline-light gr-btn" data-bs-toggle="modal"
                            data-bs-target="#ContactMe">Contact</a>
                    </div>
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

            <a class="p-0 border text-reset btn btn-rounded shadow-2" href="https://github.com/mr-mamun-50"
                target="blank">
                <i class="mx-2 fab fa-github fa-lg"></i>
                <img src="https://avatars.githubusercontent.com/u/76045663?v=4" class="rounded-circle" height="30"
                    alt="Profile" />
            </a>

        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->


<!-- Modal for Contact me -->
<div class="modal fade" id="ContactMe" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title" id="staticBackdropLabel">Contact Me</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('message.send') }}" method="POST">
                @csrf
                <div class="modal-body">

                    <!-- Name input -->
                    <div class="mb-4 form-outline">
                        <input type="text" name="name" id="form4Example1" class="form-control" required />
                        <label class="form-label" for="form4Example1">Name <span class="text-danger">*</span></label>
                    </div>

                    <!-- Email input -->
                    <div class="mb-4 form-outline">
                        <input type="email" name="email" id="form4Example2" class="form-control" required />
                        <label class="form-label" for="form4Example2">Email address
                            <span class="text-danger">*</span></label>
                    </div>

                    <div class="mb-4">
                        <textarea name="message" class="summernote_contact" required></textarea>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light shadow-0" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</div>
