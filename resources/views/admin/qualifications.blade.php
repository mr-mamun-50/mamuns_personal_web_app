@extends('admin.layouts.app')
@section('title')
    Qualifications
@endsection
<?php $menu = 'qualifications';
$submenu = ''; ?>

@section('content')
    <div class="card">
        <div class="card-header bg-default text-dark py-2 px-4 d-flex justify-content-between align-items-center">
            <b>My Qualifications</b>
        </div>
        <div class="card-body table-responsive">

            <table class="table table-bordered table-striped" id="myDataTable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Qualification</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($qualifications as $qualification)
                        <tr>
                            <td>{{ $qualification->name }}</td>
                            <td> @php
                                echo $qualification->qualifications;
                            @endphp </td>

                            <td>
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-primary mr-1 py-1 pb-0 pl-1 pr-0" data-toggle="modal"
                                        data-target="#{{ 'editqualification' . $qualification->id }}"><i
                                            class="bi bi-pencil-square"></i></button>

                                    <form action=" {{ route('qualifications.destroy', $qualification->id) }} "
                                        method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger delete py-1 pb-0 pl-1 pr-0"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>



                        <!-- Modal for edit qualification -->
                        <div class="modal fade" id="{{ 'editqualification' . $qualification->id }}" data-backdrop="static"
                            data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-default text-dark rounded">
                                        <h6 class="modal-title" id="staticBackdropLabel">Edit {{ $qualification->name }}
                                        </h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <form action="{{ route('qualifications.update', $qualification->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="_method" value="put">

                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label for="">Name</label>
                                                <input class="form-control" readonly name="qualification_link"
                                                    value="{{ $qualification->name }}" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="">qualification Youtube Link</label>
                                                <textarea name="qualifications" class="summernote" required>{{ $qualification->qualifications }}</textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn hor-grd btn-grd-primary">Update
                                                Qualification</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
