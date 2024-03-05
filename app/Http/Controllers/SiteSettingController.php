<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteSetting;


class SiteSettingController extends Controller
{
  public function createSiteset()
  {
    return view('admin.sitesetting.createsetting');
  }

  public function StoreSiteset(Request $request)
  {
       $validated=$request->validate([
        'slider_text_one'=>['required'],
        'slider_text_two'=>['required'],
        'slider_text_three'=>['required'],  
        'service_header'=>['required'],
        'project_header'=>['required'],
        'link'=>['required']
       ]);
           
       if ($request->hasFile('slider_image'))
        {
        $file = $request->file('slider_image');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $path = $file->storeAs('uploads/sliders/', $filename);
        $validated->slider_image = $path;
       }


       SiteSetting::create($validated);
       return back()->with('success');
   
    
  }
  
}
