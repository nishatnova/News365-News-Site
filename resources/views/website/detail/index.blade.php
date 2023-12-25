@extends('website.master')
@section('title')
    Detail
@endsection

@section('body')


<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <h4 class="text-center text-warning">{{session('message')}}</h4>

            <article class="content">
                <div class="post-thumb">
                    <img src="{{asset($blog->image)}}" class="img-responsive post-image" alt="">
                    <div class="social">
                        <ul>
                            <li><a href="#" class="facebook"><i class="fa  fa-facebook"></i><span>3987</span> </a></li>
                            <li><a href="#" class="twitter"><i class="fa  fa-twitter"></i><span>3987</span></a></li>
                            <li><a href="#" class="google"><i class="fa  fa-google-plus"></i><span>3987</span></a></li>
                            <li><a href="#" class="flickr"><i class="fa fa-flickr"></i><span>3987</span> </a></li>
                        </ul>
                    </div>
                    <!-- /.social icon -->
                </div>
                <h1>{{$blog->title}}</h1>
                <div class="date">
                    <ul>
                        <li>By<a title="" href="#"><span>Jone Kilna</span></a> --</li>
                        <li><a title="" href="#">{{$blog->created_at}}</a> --</li>
                        <li><a title="" href="#"><span>{{count($comments)}}</span></a></li>
                    </ul>
                </div>
               <div>
                   {!! $blog->description !!}
               </div>
                <!-- tags -->
                <div class="tags">
                    <ul>
                        <li> <a href="#">{{$blog->category->name}}</a></li>
                        <li> <a href="#">Health &amp; Fitness</a></li>
                        <li><a href="#">Fashion</a></li>
                        <li><a href="#">Collage</a></li>
                        <li><a href="#">Business</a></li>
                        <li><a href="#">Music</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Lifestyle</a></li>
                    </ul>
                </div>
                <!-- Related news area
                    ============================================ -->
                <div class="related-news-inner">
                    <h3 class="category-headding ">RELATED NEWS</h3>
                    <div class="headding-border"></div>
                    <div class="row">
                        <div id="content-slide-5" class="owl-carousel">
                            <!-- item-1 -->
                            <div class="item">
                                <div class="row rn_block">
                                    <div class="col-xs-12 col-md-4 col-sm-4 padd">
                                        <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                                            <!-- image -->
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-responsive" src="{{asset('/')}}website/images/articale.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-info meta-info-rn">
                                                <div class="slide">
                                                    <a target="_blank" href="#" class="post-badge btn_five">B</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-title-author-details">
                                            <h4><a href="#">World Econmy Changing and Affecting in 3rd ...</a></h4>
                                            <div class="post-editor-date">
                                                <div class="post-date">
                                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                                </div>
                                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-4 col-sm-4 padd">
                                        <div class="post-wrapper wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                                            <!-- image -->
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-responsive" src="{{asset('/')}}website/images/articale02.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-info meta-info-rn">
                                                <div class="slide">
                                                    <a target="_blank" href="#" class="post-badge btn_three">S</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-title-author-details">
                                            <h4><a href="#">World Econmy Changing and Affecting in 3rd ...</a></h4>
                                            <div class="post-editor-date">
                                                <div class="post-date">
                                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                                </div>
                                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-4 col-sm-4 padd">
                                        <div class="post-wrapper wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                            <!-- image -->
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-responsive" src="{{asset('/')}}website/images/articale03.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-info meta-info-rn">
                                                <div class="slide">
                                                    <a target="_blank" href="#" class="post-badge btn_one">F</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-title-author-details">
                                            <h4><a href="#">World Econmy Changing and Affecting in 3rd ...</a></h4>
                                            <div class="post-editor-date">
                                                <div class="post-date">
                                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                                </div>
                                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item-2 -->
                            <div class="item">
                                <div class="row rn_block">
                                    <div class="col-xs-12 col-md-4 col-sm-4 padd">
                                        <div class="post-wrapper wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
                                            <!-- image -->
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-responsive" src="{{asset('/')}}website/images/articale04.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-info meta-info-rn">
                                                <div class="slide">
                                                    <a target="_blank" href="#" class="post-badge btn_eight">H</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-title-author-details">
                                            <h4><a href="#">World Econmy Changing and Affecting in 3rd ...</a></h4>
                                            <div class="post-editor-date">
                                                <div class="post-date">
                                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                                </div>
                                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-4 col-sm-4 padd">
                                        <div class="post-wrapper wow fadeIn" data-wow-duration="2s" data-wow-delay="0.8s">
                                            <!-- image -->
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-responsive" src="{{asset('/')}}website/images/articale05.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-info meta-info-rn">
                                                <div class="slide">
                                                    <a target="_blank" href="#" class="post-badge btn_four">L</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-title-author-details">
                                            <h4><a href="#">World Econmy Changing and Affecting in 3rd ...</a></h4>
                                            <div class="post-editor-date">
                                                <div class="post-date">
                                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                                </div>
                                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-4 col-sm-4 padd">
                                        <div class="post-wrapper wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">
                                            <!-- image -->
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-responsive" src="{{asset('/')}}website/images/articale06.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-info meta-info-rn">
                                                <div class="slide">
                                                    <a target="_blank" href="#" class="post-badge btn_two">T</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-title-author-details">
                                            <h4><a href="#">World Econmy Changing and Affecting in 3rd ...</a></h4>
                                            <div class="post-editor-date">
                                                <div class="post-date">
                                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                                </div>
                                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- form
                    ============================================ -->
                <div class="form-area">
                    <h3 class="category-headding ">LEAVE A COMMENT</h3>

                    <div class="headding-border"></div>
                    @if(Session::get('visitor_id'))
                    <form action="{{route('comment.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                    <span class="input">
                                            <textarea name="comment" class="input_field" id="message"></textarea>
                                            <label class="input_label" for="message">
                                                <span class="input_label_content" data-content="Your Comment">Your Comment</span>
                                            </label>
                                        <input type="hidden" value="{{$blog->id}}" name="blog_id"/>
                                    </span>
                                <button type="submit" class="btn btn-style">Post Comment</button>
                            </div>
                        </div>
                    </form>

                    @else
                            <a href="{{route('user-login')}}" class="btn btn-light">Login for Comment</a>
                    @endif
                </div>
                <!-- comment box
                    ============================================ -->
                <div class="comments-container">
                    <h1>Comment</h1>
                    <h5 class="mb-5 ">{{count($comments)}}  comment</h5>
                    <ul id="comments-list" class="comments-list">
                        @foreach($comments as $comment)
                        <li>
                            <div class="comment-main-level">
                                <!-- Avatar -->
                                <div class="comment-avatar"><img src="{{asset('/')}}website/images/comment-01.jpg" class="img-circle" alt=""></div>
                                <!-- Contenedor del Comentario -->
                                <div class="comment-box">
                                    <div class="comment-head">
                                        <h6 class="comment-name by-author"><a href="#">{{$comment->visitor->name}}</a></h6>
                                        <span>{{$comment->date}}</span>
                                        <i class="fa fa-reply"></i>
                                        <i class="fa fa-heart"></i>
                                    </div>
                                    <div class="comment-content">
                                       {{$comment->comment}}
                                    </div>
                                </div>
                            </div>

                            <!--
                            <ul class="comments-list reply-list">
                                <li>

                                    <div class="comment-avatar"><img src="{{asset('/')}}website/images/comment-02.jpg" class="img-circle" alt=""></div>

                                    <div class="comment-box">
                                        <div class="comment-head">
                                            <h6 class="comment-name"><a href="#">Lorena Rojero</a></h6>
                                            <span>hace 10 minutos</span>
                                            <i class="fa fa-reply"></i>
                                            <i class="fa fa-heart"></i>
                                        </div>
                                        <div class="comment-content">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                        </div>
                                    </div>
                                </li>
                                <li>

                                    <div class="comment-avatar"><img src="{{asset('/')}}website/images/comment-01.jpg" class="img-circle" alt=""></div>

                                    <div class="comment-box">
                                        <div class="comment-head">
                                            <h6 class="comment-name by-author"><a href="#">Agustin Ortiz</a></h6>
                                            <span>hace 10 minutos</span>
                                            <i class="fa fa-reply"></i>
                                            <i class="fa fa-heart"></i>
                                        </div>
                                        <div class="comment-content">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                        </div>
                                    </div>
                                </li>
                            </ul> -->
                        </li>

                        @endforeach

                    </ul>
                </div>
            </article>
        </div>
        <div class="col-sm-4 left-padding">
            <aside class="sidebar">
                <div class="input-group search-area">
                    <!-- search area -->
                    <input type="text" class="form-control" placeholder="Search articles here ..." name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </div>
                <!-- /.search area -->
                <div class="banner-add">
                    <!-- add -->
                    <span class="add-title">- Advertisement -</span>
                    <a href="#"><img src="{{asset('/')}}website/images/ad-banner.jpg" class="img-responsive center-block" alt=""></a>
                </div>
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
    </div>
</div>

@endsection

