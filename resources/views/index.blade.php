@extends('layouts.main')
@section('main-container')
<style>
    /* Ayushman Bharat Section */
    .ayushman-section {
        background: #f9f9f9;
        padding: 60px 20px;
        text-align: center;
    }

    .ayushman-container {
        max-width: 900px;
        margin: auto;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    /* Card Styling */
    .ayushman-card {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
        transition: 0.3s ease-in-out;
        text-align: left;
    }

    .ayushman-card:hover {
        box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
    }

    /* Title Card */
    .title-card {
        background: #50AEB1;
        ;
        color: white;
        text-align: center;
        font-size: 22px;
        font-weight: bold;
        padding: 25px;
    }

    /* Text Styling */
    .ayushman-card p {
        font-size: 18px;
        color: #333;
        margin-bottom: 0;
    }

    .ayushman-card h3 {
        font-size: 20px;
        color: #2c3e50;
        margin-bottom: 10px;
    }

    /* List Styling */
    .ayushman-card ul {
        padding-left: 20px;
        margin-top: 10px;
    }

    .ayushman-card ul li {
        font-size: 18px;
        color: #333;
        margin-bottom: 8px;
        font-weight: bold;
    }

    /* Call to Action Card */
    .call-card {
        text-align: center;
    }

    .call-now-btn {
        display: inline-block;
        background: #50AEB1;
        ;
        color: white;
        padding: 14px 25px;
        font-size: 18px;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        margin-top: 15px;
        transition: 0.3s ease-in-out;
        box-shadow: 0px 4px 10px rgba(231, 76, 60, 0.3);
    }

    .call-now-btn:hover {
        background: #50AEB1;
        ;
        transform: scale(1.05);
    }
</style>


<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>
    <nav class="menu-box">
        <div class="nav-logo"><a href="{{route('index')}}"><img src="{{asset('images/logo-2.png')}}" alt="" title=""></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Niyati Rana Market,Ramdayalu Nagar 842001, Muzaffarpur Bihar</li>
                <li><a href="tel:+91 8797215620">+91 8797215620</a></li>
                <li><a href="mailto:info@aligareyehospital.com">info@aligareyehospital.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="{{route('index')}}"><span class="fab fa-twitter"></span></a></li>
                <li><a href="{{route('index')}}"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="{{route('index')}}"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="{{route('index')}}"><span class="fab fa-instagram"></span></a></li>
                <li><a href="{{route('index')}}"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div><!-- End Mobile Menu -->


<!-- banner-section -->
<section class="banner-section p_relative">
    <div class="banner-carousel owl-theme owl-carousel owl-dots-none owl-nav-none">
        <div class="slide-item p_relative">
            <div class="bg-layer" style="background-image:  url ('images/banner/banner-1.jpg')"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>Eye Health Care with Modern Optics</h2>
                    <p>Focused on Your Vision, Dedicated to Your Care <br />Trusted Eye Care for a Brighter Future.</p>
                    <div class="btn-box">
                        <a href="{{route('index')}}" class="theme-btn btn-three">Explore Our Services</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item p_relative">
            <div class="bg-layer" style="background-image:  url ('images/banner/banner-2.jpg')"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>Eye Health Care with Modern Optics</h2>
                    <p>"Aligarh Eye Hospital:<br> Clarity in Vision, Excellence in Care."</p>
                    <div class="btn-box">
                        <a href="{{route('index')}}" class="theme-btn btn-three">Explore Our Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="social-links clearfix">
        <li><a href="{{route('index')}}"><i class="fab fa-twitter"></i></a></li>
        <li><a href="{{route('index')}}"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="{{route('index')}}"><i class="fab fa-instagram"></i></a></li>
        <li><a href="{{route('index')}}"><i class="fab fa-linkedin-in"></i></a></li>
    </ul>
</section>
<!-- banner-section end -->


<!-- appointment-section -->
<!-- appointment-section -->
<!-- appointment-section -->
<section class="appointment-section">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-1.png);"></div>
    <div class="auto-container">
        <div class="inner-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 form-column">
                    <!-- <div class="inner-box">
                                <h4>Quick Online Consultancy</h4>
                                <div class="form-inner">
                                    <form method="post" action="{{route('index')}}">
                                        @csrf
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="text" name="name" placeholder="Enter Name" required>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="text" name="mobile_number" placeholder="Enter Phone Number" required>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="email" name="email" placeholder="Your Email" required>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <div class="select-box">
                                                    <select class="wide" name="doctor_name">
                                                       <option data-display="Select Doctor Name">Select Doctor Name</option>
                                                       <option value="Dr. Jennifer Thomson">Dr. Jennifer Thomson</option>
                                                       <option value="Dr. Broderick Komin">Dr. Broderick Komin</option>
                                                       <option value="Dr. Williams Florence">Dr. Williams Florence</option>
                                                       <option value="Dr. Melissa Waserman">Dr. Melissa Waserman</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="text" name="appointment_date" placeholder="Appointment Date" id="datepicker">
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                    <textarea name="message" placeholder="Write Message"></textarea>
                                                </div>
                                                <button type="submit" class="theme-btn btn-one">Make An Appointment</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> -->
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 schedule-column">
                    <div class="inner-box">
                        <h4>Our Working Schedule</h4>
                        <div class="schedule-box">
                            <ul class="list-item clearfix">
                                <li>
                                    <span class="day">Mon</span>
                                    <div class="line"></div>
                                    <span class="time">8:00 - 21:00</span>
                                </li>
                                <li>
                                    <span class="day">Tue</span>
                                    <div class="line"></div>
                                    <span class="time">8:00 - 21:00</span>
                                </li>
                                <li>
                                    <span class="day">Wed</span>
                                    <div class="line"></div>
                                    <span class="time">8:00 - 21:00</span>
                                </li>
                                <li>
                                    <span class="day">Thu</span>
                                    <div class="line"></div>
                                    <span class="time">8:00 - 21:00</span>
                                </li>
                                <li>
                                    <span class="day">Fri</span>
                                    <div class="line"></div>
                                    <span class="time">8:00 - 21:00</span>
                                </li>
                                <li>
                                    <span class="day">Sat</span>
                                    <div class="line"></div>
                                    <span class="time">8:00 - 21:00</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- appointment-section end -->


