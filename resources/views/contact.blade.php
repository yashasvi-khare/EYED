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
                <li><a href="tel:+91 8797215620">+91 8797215620</a></li>
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
    <div class="pattern-layer" style="background-image: url(assets/images/shape/3.jpg);  background-color:rgb(148, 6, 6);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Contact Us</h1>
            <ul class="bread-crumb">
                <li><a href="index.html">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</section>
<!-- page-title end -->


<!-- contact-info-section -->
<section class="contact-info-section centred pt_120 pb_90">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-2"></i></div>
                        <span>Contact Us</span>
                        <a href="tel:8797215620">8797215620</a>
                        <p>At Aligarh Eye Hospital, we're here to help<br> you with all your eye care needs</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-37"></i></div>
                        <span>Email</span>
                        <a href="info@aligareyehospital.com">info@aligareyehospital.com</a>
                        <p>For appointments or inquiries,<br> please call or email us today..</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-38"></i></div>
                        <span>Our Location</span>
                        <div class="location">Niyati Rana Market, Near Aam Mahua Marriage hall, Ramdayalu Nagar 842001, Muzaffarpur Bihar</div>
                        <!-- <p>Faucibus pellentesque nunc ante <br />malesuada ac senectus.</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-info-section end -->


<!-- appointment-style-two -->
<section class="appointment-style-two contact-page pb_120">
    <div class="auto-container">
        <div class="lower-content">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <figure class="image-box"><img src="assets/images/resource/appointment-1.jpg" alt=""></figure>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                    <div class="form-inner">
                        <div class="sec-title mb_35">
                            <p>The Future of Eye Care is Here</p>
                            <h2>Book an Appointment</h2>
                        </div>
                        <form method="post" action="{{route('index')}}">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="name" placeholder="Name" required>
                                </div>
                                <!-- <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="lname" placeholder="Last Name" required>
                                </div> -->
                                
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="phone" placeholder="Phone " required>
                                </div>
                                <!-- <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <div class="select-box">
                                        <select class="wide">
                                            <option data-display="Select Doctor Name">Select Doctor Name</option>
                                            <option value="1">Dr. Jennifer Thomson</option>
                                            <option value="2">Dr. Broderick Komin</option>
                                            <option value="3">Dr. Williams Florence</option>
                                            <option value="4">Dr. Melissa Waserman</option>
                                        </select>
                                    </div>
                                </div> -->
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <div class="icon"><i class="icon-33"></i></div>
                                    <input type="text" name="date" placeholder="Appointment Date" id="datepicker">
                                </div>
                                <!-- <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <div class="icon"><i class="icon-33"></i></div>
                                    <input type="text" name="time" placeholder="Appointment Time">
                                </div> -->
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn pt_17">
                                    <button type="submit" class="theme-btn btn-one">Book Appointment now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- appointment-style-two end -->


<!-- google-map-section -->
<section class="google-map-section">
    <div class="outer-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55945.16225505631!2d-73.90847969206546!3d40.66490264739892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1601263396347!5m2!1sen!2sbd" width="600" height="560" frameborder="0" style="border:0; width: 100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</section>
<!-- google-map-section end -->


@endsection