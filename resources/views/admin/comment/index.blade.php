@extends('admin.master')

@section('title')
    Manage Comment
@endsection

@section('body')

    <div class="main-content">

        <div class="page-content">


            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Comment Table</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                    <li class="breadcrumb-item active">Comments</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">

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
                                            <th>Visitor Name</th>
                                            <th>Comment</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($comments as $comment)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$comment->blog->title}}</td>
                                                <td>{{$comment->visitor->name}}</td>
                                                <td>{{$comment->comment}}</td>
                                                <td>{{$comment->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                                <td>
                                                    <a href="{{route('comment.update-status',['id' => $comment->id])}}" class="btn {{$comment->status == '1' ? 'btn-success' : 'btn-warning'}} btn-sm">
                                                        <i class="ri-arrow-up-fill"></i>
                                                    </a>
                                                    <a href="" class="btn btn-danger btn-sm">
                                                        <i class="ri-delete-bin-fill align-bottom"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>



@endsection


