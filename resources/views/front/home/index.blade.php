@extends('layouts.frontend.app')

@section('title', 'Sistem Pakar Diagnosa Penyakit Ginjal')

@section('content')

    <!-- banner-section -->
    <section class="banner-section">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url({{ asset('assets/frontend') }}/images/shape/shape-56.png);"></div>
                <div class="pattern-2" style="background-image: url({{ asset('assets/frontend') }}/images/shape/shape-55.png);"></div>
            </div>
            <div class="icon-layer">
                <div class="icon icon-1 rotate-me" style="background-image: url({{ asset('assets/frontend') }}/images/icons/wheel-2.png);"></div>
                <div class="icon icon-2 rotate-me" style="background-image: url({{ asset('assets/frontend') }}/images/icons/wheel-3.png);"></div>
                <div class="icon icon-3 rotate-me" style="background-image: url({{ asset('assets/frontend') }}/images/icons/wheel-4.png);"></div>
                <div class="icon icon-4 rotate-me" style="background-image: url({{ asset('assets/frontend') }}/images/icons/wheel-5.png);"></div>
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <h1>Turn data into insight with survey reports</h1>
                            <p>Naxly bring the power of data science and artificial<br />intelligence to every business.</p>
                            <div class="btn-box">
                                <a href="index.html" class="theme-btn style-two">Learn More<span>+</span></a>
                                <a href="index.html" class="theme-btn style-one">Get Started<span>+</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="slider-image-1 clearfix">
                            <figure class="image image-1"><img src="{{ asset('assets/frontend') }}/images/banner/banner-1-1.png" alt=""></figure>
                            <figure class="image image-2 float-bob-y"><img src="{{ asset('assets/frontend') }}/images/banner/banner-1-2.png" alt=""></figure>
                            <figure class="image image-3"><img src="{{ asset('assets/frontend') }}/images/icons/pie-chart-1.png" alt=""></figure>
                            <figure class="image image-4"><img src="{{ asset('assets/frontend') }}/images/banner/banner-1-3.png" alt=""></figure>
                            <figure class="image image-5 float-bob-y"><img src="{{ asset('assets/frontend') }}/images/banner/banner-1-4.png" alt=""></figure>
                            <figure class="image image-6 float-bob-y"><img src="{{ asset('assets/frontend') }}/images/banner/banner-1-5.png" alt=""></figure>
                            <figure class="image image-7"><img src="{{ asset('assets/frontend') }}/images/banner/banner-1-6.png" alt=""></figure>
                            <figure class="image image-8 wow bounceInDown" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{ asset('assets/frontend') }}/images/icons/dollar-1.png" alt=""></figure>
                            <figure class="image image-9 wow bounceInDown" data-wow-delay="200ms" data-wow-duration="1500ms"><img src="{{ asset('assets/frontend') }}/images/icons/dollar-2.png" alt=""></figure>
                            <figure class="image image-10 wow bounceInDown" data-wow-delay="400ms" data-wow-duration="1500ms"><img src="{{ asset('assets/frontend') }}/images/icons/dollar-3.png" alt=""></figure>
                            <figure class="image image-11 wow bounceInDown" data-wow-delay="600ms" data-wow-duration="1500ms"><img src="{{ asset('assets/frontend') }}/images/icons/dollar-4.png" alt=""></figure>
                            <figure class="image image-12 wow bounceInDown" data-wow-delay="800ms" data-wow-duration="1500ms"><img src="{{ asset('assets/frontend') }}/images/icons/dollar-5.png" alt=""></figure>
                            <figure class="image image-13"><img src="{{ asset('assets/frontend') }}/images/icons/arrow-4.png" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->
    
    
        <!--  service-section -->
        <section class="service-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <p>More than Solutions</p>
                    <h2>Data sceince solutions for startup<br />and enterprises</h2>
                    <div class="decor" style="background-image: url({{ asset('assets/frontend') }}/images/icons/decor-1.png);"></div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h4><a href="service-details.html">Data Science</a></h4>
                                <div class="icon-box">
                                    <span class="border-layer"></span>
                                    <i class="flaticon-data"></i>
                                </div>
                                <p>Simple & easy distinguish in a free hour, when our power choice prevents</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h4><a href="service-details.html">Machine Learning</a></h4>
                                <div class="icon-box">
                                    <span class="border-layer"></span>
                                    <i class="flaticon-brain"></i>
                                </div>
                                <p>Claims duty the obligations of busines it will frequently occur that all pleasures.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h4><a href="service-details.html">Artificial Intelligence</a></h4>
                                <div class="icon-box">
                                    <span class="border-layer"></span>
                                    <i class="flaticon-vr"></i>
                                </div>
                                <p>Therefore always hold these matters to this principle of reject pleasures secure.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h4><a href="service-details.html">BI Implementation</a></h4>
                                <div class="icon-box">
                                    <span class="border-layer"></span>
                                    <i class="flaticon-cloud-computing"></i>
                                </div>
                                <p>Trouble that bound ensue equaly blame belongs to those through weakness. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-section end -->
    
    
        <!-- about-section -->
        <section class="about-section">
            <div class="auto-container">
                <div class="tabs-box">
                    <div class="tabs-content" id="content_block_01">
                        <div class="tab active-tab" id="tab-1">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12 content-column">
                                    <div class="content-box">
                                        <div class="sec-title text-left">
                                            <p>About Company</p>
                                            <h2>Mission is to bring the power of AI to every business</h2>
                                            <div class="decor" style="background-image: url({{ asset('assets/frontend') }}/images/icons/decor-1.png);"></div>
                                        </div>
                                        <div class="text">
                                            <p>As a solution providing company we offer a wide range of consulting, development & quality services with 100% satisfaction.</p>
                                        </div>
                                        <ul class="list-item clearfix">
                                            <li><span class="dots"></span>Idea of denouncing pleasure & praising</li>
                                            <li><span class="dots"></span>Ever undertakes laborious physical</li>
                                            <li><span class="dots"></span>Avoids a pain that produces no resultant</li>
                                            <li><span class="dots"></span>Great explorer of the real truth</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-6 col-sm-12 inner-column">
                                    <div class="inner-box">
                                        <div class="video-inner" style="background-image: url({{ asset('assets/frontend') }}/images/background/video-1.jpg);">
                                            <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption=""><i class="flaticon-play-button"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-2">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12 content-column">
                                    <div class="content-box">
                                        <div class="sec-title text-left">
                                            <p>About Company</p>
                                            <h2>Vison is to bring the power of AI to every business</h2>
                                            <div class="decor" style="background-image: url({{ asset('assets/frontend') }}/images/icons/decor-1.png);"></div>
                                        </div>
                                        <div class="text">
                                            <p>As a solution providing company we offer a wide range of consulting, development & quality services with 100% satisfaction.</p>
                                        </div>
                                        <ul class="list-item clearfix">
                                            <li><span class="dots"></span>Idea of denouncing pleasure & praising</li>
                                            <li><span class="dots"></span>Ever undertakes laborious physical</li>
                                            <li><span class="dots"></span>Avoids a pain that produces no resultant</li>
                                            <li><span class="dots"></span>Great explorer of the real truth</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-6 col-sm-12 inner-column">
                                    <div class="inner-box">
                                        <div class="video-inner" style="background-image: url({{ asset('assets/frontend') }}/images/background/video-1.jpg);">
                                            <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption=""><i class="flaticon-play-button"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-3">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12 content-column">
                                    <div class="content-box">
                                        <div class="sec-title text-left">
                                            <p>About Company</p>
                                            <h2>Vison is to bring the power of AI to every business</h2>
                                            <div class="decor" style="background-image: url({{ asset('assets/frontend') }}/images/icons/decor-1.png);"></div>
                                        </div>
                                        <div class="text">
                                            <p>As a solution providing company we offer a wide range of consulting, development & quality services with 100% satisfaction.</p>
                                        </div>
                                        <ul class="list-item clearfix">
                                            <li><span class="dots"></span>Idea of denouncing pleasure & praising</li>
                                            <li><span class="dots"></span>Ever undertakes laborious physical</li>
                                            <li><span class="dots"></span>Avoids a pain that produces no resultant</li>
                                            <li><span class="dots"></span>Great explorer of the real truth</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-6 col-sm-12 inner-column">
                                    <div class="inner-box">
                                        <div class="video-inner" style="background-image: url({{ asset('assets/frontend') }}/images/background/video-1.jpg);">
                                            <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption=""><i class="flaticon-play-button"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-btn-box">
                        <ul class="tab-btns tab-buttons clearfix">
                            <li class="tab-btn active-btn" data-tab="#tab-1"><h4>Our Mission</h4></li>
                            <li class="tab-btn" data-tab="#tab-2"><h4>Our Vison</h4></li>
                            <li class="tab-btn" data-tab="#tab-3"><h4>Core Values</h4></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->
    
    
        <!-- work-process -->
        <section class="work-process">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <p>Our Work Process</p>
                    <h2>Data science solutions for startup</h2>
                    <div class="decor" style="background-image: url({{ asset('assets/frontend') }}/images/icons/decor-1.png);"></div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 work-block">
                        <div class="work-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <i class="flaticon-big-data"></i>
                                    <div class="count">01</div>
                                    <div class="bg-pattern" style="background-image: url({{ asset('assets/frontend') }}/images/icons/icon-bg-1.png);"></div>
                                    <div class="overlay-pattern" style="background-image: url({{ asset('assets/frontend') }}/images/icons/icon-bg-2.png);"></div>
                                </div>
                                <h4><a href="index.html">Frame the Problem</a></h4>
                                <p>To take a trivial example, which idea of ever undertakes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 work-block">
                        <div class="work-block-one wow slideInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <i class="flaticon-ui"></i>
                                    <div class="count">02</div>
                                    <div class="bg-pattern" style="background-image: url({{ asset('assets/frontend') }}/images/icons/icon-bg-1.png);"></div>
                                    <div class="overlay-pattern" style="background-image: url({{ asset('assets/frontend') }}/images/icons/icon-bg-2.png);"></div>
                                </div>
                                <h4><a href="index.html">Collect the Data</a></h4>
                                <p>Best every pleasure is too welcomed every pain avoided.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 work-block">
                        <div class="work-block-one wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <i class="flaticon-brain-1"></i>
                                    <div class="count">03</div>
                                    <div class="bg-pattern" style="background-image: url({{ asset('assets/frontend') }}/images/icons/icon-bg-1.png);"></div>
                                    <div class="overlay-pattern" style="background-image: url({{ asset('assets/frontend') }}/images/icons/icon-bg-2.png);"></div>
                                </div>
                                <h4><a href="index.html">Process the Data</a></h4>
                                <p>Have to be repudiated annoyances accepted the wise.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- work-process end -->
    
    
        <!-- industries-section -->
        <section class="industries-section">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url({{ asset('assets/frontend') }}/images/shape/shape-57.png);"></div>
                <div class="pattern-2" style="background-image: url({{ asset('assets/frontend') }}/images/shape/shape-58.png);"></div>
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="sec-title text-left light">
                                <p>Industries</p>
                                <h2>Industries we are transforming our awesome solutions</h2>
                                <div class="decor" style="background-image: url({{ asset('assets/frontend') }}/images/icons/decor-2.png);"></div>
                            </div>
                            <div class="btn-box"><a href="index.html" class="btn-style-four">View All Industries<span>+</span></a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 inner-column">
                        <div class="inner-box">
                            <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend') }}/images/shape/shape-3.png);"></div>
                            <div class="inner">
                                <span>Industry</span>
                                <h4><a href="index.html">Trasportation &<br />Logistics</a></h4>
                                <div class="btn-box clearfix"><a href="index.html"><i class="flaticon-arrow"></i></a></div>
                                <div class="icon-box"><i class="flaticon-product"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 inner-column">
                        <div class="inner-box">
                            <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend') }}/images/shape/shape-3.png);"></div>
                            <div class="inner">
                                <span>Industry</span>
                                <h4><a href="index.html">Media &<br />Entertainment</a></h4>
                                <div class="btn-box clearfix"><a href="index.html"><i class="flaticon-arrow"></i></a></div>
                                <div class="icon-box"><i class="flaticon-joystick"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 inner-column">
                        <div class="inner-box">
                            <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend') }}/images/shape/shape-3.png);"></div>
                            <div class="inner">
                                <span>Industry</span>
                                <h4><a href="index.html">Travel &<br />Hospitality</a></h4>
                                <div class="btn-box clearfix"><a href="index.html"><i class="flaticon-arrow"></i></a></div>
                                <div class="icon-box"><i class="flaticon-travel"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 inner-column">
                        <div class="inner-box">
                            <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend') }}/images/shape/shape-3.png);"></div>
                            <div class="inner">
                                <span>Industry</span>
                                <h4><a href="index.html">Financials &<br />Banking</a></h4>
                                <div class="btn-box clearfix"><a href="index.html"><i class="flaticon-arrow"></i></a></div>
                                <div class="icon-box"><i class="flaticon-bank"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 inner-column">
                        <div class="inner-box">
                            <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend') }}/images/shape/shape-3.png);"></div>
                            <div class="inner">
                                <span>Industry</span>
                                <h4><a href="index.html">Healthcare &<br />Medicine</a></h4>
                                <div class="btn-box clearfix"><a href="index.html"><i class="flaticon-arrow"></i></a></div>
                                <div class="icon-box"><i class="flaticon-medicine"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 inner-column">
                        <div class="inner-box">
                            <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend') }}/images/shape/shape-3.png);"></div>
                            <div class="inner">
                                <span>Industry</span>
                                <h4><a href="index.html">Advertising &<br />Marketing</a></h4>
                                <div class="btn-box clearfix"><a href="index.html"><i class="flaticon-arrow"></i></a></div>
                                <div class="icon-box"><i class="flaticon-billboard"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- industries-section end -->
    
    
        <!-- skills-section -->
        <section class="skills-section">
            <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend') }}/images/shape/shape-4.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                        <div class="image-box wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <figure class="image js-tilt"><img src="{{ asset('assets/frontend') }}/images/resource/illastration-1.png" alt=""></figure>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                        <div id="content_block_02">
                            <div class="content-box">
                                <div class="sec-title text-left">
                                    <p>Skills & Facts</p>
                                    <h2>We keep our self updated with latest trends</h2>
                                    <div class="decor" style="background-image: url(assets/images/icons/decor-1.png);"></div>
                                </div>
                                <div class="text">
                                    <p>As a solution providing company we offer a  range consulting, development quality testing services with 100% satisfaction.</p>
                                </div>
                                <div class="inner-box">
                                    <div class="progress-box">
                                        <h5>Data Consulting</h5>
                                        <div class="icon-box"><i class="flaticon-chat"></i></div>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="62%"><div class="count-text">62%</div></div>
                                        </div>
                                    </div>
                                    <div class="progress-box">
                                        <h5>Big Data & BI</h5>
                                        <div class="icon-box"><i class="flaticon-cloud-computing"></i></div>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="89%"><div class="count-text">89%</div></div>
                                        </div>
                                    </div>
                                    <div class="progress-box">
                                        <h5>Predictive Analysis</h5>
                                        <div class="icon-box"><i class="flaticon-analysis-1"></i></div>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="75%"><div class="count-text">75%</div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- skills-section end -->
    
    
        <!-- testimonial-section -->
        <section class="testimonial-section">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url({{ asset('assets/frontend') }}/images/shape/shape-5.png);"></div>
                <div class="pattern-2" style="background-image: url({{ asset('assets/frontend') }}/images/shape/shape-6.png);"></div>
            </div>
            <div class="auto-container">
                <div class="upper-box clearfix">
                    <div class="sec-title text-left pull-left">
                        <p>Testimonials</p>
                        <h2>What say our clients about our awesome service</h2>
                        <div class="decor" style="background-image: url({{ asset('assets/frontend') }}/images/icons/decor-1.png);"></div>
                    </div>
                    <div class="btn-box pull-right">
                        <a href="index.html" class="theme-btn style-three">Send Your Review<span>+</span></a>
                    </div>
                </div>
                <div class="testimonial-carousel owl-carousel owl-theme owl-dots-none">
                    <div class="testimonial-content">
                        <figure class="image-box"><img src="{{ asset('assets/frontend') }}/images/resource/testimonial-9.png" alt=""></figure>
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-null"></i></div>
                            <div class="inner">
                                <ul class="rating clearfix">
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                </ul>
                                <div class="text">
                                    <p>As a growing company, we found in Naxly’ expertise in data science invaluable. In almost two years of cooperation, they’ve helped us define our data.</p>
                                </div>
                                <div class="author-info">
                                    <h4>Zedrew Kowzel</h4>
                                    <span class="designation">CTO of Smart Tech Solution</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <figure class="image-box"><img src="{{ asset('assets/frontend') }}/images/resource/testimonial-10.png" alt=""></figure>
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-null"></i></div>
                            <div class="inner">
                                <ul class="rating clearfix">
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                </ul>
                                <div class="text">
                                    <p>As a growing company, we found in Naxly’ expertise in data science invaluable. In almost two years of cooperation, they’ve helped us define our data.</p>
                                </div>
                                <div class="author-info">
                                    <h4>Androi Roi</h4>
                                    <span class="designation">CTO of Smart Tech Solution</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <figure class="image-box"><img src="{{ asset('assets/frontend') }}/images/resource/testimonial-9.png" alt=""></figure>
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-null"></i></div>
                            <div class="inner">
                                <ul class="rating clearfix">
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                </ul>
                                <div class="text">
                                    <p>As a growing company, we found in Naxly’ expertise in data science invaluable. In almost two years of cooperation, they’ve helped us define our data.</p>
                                </div>
                                <div class="author-info">
                                    <h4>Watson Jsye</h4>
                                    <span class="designation">CTO of Smart Tech Solution</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-section end -->
    
    
        <!-- case-section -->
        <section class="case-section">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="sec-title text-center">
                        <p>Case Studies</p>
                        <h2>What our clients say about our<br />awesome solutions</h2>
                        <div class="decor" style="background-image: url({{ asset('assets/frontend') }}/images/icons/decor-1.png);"></div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 case-block">
                            <div class="case-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box"><a href="{{ asset('assets/frontend') }}/images/gallery/case-1.png" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/frontend') }}/images/gallery/case-1.png" alt=""></a></figure>
                                    <div class="lower-content">
                                        <p>Banking & Finance</p>
                                        <h4><a href="project-details.html">Consulting on invoice data capture</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 case-block">
                            <div class="case-block-one wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box"><a href="{{ asset('assets/frontend') }}/images/gallery/case-2.png" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/frontend') }}/images/gallery/case-2.png" alt=""></a></figure>
                                    <div class="lower-content">
                                        <p>Entertainment</p>
                                        <h4><a href="project-details.html">Automate feedback analysis</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 case-block">
                            <div class="case-block-one wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box"><a href="{{ asset('assets/frontend') }}/images/gallery/case-3.png" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/frontend') }}/images/gallery/case-3.png" alt=""></a></figure>
                                    <div class="lower-content">
                                        <p>Banking & Finance</p>
                                        <h4><a href="project-details.html">Big data processing implementation</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 case-block">
                            <div class="case-block-one wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box"><a href="{{ asset('assets/frontend') }}/images/gallery/case-4.png" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/frontend') }}/images/gallery/case-4.png" alt=""></a></figure>
                                    <div class="lower-content">
                                        <p>Healthcare</p>
                                        <h4><a href="project-details.html">BI implementation for baby care App</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="more-btn"><a href="project-details.html" class="btn-style-four">All Case Studies<span>+</span></a></div>
                </div>
            </div>
        </section>
        <!-- case-section end -->
    
    
        <!-- fun-fact -->
        <section class="fun-fact">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 counter-block">
                        <div class="counter-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-analytics"></i></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="3500">0</span>+
                                </div>
                                <h4>Projects Completed</h4>
                                <p>To take trivial example, which idea of ever undertakes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 counter-block">
                        <div class="counter-block-one wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-brain-1"></i></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="1867">0</span>
                                </div>
                                <h4>Industries Covered</h4>
                                <p>Best every pleasure is to welcomed every pain avoided.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 counter-block">
                        <div class="counter-block-one wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-freelance"></i></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="239">0</span>
                                </div>
                                <h4>Expert Scientists</h4>
                                <p>Have to be repudiated annoyances accepted the wise.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- fun-fact end  -->
    
    
        <!-- news-section -->
        <section class="news-section">
            <div class="title-inner bg-color-1">
                <div class="pattern-layer">
                    <div class="pattern-1" style="background-image: url({{ asset('assets/frontend') }}/images/shape/shape-7.png);"></div>
                    <div class="pattern-2" style="background-image: url({{ asset('assets/frontend') }}/images/shape/shape-8.png);"></div>
                </div>
                <div class="auto-container">
                    <div class="sec-title text-center">
                        <p>News & Updates</p>
                        <h2>Latest thinking in data science and<br />our company news</h2>
                        <div class="decor" style="background-image: url({{ asset('assets/frontend') }}/images/icons/decor-1.png);"></div>
                    </div>
                </div>
            </div>
            <div class="lower-content">
                <div class="auto-container">
                    <div class="inner-content">
                        <div class="row clearfix">

                            @foreach ($posts as $post)
                            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                                <div class="news-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">

                                    <div class="inner-box">

                                        <figure class="image-box">
                                            <img src="{{ asset('storage/posts/' . $post->image) }}" alt="" style="height: 260px">
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

                                                <h4><a href="#">{{ $post->title }}</a></h4>
                                            </div>

                                            <div class="text">
                                                <p>{!! substr($post->content, 0, 100) !!}</p>
                                            </div>

                                            <div class="link">
                                                <a href="blog-details.html" class="btn-style-four">Read More<span>+</span></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-section end -->
    
    
        <!-- clients-section -->
        <section class="clients-section text-center">
            <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend') }}/images/shape/shape-59.png);"></div>
            <div class="image-layer">
                <figure class="image-1 rotate-me"><img src="{{ asset('assets/frontend') }}/images/icons/wheel-6.png" alt=""></figure>
                <figure class="image-2 rotate-me"><img src="{{ asset('assets/frontend') }}/images/icons/wheel-7.png" alt=""></figure>
            </div>
            <div class="auto-container">
                <div class="title-inner">
                    <h2>Trusted by innovative companies</h2>
                    <p>Always holds in these matters to this principle of selection: he rejects pleasures to secure other greater<br />pleasures, or else he endures pains to avoid</p>
                </div>
                <div class="clients-carousel owl-carousel owl-theme owl-nav-none">
                    <figure class="logo-box"><a href="index.html"><img src="{{ asset('assets/frontend') }}/images/clients/clients-logo-1.png" alt=""></a></figure>
                    <figure class="logo-box"><a href="index.html"><img src="{{ asset('assets/frontend') }}/images/clients/clients-logo-2.png" alt=""></a></figure>
                    <figure class="logo-box"><a href="index.html"><img src="{{ asset('assets/frontend') }}/images/clients/clients-logo-3.png" alt=""></a></figure>
                    <figure class="logo-box"><a href="index.html"><img src="{{ asset('assets/frontend') }}/images/clients/clients-logo-4.png" alt=""></a></figure>
                    <figure class="logo-box"><a href="index.html"><img src="{{ asset('assets/frontend') }}/images/clients/clients-logo-5.png" alt=""></a></figure>
                    <figure class="logo-box"><a href="index.html"><img src="{{ asset('assets/frontend') }}/images/clients/clients-logo-1.png" alt=""></a></figure>
                    <figure class="logo-box"><a href="index.html"><img src="{{ asset('assets/frontend') }}/images/clients/clients-logo-2.png" alt=""></a></figure>
                    <figure class="logo-box"><a href="index.html"><img src="{{ asset('assets/frontend') }}/images/clients/clients-logo-3.png" alt=""></a></figure>
                    <figure class="logo-box"><a href="index.html"><img src="{{ asset('assets/frontend') }}/images/clients/clients-logo-4.png" alt=""></a></figure>
                    <figure class="logo-box"><a href="index.html"><img src="{{ asset('assets/frontend') }}/images/clients/clients-logo-5.png" alt=""></a></figure>
                    <figure class="logo-box"><a href="index.html"><img src="{{ asset('assets/frontend') }}/images/clients/clients-logo-1.png" alt=""></a></figure>
                    <figure class="logo-box"><a href="index.html"><img src="{{ asset('assets/frontend') }}/images/clients/clients-logo-2.png" alt=""></a></figure>
                    <figure class="logo-box"><a href="index.html"><img src="{{ asset('assets/frontend') }}/images/clients/clients-logo-3.png" alt=""></a></figure>
                    <figure class="logo-box"><a href="index.html"><img src="{{ asset('assets/frontend') }}/images/clients/clients-logo-4.png" alt=""></a></figure>
                    <figure class="logo-box"><a href="index.html"><img src="{{ asset('assets/frontend') }}/images/clients/clients-logo-5.png" alt=""></a></figure>
                </div>
            </div>
        </section>
        <!-- clients-section end -->
    
    
@endsection