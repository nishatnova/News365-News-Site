<!doctype html>
<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable" data-bs-theme="light">

<head>

    <meta charset="utf-8">
    <title>Sign In | Vixon - Admin & Dashboard Template</title>
    <meta name="viewport" content="">
    <meta content="" name="description">
    <meta content="" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}admin/assets/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="{{asset('/')}}admin/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('/')}}admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="{{asset('/')}}admin/assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="{{asset('/')}}admin/assets/css/app.min.css" rel="stylesheet" type="text/css">
    <!-- custom Css-->
    <link href="{{asset('/')}}admin/assets/css/custom.min.css" rel="stylesheet" type="text/css">

</head>

<body>
<section class="auth-page-wrapper py-5 position-relative bg-light d-flex align-items-center justify-content-center min-vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="row g-0 align-items-center">
                            <div class="col-xxl-6 mx-auto">
                                <div class="card mb-0 border-0 shadow-none mb-0">
                                    <div class="card-body p-sm-5 m-lg-4">
                                        <div class="text-center mt-5">
                                            <h5 class="fs-3xl">Welcome Back</h5>
                                            <p class="text-muted">Sign in to continue to News365Panel.</p>
                                        </div>
                                        <div class="p-2 mt-5">
                                            <form action="{{route('login')}}" method="post">
                                                @csrf
                                                <div class="mb-3">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon"><i class="ri-user-3-line"></i></span>
                                                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email address">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="position-relative auth-pass-inputgroup overflow-hidden">
                                                        <div class="input-group">
                                                            <span class="input-group-text" id="basic-addon1"><i class="ri-lock-2-line"></i></span>
                                                            <input type="password" name="password" class="form-control pe-5 password-input" placeholder="Enter password" id="password-input">
                                                        </div>
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                    </div>
                                                </div>
                                                <div class="float-end">
                                                    <a href="" class="text-muted">Forgot password?</a>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                                    <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                                </div>
                                                <div class="mt-4">
                                                    <button type="submit" class="btn btn-primary w-100">Sign In</button>
                                                </div>

                                            </form>

                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div>
                            <!--end col-->
                            <div class="col-xxl-5">
                                <div class="card auth-card h-100 border-0 shadow-none d-none d-sm-block mb-0">
                                    <div class="card-body py-5 d-flex justify-content-between flex-column">
                                        <div class="text-center">
                                            <h5 class="text-white">Nice to see you again</h5>
                                            <p class="text-white opacity-75">Enter your details and start your journey with us.</p>
                                        </div>
                                        <div class="auth-effect-main my-5 position-relative rounded-circle d-flex align-items-center justify-content-center mx-auto">
                                            <div class="auth-user-list list-unstyled">
                                                <img src="{{asset('/')}}admin/assets/images/auth/signin.png" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <p class="text-white opacity-75 mb-0 mt-3">
                                                &copy;
                                                <script>document.write(new Date().getFullYear())</script> Vixon. Crafted with <i class="ti ti-heart-filled text-danger"></i> by Themesbrand
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>

<!-- JAVASCRIPT -->
<script src="{{asset('/')}}admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/plugins.js"></script>



<script src="{{asset('/')}}admin/assets/js/pages/password-addon.init.js"></script>

<!--Swiper slider js-->
<script src="{{asset('/')}}admin/assets/libs/swiper/swiper-bundle.min.js"></script>

<!-- swiper.init js -->
<script src="{{asset('/')}}admin/assets/js/pages/swiper.init.js"></script>

</body>

</html>
