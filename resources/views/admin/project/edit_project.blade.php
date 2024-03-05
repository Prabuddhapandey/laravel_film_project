@extends('admin.layouts.app')
@section('rating')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Project</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a>Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Project</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create User/Admin</div>

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

                        <form method="post" action={{url('/admin/update/project/'.$profileData->id)}} enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">

                            <label for="">Project Name</label>
                            <input type="text" name="project_name" value="{{$profileData->project_name}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Date</label>
                                <input type="date" name="date" value="{{$profileData->date}}" class="form-control" required>
                            </div>
                          

                            <div class="form-group">
                                <label for="">Images</label>
                                <input type="file" name="project_image" class="form-control" >
                                <img src="{{asset('uploads/projects/'.$profileData->project_image)}}" width="70px" height="70px">
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