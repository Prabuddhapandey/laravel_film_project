@extends('layouts.layout')

@section('main')


<div class="page-wrapper">
@include('layouts.headerone')

 
  <!--Page Header Start-->
  <section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <p>Video Production</p>
            <h2>About </h2>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><span>/</span></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->

        <!--About Three Start-->
                <section class="about-three">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5 col-lg-6">
                                <div class="about-three__left">
                                    <div class="about-three__img-box">
                                        <div class="about-three__img">
                                            <img  alt="">
                                        </div>
                                        <div class="about-three__img-2">
                                            <img src="{{url('/uploads/abouts/'.($abouts->image_one ?? ''))}}" width="500px" height="300px" alt="">
                                        </div>
                                        <div class="about-three__img-3">
                                            <img src="{{url('/uploads/abouts/'.($abouts->image_two ?? ''))}}"  width="300px" height="250px" alt="">
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6">
                                <div class="about-three__right">
                                    <div class="section-title text-left">
                                        <p class="section-title__tagline">Abou</p>
                                        <div class="section-title__title-box">
                                            <h2 class="section-title__title">{{$abouts->about_us ?? ''}}</h2>
                                          
                                        </div>
                                    </div>
                                    <div class="about-three__tab-box">
                                        <div class="tabs-one__inner tabs-box">
                                            <ul class="tab-buttons clearfix list-unstyled">
                                                <li data-tab="#ourmission" class="tab-btn active-btn"><span>About Us</span>
                                                </li>
                                                
                                            </ul>
                                            <div class="tabs-content">
                                                <!--tab-->
                                                <div class="tab active-tab" id="ourmission">
                                                    <div class="tabs-one__tab-content-inner">
                                                        <p class="tabs-one__text">{{$abouts->description ?? ''}}</p>
                                                    </div>
                                                </div>
                                                <!--tab-->
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="about-three__btn-box">
                                        <a href="{{url('/about')}}" class="about-three__btn thm-btn"><span
                                                class="fas fa-long-arrow-alt-right"></span>learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--About Three End-->

                <!--Services Two Start-->
                <section class="services-two services-four">
                    <div class="container">
                        <div class="services-two__top">
                            <div class="row">
                                <div class="col-xl-6 col-lg-8">
                                    <div class="services-two__top-left">
                                        <div class="section-title text-left">
                                            <p class="section-title__tagline">What We Do</p>
                                            <div class="section-title__title-box">
                                                <h2 class="section-title__title">Our services</h2>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-4">
                                    <div class="services-two__top-right">
                                        <div class="services-two__btn-box">
                                            <a href="{{url('/service')}}" class="services-two__btn thm-btn"><span
                                                    class="fas fa-long-arrow-alt-right"></span>More Service</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="services-two__bottom">
                            <ul class="services-two__list list-unstyled">
                                @foreach($collection as $item)
                                <li>
                                    <div class="services-two__single">
                                        <div class="services-two__icon">
                                            <img src="{{url('/uploads/services/'.($item->service_image  ?? ''))}}"  width="60px" height="60px" alt="">
                                            <div class="services-two__hover-icon">
                                                <img src="{{url('/uploads/services/'.($item->service_image ?? ''))}}"  width="60px" height="60px" alt="">
                                            </div>
                                        </div>
                                        <h3 class="services-two__title"><a href="creative-direction.html">{{$item->service_name ?? ''}}</a>
                                        </h3>
                                        <p class="services-two__text">{{$item->description ?? ''}}</p>
                                    </div>
                                </li>
                               @endforeach
                            </ul>
                        </div>
                    </div>
                </section>
                <!--Services Two End-->

                <!--Video Three Start-->
                <section class="video-three">
                    <div class="container">
                        <div class="video-three__inner">
                            <div class="video-three__bg"
                                style="background-image: url(assets/images/backgrounds/video-three-bg.jpg);"></div>
                            <div class="video-three__video-link">
                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                    <div class="video-three__text">
                                        <p>Play</p>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Video Three End-->
</div>
</div>

@endsection