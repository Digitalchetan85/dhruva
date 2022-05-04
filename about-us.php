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
.dropbtn {background-color: white;}
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
                <li><a class="active" href="about-us.php">ABOUT US</a></li>
                <li><div class="dropdown">
                  <button class="dropbtn"><a  href="projects.php" style="color:black">PROJECTS</button></a>
                  <div class="dropdown-content">
                    <a href="coral.php"> DHRUVA CORAL</a>
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

<!--About us message-->
<div class="about-msg">
    <div class="container-fuid">
        <img src="images/aboutus-banner.jpg" alt="about" width="100%">
        <div class="about-con">
            <div class="col-md-9">
                <h5 class="text-left">About Us</h5>
                <p class="text-left text-justify">Dhruva Developers & Promoters, found in 2013
                    is a sister concern of PSR Builders and Developers. Our motto is “DREAM, DEVELOP
                    and DELIVER”. With over a decade’s proficiency & expertise in realty development
                     that we possess, we aim to revolutionize the Bangalore Realty development with
                      continuous innovation and improvement.<br><br>
                      Dhruva Developers & Promoters strives to provide paramount projects conceptualized
                      with its uniqueness in caring and catering to the predominant needs of each and every
                      customer who envisions owning a sweet home. Every buyer dreams of purchasing the best
                      house possible within his budget and Dhruva’s dream is to fulfill this to its fullest
                      achievable extent.<br><br>
                      In the near future Dhruva is spreading its wings across the retail commercial projects too apart from
                      the established domain of residential projects. <br><br>
                      Link to Parent company: <a href="http://www.psrgroupofcompany.com" target="_blank">http://www.psrgroupofcompany.com</a>.
                </p>
            </div>
            <div class="col-md-3">
            <img src="images/about-sub.jpg" width="100%">

            </div>
        </div>
    </div>
</div>
<!--About us message Ends-->

<!--Vision and mission-->
    <div class="vison-mission">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-left">Vision</h4>
                    <p class="text-justify text-left">To be recognised among one of the customer centric & value driven real estate firms in Bangalore.</p>


                    <h4 class="text-left">Mission</h4>
                    <p  class="text-justify text-left">To strive and build high quality residential structures and pursue commercial spaces as well.
                    To work towards enhancing the construction quality by incorporating latest technologies in industry.
                    </p>
                </div>
            </div>
        </div>
    </div>
<!--Vision and mission ends-->

<!--Footer starts-->

<?php include 'templates/footer.php' ?>


<!--Footer ends-->
</body>
</html>
