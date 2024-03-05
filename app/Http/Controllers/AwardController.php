<?php

namespace App\Http\Controllers;
use App\Models\Award;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class AwardController extends Controller
{
    public function CreateAward()
    {
      return view('admin.award.create_award');
    } 
    

     //store service
  public function StoreAward(Request $request)
  {
   $data=new Award;
   $data->award_name=$request->input('award_name');
   $data->date=$request->input('date');

   if($request->hasfile('award_image'))
   {
    $file=$request->file('award_image');
    $extension=$file->getClientOriginalExtension();
    $filename=time().'.'.$extension;
    $file->move('uploads/awards/',$filename);
    $data->award_image=$filename;


   }
   $data->save();
  
   return back()->with('success','Award created sucessfully');
   }
   
    
   //division table
   public function AwardTable()
   {
     $profileData=Award::all();
     return view('admin.award.award_table',compact('profileData'));
   } 


   //edit service

   public function EditAward(Request $request,string $id)
    {
       $profileData=Award::find($id);
       return view('admin.award.edit_award',compact('profileData'));
    }

    //update service
    public function UpdateAward(Request $request,string $id)
     {
        $data=Award::find($id);
        $data->award_name=$request->input('award_name');
        $data->date=$request->input('date');
       
        if($request->hasfile('award_image'))
        {
           $destination='uploads/awards/'.$data->award_image;
           if(File::exists($destination))
           {
              File::delete($destination);
  
           }
  
           $file = $request->file('award_image');
           $extension = $file->getClientOriginalExtension();
           $filename = time().'.'.$extension;
           $file->move('uploads/awards/', $filename);
           $data->award_image = $filename;
  
        }

        $data->update();

        return back()->with('success','Award Content Updated  sucessfully');
        
     }
    

      //delete service
      public function DeleteProject($id)
      {
        $profileData=Award::find($id);
        $destination='uploads/awards/'.$profileData->award_image;
           if(File::exists($destination))
           {
              File::delete($destination);
           }
  
           $profileData->delete();
           return back()->with('success', 'Deleted successfully.');
  
      }
}
