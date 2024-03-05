@extends('layouts.layout')
@section('main')
<div class="page-wrapper">
   

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    <!--main slider-->
   @include('contents.MainSlider')
    <!--end main slider-->
    
      <!--about one-->
   @include('contents.AboutOne')
   <!--end about one-->
   

    <!--Awards One Start-->
    @include('contents.AwardsOne')
    <!--Awards One End-->

    <!--Feature One Start-->
    <section class="feature-one">
        <div class="feature-one__wrap">
            <div class="feature-one__title-box">
                <h2 class="feature-one__title">Trusted solutions for our customers production challenges</h2>
            </div>
            <div class="feature-one__title-box">
                <h2 class="feature-one__title">Trusted solutions for our customers production challenges</h2>
            </div>
        </div>
    </section>
    <!--Feature One End-->

    <!--Services One Start-->
    <section class="services-one">
        <div class="container">
            <div class="row">
                @foreach($collection as $item )
                <!--Services One Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="services-one__single">
                        <div class="services-one__icon">
                            <img src="{{url('/uploads/services/'.$item->service_image)}}" width="120px" height="120px" alt="">
                        </div>
                        <h3 class="services-one__title"><a href="content-production.html">{{$item->service_name}}</a>
                        </h3>
                        <p class="services-one__text">{{$item->description}}</p>
                        <a href="content-production.html" class="services-one__read-more">Read More</a>
                    </div>
                </div>
                <!--Services One Single End-->
             
                @endforeach
            </div>
        </div>
    </section>
    <!--Services One End-->

    <!--Project One Start-->
    @include('contents.ProjectOne')
    <!--Project One End-->

    <!--Testimonial Three Start-->
    <section class="testimonial-one">
        <div class="container">
            <div class="testimonial-one__slider">
                @foreach($ratings as $item)

                <div class="testimonial-one__main-content">
                    <div class="testimonial-one__carousel owl-carousel owl-theme">

                        <div class="testimonial-one__item">
                            <div class="testimonial-one__quote">
                                <span class="icon-quotation"></span>
                            </div>
                            <p class="testimonial-one__text">“ {{$item->review}} “</p>
                        </div>


                    </div>
                </div>

                <div class="testimonial-one__thumb-outer-box">
                    <div class="testimonial-one__shape-1">
                        <img src="assets/images/shapes/testimonial-one-shape-1.jpg" alt="">
                    </div>
                    <div class="testimonial-one__thumb-carousel owl-carousel owl-theme">
                        <div class="testimonial-one__thumb-item">
                            <div class="testimonial-one__img-holder-box">
                                <div class="testimonial-one__img-holder">
                                    <img src="{{url('/uploads/ratings/'.$item->image)}}" alt="">
                                </div>
                                <div class="testimonial-one__client-info">
                                    <h4 class="testimonial-one__client-name">{{$item->review_by}}</h4>
                                  
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
              
                @endforeach
            </div>
        </div>
    </section>
    <!--Testimonial Three End-->

    <!--Team One Start-->
    @include('contents.Teams')
    <!--Team One End-->

    <!--Sliding Text Start -->
    <section class="sliding-text">
        <div class="sliding-text__wrap">
            <ul class="sliding-text__list list-unstyled">
                <li><a href="#">Full services production company</a></li>
                <li><a href="#">Welcome To SMS Production</a></li>
                <li><a href="#">Film Production</a></li>
            </ul>
            <ul class="sliding-text__list list-unstyled">
                <li><a href="#">Full services production company</a></li>
                <li><a href="#">Welcome To SMS Production</a></li>
                <li><a href="#">Film Production</a></li>
            </ul>
        </div>
    </section>
    <!--Sliding Text Start -->

    <!--Video One Start-->
    <section class="video-one">
        <div class="container">
            <div class="video-one__inner">
                <div class="video-one__img">
                    <img src="{{asset('assets/images/resources/video-one-img.jpg')}}" alt="">
                    <div class="video-one__video-link">
                        <a href="{{$banners->link ?? ''}}" class="video-popup">
                            <div class="video-one__text">
                                <p>Play</p>
                                <i class="ripple"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Video One End-->

    <!--Sliding Text Start -->
    <section class="sliding-text sliding-text-two">
        <div class="sliding-text__wrap">
            <ul class="sliding-text__list list-unstyled cs-reverse_animation">
                <li><a href="#">Photography And Video Studio</a></li>
                <li><a href="#">Creative Production House</a></li>
                <li><a href="#">Photography And Video Studio</a></li>
            </ul>
            <ul class="sliding-text__list list-unstyled cs-reverse_animation">
                <li><a href="#">Photography And Video Studio</a></li>
                <li><a href="#">Creative Production House</a></li>
                <li><a href="#">Photography And Video Studio</a></li>
            </ul>
        </div>
    </section>
    <!--Sliding Text Start -->

    <!--News One Start -->
    @include('contents.News')
    <!--News One End -->

   

    

</div><!-- /.page-wrapper -->
@endsection