<!-- SECOND REUSABLE PART -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
       <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
              <div class="navbar-brand text-wrapper">
                  <p class="profile-name">User Profile</p>
                </div>
           <!-- <img src="assets/images/logo-mini.svg" alt="logo" /> </a>-->
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
         
         <ul class="navbar-nav ml-auto">
          
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="img/testimonial-4.jpg" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="img/testimonial-4.jpg" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold">Mr.XYZ</p>
                  <p class="font-weight-light text-muted mb-0">xyz@gmail.com</p>
                </div>
                <a class="dropdown-item" href="userprofile.php">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
                <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
                <a class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
     
      <div class="container-fluid page-body-wrapper">
        
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav" >
           <!-- <li class="nav-item nav-profile"> -->
              <a class="nav-link">
                  <img class="img-xl rounded-circle" src="img/testimonial-4.jpg" alt="profile image" height="100%" width="100%">
                </a>
                <p>Marcus Steve</p> <!-- Dynamic Name Should Come Here --> 
            </li>
          
      
          <!--  <li class="nav-item nav-category">Main Menu</li>-->
          
            <li class="nav-item">
              <a class="nav-link" href="../../NewBiz/photos.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Photo Gallery</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../NewBiz/mytree.php">
                <i class="menu-icon typcn typcn-th-large-outline"></i>
                <span class="menu-title">My Tree</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../NewBiz/imp.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Edit Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">Other Details</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="../../NewBiz/family-event.php"> My Family Events </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../NewBiz/invite.php"> Invite Family Member </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../NewBiz/sitemembers.php"> My Site Members </a>
                  </li>
                  
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        <!-- END OF SECOND RESUABLE PART -->