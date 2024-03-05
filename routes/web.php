<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EnquiryController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth','verified'])->group(function () {

    
Route::get('/dashboard', function () {
    return view('admin.admin_home');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth','verified'])->group(function () {

    Route::get('/admin/home', [Admincontroller::class, 'index'])->name('admin.home');
    Route::get('/admin/logout', [Admincontroller::class, 'logout'])->name('admin.logout');
    Route::get('/admin/tables', [Admincontroller::class, 'table'])->name('admin.tables');
    Route::get('/admin/createuser', [Admincontroller::class, 'createuser'])->name('admin.createuser');
    Route::get('/admin/create/page', [Admincontroller::class, 'createPage']);
    Route::get('/admin/edit/tables', [Admincontroller::class, 'editPage']);

    

    //blog
    Route::get('/admin/createblog/',[AdminController::class,'createblog'])->name('admin.createblog');
    Route::post('/admin/storeblog/',[AdminController::class,'storeblog'])->name('admin.createblog');
    Route::get('/admin/blogtable/',[AdminController::class,'blogtable']);
    Route::get('admin/editblog/{id}',[AdminController::class,'editblog']);
    Route::put('/admin/updateblog/{id}',[AdminController::class,'updateblog']);
    Route::delete('/admin/deleteblog/{id}',[AdminController::class,'deleteblog']);

    //instructor
    Route::get('/admin/createinstructor/',[AdminController::class,'createinstructor']);
    Route::post('/admin/storeinstructor/',[AdminController::class,'storeinstructor']);
    Route::get('/admin/instructortable/',[AdminController::class,'instructortable']);
    Route::get('admin/editinstructor/{id}',[AdminController::class,'editinstructor']);
    Route::put('/admin/updateinstructor/{id}',[AdminController::class,'updateinstructor']);
    Route::delete('/admin/deleteinstructor/{id}',[AdminController::class,'deleteinstructor']);

    //banner
    Route::get('/admin/createbanner/',[AdminController::class,'createbanner']);
    Route::post('/admin/storebanner/',[AdminController::class,'storebanner']);
    Route::get('/admin/bannertable/',[AdminController::class,'bannertable']);
    Route::get('admin/editbanner/{id}',[AdminController::class,'editbanner']);
    Route::put('/admin/updatebanner/{id}',[AdminController::class,'updatebanner']);
    Route::delete('/admin/deletebanner/{id}',[AdminController::class,'deletebanner']);

    //courses
    Route::get('/admin/createcourses/',[AdminController::class,'createcourses']);
    Route::post('/admin/storecourses/',[AdminController::class,'storecourses']);
    Route::get('/admin/coursestable/',[AdminController::class,'coursestable']);
    Route::get('admin/editcourses/{id}',[AdminController::class,'editcourses']);
    Route::put('/admin/updatecourses/{id}',[AdminController::class,'updatecourses']);
    Route::delete('/admin/deletecourses/{id}',[AdminController::class,'deletecourses']);
    


    //branch
    Route::get('/admin/createbranch/',[AdminController::class,'createbranch']);
    Route::post('/admin/storebranch/',[AdminController::class,'storebranch']);
    Route::get('/admin/branchtable/',[AdminController::class,'branchtable']);
    Route::get('admin/editbranch/{id}',[AdminController::class,'editbranch']);
    Route::put('/admin/updatebranch/{id}',[AdminController::class,'updatebranch']);
    Route::delete('/admin/deletebranch/{id}',[AdminController::class,'deletebranch']);


     //meta
     Route::get('/admin/meta/',[AdminController::class,'meta']);
     Route::post('/admin/storemeta/',[AdminController::class,'storemeta']);
     Route::get('/admin/metatable',[AdminController::class,'metatable']);
     Route::get('admin/editmeta/{id}',[AdminController::class,'editmeta']);
     Route::put('/admin/updatemeta/{id}',[AdminController::class,'updatemeta']);
     Route::delete('/admin/deletemeta/{id}',[AdminController::class,'deletemeta']);


     //services
     Route::get('/admin/createservice/',[AdminController::class,'createservice']);
     Route::post('/admin/storeservice/',[AdminController::class,'storeservice']);
     Route::get('/admin/servicetable/',[AdminController::class,'servicetable']);
     Route::get('admin/editservice/{id}',[AdminController::class,'editservice']);
     Route::put('/admin/updateservice/{id}',[AdminController::class,'updateservice']);
     Route::delete('/admin/deleteservice/{id}',[AdminController::class,'deleteservice']);

     //project
     Route::get('/admin/create/project/',[ProjectController::class,'createproject']);
     Route::post('/admin/store/project/',[ProjectController::class,'StoreProject']);
     Route::get('/admin/project/table/',[ProjectController::class,'ProjectTable']);
     Route::get('admin/edit/project/{id}',[ProjectController::class,'EditProject']);
     Route::put('/admin/update/project/{id}',[ProjectController::class,'UpdateProject']);
     Route::delete('/admin/delete/project/{id}',[ProjectController::class,'deleteproject']);

   

     //

     Route::get('/admin/create/award/',[AwardController::class,'createAward']);
     Route::post('/admin/store/award/',[AwardController::class,'StoreAward']);
     Route::get('/admin/award/table/',[AwardController::class,'AwardTable']);
     Route::get('admin/edit/award/{id}',[AwardController::class,'EditAward']);
     Route::put('/admin/update/award/{id}',[AwardController::class,'UpdateAward']);
     Route::delete('/admin/delete/award/{id}',[AwardController::class,'DeleteAward']);




     Route::get('/admin/create/about/',[AboutController::class,'createAbout']);
     Route::post('/admin/store/about/',[AboutController::class,'StoreAbout']);
     Route::get('/admin/about/table/',[AboutController::class,'AboutTable']);
     Route::get('admin/edit/about/{id}',[AboutController::class,'EditAbout']);
     Route::put('/admin/update/about/{id}',[AboutController::class,'UpdateAbout']);
     Route::delete('/admin/delete/about/{id}',[AboutController::class,'DeleteAbout']);



     Route::get('/admin/create/review/',[ReviewController::class,'createReview']);
     Route::post('/admin/store/review/',[ReviewController::class,'StoreReview']);
     Route::get('/admin/review/table/',[ReviewController::class,'ReviewTable']);
     Route::get('admin/edit/review/{id}',[ReviewController::class,'EditReview']);
     Route::put('/admin/update/review/{id}',[ReviewController::class,'UpdateReview']);
     Route::delete('/admin/delete/review/{id}',[ReviewController::class,'DeleteReview']);

    

     //site setting
     Route::get('/admin/create/siteset/',[ReviewController::class,'createSiteset']);
     Route::post('/admin/store/siteset/',[ReviewController::class,'StoreSiteset']);
     Route::get('/admin/siteset/table/',[ReviewController::class,'SitesetTable']);
     Route::get('admin/edit/siteset/{id}',[ReviewController::class,'EditSiteset']);
     Route::put('/admin/update/siteset/{id}',[ReviewController::class,'UpdateSiteset']);
     Route::delete('/admin/delete/siteset{id}',[ReviewController::class,'DeleteSiteset']);



     //enquiry
     Route::get('/admin/enquiry/table/',[EnquiryController::class,'EnquiryTable']);  
    Route::delete('/admin/delete/enquiry/{id}',[EnquiryController::class,'DeleteEnquiry']);

});
    
});

   
Route::get('/', [Homecontroller::class, 'index']);
Route::get('/blog', [Homecontroller::class, 'blog']);
Route::get('/service', [Homecontroller::class, 'service']);
Route::get('/blog/details/{id}', [Homecontroller::class, 'BlogDetails']);
Route::get('/contact', [Homecontroller::class, 'contact']);
Route::get('/about', [Homecontroller::class, 'about']);


//enquiry
Route::post('/admin/store/enquiry',[EnquiryController::class,'StoreEnquiry'])->name('enquiry');

require __DIR__.'/auth.php';
