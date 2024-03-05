<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\User;
use App\Models\Rating;
use App\Models\Destination;
use App\Models\Blog;
use App\Models\Instructor;
use App\Models\Banner;
use App\Models\Contact;
use App\Models\Courses;
use App\Models\Branch;

use App\Models\Meta;
use App\Models\Service;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function index()
   {
    return view('admin.admin_home');
   }

   public function meta()
   {
      return view('admin.meta.meta');
   }

   public function storemeta(Request $request)
   {
      $meta= new Meta;
      $meta->page=$request->input('page');
      $meta->title=$request->input('title');
      $meta->meta_keywords=$request->input('meta_keywords');
      $meta->meta_descriptions=$request->input('meta_descriptions');
      $meta->save();
     return back()->with('success', 'stored Sucessfully');
      
   }

   public function metatable()
    { 
       $profileData=Meta::whereNot('page','blog_details')->whereNot('page','course_details')->whereNot('page','service_details')->whereNot('page','destination_details')->get();
       return view('admin.meta.meta_table',compact('profileData'));
    }
    

    
    public function editmeta(string $id,Request $request)
    { 
       $profileData=Meta::find($id);
       return view('admin.meta.edit_meta',compact('profileData'));
    }
    

    public function updatemeta(string $id,Request $request)
    {
      $meta=Meta::find($id);
      $meta->page=$request->input('page');
      $meta->title=$request->input('title');
      $meta->meta_keywords=$request->input('meta_keywords');
      $meta->meta_descriptions=$request->input('meta_descriptions');
      $meta->update();
      return back()->with('success', 'Updated Sucessfully');
      


    }

