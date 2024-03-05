  <!--Team One Start-->
  <section class="team-one">
    <div class="team-one__bg" style="background-image: url(assets/images/backgrounds/team-one-bg.png);"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4">
                <div class="team-one__left">
                    <div class="section-title text-left">
                        <p class="section-title__tagline">Our Team</p>
                        <div class="section-title__title-box">
                            <h2 class="section-title__title">Meet Our Team</h2>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-xl-8 col-lg-8">
                <div class="team-one__right">
                    <div class="row">
                        @foreach($teamData as $item)
                        <!--Team One Single Start-->
                        <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="{{url('/uploads/instructors/'.$item->instructor_image ?? '')}}" alt="">
                                    </div>
                                </div>
                                <div class="team-one__content">
                                    <p>{{$item->position ?? ''}}</p>
                                    <h3><a href="team-details.html">{{$item->name ?? ''}}</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--Team One Single End-->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Team One End-->