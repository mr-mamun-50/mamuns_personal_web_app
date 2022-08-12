@extends('admin.layouts.app')
@section('title')
    Dashboard
@endsection
<?php $menu = 'dashboard';
$submenu = ''; ?>

@php
$skills = DB::table('skills')->get();
$projects = DB::table('projects')->get();
$videos = DB::table('videos')->get();
$messages = DB::table('messages')->get();
@endphp

@section('content')
    <div class="page-body">
        <div class="row">

            <!-- order-card start -->
            <div class="col-md-6 col-xl-3">
                <div class="card bg-c-blue order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Skills</h6>
                        <h2 class="text-right"><i
                                class="fas fa-lightbulb f-left"></i><span>{{ $skills->where('visibility', 1)->count() }}</span>
                        </h2>
                        <p class="m-b-0">Private<span class="f-right">{{ $skills->where('visibility', 0)->count() }}</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card bg-c-green order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Projects</h6>
                        <h2 class="text-right"><i
                                class="fas fa-splotch f-left"></i><span>{{ $projects->where('visibility', 1)->count() }}</span>
                        </h2>
                        <p class="m-b-0">Private<span
                                class="f-right">{{ $projects->where('visibility', 0)->count() }}</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card bg-c-yellow order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Videos</h6>
                        <h2 class="text-right"><i
                                class="fas fa-video f-left"></i><span>{{ $videos->where('visibility', 1)->count() }}</span>
                        </h2>
                        <p class="m-b-0">Private<span class="f-right">{{ $videos->where('visibility', 0)->count() }}</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card bg-c-pink order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Messages</h6>
                        <h2 class="text-right"><i
                                class="fas fa-comment-dots f-left"></i><span>{{ $messages->count() }}</span>
                        </h2>
                        <p class="m-b-0"><span class="text-danger">.</span></p>
                    </div>
                </div>
            </div>
            <!-- order-card end -->

            <!-- statustic and process start -->
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Statistics</h5>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa fa-chevron-left"></i></li>
                                <li><i class="fa fa-window-maximize full-card"></i>
                                </li>
                                <li><i class="fa fa-minus minimize-card"></i></li>
                                <li><i class="fa fa-refresh reload-card"></i></li>
                                <li><i class="fa fa-times close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block">
                        {{-- <canvas id="Statistics-chart" height="200"></canvas> --}}
                        <div id="columnchart_material" style="width: 100%; height: 225px;"></div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Article Comments</h5>
                    </div>
                    <div class="card-block">
                        <div id="piechart_3d" style="width: 100%; height: 225px;"></div>

                    </div>
                </div>
            </div>
            <!-- statustic and process end -->
            <!-- tabs card start -->
            <div class="col-sm-12">
                <div class="card tabs-card">
                    <div class="card-block p-0">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs md-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home3" role="tab"><i
                                        class="fa fa-home"></i>Users</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#profile3" role="tab"><i
                                        class="fa fa-key"></i>Admins</a>
                                <div class="slide"></div>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content card-block">
                            <div class="tab-pane active" id="home3" role="tabpanel">

                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" id="example1">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="profile3" role="tabpanel">

                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" id="example1">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tabs card end -->

        </div>
    </div>
@endsection




{{-- <x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-admin-layout> --}}
