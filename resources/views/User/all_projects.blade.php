@extends('layouts.app')

@section('content')
    <div class="page-header d-flex justify-content-center align-items-center">
        <h2 class="pt-5 mt-4 text-white fw-bold">MAMUN'S PROJECTS</h2>
    </div>

    {{-- Projects section started --}}
    <div class="py-5 skills" id="projects">
        <div class="container">
            <div class="flex-wrap d-flex">

                @foreach ($projects as $project)
                    <div class="p-2 col-lg-4 col-md-6">
                        <div class="card project-card w-100 h-100">
                            <img src="{{ asset('images/project_thumbnails/' . $project->thumbnail) }}" class="card-img-top"
                                alt="...">

                            <div class="card-header">
                                <h5 class="card-title">{{ $project->title }}</h5>
                                <h6 class="mb-2">{{ $project->subtitle }}</h6>
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{ $project->description }}</p>
                            </div>
                            <div class="pb-3 card-footer text-end">
                                <a href="{{ $project->github_link }}" class="btn btn-dark me-1" target="blank">Github</a>
                                <a href="{{ $project->live_link }}" class="btn btn-primary" target="blank">Live Project</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    {{-- Projects section ended --}}
@endsection
