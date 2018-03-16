<!DOCTYPE html>
<html>

<?php
 require 'header.php';
?>
<body>


<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:185px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container">
    <h5 style="font-size: 1.5em;">Welcome user !<hr></h5>
  </header>  

  <div class="set1">
    <div class="mov">
    <p style="font-size: 1.3em;">Edit your Image</p>
    <div class="edit_img">
    </div>
    <button style="background-color: white;border:1px solid black;margin-top: 50px;width:150px;font-size: 1.1em;">Select Image</button>
  </div>
  </div>
  <div class="set2">
    <center><p style="font-size: 2em;">Edit your details</p></center>
    <div class="set2-in">
      <li>Firstname<input style="margin-left: 40px;padding-left: 10px;" type="text" name="fname" placeholder="Current Firstname"></li>
      <li style="margin-left: 50px;">Surname<input style="margin-left: 40px;padding-left: 10px;" type="text" name="sname" placeholder="Current Surname"></li>
      <li style="margin-top: 40px;">Date of Birth:<input style="margin-left: 17px;" type="date"></li>
      <li style="margin-left: -220px;border-right:none;">Address:<input type="text" name="" style="margin-top:110px;margin-left: 48px;"></li>
      <li style="margin-top: 170px;margin-left: -275px;">Receive Notification</li>
      <li style="margin-top: 220px;margin-left: -275px;">Agree Terms and condition</li>
      <li style="margin-top: 320px;margin-left: 160px;background-color: white;"><button>Edit</button></li>

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
