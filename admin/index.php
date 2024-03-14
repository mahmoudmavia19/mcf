<?php
include '../action/config.php' ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Overview | MCF</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../assets/images/app-logo.svg">

    <!-- FontAwesome JS-->
    <script defer src="../assets/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="../assets/css/portal.css">

</head>

<body class="app">


<header class="app-header fixed-top">
    <div class="app-header-inner">
        <div class="container-fluid py-2">
            <div class="app-header-content">
                <div class="row justify-content-center align-items-center" style="font-size: 20px; font-weight: bold">

                </div>
                <div class="row justify-content-between align-items-center">

                    <div class="col-auto">
                        <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
                        </a>
                    </div><!--//col-->
                    <div class="search-mobile-trigger d-sm-none col">
                        <i class="search-mobile-trigger-icon fa-solid fa-magnifying-glass"></i>
                    </div><!--//col-->

                </div><!--//row-->
            </div><!--//app-header-content-->
        </div><!--//container-fluid-->
    </div><!--//app-header-inner-->
    <div id="app-sidepanel" class="app-sidepanel sidepanel-hidden">
        <div id="sidepanel-drop" class="sidepanel-drop"></div>
        <div class="sidepanel-inner d-flex flex-column">
            <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
            <div class="app-branding">
                <a class="app-logo" href="../index.html"><img style="width: 200px ; height: 100px" class="logo-icon me-2" src="../assets/images/app-logo.svg" alt="logo"></a>

            </div><!--//app-branding-->
            <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
                <ul class="app-menu list-unstyled accordion" id="menu-accordion">
                    <li class="nav-item">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class="nav-link active" href="index.html">
						        <span class="nav-icon">
						        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
		  <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
		</svg>
						         </span>
                            <span class="nav-link-text">Overview</span>
                        </a><!--//nav-link-->
                    </li><!--//nav-item-->
                    <li class="nav-item">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class="nav-link" href="BorrowerManagement.php">
						        <span class="nav-icon">
						       <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-people" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" d="M12.5 10.5a2 2 0 1 0-3.999-.001A2 2 0 0 0 12.5 10.5zm-7 0a2 2 0 1 0-3.999-.001A2 2 0 0 0 5.5 10.5zm5-7a3 3 0 1 1-5.999-.001A3 3 0 0 1 10.5 3.5z"/>
                                  <path d="M2.868 12.474c.62.206 1.292.326 2.016.326s1.396-.12 2.016-.326A4.513 4.513 0 0 1 8 13.5c1.316 0 2.5-.422 3.514-1.082a8.475 8.475 0 0 0-6.014.056A6.345 6.345 0 0 1 8 12.5c-.796 0-1.532-.154-2.132-.426a10.402 10.402 0 0 1-.918-.6z"/>
                                 </svg>
						         </span>
                            <span class="nav-link-text">Borrowers Management</span>
                        </a><!--//nav-link-->
                    </li><!--//nav-item-->
                    <li class="nav-item has-submenu">
                        <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-1" aria-expanded="false" aria-controls="submenu-1">
						        <span class="nav-icon">
						             <i class="fas fa-users"></i>
						         </span>
                            <span class="nav-link-text">Employee Management</span>
                            <span class="submenu-arrow">
		                             <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/></svg>
	                             </span><!--//submenu-arrow-->
                        </a><!--//nav-link-->
                        <div id="submenu-1" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
                            <ul class="submenu-list list-unstyled">
                                <li class="submenu-item"><a class="submenu-link" href="EmployeeMangement.php">Show Employees</a></li>
                                <li class="submenu-item"><a class="submenu-link" href="AddEmployee.php">Add Employee</a></li>
<!--
                                <li class="submenu-item"><a class="submenu-link" href="SendNotification.html">Send Notification</a></li>
-->

                            </ul>
                        </div>
                    </li><!--//nav-item-->
                    <li class="nav-item has-submenu">
                        <a class="nav-link submenu-toggle " href="#" data-bs-toggle="collapse" data-bs-target="#submenu-2" aria-expanded="false" aria-controls="submenu-2">
						        <span class="nav-icon">
						        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
						            <i class="fas fa-building"></i>

						         </span>
                            <span class="nav-link-text">Department Management</span>
                            <span class="submenu-arrow">
		                             <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/></svg>
	                             </span><!--//submenu-arrow-->
                        </a><!--//nav-link-->
                        <div id="submenu-2" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
                            <ul class="submenu-list list-unstyled">
                                <li class="submenu-item"><a class="submenu-link" href="DepartmentManagement.php">Show Department</a></li>
                                <li class="submenu-item"><a class="submenu-link" href="AddDepartment.php">Add Department</a></li>
                            </ul>
                        </div>
                    </li><!--//nav-item-->
                    <li class="nav-item" >
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class="nav-link" href="../index.html">
						        <span class="nav-icon">
                                    <i style="color:red;" class="fas fa-sign-out-alt"></i>
						         </span>
                            <span class="nav-link-text" style="color:red;" >Logout</span>
                        </a><!--//nav-link-->
                    </li><!--//nav-item-->
                </ul><!--//app-menu-->
            </nav><!--//app-nav-->
        </div><!--//sidepanel-inner-->
    </div><!--//app-sidepanel-->
