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

<div class="projects-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9">
                <h2 class="text-uppercase text-left nowork">Dhruva Aurora</h2>
                <h4 class="text-capitalize text-left">2 & 3 bhk laxurious apartments @ ganga nagar off r.t. nagar</h4>
                <p class="text-justify">FIRST IMPRESSION IS THE BEST IMPRESSION. Debut ventures are always special for any businesses. We feel blessed to have made our debut at a locality which many Bangalorean’s would dream to have as an Address, R.T NAGAR. <br><br>
                Dhruva Aurora consisting of thoughtfully planned 2 BHK and Spacious 3 BHK is located at Giddappa Block, opposite to RT Nagar post office. We thank each and every customer for making Dhruva Aurora a grand success and for their faith in us.
                </p>
			</div>
		</div>
		 <div class="row">
            <div class="col-md-4">

                <img id="myImg" class="myImgcss" onClick="replay_click(this.id)" src="images/gallery_image1.jpg" width="100%">
                <h4 class="text-center">Dhruva Aurora</h4>
            </div>
            <div class="col-md-4">
                <img id="myImg4" class="myImgcss" onClick="replay_click(this.id)" src="images/gallery_image5.jpg" width="100%">
                <h4 class="text-center">Dhruva Aurora Floor Plan</h4>
            </div>
            <div class="col-md-4">
                <img id="myImg6" class="myImgcss" onClick="replay_click(this.id)" src="images/gallery_image7.jpg" width="100%">
                <h4 class="text-center">Dhruva Aurora Map</h4>
            </div>


	</div>
</div>
<br><br>

 <!--compleated project ends-->

<!-- ongoing project starts -->

-<!-- ongoing project ends -->

<!--future projects statrs-->
<section>
  <div class="dhuuva-map">
      <div class="container-fluid">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.2281998020317!2d77.58841171534337!3d13.021135017311224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae17b0cd46b421%3A0xdf8238b51b8be04b!2sDHRUVA%20AURORA!5e0!3m2!1sen!2sin!4v1609059770644!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
  </div>
</section>



<!--future projects ends-->
<!--Footer starts-->

<?php include 'templates/footer.php' ?>

<!--Footer ends-->
</body>
</html>
