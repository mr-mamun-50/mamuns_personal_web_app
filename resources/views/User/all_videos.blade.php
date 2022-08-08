@extends('layouts.app')

@section('content')
    <div class="page-header d-flex justify-content-center align-items-center">
        <h2 class="pt-5 text-white fw-bold">MAMUN'S YOUTUBE VIDEOS</h2>
    </div>

    {{-- videos section started --}}
    <div class="skills py-5" id="videos">
        <div class="container">
            <div class="d-flex flex-wrap">

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
        </div>
    </div>
    {{-- videos section ended --}}
@endsection
