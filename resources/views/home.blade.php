@extends('layouts.app')

@section('content')
    <div class="banner">
        <div class="container d-md-flex align-items-center h-100">

            <div class="intro col-md-6">
                <h2 class="hi text-warning">Hi_____</h2>
                <h1 class="heading text-primary">I'm Mamunur Rashid Mamun</h1>
                <p class="designation">Full-Stack Web Developer</p>

                <p class="short-desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit minus optio pariatur
                    autem ad inventore voluptates quas saepe laborum sint.</p>

                <div class="buttuns my-sm-4">
                    <a href="" class="btn btn-primary me-2">Github Profile</a>
                    <a href="" class="btn btn-info">Get CV</a>
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
            <h2 class="text-primary text-center">Skills</h2>
            <hr>

            <div class="row">
                <div class="card col-lg-4 col-md-6">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/182.webp" class="card-img-top"
                        alt="Sunset Over the Sea" />
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>
                <div class="card col-lg-4 col-md-6">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/182.webp" class="card-img-top"
                        alt="Sunset Over the Sea" />
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>
                <div class="card col-lg-4 col-md-6">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/182.webp" class="card-img-top"
                        alt="Sunset Over the Sea" />
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
