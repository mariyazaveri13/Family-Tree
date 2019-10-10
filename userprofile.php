<?php 
require_once("inc/header-part.php");
?>
  </head>
  <body>
    <div class="container-scroller">
      <?php require_once("inc/menu.php"); ?>
        <div class="main-panel">
          <div class="content-wrapper">
            <?php
              if(isset($successMsg)){
              ?>
                <div class="row">
                  <div class="col-12">
                    <div class="alert alert-success fade show" role="alert">
                      <?php echo $successMsg; ?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  </div>
                </div>
              <?php
              }
            ?>
            <?php
              if(isset($errorMsg)){
              ?>
                <div class="row">
                  <div class="col-12">
                    <div class="alert alert-danger fade show" role="alert">
                      <?php echo $errorMsg; ?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  </div>
                </div>
              <?php
              }
            ?>
		        <div class="row">
                <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">User Profile</h4>
                    <form method="post" enctype="multipart/form-data">
                      <?php $userDetails = getUserDetails(); ?>
                      <div class="row">
                        <div class="col-8">
                          <div class="form-group">
                            <label for="fname">First Name</label>
                            <input type="text" name="fname" class="form-control <?php echo (isset($fnameErr))? 'is-invalid' : '' ;?>" id="fname" placeholder="First Name" value="<?php echo (isset($userDetails['fname']))? $userDetails['fname'] : '' ; ?>">
                            <div class="invalid-feedback"><?php echo (isset($fnameErr))? $fnameErr : '';?></div>
                          </div>
                          <div class="form-group">
                            <label for="lname">Last Name</label>
                            <input type="text" name="lname" class="form-control <?php echo (isset($lnameErr))? 'is-invalid' : '' ;?>" id="lname" placeholder="Last Name" value="<?php echo (isset($userDetails['lname']))? $userDetails['lname'] : '' ; ?>">
                            <div class="invalid-feedback"><?php echo (isset($lnameErr))? $lnameErr : '';?></div>
                          </div>
                          <div class="form-row form-group">
                          <label for="gender">Gender</label>
                            <div class="col">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" class="<?php echo (isset($genderErr))? 'is-invalid' : '' ;?>" name="gender" id="male" value="male" <?php echo ($userDetails['gender'] == 'male')? 'checked' : ''; ?>>
                                <label class="form-check-label" for="male">Male</label>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" class="<?php echo (isset($genderErr))? 'is-invalid' : '' ;?>" name="gender" id="female" value="female" <?php echo ($userDetails['gender'] == 'female')? 'checked' : ''; ?>>
                                <label class="form-check-label" for="female">Female</label>
                              </div>
                            </div>
                            <div class="invalid-feedback"><?php echo (isset($genderErr))? $genderErr : '';?></div>
                          </div>
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" readonly id="Email" placeholder="name@example.com" value="<?php echo (isset($userDetails['email']))? $userDetails['email'] : '' ; ?>">
                          </div>
                          <input type="submit" name="save" value="Save" class="btn mr-5 btn-success">
                          <!-- <input type="button" name="changePass" value="Change Password" class="btn btn-warning"> -->
                          <button type="button" class="btn ml-5 btn-success" data-toggle="modal" data-target="#changePasswordModal">Change Password</button>
                        </div>
                        <div class="col-4">
                          <img src="<?php echo IMG.$userDetails['profile']; ?>" alt="..." class="img-thumbnail mb-4">
                          <div class="form-group">
                            <label>Change Avatar</label>
                            <div class="custom-file">
                              <input type="file" name="avatar" class="custom-file-input <?php echo (isset($avatarErr))? 'is-invalid' : '' ;?>" id="changeAvatar">
                              <label class="custom-file-label" for="customFile">Choose file</label>
                              <div class="invalid-feedback"><?php echo (isset($avatarErr))? $avatarErr : '';?></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php
                        if(isset($oldPassErr))
                        {
                          ?>
                          <div class="row mt-2">
                            <div class="col-12">
                              <div class="alert alert-danger fade show" role="alert">
                                <?php echo $oldPassErr; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                            </div>
                          </div>
                          <?php
                        }
                        if(isset($newPassErr))
                        {
                          ?>
                          <div class="row mt-2">
                            <div class="col-12">
                              <div class="alert alert-danger fade show" role="alert">
                                <?php echo $newPassErr; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                            </div>
                          </div>
                          <?php
                        }
                        if(isset($cPassErr))
                        {
                          ?>
                          <div class="row mt-2">
                            <div class="col-12">
                              <div class="alert alert-danger fade show" role="alert">
                                <?php echo $cPassErr; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                            </div>
                          </div>
                          <?php
                        }
                      ?>
                    </form>
                  </div>
                </div>
              </div>

            </div>		<!-- end of row-->	
			
      </div> <!-- content-wrapper ends -->
      <!-- Modal -->
      <div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form method="post">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label for="oldPassword">Old Password</label>
                  <input type="password" class="form-control" id="oldPassword" name="oldPassword" placeholder="Old Password">
                </div>
                <div class="form-group">
                  <label for="newPassword">New Password</label>
                  <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="New Password">
                </div>
                <div class="form-group">
                  <label for="cPassword">Confirm Password</label>
                  <input type="password" class="form-control" id="cPassword" name="cPassword" placeholder="Confirm Password">
                </div>
                <!-- <button type="submit" class="btn btn-success">Submit</button> -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="changePassword" class="btn btn-success">Change Password</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!--  -->
          
          <?php require_once("inc/footer.php"); ?>
        </div>
        
      </div>
      
    </div>
   <?php require_once("inc/script.php"); ?>
  </body>
</html>