<!-- about-section -->
<section class="about-section pt_120 pb_120">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                <div class="image_block_one">
                    <div class="image-box pr_30 pb_30">
                        <figure class="image"><img src="{{asset('images/resource/about-1.jpg')}}" alt=""></figure>
                        <div class="experience-box">
                            <h2>25</h2>
                            <span>{{__('messages.exp_yr')}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                <div class="content_block_one">
                    <div class="content-box ml_80">
                        <div class="sec-title mb_20">
                            <h2>{{__('messages.tile')}}</h2>
                        </div>
                        <div class="text-box mb_40">
                            <p>
                            {{__('messages.tile_2')}}   
                            </p>
                        </div>
                        <div class="inner-box mb_40">
                            <figure class="image"><img src="{{asset('images/resource/about-2.jpg')}}" alt=""></figure>
                            <div class="text-box">
                                <div class="icon-box"><i class="icon-4"></i></div>
                                <h5>{{ __('messages.tile_3')}}</h5>
                                
                            </div>
                        </div>
                        <div class="list-inner mb_50">
                            <ul class="list-style-one clearfix">
                                <li>{{ __('messages.tile_4')}}</li>
                                <li>{{ __('messages.tile_5')}}</li>
                                <li>{{ __('messages.tile_6')}}</li>
                                <li>{{ __('messages.tile_7')}}</li>
                            </ul>
                            <ul class="list-item clearfix">
                                <li>
                                    <div class="icon"><i class="icon-5"></i></div>
                                    <h5>{{ __('messages.tile_8')}}</h5>
                                </li>
                                <li>
                                    <div class="icon"><i class="icon-6"></i></div>
                                    <h5>{{ __('messages.tile_9')}}</h5>
                                </li>
                            </ul>
                        </div>
                        <div class="lower-box">
                            <div class="btn-box mr_40"><a href="{{route('about')}}" class="theme-btn btn-one"></a>{{ __('messages.tile_10')}}</div>
                            <div class="author-box">
                                <h6>Dr. Micheal Thomson</h6>
                                <span class="designation">CEO, Aligarh Eye Hospital Clinic</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-section end -->
<section class="ayushman-section">
    <div class="ayushman-container">

        <!-- Card 1: Title -->
        <div class="ayushman-card title-card">
            <h2>{{ __('messages.ayusman_card_1')}}</h2>
        </div>

        <!-- Card 2: Introduction -->
        <div class="ayushman-card">
            <p>{{ __('messages.ayusman_card_2')}} </p>
        </div>

        <!-- Card 3: Treatment List -->
        <div class="ayushman-card">
            <h3>✅{{ __('messages.avl_trtmnt')}} </h3>
            <ul>
                <li><strong>✔ {{ __('messages.avl_trtmnt_1')}}</strong> –  {{ __('messages.avl_trtmnt_2')}}</li>
                <li><strong>✔{{ __('messages.avl_trtmnt_3')}}</strong> – {{ __('messages.avl_trtmnt_4')}}</li>
                <li><strong>✔ {{ __('messages.avl_trtmnt_5')}}</strong> – {{ __('messages.avl_trtmnt_6')}}</li>
                <li><strong>✔ {{ __('messages.avl_trtmnt_7')}}</strong> – {{ __('messages.avl_trtmnt_8')}}</li>
                <li><strong>✔ {{ __('messages.avl_trtmnt_9')}}</strong> – {{ __('messages.avl_trtmnt_10')}}</li>
            </ul>
        </div>

        <!-- Card 4: Benefits -->
        <div class="ayushman-card">
            <p><b>✅ {{ __('messages.card_1')}} | ✅  {{ __('messages.card_2')}} | ✅  {{ __('messages.card_3')}}</b></p>
        </div>

        <!-- Card 5: Call to Action -->
        <div class="ayushman-card call-card">
            <p><strong>📞  {{ __('messages.call_card_1')}}</strong>  {{ __('messages.call_card_2')}}!</p>
            <a href="tel:+91XXXXXXXXXX" class="call-now-btn">📞  {{ __('messages.call_card_3')}} </a>
        </div>

    </div>
</section>


<!-- service-section -->
<section class="service-section pt_110 pb_120">
    <div class="auto-container">
        <div class="sec-title centred mb_60">
            <p> {{ __('messages.sec_title_1')}}.</p>
            <h2>{{ __('messages.sec_title_2')}}</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="shape" style="background-image:  url('images/shape/shape-2.png');"></div>
                        <div class="overlay-shape" style="background-image:  url('images/shape/shape-3.png');"></div>
                        <div class="icon-box"><i class="icon-7"></i></div>
                        <h3><a href="service-details.html">{{ __('messages.sec_title_3')}}</a></h3>
                        <p>{{__('messages.sec_title_4')}}.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="shape" style="background-image:  url ('images/shape/shape-2.png');"></div>
                        <div class="overlay-shape" style="background-image:  url ('images/shape/shape-3.png');"></div>
                        <div class="icon-box"><i class="icon-8"></i></div>
                        <h3><a href="service-details.html">{{ __('messages.sec_title_5')}}</a></h3>
                        <p>{{ __('messages.sec_title_6')}}..</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="shape" style="background-image:  url ('images/shape/shape-2.png');"></div>
                        <div class="overlay-shape" style="background-image:  url ('images/shape/shape-3.png');"></div>
                        <div class="icon-box"><img src="{{asset('images/icons/icon-1.png')}}" alt=""></div>
                        <h3><a href="service-details.html">{{ __('messages.sec_title_7')}}</a></h3>
                        <p>{{ __('messages.sec_title_8')}}..</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="shape" style="background-image:  url ('images/shape/shape-2.png');"></div>
                        <div class="overlay-shape" style="background-image:  url ('images/shape/shape-3.png');"></div>
                        <div class="icon-box"><i class="icon-10"></i></div>
                        <h3><a href="service-details.html">{{ __('messages.sec_title_9')}}</a></h3>
                        <p>{{ __('messages.sec_title_10')}}.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="shape" style="background-image:  url ('images/shape/shape-2.png');"></div>
                        <div class="overlay-shape" style="background-image:  url ('images/shape/shape-3.png');"></div>
                        <div class="icon-box"><i class="icon-11"></i></div>
                        <h3><a href="service-details.html">{{ __('messages.sec_title_11')}}</a></h3>
                        <p>{{ __('messages.sec_title_12')}}.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="shape" style="background-image:  url('images/shape/shape-2.png');"></div>
                        <div class="overlay-shape" style="background-image:  url ('images/shape/shape-3.png');"></div>
                        <div class="icon-box"><img src="{{asset('/images/icons/icon-2.png')}}" alt=""></div>
                        <h3><a href="service-details.html">{{ __('messages.sec_title_13')}}</a></h3>
                        <p>{{ __('messages.sec_title_14')}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="more-btn centred pt_40">
            <a href="{{route('service')}}" class="theme-btn btn-three">{{ __('messages.sec_title_15')}} </a>
        </div>
    </div>
</section>
<!-- service-section end -->


<!-- surgeries-section -->
<section class="surgeries-section pt_110 pb_120">
    <div class="auto-container">
        <div class="sec-title mb_60 centred">
            <!-- <p>Felis amet quam ut nibh turpis nibh gravida</p> -->
            <h2>{{ __('messages.sec_title_mb_1')}}  </h2>
        </div>
        <div class="testing-tab">
            <div class="tab-btn-box centred">
                <ul class="tab-btns testing-tab-btns clearfix">
                    <li class="p-tab-btn active-btn" data-tab="#tab-1">
                        <h5>{{ __('messages.sec_title_mb_2')}}</h5>
                    </li>
                    <li class="p-tab-btn" data-tab="#tab-2">
                        <h5> {{ __('messages.sec_title_mb_3')}}</h5>
                    </li>
                    <li class="p-tab-btn" data-tab="#tab-3">
                        <h5> {{ __('messages.sec_title_mb_4')}}</h5>
                    </li>
                    <li class="p-tab-btn" data-tab="#tab-4">
                        <h5> {{ __('messages.sec_title_mb_5')}}</h5>
                    </li>
                </ul>
            </div>
            <div class="p-tabs-content">
                <div class="p-tab active-tab" id="tab-1">
                    <div class="single-item-carousel owl-carousel owl-theme owl-nav-none">
                        <div class="content-box" style="background-image:  url ('images/resource/surgeries-1.jpg')">
                            <div class="inner-box">
                                <h4>Prevent Damage to Optic Nerve</h4>
                                <p>The optic nerve plays a crucial role in your vision, transmitting visual information from the eye to the brain. Damage to the optic nerve can lead to vision loss or even blindness, making it vital to take steps to protect its health</p>
                                <a href="service-details.html"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="content-box" style="background-image:  url ('images/resource/surgeries-2.jpg')">
                            <div class="inner-box">
                                <h4>Prevent Damage to Optic Nerve</h4>
                                <p>The optic nerve plays a crucial role in your vision, transmitting visual information from the eye to the brain. Damage to the optic nerve can lead to vision loss or even blindness, making it vital to take steps to protect its health</p>
                                <a href="service-details.html"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="content-box" style="background-image:  url ('images/resource/surgeries-1.jpg')">
                            <div class="inner-box">
                                <h4>Prevent Damage to Optic Nerve</h4>
                                <p>The optic nerve plays a crucial role in your vision, transmitting visual information from the eye to the brain. Damage to the optic nerve can lead to vision loss or even blindness, making it vital to take steps to protect its health</p>
                                <a href="service-details.html"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="content-box" style="background-image:  url('images/resource/surgeries-2.jpg')">
                            <div class="inner-box">
                                <h4>Prevent Damage to Optic Nerve</h4>
                                <p>The optic nerve plays a crucial role in your vision, transmitting visual information from the eye to the brain. Damage to the optic nerve can lead to vision loss or even blindness, making it vital to take steps to protect its health</p>
                                <a href="service-details.html"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-tab" id="tab-2">
                    <div class="single-item-carousel owl-carousel owl-theme owl-nav-none">
                        <div class="content-box" style="background-image:  url ('images/resource/surgeries-1.jpg')">
                            <div class="inner-box">
                                <h4>Prevent Damage to Optic Nerve</h4>
                                <p>The optic nerve plays a crucial role in your vision, transmitting visual information from the eye to the brain. Damage to the optic nerve can lead to vision loss or even blindness, making it vital to take steps to protect its health</p>
                                <a href="service-details.html"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="content-box" style="background-image:  url('images/resource/surgeries-2.jpg')">
                            <div class="inner-box">
                                <h4>Prevent Damage to Optic Nerve</h4>
                                <p>The optic nerve plays a crucial role in your vision, transmitting visual information from the eye to the brain. Damage to the optic nerve can lead to vision loss or even blindness, making it vital to take steps to protect its health</p>
                                <a href="service-details.html"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="content-box" style="background-image:  url('images/resource/surgeries-1.jpg')">
                            <div class="inner-box">
                                <h4>Prevent Damage to Optic Nerve</h4>
                                <p>The optic nerve plays a crucial role in your vision, transmitting visual information from the eye to the brain. Damage to the optic nerve can lead to vision loss or even blindness, making it vital to take steps to protect its health</p>
                                <a href="service-details.html"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="content-box" style="background-image:  url ('images/resource/surgeries-2.jpg')">
                            <div class="inner-box">
                                <h4>Prevent Damage to Optic Nerve</h4>
                                <p>The optic nerve plays a crucial role in your vision, transmitting visual information from the eye to the brain. Damage to the optic nerve can lead to vision loss or even blindness, making it vital to take steps to protect its health</p>
                                <a href="service-details.html"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-tab" id="tab-3">
                    <div class="single-item-carousel owl-carousel owl-theme owl-nav-none">
                        <div class="content-box" style="background-image:  url ('images/resource/surgeries-1.jpg')">
                            <div class="inner-box">
                                <h4>Prevent Damage to Optic Nerve</h4>
                                <p>The optic nerve plays a crucial role in your vision, transmitting visual information from the eye to the brain. Damage to the optic nerve can lead to vision loss or even blindness, making it vital to take steps to protect its health</p>
                                <a href="service-details.html"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="content-box" style="background-image:  url ('images/resource/surgeries-2.jpg')">
                            <div class="inner-box">
                                <h4>Prevent Damage to Optic Nerve</h4>
                                <p>The optic nerve plays a crucial role in your vision, transmitting visual information from the eye to the brain. Damage to the optic nerve can lead to vision loss or even blindness, making it vital to take steps to protect its health</p>
                                <a href="service-details.html"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="content-box" style="background-image:  url ('images/resource/surgeries-1.jpg')">
                            <div class="inner-box">
                                <h4>Prevent Damage to Optic Nerve</h4>
                                <p>The optic nerve plays a crucial role in your vision, transmitting visual information from the eye to the brain. Damage to the optic nerve can lead to vision loss or even blindness, making it vital to take steps to protect its health</p>
                                <a href="service-details.html"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="content-box" style="background-image:  url ('images/resource/surgeries-2.jpg')">
                            <div class="inner-box">
                                <h4>Prevent Damage to Optic Nerve</h4>
                                <p>The optic nerve plays a crucial role in your vision, transmitting visual information from the eye to the brain. Damage to the optic nerve can lead to vision loss or even blindness, making it vital to take steps to protect its health</p>
                                <a href="service-details.html"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-tab" id="tab-4">
                    <div class="single-item-carousel owl-carousel owl-theme owl-nav-none">
                        <div class="content-box" style="background-image:  url ('images/resource/surgeries-1.jpg')">
                            <div class="inner-box">
                                <h4>Prevent Damage to Optic Nerve</h4>
                                <p>The optic nerve plays a crucial role in your vision, transmitting visual information from the eye to the brain. Damage to the optic nerve can lead to vision loss or even blindness, making it vital to take steps to protect its health</p>
                                <a href="service-details.html"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="content-box" style="background-image:  url ('images/resource/surgeries-2.jpg')">
                            <div class="inner-box">
                                <h4>Prevent Damage to Optic Nerve</h4>
                                <p>The optic nerve plays a crucial role in your vision, transmitting visual information from the eye to the brain. Damage to the optic nerve can lead to vision loss or even blindness, making it vital to take steps to protect its health</p>
                                <a href="service-details.html"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="content-box" style="background-image:  url('images/resource/surgeries-1.jpg')">
                            <div class="inner-box">
                                <h4>Prevent Damage to Optic Nerve</h4>
                                <p>The optic nerve plays a crucial role in your vision, transmitting visual information from the eye to the brain. Damage to the optic nerve can lead to vision loss or even blindness, making it vital to take steps to protect its health</p>
                                <a href="service-details.html"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="content-box" style="background-image:  url ('images/resource/surgeries-2.jpg')">
                            <div class="inner-box">
                                <h4>Prevent Damage to Optic Nerve</h4>
                                <p>The optic nerve plays a crucial role in your vision, transmitting visual information from the eye to the brain. Damage to the optic nerve can lead to vision loss or even blindness, making it vital to take steps to protect its health</p>
                                <a href="service-details.html"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- surgeries-section end -->


<!-- funfact-section -->
<section class="funfact-section pb_120">
    <div class="outer-container">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                <div class="funfact-block-one wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box"><img src="{{asset('images/icons/icon-3.png')}}" alt=""></div>
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
                        <div class="icon-box"><img src="{{asset('images/icons/icon-4.png')}}" alt=""></div>
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
                        <div class="icon-box"><img src="{{asset('images/icons/icon-5.png')}}" alt=""></div>
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
                        <div class="icon-box"><img src="{{asset('images/icons/icon-6.png')}}" alt=""></div>
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
<!-- funfact-section end -->


<!-- team-section -->
<section class="team-section pt_110 pb_90">
    <div class="pattern-layer" style="background-image:  url ('images/shape/shape-4.png');"></div>
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
                            <figure class="image"><img src="{{asset('images/team/team-1.jpg')}}" alt=""></figure>
                            <ul class="social-links clearfix">
                                <li><a href="{{route('index')}}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{route('index')}}"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="{{route('index')}}"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="{{route('index')}}"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <div class="inner">
                                <span class="designation">Surgeon</span>
                                <h4><a href="{{route('index')}}">Dr. Jennifer Thomson</a></h4>
                                <ul class="info-list clearfix">
                                    <li><img src="{{asset('images/icons/icon-7.png')}}" alt=""><a href="tel:2258708522">(225) 870 8522</a></li>
                                    <li><img src="{{asset('images/icons/icon-8.png')}}" alt=""><a href="mailto:info@my-domain.com">info@my-domain.com</a></li>
                                </ul>
                            </div>
                            <div class="link-box">
                                <a href="{{route('index')}}">Book Appointment Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('images/team/team-2.jpg')}}" alt=""></figure>
                            <ul class="social-links clearfix">
                                <li><a href="{{route('index')}}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{route('index')}}"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="{{route('index')}}"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="{{route('index')}}"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <div class="inner">
                                <span class="designation">Optometrist</span>
                                <h4><a href="{{route('index')}}">Dr. Broderick Komin</a></h4>
                                <ul class="info-list clearfix">
                                    <li><img src="{{asset('images/icons/icon-7.png')}}" alt=""><a href="tel:2258708522">(225) 870 8523</a></li>
                                    <li><img src="{{asset('images/icons/icon-8.png')}}" alt=""><a href="mailto:info@my-domain.com">info@my-domain.com</a></li>
                                </ul>
                            </div>
                            <div class="link-box">
                                <a href="{{route('index')}}">Book Appointment Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('images/team/team-3.jpg')}}" alt=""></figure>
                            <ul class="social-links clearfix">
                                <li><a href="{{route('index')}}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{route('index')}}"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="{{route('index')}}"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="{{route('index')}}"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <div class="inner">
                                <span class="designation">Surgeon</span>
                                <h4><a href="{{route('index')}}">Dr. Williams Florence</a></h4>
                                <ul class="info-list clearfix">
                                    <li><img src="{{asset('images/icons/icon-7.png')}}" alt=""><a href="tel:2258708522">(225) 870 8524</a></li>
                                    <li><img src="{{asset('images/icons/icon-8.png')}}" alt=""><a href="mailto:info@my-domain.com">info@my-domain.com</a></li>
                                </ul>
                            </div>
                            <div class="link-box">
                                <a href="{{route('index')}}">Book Appointment Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('images/team/team-4.jpg')}}" alt=""></figure>
                            <ul class="social-links clearfix">
                                <li><a href="{{route('index')}}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{route('index')}}"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="{{route('index')}}"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="{{route('index')}}"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <div class="inner">
                                <span class="designation">Surgeon</span>
                                <h4><a href="{{route('index')}}">Dr. Melissa Waserman</a></h4>
                                <ul class="info-list clearfix">
                                    <li><img src="{{asset('images/icons/icon-7.png')}}" alt=""><a href="tel:2258708522">(225) 870 8525</a></li>
                                    <li><img src="{{asset('images/icons/icon-8.png')}}" alt=""><a href="mailto:info@my-domain.com">info@my-domain.com</a></li>
                                </ul>
                            </div>
                            <div class="link-box">
                                <a href="{{route('index')}}">Book Appointment Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- team-section end -->


