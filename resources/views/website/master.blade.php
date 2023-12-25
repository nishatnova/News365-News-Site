<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}website/images/fev-icon.png" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('/')}}website/css/bootstrap.min.css">
    <!-- Scrollbar css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/css/jquery.mCustomScrollbar.css" />
    <!-- Owl Carousel css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/owl-carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/owl-carousel/owl.theme.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/owl-carousel/owl.transitions.css" />
    <!-- youtube css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/css/RYPP.css" />
    <!-- jquery-ui css -->
    <link rel="stylesheet" href="{{asset('/')}}website/css/jquery-ui.css">
    <!-- animate -->
    <link rel="stylesheet" href="{{asset('/')}}website/css/animate.min.css">
    <!-- fonts css -->
    <link rel="stylesheet" href="{{asset('/')}}website/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/css/Pe-icon-7-stroke.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/css/flaticon.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('/')}}website/css/style.css">
</head>

<body>
<div class="se-pre-con"></div>
<header>
    <!-- Mobile Menu Start -->
    <div class="mobile-menu-area navbar-fixed-top hidden-sm hidden-md hidden-lg">
        <nav class="mobile-menu" id="mobile-menu">
            <div class="sidebar-nav">
                <ul class="nav side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                        <button class="btn mobile-menu-btn" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>
                        <a href="#">All pages<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Home <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a href="{{route('home')}}">Home </a> </li>

                                </ul>
                                <!-- /.nav-third-level -->
                            </li>
                            <li>
                                <a href="#">Categories <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a href="{{route('blog-category', ['id' => 1])}}">Category style one</a> </li>
                                    <li><a href="{{route('blog-category', ['id' => 1])}}">Category style two</a></li>
                                    <li><a href="{{route('blog-category', ['id' => 1])}}">Category style three</a></li>
                                </ul>
                                <!-- /.nav-third-level -->
                            </li>
                            <li>
                                <a href="#">Archive <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a href="archive-one.html">Archive style one</a> </li>
                                    <li><a href="archive-two.html">Archive style two</a></li>
                                </ul>
                                <!-- /.nav-third-level -->
                            </li>
                            <li>
                                <a href="#">News <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a href="">Blog post</a> </li>

                                </ul>
                                <!-- /.nav-third-level -->
                            </li>
                            <li>
                                <a href="#">Contact <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a href="contact-style-one.html">Contact style one</a> </li>
                                    <li><a href="contact-style-two.html">Contact style two</a></li>
                                </ul>
                                <!-- /.nav-third-level -->
                            </li>
                            <li><a href="login%26registration.html">Login & Registration</a></li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li><a href="#">Fashion</a></li>
                    <li><a href="#">Travel</a></li>
                    <li><a href="#">Food</a></li>
                    <li><a href="#">Technology</a></li>
                    <li><a href="#">Lifestyle</a></li>
                    <li>
                        <a href="#">Contact<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="contact-style-one.html">Contact style one</a> </li>
                            <li><a href="contact-style-two.html">Contact style two</a></li>
                        </ul>
                    </li>
                    <!-- social icon -->
                    <li>
                        <div class="social">
                            <ul>
                                <li><a href="#" class="facebook"><i class="fa  fa-facebook"></i> </a></li>
                                <li><a href="#" class="twitter"><i class="fa  fa-twitter"></i></a></li>
                                <li><a href="#" class="google"><i class="fa  fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="top_header_icon">
                    <span class="top_header_icon_wrap">
                            <a target="_blank" href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                        </span>
                <span class="top_header_icon_wrap">
                            <a target="_blank" href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                        </span>
                <span class="top_header_icon_wrap">
                            <a target="_blank" href="#" title="Google"><i class="fa fa-google-plus"></i></a>
                        </span>
                <span class="top_header_icon_wrap">
                            <a target="_blank" href="#" title="Vimeo"><i class="fa fa-vimeo"></i></a>
                        </span>
                <span class="top_header_icon_wrap">
                            <a target="_blank" href="#" title="Pintereset"><i class="fa fa-pinterest-p"></i></a>
                        </span>
            </div>
            <div id="showLeft" class="nav-icon">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- Mobile Menu End -->
    <!-- top header -->
    <div class="top_header hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-3">
                    <div class="top_header_menu_wrap">
                        <ul class="top-header-menu">
                            @if(Session::get('visitor_id'))
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Session::get('visitor_name')}}</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{route('my-dashboard')}}">My Dashboard</a> </li>
                                        <hr>
                                        <li><a href="{{route('user-logout')}}">Logout</a> </li>
                                    </ul>
                                </li>
                            @else
                                <li class="">
                                    <a href="{{route('user-login')}}" >LOGIN</a>

                                </li>
                                <li><a href="{{route('user-register')}}">REGISTER</a></li>
                            @endif

                        </ul>
                    </div>
                </div>
                <!--breaking news-->
                <div class="col-sm-8 col-md-7">
                    <div class="newsticker-inner">
                        <ul class="newsticker">
                            <li><span class="color-1">Fashion</span><a href="#">Etiam imperdiet volutpat libero eu tristique.imperdiet volutpat libero eu tristique.</a></li>
                            <li><span class="color-2">International</span><a href="#">Curabitur porttitor ante eget hendrerit adipiscing.</a></li>
                            <li><span class="color-3">Health</span><a href="#">Praesent ornare nisl lorem, ut condimentum lectus gravida ut.</a></li>
                            <li><span class="color-4">technology</span><a href="#">Nunc ultrices tortor eu massa placerat posuere.</a></li>
                            <li><span class="color-1">Travel</span><a href="#">Etiam imperdiet volutpat libero eu tristique.imperdiet volutpat libero eu tristique.</a></li>
                        </ul>
                        <div class="next-prev-inner">
                            <a href="#" id="prev-button"><i class='pe-7s-angle-left'></i></a>
                            <a href="#" id="next-button"><i class='pe-7s-angle-right'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-2">
                    <div class="top_header_icon">
                            <span class="top_header_icon_wrap">
                                    <a target="_blank" href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                                </span>
                        <span class="top_header_icon_wrap">
                                    <a target="_blank" href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                                </span>
                        <span class="top_header_icon_wrap">
                                    <a target="_blank" href="#" title="Google"><i class="fa fa-google-plus"></i></a>
                                </span>
                        <span class="top_header_icon_wrap">
                                    <a target="_blank" href="#" title="Vimeo"><i class="fa fa-vimeo"></i></a>
                                </span>
                        <span class="top_header_icon_wrap">
                                    <a target="_blank" href="#" title="Pintereset"><i class="fa fa-pinterest-p"></i></a>
                                </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="top_banner_wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4 col-sm-4">
                    <div class="header-logo">
                        <!-- logo -->
                        <a href="{{route('home')}}">
                            <img class="td-retina-data img-responsive" src="{{asset('/')}}website/images/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xs-8 col-md-8 col-sm-8 hidden-xs">
                    <div class="header-banner">
                        <a href="#"><img class="td-retina img-responsive" src="{{asset('/')}}website/images/top-bannner.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- navber -->
    <div class="container hidden-xs">
        <nav class="navbar">
            <div class="collapse navbar-collapse col-lg-8 col-md-6 col-sm-6">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{route('home')}}" class="category01">HOME</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle category02" data-toggle="dropdown">ALL PAGES <span class="pe-7s-angle-down"></span></a>
                        <ul class="dropdown-menu menu-slide">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="dropdown-submenu"><a href="#">Categories</a>
                                <ul class="dropdown-menu zoomIn">
                                    @foreach($categoriess as $category)
                                    <li><a href="">{{$category->name}}</a></li>
                                    @endforeach

                                </ul>
                            </li>
                            <li class="dropdown-submenu"><a href="#">Archive</a>
                                <ul class="dropdown-menu zoomIn">
                                    <li><a href="archive-one.html">Archive style one</a></li>
                                    <li><a href="archive-two.html">Archive style two</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu"><a href="#">Blogs</a>
                                <ul class="dropdown-menu zoomIn">
                                    <li><a href="">Blog one</a></li>

                                </ul>
                            </li>
                            <li><a href="contact-style-one.html">Contact</a> </li>
                            <li><a href="login%26registration.html">Login & Registration</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle category03" data-toggle="dropdown">BLOGS <span class="pe-7s-angle-down"></span></a>
                        <ul class="dropdown-menu menu-slide">
                            @foreach($categoriess as $category)
                                <li><a href="{{route('blog-category', ['id' => $category->id])}}">{{$category->name}}</a></li>
                            @endforeach


                        </ul>
                    </li>
                    @foreach($categoriesss as $category)
                        <li><a href="{{route('blog-category', ['id' => $category->id])}}" class="category04">{{$category->name}}</a></li>
                    @endforeach

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle category09" data-toggle="dropdown">CONTACT <span class="pe-7s-angle-down"></span></a>
                        <ul class="dropdown-menu menu-slide">
                            <li><a href="contact-style-one.html">Contact style one</a> </li>
                            <li><a href="contact-style-two.html">Contact style two</a></li>
                        </ul>
                    </li>
                </ul>


            </div>

            <div class="col-lg-1 col-md-3 col-sm-3"></div>


            <div class="collapse navbar-collapse col-lg-3 col-md-3 col-sm-3">
                <ul class="nav navbar-nav">

                    @if(Session::get('visitor_id'))
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Session::get('visitor_name')}}</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('my-dashboard')}}">My Dashboard</a> </li>
                                <hr>
                                <li><a href="{{route('user-logout')}}">Logout</a> </li>
                            </ul>
                        </li>
                    @else

                        <li>
                            <a href="{{route('user-login')}}" class="">LOGIN</a>

                        </li>
                        <li>
                            <a href="{{route('user-register')}}" class="">REGISTER</a>

                        </li>
                    @endif

                </ul>
            </div>


            <!-- navbar-collapse -->
        </nav>
    </div>
