@extends('website.master')

@section('title', 'change-password');

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
                        <h3 class="category-headding ">Change Password</h3>
                        <div class="headding-border bg-color-1"></div>
                        <h4 class="text-center text-danger">{{session('message')}}</h4>
                        <form action="{{route('user-login')}}" method="POST">
                            @csrf
                            <label>Current Password <sup>*</sup></label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Whats your password now!">

                            <label>New Password <sup>*</sup></label>
                            <input type="password" class="form-control" id="n-password" name="password" placeholder="The Password you want">

                            <label>Confirm New Password <sup>*</sup></label>
                            <input type="password" class="form-control" id="n-password" name="password" placeholder="Repeat the password you want">
                            <label class="checkbox-inline">
                               </label>
                            <button type="submit" class="btn btn-style">Change</button>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection



