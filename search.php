<?php require_once("inc/header-part.php"); ?>
  </head>
  <body>
    <div class="container-scroller">
      <?php require_once("inc/menu.php"); ?>
        <div class="main-panel">
          <div class="content-wrapper"> 
			<!-- PLACE YOUR CONTENT HERE -->

              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Search Member</h4>
                    <div class="row">
                        <div class="col-12">
                            <form method="get" class="form-inline">
                                <label class="sr-only" for="inlineFormInputName2">First Name</label>
                                <input type="text" name="fname" class="form-control mb-2 mr-sm-2" placeholder="First Name" value="<?php echo (isset($_GET['fname']))? $_GET['fname'] : ''; ?>">
                                <label class="sr-only" for="inlineFormInputName2">Last Name</label>
                                <input type="text" name="lname" class="form-control mb-2 mr-sm-2" placeholder="Last Name" value="<?php echo (isset($_GET['lname']))? $_GET['lname'] : ''; ?>">
                                <label class="sr-only" for="inlineFormInputName2">Date of Birth</label>
                                <input type="date" name="dob" class="form-control mb-2 mr-sm-2" placeholder="Date of Birth" value="<?php echo (isset($_GET['dob']))? $_GET['dob'] : ''; ?>">
                                <div class="form-check form-check-inline ml-2" style="top: -5px;">
                                    <input class="form-radio-input" type="radio" name="gender" value="male" <?php echo (isset($_GET['gender']) && $_GET['gender'] == 'male')? 'checked' : ''; ?>>
                                    <label class="form-radio-label ml-2"> Male</label>
                                </div>
                                <div class="form-check form-check-inline" style="top: -5px;">
                                    <input class="form-radio-input" type="radio" name="gender" value="female" <?php echo (isset($_GET['gender']) && $_GET['gender'] == 'female')? 'checked' : ''; ?>>
                                    <label class="form-radio-label ml-2"> Female</label>
                                </div>
                                <button type="submit" name="search" class="btn btn-success mb-2"><i class="fa fa-search"></i> Search</button>
                            </form>
                        </div>
                    </div>
                    <?php
                        if(isset($_GET['search']))
                        {
                            echo "<div class='row'>";
                            $members = searchMembers();
                            if(count($members)) {
                                foreach($members as $member)
                                {
                                    ?>
                                    <div class="col-3 mb-2">
                                        <div class="card">
                                            <img class="card-img-top" src="<?php echo IMG.$member['profile'] ?>" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $member['fname']." ".$member['lname'] ?></h5>
                                                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Gender - <?php echo $member['gender'] ?></li>
                                                <li class="list-group-item">Dob - <?php echo $member['dob'] ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php
                                }
                            } else {
                                echo "<p>No member found...</p>";
                            }
                            echo "</div>";
                        }
                    ?>
                  </div>
                </div>
              </div>
		    </div> <!-- content-wrapper ends -->
          <?php require_once("inc/footer.php"); ?>
        </div>
      </div>
    </div>
   <?php require_once("inc/script.php"); ?>
  </body>
</html>