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
    <!-- PLACE YOUR CONTENT HERE -->
          <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <div class="row mb-3">
                  <div class="col-11">
                    <h1 class="card-title">Family Members</h1>
                  </div>
                  <div class="col-1">
                    <button type="button" data-toggle="modal" data-target="#addMemberModal" class="btn btn-success icon-only"><i class="fa fa-plus"></i></button>
                  </div>
                </div>
                <?php
                  foreach(getAllMembers() as $member)
                  {
                ?>
                  <div class="accordion" id="accordion<?php echo $member['id']; ?>">
                    <div class="card">
                      <div class="card-header" id="heading<?php echo $member['id']; ?>">
                        <div class="row">
                          <div class="col-11">
                            <h5 class="mb-0">
                              <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $member['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $member['id']; ?>">
                                <?php echo $member['fname'].' '.$member['lname']; ?>
                              </button>
                            </h5>
                          </div>
                          <div class="col-1">
                            <button type="button" class="btn btn-danger icon-only" data-toggle="modal" data-membername="<?php echo $member['fname'].' '.$member['lname']; ?>" data-memberid="<?php echo $member['id']; ?>" data-target="#deleteMemberModal"><i class="fa fa-trash"></i></button>
                          </div>
                        </div>
                      </div>
                      <div id="collapse<?php echo $member['id']; ?>" class="collapse" aria-labelledby="heading<?php echo $member['id']; ?>" data-parent="#accordion<?php echo $member['id']; ?>">
                        <div class="card-body">
                          <form method="post" enctype="multipart/form-data">
                            <div class="row">
                              <div class="col-8">
                                <div class="row">
                                  <div class="col">
                                    <input type="hidden" name="memberId" value="<?php echo $member['id']; ?>">
                                    <input type="hidden" name="FamilyId" value="<?php echo $member['familyId']; ?>">
                                    <div class="form-group">
                                      <label>First Name</label>
                                      <input type="text" name="fname" class="form-control" placeholder="First Name" value="<?php echo $member['fname']; ?>">
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="form-group">
                                      <label>Last Name</label>
                                      <input type="text" name="lname" class="form-control" placeholder="Last Name" value="<?php echo $member['lname']; ?>">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col">
                                    <div class="form-row form-group">
                                      <label>Gender</label>
                                      <div class="col">
                                        <div class="form-check">
                                          <input class="form-radio-input" type="radio" name="gender" id="male" value="male" <?php echo ($member['gender'] == 'male')? 'checked' : ''; ?>>
                                          <label class="form-radio-label" for="male">Male</label>
                                        </div>
                                      </div>
                                      <div class="col">
                                        <div class="form-check">
                                          <input class="form-radio-input" type="radio" name="gender" id="female" value="female" <?php echo ($member['gender'] == 'female')? 'checked' : ''; ?>>
                                          <label class="form-radio-label" for="female">Female</label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="form-group">
                                      <label>Date of Birth</label>
                                      <input type="date" name="dob" class="form-control" value="<?php echo $member['dob']; ?>">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-4">
                                    <div class="form-group">
                                      <label>Spouse</label>
                                      <select name="spouseId" class="form-control">
                                        <option value="NULL">Select Spouse</option>
                                        <?php
                                          foreach(getMembersDropdownOptions() as $option)
                                          {
                                            if($option['id'] == $member['id']) { continue; }
                                            if($member['father_id'] != NULL && $option['id'] == $member['father_id']) { continue; }
                                            if($member['mother_id'] != NULL && $option['id'] == $member['mother_id']) { continue; }
                                            echo "<option value='".$option['id']."' ".(($option['id'] == $member['spouse_id'])? 'selected' : '') .">".$option['fname'].' '.$option['lname']."</option>";
                                          }
                                        ?>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-4">
                                    <div class="form-group">
                                      <label>Father</label>
                                      <select name="fatherId" class="form-control">
                                        <option value="NULL">Select Father</option>
                                        <?php
                                          foreach(getMembersDropdownOptions() as $option)
                                          {
                                            if($option['id'] == $member['id'] or $option['id'] == $member['spouse_id'] or $option['id'] == $member['mother_id']) { continue; }
                                            echo "<option value='".$option['id']."' ".(($option['id'] == $member['father_id'])? 'selected' : '') .">".$option['fname'].' '.$option['lname']."</option>";
                                          }
                                        ?>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-4">
                                    <div class="form-group">
                                      <label>Mother</label>
                                      <select name="motherId" class="form-control">
                                        <option value="NULL">Select Mother</option>
                                        <?php
                                          foreach(getMembersDropdownOptions() as $option)
                                          {
                                            if($option['id'] == $member['id'] or $option['id'] == $member['spouse_id'] or $option['id'] == $member['father_id']) { continue; }
                                            echo "<option value='".$option['id']."' ".(($option['id'] == $member['mother_id'])? 'selected' : '') .">".$option['fname'].' '.$option['lname']."</option>";
                                          }
                                        ?>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <button type="submit" name="updateMember" class="btn btn-success">Update Member</button>
                                <!-- <button type="button" data-toggle="modal" data-memberid="<?php echo $member['id']; ?>" data-target="#addSpouseModal" name="addSpouse" class="btn btn-success">Add Spouse</button> -->
                                <!-- <button type="button" data-toggle="modal" data-memberid="<?php echo $member['id']; ?>" data-target="#addParentsModal" name="addParents" class="btn btn-success">Add Parents</button> -->
                                <!-- <button type="button" data-toggle="modal" data-memberid="<?php echo $member['id']; ?>" data-target="#addChildModal" name="addChild" class="btn btn-success">Add Child</button> -->
                                <!-- <button type="button" data-toggle="modal" data-memberid="<?php echo $member['id']; ?>" data-target="#addSiblingModal" name="addSibling" class="btn btn-success">Add Sibling</button> -->
                              </div>
                              <div class="col-4">
                                <div class="form-group" style="text-align: center;">
                                  <img src="<?php echo IMG.$member['profile']; ?>" alt="..." width="150" class="img-thumbnail">
                                </div>
                                <div class="form-group">
                                  <label>Change Avatar</label>
                                  <div class="custom-file">
                                      <input type="file" name="avatar" class="custom-file-input" id="customFile">
                                      <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php
                  }
                ?>
              </div>
            </div>
          </div>
        </div><!-- content-wrapper ends -->
      <?php require_once("inc/footer.php"); ?>
    </div>
    </div>
  </div>
  <!-- delete member modal -->
  <div class="modal fade" id="deleteMemberModal" tabindex="-1" role="dialog" aria-labelledby="deleteMemberModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form method="post" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deleteMemberModalLabel">Delete <span class="member-name"></span></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Are you sure?</p>
            <input type="hidden" class="member-id" name="memberId">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="deleteMember" class="btn btn-danger">Delete</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- delete member modal -->
  <!-- add member modal -->
  <div class="modal fade" id="addMemberModal" tabindex="-1" role="dialog" aria-labelledby="addMemberModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <form method="post" enctype="multipart/form-data">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="addMemberModalLabel">Add Member</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" name="fname" class="form-control" placeholder="First Name">
                </div>
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" name="lname" class="form-control" placeholder="Last Name">
                </div>
                <div class="form-row form-group">
                  <label>Gender</label>
                    <div class="form-check">
                      <input class="form-radio-input" type="radio" name="gender" value="male">
                      <label class="form-radio-label">Male</label>
                    </div>
                    <div class="form-check">
                      <input class="form-radio-input" type="radio" name="gender" value="female">
                      <label class="form-radio-label">Female</label>
                    </div>
                </div>
                <div class="form-group">
                  <label>Date of Birth</label>
                  <input type="date" name="dob" class="form-control">
                </div>
                <!-- <div class="form-group">
                  <label>Avatar</label>
                  <div class="custom-file">
                      <input type="file" name="avatar" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div> -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="addMember" class="btn btn-success">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- add member modal -->
  <?php require_once("inc/script.php"); ?>

  </body>
</html>