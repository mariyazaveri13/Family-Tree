<?php require_once("inc/header-part.php"); ?>
<link rel="stylesheet" href="assets/gallery/style.css">
<!-- <style>
  #btn{
    float:right;
  }
  p{
    font-size:25px;
    font-family:all;
  }
  </style> -->
  </head>
  <body>
    <div class="container-scroller">
      <?php require_once("inc/menu.php"); ?>
        <div class="main-panel">
          <div class="content-wrapper"> 
			<!-- PLACE YOUR CONTENT HERE -->
            <div class="card">
              <div class="card-body">
              <h4 class="card-title">Photo Gallery</h4>
              <div class="row">
              <?php
                foreach(getMemberPhotos() as $members)
                {
                  ?>
                    <div class="col-3 mb-2">
                      <div class="card">
                        <img class="card-img-top" src="<?php echo IMG.$members['profile'];?>" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title" style="text-align:center;"><?php echo $members['fname'].' '.$members['lname'];  ?></h5>
                          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                          <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                      </div>
                    </div>
                  <?php
                }
              ?>
              </div>
              </div> <!-- end of card body -->
            </div> <!-- end of card-->
		  </div> <!-- content-wrapper ends -->
          
          <?php require_once("inc/footer.php"); ?>
        </div>
        
      </div>
      
    </div>
   <?php require_once("inc/script.php"); ?>
   
  </body>
</html>