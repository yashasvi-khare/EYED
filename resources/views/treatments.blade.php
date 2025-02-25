@extends('layouts.main')
@section('main-container')
<link href="{{ asset('css/module-css/treatments.css') }}" rel="stylesheet">
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
    <div class="pattern-layer" style="background-image: url('{{ asset('images/shape/1.jpg') }}'); height: 300px;  background-size: cover;
    background-position: center;"></div>
    <div class="auto-container" style="position: absolute;top: 184px;    left: 40%;    right: auto;    margin: auto;">
        <div class="content-box">
            <h1>Treatments</h1>
            <ul class="bread-crumb">
                <li><a href="index.html">Home</a></li>
                <li>Treatments</li>
            </ul>
        </div>
    </div>
</section>
<!-- page-title end -->


<!-- treatments-section -->
<section class="treatments-section pt_120 pb_60">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 treatment-block">
                <div class="treatment-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/resource/treatment-1.jpg" alt=""></figure>
                        <div class="content-box">
                            <h4><a href="treatments.html">"{{ __('messages.treatments_sec_title')}}"</a></h4>
                            <p>"{{ __('messages.treatments_sec_title01')}}"</p>
                            <div class="btn-box">
                                <a href="treatments.html">"{{ __('messages.treatments_sec_exp01')}}"</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 treatment-block">
                <div class="treatment-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/resource/treatment-2.jpg" alt=""></figure>
                        <div class="content-box">
                            <h4><a href="treatments.html">"{{ __('messages.treatments_sec_title02')}}"</a></h4>
                            <p>"{{ __('messages.treatments_sec_title03')}}"</p>
                            <div class="btn-box">
                                <a href="treatments.html">"{{ __('messages.treatments_sec_exp02')}}"</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 treatment-block">
                <div class="treatment-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/resource/treatment-3.jpg" alt=""></figure>
                        <div class="content-box">
                            <h4><a href="treatments.html">"{{ __('messages.treatments_sec_title04')}}"</a></h4>
                            <p>"{{ __('messages.treatments_sec_title05')}}"</p>
                            <div class="btn-box">
                                <a href="treatments.html">"{{ __('messages.treatments_sec_exp03')}}"</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 treatment-block">
                <div class="treatment-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/resource/treatment-4.jpg" alt=""></figure>
                        <div class="content-box">
                            <h4><a href="treatments.html">"{{ __('messages.treatments_sec_title06')}}"</a></h4>
                            <p>"{{ __('messages.treatments_sec_title07')}}"</p>
                            <div class="btn-box">
                                <a href="treatments.html">"{{ __('messages.treatments_sec_exp04')}}"</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 treatment-block">
                <div class="treatment-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/resource/treatment-5.jpg" alt=""></figure>
                        <div class="content-box">
                            <h4><a href="treatments.html">"{{ __('messages.treatments_sec_title08')}}"</a></h4>
                            <p>"{{ __('messages.treatments_sec_title09')}}"</p>
                            <div class="btn-box">
                                <a href="treatments.html">"{{ __('messages.treatments_sec_exp05')}}"</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 treatment-block">
                <div class="treatment-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/resource/treatment-6.jpg" alt=""></figure>
                        <div class="content-box">
                            <h4><a href="treatments.html">"{{ __('messages.treatments_sec_title10')}}"</a></h4>
                            <p>"{{ __('messages.treatments_sec_title11')}}"</p>
                            <div class="btn-box">
                                <a href="treatments.html">"{{ __('messages.treatments_sec_exp06')}}"</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 treatment-block">
                <div class="treatment-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/resource/treatment-2.jpg" alt=""></figure>
                        <div class="content-box">
                            <h4><a href="treatments.html">"{{ __('messages.treatments_sec_title12')}}"</a></h4>
                            <p>"{{ __('messages.treatments_sec_title13')}}"</p>
                            <div class="btn-box">
                                <a href="treatments.html">"{{ __('messages.treatments_sec_exp01')}}"</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 treatment-block">
                <div class="treatment-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/resource/treatment-2.jpg" alt=""></figure>
                        <div class="content-box">
                            <h4><a href="treatments.html">"{{ __('messages.treatments_sec_title12')}}"</a></h4>
                            <p>"{{ __('messages.treatments_sec_title14')}}"</p>
                            <div class="btn-box">
                                <a href="treatments.html">"{{ __('messages.treatments_sec_exp01')}}"</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 treatment-block">
                <div class="treatment-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/resource/treatment-2.jpg" alt=""></figure>
                        <div class="content-box">
                            <h4><a href="treatments.html">"{{ __('messages.treatments_sec_title15')}}"</a></h4>
                            <p>"{{ __('messages.treatments_sec_title16')}}".</p>
                            <div class="btn-box">
                                <a href="treatments.html">"{{ __('messages.treatments_sec_exp01')}}"</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 treatment-block">
                <div class="treatment-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/resource/treatment-2.jpg" alt=""></figure>
                        <div class="content-box">
                            <h4><a href="treatments.html">"{{ __('messages.treatments_sec_title17')}}"</a></h4>
                            <p>"{{ __('messages.treatments_sec_title18')}}"</p>
                            <div class="btn-box">
                                <a href="treatments.html">"{{ __('messages.treatments_sec_exp01')}}"</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- treatments-section end -->


@endsection