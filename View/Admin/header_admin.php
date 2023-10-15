<?php

// echo "<pre>";
// print_r($_SESSION['Userdata']);
// echo "</pre>";
if (!isset($_SESSION['Userdata'])) {
    header("location:login");
}

?>
<!DOCTYPE HTML>
<html>

<head>
    <title> Admin Panel </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $this->URL; ?>Admin/css/bootstrap.css" rel='stylesheet' type='text/css' />

    <!-- Custom CSS -->
    <link href="<?php echo $this->URL; ?>Admin/css/style.css" rel='stylesheet' type='text/css' />
    <!-- font CSS -->
    <!-- font-awesome icons -->
    <link href="<?php echo $this->URL; ?>Admin/css/font-awesome.css" rel="stylesheet">

    <!-- //font-awesome icons -->
    <!-- js-->
    <script src="<?php echo $this->URL; ?>Admin/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo $this->URL; ?>Admin/js/modernizr.custom.js"></script>
    <!--webfonts-->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!--//webfonts-->
    <!--animate-->
    <link href="<?php echo $this->URL; ?>Admin/css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="<?php echo $this->URL; ?>Admin/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->
    <!-- chart -->
    <script src="<?php echo $this->URL; ?>Admin/js/Chart.js"></script>
    <!-- //chart -->
    <!--Calender-->
    <link rel="stylesheet" href="<?php echo $this->URL; ?>Admin/css/clndr.css" type="text/css" />
    <script src="<?php echo $this->URL; ?>Admin/js/underscore-min.js" type="text/javascript"></script>
    <script src="<?php echo $this->URL; ?>Admin/js/moment-2.2.1.js" type="text/javascript"></script>
    <script src="<?php echo $this->URL; ?>Admin/js/clndr.js" type="text/javascript"></script>
    <script src="<?php echo $this->URL; ?>Admin/js/site.js" type="text/javascript"></script>
    <!--End Calender-->
    <!-- Metis Menu -->
    <script src="<?php echo $this->URL; ?>Admin/js/metisMenu.min.js"></script>
    <script src="<?php echo $this->URL; ?>Admin/js/custom.js"></script>
    <link href="<?php echo $this->URL; ?>Admin/css/custom.css" rel="stylesheet">
    <!--//Metis Menu -->
</head>

<body class="cbp-spmenu-push">
    <div class="main-content">
        <!--left-fixed -navigation-->
        <div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
                <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="admindashboard" class="active"><i class="fa fa-home nav_icon"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="javascript:history.go(-1)"><i class="fa fa-users nav_icon"></i>Users <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="showall"><i class="fa fa-users"></i> All Users</a>
                                </li>

                            </ul>

                        </li>
                        <li>
                            <a href="javascript:history.back()"><i class="fa fa-question-circle" aria-hidden="true"></i> Quiz Category <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="viewcategory"> Category</a>
                                </li>

                            </ul>

                        </li>
                        <li>
                            <a href="javascript:history.back()"><i class="fa fa-question" aria-hidden="true"></i> Quiz Detail <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">

                                <li>
                                    <a href="viewquizpage"> Quiz</a>
                                </li>
                               

                            </ul>

                        </li>
                        <li>
                            <a href="javascript:history.back()"><i class="fa fa-question" aria-hidden="true"></i> Quiz Questions <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">

                                <li>
                                    <a href="viewquestion"> Questions</a>
                                </li>

                            </ul>

                        </li>

                    </ul>
                    <!-- //sidebar-collapse -->
                </nav>
            </div>
        </div>
        <!--left-fixed -navigation-->
        <!-- header-starts -->
        <div class="sticky-header header-section ">
            <div class="header-left">
                <!--toggle button start-->
                <button id="showLeftPush"><i class="fa fa-bars"></i></button>
                <!--toggle button end-->
                <!--logo -->
                <div class="logo">
                    <a href="admindashboard">
                        <h1>E-Progress</h1>
                        <span>AdminPanel</span>
                    </a>
                </div>
                <!--//logo-->
                <!--search-box-->
                <div class="search-box">
                    <form class="input">
                        <input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
                        <label class="input__label" for="input-31">
                            <svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                <path d="m0,0l404,0l0,77l-404,0l0,-77z" />
                            </svg>
                        </label>
                    </form>
                </div><!--//end-search-box-->
                <div class="clearfix"> </div>
            </div>
            <div class="header-right">

                <div class="profile_details">
                    <ul>
                        <li class="dropdown profile_details_drop">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <div class="profile_img">
                                    <span class="prfil-img"><img src="images/a.png" alt=""> </span>
                                    <div class="user-name">
                                        <p><?php echo $_SESSION['Userdata'][0]->name; ?></p>
                                        <span>Administrator</span>
                                    </div>
                                    <i class="fa fa-angle-down lnr"></i>
                                    <i class="fa fa-angle-up lnr"></i>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                            <ul class="dropdown-menu drp-mnu">
                                <!-- <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> -->
                                <!-- <li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> -->
                                <li> <a href="logout"><i class="fa fa-sign-out"></i> Logout</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- //header-ends -->