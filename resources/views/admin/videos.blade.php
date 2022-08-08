@extends('admin.layouts.app')
@section('title')
    Videos
@endsection
<?php $menu = 'videos';
$submenu = ''; ?>

@section('content')
    <div class="card">
        <div class="card-header bg-default text-dark py-2 px-4 d-flex justify-content-between align-items-center">
            <b>My videos</b>
            <!-- Button trigger modal -->
            <button type="button" class="btn hor-grd btn-grd-primary btn-sm" data-toggle="modal" data-target="#staticBackdrop">
                <i class="fas fa-plus"></i> Add video
            </button>
        </div>
        <div class="card-body table-responsive">

            <table class="table table-bordered table-striped" id="myDataTable">
                <thead>
                    <tr>
                        <th>Position</th>
                        <th>Preview</th>
                        <th>Title</th>
                        <th>Visibility</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($videos as $video)
                        <tr>
                            <td>{{ $video->position }}</td>
                            <td>
                                <iframe width="320" height="180"
                                    src="https://www.youtube.com/embed/{{ $video->video_link }}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </td>
                            <td>
                                {{ $video->title }}
                                <div class="small text-muted">{{ date('d F, Y | h:i A', strtotime($video->post_date)) }}
                                </div>
                            </td>
                            <td>
                                @if ($video->visibility)
                                    <span class="badge badge-success">Public</span>
                                @else
                                    <span class="badge badge-warning">Private</span>
                                @endif
                            </td>

                            <td>
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-primary mr-1 py-1 pb-0 pl-1 pr-0"
                                        data-toggle="modal" data-target="#{{ 'editvideo' . $video->id }}"><i
                                            class="bi bi-pencil-square"></i></button>

                                    <form action=" {{ route('videos.destroy', $video->id) }} " method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger delete py-1 pb-0 pl-1 pr-0"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>



                        <!-- Modal for edit video -->
                        <div class="modal fade" id="{{ 'editvideo' . $video->id }}" data-backdrop="static"
                            data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-default text-dark rounded">
                                        <h6 class="modal-title" id="staticBackdropLabel">Edit {{ $video->title }}</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <form action="{{ route('videos.update', $video->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="_method" value="put">

                                        <div class="modal-body">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">Video Title</label>
                                                        <input class="form-control" type="text" name="title"
                                                            value="{{ $video->title }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Position</label>
                                                        <input class="form-control" type="number" name="position"
                                                            value="{{ $video->position }}" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Video Youtube Link</label>
                                                <input class="form-control" type="text" name="video_link"
                                                    value="{{ $video->video_link }}" required>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="visibility"
                                                        @if ($video->visibility) checked @endif value="1">
                                                    Publish now
                                                </label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn hor-grd btn-grd-primary">Update
                                                video</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Modal for add video -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-default text-dark rounded">
                        <h5 class="modal-title" id="staticBackdropLabel">Add New Video</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="{{ route('videos.store') }}" method="post">
                        @csrf
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Video Title</label>
                                        <input class="form-control" type="text" name="title" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Position</label>
                                        <input class="form-control" type="number" name="position" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Video Youtube Link</label>
                                <input class="form-control" type="text" name="video_link" required>
                            </div>

                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="visibility" value="1">
                                    Publish now
                                </label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn">Reset</button>
                            <button type="submit" class="btn hor-grd btn-grd-primary">Add Video</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
