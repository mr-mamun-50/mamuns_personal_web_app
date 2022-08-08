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
                    <a href="https://github.com/mr-mamun-50" class="btn btn-primary me-2" target="blank"><i
                            class="fa-brands fa-github fa-xl me-1"></i> Github</a>
                    <a href="#" class="btn btn-info"><i class="fa-solid fa-user-graduate  fa-xl me-1"></i> Get CV</a>
                </div>
            </div>

            <div class="banner-picture col-md-6 p-md-5 mt-md-5">
                <img class="img-fluid" src="{{ asset('public/images/asset_img/header_image_frame-01.png') }}"
                    alt="">
            </div>

        </div>
    </div>
    {{-- Banner section ended --}}



    {{-- Services section started --}}
    <div class="skills py-5" id="projects">
        <div class="container">
            <h2 class="text-primary text-center fw-bold">SERVICES</h2>
            <div class="d-flex justify-content-center underline mb-3">
                <img src="{{ asset('public/images/asset_img/underline.gif') }}" alt="">
                <img class="flip" src="{{ asset('public/images/asset_img/underline.gif') }}" alt="">
            </div>

            <!-- Set up your HTML -->
            <div class="owl-carousel">
                <div class="px-5">
                    <img class="img-fluid" src="{{ asset('public/images/asset_img/w-a-d.png') }}" alt="">
                </div>
                <div class="px-5">
                    <img class="img-fluid" src="{{ asset('public/images/asset_img/m-a-d.png') }}" alt="">
                </div>
                <div class="px-5">
                    <img class="img-fluid" src="{{ asset('public/images/asset_img/w-h.png') }}" alt="">
                </div>
                <div class="px-5">
                    <img class="img-fluid" src="{{ asset('public/images/asset_img/g-d.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>


    {{-- Projects section started --}}
    <div class="skills py-5" id="projects">
        <div class="container">
            <h2 class="text-primary text-center fw-bold">PROJECTS</h2>
            <div class="d-flex justify-content-center underline mb-3">
                <img src="{{ asset('public/images/asset_img/underline.gif') }}" alt="">
                <img class="flip" src="{{ asset('public/images/asset_img/underline.gif') }}" alt="">
            </div>

            <div class="d-flex justify-content-between flex-wrap">

                @foreach ($projects as $project)
                    <div class="col-lg-4 col-md-6 p-2">
                        <div class="card project-card w-100 h-100">
                            <img src="{{ asset('public/images/project_thumbnails/' . $project->thumbnail) }}"
                                class="card-img-top" alt="...">

                            <div class="card-header">
                                <h5 class="card-title">{{ $project->title }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted ">{{ $project->subtitle }}</h6>
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{ $project->description }}</p>
                            </div>
                            <div class="card-footer pb-3 text-end">
                                <a href="{{ $project->github_link }}" class="btn btn-dark me-1" target="blank">Github</a>
                                <a href="{{ $project->live_link }}" class="btn btn-primary" target="blank">Live Project</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="text-end mt-3">
                <a href="{{ route('more_projects') }}" class="btn btn-link btn-lg">See more projects...</a>
            </div>
        </div>
    </div>
    {{-- Projects section ended --}}


    {{-- Skills section started --}}
    <div class="skills py-5" id="skills">
        <div class="container">
            <h2 class="text-primary text-center fw-bold">SKILLS</h2>
            <div class="d-flex justify-content-center underline mb-3">
                <img src="{{ asset('public/images/asset_img/underline.gif') }}" alt="">
                <img class="flip" src="{{ asset('public/images/asset_img/underline.gif') }}" alt="">
            </div>

            @include('User.skills')
        </div>
    </div>
    {{-- Skills section ended --}}
@endsection
