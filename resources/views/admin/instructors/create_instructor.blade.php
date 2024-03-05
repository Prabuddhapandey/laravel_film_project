@extends('admin.layouts.app')
@section('instructor')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Team Members</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a >Home</a></li>
      
          <li class="breadcrumb-item active">Team Management</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Team</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="post" action={{url('admin/storeinstructor/')}} enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Person Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Person Postion</label>
                                <input type="text" name="position" class="form-control" required>
                            </div>
                            
                         

                            <div class="form-group">
                                <label for="">Images</label>
                                <input type="file" name="instructor_image" class="form-control" required>
                            </div>
                            
                          
                            <button type="submit" class="btn btn-primary">Create Team</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection