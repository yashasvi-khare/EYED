
@extends('layouts.main')
@section('main-container')

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


        <!-- page-title -->
        <section class="page-title centred">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-12.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                   
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- chooseus-section -->
        <section class="chooseus-section pt_120 pb_120">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-1.png);"></div>
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_two">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/resource/chooseus-1.jpg" alt=""></figure>
                                <div class="image-content">
                                    <div class="light-icon"><img src="assets/images/icons/icon-10.png" alt=""></div>
                                    <div class="icon-box"><img src="assets/images/icons/icon-9.png" alt=""></div>
                                    <h4>Best Eye-Care Services</h4>
                                    <ul class="info">
                                        <li>9.7k Reviews</li>
                                        <li>23 Clinics Network</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_two">
                            <div class="content-box">
                                <div class="sec-title mb_20">
                                    <h2>{{ __('messages.about_sec_title')}}.</h2>
                                </div>
                                <div class="text-box mb_45">
                                    <p>{{ __('messages.about_sec_2')}}.</p>
                                </div>
                                <div class="inner-box">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <div class="icon-box"><img src="assets/images/icons/icon-11.png" alt=""></div>
                                                <h4>{{ __('messages.about_sec_3')}}</h4>
                                                <p>{{ __('messages.about_sec_4')}}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <div class="icon-box"><img src="assets/images/icons/icon-11.png" alt=""></div>
                                                <h4>{{ __('messages.about_sec_5')}}</h4>
                                                <p>{{ __('messages.about_sec_6')}}..</p>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-box">
                                    <a href="index.html" class="theme-btn btn-one">{{ __('messages.about_sec_7')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- chooseus-section end -->


        <!-- funfact-section -->
        <section class="funfact-section pb_120">
            <div class="outer-container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><img src="assets/images/icons/icon-3.png" alt=""></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="5">0</span><span>k+</span>
                                </div>
                                <p>Happy Patients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one wow slideInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><img src="assets/images/icons/icon-4.png" alt=""></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="30">0</span><span>+</span>
                                </div>
                                <p>Optical Services</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one wow slideInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><img src="assets/images/icons/icon-5.png" alt=""></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="20">0</span><span>k+</span>
                                </div>
                                <p>Online Appointments</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one wow slideInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><img src="assets/images/icons/icon-6.png" alt=""></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="180">0</span><span>+</span>
                                </div>
                                <p>Surgeries Done</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="apply py-5" id="apply">
        <div class="container">
            <h2 class="text-center mb-4">{{ __('messages.about_card_6')}}</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('images\news\b.avif') }}" class="card-img-top" alt="Registration">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('messages.about_card_title')}}</h5>
                            <p class="card-text">{{ __('messages.about_card_1')}}.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('images\news\a.jpg') }}" class="card-img-top" alt="Documents">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('messages.about_card_2')}}</h5>
                            <p class="card-text">{{ __('messages.about_card_3')}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('images\news\c.jpg') }}" class="card-img-top" alt="Hospital">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('messages.about_card_4')}}</h5>
                            <p class="card-text">{{ __('messages.about_card_5')}}</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- funfact-section end -->


        <!-- history-section -->
        <!-- <section class="history-section pt_120 pb_90">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="sec-title mb_25">
                                <h2>We Have completed 25 Years of Eye Care Experience</h2>
                            </div>
                            <div class="text-box mb_55">
                                <p>At Aligarh Eye Hospital, our experience is built on decades of providing exceptional eye care to patients from all walks of life.
                                We pride ourselves on delivering top-notch care, guided by expertise, compassion, and a patient-centered approach.
                                </p>

                            </div> -->
                            <!-- <div class="inner-box">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 history-block">
                                        <div class="history-block-one">
                                            <div class="inner-box">
                                                <h3>2005</h3>
                                                <h5>OptiFlex Founded</h5>
                                                <p>Sed praesent porttitor nequ eiot consequat in nunc.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 history-block">
                                        <div class="history-block-one">
                                            <div class="inner-box">
                                                <h3>2011</h3>
                                                <h5>Best Eye Care Award</h5>
                                                <p>Sed praesent porttitor nequ eiot consequat in nunc.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 history-block">
                                        <div class="history-block-one">
                                            <div class="inner-box">
                                                <h3>2015</h3>
                                                <h5>Senior Doctors Joined</h5>
                                                <p>Sed praesent porttitor nequ eiot consequat in nunc.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 history-block">
                                        <div class="history-block-one">
                                            <div class="inner-box">
                                                <h3>2021</h3>
                                                <h5>NewYork Clinic Opened</h5>
                                                <p>Sed praesent porttitor nequ eiot consequat in nunc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/resource/history-1.jpg" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- history-section end -->


        <!-- team-section -->
        <section class="team-section pt_110 pb_90">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-4.png);"></div>
            <div class="auto-container">
                <div class="sec-title centred mb_60">
                    <!-- <p>Felis amet quam ut nibh turpis nibh gravida</p> -->
                    <h2>Meet Surgeons & Doctors</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="assets/images/team/team-1.jpg" alt=""></figure>
                                    <ul class="social-links clearfix">
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                                <div class="lower-content">
                                    <div class="inner">
                                        <span class="designation">Surgeon</span>
                                        <h4><a href="index.html">Dr. Jennifer Thomson</a></h4>
                                        <ul class="info-list clearfix">
                                            <li><img src="assets/images/icons/icon-7.png" alt=""><a href="tel:2258708522">(225) 870 8522</a></li>
                                            <li><img src="assets/images/icons/icon-8.png" alt=""><a href="mailto:info@my-domain.com">info@my-domain.com</a></li>
                                        </ul>
                                    </div>
                                    <div class="link-box">
                                        <a href="index.html">{{ __('messages.about_card_linkbox')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="assets/images/team/team-2.jpg" alt=""></figure>
                                    <ul class="social-links clearfix">
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                                <div class="lower-content">
                                    <div class="inner">
                                        <span class="designation">Optometrist</span>
                                        <h4><a href="index.html">Dr. Broderick Komin</a></h4>
                                        <ul class="info-list clearfix">
                                            <li><img src="assets/images/icons/icon-7.png" alt=""><a href="tel:2258708522">(225) 870 8523</a></li>
                                            <li><img src="assets/images/icons/icon-8.png" alt=""><a href="mailto:info@my-domain.com">info@my-domain.com</a></li>
                                        </ul>
                                    </div>
                                    <div class="link-box">
                                        <a href="index.html">Book Appointment Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="assets/images/team/team-3.jpg" alt=""></figure>
                                    <ul class="social-links clearfix">
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                                <div class="lower-content">
                                    <div class="inner">
                                        <span class="designation">Surgeon</span>
                                        <h4><a href="index.html">Dr. Williams Florence</a></h4>
                                        <ul class="info-list clearfix">
                                            <li><img src="assets/images/icons/icon-7.png" alt=""><a href="tel:2258708522">(225) 870 8524</a></li>
                                            <li><img src="assets/images/icons/icon-8.png" alt=""><a href="mailto:info@my-domain.com">info@my-domain.com</a></li>
                                        </ul>
                                    </div>
                                    <div class="link-box">
                                        <a href="index.html">Book Appointment Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="assets/images/team/team-4.jpg" alt=""></figure>
                                    <ul class="social-links clearfix">
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                                <div class="lower-content">
                                    <div class="inner">
                                        <span class="designation">Surgeon</span>
                                        <h4><a href="index.html">Dr. Melissa Waserman</a></h4>
                                        <ul class="info-list clearfix">
                                            <li><img src="assets/images/icons/icon-7.png" alt=""><a href="tel:2258708522">(225) 870 8525</a></li>
                                            <li><img src="assets/images/icons/icon-8.png" alt=""><a href="mailto:info@my-domain.com">info@my-domain.com</a></li>
                                        </ul>
                                    </div>
                                    <div class="link-box">
                                        <a href="index.html">Book Appointment Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-section end -->


        <!-- testimonial-section -->
        <section class="testimonial-section about-page pt_110 pb_120">
            <div class="auto-container">
                <div class="sec-title mb_60">
                    <h2>Satisfied patients testimonails</h2>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-17"></i></div>
                            <ul class="rating">
                                <li><i class="icon-18"></i></li>
                                <li><i class="icon-18"></i></li>
                                <li><i class="icon-18"></i></li>
                                <li><i class="icon-18"></i></li>
                                <li><i class="icon-18"></i></li>
                            </ul>
                            <h4>“{{ __('messages.about_card_linkbox1')}}”</h4>
                            <p>"{{ __('messages.about_card_linkbox2')}}"</p>
                            <div class="author-box">

                                <figure class="thumb-box"><img src="assets/images/resource/testimonial-1.png" alt=""></figure>
                                <h5>Alex Williamson</h5>
                                <span class="designation">Surgery Patient</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-17"></i></div>
                            <ul class="rating">
                                <li><i class="icon-18"></i></li>
                                <li><i class="icon-18"></i></li>
                                <li><i class="icon-18"></i></li>
                                <li><i class="icon-18"></i></li>
                                <li><i class="icon-18"></i></li>
                            </ul>
                            <h4>"{{ __('messages.about_card_linkbox3')}}"</h4>
                            <p>"{{ __('messages.about_card_linkbox4')}}"</p>
                            <div class="author-box">
                                <figure class="thumb-box"><img src="assets/images/resource/testimonial-2.png" alt=""></figure>
                                <h5>Sandy Thosmson</h5>
                                <span class="designation">Eye Pain Patient</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-17"></i></div>
                            <ul class="rating">
                                <li><i class="icon-18"></i></li>
                                <li><i class="icon-18"></i></li>
                                <li><i class="icon-18"></i></li>
                                <li><i class="icon-18"></i></li>
                                <li><i class="icon-18"></i></li>
                            </ul>
                            <h4>“{{ __('messages.about_card_linkbox5')}}"</h4>
                            <p>{{ __('messages.about_card_linkbox6')}}"</p>
                            <div class="author-box">
                                <figure class="thumb-box"><img src="assets/images/resource/testimonial-3.png" alt=""></figure>
                                <h5>John Brokelyn</h5>
                                <span class="designation">Transplant Patient</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-section end -->


       @endsection