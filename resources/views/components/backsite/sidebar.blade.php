 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <div class="sidebar-brand-icon rotate-n-15">
             <i class="fas fa-laugh-wink"></i>
         </div>
         <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item">
         <a class="nav-link active" href="{{ route('dashboard') }}">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Beranda</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Manajemen Blog
     </div>

     <!-- Nav Item - Tables -->
     <li class="nav-item">
         <a class="nav-link" href="{{ route('blog.index') }}">
             <i class="fas fa-newspaper"></i>
             <span>Blog</span></a>
     </li>
     <!-- Nav Item - Tables -->
     <li class="nav-item">
         <a class="nav-link" href="{{ route('category.index') }}">
             <i class="fas fa-list-alt"></i>
             <span>Kategori</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Manajemen User
     </div>

     <!-- Nav Item - Tables -->
     <li class="nav-item">
         <a class="nav-link" href="user-index.html">
             <i class="fas fa-newspaper"></i>
             <span>User</span></a>
     </li>

 </ul>
 <!-- End of Sidebar -->
