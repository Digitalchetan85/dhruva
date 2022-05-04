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
<body data-spy="scroll" data-target=".navbar" data-offset="50">

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
                <li><a class="active" href="index.php">HOME</a></li>
                <li><a  href="about-us.php">ABOUT US</a></li>
              <!--  <li><a  href="projects.php">PROJECTS</a></li> -->
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

<!-- Slider starts -->
<!-- Slider starts -->
	<div class="slider">
	<div class="container-fluid">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>

				<li data-target="#myCarousel" data-slide-to="1"></li>

        <li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="images/home-banner1.jpg" alt="first" width="100%">
					<div class="carousel-caption">

					</div>
        </div>

				<!--<div class="item">
					<img src="images/home-banner2.jpg" alt="second" width="100%">
					<div class="carousel-caption">

            </div>
          </div>-->

				<!--<div class="item active">
					<img src="images/home-banner3.jpg" alt="second" width="100%">
					<div class="carousel-caption">

					</div>
				</div> -->

				<div class="item">
					<img src="images/home-banner4.jpg" alt="second" width="100%">
					<div class="carousel-caption">

					</div>
        </div>

          <div class="item">
          <img src="images/home-banner5.jpg" alt="third" width="100%">
          <div class="carousel-caption">

          </div>
				</div>
            </div>

			<!-- Left and Right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	</div>
	<!-- Slider ends -->

<!-- Slider ends -->

<!--welcome message starts -->
<div class="welcome-style">
    <h2 align="center"> WELCOME TO DHRUVA DEVELOPERS &amp; PROMOTERS</h2>
    <div class="welocome-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                <p class="text-left text-justify">Dhruva Developers &amp; Promoters are
                    committed to achieving high customer satisfaction by
                    providing elevated quality and comfort through architectural
                    detailing and constructional expertise, thus creating homes
                    with a lively touch to suit your lifestyle. Experience the
                    joy of luxury homes at affordable prices in locations that
                    are carefully chosen for easy commute and ever energizing
                    fresh tranquility.<br><br>
                    We deliver immense value to the concrete structures through
                    contemporary designs and work par excellence. Dhruva understands
                    the customers’ needs thoroughly well before planning up any project
                     and ensures that each of its projects is worth a million smiles.<br><br>
                     Dhruva carves out your family space that would remain special to
                      you for decades. Be sure to experience a home which would be
                      the perfect mighty umbrella during rains, a cozy shelter that
                       makes winters warm, a well ventilated cool haven all set to
                       cool the summers.
                </p>
                </div>

                <div class="col-md-4">
                    <img src="images/building.jpg" width="100%">
                </div>
            </div>
        </div>
    </div>
</div>
<!--welcome message ends-->




<!--Footer starts-->

<?php include 'templates/footer.php' ?>
<!--Footer ends-->
</body>
</html>
