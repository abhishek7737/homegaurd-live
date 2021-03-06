<?php
// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	
    header("location: login.php");
    //exit;
	// Include config file
}
else{
	
require_once "config.php";
}

?>
<!Doctype html>
 
<html class="fontawesome-i2svg-active fontawesome-i2svg-complete">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Rajasthan Home Guards</title>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style3.css">
        <link rel="stylesheet" href="FinalAttendance.css">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

        <!-- Font Awesome JS -->

        <script defer="" src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer="" src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        
    </head>

    <body>

    <!-- Bootstrap NavBar -->
    <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-custom">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="Homeguard.jpeg" width="54" height="54" class="d-inline-block align-top logo" alt="">
            <span class="sm title-web"><b>RAJASTHAN HOME GUARDS TRAINING CENTER, BHILWARA</b></span>
        </a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active home">
                    <a class="nav-link" href="Dashboard.php" title="home"><i class="fa fa-home" style="font-size: 19px;" aria-hidden="true"></i><span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav><!-- NavBar END -->

    <!----------------- Body ------------>
    <!-- Bootstrap row for Sidebar container -->
    <div class="row" id="body-row" style="width:100%;">
        <!-- Sidebar -->
        <div id="sidebar-container" class="sidebar-expanded d-none d-sm-block">
            <!-- d-* hiddens the Sidebar in smaller devices. Its items can be kept on the Navbar 'Menu' -->
            <!-- Bootstrap List Group -->
            <ul class="list-group">
                <a href="#top" data-toggle="sidebar-colapse" class="bg-custom list-group-item list-group-item-action d-flex align-items-center">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span id="collapse-icon" class="fa fa-2x mr-3"></span>
                        <span id="collapse-text" class="menu-collapsed"></span>
                    </div>
                </a>
                <!-- Separator with title MAIN MENU -->
                <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                    <small>MAIN &nbsp; MENU</small>
                </li>
                <!-- /END Separator -->
                <!-- Menu with submenu -->
                <a href="FinalAttendance.php" class="bg-custom list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="mr-0"></span>
                        <img src="usercheck3.png" class="sidebar-img">
                        <span class="menu-collapsed ml-3">Attendance Record</span>
                    </div>
                </a>
                <a href="volunteers.php" class="bg-custom list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="mr-0"></span>
                        <img src="Vol_list.png" class="sidebar-img">
                        <span class="menu-collapsed ml-3">Volunteers List</span>
                    </div>
                </a>
                <a href="CheckPointList.php" class="bg-custom list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="mr-0"></span>
                        <img src="checkpoint2.png" class="sidebar-img">
                        <span class="menu-collapsed ml-3">Checkpoint</span>
                    </div>
                </a>

                <a href="#" class="bg-custom list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="mr-0"></span>
                        <img src="Trash.png" class="sidebar-img">
                        <span class="menu-collapsed ml-3">Trash</span>
                    </div>
                </a>
                <a href="#" class="bg-custom list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="mr-0"></span>
                        <img src="Profile.png" class="sidebar-img">
                        <span class="menu-collapsed ml-3">My Profile</span>
                    </div>
                </a>
                <a href="#" class="bg-custom list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="mr-0"></span>
                        <img src="directory.png" class="sidebar-img">
                        <span class="menu-collapsed ml-3">Contact Directory</span>
                    </div>
                </a>
                <a href="#" class="bg-custom list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="mr-0"></span>
                        <img src="bug.png" class="sidebar-img">
                        <span class="menu-collapsed ml-3">Bug Report</span>
                    </div>
                </a>
                <a href="logout.php" class="bg-custom list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="mr-0"></span>
                        <img src="Logout.png" class="sidebar-img">
                        <span class="menu-collapsed ml-3">Logout</span>
                    </div>
                </a>
            </ul><!-- List Group END-->
        </div><!-- sidebar-container END -->

        <!-- Body for Attendance record-->
        <div class="col p-4 d-none d-sm-block">
            <!--------- Header with Dropdowns ----------->
            <div class="header row attendance-header">
                <span class="col-6 attendance-header-1"><b>Attendance Record</b></span>
                <span  class="col-6 attendance-header-2">
                    
                </span>
            </div><!--------- End of header with Dropdowns ----------->

            <!-- Table for Attendance record-->
            <div class="container">
                <table class="table table-striped table-hover" style="margin-top: 8%;">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">BELT NUMBER</th>
                          <th scope="col">NAME ENGLISH</th>
                          <th scope="col">DOB</th>
                          <th scope="col">RANK</th>
                          <th scope="col">CATEGORY</th>
                          <!--<th scope="col">LEAVE_STATUS</th>---->
                          <th scope="col">Attendance</th>
                          <th scope="col">Attendance Marked</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          </tr>
                        
                      </tbody>
					  
					  
				<?php
				

