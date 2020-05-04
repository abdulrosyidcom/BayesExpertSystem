@extends('layouts.frontend.app')

@section('title', 'Sistem Pakar | Blogs')

@section('content')


<!--Page Title-->
<section class="page-title text-center style-two">
    <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend') }}/images/shape/shape-62.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <div class="file-box">
                <i class="far fa-folder-open"></i>
                <p>
                    @foreach ($post->categories as $category)
                        {{ $category->name }}
                    @endforeach
                </p>
            </div>
            <h2>{{ $post->title }}</h2>
            <ul class="info-box clearfix">
                <li><i class="far fa-user"></i><span>Author : </span>{{ $post->user->name }}</li>
                <li><i class="far fa-calendar-alt"></i><span>Posted On : </span>{{ $post->created_at->format('d - M - Y') }}</li>
                <li><i class="far fa-comment-alt"></i><span>Post Comments:</span> 06</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- blog-details -->
<section class="sidebar-page-container blog-details">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="blog-details-content">
                    <div class="inner-box">
                        <div class="text">
                            <p>{!! $post->content !!}</p>
                        </div>
                    </div>
                    <div class="post-share-option">
                        <div class="post-tags">
                            <ul class="tags-list clearfix">
                                <li><i class="fas fa-tags"></i><h5>Tags:</h5></li>

                                @foreach ($post->tags as $tag)
                                <li><a href="{{ url('tag/' . $tag->slug) }}">{{ $tag->name }}</a>,</li>
                                @endforeach
                            </ul>
                        </div>
                        {{-- <div class="post-social">
                            <h5>Share this post with your friends</h5>
                            <ul class="social-list clearfix">
                                <li><a href="blog-details.html"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                                <li><a href="blog-details.html"><i class="fab fa-twitter"></i>Twiter</a></li>
                                <li><a href="blog-details.html"><i class="fab fa-linkedin-in"></i>Linkedin</a></li>
                                <li><a href="blog-details.html"><i class="fab fa-pinterest-p"></i>Pinterest</a></li>
                            </ul>
                        </div> --}}
                    </div>
                    <div class="author-box">

                        <figure class="author-image">
                            <img src="{{ asset('storage/users/' . $post->user->image) }}" alt="">
                        </figure>

                        <div class="inner">
                            <div class="author-info">
                                <h4>{{ $post->user->name }}, Author</h4>
                                <p>Visit: <a href="http://abdulrosyid.com">http://abdulrosyid.com</a></p>
                            </div>
                            <div class="text">
                                <p>ABDUL ROSYID | Lecture Notes & Web Programming</p>
                            </div>
                            {{-- <div class="share">
                                <a href="blog-details.html" class="share-btn"><i class="flaticon-share"></i></a>
                                <ul class="social-links clearfix">
                                    <li><a href="blog-details.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="blog-details.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="blog-details.html"><i class="fab fa-vimeo-v"></i></a></li>
                                    <li><a href="blog-details.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                    <div class="comments-area">
                        <div class="group-title"><h3>Comments - 2</h3></div>
                        <div class="comment-box">
                            <div class="comment">
                                <figure class="author-thumb"><img src="{{ asset('assets/frontend') }}/images/news/comment-1.png" alt=""></figure>
                                <div class="comment-inner">
                                    <div class="comment-info">
                                        <h4>Steven Rich,</h4>
                                        <span class="date">Dec 26, 2019</span>
                                    </div>
                                    <div class="text">
                                        <p>On the other hand, we denounce with righteous indignation  dislike men which toil and some great pleasure.</p>
                                    </div>
                                    <div class="replay-btn"><a href="blog-details.html">Reply</a></div>
                                </div>
                            </div>
                            <div class="comment">
                                <figure class="author-thumb"><img src="{{ asset('assets/frontend') }}/images/news/comment-2.png" alt=""></figure>
                                <div class="comment-inner">
                                    <div class="comment-info">
                                        <h4>William Cobus,</h4>
                                        <span class="date">Dec 25, 2019</span>
                                    </div>
                                    <div class="text">
                                        <p>Our power of choice is untrammelled and when nothing prevents our being that able to do what we like best is to be welcomed.</p>
                                    </div>
                                    <div class="replay-btn"><a href="blog-details.html">Reply</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comments-form-area">
                        <div class="group-title"><h3>Leave a Reply</h3></div>
                        <form method="post" action="http://st.ourhtmldemo.com/new/Naxly/assets/inc/sendemail.php" id="contact-form" class="default-form"> 
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Your Comment..."></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button class="theme-btn style-three" type="submit" name="submit-form">Post Comments<span>+</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">

                <div class="sidebar">
                    
                    <div class="sidebar-widget sidebar-search">
                        <div class="widget-title">
                            <h3>Search</h3>
                        </div>
                        <div class="search-box">
                            <form action="blog-details.html" method="post">
                                <div class="form-group">
                                    <input type="search" name="search-field" placeholder="Keyword..." required="">
                                    <button type="submit" class="theme-btn style-one">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="sidebar-widget sidebar-categories">
                        <div class="widget-title">
                            <h3>Categories</h3>
                        </div>

                        <div class="widget-content">
                            <ul class="categories-list clearfix">
                                @foreach ($categories as $category)
                                    <li><a href="{{ url('category/' . $category->slug) }}">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>

                    </div>

                    <div class="sidebar-widget sidebar-post">

                        <div class="widget-title">
                            <h3>Popular Post</h3>
                        </div>

                        <div class="post-inner">

                            @foreach ($posts as $post)
                                <div class="post">
                                    <div class="post-date">
                                        <p>{{ $post->created_at->format('d') }}</p>
                                        <span>{{ $post->created_at->format('M') }}</span>
                                    </div>
                                    <div class="file-box">
                                        <i class="far fa-folder-open"></i>
                                        <p>
                                            @foreach ($post->categories as $category)
                                                {{ $category->name }}
                                            @endforeach
                                        </p>
                                    </div>
                                    <h5>
                                        <a href="{{ url('blog/'. $post->slug) }}">{{ $post->title }}</a>
                                    </h5>
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="sidebar-widget sidebar-instagram">

                        <div class="widget-title">
                            <h3>Instagram Feed</h3>
                        </div>

                        <div class="widget-content">
                            <ul class="image-list clearfix">
                                <li class="clearfix">
                                    <figure class="image"><a href="blog-details.html"><img src="{{ asset('assets/frontend') }}/images/resource/instagram-1.jpg" alt=""></a></figure>
                                    <figure class="image"><a href="blog-details.html"><img src="{{ asset('assets/frontend') }}/images/resource/instagram-3.jpg" alt=""></a></figure>
                                </li>
                                <li class="clearfix">
                                    <figure class="image"><a href="blog-details.html"><img src="{{ asset('assets/frontend') }}/images/resource/instagram-2.jpg" alt=""></a></figure>
                                    <figure class="image"><a href="blog-details.html"><img src="{{ asset('assets/frontend') }}/images/resource/instagram-4.jpg" alt=""></a></figure>
                                    <figure class="image"><a href="blog-details.html"><img src="{{ asset('assets/frontend') }}/images/resource/instagram-5.jpg" alt=""></a></figure>
                                </li>
                            </ul>
                        </div>

                    </div>
                    
                    <div class="sidebar-widget sidebar-tags">
                        <div class="widget-title">
                            <h3>Tag Cloud</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="tags-list clearfix">
                                @foreach ($tags as $tag)
                                    <li><a href="{{ url('tag/' . $tag->slug) }}">{{ $tag->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog-modern-sidebar end -->


<!-- nav-btn -->
<div class="nav-btn-box style-two">
    <div class="auto-container">
        <div class="btn-inner clearfix">
            <div class="btn-left pull-left">
                <div class="prev-btn">
                    <h4><a href="http://st.ourhtmldemo.com/new/Naxly/portfolio-details.html"><i class="fas fa-angle-double-left"></i>&nbsp;Prev Post</a></h4>
                </div>
                <div class="box">
                    <div class="post-date"><p>16</p><span>Dec</span></div>
                    <div class="file-box"><i class="far fa-folder-open"></i>&nbsp;&nbsp;<p>Data Strategy</p></div>
                    <h4>Naxly as the Winners in Global Agency Awards</h4>
                </div>
            </div>
            <div class="btn-right pull-right text-right">
                <div class="prev-btn">
                    <h4><a href="http://st.ourhtmldemo.com/new/Naxly/portfolio-details.html">Next Post&nbsp;<i class="fas fa-angle-double-right"></i></a></h4>
                </div>
                <div class="box">
                    <div class="post-date"><p>05</p><span>Jan</span></div>
                    <div class="file-box"><p>Data Engineering</p>&nbsp;&nbsp;<i class="far fa-folder-open"></i></div>
                    <h4>Naxly Named as a Global Leader in Big Data</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- nav-btn end -->

@endsection