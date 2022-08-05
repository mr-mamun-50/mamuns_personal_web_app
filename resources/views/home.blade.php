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

            @include('User.skills')
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
