<?php require_once("inc/header-part.php"); ?>
<link rel="stylesheet" href="css/treestyle.css">
  </head>
  <body>
    <div class="container-scroller">
      <?php require_once("inc/menu.php"); ?>
        <div class="main-panel">
          <div class="content-wrapper"> 
			<!-- PLACE YOUR CONTENT HERE -->
            <div class="card">
              <div class="card-body">
                <h1 class="card-title">My Family Tree</h1>
                <!-- <div class="tree">
                  <ul>
                    <li>
                      <a href="#">Parent</a>
                      <ul>
                        <li>
                          <a href="#">Child</a>
                            <ul>
                              <li>
                                <a href="#">Grand Child</a>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <a href="#">Child</a>
                            <ul>
                              <li>
                                <a href="#">Grand Child</a>
                              </li>
                              <li>
                                <a href="#">Grand Child</a>
                                <ul>
                                  <li>
                                    <a href="#">Great Grand Child</a>
                                  </li>
                                  <li>
                                    <a href="#">Great Grand Child</a>
                                  </li>
                                  <li>
                                    <a href="#">Great Grand Child</a>
                                  </li>
                                </ul>
                              </li>
                              <li>
                                <a href="#">Grand Child</a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
                </div> -->

                <div class="tree3">
                  <ul>
                <?php
                  $maleRoot = '';
                  $femaleRoot = '';
                  $get_root = $db->prepare("SELECT * FROM `members` WHERE family_id = ".$_SESSION['familyId']." and father_id IS NULL and mother_id IS NULL and spouse_id in(SELECT id FROM `members` where family_id = ".$_SESSION['familyId']." and father_id IS NULL and mother_id IS NULL)");
                  $get_root->execute();
                  foreach($get_root->fetchAll() as $root)
                  {
                    if($femaleRoot !== $root['id'])
                    {
                        $maleRoot = $root['id'];
                        $femaleRoot = $root['spouse_id'];
                        echo "<li>"."<span>".$root['fname'].' - '.getMemberName($root['spouse_id'])."</span>";
                        echo "<ul>";
                        getchild($maleRoot, $femaleRoot);
                        echo "</ul>";
                        echo "</li>";
                    }
                  }

                  // getchild($maleRoot, $femaleRoot);
                  function getchild($father, $mother)
                  {
                      echo "<ul>";
                      foreach (getMember($father, $mother) as $member) {
                          if($member)
                          {
                            echo "<li><span>".$member['fname'];
                            if($member['spouse_id']){
                              echo " - ".getMemberName($member['spouse_id']);
                            }
                            echo "</span></li>";
                            if($member['spouse_id'] !== null)
                            {
                                getchild($member['id'],$member['spouse_id']);
                            }
                          }
                      }
                      echo "</ul>";
                  }
                  function getMember($father_id, $mother_id)
                  {
                      global $db;
                      $get_member = $db->prepare("select * from members where family_id = ".$_SESSION['familyId']." and father_id = ".$father_id." and mother_id = ".$mother_id);
                      $get_member->execute();
                      return $get_member->fetchAll();
                  }
                ?>
                  </ul>
                </div>
               <!-- <div class="tree">
                  <ul>
                    <li>
                      <a href="#">Parent</a>
                      <ul>
                    <li>
                     <a href="#">Child</a>
                     <ul>
                    <li>
                     <a href="#">Grand Child</a>
                    </li>
                  </ul>
                  </li>
                 <li>
                   <a href="#">Child</a>
                 <ul>
                   <li><a href="#">Grand Child</a></li>
                   <li>
                     <a href="#">Grand Child</a>
                   <ul>
                   <li>
                      <a href="#">Great Grand Child</a>
                   </li>
                   <li>
                      <a href="#">Great Grand Child</a>
                   </li>
                   <li>
                      <a href="#">Great Grand Child</a>
                   </li>
                  </ul>
                  </li>
                    <li><a href="#">Grand Child</a></li>
                  </ul>
                  </li>
                </ul>
                </li>
              </ul>
            </div> -->
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