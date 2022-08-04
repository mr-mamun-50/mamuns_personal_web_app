@extends('layouts.app')

@section('content')
    {{-- Banner section started --}}
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
    {{-- Banner section ended --}}


    {{-- Skills section started --}}
    <div class="skills py-5 bg-light" id="skills">
        <div class="container">
            <h2 class="text-primary text-center fw-bold">SKILLS</h2>
            <hr>
            <div class="row">
                {{-- Web development --}}
                <div class="col-lg-6">
                    <div class="card card-body mt-3">

                        <div class="d-flex justify-content-between align-items-center">
                            <span class="skill-title"><i class="fa-solid fa-globe fa-lg me-1 text-primary"></i> Full-Stack
                                Web Development</span>
                            <a class="btn btn-outline-primary btn-floating" data-bs-toggle="collapse" href="#web_dev"
                                role="button" aria-expanded="false" aria-controls="web_dev">
                                <i class="fa-solid fa-angle-down fa-2xl mt-3"></i>
                            </a>
                        </div>

                        <div class="collapse mt-3 row" id="web_dev">
                            <hr>
                            <p class="mt-2 mb-0">Front-End</p>
                            <hr>
                            @foreach ($skills as $skill)
                                @if ($skill->category == 'web_dev' && $skill->type == 'front_end')
                                    <div class="col-lg-6 col-md-4  my-2">
                                        <div class="card skill-card card-body py-3">

                                            <div class="d-flex align-items-center">
                                                <img class="skill-logo"
                                                    src="{{ asset('public/images/skill_logos/' . $skill->logo) }}"
                                                    alt="...">
                                                <span class="ms-2 skill-name">{{ $skill->name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                            <p class="mt-3 mb-0">Back-End</p>
                            <hr>
                            @foreach ($skills as $skill)
                                @if ($skill->category == 'web_dev' && $skill->type == 'back_end')
                                    <div class="col-lg-6 col-md-4  my-2">
                                        <div class="card skill-card card-body py-3">

                                            <div class="d-flex align-items-center">
                                                <img class="skill-logo"
                                                    src="{{ asset('public/images/skill_logos/' . $skill->logo) }}"
                                                    alt="...">
                                                <span class="ms-2 skill-name">{{ $skill->name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                            <p class="mt-3 mb-0">Database</p>
                            <hr>
                            @foreach ($skills as $skill)
                                @if ($skill->category == 'web_dev' && $skill->type == 'database')
                                    <div class="col-lg-6 col-md-4  my-2">
                                        <div class="card skill-card card-body py-3">

                                            <div class="d-flex align-items-center">
                                                <img class="skill-logo"
                                                    src="{{ asset('public/images/skill_logos/' . $skill->logo) }}"
                                                    alt="...">
                                                <span class="ms-2 skill-name">{{ $skill->name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
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
                            <p class="mt-2 mb-0">Front-End</p>
                            <hr>
                            @foreach ($skills as $skill)
                                @if ($skill->category == 'mobile_dev' && $skill->type == 'front_end')
                                    <div class="col-lg-6 col-md-4  my-2">
                                        <div class="card skill-card card-body py-3">

                                            <div class="d-flex align-items-center">
                                                <img class="skill-logo"
                                                    src="{{ asset('public/images/skill_logos/' . $skill->logo) }}"
                                                    alt="...">
                                                <span class="ms-2 skill-name">{{ $skill->name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                            <p class="mt-3 mb-0">Back-End</p>
                            <hr>
                            @foreach ($skills as $skill)
                                @if ($skill->category == 'mobile_dev' && $skill->type == 'back_end')
                                    <div class="col-lg-6 col-md-4  my-2">
                                        <div class="card skill-card card-body py-3">

                                            <div class="d-flex align-items-center">
                                                <img class="skill-logo"
                                                    src="{{ asset('public/images/skill_logos/' . $skill->logo) }}"
                                                    alt="...">
                                                <span class="ms-2 skill-name">{{ $skill->name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                            <p class="mt-3 mb-0">Database</p>
                            <hr>
                            @foreach ($skills as $skill)
                                @if ($skill->category == 'mobile_dev' && $skill->type == 'database')
                                    <div class="col-lg-6 col-md-4  my-2">
                                        <div class="card skill-card card-body py-3">

                                            <div class="d-flex align-items-center">
                                                <img class="skill-logo"
                                                    src="{{ asset('public/images/skill_logos/' . $skill->logo) }}"
                                                    alt="...">
                                                <span class="ms-2 skill-name">{{ $skill->name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
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
                            @foreach ($skills as $skill)
                                @if ($skill->category == 'programming_languages')
                                    <div class="col-lg-6 col-md-4  my-2">
                                        <div class="card skill-card card-body py-3">

                                            <div class="d-flex align-items-center">
                                                <img class="skill-logo"
                                                    src="{{ asset('public/images/skill_logos/' . $skill->logo) }}"
                                                    alt="...">
                                                <span class="ms-2 skill-name">{{ $skill->name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Graphic design --}}
                <div class="col-lg-6">
                    <div class="card card-body mt-3">

                        <div class="d-flex justify-content-between align-items-center">
                            <span class="skill-title"><i class="fas fa-crop fa-lg me-1 text-warning"></i>
                                Graphic Design</span>
                            <a class="btn btn-outline-primary btn-floating" data-bs-toggle="collapse"
                                href="#graphic_design" role="button" aria-expanded="false"
                                aria-controls="graphic_design">
                                <i class="fa-solid fa-angle-down fa-2xl mt-3"></i>
                            </a>
                        </div>

                        <div class="collapse mt-3 row" id="graphic_design">
                            <hr>
                            @foreach ($skills as $skill)
                                @if ($skill->category == 'graphic_design')
                                    <div class="col-lg-6 col-md-4  my-2">
                                        <div class="card skill-card card-body py-3">

                                            <div class="d-flex align-items-center">
                                                <img class="skill-logo"
                                                    src="{{ asset('public/images/skill_logos/' . $skill->logo) }}"
                                                    alt="...">
                                                <span class="ms-2 skill-name">{{ $skill->name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
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
                            @foreach ($skills as $skill)
                                @if ($skill->category == 'office_softwares')
                                    <div class="col-lg-6 col-md-4  my-2">
                                        <div class="card skill-card card-body py-3">

                                            <div class="d-flex align-items-center">
                                                <img class="skill-logo"
                                                    src="{{ asset('public/images/skill_logos/' . $skill->logo) }}"
                                                    alt="...">
                                                <span class="ms-2 skill-name">{{ $skill->name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
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
                            @foreach ($skills as $skill)
                                @if ($skill->category == 'other_skills')
                                    <div class="col-lg-6 col-md-4  my-2">
                                        <div class="card skill-card card-body py-3">

                                            <div class="d-flex align-items-center">
                                                <img class="skill-logo"
                                                    src="{{ asset('public/images/skill_logos/' . $skill->logo) }}"
                                                    alt="...">
                                                <span class="ms-2 skill-name">{{ $skill->name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Skills section ended --}}


    {{-- Projects section started --}}
    <div class="skills py-5 bg-light" id="projects">
        <div class="container">
            <h2 class="text-primary text-center fw-bold">PROJECTS</h2>
            <hr>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card mt-3">
                        <img src="https://i.ytimg.com/vi/0gR0DBux2qQ/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCNrbLEp9c9TtHLPa0ce4cxV0BdOg"
                            class="card-img-top" alt="...">

                        <div class="card-header">
                            <h5 class="card-title">MyADC</h5>
                            <h6 class="card-subtitle mb-2 text-muted ">College management with social media</h6>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                        </div>
                        <div class="card-footer pb-3 text-end">
                            <a href="#" class="btn btn-dark me-1">Github</a>
                            <a href="#" class="btn btn-primary">Live Project</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card mt-3">
                        <img src="https://i.ytimg.com/vi/jy-jOw374g4/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCmb5tNAoJu7HQ873Pd2QA3uOhQeg"
                            class="card-img-top" alt="...">

                        <div class="card-header">
                            <h5 class="card-title">TechCloud</h5>
                            <h6 class="card-subtitle mb-2 text-muted ">Free Resource Providers Web App</h6>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                        </div>
                        <div class="card-footer pb-3 text-end">
                            <a href="#" class="btn btn-dark me-1">Github</a>
                            <a href="#" class="btn btn-primary">Live Project</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card mt-3">
                        <img src="https://i.ytimg.com/vi/9hmEOdjwC7Y/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLDujPC55DI7IjM4vAy4jtWpxhm1zg"
                            class="card-img-top" alt="...">

                        <div class="card-header">
                            <h5 class="card-title">MU CSE 50</h5>
                            <h6 class="card-subtitle mb-2 text-muted ">E-Learning Website</h6>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                        </div>
                        <div class="card-footer pb-3 text-end">
                            <a href="#" class="btn btn-dark me-1">Github</a>
                            <a href="#" class="btn btn-primary">Live Project</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- Projects section ended --}}
@endsection
