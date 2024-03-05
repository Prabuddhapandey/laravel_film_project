<!--Awards One Start-->
<section class="awards-one">
    <div class="container">
        <div class="section-title text-left">
            <p class="section-title__tagline">Got Rewards</p>
            <div class="section-title__title-box">
              
                <p>Our Awards</p>
            </div>
        </div>
        <div class="awards-one__bottom">
            <div class="awards-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                "loop": false,
                "autoplay": false,
                "margin": 90,
                "nav": false,
                "dots": false,
                "smartSpeed": 500,
                "autoplayTimeout": 10000,
                "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                "responsive": {
                    "0": {
                        "items": 3
                    },
                    "768": {
                        "items": 4
                    },
                    "992": {
                        "items": 5
                    },
                    "1200": {
                        "items": 6
                    }
                }
            }'>
            @foreach($awards as $item)
                <!--Awards One Single Start-->
                <div class="item">
                    <div class="awards-one__single">
                        <div class="awards-one__img">
                            <img src="{{url('/uploads/awards/'.$item->award_image)}}"  width="60px" height="60px" alt="">
                        </div>
                        <div class="awards-one__content">
                            <h3>{{$item->award_name}}
                                award <span>{{$item->date}}</span></h3>
                        </div>
                    </div>
                </div>
                <!--Awards One Single Start-->
               @endforeach
            </div>
        </div>
    </div>
</section>
<!--Awards One End-->