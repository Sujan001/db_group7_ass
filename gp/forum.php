<!DOCTYPE html>
<html>

<?php
 require 'header.php';
?>
<body>



<!-- !PAGE CONTENT! 
  <i class="fa fa-dashboard"></i>
<i class="fas fa-plus-circle" style="margin-top:-55px; font-size: 4.5em;"></i>
-->
<div class="w3-main" style="margin-left:185px;">
  <div style="background-color: grey;height:130px;">
      <div style="float: left; margin-left: 50px;margin-top: 60px;">
        <p>Create your own posts :<i class="fas fa-plus-circle" style="font-size: 4.5em;position: absolute;margin-left:10px;margin-top: -22px;"></i></p>
      </div>
      <div style="float: left; margin-top: 70px;margin-left: 60%;"> 
        <input style="border-radius: 20px;" type="text" name ="key" placeholder="Search posts" /><button style="margin-left: -30px;"><i class="fas fa-search"></i></button>
      </div>
       
</div>
  <!-- Header -->
  <header class="w3-container">
    <h5><b><i class="fa fa-dashboard"></i> Solved Posts<hr></b></h5>
  </header>

  <div style="border: 1px solid black;height: 220px;width: 1135px;margin-left: 30px; background-color: grey;">
    <div style="margin-left: 10px;">
    <p style="background-color: lightgrey">How to upload my assignment to the portal ?</p>
    <p><a href="#">How do i change my profile ?</a></p>
    <p><a href="#">Can i plan my project with my friends ?</a></p>
    <p><a href="#">Can i score the highest grade in my resits ?</a></p>
    <p><a href="#">Wiil i be plagiarized if i consult mu projects with Bill gate ?</a></p>
  </div>
  </div>
  <br>
  <header class="w3-container">
    <h5><b><i class="fa fa-dashboard"></i> Trending Posts<hr></b></h5>
  </header>

  <div style="border: 1px solid black;height: 160px;width: 1135px;margin-left: 30px; margin-top: 20px; background-color: grey;">
    <div style="margin-left: 10px; font-size: 1.2em;">
    <p style="background-color: lightgrey"><a href="#">What is a portal ? is it an inter-dimensional travel medium ?</a></p>
    <p><a href="#">How do i chat with my girlfriend using this site ?</a></p>
    <p><a href="#">Wiil this site track my activity ?</a></p>
  </div>
  </div>

</div> <!-- main div --> 
<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>
