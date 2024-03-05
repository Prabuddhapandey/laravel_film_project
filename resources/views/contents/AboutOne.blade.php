<!--About One Start-->
<section class="about-one">
    <div class="about-one__shape-2">
        <img src="assets/images/shapes/about-one-shape-2.png" alt="">
    </div>
    <div class="about-one__shape-3">
        <img src="assets/images/shapes/about-one-shape-3.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="about-one__left">
                    <div class="about-one__img-box">
                        <div class="about-one__img">
                            <img src="{{url('/uploads/abouts/'.($abouts->image_one ?? ''))}}" width='100px' alt="">
                            <div class="about-one__shape-1 float-bob-y">
                                <img src="assets/images/shapes/about-one-shape-1.png" alt="">
                            </div>
                        </div>
                        <div class="about-one__img-2">
                            <img src="{{url('/uploads/abouts/'.($abouts->image_two ?? ''))}}" width="200px" height="250px"  alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="about-one__right">
                    <div class="section-title text-left">
                        
                        <div class="section-title__title-box">
                            <h2 class="section-title__title">{{$abouts->about_us ?? ''}}</h2>
                            
                        </div>
                    </div>
                    <p class="about-one__text">{{$abouts->description ?? ''}}</p>
                    <div class="about-one__btn-box">
                        <a href="about.html" class="about-one__btn thm-btn"><span
                                class="fas fa-long-arrow-alt-right"></span>learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About One End-->