<!-- gallery-section -->
<section class="gallery-section pt_110">
    <div class="outer-container">
        <div class="sec-title centred mb_60">
            <!-- <p>Felis amet quam ut nibh turpis nibh gravida</p> -->
            <h2>Our Images Gallery</h2>
        </div>
        <div class="gallery-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
            <div class="gallery-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{asset('images/project/project-1.jpg')}}" alt=""></figure>
                    <div class="content-box">
                        <div class="inner">
                            <span>Eye Care</span>
                            <h3><a href="{{route('index')}}">Retinal Surgery</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{asset('images/project/project-2.jpg')}}" alt=""></figure>
                    <div class="content-box">
                        <div class="inner">
                            <span>Eye Care</span>
                            <h3><a href="{{route('index')}}">Refractive Nature</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{asset('images/project/project-3.jpg')}}" alt=""></figure>
                    <div class="content-box">
                        <div class="inner">
                            <span>Eye Care</span>
                            <h3><a href="{{route('index')}}">Cornea Transplant</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{asset('images/project/project-4.jpg')}}" alt=""></figure>
                    <div class="content-box">
                        <div class="inner">
                            <span>Eye Care</span>
                            <h3><a href="{{route('index')}}">Contract Surgery</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{asset('images/project/project-5.jpg')}}" alt=""></figure>
                    <div class="content-box">
                        <div class="inner">
                            <span>Eye Care</span>
                            <h3><a href="{{route('index')}}">Ptosis Repair</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- gallery-section end -->


