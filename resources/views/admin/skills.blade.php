@extends('admin.layouts.app')
@section('title')
    Skills
@endsection
<?php $menu = 'Skills';
$submenu = ''; ?>

@section('content')
    <div class="card">
        <div class="card-header bg-default text-dark py-2 px-4 d-flex justify-content-between align-items-center">
            <b>My Skills</b>
            <!-- Button trigger modal -->
            <button type="button" class="btn hor-grd btn-grd-primary btn-sm" data-toggle="modal" data-target="#staticBackdrop">
                <i class="fas fa-plus"></i> Add Skill
            </button>
        </div>
        <div class="card-body table-responsive">

            <table class="table table-bordered table-striped" id="myDataTable">
                <thead>
                    <tr>
                        <th>Position</th>
                        <th>Logo</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Type</th>
                        <th>Visibility</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($skills as $skill)
                        <tr>
                            <td>{{ $skill->position }}</td>
                            <td>
                                <img src="{{ asset('public/images/skill_logos/' . $skill->logo) }}" alt=""
                                    style="width: 50px">
                            </td>
                            <td>{{ $skill->name }}</td>
                            <td>{{ $skill->category }}</td>
                            <td>{{ $skill->type }}</td>
                            <td>
                                @if ($skill->visibility)
                                    <span class="badge badge-success">Public</span>
                                @else
                                    <span class="badge badge-warning">Private</span>
                                @endif
                            </td>

                            <td>
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-primary mr-1 py-1 pb-0 pl-1 pr-0"
                                        data-toggle="modal" data-target="#{{ 'editSkill' . $skill->id }}"><i
                                            class="bi bi-pencil-square"></i></button>

                                    <form action=" {{ route('skills.destroy', $skill->id) }} " method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger delete py-1 pb-0 pl-1 pr-0"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>



                        <!-- Modal for edit skill -->
                        <div class="modal fade" id="{{ 'editSkill' . $skill->id }}" data-backdrop="static"
                            data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-default text-dark rounded">
                                        <h5 class="modal-title" id="staticBackdropLabel">Edit {{ $skill->name }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <form action="{{ route('skills.update', $skill->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="_method" value="put">

                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label for="name">Skill Name</label>
                                                <input class="form-control" type="text" name="name"
                                                    value="{{ $skill->name }}" required>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Category</label>
                                                        <select name="category" class="form-control" required>
                                                            <option value="web_dev"
                                                                @if ($skill->category == 'web_dev') selected @endif>Full-Stack
                                                                Web Development</option>
                                                            <option value="mobile_dev"
                                                                @if ($skill->category == 'mobile_dev') selected @endif>Mobile App
                                                                Development</option>
                                                            <option value="programming_languages"
                                                                @if ($skill->category == 'programming_languages') selected @endif>
                                                                Programming Languages
                                                            </option>
                                                            <option value="graphic_design"
                                                                @if ($skill->category == 'graphic_design') selected @endif>Graphic
                                                                Design</option>
                                                            <option value="office_softwares"
                                                                @if ($skill->category == 'office_softwares') selected @endif>Office
                                                                Softwares</option>
                                                            <option value="other_skills"
                                                                @if ($skill->category == 'other_skills') selected @endif>Other
                                                                Skills</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Type</label>
                                                        <select name="type" class="form-control" required>
                                                            <option value="front_end"
                                                                @if ($skill->type == 'front_end') selected @endif>Front-End
                                                            </option>
                                                            <option value="back_end"
                                                                @if ($skill->type == 'back_end') selected @endif>Back-End
                                                            </option>
                                                            <option value="database"
                                                                @if ($skill->type == 'database') selected @endif>Database
                                                            </option>
                                                            <option value="other"
                                                                @if ($skill->type == 'other') selected @endif>Other
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="logo">Logo</label>
                                                        <input class="form-control" type="file" name="logo">
                                                        <input type="hidden" name="old_logo" value="{{ $skill->logo }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Position</label>
                                                        <input class="form-control" type="number" name="position"
                                                            value="{{ $skill->position }}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="visibility"
                                                        value="1" @if ($skill->visibility) checked @endif>
                                                    Publish now
                                                </label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn hor-grd btn-grd-primary">Update
                                                Skill</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Modal for add skill -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-default text-dark rounded">
                        <h5 class="modal-title" id="staticBackdropLabel">Add New Skill</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="{{ route('skills.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="name">Skill Name</label>
                                <input class="form-control @error('name') is-invalid @enderror" type="text"
                                    name="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Category</label>
                                        <select name="category" class="form-control" required>
                                            <option value="web_dev">Full-Stack Web Development</option>
                                            <option value="mobile_dev">Mobile App Development</option>
                                            <option value="programming_languages">Programming Languages</option>
                                            <option value="graphic_design">Graphic Design</option>
                                            <option value="office_softwares">Office Softwares</option>
                                            <option value="other_skills">Other Skills</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Type</label>
                                        <select name="type" class="form-control" required>
                                            <option value="front_end">Front-End</option>
                                            <option value="back_end">Back-End</option>
                                            <option value="database">Database</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="logo">Logo</label>
                                        <input class="form-control @error('logo') is-invalid @enderror" type="file"
                                            name="logo" value="{{ old('logo') }}" required>
                                        @error('logo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Position</label>
                                        <input class="form-control @error('position') is-invalid @enderror"
                                            type="number" name="position" value="{{ old('position') }}" required>
                                        @error('position')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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
                            <button type="submit" class="btn hor-grd btn-grd-primary">Add Skill</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
