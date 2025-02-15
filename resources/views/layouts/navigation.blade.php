 <!-- Topbar Start -->
 <div class="navbar-custom">
     <div class="container-fluid">
         <ul class="list-unstyled topnav-menu float-end mb-0">

             <li class="d-none d-lg-block">
                 <form class="app-search">
                     <div class="app-search-box dropdown">
                         <div class="input-group">
                             <input type="search" class="form-control" placeholder="Search..." id="top-search">
                             <button class="btn input-group-text" type="submit">
                                 <i class="fe-search"></i>
                             </button>
                         </div>
                         <div class="dropdown-menu dropdown-lg" id="search-dropdown">
                             <!-- item-->
                             <div class="dropdown-header noti-title">
                                 <h5 class="text-overflow mb-2">Found 22 results</h5>
                             </div>

                             <!-- item-->
                             <a href="javascript:void(0);" class="dropdown-item notify-item">
                                 <i class="fe-home me-1"></i>
                                 <span>Analytics Report</span>
                             </a>

                             <!-- item-->
                             <a href="javascript:void(0);" class="dropdown-item notify-item">
                                 <i class="fe-aperture me-1"></i>
                                 <span>How can I help you?</span>
                             </a>

                             <!-- item-->
                             <a href="javascript:void(0);" class="dropdown-item notify-item">
                                 <i class="fe-settings me-1"></i>
                                 <span>User profile settings</span>
                             </a>

                             <!-- item-->
                             <div class="dropdown-header noti-title">
                                 <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                             </div>

                             <div class="notification-list">
                                 <!-- item-->
                                 <a href="javascript:void(0);" class="dropdown-item notify-item">
                                     <div class="d-flex align-items-start">
                                         <img class="d-flex me-2 rounded-circle"
                                             src="build/assets/images/users/user-2.jpg" alt="Generic placeholder image"
                                             height="32">
                                         <div class="w-100">
                                             <h5 class="m-0 font-14">Erwin E. Brown</h5>
                                             <span class="font-12 mb-0">UI Designer</span>
                                         </div>
                                     </div>
                                 </a>

                                 <!-- item-->
                                 <a href="javascript:void(0);" class="dropdown-item notify-item">
                                     <div class="d-flex align-items-start">
                                         <img class="d-flex me-2 rounded-circle"
                                             src="build/assets/images/users/user-5.jpg" alt="Generic placeholder image"
                                             height="32">
                                         <div class="w-100">
                                             <h5 class="m-0 font-14">Jacob Deo</h5>
                                             <span class="font-12 mb-0">Developer</span>
                                         </div>
                                     </div>
                                 </a>
                             </div>

                         </div>
                     </div>
                 </form>
             </li>

             <li class="dropdown d-inline-block d-lg-none">
                 <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown"
                     href="#" role="button" aria-haspopup="false" aria-expanded="false">
                     <i class="fe-search noti-icon"></i>
                 </a>
                 <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                     <form class="p-3">
                         <input type="text" class="form-control" placeholder="Search ..."
                             aria-label="Recipient's username">
                     </form>
                 </div>
             </li>

             <li class="dropdown d-none d-lg-inline-block">
                 <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen"
                     href="#">
                     <i class="fe-maximize noti-icon"></i>
                 </a>
             </li>

             {{-- <li class="dropdown d-none d-lg-inline-block topbar-dropdown">
                 <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown"
                     href="#" role="button" aria-haspopup="false" aria-expanded="false">
                     <i class="fe-grid noti-icon"></i>
                 </a>
                 <div class="dropdown-menu dropdown-lg dropdown-menu-end">

                     <div class="p-lg-1">
                         <div class="row g-0">
                             <div class="col">
                                 <a class="dropdown-icon-item" href="#">
                                     <img src="build/assets/images/brands/slack.png" alt="slack">
                                     <span>Slack</span>
                                 </a>
                             </div>
                             <div class="col">
                                 <a class="dropdown-icon-item" href="#">
                                     <img src="build/assets/images/brands/github.png" alt="Github">
                                     <span>GitHub</span>
                                 </a>
                             </div>
                             <div class="col">
                                 <a class="dropdown-icon-item" href="#">
                                     <img src="build/assets/images/brands/dribbble.png" alt="dribbble">
                                     <span>Dribbble</span>
                                 </a>
                             </div>
                         </div>

                         <div class="row g-0">
                             <div class="col">
                                 <a class="dropdown-icon-item" href="#">
                                     <img src="build/assets/images/brands/bitbucket.png" alt="bitbucket">
                                     <span>Bitbucket</span>
                                 </a>
                             </div>
                             <div class="col">
                                 <a class="dropdown-icon-item" href="#">
                                     <img src="build/assets/images/brands/dropbox.png" alt="dropbox">
                                     <span>Dropbox</span>
                                 </a>
                             </div>
                             <div class="col">
                                 <a class="dropdown-icon-item" href="#">
                                     <img src="build/assets/images/brands/g-suite.png" alt="G Suite">
                                     <span>G Suite</span>
                                 </a>
                             </div>

                         </div>
                     </div>

                 </div>
             </li> --}}

             {{-- <li class="dropdown d-none d-lg-inline-block topbar-dropdown">
                 <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown"
                     href="#" role="button" aria-haspopup="false" aria-expanded="false">
                     <img src="build/assets/images/flags/us.jpg" alt="user-image" height="16">
                 </a>
                 <div class="dropdown-menu dropdown-menu-end">

                     <!-- item-->
                     <a href="javascript:void(0);" class="dropdown-item">
                         <img src="build/assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12">
                         <span class="align-middle">German</span>
                     </a>

                     <!-- item-->
                     <a href="javascript:void(0);" class="dropdown-item">
                         <img src="build/assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12">
                         <span class="align-middle">Italian</span>
                     </a>

                     <!-- item-->
                     <a href="javascript:void(0);" class="dropdown-item">
                         <img src="build/assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12">
                         <span class="align-middle">Spanish</span>
                     </a>

                     <!-- item-->
                     <a href="javascript:void(0);" class="dropdown-item">
                         <img src="build/assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12">
                         <span class="align-middle">Russian</span>
                     </a>

                 </div>
             </li> --}}

             {{-- <li class="dropdown notification-list topbar-dropdown">
                 <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown"
                     href="#" role="button" aria-haspopup="false" aria-expanded="false">
                     <i class="fe-bell noti-icon"></i>
                     <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                 </a>
                 <div class="dropdown-menu dropdown-menu-end dropdown-lg">

                     <!-- item-->
                     <div class="dropdown-item noti-title">
                         <h5 class="m-0">
                             <span class="float-end">
                                 <a href="" class="text-dark">
                                     <small>Clear All</small>
                                 </a>
                             </span>Notification
                         </h5>
                     </div>

                     <div class="noti-scroll" data-simplebar>

                         <!-- item-->
                         <a href="javascript:void(0);" class="dropdown-item notify-item active">
                             <div class="notify-icon">
                                 <img src="build/assets/images/users/user-1.jpg" class="img-fluid rounded-circle"
                                     alt="" />
                             </div>
                             <p class="notify-details">Cristina Pride</p>
                             <p class="text-muted mb-0 user-msg">
                                 <small>Hi, How are you? What about our next meeting</small>
                             </p>
                         </a>

                         <!-- item-->
                         <a href="javascript:void(0);" class="dropdown-item notify-item">
                             <div class="notify-icon bg-primary">
                                 <i class="mdi mdi-comment-account-outline"></i>
                             </div>
                             <p class="notify-details">Caleb Flakelar commented on Admin
                                 <small class="text-muted">1 min ago</small>
                             </p>
                         </a>

                         <!-- item-->
                         <a href="javascript:void(0);" class="dropdown-item notify-item">
                             <div class="notify-icon">
                                 <img src="build/assets/images/users/user-4.jpg" class="img-fluid rounded-circle"
                                     alt="" />
                             </div>
                             <p class="notify-details">Karen Robinson</p>
                             <p class="text-muted mb-0 user-msg">
                                 <small>Wow ! this admin looks good and awesome design</small>
                             </p>
                         </a>

                         <!-- item-->
                         <a href="javascript:void(0);" class="dropdown-item notify-item">
                             <div class="notify-icon bg-warning">
                                 <i class="mdi mdi-account-plus"></i>
                             </div>
                             <p class="notify-details">New user registered.
                                 <small class="text-muted">5 hours ago</small>
                             </p>
                         </a>

                         <!-- item-->
                         <a href="javascript:void(0);" class="dropdown-item notify-item">
                             <div class="notify-icon bg-info">
                                 <i class="mdi mdi-comment-account-outline"></i>
                             </div>
                             <p class="notify-details">Caleb Flakelar commented on Admin
                                 <small class="text-muted">4 days ago</small>
                             </p>
                         </a>

                         <!-- item-->
                         <a href="javascript:void(0);" class="dropdown-item notify-item">
                             <div class="notify-icon bg-secondary">
                                 <i class="mdi mdi-heart"></i>
                             </div>
                             <p class="notify-details">Carlos Crouch liked
                                 <b>Admin</b>
                                 <small class="text-muted">13 days ago</small>
                             </p>
                         </a>
                     </div>

                     <!-- All-->
                     <a href="javascript:void(0);"
                         class="dropdown-item text-center text-primary notify-item notify-all">
                         View all
                         <i class="fe-arrow-right"></i>
                     </a>

                 </div>
             </li> --}}

             <li class="dropdown notification-list topbar-dropdown">
                 <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown"
                     href="#" role="button" aria-haspopup="false" aria-expanded="false">
                     <img src="build/assets/images/users/profile.jpeg" alt="user-image" class="rounded-circle">
                     <span class="pro-user-name ms-1">
                         Alwan Irfan <i class="mdi mdi-chevron-down"></i>
                     </span>
                 </a>
                 <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                     <!-- item-->
                     <div class="dropdown-header noti-title">
                         <h6 class="text-overflow m-0">Welcome !</h6>
                     </div>

                     <!-- item-->
                     <a href="javascript:void(0);" class="dropdown-item notify-item">
                         <i class="fe-user"></i>
                         <span>My Account</span>
                     </a>

                     <!-- item-->
                     <a href="javascript:void(0);" class="dropdown-item notify-item">
                         <i class="fe-settings"></i>
                         <span>Settings</span>
                     </a>

                     <!-- item-->
                     <a href="javascript:void(0);" class="dropdown-item notify-item">
                         <i class="fe-lock"></i>
                         <span>Lock Screen</span>
                     </a>

                     <div class="dropdown-divider"></div>

                     <!-- item-->
                     <form method="POST" action="{{ route('logout') }}">
                         @csrf
                         <a href="{{ route('logout') }}" class="dropdown-item notify-item"
                             onclick="event.preventDefault(); this.closest('form').submit();">
                             <i class="fe-log-out me-1"></i>
                             <span>Logout</span>
                         </a>
                     </form>


                 </div>
             </li>

             <li class="dropdown notification-list">
                 <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                     <i class="fe-settings noti-icon"></i>
                 </a>
             </li>

         </ul>

         <!-- LOGO -->
         <div class="logo-box">
             <a href="index.html" class="logo logo-dark text-center">
                 <span class="logo-sm">
                     <img src="build/assets/images/logo-sm.png" alt="" height="22">
                     <!-- <span class="logo-lg-text-light">UBold</span> -->
                 </span>
                 <span class="logo-lg">
                     <img src="build/assets/images/logo-dark.png" alt="" height="20">
                     <!-- <span class="logo-lg-text-light">U</span> -->
                 </span>
             </a>

             <a href="index.html" class="logo logo-light text-center">
                 <span class="logo-sm">
                     <img src="build/assets/images/logo-sm.png" alt="" height="22">
                 </span>
                 <span class="logo-lg">
                     <img src="build/assets/images/logo-light.png" alt="" height="20">
                 </span>
             </a>
         </div>

         <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
             <li>
                 <button class="button-menu-mobile waves-effect waves-light">
                     <i class="fe-menu"></i>
                 </button>
             </li>

             <li>
                 <!-- Mobile menu toggle (Horizontal Layout)-->
                 <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                     <div class="lines">
                         <span></span>
                         <span></span>
                         <span></span>
                     </div>
                 </a>
                 <!-- End mobile menu toggle-->
             </li>
         </ul>
         <div class="clearfix"></div>
     </div>
 </div>
 <!-- end Topbar -->

 <!-- ========== Left Sidebar Start ========== -->
 <div class="left-side-menu">

     <div class="h-100" data-simplebar>

         <!-- User box -->
         <div class="user-box text-center">
             <img src="build/assets/images/users/profile.jpeg" alt="user-img" title="Mat Helme"
                 class="rounded-circle avatar-md">
             <div class="dropdown">
                 <a href="javascript: void(0);" class="text-black dropdown-toggle h5 mt-2 mb-1 d-block"
                     data-bs-toggle="dropdown">Alwan Irfan</a>
                 <div class="dropdown-menu user-pro-dropdown">

                     <!-- item-->
                     <a href="javascript:void(0);" class="dropdown-item notify-item">
                         <i class="fe-user me-1"></i>
                         <span>My Account</span>
                     </a>

                     <!-- item-->
                     <a href="javascript:void(0);" class="dropdown-item notify-item">
                         <i class="fe-settings me-1"></i>
                         <span>Settings</span>
                     </a>

                     <!-- item-->
                     <a href="javascript:void(0);" class="dropdown-item notify-item">
                         <i class="fe-lock me-1"></i>
                         <span>Lock Screen</span>
                     </a>

                     <!-- item-->
                     <form method="POST" action="{{ route('logout') }}">
                         @csrf
                         <a href="{{ route('logout') }}" class="dropdown-item notify-item"
                             onclick="event.preventDefault(); this.closest('form').submit();">
                             <i class="fe-log-out me-1"></i>
                             <span>Logout</span>
                         </a>
                     </form>


                 </div>
             </div>
             <p class="text-muted">Admin Head</p>
         </div>

         <!--- Sidemenu -->
         <div id="sidebar-menu">

             <ul id="side-menu">

                 <li class="menu-title">Navigation</li>
                 <li>
                     <a href="{{ route('dashboard') }}">
                         <i data-feather="airplay"></i>
                         <span> Dashboard </span>
                     </a>
                 </li>
                 <li>
                     <a href="#sidebarDashboards" data-bs-toggle="collapse">
                         <i data-feather="airplay"></i>
                         <span> Master </span>
                     </a>
                     <div class="collapse" id="sidebarDashboards">
                         <ul class="nav-second-level">
                             <li>
                                 <a href="{{ route('products.index') }}">Produk</a>
                             </li>
                         </ul>
                     </div>
                 </li>
             </ul>

         </div>
         <!-- End Sidebar -->

         <div class="clearfix"></div>

     </div>
     <!-- Sidebar -left -->

 </div>
 <!-- Left Sidebar End -->
