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
                    <h4 class="card-title">Invite your family members</h4>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Name </th>
                          <th>Relationship</th>
                          <th> Email </th>
                          <th> Invite </th>

                           </tr>
                      </thead>
                      <tbody>
                          <tr>
                          <td> Abc</td>
                          <td>Your Mother</td>
                          <td><input type="text" class="form-control" placeholder="abc@xyz.com" aria-describedby="basic-addon1">
                         </td>
                           <td>  <button type="submit" class="btn btn-light mr-2">Invite </button></td>

                        </tr>
                      </tbody>

                    </table>

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