@extends('admin.layouts.app')
@section('destination_table')
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Blog</h1>
                    <p class="mb-4">Blog Management</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            {{-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> --}}
                            <a href="{{url('/admin/createblog/')}}" class="btn btn-primary btn-sm-2">Add Blog</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Blog Banner title</th>
                                            <th>Blog Banner Paragraph</th>
                                            <th>Blog Banner Images</th>
                    
                                            <th>Blog title</th>
                                            <th>Blog description</th>
                                            
                                            <th>Image</th>

                                            <th>Date</th>
                                            <th>Edit</th>
                                             <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Blog Banner title</th>
                                            <th>Blog Banner Paragraph</th>
                                            <th>Blog Banner Images</th>
                    
                                            <th>Blog title</th>
                                            <th>Blog description</th>
                                            
                                            <th>Image</th>

                                            <th>Date</th>
                                            <th>Edit</th>
                                             <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    @foreach($profileData as $item)
                                    <tr>
                                        <td>{{$item->blog_banner_title}}</td>
                                        <td>{{$item->blog_banner_paragraph}}</td>
                                        <td>
                                            <img src="{{asset('uploads/blog/'.$item->blog_banner_image)}}" width="70px" height="70px">
                                        </td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->description}}</td>
                                        <td>
                                            <img src="{{asset('uploads/blog/'.$item->blog_image)}}" width="70px" height="70px">
                                        </td>

                                        <td>{{$item->date}}</td>
                                        <td><a href="{{url('admin/editblog/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a></td>
                                        <td>
                                            <form action="{{url('admin/deleteblog/'.$item->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button></form>
                                        </td>

                                    </tr>
                                    @endforeach

                                    <tbody>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

          
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
@endsection