</header><!--//app-header-->

<div class="app-wrapper">

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">Overview</h1>
                </div>
                <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
                    <div class="inner">
                        <div class="app-card-body p-3 p-lg-4">
                            <h3 class="mb-3">Welcome, Admin!</h3>
                            <div class="row gx-5 gy-3">
                                <div class="col-12 col-lg-9">

                                </div><!--//col-->
                            </div><!--//row-->
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div><!--//app-card-body-->

                    </div><!--//inner-->
                </div><!--//app-card-->
                <div class="row g-4 mb-4">
                    <div class="col col-lg-3" style="margin-right: 50px; margin-left: 100px">
                    <div class="col-6 col-lg-3" style="width: 250px; margin-bottom: 50px">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Number of Borrowers</h4>
                                <div class="stats-figure">
                                    <?php
                                    // get count of borrower from table request remove dublicate employee_d
                                    $sql = "SELECT COUNT(DISTINCT employee_id) as count FROM requests";
                                    $result = $conn->query($sql);
                                    echo $result->fetch_assoc()['count'];
                                    ?>
                                </div>
                                <!-- Include your data or dynamic content here -->
                                <div class="stats-meta text-success">

                                </div>
                            </div><!--//app-card-body-->
                            <a class="app-card-link-mask" href="#"></a>
                        </div><!--//app-card-->
                    </div><!--//col-->
                    <div class="col-6 col-lg-3" style="width: 250px; margin-bottom: 50px">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Departments</h4>
                                <div class="stats-figure">
                                    <?php
                                    // get count of department
                                    $sql = "SELECT COUNT(*) as count FROM department";
                                    $result = $conn->query($sql);
                                    echo $result->fetch_assoc()['count'];
                                    ?>
                                </div>
                                <!-- Include your data or dynamic content here -->
                                <div class="stats-meta text-success">

                                </div>
                            </div><!--//app-card-body-->
                            <a class="app-card-link-mask" href="#"></a>
                        </div><!--//app-card-->
                    </div><!--//col-->
                        <div class="col-6 col-lg-3" style="width: 250px;">
                            <div class="app-card app-card-stat shadow-sm h-100">
                                <div class="app-card-body p-3 p-lg-4">
                                    <h4 class="stats-type mb-1">Employees</h4>
                                    <div class="stats-figure">
                                        <?php
                                        // get count of employee
                                        $sql = "SELECT COUNT(*) as count FROM employee";
                                        $result = $conn->query($sql);
                                        echo $result->fetch_assoc()['count'];
                                        ?>
                                    </div>
                                    <!-- Include your data or dynamic content here -->
                                    <div class="stats-meta text-success">
                                    </div>
                                </div><!--//app-card-body-->
                                <a class="app-card-link-mask" href="#"></a>
                            </div><!--//app-card-->
                        </div><!--//col-->
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="app-card app-card-chart h-100 shadow-sm">
                            <div class="app-card-header p-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <h4 class="app-card-title">Statistics of Borrowers</h4>
                                    </div><!--//col-->
                                </div><!--//row-->
                            </div><!--//app-card-header-->
                            <div class="app-card-body p-3 p-lg-4">

                                <div class="chart-container">
                                    <canvas id="canvas-linechart" ></canvas>
                                </div>
                            </div><!--//app-card-body-->
                        </div><!--//app-card-->
                    </div><!--//col-->
                    <!-- Include similar code for other sections and statistics -->

                </div><!--//row-->
                <div class="row g-4 mb-4">

                </div><!--//row-->

            </div><!--//container-fluid-->
        </div><!--//app-content-->


    </div><!--//app-wrapper-->

    </div>
    <!-- Javascript -->
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- Inside your JavaScript file or script tag -->

    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <!-- Charts JS -->
    <script src="../assets/js/chart.min.js"></script>
    <script src="../assets/js/index-charts.js"></script>
    <!-- Page Specific JS -->
    <script src="../assets/js/app.js"></script>

</body>
</html>

