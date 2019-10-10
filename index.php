<?php
require_once 'inc/config.php';
require_once 'inc/model.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Your Clan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.png" />

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">
          <img src="img/logo.png" width="50" alt="logo">
          Your<span>Clan</span>
        </a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li>
            <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
            <li class="nav-item"><a href="#login-signup-section" class="nav-link"><span>Login or Signup</span></a></li>
	          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  <section id="home-section" class="hero">
	  	<!--<h3 class="vr">Welcome to YourClan</h3>-->
		  <div class="home-slider js-fullheight owl-carousel">
	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third order-md-last img js-fullheight" style="background-image:url(images/family6.jpg);">
	          		<div class="overlay"></div>
	          	</div>
		          <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">Welcome to the YourClan</span>
			            <h1 class="mb-4 mt-3">Family-Most<span> Incredible Part</span></h1>
			            <p>Families are like fudge- mostly sweet with few nuts. So create your amazing family fudges with us.</p>
			            
			            <!-- <p><a href="#" class="btn btn-primary px-5 py-3 mt-3">Get in touch</a></p> -->
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>

	     <!-- <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third order-md-last img js-fullheight" style="background-image:url(images/family1.jpg);">
	          		<div class="overlay"></div>
	          	</div>
		          <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">Welcome to the YourClan</span>
			            <h1 class="mb-4 mt-3"><span>Strategic</span> Design And <span>Technology</span> Agency</h1>
			            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
			            
			            <p><a href="#" class="btn btn-primary px-5 py-3 mt-3">Get in touch</a></p>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
	    </div>-->
    </section>
		

    <section class="ftco-section ftco-no-pb ftco-no-pt ftco-services bg-light" id="services-section">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-4 ftco-animate py-5 nav-link-wrap">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link px-4 active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true"><span class="mr-3 flaticon-ideas"></span> Family Tree</a>
              <a class="nav-link px-4" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false"><span class="mr-3 flaticon-flasks"></span> Create Family Tree</a>
              <a class="nav-link px-4" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false"><span class="mr-3 flaticon-analysis"></span> View Family Tree</a>
              <a class="nav-link px-4" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false"><span class="mr-3 flaticon-web-design"></span> Photo Gallery</a>
              <a class="nav-link px-4" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-4" aria-selected="false"><span class="mr-3 flaticon-ux-design"></span> Family Events</a>
              <a class="nav-link px-4" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-5" aria-selected="false"><span class="mr-3 flaticon-innovation"></span> Family Member Information</a>
            </div>
          </div>
          <div class="col-md-8 ftco-animate p-4 p-md-5 d-flex align-items-center">
            
            <div class="tab-content pl-md-5" id="v-pills-tabContent">

              <div class="tab-pane fade show active py-5" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                <span class="icon mb-3 d-block flaticon-ideas"></span>
                <h2 class="mb-4">Family Tree</h2>
                <p>It is often said- "Family Tree has many branches, both living and dead... but all equally important. People cherish its memories that make its root run deep."</p>
                <p>For that purpose, we are here to let you create amazing family trees of yours including both living and dead branches and cherish them for lifetime. </p>
                <p><a href="familyinfo.php" class="btn btn-primary px-4 py-3">Learn More</a></p>
              </div>

              <div class="tab-pane fade py-5" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                <span class="icon mb-3 d-block flaticon-flasks"></span>
                <h2 class="mb-4">Create Your Family Tree</h2>
                <p>It helps you create your own family tree by providing information about your family members.</p>
                <p>The page contains information about individuals personal information,professional information,contact information and many more. </p>
                <p><a href="familyinfo.php" class="btn btn-primary px-4 py-3">Learn More</a></p>
              </div>

              <div class="tab-pane fade py-5" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                <span class="icon mb-3 d-block flaticon-analysis"></span>
                <h2 class="mb-4"> Family Tree view</h2>
                <p>Family Tree View provides an amazing genology view of family tree as we view trees and branches.</p>
                <p>After providing all the information about your family members.A relationship is established and all the information is stored in tree view. Now you can easily make anyone understand the relationship with your family. </p>
                <p><a href="mytree.php" class="btn btn-primary px-4 py-3">Learn More</a></p>
              </div>

              <div class="tab-pane fade py-5" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
                <span class="icon mb-3 d-block flaticon-web-design"></span>
                <h2 class="mb-4">Photo Gallery</h2>
                <p>Being Part of a family means smiling for photos.</p>
                <p>Family Photo Gallery allows you to cherish memories of family events and get togethers. The photo uploaded by family member can be seen here.</p>
                <p><a href="photos.php" class="btn btn-primary px-4 py-3">Learn More</a></p>
              </div>

              <div class="tab-pane fade py-5" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-4-tab">
                <span class="icon mb-3 d-block flaticon-ux-design"></span>
                <h2 class="mb-4">Family Events</h2>
                <p>Family events or Events let you add any professional or personal event happening in nearby area or at your own place.</p>
                <p>Here family member can add any kind of events occuring nearby, so other interested family members can participate in that if they want.</p>
                <p><a href="familyinfo.php" class="btn btn-primary px-4 py-3">Learn More</a></p>
              </div>

              <div class="tab-pane fade py-5" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-5-tab">
                <span class="icon mb-3 d-block flaticon-innovation"></span>
                <h2 class="mb-4">Family Member Information</h2>
                <p>Have huge family? Confused about which member to add? Then don't be your problem can be solved here.</p>
                <p>Here, you can add any family members information and YourClan will let you establish reationship in family tree view. Keep on making family trees.</p>
                <p><a href="familyinfo.php" class="btn btn-primary px-4 py-3">Learn More</a></p>
              </div>

             <!-- <div class="tab-pane fade py-5" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">
                <span class="icon mb-3 d-block flaticon-idea"></span>
                <h2 class="mb-4">Creative Solution</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
              </div>-->
            </div>
          </div>
        </div>
      </div>
    </section>

   <!-- <section class="ftco-section-2 img" style="background-image: url(images/bg_3.jpg);">
    	<div class="container">
    		<div class="row d-md-flex justify-content-end">
    			<div class="col-md-6">
    				<div class="row">
    					<div class="col-md-12">
    						<a href="#" class="services-wrap ftco-animate">
    							<div class="icon d-flex justify-content-center align-items-center">
    								<span class="ion-ios-arrow-back"></span>
    								<span class="ion-ios-arrow-forward"></span>
    							</div>
    							<h2>Market Research</h2>
    							<p>Even the all-powerful Pointing has no control about the blind.</p>
    						</a>
    						<a href="#" class="services-wrap ftco-animate">
    							<div class="icon d-flex justify-content-center align-items-center">
    								<span class="ion-ios-arrow-back"></span>
    								<span class="ion-ios-arrow-forward"></span>
    							</div>
    							<h2>Financial Services</h2>
    							<p>Even the all-powerful Pointing has no control about the blind.</p>
    						</a>
    						<a href="#" class="services-wrap ftco-animate">
    							<div class="icon d-flex justify-content-center align-items-center">
    								<span class="ion-ios-arrow-back"></span>
    								<span class="ion-ios-arrow-forward"></span>
    							</div>
    							<h2>Online Marketing</h2>
    							<p>Even the all-powerful Pointing has no control about the blind.</p>
    						</a>
    						<a href="#" class="services-wrap ftco-animate">
    							<div class="icon d-flex justify-content-center align-items-center">
    								<span class="ion-ios-arrow-back"></span>
    								<span class="ion-ios-arrow-forward"></span>
    							</div>
    							<h2>24/7 Help &amp; Support</h2>
    							<p>Even the all-powerful Pointing has no control about the blind.</p>
    						</a>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>-->

    <!--<section class="ftco-section ftco-project bg-light" id="projects-section">
    	<div class="container px-md-5">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Accomplishments</span>
            <h2 class="mb-4">Our Projects</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12 testimonial">
            <div class="carousel-project owl-carousel">
            	<div class="item">
            		<div class="project">
		    					<div class="img">
				    				<img src="images/project-1.jpg" class="img-fluid" alt="Colorlib Template">
				    				<div class="text px-4">
				    					<h3><a href="#">Work Name</a></h3>
				    					<span>Web Design</span>
				    				</div>
			    				</div>
		    				</div>
            	</div>
            	<div class="item">
            		<div class="project">
		    					<div class="img">
				    				<img src="images/project-2.jpg" class="img-fluid" alt="Colorlib Template">
				    				<div class="text px-4">
				    					<h3><a href="#">Work Name</a></h3>
				    					<span>Web Design</span>
				    				</div>
			    				</div>
		    				</div>
            	</div>
            	<div class="item">
            		<div class="project">
		    					<div class="img">
				    				<img src="images/project-3.jpg" class="img-fluid" alt="Colorlib Template">
				    				<div class="text px-4">
				    					<h3><a href="#">Work Name</a></h3>
				    					<span>Web Design</span>
				    				</div>
			    				</div>
		    				</div>
            	</div>
            	<div class="item">
            		<div class="project">
		    					<div class="img">
				    				<img src="images/project-4.jpg" class="img-fluid" alt="Colorlib Template">
				    				<div class="text px-4">
				    					<h3><a href="#">Work Name</a></h3>
				    					<span>Web Design</span>
				    				</div>
			    				</div>
		    				</div>
            	</div>
            	<div class="item">
            		<div class="project">
		    					<div class="img">
				    				<img src="images/project-5.jpg" class="img-fluid" alt="Colorlib Template">
				    				<div class="text px-4">
				    					<h3><a href="#">Work Name</a></h3>
				    					<span>Web Design</span>
				    				</div>
			    				</div>
		    				</div>
            	</div>
            	<div class="item">
            		<div class="project">
		    					<div class="img">
				    				<img src="images/project-6.jpg" class="img-fluid" alt="Colorlib Template">
				    				<div class="text px-4">
				    					<h3><a href="#">Work Name</a></h3>
				    					<span>Web Design</span>
				    				</div>
			    				</div>
		    				</div>
            	</div>
            </div>
          </div>
    		</div>
    	</div>
    </section>-->
		

		<!--<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 col-lg-5 d-flex">
    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/about.jpg);">
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-7 pl-lg-5 py-5">
    				<div class="py-md-5">
	    				<div class="row justify-content-start pb-3">
			          <div class="col-md-12 heading-section ftco-animate">
			          	<span class="subheading">Welcome to digilab</span>
			            <h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">We Are Digital Agency</h2>
			            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
			            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
			            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
			          </div>
			        </div>
		          <div class="counter-wrap ftco-animate d-flex mt-md-3">
	              <div class="text p-4 bg-primary">
	              	<p class="mb-0">
		                <span class="number" data-number="20">0</span>
		                <span>Years of experience</span>
	                </p>
	              </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>-->

    <section class="ftco-section" id="about-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-6 heading-section text-center ftco-animate">
          	<span class="subheading">About Us</span>
            <h2 class="mb-4">Team Members</h2>
            <p>Alone we can do so little, together we can do so much.</p>
          </div>
        </div>
        <div class="row">
					<!-- <div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/staff-1.jpg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<h3 class="mb-2">Lloyd Wilson</h3>
									<span class="position mb-4">CEO, Founder</span> -->
									<!--<div class="faded">
										<ul class="ftco-social text-center">
			                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              </ul>
		              </div>-->
		            <!-- </div>
							</div>
						</div>
					</div> -->
					<div class="col-md-6 col-lg-4 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(img/mariya.jpeg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<h3 class="mb-2">Mariya Zaveri</h3>
									<span class="position mb-4">Web Designer</span>
									<!--<div class="faded">
										<ul class="ftco-social text-center">
			                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              </ul>
		              </div>-->
		            </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(img/rani.jpeg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<h3 class="mb-2">Rani Thavrani</h3>
									<span class="position mb-4">Web Designer</span>
									<!--<div class="faded">
										<ul class="ftco-social text-center">
			                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              </ul>
		              </div>-->
		            </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(img/yash.jpeg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<h3 class="mb-2">Yash Trivedi</h3>
									<span class="position mb-4">Web Developer</span>
									<!--<div class="faded">
										<ul class="ftco-social text-center">
			                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              </ul>
		              </div>-->
		            </div>
							</div>
						</div>
					</div>
				</div>
    	</div>
    </section>

    <section class="ftco-section contact-section ftco-no-pb" id="login-signup-section">
        <div class="container">
          <!-- <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
              <span class="subheading">be a part of Your Clan</span>
              <h2 class="mb-4">Login or Signup</h2> -->
              <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> -->
            <!-- </div>
          </div> -->
          <!-- <div class="row d-flex contact-info mb-5">
            <div class="col-md-6 col-lg-3 d-flex ftco-animate">
              <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="icon-map-signs"></span>
                </div>
                <h3 class="mb-4">Address</h3>
                <p>198 West 21th Street, Suite 721 New York NY 10016</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex ftco-animate">
              <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="icon-phone2"></span>
                </div>
                <h3 class="mb-4">Contact Number</h3>
                <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex ftco-animate">
              <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="icon-paper-plane"></span>
                </div>
                <h3 class="mb-4">Email Address</h3>
                <p><a href="mailto:info@yourclan.com">info@yourclan.com</a></p>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex ftco-animate">
              <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="icon-globe"></span>
                </div>
                <h3 class="mb-4">Website</h3>
                <p><a href="#">yourclan.com</a></p>
              </div>
            </div>
          </div> -->
          <div class="row no-gutters block-9">
            <div class="col-md-6 order-md-last d-flex">
              <form method="post" class="bg-light p-5 contact-form">
                <h3 style="text-align:center;">Login</h3>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" name="pass" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                  <a href="javascript:void(0)" data-toggle="modal" data-target="#forgotPassword">Forgot Password?</a>
                </div>
                <div class="form-group">
                  <input type="submit" name="login" value="Login" class="btn btn-primary py-3 px-5">
                </div>
                <div class="form-group">
                <?php
                  if(isset($successMail)){
                  ?>
                    <div class="alert alert-success fade show" role="alert">
                      <?php echo $successMail; ?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                      
                  <?php
                    }
                  ?>
                  <?php
                    if(isset($errorMail)){
                    ?>
                      <div class="alert alert-danger fade show" role="alert">
                        <?php echo $errorMail; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    <?php
                    }
                  ?>
                </div>
              </form>
            </div>
            <div class="col-md-6 d-flex">
              <!-- <div id="map" class="bg-white"></div> -->
              <form method="post" class="bg-light p-5 contact-form">
                  <h3 style="text-align:center;">Signup</h3>
                  <div class="form-group">
                    <input type="text" name="fname" class="form-control" placeholder="First Name">
                  </div>
                  <div class="form-group">
                    <input type="text" name="lname" class="form-control" placeholder="Last Name">
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input type="password" name="pass" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <input type="password" name="cpass" class="form-control" placeholder="Confirm Password">
                  </div>
                  <div class="form-group">
                    <input type="submit" name="signup" value="Signup" class="btn btn-primary py-3 px-5">
                  </div>
                </form>
            </div>
          </div>
        </div>
      </section>

      <!--<section class="ftco-section testimony-section" id="testimony-section">
      <div class="container">
        <div class="row justify-content-center pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-4">Happy Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4 pb-5">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">John Fox</p>
                    <span class="position">Businessman</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4 pb-5">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">John Fox</p>
                    <span class="position">Businessman</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4 pb-5">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">John Fox</p>
                    <span class="position">Businessman</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(images/person_4.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4 pb-5">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">John Fox</p>
                    <span class="position">Businessman</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4 pb-5">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">John Fox</p>
                    <span class="position">Businessman</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->

    <!--<section class="ftco-section bg-light" id="blog-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Blog</span>
            <h2 class="mb-4">Our Blog</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-2">
              			<span class="day">12</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">March</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-2">
              			<span class="day">10</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">March</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-2">
              			<span class="day">05</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">March</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Contact</span>
            <h2 class="mb-4">Contact Us</h2>
            <p>Get in touch with us</p>
          </div>
        </div>
        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
          		<h3 class="mb-4">Address</h3>
	            <p>198 West 21th Street, Suite 721 New York NY 10016</p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<h3 class="mb-4">Contact Number</h3>
	            <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<h3 class="mb-4">Email Address</h3>
	            <p><a href="mailto:info@yourclan.com">info@yourclan.com</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-globe"></span>
          		</div>
          		<h3 class="mb-4">Website</h3>
	            <p><a href="#">yourclan.com</a></p>
	          </div>
          </div>
        </div>
        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
          
            <form method="post" action="index.php#contact-section" class="bg-light p-5 contact-form">
              <div class="form-group">
              <?php
                if(isset($contactSuccessMsg)){
                ?>
                      <div class="alert alert-success fade show" role="alert">
                        <?php echo $contactSuccessMsg; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    
                <?php
                }
              ?>
              <?php
                if(isset($contactErrorMsg)){
                ?>
                      <div class="alert alert-danger fade show" role="alert">
                        <?php echo $contactErrorMsg; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                <?php
                }
              ?>
              </div>
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="contactForm" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<img src="img/contact.jpg" width="600" alt="">
          </div>
        </div>
      </div>
    </section>
		

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About YourClan</h2>
              <p>We empower people with an understanding of who they are, connecting them with their past, present, and future</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="javascript:void(0);"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="javascript:void(0);"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="javascript:void(0);"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#home-section"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                <li><a href="#about-section"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                <li><a href="#services-section"><span class="icon-long-arrow-right mr-2"></span>Services</a></li>
                <li><a href="#login-signup-section"><span class="icon-long-arrow-right mr-2"></span>Login or Signup</a></li>
                <li><a href="#contact-section"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <!--<div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Web Design</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Web Development</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Business Strategy</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Data Analysis</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Graphic Design</a></li>
              </ul>
            </div>
          </div>-->
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. louis mountain view Gujarat, India</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourclan.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <a href="https://yourclan.com" target="_blank">Your Clan</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Modal -->
  <div class="modal fade" id="forgotPassword" tabindex="-1" role="dialog" aria-labelledby="forgotPasswordLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form method="post" action="index.php#login-signup-section">
          <div class="modal-header">
            <h5 class="modal-title" id="forgotPasswordLabel">Forgot Password?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Enter Email</label>
              <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="forgotPassword" class="btn btn-primary">Send</button>
          </div>
        </form>
      </div>
    </div>
  </div>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#9ff669"/></svg></div>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>