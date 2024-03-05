@extends('admin.layouts.app')
@section('destination')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>About</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a >Home</a></li>
         
          <li class="breadcrumb-item active">About us Managements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create About US</div>

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

                        <form method="post" action={{url('admin/store/siteset')}} enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Slider text one</label>
                                <input type="text" name="slider_text_one" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Slider text two</label>
                                <input type="text" name="slider_text_two" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Slider text Three</label>
                                <input type="text" name="slider_text_three" class="form-control" required>
                            </div>
                                 
                            <div class="form-group">
                                <label for="">Service title</label>
                                <input type="text" name="service_header" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Project Title</label>
                                <input type="text" name="project_header" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Youtube Link</label>
                                <input type="text" name="link" class="form-control" required>
                            </div>


                            <div class="form-group">
                                <label for="">Slider Image</label>
                                <input type="file" name="slider_image" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Create About Section</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection