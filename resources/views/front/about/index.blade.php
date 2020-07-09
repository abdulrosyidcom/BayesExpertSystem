@extends('layouts.frontend.app')

@section('title', 'About | Sistem Pakar Diagnosa Penyakit Ginjal')

@section('content')

<!--Page Title-->
<section class="page-title bg-color-1 text-center">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/pattern-18.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>About Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="/">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- about-section -->
<section class="about-section sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                <div id="image_block_01">
                    <div class="image-box wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <figure class="image js-tilt"><img src="{{ asset('assets/frontend') }}/images/resource/illustration-2.png" alt=""></figure>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                <div id="content_block_01">
                    <div class="content-box">
                        <div class="sec-title wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <p>About</p>
                            <h2>Kami menyediakan solusi diagnosa penyakit ginjal</h2>
                        </div>
                        <div class="text wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <p>Diagnosis cepat dan akurat adalah landasan Identifikasi perawatan kesehatan dan BioTech modern. Di Era Digital Ahli patologi dan BioTechnology membutuhkan analisis bantuan mesin untuk mengimbangi laju kerja yang semakin cepat. Kami menghadirkan TeleLaboratory dengan dukungan Kecerdasan Buatan untuk diagnostik yang cepat dan akurat dari pihak pengguna .</p>
                        </div>
                        <ul class="list-item clearfix wow slideInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <li>Meneliti Bersama</li>
                            <li>Keamanan Data</li>
                            <li>Sistem Pakar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-section end -->


<!-- feature-style-two -->
<section class="feature-style-two">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 inner-column">
                <div class="inner-box wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <h3>Our Mission</h3>
                    <p>Menghadirkan Laboratorium Digital serta membawa Kecerdasan Buatan ke ujung jari para ahli peneliti dan pathologi. Kami akan menghapus alur kerja yang lambat dan manual dengan menggunakan teknologi sistem pakar yang inovatif. Sehingga para ahli peneliti dan patologi akan memiliki alat tepercaya untuk penemuan, pengambilan keputusan, dan memberikan perawatan kesehatan yang tepat waktu kepada pasien maupun untuk memprediksi penyakit.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 inner-column">
                <div class="inner-box wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <h3>Our Vision</h3>
                    <div class="text">
                        <ul class="list-item">
                            <li>Mendiagnosa Penyakit Ginjal</li>
                            <li>Bekerja Dengan Cepat</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature-style-two end -->


<!-- team-section -->
{{-- <section class="team-section text-center sec-pad">
    <div class="auto-container">
        <div class="sec-title">
            <p>Our Team</p>
            <h2>Experts Team</h2>
        </div>
        <div class="inner-content">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="assets/images/team/team-1.jpg" alt="">
                                <ul class="social-links">
                                    <li><a href="about.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="about.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="about.html"><i class="fab fa-vimeo-v"></i></a></li>
                                    <li><a href="about.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="about.html">Nicolas Lawson</a></h3>
                                <span class="designation">Founder & CEO</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-one wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="assets/images/team/team-2.jpg" alt="">
                                <ul class="social-links">
                                    <li><a href="about.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="about.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="about.html"><i class="fab fa-vimeo-v"></i></a></li>
                                    <li><a href="about.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="about.html">Gwen Johnson</a></h3>
                                <span class="designation">Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-one wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="assets/images/team/team-3.jpg" alt="">
                                <ul class="social-links">
                                    <li><a href="about.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="about.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="about.html"><i class="fab fa-vimeo-v"></i></a></li>
                                    <li><a href="about.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="about.html">Thomas Olsen</a></h3>
                                <span class="designation">Regional Leader</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- team-section end -->

@endsection