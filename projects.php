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
    <h2 class="text-capitalize">projects</h2>
      <!--  <p class="text-left text-justify">Following the grand success of our first project - Dhruva Aurora, we have launched our next
milestone “Dhruva Bliss” which we certainly anticipate to complete with greater grandeur. Our
clientele and their highly motivating words of encouragement and satisfaction drive us towards
planning to launch many more projects in the near future. We thank each and every customer
for their faith and confidence in us. Dhruva Developers and Promoters is always committed to
uphold the instilled trust that we enjoy in our customers’ hearts.</p> -->
        <p class="text-left text-justify">Following the grand success of our projects Dhruva Aurora and Dhruva Bliss, we have launched our next milestone “Dhruva Coral” which we certainly anticipate to complete with greater grandeur. Our clientele and their highly motivating words of encouragement and satisfaction drive us towards planning to launch many more projects in the near future. We thank each and every customer for their faith and confidence in us. Dhruva Developers and Promoters is always committed to uphold the instilled trust that we enjoy in our customers’ hearts.</p>
    </div>
</div>
<!--title ends-->
<div class="dh-gallary">
    <div class="container-fluid">



                

         <div class="row">

            <div class="col-md-4">
                <a href="coral.php">  <h2 class="text-center">Dhruva Coral</h2></a>
                <a href="coral.php"><img id="myImg1" class="myImgcss" onClick="replay_click(this.id)" src="images/gallery_image9.jpg" width="100%"></a>
            </div>
             <div class="col-md-4">
             <a href="bliss.php"> <h2 class="text-center">Dhruva Bliss</h2></a>
              <a href="bliss.php"><img id="myImg2" class="myImgcss" onClick="replay_click(this.id)" src="images/project-ongoing.jpg" width="100%"></a>
                </div>
             <div class="col-md-4">
             <a href="aurora.php"><h2 class="text-center">Dhruva Aurora</h2></a>
               <a href="aurora.php"> <img id="myImg3" class="myImgcss" onClick="replay_click(this.id)" src="images/project-comp.jpg" width="100%"></a>
                <h4 class="text-center"></h4>
            </div>
           

      <div>&nbsp;</div>
<!--future projects ends-->
<!--Footer starts-->

<?php include 'templates/footer.php' ?>

<!--Footer ends-->
</body>
</html>
