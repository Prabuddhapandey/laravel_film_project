<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;

class EnquiryController extends Controller
{
    //
    public function StoreEnquiry(Request $request)
    {
        $validated=$request->validate([
          'name'=>['required'],
          'email'=>['required'],
          'message'=>['required','max:255']

        ]);
        Enquiry::create($validated);
        return back()->with('success');
    }
     
    public function EnquiryTable(Request $request)
    {

        $data=Enquiry::all();
       return view('admin.enquiry.enquiry_table',compact('data')); 
    }
     
    public function DeleteEnquiry($id)
    {
     $data=Enquiry::find($id);
     $data->delete();
     return back()->with('success','deleted sucessfully');

    }



}
