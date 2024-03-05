<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Meta;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
     //services Page
    
     public function CreateProject()
     {
       return view('admin.project.create_project');
     } 
     
 
      //store service
   public function StoreProject(Request $request)
   {
      $request->validate([
         'project_name' => ['required', 'string', 'max:255'],
         'date' => 'required|date',
         'image'=> ['nullable']
     ]);
      
    $data=new Project;
    $data->project_name=$request->input('project_name');
    $data->date=$request->input('date');
    if($request->hasfile('project_image'))
    {
     $file=$request->file('project_image');
     $extension=$file->getClientOriginalExtension();
     $filename=time().'.'.$extension;
     $file->move('uploads/projects/',$filename);
     $data->project_image=$filename;
 
    }
    $data->save();
    return back()->with('success','Project created sucessfully');
    
   }
    
     
    //division table
    public function ProjectTable()
    {
      $profileData=Project::all();
      return view('admin.project.project_table',compact('profileData'));
    } 
 
 
    //edit service
 
    public function EditProject(Request $request,string $id)
     {
        $profileData=Project::find($id);
        return view('admin.project.edit_project',compact('profileData'));
     }
 
     //update service
     public function UpdateProject(Request $request,string $id)
      {

         $request->validate([
            'project_name' => ['required', 'string', 'max:255'],
            'date' => 'required|date',
            'image'=> ['nullable']
        ]);

         $data=Project::find($id);
         $data->project_name=$request->input('project_name');
         $data->date=$request->input('date');
        
         if($request->hasfile('project_image'))
         {
            $destination='uploads/projects/'.$data->project_image;
            if(File::exists($destination))
            {
               File::delete($destination);
   
            }
   
            $file = $request->file('project_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/projects/', $filename);
            $data->project_image = $filename;
   
         }
 
         $data->update();
 
         return back()->with('success','Project Content Updated sucessfully');
         
      }
     
 
       //delete service
       public function DeleteProject($id)
       {
         $profileData=Project::find($id);
         $destination='uploads/projects/'.$profileData->project_image;
            if(File::exists($destination))
            {
               File::delete($destination);
            }
   
            $profileData->delete();
            return back()->with('success', 'Deleted successfully.');
   
       }
}
