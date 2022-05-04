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
.dropbtn { background-color: white;}
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
                
                <li><a class="active" href="gallery.php">GALLERY</a></li>
                <li><a  href="contact.php">CONTACT US</a></li>
              </ul>
           </div>
        </div>
</nav>

<div class="dh-gallary">
    <div class="container-fluid">



     <div>&nbsp;</div>



           <div>&nbsp;</div>


                    <h2 class="text-uppercase"><u>Dhruva Coral</u></h2>

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

            <div>&nbsp;</div>



      <div>&nbsp;</div>


                    <h2 class="text-uppercase"><u>Dhruva Bliss</u></h2>

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

            <div>&nbsp;</div>


        <h2 class="text-uppercase"><u>Dhruva Aurora</u></h2>

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
</div>
        <div id="myModal" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="img01">
              <div id="caption"></div>
        </div>
<!--Gallery Ends-->
   <div>&nbsp;</div>

<?php include 'templates/footer.php' ?>

<script type="text/javascript">



function replay_click(clicked_id) {

    var modal = document.getElementById('myModal');
        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById(clicked_id);
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = "none";
        }
}
</script>
<!--Footer ends-->
</body>
</html>