public function createPage()
{
   return view('admin.admin_create_page');
  }


  public function editPage()
{
   return view('admin.admin_edit_page');
  }

   public function logout(Request $request)
   {
    Auth::guard('web')->logout();
    
    // $request->session()->invalid();

    // $request->session()->regenerateToken();
    return redirect('/login');
   }
   public function table()
   {
      $profileData=User::all();
    return view('admin.tables',compact('profileData'));
   }
   
   public function createuser()
   {
    return view('admin.createuser');
   }
   

 






      //create blog
      public function createblog()
      {
         return view('admin.blogs.create_blog');
      }
      public function storeblog(Request $request)
      {
         $request->validate([
            'description' => ['required', 'string', 'max:255'],
            
            'blog_image'=> ['nullable']
           
      
        ]);

       $blog=new Blog;
       $blog->blog_banner_title=$request->input('blog_banner_title');
       $blog->blog_banner_paragraph=$request->input('blog_banner_paragraph');
       if($request->hasfile('blog_banner_image'))
       {
          $file = $request->file('blog_banner_image');
           $extension = $file->getClientOriginalExtension();
           $filename = time().'.'.$extension;
           $file->move('uploads/blog/', $filename);
           $blog->blog_banner_image = $filename;
       }
       $blog->name=$request->input('name');
       $blog->description=$request->input('description');
       $blog->date=$request->input('date');
       
       if($request->hasfile('blog_image'))
       {
          $file = $request->file('blog_image');
           $extension = $file->getClientOriginalExtension();
           $filename = time().'.'.$extension;
           $file->move('uploads/blog/', $filename);
           $blog->blog_image = $filename;
       }
       $blog->save();

     

       return back()->with('success','blog created sucessfully');
       }



       //blog table
       public function blogtable()
       {
         $profileData=Blog::all();
         return view('admin.blogs.blog_table',compact('profileData'));
       }
       //edit table
       public function editblog(Request $request,string $id)
       {
         $profileData=Blog::with('meta')->find($id);
         return view('admin.blogs.edit_blog',compact('profileData'));
       }
   ///update
   public function updateblog(Request $request,string $id)
   {


      $request->validate([
         'description' => ['required', 'string', 'max:255'],
         
         'blog_image'=> ['nullable']
        
   
     ]);

      $profileData=Blog::find($id);
      $meta=Meta::find($id);
      $profileData->blog_banner_title=$request->input('blog_banner_title');
      $profileData->blog_banner_paragraph=$request->input('blog_banner_paragraph');
          
      if($request->hasfile('blog_banner_image'))
      {
         $destination='uploads/blog/'.$profileData->blog_banner_image;
         if(File::exists($destination))
         {
            File::delete($destination);

         }

         $file = $request->file('blog_banner_image');
         $extension = $file->getClientOriginalExtension();
         $filename = time().'.'.$extension;
         $file->move('uploads/blog/', $filename);
         $profileData->blog_banner_image = $filename;


      }

      $profileData->name=$request->input('name');
      $profileData->description=$request->input('description');
      $profileData->date=$request->input('date');


      if($request->hasfile('blog_image'))
      {
         $destination='uploads/blog/'.$profileData->image;
         if(File::exists($destination))
         {
            File::delete($destination);

         }

         $file = $request->file('blog_image');
         $extension = $file->getClientOriginalExtension();
         $filename = time().'.'.$extension;
         $file->move('uploads/blog/', $filename);
         $profileData->blog_image = $filename;


      }
      $profileData->update();
      
         
   
      return back()->with('success','blog updated sucessfully');
      
   }
   public function deleteblog($id)
   {
     $profileData=Destination::find($id);
     $destination='uploads/blogs/'.$profileData->image;
        if(File::exists($destination))
        {
           File::delete($destination);
        }

        $profileData->delete();
        return back()->with('success', 'blog deleted successfully.');

   }

   public function createinstructor()
    {
      return view('admin.instructors.create_instructor');
    }

    public function storeinstructor(Request $request)
    {
     $data=new Instructor;
     $data->name=$request->input('name');
     $data->position=$request->input('position');
   
     if($request->hasfile('instructor_image'))
     {
        $file = $request->file('instructor_image');
         $extension = $file->getClientOriginalExtension();
         $filename = time().'.'.$extension;
         $file->move('uploads/instructors/', $filename);
         $data->instructor_image = $filename;
     }
     $data->save();
     return back()->with('success','Instructor created sucessfully');
     }
     public function instructortable()
     {
       $profileData=Instructor::all();
       return view('admin.instructors.instructor_table',compact('profileData'));
     }
    //update
     public function updateinstructor(Request $request,string $id)
     {
        $profileData=Instructor::find($id);
        $profileData->name=$request->input('name');
        $profileData->position=$request->input('position');
        

        if($request->hasfile('instructor_image'))
        {
           $destination='uploads/instructors/'.$profileData->image;
           if(File::exists($destination))
           {
              File::delete($destination);
  
           }
  
           $file = $request->file('instructor_image');
           $extension = $file->getClientOriginalExtension();
           $filename = time().'.'.$extension;
           $file->move('uploads/instructors/', $filename);
           $profileData->instructor_image = $filename;
  
  
        }
        $profileData->update();
        return back()->with('success','instructors updated sucessfully');
        
     }
     //edit page
     public function editinstructor(Request $request,string $id)
     {
       $profileData=Instructor::find($id);
       return view('admin.instructors.edit_instructor',compact('profileData'));
       //delete
     }
     public function deleteinstructor($id)
     {
       $profileData=Instructor::find($id);
       $destination='uploads/instructors/'.$profileData->instructor_image;
          if(File::exists($destination))
          {
             File::delete($destination);
          }
 
          $profileData->delete();
          return back()->with('success', 'deleted successfully.');
 
     }


  /// banner page

  public function createbanner()
  {
    return view('admin.banner.create_banner');
  }
  //store banner

    public function storebanner(Request $request)
    {
     $data=new Banner;
    
     $data->headerone=$request->input('headerone');
     $data->headertwo=$request->input('headertwo');
     $data->headerthree=$request->input('headerthree');


     $data->fb=$request->input('fb');
     $data->insta=$request->input('insta');
     $data->twitter=$request->input('twitter');
      $data->youtube=$request->input('youtube');


     $data->link=$request->input('link');
    
     if($request->hasfile('banner_image_one'))
     {
        $file = $request->file('banner_image_one');
         $extension = $file->getClientOriginalExtension();
         $filename = time().'.'.$extension;
         $file->move('uploads/banners/', $filename);
         $data->banner_image_one = $filename;
     }
     if($request->hasfile('banner_image_two'))
     {
        $file = $request->file('banner_image_two');
         $extension = $file->getClientOriginalExtension();
         $filename = time().'.'.$extension;
         $file->move('uploads/banners/', $filename);
         $data->banner_image_two = $filename;
     }
     if($request->hasfile('banner_image_three'))
     {
        $file = $request->file('banner_image_three');
         $extension = $file->getClientOriginalExtension();
         $filename = time().'.'.$extension;
         $file->move('uploads/banners/', $filename);
         $data->banner_image_three= $filename;
     }
    
     $data->save();
     return back()->with('success','Banner created sucessfully');
     }
     //banner table
     public function bannertable()
     {
       $profileData=Banner::all();
       return view('admin.banner.banner_table',compact('profileData'));
     }
    //edit banner
    public function editbanner(Request $request,string $id)
    {
       $profileData=Banner::find($id);
       return view('admin.banner.edit_banner',compact('profileData'));
    }

    //update banner
    public function updatebanner(Request $request,string $id)
     {
        $profileData=Banner::find($id);
        
        $profileData->headerone=$request->input('headerone');
        $profileData->headertwo=$request->input('headertwo');
        $profileData->headerthree=$request->input('headerthree');

         
     $profileData->fb=$request->input('fb');
     $profileData->insta=$request->input('insta');
     $profileData->twitter=$request->input('twitter');
     $profileData ->youtube=$request->input('youtube');
       
        $profileData->link=$request->input('link');

        if($request->hasfile('banner_image_one'))
        {
           $destination='uploads/banners/'.$profileData->banner_image_one;
           if(File::exists($destination))
           {
              File::delete($destination);
  
           }
  
           $file = $request->file('banner_image_one');
           $extension = $file->getClientOriginalExtension();
           $filename = time().'.'.$extension;
           $file->move('uploads/banners/', $filename);
           $profileData->banner_image_one = $filename;
  
  
        }
          
        if($request->hasfile('banner_image_two'))
        {
           $destination='uploads/banners/'.$profileData->banner_image_two;
           if(File::exists($destination))
           {
              File::delete($destination);
  
           }
  
           $file = $request->file('banner_image_two');
           $extension = $file->getClientOriginalExtension();
           $filename = time().'.'.$extension;
           $file->move('uploads/banners/', $filename);
           $profileData->banner_image_two= $filename;
  
  
        }
        
        if($request->hasfile('banner_image_three'))
        {
           $destination='uploads/banners/'.$profileData->banner_image_three;
           if(File::exists($destination))
           {
              File::delete($destination);
  
           }
  
           $file = $request->file('banner_image_three');
           $extension = $file->getClientOriginalExtension();
           $filename = time().'.'.$extension;
           $file->move('uploads/banners/', $filename);
           $profileData->banner_image_three = $filename;
  
  
        }

        $profileData->update();
        return back()->with('success','Banner updated sucessfully');
        
     }

     //delete banner
     public function deletebanner($id)
     {
       $profileData=Banner::find($id);
       $destination='uploads/banners/'.$profileData->banner_image_one;
          if(File::exists($destination))
          {
             File::delete($destination);
          }
 
          $destination='uploads/banners/'.$profileData->banner_image_two;
          if(File::exists($destination))
          {
             File::delete($destination);
          }
           
          
          $destination='uploads/banners/'.$profileData->banner_image_three;
          if(File::exists($destination))
          {
             File::delete($destination);
          }
          

          $profileData->delete();
          return back()->with('success', 'Deleted successfully.');
 
     }

     public function createContact()
     {
      return view('admin.contact.create_contact');
    }

    public function storecontact(Request $request)
    {
     $data=new Contact;
     $data->address=$request->input('address');
     $data->email=$request->input('email');
     $data->phone=$request->input('phone');
     $data->twitter=$request->input('twitter');
     $data->facebook=$request->input('facebook');
     $data->insta=$request->input('insta');
     $data->map=$request->input('map');

     if($request->hasfile('logo'))
     {
        $file = $request->file('logo');
         $extension = $file->getClientOriginalExtension();
         $filename = time().'.'.$extension;
         $file->move('upload/logo/', $filename);
         $data->logo= $filename;
     }
     $data->save();
     return back()->with('success','Contact created sucessfully');
     }

    /// courses page
 
      

 ///create branch
     public function createbranch()
  {
    return view('admin.branch.create_branch');
  } 


  
  public function storebranch(Request $request)
  {
   $data=new Branch;
   $data->branch_title=$request->input('branch_title');
   $data->branch_paragraph=$request->input('branch_paragraph');
   if($request->hasfile('branch_image'))
   {
    $file=$request->file('branch_image');
    $extension=$file->getClientOriginalExtension();
    $filename=time().'.'.$extension;
    $file->move('uploads/branch/',$filename);
    $data->branch_image=$filename;


   }
   $data->location=$request->input('location');
   $data->email=$request->input('email');
   $data->phone=$request->input('phone');
   $data->map=$request->input('map');
   
   $data->save();
   return back()->with('success','Branches created sucessfully');
   }
      
       //banner branch
     public function branchtable()
     {
       $profileData=Branch::all();
       return view('admin.branch.branch_table',compact('profileData'));
     }



      //update branch
    public function updatebranch(Request $request,string $id)
    {
       $data=Branch::find($id);
       $data->branch_title=$request->input('branch_title');
      $data->branch_paragraph=$request->input('branch_paragraph');
       $data->location=$request->input('location');
       $data->email=$request->input('email');
       $data->phone=$request->input('phone');
       $data->map=$request->input('map');
       if($request->hasfile('branch_image'))
        {
           $destination='uploads/branch/'.$data->branch_image;
           if(File::exists($destination))
           {
              File::delete($destination);
  
           }
  
           $file = $request->file('branch_image');
           $extension = $file->getClientOriginalExtension();
           $filename = time().'.'.$extension;
           $file->move('uploads/branch/', $filename);
           $data->branch_image = $filename;
  
  
        }

       $data->update();
       return back()->with('success','Branch updated sucessfully');
       
    }
     
    //edit branch page
    public function editbranch(Request $request,string $id)
    {
       $profileData=Branch::find($id);
       return view('admin.branch.edit_branch',compact('profileData'));
    }

    public function deletebranch(Request $request,string $id)
    {
      $profileData=Branch::find($id);
      $profileData->delete();
      return back()->with('succes','Branch Deleted sucessfully');
    }






    //services Page
    
    public function createservice()
    {
      return view('admin.services.create_services');
    } 
    

     //store service
  public function storeservice(Request $request)
  {

   $request->validate([
      'description' => ['required', 'string', 'max:255'],
      
      'service_image'=> ['nullable']
     

  ]);

   $data=new Service;
   $data->service_name=$request->input('service_name');
   $data->description=$request->input('description');
   if($request->hasfile('service_image'))
   {
    $file=$request->file('service_image');
    $extension=$file->getClientOriginalExtension();
    $filename=time().'.'.$extension;
    $file->move('uploads/services/',$filename);
    $data->service_image=$filename;


   }
   $data->save();
  
   return back()->with('success','Service created sucessfully');
   }
   
    
   //service table
   public function servicetable()
   {
     $profileData=Service::all();
     return view('admin.services.service_table',compact('profileData'));
   } 


   //edit service

   public function editservice(Request $request,string $id)
    {
       $profileData=Service::find($id);
       return view('admin.services.edit_service',compact('profileData'));
    }

    //update service
    public function updateservice(Request $request,string $id)
     {

      $request->validate([
         'description' => ['required', 'string', 'max:255'],
         
         'service_image'=> ['nullable']
        
   
     ]);

        $data=Service::find($id);
        $data->service_name=$request->input('service_name');
        $data->description=$request->input('description');
        if($request->hasfile('service_image'))
        {
           $destination='uploads/services/'.$data->service_image;
           if(File::exists($destination))
           {
              File::delete($destination);
  
           }
  
           $file = $request->file('service_image');
           $extension = $file->getClientOriginalExtension();
           $filename = time().'.'.$extension;
           $file->move('uploads/services/', $filename);
           $data->service_image = $filename;
  
        }

        $data->update();

        $meta=Meta::find($id);
       
        return back()->with('success','Services updated sucessfully');
        
     }
    

      //delete service
      public function deleteservice($id)
      {
        $profileData=Service::find($id);
        $destination='uploads/services/'.$profileData->service_image;
           if(File::exists($destination))
           {
              File::delete($destination);
           }
  
           $profileData->delete();
           return back()->with('success', 'Deleted successfully.');
  
      }




      
       


}
