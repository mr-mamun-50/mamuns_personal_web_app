@extends('admin.layouts.app')
@section('title')
    projects
@endsection
<?php $menu = 'Projects';
$submenu = ''; ?>

@section('content')
    <div class="card">
        <div class="px-4 py-2 card-header bg-default text-dark d-flex justify-content-between align-items-center">
            <b>My Projects</b>
            <!-- Button trigger modal -->
            <button type="button" class="btn hor-grd btn-grd-primary btn-sm" data-toggle="modal" data-target="#staticBackdrop">
                <i class="fas fa-plus"></i> Add Project
            </button>
        </div>
        <div class="card-body table-responsive">

            <table class="table table-bordered table-striped" id="myDataTable">
                <thead>
                    <tr>
                        <th>Position</th>
                        <th>Thumbnail</th>
                        <th>Title</th>
                        <th>Subtitle</th>
                        <th>Description</th>
                        <th>Visibility</th>
                        <th>Links</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->position }}</td>
                            <td>
                                <img src="{{ asset('images/project_thumbnails/' . $project->thumbnail) }}" alt=""
                                    style="width: 90px">
                            </td>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->subtitle }}</td>
                            <td>{{ $project->description }}</td>
                            <td>
                                @if ($project->visibility)
                                    <span class="badge badge-success">Public</span>
                                @else
                                    <span class="badge badge-warning">Private</span>
                                @endif
                            </td>

                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ $project->github_link }}" class="py-1 pb-0 pl-1 pr-0 mr-1 btn btn-dark"
                                        target="blank"><i class="fab fa-github"></i></a>
                                    <a href="{{ $project->live_link }}" class="py-1 pb-0 pl-1 pr-0 mr-1 btn btn-info"
                                        target="blank"><i class="fas fa-globe"></i></a>
                                </div>
                            </td>

                            <td>
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="py-1 pb-0 pl-1 pr-0 mr-1 btn btn-primary"
                                        data-toggle="modal" data-target="#{{ 'editproject' . $project->id }}"><i
                                            class="bi bi-pencil-square"></i></button>

                                    <form action=" {{ route('projects.destroy', $project->id) }} " method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="py-1 pb-0 pl-1 pr-0 btn btn-danger delete"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>



                        <!-- Modal for edit project -->
                        <div class="modal fade" id="{{ 'editproject' . $project->id }}" data-backdrop="static"
                            data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="rounded modal-header bg-default text-dark">
                                        <h5 class="modal-title" id="staticBackdropLabel">Edit {{ $project->title }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <form action="{{ route('projects.update', $project->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="_method" value="put">

                                        <div class="modal-body">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">Project Title</label>
                                                        <input class="form-control" type="text" name="title"
                                                            value="{{ $project->title }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">Subtitle</label>
                                                        <input class="form-control" type="text" name="subtitle"
                                                            value="{{ $project->subtitle }}" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="logo">Thumbnail</label>
                                                        <input class="form-control" type="file" name="thumbnail">
                                                        <input type="hidden" name="old_thumbnail"
                                                            value="{{ $project->thumbnail }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Position</label>
                                                        <input class="form-control" type="number" name="position"
                                                            value="{{ $project->position }}" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="">Description</label>
                                                <textarea name="description" class="form-control" cols="30" rows="5">{{ $project->description }}</textarea>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Github Link</label>
                                                        <input class="form-control" type="text" name="github_link"
                                                            value="{{ $project->github_link }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Live Project Link</label>
                                                        <input class="form-control" type="text" name="live_link"
                                                            value="{{ $project->live_link }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="visibility"
                                                        @if ($project->visibility) checked @endif value="1">
                                                    Publish now
                                                </label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn hor-grd btn-grd-primary">Update
                                                Project</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Modal for add project -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="rounded modal-header bg-default text-dark">
                        <h5 class="modal-title" id="staticBackdropLabel">Add New Project</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="{{ route('projects.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Project Title</label>
                                        <input class="form-control" type="text" name="title" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Subtitle</label>
                                        <input class="form-control" type="text" name="subtitle" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="logo">Thumbnail</label>
                                        <input class="form-control" type="file" name="thumbnail" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Position</label>
                                        <input class="form-control" type="number" name="position" required>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="">Description</label>
                                <textarea name="description" class="form-control" cols="30" rows="5"></textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Github Link</label>
                                        <input class="form-control" type="text" name="github_link" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Live Project Link</label>
                                        <input class="form-control" type="text" name="live_link">
                                    </div>
                                </div>
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
                            <button type="submit" class="btn hor-grd btn-grd-primary">Add project</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
