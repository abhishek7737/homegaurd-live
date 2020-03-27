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

        <title>Rajasthan Homeguards</title>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style3.css">
        <link rel="stylesheet" href="FinalAttendance.css">
        <link rel="stylesheet" href="Dashboard.css">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

        <!-- Font Awesome JS -->

        <script defer="" src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer="" src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        
    </head>
    
    <body>
        <!-- Bootstrap NavBar -->
        <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-custom" style="width: 100%;">
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
                        <a class="nav-link" href="Dashboard.php" title="home"><i class="fa fa-home" style="font-size: 19px;" aria-hidden="true"></i><span class="sr-only">(current)</span></a>
                    </li>
					<li class="nav-item home">
                        <a class="nav-link" href="login.php" title="login"><i class="fas fa-sign-in-alt" style="font-size: 19px;" aria-hidden="true"></i><span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav><!-- NavBar END -->

        <!-----------------Main Body ------------>
        <!-- Bootstrap row for Sidebar container -->
        <div class="row" id="body-row">
            <!-- Sidebar begins -->
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
            </div><!-- sidebar ENDS -->

            <!-- Dashboard contents -->
            <div class="col p-4 d-none d-sm-block">
                    <div id="carouselExampleFade" class="container carousel slide carousel-fade " data-ride="carousel" style=" width: 50%;   margin: 0 auto;">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="guards3.jpg" class="d-block w-100" alt="..." style="height: 200px;">
                            </div>
                            <div class="carousel-item">
                                <img src="guards2.jpg" class="d-block w-100" alt="..." style="height: 200px;">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    <!------ Important announcements section ---------->
                    <section class="bg-image">
                        <h2 class="shade blink"><strong>Important &nbsp; announcements</strong></h2>
                        <section class="marquee-section">
                            <div id="marqueecontainer" onMouseover="copyspeed=pausespeed" onMouseout="copyspeed=marqueespeed">
                                <div id="vmarquee">
                                    <div>
                                        <ul style="list-style-type: none; text-align: center;" class="notice-links">
                                            <li><a href="#">Nulla vitae elit libero, a pharetra augue mollis interdum.</a></li>
                                            <li><a href="#">Nulla vitae elit libero, a pharetra augue mollis interdum.</a></li>
                                            <li><a href="#">Nulla vitae elit libero, a pharetra augue mollis interdum.</a></li>
                                            <li><a href="#">Nulla vitae elit libero, a pharetra augue mollis interdum.</a></li>
                                            <li><a href="#">Nulla vitae elit libero, a pharetra augue mollis interdum.</a></li>
                                            <li><a href="#">Nulla vitae elit libero, a pharetra augue mollis interdum.</a></li>
                                            <li><a href="#">Nulla vitae elit libero, a pharetra augue mollis interdum.</a></li>
                                            <li><a href="#">Nulla vitae elit libero, a pharetra augue mollis interdum.</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!------------
                        <h2 class="shade dg-title"><strong>DG's message</strong></h2>
                        <section id="message-box">
                            <table cellpadding="6" cellspacing="10" id="message-table">
                                <tr>
                                    <td>
                                        <figure>
                                            <img src="dg.jpg" id="dg-img">
                                            <figcaption id="dg-caption">
                                                <b>Mr. XYZ</b><br />
                                                Designation
                                            </figcaption>
                                        </figure> 
                                    </td>
                                    <td>
                                        <blockquote>
                                            <p class="quotation">
                                                <cite> 
                                                    Nulla vitae elit libero, a pharetra augue mollis interdum. Nulla vitae elit libero, a pharetra augue mollis interdum. Nulla vitae elit libero, a pharetra augue mollis interdum. Nulla vitae elit libero, a pharetra augue mollis interdum.
                                                </cite>
                                            </p>
                                        </blockquote>
                                    </td>
                                </tr>
                            </table> 
                        </section>                
                    -------------->
                </section>

            </div><!------------ End of col-span-4 Dashboard contents -------------------->
        </div><!-- body-row END-->
        
   <!-------   </div><!--  -->   
        
        <div class="footer row">
                <div class="col-6 nodal-address">
                    <div>
                        Smt. Swati Sharma,<br /> Nodal Officer (Sr. Staff Officer-I),<br /> Home Guards, Department, Jaleb Chowk, Jaipur<br />
                        Phone No (O) 0141-2612592 (Monday To Friday 9:30AM to 6:00PM)
                    </div>
                </div>

                <div class="col-6">
                    <div class="imp-links-section">
                        <div id="imp-links-title">
                            <b>Important Links</b>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <ul class="imp-links">
                                    <li><a href="#">Terms and Conditions</a></li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul class="imp-links">
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                            <div class="col-4">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-last">
                        &copy;Copyright, Rajasthan Home Guards Department
                </div>
        </div>
        
        <!-- jQuery CDN - Slim version (=without AJAX) -->
        
        <script defer="" src="Dashboard.js"></script>
        <script defer="" src="FinalAttendance.js"></script>
        <!-- Jquery.JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    </body>
</html>