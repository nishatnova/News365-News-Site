@extends('admin.master')

@section('title')
    Add Category
@endsection

@section('body')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header"><h4>Add Category</h4></div>
                <div class="card-body">
                    <h3 class="text-success text-center">{{session('message')}}</h3>
                    <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-md-3">Category Name</label>
                            <div class="col-md-9">
                                <input type="text" name="name" class="form-control"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Category Description</label>
                            <div class="col-md-9">
                                <textarea name="description" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Category Image</label>
                            <div class="col-md-9">
                                <input type="file" name="image" class="form-control-file"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3">Publication Status</label>
                            <div class="col-md-9">
                                <label><input type="radio" checked name="status" value="1"/>Published</label>
                                <label><input type="radio" name="status" value="0"/>Unpublished</label>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-primary" value="Create New Category"/>
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

