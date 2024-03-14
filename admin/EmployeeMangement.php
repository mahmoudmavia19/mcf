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
                                <li class="submenu-item"><a class="submenu-link active" href="EmployeeMangement.html">Show Employees</a></li>
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
                    <h1 class="app-page-title mb-0">Employees</h1>
                </div>



       <!--     <nav id="employees-table-tab" class="employees-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
                <a class="flex-sm-fill text-sm-center nav-link active" id="employees-all-tab" data-bs-toggle="tab" href="#employees-all" role="tab" aria-controls="employees-all" aria-selected="true">All Employees</a>
                <a class="flex-sm-fill text-sm-center nav-link" id="marketing-all-tab" data-bs-toggle="tab" href="#marketing-all" role="tab" aria-controls="marketing-all" aria-selected="false">Marketing</a>
                <a class="flex-sm-fill text-sm-center nav-link" id="finance-all-tab" data-bs-toggle="tab" href="#finance-all" role="tab" aria-controls="finance-all" aria-selected="false">Finance</a>
                <a class="flex-sm-fill text-sm-center nav-link" id="Hu-all-tab" data-bs-toggle="tab" href="#human-resources-all" role="tab" aria-controls="human-resources-all" aria-selected="false">Human Resources</a>
                &lt;!&ndash; Additional tabs for specific categories if needed &ndash;&gt;
            </nav>-->


            <div class="tab-content" id="employees-table-tab-content">
                <div class="tab-pane fade show active" id="employees-all" role="tabpanel" aria-labelledby="employees-all-tab">
                    <div class="app-card app-card-employees-table shadow-sm mb-5">
                        <div class="app-card-body">
                            <div class="table-responsive">
                                <table class="table app-table-hover mb-0 text-left">
                                    <thead>
                                    <tr>
                                        <th class="cell">Employee ID</th>
                                        <th class="cell">Email</th>
                                        <th class="cell">Name</th>
                                        <th class="cell">Phone</th>
                                        <th class="cell">Department</th>
                                        <th class="cell">Rate</th>
                                        <th class="cell"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <!-- Employee data rows will be populated dynamically -->
                                     <?php
                                     $sql = "SELECT employee_id, email, name, phone , rate ,department_id,is_blocked FROM employee";
                                     $result = $conn->query($sql);
                                     // get department data from using department_id  for each employee

                                    $employeesData = array();
                                    while ($row = $result->fetch_assoc()) { ?>
                                        <tr>
                                            <td class="cell" data-title="Employee ID">
                                                <?php echo $row['employee_id']; ?>
                                            </td>
                                            <td class="cell" data-title="Email">
                                                <?php echo $row['email']; ?>
                                            </td>
                                            <td class="cell" data-title="Name">
                                                <?php echo $row['name']; ?>
                                            </td>
                                            <td class="cell" data-title="Phone">
                                                <?php echo $row['phone']; ?>
                                            </td>
                                            <td class="cell" data-title="Department">
                                                <?php
                                                $department_id = $row['department_id'];
                                                $sql2 = "SELECT name FROM department WHERE id = $department_id";
                                                $result2 = $conn->query($sql2);
                                                $department_name = $result2->fetch_assoc()['name'];
                                                echo $department_name;
                                                ?>
                                            </td>
                                            <td class="cell" data-title="Rate">
                                                <?php
                                                // get rate as stars for each employee from rate
                                                $rate = $row['rate'];
                                                $stars = 0 ;
                                                for ($i = 1; $i <= $rate; $i++) {
                                                    echo '<i class="fas fa-star text-warning"></i>';
                                                    $stars++ ;
                                                }
                                                for ($i = $stars; $i < 5; $i++) {
                                                    echo '<i class="far fa-star text-warning"></i>';
                                                }

                                                ?>

                                            </td>
                                    <!-- block employee -->
                                            <td class="cell" data-title="Block">
                                                <a class="btn btn-sm btn-danger"
                                                   href="actions/block_employee.php?id=<?php echo $row['employee_id'] ?>"
                                                   style="color: #FFF7F5" onclick="return confirm('Are you sure you want to block this employee?')">
                                                    <!-- toggle block employee -->
                                                    <?php
                                                    if ($row['is_blocked'] == 0) {
                                                        echo "Block";
                                                    }
                                                    else {
                                                        echo "Unblock";
                                                    }
                                                    ?>

                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div><!--//table-responsive-->

                        </div><!--//app-card-body-->
                    </div><!--//app-card-->
                    <!-- Pagination for employees if needed -->
                </div><!--//tab-pane-->
                <!-- Additional tab panes for specific categories if needed -->
            </div><!--//tab-content-->

        </div><!--//container-fluid-->
    </div><!--//app-content-->


</div><!--//app-wrapper-->
</div>

<!-- Javascript -->
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script>
    // get status from URL
    const status = new URLSearchParams(window.location.search).get('status');
    // check status
    if (status === 'success') {
        //alert('Employee added successfully!');
    } else if (status === 'error') {
        // get message
        const message = new URLSearchParams(window.location.search).get('message');
    }
</script>
<!-- Page Specific JS -->
<script src="../assets/js/app.js"></script>

</body>
</html>