<!-- testimonial-section -->
<section class="testimonial-section pt_110 pb_120">
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
                    <h4>“Best Eye Care Services”</h4>
                    <p>Aligarh Eye Hospital provides comprehensive eye care with advanced diagnostics, treatments, and surgeries</p>
                    <div class="author-box">
                        <figure class="thumb-box"><img src="{{asset('assets/images/resource/testimonial-1.jpg')}}" alt=""></figure>
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
                    <h4>“Best Eye Care Experience”</h4>
                    <p>At Aligarh Eye Hospital, we pride ourselves on offering the best eye care experience.
                     We use the latest technology and techniques for accurate diagnosis and effective treatments.
                    </p>
                    <div class="author-box">
                        <figure class="thumb-box"><img src="{{asset('images/resource/testimonial-2.jpg')}}" alt=""></figure>
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
                    <h4>“Best Transplant Services”</h4>
                    <p>We offer expert corneal transplant services at Aligarh Eye Hospital, utilizing advanced techniques and technologies for successful outcomes.</p>
                    <div class="author-box">
                        <figure class="thumb-box"><img src="{{asset('images/resource/testimonial-3.jpg')}}" alt=""></figure>
                        <h5>John Brokelyn</h5>
                        <span class="designation">Transplant Patient</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-section end -->


