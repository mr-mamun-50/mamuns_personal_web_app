@extends('admin.layouts.app')
@section('title')
    Hiring requests
@endsection
<?php $menu = 'hiring_msgs';
$submenu = ''; ?>

@section('content')
    <div class="card">
        <div class="card-header bg-default text-dark py-2 px-4 d-flex justify-content-between align-items-center">
            <b>My Hiring Requests</b>
        </div>
        <div class="card-body table-responsive">

            <table class="table table-bordered table-striped" id="myDataTable">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Website</th>
                        <th>Budget</th>
                        <th>Requirements</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($hiring_msgs as $sl => $hiring_msg)
                        <tr>
                            <td>{{ ++$sl }}</td>
                            <td>
                                {{ $hiring_msg->name }}
                                <div class="small text-muted">{{ date('d F, Y | h:i A', strtotime($hiring_msg->sent_date)) }}
                                </div>
                            </td>
                            <td>{{ $hiring_msg->email }}</td>
                            <td><a href="{{ $hiring_msg->website }}" target="blank">{{ $hiring_msg->website }}</a></td>
                            <td>{{ $hiring_msg->budget }}</td>
                            <td><?php echo $hiring_msg->requirements; ?></td>
                            <td>
                                <div class="d-flex justify-content-center">

                                    <button class="btn btn-primary py-1 pb-0 pl-1 pr-0 mr-2" type="button"
                                        data-toggle="modal" data-target="#{{ 'replyMail' . $hiring_msg->id }}">
                                        <i class="fas fa-reply"></i></button>

                                    <form action=" {{ route('hire-me.destroy', $hiring_msg->id) }} " method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger delete py-1 pb-0 pl-1 pr-0"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>


                        <!-- Modal for reply hiring_msg -->
                        <div class="modal fade" id="{{ 'replyMail' . $hiring_msg->id }}" data-backdrop="static"
                            data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-default text-dark rounded">
                                        <h5 class="modal-title" id="staticBackdropLabel">Mail to: {{ $hiring_msg->name }}
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <form action="{{ route('hire-me.update', $hiring_msg->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="_method" value="put">

                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label for="">Subject</label>
                                                <input type="text" name="subject" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Message</label>
                                                <textarea name="reply_msg" class="summernote"></textarea>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn hor-grd btn-grd-primary">Send Mail</button>
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
