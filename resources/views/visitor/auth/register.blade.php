@extends('website.master')

@section('title', 'Login Page')

@section('body')


    <section class="block-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Login & Registration</h1>
                    <div class="breadcrumbs">
                        <ul>
                            <li><i class="pe-7s-home"></i> <a href="" title="">Home</a></li>
                            <li><a href="#" title="">Login & Registration</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="login-reg-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="login-form-inner">
                        <h3 class="category-headding ">LOGIN TO YOUR ACCOUNT</h3>
                        <div class="headding-border bg-color-1"></div>
                        <h4 class="text-center text-danger">{{session('message')}}</h4>
                        <form action="{{route('user-login')}}" method="POST">
                            @csrf
                            <label>Email Address <sup>*</sup></label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Your Email">
                            <label>Password <sup>*</sup></label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="">
                            <label class="checkbox-inline">
                                <input type="checkbox" value="">Remember me</label>
                            <button type="submit" class="btn btn-style">Login</button>
                            <div class="foeget"><a href="#">Forget username/password?</a></div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="social_icon">
                                        <div class="social_icon_box social_icon_box_1">
                                            <div class="icon facebook-icon"></div>
                                            <span class="social_info">Login with facebook</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="social_icon">
                                        <div class="social_icon_box social_icon_box_2">
                                            <div class="icon twitter-icon"></div>
                                            <span class="social_info">Login with twitter</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

                <div class="col-sm-6">

                    <div class="register-form-inner">
                        <h3 class="category-headding ">REGISTER NOW!</h3>
                        <div class="headding-border bg-color-1"></div>
                        <form action="{{route('user-register')}}" method="POST">
                            @csrf
                            <label>Full Name<sup>*</sup></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                            <label>Email Address<sup>*</sup></label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Your Email Address">
                            <label>Password <sup>*</sup></label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Write Your Password Here ...">
                            <label>Repeat Password <sup>*</sup></label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Rewrite Your Password Here ...">
                            <button type="submit" class="btn btn-style">Register Now!</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection


