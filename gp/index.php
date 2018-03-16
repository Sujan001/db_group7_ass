<!DOCTYPE html>
<html>

<?php
 require 'header.php';
?>

<body>
  <?php 
                session_start();
               if(!isset($_SESSION['session_login_id'])){
                        header('location:login.php');
               }

               $pdo = new PDO('mysql:host=localhost;dbname=group7_db','root','');
               if(isset($_SESSION['session_login_id']))
               {
                    $stmt = $pdo->prepare("SELECT * FROM user_login WHERE user_id = :login_id");
                    $criteria = [
                    'login_id' => $_SESSION['session_login_id']    
                     ];
                $stmt->execute($criteria);
                $take = $stmt->fetch();
                $call_name=$take['user_name'];
                $call_id=$take['user_un_id'];
                $call_review=$take['user_academic_review'];
                $call_conduct=$take['user_class_conduct'];
                $call_image=$take['profile_image'];

               
                $stmt = $pdo->prepare("SELECT * FROM module_detail WHERE (user_id = :login_id AND module_id = '1' )");
                    $criteria = [
                    'login_id' => $_SESSION['session_login_id']    
                     ];
                $stmt->execute($criteria);
                $take = $stmt->fetch();
                $call_result1=$take['result'];

                $stmt = $pdo->prepare("SELECT * FROM module_detail WHERE (user_id = :login_id AND module_id = '2' )");
                    $criteria = [
                    'login_id' => $_SESSION['session_login_id']    
                     ];
                $stmt->execute($criteria);
                $take = $stmt->fetch();
                $call_result2=$take['result'];

                $stmt = $pdo->prepare("SELECT * FROM module_detail WHERE (user_id = :login_id AND module_id = '3' )");
                    $criteria = [
                    'login_id' => $_SESSION['session_login_id']    
                     ];
                $stmt->execute($criteria);
                $take = $stmt->fetch();
                $call_result3=$take['result'];

                $stmt = $pdo->prepare("SELECT * FROM module_detail WHERE (user_id = :login_id AND module_id = '4' )");
                    $criteria = [
                    'login_id' => $_SESSION['session_login_id']    
                     ];
                $stmt->execute($criteria);
                $take = $stmt->fetch();
                $call_result4=$take['result'];

                $stmt = $pdo->prepare("SELECT * FROM module_detail WHERE (user_id = :login_id AND module_id = '5' )");
                    $criteria = [
                    'login_id' => $_SESSION['session_login_id']    
                     ];
                $stmt->execute($criteria);
                $take = $stmt->fetch();
                $call_result5=$take['result'];

                $stmt = $pdo->prepare("SELECT * FROM module_detail WHERE (user_id = :login_id AND module_id = '6' )");
                    $criteria = [
                    'login_id' => $_SESSION['session_login_id']    
                     ];
                $stmt->execute($criteria);
                $take = $stmt->fetch();
                $call_result6=$take['result'];
                //   foreach($stmt as $row)
                //   { 
                // $call_result=$row['result'];
                //   }
                }
  ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:185px;margin-top:43px;">
<div style="width:72.4%;float: left;">
  <!-- Header -->
  <header class="w3-container">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard<hr></b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter" style="float: left; width:25%;">
      <div class="w3-container w3-red w3-padding-16">
        <div>

          <?php
            // echo '<img src="'.$call_image.'"/>';
           echo '<img src=""/>';
          ?>
        </div>
        <div class="w3-left"><i class="fa fa-fw fa-user" style="font-size: 3em;"></i></div>
        <div class="w3-right">
          <h3>12</h3> <!-- notification numbers -->
        </div>
        <div class="w3-clear"></div>
        <h4>My image</h4>
      </div>
    </div>
    <div style="float: right; width:75%;">
      <div style="float:left;">
      <p>
        Name: 
        <?php
         echo $call_name;
        ?>

      </p>
      <p>UN-ID: 
        <?php
         echo $call_id;
        ?>
      </p>
    </div>
    <div style="float:right;">
      <p>Academic Review: 
         <?php
         echo $call_review;
        ?>
      </p>
      <p style="margin-right:210px;">Class Conduct:  
        <?php
         echo $call_conduct;
        ?>
      %</p>
     <!--  <p style="margin-left:165px;"><a href="#">View Profile</a></p> -->
    </div>    
    </div>   
  </div>

  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <!-- <div class="w3-third">
        <h5>Regions</h5>
        <img src="/w3images/region.jpg" style="width:100%" alt="Google Regional Map">
      </div> -->
      <div class="w3-twothird">
        <h5>Grades And Assignments<hr></h5>
        <table class="w3-table w3-striped w3-white">
          <tr>
            <th>Subject Code</th>
            <th>Subject</th>
            <th>Due Assignments</th>
            <th>Result</th>
          </tr>
          <tr>
            <td>CSY2028</td>
            <td>Web Programming</td>
            <td><a href="#">view</a></td>
            <td>&#9670; 
                         <?php
         echo $call_result1;
        ?>
            %</td>
          </tr>
          <tr>
            <td>CSY2027</td>
            <td>Group Project</td>
            <td><a href="#">view</a></td>
            <td>&#9670; 
                         <?php
         echo $call_result2;
        ?>
            %</td>
          </tr>
          <tr>
            <td>CSY2006</td>
            <td>Software Engineering 2</td>
            <td><a href="#">view</a></td>
            <td>&#9670; 
                                  <?php
         echo $call_result3;
        ?>
            %</td>
          </tr>
          <tr>
            <td>CSY2030</td>
            <td>Systems Design and Development</td>
            <td><a href="#">view</a></td>
            <td>&#9670; 
                                  <?php
         echo $call_result4;
        ?>
            %</td>
          </tr>
          <tr>
            <td>CSY2038</td>
            <td>Databases 2</td>
            <td><a href="#">view</a></td>
            <td>&#9670; 
                                  <?php
         echo $call_result5;
        ?>
            %</td>
          </tr>
          <tr>
            <td>CSY2008</td>
            <td>Fromal Specifications of System Software</td>
            <td><a href="#">view</a></td>
            <td>&#9670; 
                                  <?php
         echo $call_result6;
        ?>
            %</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  
  <div style="margin-left: 35px; height:250px;">
    <h5>University Announcements<hr></h5>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>99</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Fee Due</h4>
      </div>
    </div>
    <div class="w3-quarter" style="margin-left: 20px;">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>23</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Exams Schedule</h4>
      </div>
    </div>
    <div class="w3-quarter" style="margin-left: 20px;">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>50</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Review Results</h4>
      </div>
    </div>
    <div class="w3-quarter" style="margin-left: 20px;">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>52</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>New Opportunity</h4>
      </div>
    </div>
  </div>
</div>

<!--The right side div with calender-->
<div class="right-bar" style="width:25%;float:right;height:100%;background-color:#009688;position: fixed;z-index: 1;margin-left:828px;">
  
<center style="margin-top: 20px;">
  
<script language="javascript" type="text/javascript">
var day_of_week = new Array('Su','Mo','Tu','We','Th','Fr','Sa');
var month_of_year = new Array('January','February','March','April','May','June','July','August','September','October','November','December');

//  DECLARE AND INITIALIZE VARIABLES
var Calendar = new Date();

var year = Calendar.getFullYear();     // Returns year
var month = Calendar.getMonth();    // Returns month (0-11)
var today = Calendar.getDate();    // Returns day (1-31)
var weekday = Calendar.getDay();    // Returns day (1-31)

var DAYS_OF_WEEK = 7;    // "constant" for number of days in a week
var DAYS_OF_MONTH = 31;    // "constant" for number of days in a month
var cal;    // Used for printing

Calendar.setDate(1);    // Start the calendar day at '1'
Calendar.setMonth(month);    // Start the calendar month at now


