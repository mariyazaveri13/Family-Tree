<?php
require_once 'inc/config.php';
require_once 'inc/model.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Your Clan-Landing Page</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/templatemo-style.css" />

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

  </head>
  <body>
    <div class="parallax-window" data-parallax="scroll" data-image-src="img/bigfamily1.jpg">
      <div class="container-fluid">
        <div class="row tm-brand-row">
          <div class="col-lg-4 col-11">
            <div class="tm-brand-container tm-bg-white-transparent">
              <i class="fas fa-2x fa-pen tm-brand-icon"></i>
              <div class="tm-brand-texts">
                <h1 class="text-uppercase tm-brand-name">Your Clan</h1>
                <p class="small">A place to build your Family Clans</p>
              </div>
            </div>
          </div>
        <!--  <div class="col-lg-8 col-1">
            <div class="tm-nav">
              <nav class="navbar navbar-expand-lg navbar-light tm-bg-white-transparent tm-navbar">
                <button class="navbar-toggler" type="button"
                  data-toggle="collapse" data-target="#navbarNav"
                  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <div class="tm-nav-link-highlight"></div>
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    
                  </ul>
                </div>
              </nav>
            </div>
          </div>-->
        </div>

        <section class="row" id="tmHome">
          <div class="col-12 tm-home-container">
            <div class="text-white tm-home-left">
              <p class="text-uppercase tm-slogan" style="font-size:50px;">We Create</p>
              <hr class="tm-home-hr" />
              <h2 class="tm-home-title">Amazing Family Trees For You.</h2>
              <p class="tm-home-text">
                Your Clan focuses on creating family trees and listing nearby family events for you, so you stay in touch with your family.
              </p>
              <a href="#tmFeatures" class="btn btn-primary">Learn More</a>
            </div>
           <!-- <div class="tm-bg-white-transparent tm-feature-box">-->
            <div class="tm-home-right">
             <div class="tm-bg-white-transparent tm-feature-box-lg">
              <div class="limiter">
                 
                  <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                     <form method="post" class="login100-form validate-form">
                       <span class="login100-form-title p-b-49">
                          Login
                       </span>
                  <div class="wrap-input100 validate-input m-b-23" data-validate = "Email is reauired">
                      <span class="label-input100">Email</span>
                        <input class="input100" type="email" name="email" placeholder=" Type your Email">
                      <span class="focus-input100" data-symbol="&#xf206;"></span>
                  </div>
                  <div class="wrap-input100 validate-input" data-validate="Password is required">
                     <span class="label-input100">Password</span>
                       <input class="input100" type="password" name="pass" placeholder="Type your Password">
                      <span class="focus-input100" data-symbol="&#xf190;"></span>
                  </div>
                  <div class="text-right p-t-8 p-b-31">
                    <a href="#">
                      Forgot password?
                    </a>
                  </div>
          
                  <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                     <button type="submit" name="login" class="login100-form-btn">
                         Login
                      </button>
                    </div>
                  </div>

                  <div class="txt1 text-center p-t-54 p-b-20">
                    <span>
                     Or Sign Up Using
                    </span>
                  </div>

                  <div class="flex-c-m">
                    <a href="#" class="login100-social-item bg1">
                      <i class="fa fa-facebook"></i>
                    </a>

                    <a href="#" class="login100-social-item bg2">
                      <i class="fa fa-twitter"></i>
                    </a>

                    <a href="#" class="login100-social-item bg3">
                     <i class="fa fa-google"></i>
                    </a>
                  </div>

                  <div class="flex-col-c p-t-54">
                    <span class="txt1 p-b-17">
                       Or Sign Up Using
                    </span>

                    <a href="signup.html" class="txt2">
                      Sign Up
                    </a>
                  </div>
              </form>
             </div>
          </div>
        </div>
      </div>
              <!--<img src="img/mobile-screen.png" alt="App on Mobile mockup" />-->
      </div>
      </div>
    </section>

        <!-- Features -->
        <div class="row" id="tmFeatures">
          <div class="col-lg-4">
            <a href="personalinfo.php">
            <div class="tm-bg-white-transparent tm-feature-box">
            <h3 class="tm-feature-name">Create Family Tree</h3>
            
            <div class="tm-feature-icon-container">
                <i class="fa fa-3x fa-pagelines"></i>
            </div>

            <p class="text-center">Wanna Create amazing family tree of yours? Click here to create one.</p>

          </a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="tm-bg-white-transparent tm-feature-box">
              <a href="mytree.php">
                <h3 class="tm-feature-name">View Family Tree</h3>

                <div class="tm-feature-icon-container">
                    <i class="fas fa-3x fa-eye"></i>
                </div>
                <p class="text-center">You can review your family tree.Add and Remove information accordingly.
                </p>
              </a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="tm-bg-white-transparent tm-feature-box">
              <a href="family-event">
                <h3 class="tm-feature-name">Family Events</h3>

                <div class="tm-feature-icon-container">
                    <i class="fas fa-3x fa-satellite-dish"></i>
                </div>
                <p class="text-center">Wanna know more about family get togethers and events? Click here to know more.
                </p>
              </a>
            </div>
          </div>
        </div>
       
        <!-- Page footer -->
        <footer class="row">
          <p class="col-12 text-white text-center tm-copyright-text">
            Copyright &copy; Family Tree landing page 
            Designed by <a href="#" class="tm-copyright-link">Your Clan</a>
          </p>
        </footer>
      </div>
      <!-- .container-fluid -->
    </div>
    <div id="dropDownSelect1"></div>
    <script src="js/jquery.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>