@extends('admin.layouts.app')
@section('destination')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Blog</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a >Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Blog</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Blog</div>

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

                        <form method="post" action={{url('admin/storeblog/')}} enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="name">Blog Banner Title</label>
                                <input type="string" name="blog_banner_title" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Blog Banner Paragraph</label>
                                <input type="string" name="blog_banner_paragraph" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Contact Banner</label>
                                <input type="file" name="blog_banner_image" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Blog Title</label>
                                <input type="string" name="name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Blog Description</label>
                                <input type="text" name="description" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Date</label>
                                <input type="date" name="date" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Images</label>
                                <input type="file" name="blog_image" class="form-control" required>
                            </div>
                               
                            {{-- <div class="form-group">
                                <label for="name">Meta Title</label>
                                <input type="string" name="title" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Meta Keywords</label>
                                <input type="string" name="meta_keywords" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="">Meta Description</label>
                                <input type="string" name="meta_descriptions" class="form-control" required>
                            </div> --}}
                          
                          
                            <button type="submit" class="btn btn-primary">Create BLOG</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection