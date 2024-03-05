@extends('admin.layouts.app')
@section('destination')
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
                    <div class="card-header">Create Project</div>

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

                        <form method="post" action={{url('admin/store/project')}} enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Project Name</label>
                                <input type="text" name="project_name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Images</label>
                                <input type="file" name="project_image" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="name">Project Date</label>
                                <input type="date" name="date" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Create Project</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection