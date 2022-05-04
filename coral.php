<!DOCTYPE html>
<html lang="en">
<head>
  <title>DHRUVA DEVELOPERS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--LINKS INCLUDE-->
    <?php include 'templates/csslinks.php' ?>
    <link rel="shortcut icon" href="images/site-icon.png">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="assets/style.css" type="text/css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href='//fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>

     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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

.broch a {
    text-decoration: none;
   
}

.rera {
    text-align: center;
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


-<!-- ongoing project ends -->

<!--future projects statrs-->

 <div class="projects-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9">
                <h2 class="text-uppercase text-left nowork">Dhruva Coral</h2>
                <!--<h4 class="text-capitalize text-left">Dhruva Bills</h4> -->
                <p class="text-justify"><h4 class="text-capitalize text-left">A Home that makes you happy!<br><br></h4>
                  An idea of fullfilling life..... For most of us it begins with the family and moves on to spending delightfuk time in a cozy home. A home that comforts and nutures us. A home which that can cherish and where we enjoy beautiful moments with our loved ones. A home which makes us want to come back everyday. <br><br>This idea of a home finds its expression at Dhruva Coral Off Tumkur Road, 8th Mile Circle. So Let The New Life Begin!!
                </p>
                
		    
			    <h2 class="text-uppercase text-left nowork">Amenities</h2>
			    <ul>
			        
			         <li>Badminton court</li>
                     <li>Swimming pool with toddlers’ pool</li>
                     <li>Multi purpose hall</li>
                     <li>Gym</li>
                     <li> Children’s play area</li>
                     <li>All round jogging track</li>
                     <li>Indoor games ( Table Tennis, Carroms and Chess )</li>
                     <li>Landscaped garden</li>

			    </ul>
			   <h2 class="text-uppercase text-left nowork">RERA NO:</h2>
			   <p>PRM/KA/RERA/1251/309/PR/201029/003664</p>
			   	<div class="broch">
			    <h2 class="text-uppercase text-left nowork"> Have a look at our</h2>
          <!-- <h2 class="text-uppercase text-left nowork"> Have a look at our<a href="brochure.html" target="_blank"> E-Brochure</a></h2> -->

          <div class="row">
              <!-- <h3>The Basic Modal</h3> -->
              <a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#basicModal">E-Brochure</a>
          </div>
          <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Enquire Now!!</h4>
              </div>
              <div class="modal-body">
                  <div class="rounded pt-3 pb-3">
                      <div class="ps-5 pe-5 pt-4 text-start">
                          <div class="mb-3">
                              <label for="nandanam-brochure-name" class="form-label text-white text-start">Name</label>
                              <input type="name" class="form-control" id="nandanam-brochure-name" name="nandanam-brochure-name"
                                  placeholder="Name">
                          </div>
                          <div class="mb-3">
                              <label for="nandanam-brochure-email" class="form-label text-white">Email
                                  address</label>
                              <input type="email" class="form-control" id="nandanam-brochure-email" name="nandanam-brochure-email"
                                  placeholder="name@example.com">
                          </div>
                          <div class="mb-3">
                              <label for="nandanam-brochure-phone" class="form-label text-white">Phone
                                  No.</label>
                              <input type="tel" class="form-control" id="nandanam-brochure-phone" name="nandanam-brochure-phone"
                                  placeholder="Phone No.">
                          </div>
                          <div class="text-center mb-3">
                              <button type="submit" onClick="sendContactNandanamBrochure();"
                                  class="btn btn-outline-light">Submit</button>
                          </div>
                          <div id="mail-status-brochure"></div>
                      </div>
                  </div>
              </div>
              <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div> -->
            </div>
          </div>
        </div>
          
         
		
			</div>
			</div>
	
		
			 <div class="row">

            <div class="col-md-4">
                <img id="myImg1" class="myImgcss" onClick="replay_click(this.id)" src="images/gallery_image9.jpg" width="100%">
                <h4 class="text-center">Dhruva Coral</h4>
            </div>
             <div class="col-md-4">
                <img id="myImg2" class="myImgcss" onClick="replay_click(this.id)" src="images/gallery_image12.jpg" width="100%">
                <h4 class="text-center">Dhruva Coral Night View</h4>
            </div>
             <div class="col-md-4">
                <img id="myImg3" class="myImgcss" onClick="replay_click(this.id)" src="images/gallery_image13.jpg" width="100%">
                <h4 class="text-center">Dhruva Coral Top view</h4>
            </div>
             <div class="col-md-4">
                <img id="myImg5" class="myImgcss" onClick="replay_click(this.id)" src="images/gallery_image10.jpg" width="100%">
                <h4 class="text-center">Dhruva Coral Shuttle court</h4>
            </div>
            <div class="col-md-4">
                <img id="myImg7" class="myImgcss" onClick="replay_click(this.id)" src="images/gallery_image11.jpg" width="100%">
                <h4 class="text-center">Dhruva Coral Pool view </h4>
            </div>
             <div class="col-md-4">
                <img id="myImg1" class="myImgcss" onClick="replay_click(this.id)" src="images/gallery_image14.jpg" width="100%">
                <h4 class="text-center">Dhruva Coral Map</h4>
            </div>
            <br><br>
<br><br>

	</div>
</div>
<br><br>

<br><br>
<br><br>

<!--future projects ends-->
<section>
  <div class="dhuuva-map">
      <div class="container-fluid">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14532.501202480775!2d77.4861595297508!3d13.026413659255228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3d87ca088cf3%3A0xa610e59f3af28f09!2sDhruva%20Coral!5e0!3m2!1sen!2sin!4v1609217388239!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
  </div>
</section>
<!--Footer starts-->

<?php include 'templates/footer.php' ?>

<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  function sendContactNandanamBrochure() {
        var valid;  
        valid = validateContactNandanamBrochure();

        
        $('#mail-status-brochure').html('<p class="text-center text-white"><strong>Please wait...</strong></p>');

        if(valid) {
            jQuery.ajax({
            url: "nandanam-brochure-mail.php",
            type: "POST",
            data:'nandanam-brochure-name='+$("#nandanam-brochure-name").val()+'&nandanam-brochure-email='+$("#nandanam-brochure-email").val()+'&nandanam-brochure-phone='+$("#nandanam-brochure-phone").val(),
            
            success:function(data){
            $("#mail-status-brochure").html(data);
            
            dataclear();

            },
            error:function (data){
            $("#mail-status-brochure").html(data);
            }
            });
        }
        }

        function dataclear(){
        $("#nandanam-brochure-name").val('');
        $("#nandanam-brochure-email").val('');
        $("#nandanam-brochure-phone").val('');
        }

        function validateContactNandanamBrochure() {
        var valid = true;   
        //alert("HI");
        
        if(!$("#nandanam-brochure-name").val()) {
            $("#nandanam-brochure-name-info").html("(required)");
            $("#nandanam-brochure-name").css('background-color','#FFFFDF');
            valid = false;
        }
        if(!$("#nandanam-brochure-email").val()) {
            $("#nandanam-brochure-email-info").html("(required)");
            $("#nandanam-brochure-email").css('background-color','#FFFFDF');
            valid = false;
        }
        if(!$("#nandanam-brochure-email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
            $("#nandanam-brochure-email-info").html("(invalid)");
            $("#nandanam-brochure-email").css('background-color','#FFFFDF');
            valid = false;
        }
        
        if(!$("#nandanam-brochure-phone").val()) {
            $("#nandanam-brochure-phone-info").html("(required)");
            $("#nandanam-brochure-phone").css('background-color','#FFFFDF');
            valid = false;
        }

        if(!$("#nandanam-brochure-phone").val().match(/^[0-9]{10}$/)) {
            $("#nandanam-brochure-phone-info").html("(invalid)");
            $("#nandanam-brochure-phone").css('background-color','#FFFFDF');
            valid = false;
        }
        
        return valid;
        }
</script>

<!--Footer ends-->
</body>
</html>
