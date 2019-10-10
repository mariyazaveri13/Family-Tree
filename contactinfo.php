<?php require_once("inc/header-part.php"); ?>
  </head>
  <body>
    <div class="container-scroller">
      <?php require_once("inc/menu.php"); ?>
        <div class="main-panel">
          <div class="content-wrapper"> 
			<!-- PLACE YOUR CONTENT HERE -->

      <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h1 class="card-title">My Contact Information</h1>
                    <form class="form-sample">
                      <p class="card-description">Address</p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Address Line 1</label>
                              <div class="col-sm-9">
                                <textarea class="form-control" id="exampleTextarea1"  rows="2" style="border-radius:5px;border-color:solid black;border-width:2px;"></textarea>
                              </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Address Line 2</label>
                              <div class="col-sm-9">
                                <textarea class="form-control" id="exampleTextarea1"  rows="2" style="border-radius:5px;border-color:solid black;border-width:3px;"></textarea>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">City</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="City" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">State</label>
                            <div class="col-sm-9">
                              <input class="form-control" placeholder="State" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Country</label>
                            <div class="col-sm-9">
                              
                              <input class="form-control" placeholder="Country" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pincode</label>
                            <div class="col-sm-9">
                              <input class="form-control" placeholder="Pincode" />
                            </div>
                          </div>
                        </div>
                     


                        </div>
                      <p class="card-description"> Phone and E-mail  </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Phone</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Phone Number" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                              <input type="Email" class="form-control" placeholder="abc@xyz.com" />
                            </div>
                          </div>
                        </div>

                         <button type="submit" class="btn btn-success mr-2">Save & Continue</button>
                          <button class="btn btn-light">Cancel</button>
                        
                      </div>
                      </div>
                    </form>
              
              
		  </div> <!-- content-wrapper ends -->
          
          <?php require_once("inc/footer.php"); ?>
        </div>
        
      </div>
      
    </div>
   <?php require_once("inc/script.php"); ?>
   
  </body>
</html>