/* VARIABLES FOR FORMATTING
NOTE: You can format the 'BORDER', 'BGCOLOR', 'CELLPADDING', 'BORDERCOLOR'
      tags to customize your caledanr's look. */

var TR_start = '<TR>';
var TR_end = '</TR>';
var highlight_start = '<TD WIDTH="30"><TABLE CELLSPACING=3 BORDER=0 BGCOLOR=DEDEFF BORDERCOLOR=#000><TR><TD WIDTH=30><B><CENTER>';
var highlight_end   = '</CENTER></TD></TR></TABLE></B>';
var TD_start = '<TD WIDTH="45"><CENTER>';
var TD_end = '</CENTER></TD>';

/* BEGIN CODE FOR CALENDAR
NOTE: You can format the 'BORDER', 'BGCOLOR', 'CELLPADDING', 'BORDERCOLOR'
tags to customize your calendar's look.*/

cal =  '<TABLE BORDER=1 CELLSPACING=0 CELLPADDING=0 BORDERCOLOR=#000><TR><TD>';
cal += '<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=3 BGCOLOR="#2196F3">' + TR_start;
cal += '<TD COLSPAN="' + DAYS_OF_WEEK + '" BGCOLOR="#2196F3"><CENTER><B>';
cal += month_of_year[month]  + '   ' + year + '<hr> </B>' + TD_end + TR_end;
cal += TR_start;

//   DO NOT EDIT BELOW THIS POINT  //

// LOOPS FOR EACH DAY OF WEEK
for(index=0; index < DAYS_OF_WEEK; index++)
{

// BOLD TODAY'S DAY OF WEEK
if(weekday == index)
cal += TD_start + '<B>' + day_of_week[index] + '</B>' + TD_end;

// PRINTS DAY
else
cal += TD_start + day_of_week[index] + TD_end;
}

cal += TD_end + TR_end;
cal += TR_start;

// FILL IN BLANK GAPS UNTIL TODAY'S DAY
for(index=0; index < Calendar.getDay(); index++)
cal += TD_start + '  ' + TD_end;

// LOOPS FOR EACH DAY IN CALENDAR
for(index=0; index < DAYS_OF_MONTH; index++)
{
if( Calendar.getDate() > index )
{
  // RETURNS THE NEXT DAY TO PRINT
  week_day =Calendar.getDay();

  // START NEW ROW FOR FIRST DAY OF WEEK
  if(week_day == 0)
  cal += TR_start;

  if(week_day != DAYS_OF_WEEK)
  {

  // SET VARIABLE INSIDE LOOP FOR INCREMENTING PURPOSES
  var day  = Calendar.getDate();

  // HIGHLIGHT TODAY'S DATE
  if( today==Calendar.getDate() )
  cal += highlight_start + day + highlight_end + TD_end;

  // PRINTS DAY
  else
  cal += TD_start + day + TD_end;
  }

  // END ROW FOR LAST DAY OF WEEK
  if(week_day == DAYS_OF_WEEK)
  cal += TR_end;
  }

  // INCREMENTS UNTIL END OF THE MONTH
  Calendar.setDate(Calendar.getDate()+1);

}// end for loop

cal += '</TD></TR></TABLE></TABLE>';

//  PRINT CALENDAR
document.write(cal);

//  End -->
</script>
</center>
<br/>

<center>
  <h5>Tuesday</h5>
  <div style="max-height:200px;max-width: 310px;background-color: #2196F3;border: 1px solid black">
    <p>Database</p>
    <p>PSP Review</p>
    <p>SE2 Classes</p>  
  </div>
</center>
<center style="margin-top: 50px;">
  <h5>Wednesday</h5>
  <div style="max-height:200px;max-width: 310px;background-color: #2196F3;border: 1px solid black">
    <p>SE2 Mock-Tests</p>
    <p>PSp Review</p>  
  </div>
</center>


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
