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
                    <div class="card-header">Create Rating/Admin</div>

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
                        
                        <form method="post" action={{url('admin/store/review')}} enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Review By</label>
                                <input type="text" name="review_by" class="form-control" required>
                            </div>
        
                        
                            <div class="form-group">
                                <label for="description">Review</label>
                                <input type="text" name="review" class="form-control" required>
                            
                            <div class="form-group">
                                <label for="">Images</label>
                                <input type="file" name="image" class="form-control" required>
                            </div>

                          
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection