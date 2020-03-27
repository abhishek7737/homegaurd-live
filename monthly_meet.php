<?php
// Initialize the session
session_start();

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
        <link rel="stylesheet" href="monthly_meet.css">
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
            <img src="Homeguards_img.jpeg" width="54" height="54" class="d-inline-block align-top logo" alt="">
            <span class="sm title-web"><b>RAJASTHAN HOME GUARDS TRAINING CENTER, BHILWARA</b></span>
        </a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active home">
                    <a class="nav-link" href="Dashboard.html" title="home"><i class="fa fa-home" style="font-size: 19px;" aria-hidden="true"></i><span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav><!-- NavBar END -->

    <!----------------- Body ------------>
    <!-- Bootstrap row for Sidebar container -->
    <div class="row" id="body-row" style="width: 100%;">
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
                <a href="FinalAttendance.html" class="bg-custom list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="mr-0"></span>
                        <img src="usercheck3.png" class="sidebar-img">
                        <span class="menu-collapsed ml-3">Attendance Record</span>
                    </div>
                </a>
                <a href="volunteers.html" class="bg-custom list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="mr-0"></span>
                        <img src="Vol_list.png" class="sidebar-img">
                        <span class="menu-collapsed ml-3">Volunteers List</span>
                    </div>
                </a>
                <a href="#" class="bg-custom list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="mr-0"></span>
                        <img src="checkpoint2.png" class="sidebar-img">
                        <span class="menu-collapsed ml-3">Checkpoint</span>
                    </div>
                </a>
				<a href="monthly_meet.html" class="bg-custom list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="mr-0"></span>
                        <img src="checkpoint2.png" class="sidebar-img">
                        <span class="menu-collapsed ml-3">Monthly Meeting</span>
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
                <a href="#" class="bg-custom list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="mr-0"></span>
                        <img src="Logout.png" class="sidebar-img">
                        <span class="menu-collapsed ml-3">Logout</span>
                    </div>
                </a>
            </ul><!-- List Group END-->
        </div><!-- sidebar-container END -->

        <!-- Body for monthly meet-->
        <div class="col p-4 d-none d-sm-block">
            <!--------- Header with Dropdowns ----------->
            <div class="header row attendance-header">
                <span class="col-6 attendance-header-1"><b>Monthly Meeting Report</b></span>
                <span  class="col-6 attendance-header-2">
                    

                     <select class="mdb-select1 md-form colorful-select dropdown-primary" style="margin-right: 2%;">
                          <option value="1">Month</option>
                          <option value="2">January</option>
                          <option value="3">February</option>
                          <option value="4">March</option>
                          <option value="5">April</option>
                          <option value="6">May</option>
                          <option value="7">June</option>
                          <option value="8">July</option>
                          <option value="9">August</option>
                          <option value="10">September</option>
                          <option value="11">October</option>
                          <option value="12">November</option>
                          <option value="13">December</option>
                     </select>

                     <select class="mdb-select2 md-form colorful-select dropdown-primary">
                          <option value="1">Year</option>
                          <option value="2">2020-21</option>
                          <option value="3">2019-20</option>
                     </select>
                </span>
            </div><!--------- End of header with Dropdowns ----------->

            <!-- Table for Monthly meet -->
            <div class="container">
                <table class="table table-striped table-hover" style="margin-top: 5%;" style="width: 100%;">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">BELT NUMBER</th>
                          <th scope="col">NAME</th>
                          <th scope="col">STATUS</th>
                          <th scope="col">REFERENCE 1</th>
                          <th scope="col">REFERENCE 2</th>                 
                          <th scope="col">REFERENCE 3</th>
                          
                        </tr>
                      </thead>
                      <tbody>
							<!-- body of monthly meet table -->
                      </tbody>
                </table>    
            </div><!--END of table-->
        </div><!-- END of body for monthly meet -->
    </div><!-- body-row END -->
        
    
    

        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script defer="" src="monthly_meet.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    </body>
</html>