</header>
@yield('body')
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="footer-box">
                    <h3 class="category-headding">POPULAR TAGS</h3>
                    <div class="headding-border"></div>
                    <a class="tag" href="#" title="">EDUCATION</a>
                    <a class="tag" href="#" title="">FASHION</a>
                    <a class="tag" href="#" title="">CREATIVE</a>
                    <a class="tag" href="#" title="">CMS</a>
                    <a class="tag" href="#" title="">ENTERTAINMENT</a>
                    <a class="tag" href="#" title="">TECHNOLOGY</a>
                    <a class="tag" href="#" title="">COLLAGE</a>
                    <a class="tag" href="#" title="">CULTURE</a>
                    <a class="tag" href="#" title="">BLOG</a>
                    <a class="tag" href="#" title="">BUSINESS</a>
                    <a class="tag" href="#" title="">MUSIC</a>
                    <div class="newsletter-inner">
                        <!-- newsletter -->
                        <h3 class="category-headding ">NEWSLETTER</h3>
                        <div class="headding-border"></div>
                        <p>Enter your email address for our mailing list!</p>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        <button type="button" class="btn btn-style">Subscribe</button>
                    </div>
                    <!-- /.newsletter -->
                </div>
            </div>
            <div class="col-sm-4">
                <div class="footer-box">
                    <!-- featured news -->
                    <h3 class="category-headding ">FEATURED NEWS</h3>
                    <div class="headding-border bg-color-2"></div>
                    <div class="box-item wow fadeIn" data-wow-duration="2s">
                        <div class="img-thumb">
                            <a href="#" rel="bookmark"><img class="entry-thumb" src="{{asset('/')}}website/images/popular_news_01.jpg" alt="" height="80" width="100"></a>
                        </div>
                        <div class="item-details">
                            <h6 class="sub-category-title bg-color-1">
                                <a href="#">SPORTS</a>
                            </h6>
                            <h3 class="td-module-title"><a href="#">It is a long established fact that a reader will</a></h3>
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                        <div class="img-thumb">
                            <a href="#" rel="bookmark"><img class="entry-thumb" src="{{asset('/')}}website/images/popular_news_02.jpg" alt="" height="80" width="100"></a>
                        </div>
                        <div class="item-details">
                            <h6 class="sub-category-title bg-color-2">
                                <a href="#">TECHNOLOGY </a>
                            </h6>
                            <h3 class="td-module-title"><a href="#">The generated Lorem Ipsum is therefore</a></h3>
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                        <div class="img-thumb">
                            <a href="#" rel="bookmark"><img class="entry-thumb" src="{{asset('/')}}website/images/popular_news_03.jpg" alt="" height="80" width="100"></a>
                        </div>
                        <div class="item-details">
                            <h6 class="sub-category-title bg-color-3">
                                <a href="#">HEALTH</a>
                            </h6>
                            <h3 class="td-module-title"><a href="#">The standard chunk of Lorem Ipsum used since</a></h3>
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.featured news -->
            </div>
            <div class="col-sm-4">
                <div class="footer-box">
                    <!-- top rated  -->
                    <h3 class="category-headding">TOP RATED</h3>
                    <div class="headding-border bg-color-3"></div>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </td>
                            <td><a href="#">This is FINLAND</a></td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-o"></i>
                            </td>
                            <td><a href="#">Public Storage Canada</a></td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </td>
                            <td><a href="#">Bloomberg Professional</a></td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </td>
                            <td><a href="#">Ringling Bros. and </a></td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </td>
                            <td><a href="#">The Official Star Wars Blog</a></td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </td>
                            <td><a href="#">US Air Force General Chuck Yeager</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.top rated  -->
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3">
                <div class="footer-box footer-logo-address">
                    <!-- address  -->
                    <img src="{{asset('/')}}website/images/footer-logo.png" class="img-responsive" alt="">
                    <address>
                        14L.E Goulburn St, Sydney 2000NSW
                        <br> Tell: 01922296392
                        <br> Email: bdtask@gmail.com
                    </address>
                </div>
                <!-- /.address  -->
            </div>
            <div class="col-sm-3">
                <div class="footer-box">
                    <h3 class="category-headding">categories</h3>
                    <div class="headding-border bg-color-4"></div>
                    <ul>
                        <li><i class="fa fa-dot-circle-o"></i><a href="#">Newsletter</a></li>
                        <li><i class="fa fa-dot-circle-o"></i><a href="#">Pressroom</a></li>
                        <li><i class="fa fa-dot-circle-o"></i><a href="#">Advertise online</a></li>
                        <li><i class="fa fa-dot-circle-o"></i><a href="#">Language</a></li>
                        <li><i class="fa fa-dot-circle-o"></i><a href="#">Being Part</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="footer-box">
                    <h3 class="category-headding">POPULAR CATEGORY</h3>
                    <div class="headding-border bg-color-5"></div>
                    <ul>
                        <li><i class="fa fa-dot-circle-o"></i><a href="#">Digital Edition</a></li>
                        <li><i class="fa fa-dot-circle-o"></i><a href="#">Site Map</a></li>
                        <li><i class="fa fa-dot-circle-o"></i><a href="#">About Ads</a></li>
                        <li><i class="fa fa-dot-circle-o"></i><a href="#">Give a Gift</a></li>
                        <li><i class="fa fa-dot-circle-o"></i><a href="#">About Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="footer-box">
                    <h3 class="category-headding ">POPULAR CATEGORY</h3>
                    <div class="headding-border"></div>
                    <ul>
                        <li><i class="fa fa-dot-circle-o"></i><a href="#">Newsletter</a></li>
                        <li><i class="fa fa-dot-circle-o"></i><a href="#">Pressroom</a></li>
                        <li><i class="fa fa-dot-circle-o"></i><a href="#">Advertise online</a></li>
                        <li><i class="fa fa-dot-circle-o"></i><a href="#">Language</a></li>
                        <li><i class="fa fa-dot-circle-o"></i><a href="#">Being Part</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="sub-footer">
    <!-- sub footer -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p><a href="#" class="color-1">bdtask</a> Theme | All right Reserved 2016</p>
                <div class="social">
                    <ul>
                        <li><a href="#" class="facebook"><i class="fa  fa-facebook"></i> </a></li>
                        <li><a href="#" class="twitter"><i class="fa  fa-twitter"></i></a></li>
                        <li><a href="#" class="google"><i class="fa  fa-google-plus"></i></a></li>
                        <li><a href="#" class="flickr"><i class="fa fa-flickr"></i></a></li>
                        <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#" class="vimeo"><i class="fa fa-vimeo"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.sub footer -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="{{asset('/')}}website/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="{{asset('/')}}website/js/bootstrap.min.js"></script>
<!-- Metis Menu Plugin JavaScript -->
<script type="text/javascript" src="{{asset('/')}}website/js/metisMenu.min.js"></script>
<!-- Scrollbar js -->
<script type="text/javascript" src="{{asset('/')}}website/js/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- animate js -->
<script type="text/javascript" src="{{asset('/')}}website/js/wow.min.js"></script>
<!-- Newstricker js -->
<script type="text/javascript" src="{{asset('/')}}website/js/jquery.newsTicker.js"></script>
<!--  classify JavaScript -->
<script type="text/javascript" src="{{asset('/')}}website/js/classie.js"></script>
<!-- owl carousel js -->
<script type="text/javascript" src="{{asset('/')}}website/owl-carousel/owl.carousel.js"></script>
<!-- youtube js -->
<script type="text/javascript" src="{{asset('/')}}website/js/RYPP.js"></script>
<!-- jquery ui js -->
<script type="text/javascript" src="{{asset('/')}}website/js/jquery-ui.js"></script>
<!-- form -->
<script type="text/javascript" src="{{asset('/')}}website/js/form-classie.js"></script>
<!-- custom js -->
<script type="text/javascript" src="{{asset('/')}}website/js/custom.js"></script>
</body>


</html>

