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
                            <h4><a href="treatments.html">Retina Surgery Treatment</a></h4>
                            <p>Retina surgery is crucial for treating retinal detachment, diabetic retinopathy, and macular degeneration. Using advanced techniques like vitrectomy and laser therapy, our specialists restore vision and prevent further complications.</p>
                            <div class="btn-box">
                                <a href="treatments.html">Explore More</a>
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
                            <h4><a href="treatments.html">Ptosis Repairing</a></h4>
                            <p>Ptosis repair is a surgical procedure to correct drooping eyelids, improving both vision and appearance. This treatment strengthens or repositions the eyelid muscles, restoring a natural, youthful look while enhancing eyesight.</p>
                            <div class="btn-box">
                                <a href="treatments.html">Explore More</a>
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
                            <h4><a href="treatments.html">Cornea Transplant</a></h4>
                            <p>A cornea transplant restores vision by replacing a damaged or diseased cornea with a healthy donor cornea. This procedure treats conditions like corneal scarring, keratoconus, and infections.</p>
                            <div class="btn-box">
                                <a href="treatments.html">Explore More</a>
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
                            <h4><a href="treatments.html">Refractive Nature Disorder</a></h4>
                            <p>Refractive errors occur when the eye fails to focus light correctly, causing blurred vision. Conditions like myopia (nearsightedness), hyperopia (farsightedness), astigmatism.</p>
                            <div class="btn-box">
                                <a href="treatments.html">Explore More</a>
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
                            <h4><a href="treatments.html">Vision Rehabilitation</a></h4>
                            <p>Vision rehabilitation helps individuals with low vision regain independence and improve their quality of life. It includes personalized therapy, assistive devices, and specialized training to enhance daily functioning.</p>
                            <div class="btn-box">
                                <a href="treatments.html">Explore More</a>
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
                            <h4><a href="treatments.html">Paediatric Ophthalmology</a></h4>
                            <p>Paediatric ophthalmology focuses on diagnosing and treating eye conditions in children, ensuring healthy vision development. From routine eye exams to treating conditions like lazy eye, squint, and congenital cataracts.</p>
                            <div class="btn-box">
                                <a href="treatments.html">Explore More</a>
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
                            <h4><a href="treatments.html">
                            Cataract</a></h4>
                            <p>A condition where the eye's natural lens becomes cloudy, leading to blurred or dim vision. Commonly age-related, cataracts can also result from injury or other factors. Symptoms include faded colors, glare, and poor night vision.</p>
                            <div class="btn-box">
                                <a href="treatments.html">Explore More</a>
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
                            <h4><a href="treatments.html">Glaucoma</a></h4>
                            <p>A group of eye conditions characterized by damage to the optic nerve, often due to increased intraocular pressure. It can lead to peripheral vision loss and, if untreated, blindness. Early stages are usually asymptomatic, so regular eye exams are crucial.</p>
                            <div class="btn-box">
                                <a href="treatments.html">Explore More</a>
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
                            <h4><a href="treatments.html">Conjunctivitis</a></h4>
                            <p>Inflammation of the conjunctiva, the clear tissue covering the white part of the eye and inner eyelids. Also known as "pink eye," it can be caused by infections, allergens, or irritants. Symptoms include redness, itching, and discharge.</p>
                            <div class="btn-box">
                                <a href="treatments.html">Explore More</a>
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
                            <h4><a href="treatments.html">Dacryocystitis</a></h4>
                            <p>An infection of the lacrimal (tear) sac, typically due to a blocked nasolacrimal duct. Symptoms include pain, redness, and swelling near the inner corner of the eye, along with tearing.</p>
                            <div class="btn-box">
                                <a href="treatments.html">Explore More</a>
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