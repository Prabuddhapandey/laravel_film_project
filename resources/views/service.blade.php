@extends('layouts.layout')

@section('main')
<div class="page-wrapper">
    @include('layouts.headerone')
    <div class="stricky-header stricked-menu main-menu main-menu-three">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-3.jpg);">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <p>Eston Video Production</p>
                <h2>What We Do</h2>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><span>/</span></li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Services Five Start-->
   
    <section class="services-five">
        <div class="container">
            <div class="row">
                @foreach ($collection as $item)
                    
                
                <!--Services One Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="services-one__single">
                        <div class="services-one__icon">
                            <img src="{{url('/uploads/services/'.$item->service_image)}}" alt="" width="120px" height="120px">
                        </div>
                        <h3 class="services-one__title"><a>{{$item->service_name}}</a>
                        </h3>
                        <p class="services-one__text">{{$item->description}}</p>
                     
                    </div>
                </div>
                <!--Services One Single End-->
               @endforeach
               
               

               
            </div>
        </div>
    </section>
    <!--Services Five End-->

    {{-- <!--Feature One Start-->
    <section class="feature-one feature-three">
        <div class="feature-one__wrap">
            <div class="feature-one__title-box">
                <h2 class="feature-one__title">o create high quality cinemat</h2>
            </div>
        </div>
    </section>
    <!--Feature One End-->

    <!--Testimonial Two Start-->
    <section class="testimonial-three">
        <div class="container">
            <div class="section-title text-left">
                <p class="section-title__tagline">Testimonails</p>
                <div class="section-title__title-box">
                    <h2 class="section-title__title">12k+ happy users</h2>
                    <p>Users feedback</p>
                </div>
            </div>
            <div class="testimonial-three__bottom">
                <div class="testimonial-three__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                        "loop": true,
                        "autoplay": true,
                        "margin": 45,
                        "nav": true,
                        "dots": false,
                        "smartSpeed": 500,
                        "autoplayTimeout": 10000,
                        "navText": ["<span class=\"icon-up\"></span>","<span class=\"icon-up\"></span>"],
                        "responsive": {
                            "0": {
                                "items": 1
                            },
                            "768": {
                                "items": 2
                            },
                            "992": {
                                "items": 2
                            },
                            "1320": {
                                "items": 3
                            }
                        }
                    }'>
                    <!-- Testimonial Two Single Start -->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__quote">
                                <img src="assets/images/icon/testimonial-two-quote-icon.png" alt="">
                            </div>
                            <div class="testimonial-two__retting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p class="testimonial-two__text">“ Really glad to be working with
                                Eston. They've been anything less
                                than supportive of me or my
                                endeavors as I branch out into
                                acting and auditioning! “</p>
                            <div class="testimonial-two__client-img-and-info">
                                <div class="testimonial-two__client-img">
                                    <img src="assets/images/testimonial/testimonial-2-1.jpg" alt="">
                                </div>
                                <div class="testimonial-two__client-info">
                                    <h3>Maklon H. Hilix</h3>
                                    <p>Head Of Idea</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Two Single End -->
                    <!-- Testimonial Two Single Start -->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__quote">
                                <img src="assets/images/icon/testimonial-two-quote-icon.png" alt="">
                            </div>
                            <div class="testimonial-two__retting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p class="testimonial-two__text">“ Really glad to be working with
                                Eston. They've been anything less
                                than supportive of me or my
                                endeavors as I branch out into
                                acting and auditioning! “</p>
                            <div class="testimonial-two__client-img-and-info">
                                <div class="testimonial-two__client-img">
                                    <img src="assets/images/testimonial/testimonial-2-2.jpg" alt="">
                                </div>
                                <div class="testimonial-two__client-info">
                                    <h3>Kavin M. Hilix</h3>
                                    <p>Head Of Idea</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Two Single End -->
                    <!-- Testimonial Two Single Start -->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__quote">
                                <img src="assets/images/icon/testimonial-two-quote-icon.png" alt="">
                            </div>
                            <div class="testimonial-two__retting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p class="testimonial-two__text">“ Really glad to be working with
                                Eston. They've been anything less
                                than supportive of me or my
                                endeavors as I branch out into
                                acting and auditioning! “</p>
                            <div class="testimonial-two__client-img-and-info">
                                <div class="testimonial-two__client-img">
                                    <img src="assets/images/testimonial/testimonial-2-3.jpg" alt="">
                                </div>
                                <div class="testimonial-two__client-info">
                                    <h3>Alesha Martin</h3>
                                    <p>Head Of Idea</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Two Single End -->
                    <!-- Testimonial Two Single Start -->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__quote">
                                <img src="assets/images/icon/testimonial-two-quote-icon.png" alt="">
                            </div>
                            <div class="testimonial-two__retting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p class="testimonial-two__text">“ Really glad to be working with
                                Eston. They've been anything less
                                than supportive of me or my
                                endeavors as I branch out into
                                acting and auditioning! “</p>
                            <div class="testimonial-two__client-img-and-info">
                                <div class="testimonial-two__client-img">
                                    <img src="assets/images/testimonial/testimonial-2-1.jpg" alt="">
                                </div>
                                <div class="testimonial-two__client-info">
                                    <h3>Maklon H. Hilix</h3>
                                    <p>Head Of Idea</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Two Single End -->
                    <!-- Testimonial Two Single Start -->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__quote">
                                <img src="assets/images/icon/testimonial-two-quote-icon.png" alt="">
                            </div>
                            <div class="testimonial-two__retting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p class="testimonial-two__text">“ Really glad to be working with
                                Eston. They've been anything less
                                than supportive of me or my
                                endeavors as I branch out into
                                acting and auditioning! “</p>
                            <div class="testimonial-two__client-img-and-info">
                                <div class="testimonial-two__client-img">
                                    <img src="assets/images/testimonial/testimonial-2-2.jpg" alt="">
                                </div>
                                <div class="testimonial-two__client-info">
                                    <h3>Kavin M. Hilix</h3>
                                    <p>Head Of Idea</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Two Single End -->
                    <!-- Testimonial Two Single Start -->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__quote">
                                <img src="assets/images/icon/testimonial-two-quote-icon.png" alt="">
                            </div>
                            <div class="testimonial-two__retting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p class="testimonial-two__text">“ Really glad to be working with
                                Eston. They've been anything less
                                than supportive of me or my
                                endeavors as I branch out into
                                acting and auditioning! “</p>
                            <div class="testimonial-two__client-img-and-info">
                                <div class="testimonial-two__client-img">
                                    <img src="assets/images/testimonial/testimonial-2-3.jpg" alt="">
                                </div>
                                <div class="testimonial-two__client-info">
                                    <h3>Alesha Martin</h3>
                                    <p>Head Of Idea</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Two Single End -->
                    <!-- Testimonial Two Single Start -->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__quote">
                                <img src="assets/images/icon/testimonial-two-quote-icon.png" alt="">
                            </div>
                            <div class="testimonial-two__retting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p class="testimonial-two__text">“ Really glad to be working with
                                Eston. They've been anything less
                                than supportive of me or my
                                endeavors as I branch out into
                                acting and auditioning! “</p>
                            <div class="testimonial-two__client-img-and-info">
                                <div class="testimonial-two__client-img">
                                    <img src="assets/images/testimonial/testimonial-2-1.jpg" alt="">
                                </div>
                                <div class="testimonial-two__client-info">
                                    <h3>Maklon H. Hilix</h3>
                                    <p>Head Of Idea</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Two Single End -->
                    <!-- Testimonial Two Single Start -->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__quote">
                                <img src="assets/images/icon/testimonial-two-quote-icon.png" alt="">
                            </div>
                            <div class="testimonial-two__retting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p class="testimonial-two__text">“ Really glad to be working with
                                Eston. They've been anything less
                                than supportive of me or my
                                endeavors as I branch out into
                                acting and auditioning! “</p>
                            <div class="testimonial-two__client-img-and-info">
                                <div class="testimonial-two__client-img">
                                    <img src="assets/images/testimonial/testimonial-2-2.jpg" alt="">
                                </div>
                                <div class="testimonial-two__client-info">
                                    <h3>Kavin M. Hilix</h3>
                                    <p>Head Of Idea</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Two Single End -->
                    <!-- Testimonial Two Single Start -->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__quote">
                                <img src="assets/images/icon/testimonial-two-quote-icon.png" alt="">
                            </div>
                            <div class="testimonial-two__retting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p class="testimonial-two__text">“ Really glad to be working with
                                Eston. They've been anything less
                                than supportive of me or my
                                endeavors as I branch out into
                                acting and auditioning! “</p>
                            <div class="testimonial-two__client-img-and-info">
                                <div class="testimonial-two__client-img">
                                    <img src="assets/images/testimonial/testimonial-2-3.jpg" alt="">
                                </div>
                                <div class="testimonial-two__client-info">
                                    <h3>Alesha Martin</h3>
                                    <p>Head Of Idea</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Two Single End -->
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial Two End--> --}}

    

</div><!-- /.page-wrapper -->
@endsection