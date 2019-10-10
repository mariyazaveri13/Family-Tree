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
                    <h4 class="card-title">List of all Site/Family Members</h4>

                    <!--<a href="add-family-event.php"><button type="submit" class="btn btn-success mr-2"></button></a>-->
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Name </th>
                          <th> Last Name</th>
                          <th> Contact </th>
                          <th> Edit </th>
                          <th> Delete </th>
                           </tr>
                      </thead>
                      <tbody>
                          <tr>
                          <td> 21/09/2012</td>
                          <td> Dummy Data</td>
                          <td> Hello, this is dummy data it'll change.</td>
                           <td>   <button type="submit" class="btn btn-light mr-2">Edit </button></td>
                           <td>  <button type="submit" class="btn btn-light mr-2">Delete </button></td>

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