<!-- chooseus-section -->
<section class="chooseus-section pt_120 pb_120">
    <div class="pattern-layer" style="background-image:  url ('images/shape/shape-1.png');"></div>
    <div class="auto-container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image_block_two">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('images/resource/chooseus-1.jpg')}}" alt=""></figure>
                        <div class="image-content">
                            <div class="light-icon"><img src="{{asset('images/icons/icon-10.png')}}" alt=""></div>
                            <div class="icon-box"><img src="{{asset('images/icons/icon-9.png')}}" alt=""></div>
                            <h4>Best Eye-Care Services</h4>
                            <ul class="info">
                                <li>97k Reviews</li>
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
                            <h2>Getting the Best Results - Optical Vision Treatments</h2>
                        </div>
                        <div class="text-box mb_45">
                            <p>Ut odio blandit sit tincidunt vitae praesent ut hac. Imperdiet leo augue ut odio porta leo turpis donec egestas. Libero quam et malesuada scelerisque tempor. Egestas tincidunt tincidunt morbi mattis risus quis pulvinar.</p>
                        </div>
                        <div class="inner-box">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item">
                                        <div class="icon-box"><img src="{{asset('images/icons/icon-11.png')}}" alt=""></div>
                                        <h4>Modern Equipment</h4>
                                        <p>Habitant scelerisque viverra lacinia nisl aliquam sed cursi Vel lorem et nulla.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item">
                                        <div class="icon-box"><img src="{{asset('images/icons/icon-11.png')}}" alt=""></div>
                                        <h4>Emergency Help</h4>
                                        <p>Habitant scelerisque viverra lacinia nisl aliquam sed cursi Vel lorem et nulla.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-box">
                            <a href="{{route('index')}}" class="theme-btn btn-one">Book an Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- chooseus-section end -->


