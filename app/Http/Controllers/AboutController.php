<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\File;
class AboutController extends Controller

{
    //services Page
   
    public function CreateAbout()
    {
      return view('admin.about.create_about');
    } 
    

     //store service
  public function StoreAbout(Request $request)
  {

   $request->validate([
      'description' => ['required', 'string', 'max:255'],
      
      'image_one'=> ['nullable'],
      'image_two'=> ['nullable']

  ]);

   $data=new About;
   $data->about_us=$request->input('about_us');
   $data->description=$request->input('description');

   if($request->hasfile('image_one'))
   {
    $file=$request->file('image_one');
    $extension=$file->getClientOriginalExtension();
    $filename=time().'.'.$extension;
    $file->move('uploads/abouts/',$filename);
    $data->image_one=$filename;

   }

   if($request->hasfile('image_two'))
   {
    $file=$request->file('image_two');
    $extension=$file->getClientOriginalExtension();
    $filename=time().'.'.$extension;
    $file->move('uploads/abouts/',$filename);
    $data->image_two=$filename;

   }

   $data->save();
  
   return back()->with('success','About created sucessfully');
   }
   
    
   //division table
   public function AboutTable()
   {
     $profileData=About::all();
     return view('admin.about.about_table',compact('profileData'));
   } 


   //edit service

   public function EditAbout(Request $request,string $id)
    {
       $profileData=About::find($id);
       return view('admin.about.edit_about',compact('profileData'));
    }

    //update service
    public function UpdateAbout(Request $request,string $id)
     {

      $request->validate([
         'description' => ['required', 'string', 'max:255'],
         
         'image_one'=> ['nullable'],
         'image_two'=> ['nullable']
   
     ]);
     
        $data=About::find($id);
        $data->about_us=$request->input('about_us');
   $data->description=$request->input('description');
       
        if($request->hasfile('image_one'))
        {
           $destination='uploads/abouts/'.$data->image_one;
           if(File::exists($destination))
           {
              File::delete($destination);
  
           }
  
           $file = $request->file('image_one');
           $extension = $file->getClientOriginalExtension();
           $filename = time().'.'.$extension;
           $file->move('uploads/abouts/', $filename);
           $data->image_one = $filename;
  
        }
        if($request->hasfile('image_two'))
        {
           $destination='uploads/abouts/'.$data->image_two;
           if(File::exists($destination))
           {
              File::delete($destination);
  
           }
  
           $file = $request->file('image_two');
           $extension = $file->getClientOriginalExtension();
           $filename = time().'.'.$extension;
           $file->move('uploads/abouts/', $filename);
           $data->image_two = $filename;
  
        }

        $data->update();

        return back()->with('success','About Content Updated sucessfully');
        
     }
    

      //delete service
      public function DeleteAbout($id)
      {
        $profileData=About::find($id);
        $destination='uploads/abouts/'.$profileData->image_one;
        $destination='uploads/abouts/'.$profileData->image_two;
           if(File::exists($destination))
           {
              File::delete($destination);
           }
  
           $profileData->delete();
           return back()->with('success', 'Deleted successfully.');
  
      }
}
