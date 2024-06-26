<?php
include "../../action/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employee Management | MCF</title>

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
                        <a class="nav-link " href="index.php">
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
                        <a class="nav-link submenu-toggle active" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-1" aria-expanded="false" aria-controls="submenu-1">
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
                                <li class="submenu-item"><a class="submenu-link active" href="AddEmployee.php">Add Employee</a></li>
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
                    <h1 class="app-page-title mb-0">Employees</h1>
                </div>

                <div class="app-card-body">
                    <form class="employee-form" action="actions/addEmployee.php" method="POST">
                        <div class="mb-3">
                            <label for="employee-input-name" class="form-label">Employee Name</label>
                            <input type="text" name="name" class="form-control" id="employee-input-name" value="" required>
                        </div>
                        <div class="mb-3">
                            <label for="employee-input-email" class="form-label">Employee Email Address</label>
                            <input type="email" name="email" class="form-control" id="employee-input-email" value="">
                        </div>
                        <div class="mb-3">
                            <label for="employee-input-phone" class="form-label">Phone Number</label>
                            <input type="tel" name="phone" class="form-control" id="employee-input-phone" value="">
                        </div>
                        <div class="mb-3">
                            <label for="employee-input-department" class="form-label">Department</label>
                            <select class="form-select" name="department_id" id="employee-input-department">
                                <option selected>Select Department</option>
                                <?php
                                $sql = "SELECT * FROM department";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<option value=".$row['id'].">".$row['name']."</option>";
                                    }
                                }
                                ?>
                                <!-- Add more departments as needed -->
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="employee-input-password" class="form-label">Password</label>
                            <input type="tel" name="password" class="form-control" id="employee-input-password" value="">
                        </div>
                        <div class="mb-3">
                            <label for="employee-input-cpassword" class="form-label">Confirm Password</label>
                            <input type="tel" name="cpassword" class="form-control" id="employee-input-cpassword" value="">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" name="role" class="form-check-input" id="equipment-officer">
                            <label class="form-check-label" for="equipment-officer">Equipment Officer</label>
                        </div>
                        <button type="submit" onclick="return confirm('Are you sure?')" class="btn app-btn-primary">Add Employee</button>
                    </form>
                </div>


            </div><!--//container-fluid-->
        </div><!--//app-content-->


    </div><!--//app-wrapper-->

</div>

<!-- Javascript -->
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<!-- Inside your JavaScript file or script tag -->

<!-- Page Specific JS -->
<script src="../assets/js/app.js"></script>
<script>
    // get status parameter from the URL
    const urlParams = new URLSearchParams(window.location.search);
    const status = urlParams.get('status');
    // show success or error message
    if (status === 'success') {
        alert('Employee added successfully!');
    }else {
        // check if status is  database_error , password_mismatch , invalid_phone , password_too_short , invalid_email
        if(status === 'database_error'){
            alert('Error adding employee. Please try again later.');
        } else if(status === 'password_mismatch'){
            alert('Passwords do not match. Please try again.');
            // back to previous page
            window.history.back();
        } else if(status === 'invalid_phone'){
            alert('Invalid phone number. Please try again.');
            window.history.back();
        } else if(status === 'password_too_short'){
            alert('Password is too short. Please try again.');
        } else if(status === 'invalid_email'){
            alert('Invalid email address. Please try again.');
            window.history.back();
        } else {
           /* alert('Error adding employee. Please try again later.');
            window.history.back();*/
        }
    }
</script>

</body>
</html>

