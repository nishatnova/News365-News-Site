@extends('website.master')

@section('title', 'comment')

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">

                    <div class="list-group">
                        <a href="{{route('my-dashboard')}}" class="list-group-item">My Dashboard</a>
                        <a href="{{route('my-profile')}}" class="list-group-item">My Profile</a>
                        <a href="{{route('my-comment')}}" class="list-group-item">My Comment</a>
                        <a href="{{route('change-password')}}" class="list-group-item">Change Password</a>
                        <a href="{{route('user-logout')}}" class="list-group-item">Logout</a>
                    </div>

                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Comments</h5>
                        </div>
                        <div class="card-body">
                            <h3 class="text-center text-success">{{session('message')}}</h3>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Blog Title</th>
                                        <th>Comment</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <a href="" class="btn btn-success btn-sm">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection




