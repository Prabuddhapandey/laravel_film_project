 <!--Project One Start-->
 <section class="project-one">
    <div class="container">
        <div class="project-one__top">
            <div class="row">
                <div class="col-xl-7 col-xl-7">
                    <div class="project-one__left">
                        <div class="section-title text-left">
                            <p class="section-title__tagline">Our Projects</p>
                            <div class="section-title__title-box">
                                <h2 class="section-title__title">5000+ projects already done</h2>
                                <p>Case study</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-xl-5">
                    <div class="project-one__right">
                        <div class="project-one__btn-box">
                            <a href="project-details.html" class="project-one__btn thm-btn"><span
                                    class="fas fa-long-arrow-alt-right"></span>More Works</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-one__bottom">
            <ul class="project-one__list list-unstyled">

            @foreach($projects as $item)
                <li>
                    <div class="project-one__img">
                        <img src="{{url('uploads/projects/'.$item->project_image)}}"  width="100px" height="120px" alt="">
                    </div>
                    <div class="project-one__list-left">
                       
                        <div class="project-one__list-title">
                            <h5>{{$item->project_name}}</h5>
                        </div>
                    </div>
                    <div class="project-one__list-right">
                        <div class="project-one__director-and-budget">
                            
                            <div class="project-one__budget">
                                <p><span>Date:</span>{{$item->date}}</p>
                            </div>
                        </div>
                        
                    </div>
                </li>
               @endforeach
            </ul>
        </div>
    </div>
</section>
<!--Project One End-->