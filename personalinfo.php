<?php 
require_once("inc/header-part.php"); 

?>
  </head>
  <body>
    <div class="container-scroller">
      <?php require_once("inc/menu.php"); ?>
        <div class="main-panel">
          <div class="content-wrapper"> <!-- start of content wrapper -->
			<div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">That's Me</h4>
                   <!-- <p class="card-description"> Basic form elements </p>-->
                    <form class="forms-sample">
					 <div class="col-md-6">
                          <div class="form-group row">
                           <!-- <label class="col-sm-3 col-form-label">Gender</label>-->
                            <div class="col-sm-6">
                              <div class="form-radio">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked> Male </label>
                              </div>
                            </div>
                            <div class="col-sm-5">
                              <div class="form-radio">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2"> Female </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      <div class="form-group">
                        <label for="exampleInputName1">First Name</label>
                        <input type="text" class="form-control" id="firstname" placeholder="First Name and Middle Name">
                      </div>
					   <div class="form-group">
                        <label for="exampleInputName1">Last Name</label>
                        <input type="text" class="form-control" id="lastname" placeholder="Last Name">
                      </div>
					   <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Prefix</label>
                            <div class="col-sm-9">
                              <select class="form-control">
                                <option>--Select Option--</option>
								<option>Mr.</option>
                                <option>Dr.</option>
                                <option>CA</option>
                                <option>Ms.</option>
                              </select>
                            </div>
                          </div>
                        </div>
						<div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Date of Birth</label>
                            <div class="col-sm-9">
                              <input class="form-control" placeholder="dd/mm/yyyy" />
                            </div>
                          </div>
                        </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Birth Place</label>
                        <input type="text" class="form-control" id="birthplace" placeholder="Place of Birth">
                      </div>
                      
                      <button type="submit" class="btn btn-success mr-2">Save & Continue</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
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