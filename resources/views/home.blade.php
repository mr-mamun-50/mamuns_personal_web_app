@extends('layouts.app')

@section('content')
    {{-- Banner section started --}}
    <section class="banner d-md-flex align-items-center" id="home">
        <div class="container d-md-flex align-items-center position-relative">

            <div class="intro col-md-6 mt-5">
                <h2 class="hi text-warning">Hi,,,</h2>
                <h1 class="heading text-white">I'm Mamunur Rashid Mamun</h1>
                <p class="designation text-light">Web App Developer || Mobile App Developer</p>

                <p class="short-desc mt-4"><i class="fas fa-quote-left"></i><br> I work with perfection and find a simple
                    solution
                    to every difficult task.I always
                    avoid complexity.I love to do everything simply and smartly.
                    <br><i class="fas fa-quote-right"></i>
                </p>

                <div class="buttuns my-sm-4">
                    {{-- <a href="https://github.com/mr-mamun-50" class="btn btn-primary me-2" target="blank"><i
                            class="fa-brands fa-github fa-xl me-1"></i> Github</a> --}}
                    <button class="btn btn-light btn-lg me-2" type="button" data-bs-toggle="modal"
                        data-bs-target="#hireMe"><i class="fas fa-user-check  fa-xl me-1"></i> Hire Me</button>

                    <a href="#" class="btn btn-outline-light btn-lg"><i
                            class="fa-solid fa-user-graduate  fa-xl me-1"></i> Get CV</a>
                </div>
            </div>

            {{-- <div class="banner-picture col-md-6 p-md-5 mt-md-5 bg-info"> --}}
            <img class="img-fluid banner-picture col-md-6 p-md-5 mt-md-5"
                src="{{ asset('public/images/asset_img/header_image_frame-01.png') }}" alt="">
            {{-- </div> --}}
        </div>

        {{-- <div class="smokeShape position-absolute bottom-0 left-0 d-none d-lg-block"></div> --}}
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
                                <h6 class="mb-2">{{ $project->subtitle }}</h6>
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


    {{-- Hire me section started --}}
    <section class="container pt-10 d-flex justify-content-center">
        <div class="col-md-10 col-lg-8 rounded-7 bg-white">

            <div class="card rounded-7 hire-me-bg">
                <div class="card-body d-md-flex align-items-center py-5 px-md-5">

                    <div class=" col-md-8 col-lg-9">
                        <h2 class="card-title text-light mb-3">Hire Me!</h2>
                        <p class="card-text text-white">If you think my skills and activities are suitable for your project
                            then click
                            on 'HIRE ME' button to hire me...</p>
                    </div>

                    <div class="text-end col-md-4 col-lg-3 mt-3">
                        <button class="btn btn-primary btn-rounded btn-lg" type="button" data-bs-toggle="modal"
                            data-bs-target="#hireMe"><i class="fas fa-user-check me-1"></i> HIRE ME</button>
                    </div>

                </div>
            </div>
    </section>


    <!-- Modal for hire me -->
    <div class="modal fade" id="hireMe" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header hire-me-bg">
                    <h5 class="modal-title" id="staticBackdropLabel">Hire Me</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('hire_me.submit') }}" method="POST">
                    @csrf
                    <div class="modal-body">

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-outline mb-4">
                                    <input type="text" name="name" id="form4Example1" class="form-control"
                                        required />
                                    <label class="form-label" for="form4Example1">Name <span
                                            class="text-danger">*</span></label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-outline mb-4">
                                    <input type="email" name="email" id="form4Example2" class="form-control"
                                        required />
                                    <label class="form-label" for="form4Example2">Email address
                                        <span class="text-danger">*</span></label>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-outline mb-4">
                                    <input type="link" name="website" id="form4Example2" class="form-control" />
                                    <label class="form-label" for="form4Example2">Website</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group mb-4">
                                    <span class="input-group-text text-muted" id="basic-addon1">Budget
                                        <span class="text-danger ms-1">*</span></span>
                                    <select class="form-control" name="budget" id="" required>
                                        <option disabled selected> Select one</option>
                                        <option value="$100 - $300"> $100 - $300</option>
                                        <option value="$300 - $500"> $300 - $500</option>
                                        <option value="$500 - $1000"> $500 - $1000</option>
                                        <option value="$1000+"> $1000+</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <textarea name="requirements" class="summernote" required></textarea>
                        </div>

                        <!-- Checkbox -->
                        <div class="form-check">
                            <input class="form-check-input me-2" name="sent_copy" type="checkbox" value="1"
                                id="form4Example4" checked />
                            <label class="form-check-label" for="form4Example4">
                                Send me a copy of this message
                            </label>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light shadow-0" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
