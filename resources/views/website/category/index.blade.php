@extends('website.master')
@section('title')
    Category
@endsection

@section('body')

    <section class="block-inner">
        <div class="container">
            <div class="row">


                <div class="col-sm-12">
                    <h1>{{$blog->category->name}} News</h1>
                    <div class="breadcrumbs">
                        <ul>
                            <li><i class="pe-7s-home"></i> <a href="{{route('home')}}" title="">Home</a></li>
                            <li><a href="#" title="">{{$blog->category->name}}</a></li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                @foreach($blogs as $blog)
                <div class="post-style1">
                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                        <!-- post image -->
                        <a href="{{route('blog-detail', ['id' => $blog->id])}}"><img height="300" width="320" src="{{asset($blog->image)}}" class="" alt=""></a>
                        <div class="post-info meta-info-rn">
                            <div class="slide">
                                <a target="_blank" href="#" class="post-badge btn_eight">{{$blog->category->name}}</a>
                            </div>
                        </div>
                    </div>
                    <!-- post title -->
                    <h4><a href="">{{$blog->title}}</a></h4>
                    <div class="post-title-author-details">
                        <div class="date">
                            <ul>
                                <li><img src="{{asset('/')}}website/images/comment-01.jpg" class="img-responsive" alt=""></li>
                                <li>By<a title="" href="#"><span>Jone Kilna</span></a> --</li>
                                <li><a title="" href="#">11 Nov 2015</a> --</li>
                                <li><a title="" href="#"><span>275 Comments</span></a></li>
                            </ul>
                        </div>
                        <p>“Horses are the opposite of humans. They are loyal, trustworthy, and loving. My father hunted me for a <a href="{{route('blog-detail', ['id' => $blog->id])}}">Read more...</a></p>

                    </div>
                </div>
                @endforeach

            </div>
            <div class="col-sm-4">
                <div class="post-style1">
                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                        <!-- post image -->
                        <a href="#"><img src="{{asset('/')}}website/images/category/category-post-21.jpg" class="img-responsive" alt=""></a>
                        <div class="post-info meta-info-rn">
                            <div class="slide">
                                <a target="_blank" href="#" class="post-badge btn_eight">H</a>
                            </div>
                        </div>
                    </div>
                    <!-- post title -->
                    <h4><a href="#">There are many variations of passages of Lorem Ipsum available</a></h4>
                    <div class="post-title-author-details">
                        <div class="date">
                            <ul>
                                <li><img src="{{asset('/')}}website/images/comment-01.jpg" class="img-responsive" alt=""></li>
                                <li>By<a title="" href="#"><span>Jone Kilna</span></a> --</li>
                                <li><a title="" href="#">11 Nov 2015</a> --</li>
                                <li><a title="" href="#"><span>275 Comments</span></a></li>
                            </ul>
                        </div>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from <a href="#">Read more...</a></p>
                    </div>
                </div>
                <div class="post-style1">
                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <!-- post image -->
                        <a href="#"><img src="{{asset('/')}}website/images/category/category-post-22.jpg" class="img-responsive" alt=""></a>
                        <div class="post-info meta-info-rn">
                            <div class="slide">
                                <a target="_blank" href="#" class="post-badge btn_eight">H</a>
                            </div>
                        </div>
                    </div>
                    <!-- post title -->
                    <h4><a href="#">There are many variations of passages of Lorem Ipsum available</a></h4>
                    <div class="post-title-author-details">
                        <div class="date">
                            <ul>
                                <li><img src="{{asset('/')}}website/images/comment-01.jpg" class="img-responsive" alt=""></li>
                                <li>By<a title="" href="#"><span>Jone Kilna</span></a> --</li>
                                <li><a title="" href="#">11 Nov 2015</a> --</li>
                                <li><a title="" href="#"><span>275 Comments</span></a></li>
                            </ul>
                        </div>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from <a href="#">Read more...</a></p>
                    </div>
                </div>
                <div class="post-style1">
                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                        <!-- post image -->
                        <a href="#"><img src="{{asset('/')}}website/images/category/category-post-23.jpg" class="img-responsive" alt=""></a>
                        <div class="post-info meta-info-rn">
                            <div class="slide">
                                <a target="_blank" href="#" class="post-badge btn_eight">H</a>
                            </div>
                        </div>
                    </div>
                    <!-- post title -->
                    <h4><a href="#">There are many variations of passages of Lorem Ipsum available</a></h4>
                    <div class="post-title-author-details">
                        <div class="date">
                            <ul>
                                <li><img src="{{asset('/')}}website/images/comment-01.jpg" class="img-responsive" alt=""></li>
                                <li>By<a title="" href="#"><span>Jone Kilna</span></a> --</li>
                                <li><a title="" href="#">11 Nov 2015</a> --</li>
                                <li><a title="" href="#"><span>275 Comments</span></a></li>
                            </ul>
                        </div>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from <a href="#">Read more...</a></p>
                    </div>
                </div>
                <div class="post-style1">
                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <!-- post image -->
                        <a href="#"><img src="{{asset('/')}}website/images/category/category-post-24.jpg" class="img-responsive" alt=""></a>
                        <div class="post-info meta-info-rn">
                            <div class="slide">
                                <a target="_blank" href="#" class="post-badge btn_eight">H</a>
                            </div>
                        </div>
                    </div>
                    <!-- post title -->
                    <h4><a href="#">There are many variations of passages of Lorem Ipsum available</a></h4>
                    <div class="post-title-author-details">
                        <div class="date">
                            <ul>
                                <li><img src="{{asset('/')}}website/images/comment-01.jpg" class="img-responsive" alt=""></li>
                                <li>By<a title="" href="#"><span>Jone Kilna</span></a> --</li>
                                <li><a title="" href="#">11 Nov 2015</a> --</li>
                                <li><a title="" href="#"><span>275 Comments</span></a></li>
                            </ul>
                        </div>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from <a href="#">Read more...</a></p>
                    </div>
                </div>
                <div class="post-style1">
                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <!-- post image -->
                        <a href="#"><img src="{{asset('/')}}website/images/category/category-post-25.jpg" class="img-responsive" alt=""></a>
                        <div class="post-info meta-info-rn">
                            <div class="slide">
                                <a target="_blank" href="#" class="post-badge btn_eight">H</a>
                            </div>
                        </div>
                    </div>
                    <!-- post title -->
                    <h4><a href="#">There are many variations of passages of Lorem Ipsum available</a></h4>
                    <div class="post-title-author-details">
                        <div class="date">
                            <ul>
                                <li><img src="{{asset('/')}}website/images/comment-01.jpg" class="img-responsive" alt=""></li>
                                <li>By<a title="" href="#"><span>Jone Kilna</span></a> --</li>
                                <li><a title="" href="#">11 Nov 2015</a> --</li>
                                <li><a title="" href="#"><span>275 Comments</span></a></li>
                            </ul>
                        </div>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from <a href="#">Read more...</a></p>
                    </div>
                </div>
            </div>
            <aside class="col-sm-4 left-padding">
                <div class="input-group search-area c-search">
                    <!-- search area -->
                    <input type="text" class="form-control" placeholder="Search articles here ..." name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </div>
                <!-- social icon -->
                <h3 class="category-headding ">SOCIAL PIXEL</h3>
                <div class="headding-border"></div>
                <div class="social">
                    <ul>
                        <li><a href="#" class="facebook"><i class="fa  fa-facebook"></i><span>3987</span> </a></li>
                        <li><a href="#" class="twitter"><i class="fa  fa-twitter"></i><span>3987</span></a></li>
                        <li><a href="#" class="google"><i class="fa  fa-google-plus"></i><span>3987</span></a></li>
                        <li><a href="#" class="flickr"><i class="fa fa-flickr"></i><span>3987</span> </a></li>
                    </ul>
                </div>
                <!-- /.social icon -->
                <div class="tab-inner">
                    <ul class="tabs">
                        <li><a href="#">POPULAR</a></li>
                        <li><a href="#">MOST VIEWED</a></li>
                    </ul>
                    <hr>
                    <!-- tabs -->
                    <div class="tab_content">
                        <div class="tab-item-inner">
                            <div class="box-item wow fadeIn" data-wow-duration="1s">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb" src="{{asset('/')}}website/images/popular_news_01.jpg" alt="" height="80" width="90"></a>
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
                            <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb" src="{{asset('/')}}website/images/popular_news_02.jpg" alt="" height="80" width="90"></a>
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
                            <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb" src="{{asset('/')}}website/images/popular_news_03.jpg" alt="" height="80" width="90"></a>
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
                            <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb" src="{{asset('/')}}website/images/popular_news_04.jpg" alt="" height="80" width="90"></a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-4">
                                        <a href="#">FASHION</a>
                                    </h6>
                                    <h3 class="td-module-title"><a href="#">Lorem Ipum therefore always free from</a></h3>
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
                        <!-- / tab item -->
                        <div class="tab-item-inner">
                            <div class="box-item">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb" src="{{asset('/')}}website/images/popular_news_01.jpg" alt="" height="80" width="90"></a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-5">
                                        <a href="#">BUSINESS</a>
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
                            <div class="box-item">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb" src="{{asset('/')}}website/images/popular_news_02.jpg" alt="" height="80" width="90"></a>
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
                            <div class="box-item">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb" src="{{asset('/')}}website/images/popular_news_03.jpg" alt="" height="80" width="90"></a>
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
                            <div class="box-item">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb" src="{{asset('/')}}website/images/popular_news_04.jpg" alt="" height="80" width="90"></a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-4">
                                        <a href="#">FASHION</a>
                                    </h6>
                                    <h3 class="td-module-title"><a href="#">Lorem Ipum therefore always free from</a></h3>
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
                        <!-- / tab item -->
                    </div>
                    <!-- / tab_content -->
                </div>
                <!-- / tab -->
                <div class="banner-add">
                    <!-- add -->
                    <span class="add-title">- Advertisement -</span>
                    <a href="#"><img src="{{asset('/')}}website/images/ad-banner.jpg" class="img-responsive center-block" alt=""></a>
                </div>
                <!-- comments -->
                <div class="latest-comments-inner">
                    <h3 class="category-headding ">LATEST COMMENT</h3>
                    <div class="headding-border"></div>
                    <!-- latest comment post -->
                    <div class="post-style2 latest-com">
                        <img src="{{asset('/')}}website/images/comment-01.jpg" alt="">
                        <div class="latest-com-detail">
                            <h5><a href="#" title="">It uses a dictionary of over</a></h5>
                            <span>Nec sagittis sem nibh dictionary...</span>
                            <p>Proin gravida nibh vel velit auctor aliquet. </p>
                        </div>
                    </div>
                    <!-- latest comment post -->
                    <div class="post-style2 latest-com">
                        <img src="{{asset('/')}}website/images/comment-02.jpg" alt="">
                        <div class="latest-com-detail">
                            <h5><a href="#" title="">It uses a dictionary of over</a></h5>
                            <span>Nec sagittis sem nibh dictionary...</span>
                            <p>Proin gravida nibh vel velit auctor aliquet. </p>
                        </div>
                    </div>
                </div>
                <!-- slider widget -->
                <div class="widget-slider-inner">
                    <h3 class="category-headding ">Slider Widget</h3>
                    <div class="headding-border"></div>
                    <div id="widget-slider" class="owl-carousel owl-theme">
                        <!-- widget item -->
                        <div class="item">
                            <a href="#"><img src="{{asset('/')}}website/images/slider-widget-1.jpg" alt=""></a>
                            <h4><a href="#">For good results must be make good plan</a></h4>
                            <div class="date">
                                <ul>
                                    <li>By<a title="" href="#"><span>Jone Kilna</span></a> --</li>
                                    <li><a title="" href="#">11 Nov 2015</a></li>
                                </ul>
                            </div>
                            <p>Dhaka: Dhaka Metropolitan Sessions a Judge Court on Wednesday issued warrants for the arrest of 29 BNP leaders, including some ina senior leaders...</p>
                        </div>
                        <!-- widget item -->
                        <div class="item">
                            <a href="#"><img src="{{asset('/')}}website/images/slider-widget-2.jpg" alt=""></a>
                            <h4><a href="#">Dog invason sparks chaos at IPL match</a></h4>
                            <div class="date">
                                <ul>
                                    <li>By<a title="" href="#"><span>Jone Kilna</span></a> --</li>
                                    <li><a title="" href="#">11 Nov 2015</a></li>
                                </ul>
                            </div>
                            <p>Dhaka: Dhaka Metropolitan Sessions a Judge Court on Wednesday issued warrants for the arrest of 29 BNP leaders, including some ina senior leaders ...</p>
                        </div>
                        <!-- widget item -->
                        <div class="item">
                            <a href="#"><img src="{{asset('/')}}website/images/slider-widget-3.jpg" alt=""></a>
                            <h4><a href="#">For good results must be make good plan</a></h4>
                            <div class="date">
                                <ul>
                                    <li>By<a title="" href="#"><span>Jone Kilna</span></a> --</li>
                                    <li><a title="" href="#">11 Nov 2015</a></li>
                                </ul>
                            </div>
                            <p>Dhaka: Dhaka Metropolitan Sessions a Judge Court on Wednesday issued warrants for the arrest of 29 BNP leaders, including some ina senior leaders ...</p>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
        <!-- pagination -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="pagination">
                        <li>
                            <a href="#" class="prev">
                                <i class="pe-7s-angle-left"></i>
                            </a>
                        </li>
                        <li> <a href="#">1</a></li>
                        <li> <a href="#" class="active">2</a></li>
                        <li> <a href="#">3</a></li>
                        <li> <a href="#">4</a></li>
                        <li> ... </li>
                        <li> <a href="#">15</a></li>
                        <li>
                            <a href="#" class="next"> <i class="pe-7s-angle-right"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <div class="banner">
                        <img src="{{asset('/')}}website/images/top-bannner2.jpg" class="img-responsive center-block" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
