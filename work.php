<?php require_once("inc/header-part.php"); ?>
  </head>
  <body>
    <div class="container-scroller">
      <?php require_once("inc/menu.php"); ?>
        <div class="main-panel">
          <div class="content-wrapper"> 
			<!-- PLACE YOUR CONTENT HERE -->
			<div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">My Work</h4>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputName1">Occupation</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Occupation">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Place</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Place">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Note</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" placeholder="e.g. Company name or employer">
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