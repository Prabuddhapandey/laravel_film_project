@extends('admin.layouts.app')
@section('rating')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Blogs</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif


                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        
                        <form method="post" action={{url('admin/updateblog/'.$profileData->id)}} enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                           

                            <div class="form-group">
                                <label for="">Blog Title</label>
                                <input type="text" name="name" value="{{$profileData->name}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description" value="{{$profileData->description}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Date</label>
                                <input type="date" name="date" value="{{$profileData->date}}" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Images</label>
                                <input type="file" name="blog_image" class="form-control">
                                <img src="{{asset('uploads/blog/'.$profileData->blog_image)}}" width="70px" height="70px">
                            </div>
                                 
{{-- 
                            <div class="form-group">
                                <label for="name">Meta Title</label>
                                <input type="string" name="title"  value="{{$profileData->meta->title ?? ''}}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Meta Keywords</label>
                                <input type="string" name="meta_keywords" value="{{$profileData->meta->meta_keywords ?? ''}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="">Meta Description</label>
                                <input type="string" name="meta_descriptions" value="{{$profileData->meta->meta_descriptions ?? ''}}" class="form-control">
                            </div> --}}

                                
                            <div class="form-group">
                                <label for="">Blog Banner Title</label>
                                <input type="string" name="blog_banner_title" value="{{$profileData->blog_banner_title}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="description">Blog Banner Banner </label>
                                <input type="string" name="blog_banner_paragraph" value="{{$profileData->blog_banner_paragraph}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Blog Banner Images</label>
                                <input type="file" name="blog_banner_image" class="form-control">
                                <img src="{{asset('uploads/blog/'.$profileData->blog_banner_image)}}" width="70px" height="70px">
                            </div>


                          
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection