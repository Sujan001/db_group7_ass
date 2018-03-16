<!DOCTYPE html>
<html>

<?php
 require 'header.php';
?>
<body>


<div class="w3-main" style="margin-left:185px;">
  <div style="background-color: grey;height:180px;">
    <div class="input-group" style="margin-top: 100px;margin-left:300px;position: absolute;">
              <input class="form-control" type="text" placeholder="     Search NELSON" style="width:450px;border-radius:20px;">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
              <div style="width:80px;height: 80px;border-radius: 50%;background-color: white;float: right;margin-left: 200px;margin-top:-45px;">
              </div>
              <p style="margin-left: 692px;position: absolute;">Welcome!</p>
    </div>     
</div>

<div> <!--nelson navigation bar -->
  <nav>
    <ul>
      <li><a class="active" href="#ref">References</a></li>
      <li><a href="#jou">Journals</a></li>
      <li><a href="#nov">Novels</a></li>
      <li><a href="#books">Books</a></li>
    </ul>
  </nav>
</div>

<div style="width:1000px;height:410px;border: 2px solid black;margin-left: 80px;margin-top:-15px;">
    <div style="float: left;width:42%;margin-left:50px;margin-top:50px;height:80%;border:2px solid black;">
      <div style="width:100%;height:120px;background-color: grey;">
        <i class="fas fa-plus-circle" style="font-size: 4.5em;position: absolute;margin-left:340px;margin-top:5px;"></i>
      </div>
    </div>
    <div style="float: left;width: 42%;margin-left:50px;margin-top:50px;height:80%;border:2px solid black;">
      <div style="width:100%;height:120px;background-color: grey;">
        <i class="fas fa-plus-circle" style="font-size: 4.5em;position: absolute;margin-left:340px;margin-top:5px;"></i>
      </div>
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
