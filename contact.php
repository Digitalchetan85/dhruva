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
                <li><a class="active" href="contact.php">CONTACT US</a></li>
              </ul>
           </div>
        </div>
</nav>

<!--navigation bar ends-->
<div class="contact-us">
    <div class="container-fluid">
        <img src="images/contact.jpg" width="100%">
    </div>
</div>

<!--Contact Form-->
<div class="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-md-6 con-us" >
                <h4 class="text-left">Address</h4>
                 <p class="text-left">
                        <b>DHRUVA DEVELOPERS &amp; PROMOTERS</b>,<br>
                        Dhruva Aurora, 4th cross,<br>
                        Giddappa Block, Opp: Post Office,<br>
                        Ganga Nagar, R.T.Nagar,<br>
                        Bangalore-560032.<br><br>
                        Contact No. :  8550888878<br>
                        e-mail: info@dhruvadevelopers.com<br>
                                dhruvadevelopers@gmail.com
                    </p>
            </div>
            <div class="col-md-6">
                <h4 class="text-left text-capitalize">contact form</h4>

                 <form name="myForm" action="mail.php" method="post" class="js-php" onsubmit="return validateForm()">
                    <div class="form-group">
                        <label> Name: </label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                    </div>
                    <div class="form-group">
                        <label> Email: </label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                    </div>
                    <div class="form-group">
                        <label> Number: </label>
                        <input type="text"  title="Please Enter Valid Number"  name="mobile"  class="form-control" placeholder="Enter Number" required>
                    </div>
                    <div class="form-group">
                        <label> Comment </label>
                        <textarea type="textarea" name="comment" class="form-control" placeholder="Add Comment" required></textarea>
                     </div>
                     <div class="msg"><p class="disp-msg text-center"></p></div>
                     <button type="submit" class="btn btn-default" id="form-validate">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>
<!--Contact Form Ends-->

<!-- map starts -->
<section>
  <div class="dhuuva-map">
      <div class="container-fluid">
        <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d124391.16749440397!2d77.52064235944405!3d13.02140370226464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3bae17b0cd46b421%3A0xdf8238b51b8be04b!2sdhruva+aurora!3m2!1d13.0214131!2d77.59068289999999!5e0!3m2!1sen!2sin!4v1494218718454" width="1200" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
  </div>
</section>
<!-- map ends -->


<!--Footer starts-->

<?php include 'templates/footer.php' ?>

<script>
$(document).ready(function() {

$("#form-validate").click(function() {
  var name = document.forms["myForm"]["name"].value;
  var email = document.forms["myForm"]["email"].value;
  var mobile = document.forms["myForm"]["mobile"].value;
  var comment = document.forms["myForm"]["comment"].value;
    if (name !== "" && email !== "" && mobile !== "" && comment !== "") {
        $(".msg p").append("Your Message Has Sent Successfully");
    }
});

});
</script>

<!--Footer ends-->
</body>
</html>
