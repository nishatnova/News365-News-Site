@extends('admin.master')

@section('title')
    Edit Blog
@endsection

@section('body')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header"><h4>Edit Blog</h4></div>
                <div class="card-body">
                    <h3 class="text-success text-center">{{session('message')}}</h3>
                    <form action="{{route('blog.update', ['id' => $blog->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-md-3">Category</label>
                            <div class="col-md-9">
                                <select class="form-control" name="category_id">
                                    <option value="">---Select Category---</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{$blog->category_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3">Blog Title</label>
                            <div class="col-md-9">
                                <input type="text" name="title" value="{{$blog->title}}" class="form-control"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3">Blog Description</label>
                            <div class="col-md-9">
                                <textarea name="description" class="form-control summernote">{!! $blog->description !!}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Blog Image</label>
                            <div class="col-md-9">
                                <input type="file" name="image" class="form-control-file"/>
                                <img src="{{asset($blog->image)}}" alt="" height="100" width="120"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3">Publication Status</label>
                            <div class="col-md-9">
                                <label><input type="radio" {{$blog->status == 1 ? 'checked' : ''}} name="status" value="1"/>Published</label>
                                <label><input type="radio" {{$blog->status == 0 ? 'checked' : ''}} name="status" value="0"/>Unpublished</label>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-primary" value="Update Blog"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Vixon.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection


