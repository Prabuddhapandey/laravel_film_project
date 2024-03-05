@extends('layouts.layout')
@section('main')

<div class="page-wrapper">
   @include('layouts.headerone')
    <div class="stricky-header stricked-menu main-menu main-menu-three">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg"
            style="background-image: url({{asset('uploads/blog/'.$data->blog_banner_image)}});">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <p>Eston Video Production</p>
                <h2>{{$data->blog_banner_title}}</h2>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><span>/</span></li>
                        <li>Blog Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--News Page Start-->
    <section class="news-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="news-details__left">
                        <div class="news-details__content-one">
                            <div class="news-details__img-one">
                                <img src="{{asset('uploads/blog/'.$data->blog_image)}}" alt="">
                            </div>
                            <div class="news-details__meta-box">
                                <div class="news-details__user">
                                  
                                    
                                </div>
                                <div class="news-details__meta-right">
                                    <div class="news-details__date-box-and-dislike">
                                        <div class="news-details__date-box">
                                            <div class="news-details__date-icon">
                                                <span class="icon-calendar"></span>
                                            </div>
                                            <p class="news-details__date-text">{{$data->date}}</p>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <p class="news-details__text-1">{{$data->description}}</p>
                       
                     
                      
                      
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="news-page__sidebar">
                       
                        <div class="sidebar__post">
                            <h3 class="news-page__sidebar-title">Recent Post</h3>
                            
                            @foreach($blogData as $item)
                            <ul class="sidebar__post-list list-unstyled">
                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="{{url('uploads/blog'.$item->blog_image)}}" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <span class="sidebar__post-content-meta"><i
                                                class="fas fa-calendar-alt"></i>{{$item->date}}</span>
                                        <h3>
                                            <a href="{{url('/blog/details/'.$item->id)}}">{{$item->name}}</a>
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