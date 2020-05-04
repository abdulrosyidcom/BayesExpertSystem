@extends('layouts.frontend.app')

@section('title', 'Sistem Pakar | Blogs')

@section('content')

<!--Page Title-->
<section class="page-title text-center style-two">
    <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend') }}/images/shape/shape-62.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Blogs Expert System</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><span>\\</span></li>
                <li>Blog</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- blog-classic-sidebar -->
<section class="sidebar-page-container blog-classic-sidebar">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="blog-classic-content">
                    <div class="row clearfix">

                        @foreach ($posts as $post)
        
                        <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">

                                    <figure class="image-box">
                                        <img src="{{ asset('storage/posts/' . $post->image) }}" style="height: 260px;" alt="">
                                        <a href="{{ asset('storage/posts/' . $post->image) }}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom"></i></a>
                                    </figure>

                                    <div class="lower-content">

                                        <div class="file-box">
                                            <i class="far fa-folder-open"></i>
                                            <p>
                                                @foreach ($post->categories as $category)
                                                    {{ $category->name }}
                                                @endforeach
                                            </p>
                                        </div>

                                        <div class="title-box">
                                            <div class="post-date">
                                                <p>{{ $post->created_at->format('d') }}</p>
                                                <span>{{ $post->created_at->format('M') }}</span>
                                            </div>
                                            <h4><a href="{{ url('blog/' . $post->slug ) }}">{{ $post->title }}</a></h4>
                                        </div>

                                        <div class="text">
                                            <p>{!! substr($post->content, 0, 100) !!}</p>
                                        </div>

                                        <div class="link"><a href="{{ url('blog/' . $post->slug ) }}" class="btn-style-four">Read More<span>+</span></a></div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                        
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
<!-- blog-classic-sidebar end -->


@endsection