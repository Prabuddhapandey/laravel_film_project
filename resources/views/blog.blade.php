@extends('layouts.layout')

@section('main')
<div class="page-wrapper">
  
    @include('layouts.headerone')
    <div class="stricky-header stricked-menu main-menu main-menu-three">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{asset('uploads/blog/'.($banner->blog_banner_image ?? '')  )}});">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <p>{{$banner->blog_banner_paragraph ?? ''}}</p>
                <h2>{{$banner->blog_banner_title ?? ''}}</h2>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><span>/</span></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--News Page Start-->
    <section class="news-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="news-page__left">
                        @foreach($data as $item)
                        <div class="news-page__single-items">
                            <!--News Page Single Start-->
                            <div class="news-page__single">
                                <div class="news-page__img">
                                    <img src="{{url('uploads/blog/'.($item->blog_image ?? ''))}}" alt="">
                                    
                                </div>
                                <div class="news-page__content-box">
                                    <div class="news-page__content">
                                        <h3 class="news-page__title"><a href="{{url('blog/details/'.$item->id)}}">{{$item->name ?? ''}}</a></h3>
                                        <p class="news-page__text">{{$item->description ?? ''}}</p>
                                    </div>
                                    <div class="news-page__meta-box">
                                        
                                        <div class="news-page__meta-right">
                                            <div class="news-page__date-box-and-dislike">
                                                <div class="news-page__date-box">
                                                    <div class="news-page__date-icon">
                                                        <span class="icon-calendar"></span>
                                                    </div>
                                                    <p class="news-page__date-text">{{$item->date ?? ''}}</p>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        @endforeach
                        {{-- <div class="news-page__pagination">
                            <ul class="pg-pagination list-unstyled">
                                <li class="Prev">
                                    <a href="#" aria-label="Next"><i class="fas fa-long-arrow-alt-left"></i></a>
                                </li>
                                <li class="count"><a href="#">01</a></li>
                                <li class="count"><a href="#">02</a></li>
                                <li class="count"><a href="#">---</a></li>
                                <li class="count"><a href="#">06</a></li>
                                <li class="next">
                                    <a href="#" aria-label="Next"><i class="fas fa-long-arrow-alt-right"></i></a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="news-page__sidebar">
                       
                        <div class="sidebar__post">
                            <h3 class="news-page__sidebar-title">Recent Post</h3>
                            @foreach($data as $item)
                            <ul class="sidebar__post-list list-unstyled">
                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="{{url('uploads/blog/'.($item->blog_image ?? ''))}}" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <span class="sidebar__post-content-meta"><i
                                                class="fas fa-calendar-alt"></i>{{$item->date ?? ''}}</span>
                                        <h3>
                                            <a href="{{url('blog/details/'.$item->id)}}">{{$item->name ?? ''}}</a>
                                        </h3>
                                    </div>
                                </li>
                                
                                
                            </ul>
                            @endforeach
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News Page End-->

    


</div><!-- /.page-wrapper -->
@endsection