<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
use App\Models\Destination;
use App\Models\Blog;
use App\Models\Instructor;
use App\Models\Banner;
use App\Models\User;
use App\Models\Courses;
use App\Models\Branch;
use App\Models\Division;
use App\Models\Service;
use App\Models\Project;
use App\Models\Award;
use App\Models\About;



class HomeController extends Controller
{
    public function index()
    {
        $data=Blog::all();
        $abouts=About::first();
        $ratings=Rating::all();
        $awards=Award::all();
        $collection=Service::all();

        $projects=Project::all();
        $banners=Banner::first();
        $teamData=Instructor::all();
        return view('welcome',compact('teamData','banners','projects','collection','awards','collection','ratings','data','abouts'));
    }
    

    public function contact()
    {
        $banner=Branch::first();
     
  return view('contact',compact('banner'));
    }

    public function blog()
    {
        $banner=Blog::first();
        $data=Blog::all();
        return view('blog',compact('data','banner'));
    }


    public function service()

    {
        $collection=Service::all();
        return view('service',compact('collection'));
    }
    
    
    public function BlogDetails($id)
    {
        $blogData=Blog::all();
        $data=Blog::find($id);
        return view('blog-details',compact('data','blogData'));
    }
   

    public function about()

    {
        $abouts=About::first();
        $collection=Service::all();
        return view('about',compact('abouts','collection'));
    }
    


}
