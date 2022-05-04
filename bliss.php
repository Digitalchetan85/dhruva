<!DOCTYPE html>
<html lang="en">
<head>
  <title>DHRUVA DEVELOPERS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--LINKS INCLUDE-->
    <?php include 'templates/csslinks.php' ?>

    <style>
    /* Dropdown Button */
.dropbtn {
  background-color: white;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #fa892d;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #fa892d;}
</style>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<!--navigation bar Starts-->

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
      <div class="row">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index.php"><img src="images/Logo.png" alt="logo" ></a>
                </div>
             <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                <li><a  href="index.php">HOME</a></li>
                <li><a  href="about-us.php">ABOUT US</a></li>
                <li><div class="dropdown">
                  <button class="dropbtn"><a  href="projects.php" style="color:black">PROJECTS</button></a>
                  <div class="dropdown-content">
                    <a href="coral.php">DHRUVA CORAL</a>
                    <a href="bliss.php">DHRUVA BLISS</a>
                    <a href="aurora.php">DHRUVA AURORA</a>
                  </div>
                </div></li>
                
                <li><a  href="gallery.php">GALLERY</a></li>
                <li><a  href="contact.php">CONTACT US</a></li>
              </ul>
           </div>
        </div>
</nav>



<!--navigation bar ends-->
<!--title-->
<div class="project-title">
    <div class="container-fluid">
    <img src="images/projects1-banner.jpg" width="100%">
    
    </div>
</div>
<!--title ends-->
<!--compleated project starts-->



 <!--compleated project ends-->

<!-- ongoing project starts -->
    <div class="projects-content">
	<div class="container-fluid bliss">
		<div class="row">
			<div class="col-md-9">
                <h2 class="text-uppercase text-left nowork">Dhruva Bliss</h2>
                <!-- <h4 class="text-capitalize text-left">Dhruva Bliss</h4> -->
                <p class="text-justify">Affordable housing is where we want our brand to get recognised for. It was quite a challenging decision to venture into a locality which is one of the biggest industrial areas in Asia. Peenya is a home to small, medium and large scale industries. <br><br>
                Dhruva Bliss is a project consisting of 28 affordable 2 & 3 Bhk residential flats located on the Nagasandra main road off Tumkur Road.  All the units are 100% vaasthu compliant and are planned to be independent flats without any common walls making them superbly ventilated and gives an airy feel to your home.
              </p>
			</div>
			</div>
             <div class="row">

            <div class="col-md-4">
                <img id="myImg1" class="myImgcss" onClick="replay_click(this.id)" src="images/gallery_image2.jpg" width="100%">
                <h4 class="text-center">Dhruva Bliss</h4>
            </div>
             <div class="col-md-4">
                <img id="myImg2" class="myImgcss" onClick="replay_click(this.id)" src="images/gallery_image3.jpg" width="100%">
                <h4 class="text-center">Dhruva Bliss Night View</h4>
            </div>
             <div class="col-md-4">
                <img id="myImg3" class="myImgcss" onClick="replay_click(this.id)" src="images/gallery_image4.jpg" width="100%">
                <h4 class="text-center">Dhruva Bliss Top view</h4>
            </div>
             <div class="col-md-4">
                <img id="myImg5" class="myImgcss" onClick="replay_click(this.id)" src="images/gallery_image6.jpg" width="100%">
                <h4 class="text-center">Dhruva Bliss Ground Floor Plan</h4>
            </div>
            <div class="col-md-4">
                <img id="myImg7" class="myImgcss" onClick="replay_click(this.id)" src="images/gallery_image8.jpg" width="100%">
                <h4 class="text-center">Dhruva Bliss Map</h4>
            </div>
             <div class="col-md-4">
                <img id="myImg1" class="myImgcss" onClick="replay_click(this.id)" src="images/gallery_image2.jpg" width="100%">
                <h4 class="text-center">Dhruva Bliss</h4>
            </div>
			</div>
		
	</div>
</div>
<br><br>

-<!-- ongoing project ends -->
<section>
  <div class="dhuuva-map">
      <div class="container-fluid">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.969463426513!2d77.50210471534344!3d13.037615716952608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3d1b766bb3c7%3A0xae3d8582f93a951!2sDHRUVA%20BLISS!5e0!3m2!1sen!2sin!4v1609058620495!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
  </div>
</section>

<!--future projects statrs-->



<!--future projects ends-->
<!--Footer starts-->

<?php include 'templates/footer.php' ?>

<!--Footer ends-->
</body>
</html>
