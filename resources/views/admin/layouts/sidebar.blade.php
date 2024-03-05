<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('admin/home')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{Auth()->user()->name ?? ''}}<sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{url('admin/home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

  

    <li class="nav-item">
        <a class="nav-link collapsed"  data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Ratings</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('admin/create/review/')}}" >Add Ratings</a>
                <a class="collapse-item" href="{{url('admin/review/table')}}">Edit Ratings</a>
            </div>
        </div>
    </li>

<!-- Nav Item - Utilities Collapse Menu -->

    <li class="nav-item">
        <a class="nav-link collapsed"  data-toggle="collapse" data-target="#collapseCourses"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span> Project</span>
        </a>
        <div id="collapseCourses" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('/admin/create/project/')}}" >Add Projects</a>
                <a class="collapse-item" href="{{url('/admin/project/table/')}}">Edit Projects</a>
            </div>
        </div>
    </li>
    
    <!-- Divider -->

      <!--destination  -->

    <li class="nav-item">
        <a class="nav-link collapsed"  data-toggle="collapse" data-target="#collapsedestination"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Awards</span>
        </a>
        <div id="collapsedestination" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('/admin/create/award/')}}" >Add Award</a>
                <a class="collapse-item" href="{{url('/admin/award/table/')}}">Edit Award</a>
            </div>
        </div>
    </li>
     <!-- end destination -->


      <!--blog  -->

    <li class="nav-item">
        <a class="nav-link collapsed"  data-toggle="collapse" data-target="#collapseblog"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Blog</span>
        </a>
        <div id="collapseblog" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('/admin/createblog/')}}" >Add Blogs</a>
                <a class="collapse-item" href="{{url('/admin/blogtable/')}}">Edit Blogs</a>
            </div>
        </div>
    </li>
     <!-- end blog -->



      <!--instructor  -->

    <li class="nav-item">
        <a class="nav-link collapsed"  data-toggle="collapse" data-target="#collapseinstructor"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Team Member</span>
        </a>
        <div id="collapseinstructor" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('/admin/createinstructor/')}}" >Add Team</a>
                <a class="collapse-item" href="{{url('/admin/instructortable/')}}">Edit Team</a>
            </div>
        </div>
    </li>
     <!-- end instructor -->


      <!--banner  -->

    <li class="nav-item">
        <a class="nav-link collapsed"  data-toggle="collapse" data-target="#collapsebanner"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Banner</span>
        </a>
        <div id="collapsebanner" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('/admin/createbanner/')}}" >Add Banner</a>
                <a class="collapse-item" href="{{url('/admin/bannertable/')}}">Edit Banner</a>
            </div>
        </div>
    </li>
     <!-- end banner -->


      <!--branch -->

    <li class="nav-item">
        <a class="nav-link collapsed"  data-toggle="collapse" data-target="#collapsebranch"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Contact</span>
        </a>
        <div id="collapsebranch" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('/admin/createbranch/')}}" >Add Contact</a>
                <a class="collapse-item" href="{{url('/admin/branchtable/')}}">Edit Contact</a>
            </div>
        </div>
    </li>
     <!-- end branch -->

        <!--branch -->

    <li class="nav-item">
        <a class="nav-link collapsed"  data-toggle="collapse" data-target="#collapseabout"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>About</span>
        </a>
        <div id="collapseabout" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('/admin/create/about/')}}" >Add About</a>
                <a class="collapse-item" href="{{url('/admin/about/table/')}}">Edit About</a>
            </div>
        </div>
    </li>
     <!-- end branch -->





       <!--service-->

    <li class="nav-item">
        <a class="nav-link collapsed"  data-toggle="collapse" data-target="#collapseservice"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Service</span>
        </a>
        <div id="collapseservice" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('/admin/createservice/')}}" >Add service</a>
                <a class="collapse-item" href="{{url('/admin/servicetable/')}}">Edit service</a>
            </div>
        </div>
    </li>
     <!-- end service-->


  <li class="nav-item">
        <a class="nav-link collapsed"  data-toggle="collapse" data-target="#collapseenquiry"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Enquiry</span>
        </a>
        <div id="collapseenquiry" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              
                <a class="collapse-item" href="{{url('admin/enquiry/table/')}}">Enquiry Table</a>
            </div>
        </div>
    </li>



    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    

  

  

</ul>
<!-- End of Sidebar -->
