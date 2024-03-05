  <!-- Main Sllider Start -->
  <section class="main-slider">
    <div class="main-slider__carousel owl-carousel owl-theme thm-owl__carousel"
        data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": true, "dotsData": true, "nav": false, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

        <div class="item main-slider__slide-1" data-dot="<button></button>">
            <div class="main-slider__bg"
            style="background-image: url({{ asset('uploads/banners/' . ($banners->banner_image_one ?? '') ) }});">

            </div><!-- /.slider-one__bg -->
            <div class="main-slider__social-box">
                <h4 class="main-slider__social-title">Follow Us</h4>
                <div class="main-slider__social">
                    <a href="{{$banners->fb ?? ''}}"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{$banners->twitter  ?? ''}}"><i class="fab fa-twitter"></i></a>
                    <a href="{{$banners->insta ?? ''}}"><i class="fab fa-instagram"></i></a>
                    <a href="{{$banners->youtube ?? ''}}"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="main-slider__shape-1 float-bob-y">
                <img src="{{ url('/uploads/banners/' . ($banners->banner_image_one ?? '') ) }}" alt="">

            </div>
            <div class="main-slider__shape-2 zoom-fade-2">
                <img src="{{url('/uploads/banners/'. ($banners->banner_image_two ?? '') )   }}" alt="">
            </div>
            <div class="main-slider__shape-3 img-bounce">
                <img src="{{url('/uploads/banners/'.   ($banners->banner_image_three ?? '' ))  }}" alt="">
            </div>
            <div class="container">
                <div class="main-slider__content">
               
                    <h2 class="main-slider__title">{{$banners->headerone ?? ''}}</h2>
                    <div class="main-slider__btn-box">
                        <a href="about.html" class="main-slider__btn thm-btn">
                            <span class="fas fa-long-arrow-alt-right"></span>
                            get started now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="item main-slider__slide-2" data-dot="<button></button>">
            <div class="main-slider__bg"
                style="background-image: url({{asset('uploads/banners/'.($banners->banner_image_two ?? ''))}});">
            </div><!-- /.slider-one__bg -->
            <div class="main-slider__social-box">
                <h4 class="main-slider__social-title">Follow Us</h4>
                <div class="main-slider__social">
                    <a href="{{$banners->fb  ?? ''}}"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{$banners->twitter ?? ''}}"><i class="fab fa-twitter"></i></a>
                    <a href="{{$banners->insta ?? ''}}"><i class="fab fa-instagram"></i></a>
                    <a href="{{$banners->youtube ?? ''}}"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="main-slider__shape-1 float-bob-y">
                <img src="assets/images/shapes/main-slider-shape-1.png" alt="">
            </div>
            <div class="main-slider__shape-2 zoom-fade-2">
                <img src="assets/images/shapes/main-slider-shape-2.png" alt="">
            </div>
            <div class="main-slider__shape-3 img-bounce">
                <img src="assets/images/shapes/main-slider-shape-3.png" alt="">
            </div>
            <div class="container">
                <div class="main-slider__content">
                 
                    <h2 class="main-slider__title">{{$banners->headertwo ?? ''}}</h2>
                    <div class="main-slider__btn-box">
                        <a href="{{url('/about')}}" class="main-slider__btn thm-btn">
                            <span class="fas fa-long-arrow-alt-right"></span>
                            get started now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="item main-slider__slide-3" data-dot="<button></button>">
            <div class="main-slider__bg"
                style="background-image: url({{asset('uploads/banners/'.($banners->banner_image_three ?? ''))}});">
            </div><!-- /.slider-one__bg -->
            <div class="main-slider__social-box">
                <h4 class="main-slider__social-title">Follow Us</h4>
                <div class="main-slider__social">
                    <a href="{{$banners->fb ?? ''}}"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{$banners->twitter ?? ''}}"><i class="fab fa-twitter"></i></a>
                    <a href="{{$banners->insta ?? ''}}"><i class="fab fa-instagram"></i></a>
                    <a href="{{$banners->youtube ?? ''}}"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="main-slider__shape-1 float-bob-y">
                <img src="assets/images/shapes/main-slider-shape-1.png" alt="">
            </div>
            <div class="main-slider__shape-2 zoom-fade-2">
                <img src="assets/images/shapes/main-slider-shape-2.png" alt="">
            </div>
            <div class="main-slider__shape-3 img-bounce">
                <img src="assets/images/shapes/main-slider-shape-3.png" alt="">
            </div>
            <div class="container">
                <div class="main-slider__content">
                   
                    <h2 class="main-slider__title">{{$banners->headerthree ?? ''}}</h2>
                    <div class="main-slider__btn-box">
                        <a href="about.html" class="main-slider__btn thm-btn">
                            <span class="fas fa-long-arrow-alt-right"></span>
                            get started now</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--Main Sllider Start -->
