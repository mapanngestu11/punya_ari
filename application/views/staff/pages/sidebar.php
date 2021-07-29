<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Kominfo</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="far fa-file-word"></i>
        <span>Wiki</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Wiki</h6>
            <a class="collapse-item" href="<?php echo site_url('staff/list_article');?>">Article List</a>
            <a class="collapse-item" href="<?php echo site_url('staff/my_article');?>">My Article List</a>
            <a class="collapse-item" href="<?php echo site_url('staff/add_article');?>">Add New Article</a>
          
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="far fa-comment-alt"></i>
        <span>Forum</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Forum</h6>
            <a class="collapse-item" href="<?php echo site_url('staff/list_thread');?>">Thread List</a>
            <a class="collapse-item" href="<?php echo site_url('staff/my_thread');?>">My Thread List</a>
            <a class="collapse-item" href="<?php echo site_url('staff/add_thread');?>">Add New Thread</a>
       
        </div>
    </div>
</li>

<!-- Divider -->

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities1"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-archive"></i>
        <span>Document</span>
    </a>
    <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Document</h6>
            <a class="collapse-item" href="<?php echo site_url('staff/list_document');?>">Document List</a>
            <a class="collapse-item" href="<?php echo site_url('staff/my_document');?>">My Document List</a>
            <a class="collapse-item" href="<?php echo site_url('staff/upload_document');?>">Upload Document</a>
            
        </div>
    </div>
</li>

<!-- end dokumen -->

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities2"
        aria-expanded="true" aria-controls="collapseUtilities">
       <i class="fas fa-file-signature"></i>
        <span>Note Of Meeting</span>
    </a>
    <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Note Of Meeting</h6>
            <a class="collapse-item" href="<?php echo site_url('staff/list_note');?>">Note List</a>
            <a class="collapse-item" href="<?php echo site_url('staff/my_note');?>">My Note List</a>
            <a class="collapse-item" href="<?php echo site_url('staff/upload_note');?>">Upload Note</a>
 
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities3"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-chalkboard-teacher"></i>
        <span>Lesson Of Learned</span>
    </a>
    <div id="collapseUtilities3" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Lesson Of Learned</h6>
            <a class="collapse-item" href="<?php echo site_url('staff/list_lesson');?>">Topic List</a>
            <a class="collapse-item" href="<?php echo site_url('staff/my_lesson');?>">My Topic List</a>
            <a class="collapse-item" href="<?php echo site_url('staff/add_lesson');?>">Add New Topic</a>
   
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities4"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-calendar-day"></i>
        <span>Event</span>
    </a>
    <div id="collapseUtilities4" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Event</h6>
            <a class="collapse-item" href="<?php echo site_url('staff/list_event');?>">Event List</a>
            <a class="collapse-item" href="<?php echo site_url('staff/my_event');?>">My Event List</a>
            <a class="collapse-item" href="<?php echo site_url('staff/add_event');?>">Add New Event</a>

           
        </div>
    </div>
</li>



<hr class="sidebar-divider">



</ul>