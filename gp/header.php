<!DOCTYPE html>
<html>
<head>
<title>Woodlands university college</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <a href="logout.php"><button>Log out</button></a>
  <span class="w3-bar-item w3-right"><img style="height:40px;width:100px;" src="images/logo1.bmp"></span>

</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:200px;" id="mySidebar"><br>
      <div class="w3-container w3-row">
       <!--  <div class="w3-col s4">
          <img src="images/2.jpg" class="w3-circle w3-margin-right" style="width:46px">
        </div> -->
      </div>
      <div class="w3-container" style="margin-left: 45px;">
        <h5 style="font-size: 2em;">Menu</h5>
      </div>
      <div class="w3-bar-block" style="margin-left: 30px;">
              <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
              <a style="border-top-left-radius: 20px;border-bottom-left-radius: 20px;border: 1px solid black; " href="index.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Overview</a>
              <a style="border-top-left-radius: 20px;border-bottom-left-radius: 20px;border: 1px solid black; " href="modules.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-fw fa-area-chart"></i>  Modules</a>
              <a style="border-top-left-radius: 20px;border-bottom-left-radius: 20px;border: 1px solid black; " href="announcements.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  Announcements</a>
              <a style="border-top-left-radius: 20px;border-bottom-left-radius: 20px;border: 1px solid black; " href="forum.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-fw fa-comment"></i>  Forum</a>
              <a style="border-top-left-radius: 20px;border-bottom-left-radius: 20px;border: 1px solid black; " href="nelson.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-fw fa-book"></i>  Nelson</a>
              <a style="border-top-left-radius: 20px;border-bottom-left-radius: 20px;border: 1px solid black; " href="planning.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-fw fa-sitemap"></i>  Planning</a>
              <a style="border-top-left-radius: 20px;border-bottom-left-radius: 20px;border: 1px solid black; " href="settings.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Settings</a><br><br>
      </div>
</nav>
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
</body>
</html>
