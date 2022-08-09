@extends('layouts.app')

@section('content')
    {{-- Banner section started --}}
    <section class="banner" id="home">
        <div class="container d-md-flex align-items-center h-100 position-relative">

            <div class="intro col-md-6 mt-5">
                <h2 class="hi text-warning">Hi_____</h2>
                <h1 class="heading text-white">I'm Mamunur Rashid Mamun</h1>
                <p class="designation text-light">Web App Developer || Mobile App Developer</p>

                <p class="short-desc mt-4">I work with perfection and find a simple solution to every difficult task.I always
                    avoid complexity.I love to do everything simply and smartly.</p>

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
        <div class="smokeShape position-absolute bottom-0 left-0"></div>
    </section>
    {{-- Banner section ended --}}


    {{-- Services section started --}}
    <section class="services pt-10" id="services">
        <div class="container">
            <h2 class="text-primary text-center fw-bold">SERVICES</h2>
            <div class="d-flex justify-content-center underline mb-3">
                <img class="flip" src="{{ asset('public/images/asset_img/underline.gif') }}" alt="">
                <img src="{{ asset('public/images/asset_img/underline.gif') }}" alt="">
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
    </section>
    {{-- Services section ended --}}


    {{-- Skills section started --}}
    <section class="skills pt-10" id="skills">
        <div class="container">
            <h2 class="text-primary text-center fw-bold">SKILLS</h2>
            <div class="d-flex justify-content-center underline mb-3">
                <img class="flip" src="{{ asset('public/images/asset_img/underline.gif') }}" alt="">
                <img src="{{ asset('public/images/asset_img/underline.gif') }}" alt="">
            </div>

            @include('User.skills')
        </div>
    </section>
    {{-- Skills section ended --}}


    {{-- Projects section started --}}
    <section class="projects pt-10" id="projects">
        <div class="container">
            <h2 class="text-primary text-center fw-bold">PROJECTS</h2>
            <div class="d-flex justify-content-center underline mb-3">
                <img class="flip" src="{{ asset('public/images/asset_img/underline.gif') }}" alt="">
                <img src="{{ asset('public/images/asset_img/underline.gif') }}" alt="">
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
    </section>
    {{-- Projects section ended --}}


    {{-- Videos section started --}}
    <section class="Videos pt-10" id="videos">
        <div class="container">
            <h2 class="text-primary text-center fw-bold">YOUTUBE VIDEOS</h2>
            <div class="d-flex justify-content-center underline mb-3">
                <img class="flip" src="{{ asset('public/images/asset_img/underline.gif') }}" alt="">
                <img src="{{ asset('public/images/asset_img/underline.gif') }}" alt="">
            </div>

            <div class="d-flex justify-content-between flex-wrap">

                @foreach ($videos as $video)
                    <div class="col-lg-4 col-md-6 p-2">
                        <div class="card video-card w-100 h-100">

                            <iframe class="card-img-top" width="100%" height="240"
                                src="https://www.youtube.com/embed/{{ $video->video_link }}" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>

                            <div class="card-footer">
                                <h5 class="card-title">{{ $video->title }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="text-end mt-3">
                <a href="{{ route('more_videos') }}" class="btn btn-link btn-lg">See more videos...</a>
            </div>
        </div>
    </section>


    {{-- Qualifications section started --}}
    <section class="qualifications pt-10" id="qualifications">
        <div class="container">
            <h2 class="text-primary text-center fw-bold">QUALIFICATIONS</h2>
            <div class="d-flex justify-content-center underline mb-3">
                <img class="flip" src="{{ asset('public/images/asset_img/underline.gif') }}" alt="">
                <img src="{{ asset('public/images/asset_img/underline.gif') }}" alt="">
            </div>

            <div class="d-flex justify-content-between flex-wrap">

                <div class="col-lg-4 col-md-6 p-2">
                    <div class="card video-card w-100 h-100">

                        <img class="card-img-top my-3" src="{{ asset('public/images/asset_img/certificate.svg') }}"
                            alt="" style="height:120px">
                        <h5 class="card-header text-center bg-primary text-white">
                            Training & Certifications
                        </h5>
                        <div class="card-body py-3 position-relative">
                            <div class="card_content card_height">
                                @php
                                    echo $AcP->qualifications;
                                @endphp
                            </div>
                            <div class="show_btn position-absolute bottom-0 end-0 w-100 text-end pt-4 rounded-5">
                                <button class="btn btn-link see_more pb-3">See more...</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 p-2">
                    <div class="card video-card w-100 h-100">

                        <img class="card-img-top my-3" src="{{ asset('public/images/asset_img/briefcase.svg') }}"
                            alt="" style="height:120px">
                        <h5 class="card-header text-center bg-primary text-white">
                            Experiences
                        </h5>
                        <div class="card-body py-3 position-relative">
                            <div class="card_content card_height">
                                @php
                                    echo $Exp->qualifications;
                                @endphp
                            </div>
                            <div class="show_btn position-absolute bottom-0 end-0 w-100 text-end pt-4 rounded-5">
                                <button class="btn btn-link see_more pb-3">See more...</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 p-2">
                    <div class="card video-card w-100 h-100">

                        <img class="card-img-top my-3" src="{{ asset('public/images/asset_img/trophy.svg') }}"
                            alt="" style="height:120px">
                        <h5 class="card-header text-center bg-primary text-white">
                            Achievement & Participation
                        </h5>
                        <div class="card-body py-3 position-relative">
                            <div class="card_content card_height">
                                @php
                                    echo $TrC->qualifications;
                                @endphp
                            </div>
                            <div class="show_btn position-absolute bottom-0 end-0 w-100 text-end pt-4 rounded-5">
                                <button class="btn btn-link see_more pb-3">See more...</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
