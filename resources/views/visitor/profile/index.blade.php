@extends('website.master')

@section('title', 'profile')

@section('body')

    <section class="login-reg-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">

                    <div class="list-group">
                        <a href="{{route('my-dashboard')}}" class="list-group-item">My Dashboard</a>
                        <a href="{{route('my-profile')}}" class="list-group-item">My Profile</a>
                        <a href="{{route('my-comment')}}" class="list-group-item">My Comment</a>
                        <a href="{{route('change-password')}}" class="list-group-item">Change Password</a>
                        <a href="{{route('user-logout')}}" class="list-group-item">Logout</a>
                    </div>

                </div>
                <div class="col-sm-9">

                    <div class="login-form-inner">
                        <h3 class="category-headding ">My Profile</h3>
                        <div class="headding-border bg-color-1"></div>
                        <h4 class="text-center text-danger">{{session('message')}}</h4>
                        <form action="" method="POST">
                            @csrf
                            <label>Full Name <sup>*</sup></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Full Name"/>

                            <label>Profile Picture <sup>*</sup></label>
                            <input type="file" class="form-control-file" id="image" name="image"/>

                            <label>Email <sup>*</sup></label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Your Email"/>
                            <label>Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Your password"/>
                            <label>Phone</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Your Mobile no."/>
                            <label>Date of Birth</label>
                            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" placeholder="Your Birth Date">
                            <label>NID <sup>*</sup></label>
                            <input type="text" class="form-control" id="nid" name="nid" placeholder="Your NID No."/>
                            <label class="checkbox-inline">
                                </label>
                            <button type="submit" class="btn btn-style">Save</button>


                        </form>
                    </div>


                </div>
            </div>
        </div>
    </section>






@endsection