<!-- cta-section -->
<section class="cta-section centred pt_100 pb_100">
    <div class="pattern-layer" style="background-image:  url('images/shape/shape-5.png');"></div>
    <div class="auto-container">
        <div class="inner-box">
            <h2>Need an appointment ot Have a Questions? <br />Feel Free to Get in touch with us</h2>
            <div class="lower-box">
                <div class="support-box mr_50">
                    <div class="icon-box"><i class="icon-2"></i></div>
                    <span>Need help? Call us</span>
                    <a href="tel:8702257682">(870) 225 7682</a>
                </div>
                <div class="btn-box">
                    <a href="{{route('index')}}" class="theme-btn btn-two">Call Now </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- cta-section end -->


<!-- news-section -->
<!-- <section class="news-section pt_110 pb_90">
    <div class="auto-container">
        <div class="sec-title centred mb_60">
            <p>Felis amet quam ut nibh turpis nibh gravida</p>
            <h2>Latest news & updates</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="blog-details.html"><img src="{{asset('images/news/news-1.jpg')}}" alt=""></a></figure>
                            <span class="category">eye care</span>
                        </div>
                        <div class="lower-content">
                            <ul class="post-info">
                                <li><i class="icon-20"></i>20 Aug 2023</li>
                                <li><i class="icon-21"></i><a href="blog-details.html">By Nelson James</a></li>
                            </ul>
                            <h4><a href="blog-details.html">How do Inherited Eyes Diseases happen in Children?</a></h4>
                            <p>Congue natoque sem pellentesque nibh luctus sit ut. Vehicula eget pulvinar.</p>
                            <div class="link"><a href="blog-details.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="blog-details.html"><img src="{{asset('images/news/news-2.jpg')}}" alt=""></a></figure>
                            <span class="category">eye care</span>
                        </div>
                        <div class="lower-content">
                            <ul class="post-info">
                                <li><i class="icon-20"></i>18 Aug 2023</li>
                                <li><i class="icon-21"></i><a href="blog-details.html">By Michael Henry</a></li>
                            </ul>
                            <h4><a href="blog-details.html">Tips & Insights of Our Experts Related to Clear Vision</a></h4>
                            <p>Congue natoque sem pellentesque nibh luctus sit ut. Vehicula eget pulvinar.</p>
                            <div class="link"><a href="blog-details.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="blog-details.html"><img src="{{asset('images/news/news-3.jpg')}}" alt=""></a></figure>
                            <span class="category">eye care</span>
                        </div>
                        <div class="lower-content">
                            <ul class="post-info">
                                <li><i class="icon-20"></i>18 Aug 2023</li>
                                <li><i class="icon-21"></i><a href="blog-details.html">By Anthony Leo</a></li>
                            </ul>
                            <h4><a href="blog-details.html">Using Laser to Reshape Cornea & Correct Refractive Error</a></h4>
                            <p>Congue natoque sem pellentesque nibh luctus sit ut. Vehicula eget pulvinar.</p>
                            <div class="link"><a href="blog-details.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- news-section end -->


@endsection