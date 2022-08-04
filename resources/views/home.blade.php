@extends('layouts.app')

@section('content')
    <div class="banner">
        <div class="container d-md-flex align-items-center h-100">

            <div class="intro col-md-6 mt-5">
                <h2 class="hi text-warning">Hi_____</h2>
                <h1 class="heading text-primary">I'm Mamunur Rashid Mamun</h1>
                <p class="designation">Full-Stack Web Developer</p>

                <p class="short-desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit minus optio pariatur
                    autem ad inventore voluptates quas saepe laborum sint.</p>

                <div class="buttuns my-sm-4">
                    <a href="" class="btn btn-primary me-2"><i class="fa-brands fa-github fa-xl me-1"></i> Github</a>
                    <a href="" class="btn btn-info"><i class="fa-solid fa-user-graduate  fa-xl me-1"></i> Get CV</a>
                </div>
            </div>

            <div class="banner-picture col-md-6 p-md-5 mt-md-5">
                <img class="img-fluid" src="{{ asset('public/images/asset_img/header_image_frame-01.png') }}"
                    alt="">
            </div>

        </div>
    </div>


    <div class="skills py-5 bg-light">
        <div class="container">
            <h2 class="text-primary text-center fw-bold">SKILLS</h2>
            <hr>
            <div class="row">
                {{-- Web development --}}
                <div class="col-lg-6">
                    <div class="card card-body mt-3">

                        <div class="d-flex justify-content-between align-items-center">
                            <span class="skill-title"><i class="fa-solid fa-globe fa-lg me-1 text-primary"></i> Full-Stack
                                Web
                                Development</span>
                            <a class="btn btn-outline-primary btn-floating" data-bs-toggle="collapse" href="#web_dev"
                                role="button" aria-expanded="false" aria-controls="web_dev">
                                <i class="fa-solid fa-angle-down fa-2xl mt-3"></i>
                            </a>
                        </div>

                        <div class="collapse mt-3 row" id="web_dev">
                            <hr>
                            <div class="col-lg-6 col-md-4  my-2">
                                <div class="card card-body">
                                    <div class="d-flex align-items-center">
                                        <img class="skill-logo" src="{{ asset('public/images/svg_logos/laravel-2.svg') }}"
                                            alt="...">
                                        <span class="ms-2 skill-name">Laravel</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 my-2">
                                <div class="card card-body">
                                    <div class="d-flex align-items-center">
                                        <img class="skill-logo" src="{{ asset('public/images/svg_logos/react-2.svg') }}"
                                            alt="...">
                                        <span class="ms-2 skill-name">React</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Mobile app development --}}
                <div class="col-lg-6">
                    <div class="card card-body mt-3">

                        <div class="d-flex justify-content-between align-items-center">
                            <span class="skill-title"><i class="fas fa-mobile-alt fa-lg me-2 text-secondary"></i> Mobile App
                                Development</span>
                            <a class="btn btn-outline-primary btn-floating" data-bs-toggle="collapse" href="#mobile_dev"
                                role="button" aria-expanded="false" aria-controls="mobile_dev">
                                <i class="fa-solid fa-angle-down fa-2xl mt-3"></i>
                            </a>
                        </div>

                        <div class="collapse mt-3 row" id="mobile_dev">
                            <hr>
                            <div class="col-lg-6 col-md-4  my-2">
                                <div class="card card-body">
                                    <div class="d-flex align-items-center">
                                        <img class="skill-logo" src="{{ asset('public/images/svg_logos/flutter.svg') }}"
                                            alt="...">
                                        <span class="ms-2 skill-name">Flutter</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 my-2">
                                <div class="card card-body">
                                    <div class="d-flex align-items-center">
                                        <img class="skill-logo" src="{{ asset('public/images/svg_logos/dart.svg') }}"
                                            alt="...">
                                        <span class="ms-2 skill-name">Dart</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 my-2">
                                <div class="card card-body">
                                    <div class="d-flex align-items-center">
                                        <img class="skill-logo" src="{{ asset('public/images/svg_logos/java-14.svg') }}"
                                            alt="...">
                                        <span class="ms-2 skill-name">Java</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Programming languages --}}
                <div class="col-lg-6">
                    <div class="card card-body mt-3">

                        <div class="d-flex justify-content-between align-items-center">
                            <span class="skill-title"><i class="fas fa-brain fa-lg me-1 text-info"></i> Programming
                                Languages</span>
                            <a class="btn btn-outline-primary btn-floating" data-bs-toggle="collapse"
                                href="#programming_languages" role="button" aria-expanded="false"
                                aria-controls="programming_languages">
                                <i class="fa-solid fa-angle-down fa-2xl mt-3"></i>
                            </a>
                        </div>

                        <div class="collapse mt-3 row" id="programming_languages">
                            <hr>
                            <div class="col-lg-6 col-md-4  my-2">
                                <div class="card card-body">
                                    <div class="d-flex align-items-center">
                                        <img class="skill-logo"
                                            src="{{ asset('public/images/svg_logos/adobe-illustrator-cc-icon.svg') }}"
                                            alt="...">
                                        <span class="ms-2 skill-name">Adobe Illustrator</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 my-2">
                                <div class="card card-body">
                                    <div class="d-flex align-items-center">
                                        <img class="skill-logo"
                                            src="{{ asset('public/images/svg_logos/adobe-photoshop-2.svg') }}"
                                            alt="...">
                                        <span class="ms-2 skill-name">Adobe Photoshop</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Graphic design --}}
                <div class="col-lg-6">
                    <div class="card card-body mt-3">

                        <div class="d-flex justify-content-between align-items-center">
                            <span class="skill-title"><i class="fas fa-crop fa-lg me-1 text-warning"></i>
                                Graphic
                                Design</span>
                            <a class="btn btn-outline-primary btn-floating" data-bs-toggle="collapse"
                                href="#graphic_design" role="button" aria-expanded="false"
                                aria-controls="graphic_design">
                                <i class="fa-solid fa-angle-down fa-2xl mt-3"></i>
                            </a>
                        </div>

                        <div class="collapse mt-3 row" id="graphic_design">
                            <hr>
                            <div class="col-lg-6 col-md-4  my-2">
                                <div class="card card-body">
                                    <div class="d-flex align-items-center">
                                        <img class="skill-logo"
                                            src="{{ asset('public/images/svg_logos/adobe-illustrator-cc-icon.svg') }}"
                                            alt="...">
                                        <span class="ms-2 skill-name">Adobe Illustrator</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 my-2">
                                <div class="card card-body">
                                    <div class="d-flex align-items-center">
                                        <img class="skill-logo"
                                            src="{{ asset('public/images/svg_logos/adobe-photoshop-2.svg') }}"
                                            alt="...">
                                        <span class="ms-2 skill-name">Adobe Photoshop</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- office softwares --}}
                <div class="col-lg-6">
                    <div class="card card-body mt-3">

                        <div class="d-flex justify-content-between align-items-center">
                            <span class="skill-title"><i class="fas fa-file-alt fa-lg me-1 text-success"></i> Office
                                Softwares</span>
                            <a class="btn btn-outline-primary btn-floating" data-bs-toggle="collapse"
                                href="#office_softwares" role="button" aria-expanded="false"
                                aria-controls="office_softwares">
                                <i class="fa-solid fa-angle-down fa-2xl mt-3"></i>
                            </a>
                        </div>

                        <div class="collapse mt-3 row" id="office_softwares">
                            <hr>
                            <div class="col-lg-6 col-md-4  my-2">
                                <div class="card card-body">
                                    <div class="d-flex align-items-center">
                                        <img class="skill-logo" src="{{ asset('public/images/svg_logos/word-1.svg') }}"
                                            alt="...">
                                        <span class="ms-2 skill-name">Microsoft Word</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- other skills --}}
                <div class="col-lg-6">
                    <div class="card card-body mt-3">

                        <div class="d-flex justify-content-between align-items-center">
                            <span class="skill-title"><i class="fas fa-fire fa-lg me-1 text-danger"></i> Other
                                Skills</span>
                            <a class="btn btn-outline-primary btn-floating" data-bs-toggle="collapse"
                                href="#other_skills" role="button" aria-expanded="false" aria-controls="other_skills">
                                <i class="fa-solid fa-angle-down fa-2xl mt-3"></i>
                            </a>
                        </div>

                        <div class="collapse mt-3 row" id="other_skills">
                            <hr>
                            <div class="col-lg-6 col-md-4  my-2">
                                <div class="card card-body">
                                    <div class="d-flex align-items-center">
                                        <img class="skill-logo"
                                            src="{{ asset('public/images/svg_logos/adobe-illustrator-cc-icon.svg') }}"
                                            alt="...">
                                        <span class="ms-2 skill-name">Camtasia</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
