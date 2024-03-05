<?php

namespace App\Http\Controllers;
use App\Models\Rating;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function CreateReview()
    {
      return view('admin.admin_rating');
    } 
    

     //store service
  public function StoreReview(Request $request)
  {

   $request->validate([
      'review' => ['required', 'string', 'max:255'],
      
      'image'=> ['nullable']
  ]);

   $data=new Rating;
   $data->review=$request->input('review');
   $data->review_by=$request->input('review_by');

   if($request->hasfile('image'))
   {
    $file=$request->file('image');
    $extension=$file->getClientOriginalExtension();
    $filename=time().'.'.$extension;
    $file->move('uploads/ratings/',$filename);
    $data->image=$filename;


   }
   $data->save();
  
   return back()->with('success','Review created sucessfully');
   }
   
    
   //division table
   public function ReviewTable()
   {
     $profileData=Rating::all();
     return view('admin.rating_table',compact('profileData'));
   } 


   //edit service

   public function EditReview(Request $request,string $id)
    {
       $profileData=Rating::find($id);
       return view('admin.edit_rating_table',compact('profileData'));
    }

    //update service
    public function UpdateReview(Request $request,string $id)
     {
      $request->validate([
         'review' => ['required', 'string', 'max:255'],
         
         'image'=> ['nullable']
     ]);
        $data=Rating::find($id);
        $data->review=$request->input('review');
       $data->review_by=$request->input('review_by');
        if($request->hasfile('image'))
        {
           $destination='uploads/ratings/'.$data->award_image;
           if(File::exists($destination))
           {
              File::delete($destination);
  
           }
  
           $file = $request->file('image');
           $extension = $file->getClientOriginalExtension();
           $filename = time().'.'.$extension;
           $file->move('uploads/ratings/', $filename);
           $data->image = $filename;
  
        }

        $data->update();

        return back()->with('success',' Content Updated  sucessfully');
        
     }
    

      //delete service
      public function DeleteProject($id)
      {
        $profileData=Rating::find($id);
        $destination='uploads/ratings/'.$profileData->image;
           if(File::exists($destination))
           {
              File::delete($destination);
           }
  
           $profileData->delete();
           return back()->with('success', 'Deleted successfully.');
  
      }
}
