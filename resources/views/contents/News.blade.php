<!--News One Start -->
<section class="news-one">
    <div class="container">
        <div class="news-one__top">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="news-one__left">
                        <div class="section-title text-left">
                            <p class="section-title__tagline">Company Insights</p>
                            <div class="section-title__title-box">
                                <h2 class="section-title__title"> & Event</h2>
                                <p>Blogs</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="news-one__right">
                        <div class="news-one__btn-box">
                            <a href="blog.html" class="news-one__btn thm-btn"><span
                                    class="fas fa-long-arrow-alt-right"></span>more news</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="news-one__bottom">
            <div class="row">

                @foreach($data as $item)
                <!--News One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="news-one__single">
                        <div class="news-one__img-box">
                            <div class="news-one__img">
                                <img src="{{url('uploads/blog/'.$item->blog_image ?? '')}}" alt="">
                                <div class="overlay-icon">
                                    <a href="blog-details.html"><span class="icon-plus"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="news-one__content">
                            <div class="news-one__sub-titlt-and-date">
                                <div class="news-one__sub-title">
                                    <p>Video Production</p>
                                </div>
                                <div class="news-one__date">
                                    <p>{{$item->date ?? ''}}</p>
                                </div>
                            </div>
                            <h3 class="news-one__title"><a href="{{url('blog/details/'.$item->id)}}">{{$item->name ?? ''}}</a></h3>
                           
                        </div>
                    </div>
                </div>
                <!--News One Single End-->
                @endforeach
               
            </div>
        </div>
    </div>
</section>
<!--News One End -->