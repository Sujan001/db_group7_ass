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
    <h5><b><i class="fa fa-dashboard"></i> My Modules<hr></b></h5>
  </header>

  <div style="border: 1px solid black;height: 250px;width: 1135px;margin-left: 30px; background-color: grey;">
    <div style="margin-left: 10px;">
    <p style="background-color: lightgrey">CSY1017-NAMI-1617: 16/17 Computer Communications (NAMI) Year 1 Intensive Start (CSY1017-NAMI)</p>
    <p><a href="#">CSY1014-NAMI-1617: 16/17 Computer Systems (NAMI) Year 1 Intensive Start (CSY1014-NAMI)</a></p>
    <p><a href="#">CSY1026-NAMI-1617: 16/17 Databases 1 (NAMI) Year 1 Intensive Start (CSY1026-NAMI)</a></p>
    <p><a href="#">CSY1020-NAMI-1617: 16/17 Problem Solving and Programming (NAMI) Year 1 Intensive Start (CSY1020-NAMI)</a></p>
    <p><a href="#">CSY1019-NAMI-1617: 16/17 Software Engineering (NAMI) Year 1 Intensive Start (CSY1019-NAMI)</a></p>
    <p><a href="#">CSY1018-NAMI-1617: 16/17 Web Development (NAMI) Year 1 Intensive Start (CSY1018-NAMI)</a></p>
  </div>
  </div>
  <br>
  <header class="w3-container">
    <h5><b><i class="fa fa-dashboard"></i> My Resources<hr></b></h5>
  </header>

  <div style="border: 1px solid black;height: 160px;width: 1135px;margin-left: 30px; margin-top: 20px; background-color: grey;">
    <div style="margin-left: 10px; font-size: 1.2em;">
    <p style="background-color: lightgrey"><a href="#">Nelson</a></p>
    <p><a href="#">elibrary</a></p>
    <p><a href="#">elearning and video</a></p>
  </div>
  </div>

  <header class="w3-container">
    <h5><b><i class="fa fa-dashboard"></i> Forum posts<hr></b></h5>
  </header>

   <div style="border: 1px solid black;height: 160px;width: 1135px;margin-left: 30px; margin-top: 20px; background-color: grey;">
    <div style="margin-left: 10px; font-size: 1.2em;">
    <p style="background-color: lightgrey"><a href="#">Reply1</a></p>
    <p><a href="#">Reply2</a></p>
    <p><a href="#">Reply3</a></p>
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
