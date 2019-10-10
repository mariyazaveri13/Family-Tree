<!-- SECOND REUSABLE PART -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
       <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <!-- <a class="navbar-brand brand-logo"> -->
          <div class="container">
            <img class="logo" src="img/logo.png" width="50" alt="logo">
            <span class="logo-text">Your<span>Clan</span></span>
          </div>
          <!-- <a class="navbar-brand brand-logo" href="index.php"> -->
            
          <!-- </a>  -->
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
         
         <ul class="navbar-nav ml-auto">
            <li>
              <!-- <br> -->
              <a href="search.php" class="btn btn-link text-success"><i class="fa fa-search"></i></a>

              <!-- <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4"> -->
                <!-- <div class="input-group"> -->
                  <!-- <input type="search" placeholder="What're you searching for?" aria-describedby="button-addon1" class="form-control border-0 bg-light"> -->
                   <!-- <div class="input-group-lg"> -->
                    <!-- <button id="button-addon1" type="submit" class="btn btn-link text-success"><i class="fa fa-search"></i></button> -->
                  <!-- </div> -->
                <!-- </div> -->
              <!-- </div> -->
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="<?php echo IMG.getUserAvatar(); ?>" alt="Profile image">
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="<?php echo IMG.getUserAvatar(); ?>" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold"><?php echo getUserName(); ?></p>
                  <p class="font-weight-light text-muted mb-0"><?php echo getUserEmail(); ?></p>
                </div>
                <a class="dropdown-item" href="<?php echo URL.'/userprofile.php'; ?>">My Profile<i class="dropdown-item-icon ti-dashboard"></i></a>
                <!-- <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a> -->
                <!-- <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a> -->
                <a href="?logout" class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
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
          <ul class="nav ">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URL.'/index.php'; ?>">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Home</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URL.'/familyinfo.php'; ?>">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Create Family Tree</span>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Create Family Tree</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="../../YourClan/personalinfo.php">Personal Information</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../YourClan/familyinfo.php">Family Information</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../YourClan/biography.php">Biography</a>
                  </li>
				         <li class="nav-item">
                    <a class="nav-link" href="../../YourClan/contactinfo.php">Contact Information</a>
                  </li>
				         <li class="nav-item">
                    <a class="nav-link" href="../../YourClan/work.php">Work</a>
                  </li>
				         <li class="nav-item">
                    <a class="nav-link" href="../../YourClan/education.php">Education</a>
                  </li>
				         <li class="nav-item">
                    <a class="nav-link" href="../../YourClan/allfacts.php">All Facts</a>
                  </li>
                </ul>
              </div>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URL.'/photos.php'; ?>">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Photo Gallery</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URL.'/mytree.php'; ?>">
                <i class="menu-icon typcn typcn-th-large-outline"></i>
                <span class="menu-title">My Tree</span>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="<?php echo URL.'/imp.php'; ?>">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Import GEDCOM</span>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">Other Details</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo URL.'/family-event.php'; ?>"> Family Events </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo URL.'/invite.php'; ?>"> Invite Family </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo URL.'/sitemembers.php'; ?>"> Site Members </a>
                  </li>
                </ul>
              </div>
            </li> -->
          </ul>
        </nav>
        <!-- END OF SECOND RESUABLE PART -->