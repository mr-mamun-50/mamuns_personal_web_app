@extends('admin.layouts.app')
@section('title')
    Messages
@endsection
<?php $menu = 'messages';
$submenu = ''; ?>

@section('content')
    <div class="card">
        <div class="card-header bg-default text-dark py-2 px-4 d-flex justify-content-between align-items-center">
            <b>My Messages</b>
        </div>
        <div class="card-body table-responsive">

            <table class="table table-bordered table-striped" id="myDataTable">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $sl => $message)
                        <tr>
                            <td>{{ ++$sl }}</td>
                            <td>
                                {{ $message->name }}
                                <div class="small text-muted">{{ date('d F, Y | h:i A', strtotime($message->msg_date)) }}
                                </div>
                            </td>
                            <td>{{ $message->email }}</td>
                            <td><?php echo $message->message; ?></td>
                            <td>
                                <div class="d-flex justify-content-center">

                                    <button class="btn btn-primary py-1 pb-0 pl-1 pr-0 mr-2" type="button" data-toggle="modal"
                                        data-target="#{{ 'replyMail' . $message->id }}">
                                        <i class="fas fa-reply"></i></button>

                                    <form action=" {{ route('messages.destroy', $message->id) }} " method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger delete py-1 pb-0 pl-1 pr-0"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>


                        <!-- Modal for reply message -->
                        <div class="modal fade" id="{{ 'replyMail' . $message->id }}" data-backdrop="static"
                            data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-default text-dark rounded">
                                        <h5 class="modal-title" id="staticBackdropLabel">Mail to: {{ $message->name }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <form action="{{ route('messages.update', $message->id) }}" method="post"
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
