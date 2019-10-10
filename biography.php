<?php require_once("inc/header-part.php"); ?>
</head>
  <body>
    <div class="container-scroller">
      <?php require_once("inc/menu.php"); ?>
        <div class="main-panel">
          <div class="content-wrapper"> <!--content wrapper starts-->
		           <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Biography</h4>
                    <p class="card-description">Write Something About Your Family!!</p>
                    <form class="forms-sample">
                       <div class="form-group">
                          <textarea class="form-control" id="exampleTextarea1" rows="10" style="border-radius:5px;border-color:solid black;border-width:3px;"></textarea>
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