require_once "config.php";
// Attempt select query execution
//$sql = "select * FROM volunteers_list where CATEGORY in ('RESERVED','UNRESERVED') AND LEAVE_ACCEPT=0 LIMIT 100 ";
$sql = " select * from (
(select * from volunteers_list where CATEGORY='RESERVED' AND LEAVE_ACCEPT=0 and `BELT_NO` not in (select `BELT_NO` from monthly_meet where ATTEDANCE in('Leave','Absent') and 
                     MONTH(SERVED_ON) = MONTH(CURRENT_DATE()) AND YEAR(SERVED_ON) = YEAR(CURRENT_DATE())) limit 50)
				union 
					(select * from volunteers_list where CATEGORY='UNRESERVED' AND LEAVE_ACCEPT=0
and `BELT_NO` not in (select `BELT_NO` from monthly_meet where ATTEDANCE in('Leave','Absent') and 
                     MONTH(SERVED_ON) = MONTH(CURRENT_DATE()) AND YEAR(SERVED_ON) = YEAR(CURRENT_DATE()))
 LIMIT 100)) as x limit 100";
 //volunteers_list where CATEGORY in ('RESERVED','UNRESERVED') AND LEAVE_ACCEPT=0 LIMIT 100 ";
//$sql .= " SELECT * FROM volunteers_list where CATEGORY='UNRESERVED' AND LEAVE_ACCEPT=0 ORDER BY RAND() LIMIT 50";





mysqli_set_charset($link, 'utf8');
//if ($link -> multi_query($sql))
	
if($result = mysqli_query($link, $sql)){
  //do {
	//if ($result = $link -> store_result()) {
		
		if(mysqli_num_rows($result) > 0){    
//servers_on "order by serverd_on ASE"	
			$count=1;
			while($row = mysqli_fetch_array($result)){					
				echo "<tr>";
			
					echo "<td>" . $count . "</td>";
					echo "<td>" . $row['NAME_ENGLISH'] . "</td>";
					echo "<td>" . $row['DOB'] . "</td>";
					echo "<td>" . $row['RANK'] . "</td>";
					echo "<td>" . $row['CATEGORY'] . "</td>";
					echo "<td>  Present<input type='radio' value='Present' name='att'>
								Absent<input type='radio' value='Absent' name='att'>
								Leave<input type='radio' value='Leave' name='att'> </td>";
					$sqls = "select * from monthly_meet where DATE_FORMAT(`SERVED_ON`, '%m')=DATE_FORMAT(now(),'%m') and BELT_NO='".$row['BELT_NO']."'";
					
						$results = mysqli_query($link, $sqls);
						if(mysqli_num_rows($results) > 0){
							echo "<td>Submitted</td>";
						}
						else{
							echo "<td><input type='button' class='sub' value='Submit' id='".$row['BELT_NO']."' name='sub'></td>";
					
						}
						echo "<td> <button class='form-popup editpopup' id='".$row['BELT_NO']."' onclick='openForm()' title='edit'><i class='fa fa-pencil-alt' aria-hidden='true'></i></button> 
								
									<button class='form-popup-delete' onclick='deleteForm()' title='remove'><i class='fa fa-times' aria-hidden='true'></i></button>
					</td>";
						
					
						
					
					
					$count++;			 
				echo "</tr>";
			}
			// Free result set
			mysqli_free_result($result);
		} else{
			echo "No records matching your query were found.";
		}
    }
	 else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
  //}while ($link->next_result());
//}
// Close connection
mysqli_close($link);
			?>
			
                </table> 
 <!--<div class="col-6"><button type="button" onclick="finalizeList()">Final</button></div>
 <div class="col-6"><button type="button" onclick="addVolunteer()">Add Volunteer</button></div>
 
 Present<input type="radio" value="Present" name="redy">
 Absent<input type="radio" value="Present" name="redy">
 Leave<input type="radio" value="Present" name="redy">
 
			
            </div><!--END of table for Attendance record-->
	        </div><!-- END of body for Attendance record-->
    </div><!-- body-row END -->
        
    <!----------------- Edit details Popup -------------->
	<div id="loginPopup">
	
      <div class="form-popup" id="popupForm">
        <form action="" id="editsub" name="editsub" class="form-container">
          <h3>Edit details</h3>
          <label for="checkpoint">
          <strong>Checkpoint</strong>
          </label>
          <input type="text" id="checkpoint" placeholder="Enter Checkpoint name" name="checkpoint" required>
		  <input type="hidden" name="beltno" id="beltno" value="">
		  <label for="tot_present">
          <strong>Total present</strong>
          </label>
          <input type="text" id="tot_present" placeholder="Enter total days present" name="tot_present" required>
          <label for="tot_days">
          <strong>Total days</strong>
          </label>
          <input type="text" id="tot_days" placeholder="Enter total working days" name="tot_days" required>
          <label for="bill_no">
          <strong>Bill number</strong>
          </label>
          <input type="text" id="bill_no" placeholder="Enter the bill number" name="bill_no" required>
		  
		  <!-----------------      ----------------------------------->
            <article class="row">
                <div class="col-6"><button type="button" id="editsubs" name="editsubs" class="btn">Update</button></div>
                <div class="col-6"><button type="button" onclick="closeForm()" class="btn cancel">Close</button></div>
            </article>
		</form>
	 </div>
	</div>
    
     <!----------edit details popup END ----------> 
        
    <!----------------- Remove volunteer Popup -------------->
    <div id="deletePopup"> 
      <div class="form-popup-delete" id="popupForm">
        <form action="/action_page.php" class="form-container">
          <h3>Remove volunteer</h3>
          <label for="app_no">
          <strong>Application number</strong>
          </label>
          <input type="text" id="app_no" placeholder="Enter application no." name="app_no" required>
          <label for="reason">
          <strong>Reason for removal</strong>
          </label>
          <input type="text" id="reason" placeholder="Enter valid reason" name="reason" required>
          
          <!-----------------      ----------------------------------->
		  <article class="row">
                <div class="col-6"><button type="submit" class="btn warning">Remove</button></div>
                <div class="col-6"><button type="button" onclick="closeFormDelete()" class="btn cancel">Close</button></div>
            </article>
            
        </form>
          
		 
      </div>
	  
    </div>  
     <!---------- remove volunteer popup END ----------> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script defer="" src="FinalAttendance.js"></script>
        <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		
        <!-- Popper.JS -->
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
		
<script>	
		$(".sub").click(function(){
  //alert("The paragraph was clicked.");
		var belt= this.id;
		var radioValue = $("input[name='att']:checked").val();
			//alert(radioValue);
			if(radioValue){
			  //alert(radioValue);
			  var data= "action=insertmeetdata&beltno=" + belt + "&att=" + radioValue+ "";
			  $.ajax({
				  type: "post",
				  url: 'insertmonthlymeet.php',
				  data: data,
				  success: function(data) {
					  if(data=='yes'){
						 location.href = "FinalAttendance.php"; 
					  }
					  else{
						  alert("something went wrong.");
					  }
					
				  }
				});
		  
			}
			else{
				alert("Please select Attendance");
				
			}
 
});


$(".editpopup").on('click', function(event){
    event.stopPropagation();
    $("#beltno").val(this.id);
	
});

$("#editsubs").click(function(){
	var data;
	var forminput=$("#editsub").serialize();
	data = "action=editdetails&" + forminput;
			  $.ajax({
				  type: "post",
				  url: 'insertmonthlymeet.php',
				  data: data,
				  success: function(data) {
					  if(data=='yes'){
						 location.href = "FinalAttendance.php"; 
					  }
					  else{
						  alert("something went wrong.");
					  }
					
				  }
				});
});
</script>
<script>
$('#loginPopup').dialog();
</script>



    </body>
</html>
