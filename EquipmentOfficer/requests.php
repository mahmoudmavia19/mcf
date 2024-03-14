<?php

session_start();
include "../action/config.php";

if (isset($_SESSION['id'])) {
    $officer_id =  $_SESSION['id'];

}else {
    header('Location: ../');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Requests | MCF</title>

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
    <div id="app-sidepanel" class="app-sidepanel">
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
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAuklEQVR4nO2VQQrCMBBF38oDtMvqUq9qPIqI3eiRjG4UpBcYUaZQQmoaYoKLfvgQksn8zM+QQBgboAU6QBx2wBFYk4gl8PAIiMM70KQIHTTRaSRRA5w1Zp8i1Nv17bQrjXmmCPXW/CquDBbADrhOuPRYWsCoxmcgmWnIVIk4vDGyUKmtdUSyKrCnHCSgPrWiIbzrvsl3+bHW1YE92RtBZiGZrcNpBlug4y6lHtUt+oSbTJXZ4Tcx47/xAjWhiVrWemq0AAAAAElFTkSuQmCC">
 						         </span>
                            <span class="nav-link-text">Equipment Management</span>
                        </a><!--//nav-link-->
                    </li><!--//nav-item-->
                    <li class="nav-item">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class="nav-link " href="equipmentAdd.php">
						        <span class="nav-icon">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAhUlEQVR4nO2UOw6AIBAF53rGW0uM8RpiiWdYGwuDHz4LodBJXkGzE3YX4CeRHlgByYwFujeBVRSXI8ubQAqlvSAX+Z5gA9zpPN7022gEzhOYG8GgEaRSXWC8GxWfQRDtDIJoWzQDU02BNN8iG/mZmcBcHhegi5QMkYKkBSACbYvbCy4veQeUerc7uKdqRQAAAABJRU5ErkJggg==">
 						         </span>
                            <span class="nav-link-text">Add Equipment</span>
                        </a><!--//nav-link-->
                    </li><!--//nav-item-->
                    <li class="nav-item">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class="nav-link active" href="requests.html">
						        <span class="nav-icon">
                                   <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAABS0lEQVR4nO2aQU7CQBRA3yGkC04kcWfwKuJW4HoIZxAPIOiGDZgm04QMHWgTo/h9L/mb9i/6/3Sm7euASBsVMAeWwGeKF2CWzoXmAdgCh0LU58YELn5/pvgm9hGbUF0Y+Tw2wIBAzLMCd8AjMEwxSceOc6YEYpUVVxecM8ly6oWxxB3w1uOO+qlYA6O2C95mifWo5wxbFsQS6ysothSv39WATaQGLDtMgaceU2B0pU2oi79tu+BZlrhLTTi3CD7zjx+D78ANwRj3eBG6JyjjtLidG/mwxTcM0kvOAvhIsUhzPtxtLyIiIiJHqMUpfwuoxVGL0+gwtTiBWHVwgmpxThfEEn/OCm+zJLU4p6jFUYujFkctjlpcRERERIJSuVsctfjhwiYpd4ujFkctThl3i/P7+lstTo//AssOf4bU4qjFUYujFkctLkIIvgDF1UoaBg7GAAAAAABJRU5ErkJggg==">
 						         </span>
                            <span class="nav-link-text">Requests</span>
                        </a><!--//nav-link-->
                    </li><!--//nav-item-->
                    <li class="nav-item">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class="nav-link" href="CompletedRequests.html">
						        <span class="nav-icon">
                                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABC0lEQVR4nO3YMUoDQRQG4G9Zi2CCWAuSAwheIuARrIOk8AaS0gPYi4VnCHgCa0sbsbXT0kILIRKIsCwhadS8Wd4HUyzsDPwMu/w8Ukq/rcJAB0zxjGMFG+ELc3zgTIGGeFuG+Fmv2FeQHh5aIRY3cyK4PvYaz7etEIt1sWLf/B/XRjVmeMQhzlccMlv+vUIHuWm8/ILP1gFPrdsKGWSyYfM7jtbsDxNkF3drNp8qSI3rFSGuFOqyEeIeOwo2Xn7wBzpgoKOqroSbZvsNYpjtd4v62X7F6FoL2X5l+/0bdbbfwMbZfgtQZfsNZJSz3yB6Ofu1vdJY5+xXnJHpJGe/AdXZfgMbZ/tNKYnkG+vm+Sfg/YlgAAAAAElFTkSuQmCC">
 						         </span>
                            <span class="nav-link-text">Completed Requests</span>
                        </a><!--//nav-link-->
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
                    <h1 class="app-page-title mb-0">Requests</h1>
                </div>
                <div class="tab-content" id="requests-table-tab-content">
                    <div class="tab-pane fade show active" id="requests" role="tabpanel" aria-labelledby="requests-tab">
                        <div class="app-card app-card-requests-table shadow-sm mb-5">
                            <div class="app-card-body">
                                <div class="table-responsive">
                                    <table class="table app-table-hover mb-0 text-left">
                                        <thead>
                                        <tr>
                                            <th class="cell">Request ID</th>
                                            <th class="cell">Employee Name</th>
                                            <th class="cell">Equipment Name</th>
                                            <th class="cell">Quantity</th>
                                            <th class="cell">Request Date</th>
                                            <th class="cell">Return Date</th>
                                            <th class="cell">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody id="request-table-body">
                                        <?php
                                        $sql = "SELECT * FROM requests";
                                        $result = $conn->query($sql);
                                        // complete the while loop
                                        while ($row = $result->fetch_assoc()) {
                                            $id = $row['request_id'];
                                            // get name of employee from employee_id
                                            $employee_id = $row['employee_id'];
                                            $sql2 = "SELECT * FROM employee WHERE employee_id = $employee_id";
                                            $result2 = $conn->query($sql2);
                                            $row2 = $result2->fetch_assoc();
                                            $employee_name = $row2['name'];
                                            // get equipment name from equipment_id
                                            $equipment_id = $row['equipment_id'];
                                            $sql3 = "SELECT * FROM equipment WHERE equipment_id = $equipment_id";
                                            $result3 = $conn->query($sql3);
                                            $row3 = $result3->fetch_assoc();
                                            $equipment_name = $row3['name'];

                                            $quantity = $row['quantity'];
                                            $request_date = $row['date'];
                                            $return_date = $row['return_date'];
                                            ?>
                                            <tr>
                                                <td><?php echo $id; ?></td>
                                                <td><?php echo $employee_name; ?></td>
                                                <td><?php echo $equipment_name; ?></td>
                                                <td><?php echo $quantity; ?></td>
                                                <td><?php echo $request_date; ?></td>
                                                <td><?php echo $return_date; ?></td>
                                                <td><button class="btn btn-sm btn-primary" onclick="acceptRequest(<?php echo $id; ?>)">Accept</button>
                                                    <button class="btn btn-sm btn-danger" style="color:#fff;" onclick="rejectRequest(<?php echo $id; ?>)">Reject</button></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>

                                    </table>
                                </div><!--//table-responsive-->
                            </div><!--//app-card-body-->
                        </div><!--//app-card-->
                    </div><!--//tab-pane-->
                </div><!--//tab-content-->
            </div><!--//row-->
        </div><!--//container-xl-->
    </div><!--//app-content-->

    </div><!--//app-wrapper-->
</div>


<!-- Javascript -->
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>

<script>


    // Function to handle accepting a request
    function acceptRequest(requestId) {
        // Implement logic to accept the request with the given ID
        console.log('Accepted request ID:', requestId);

        confirm( "You have accepted the request. Do you want to proceed?");
    }

    // Function to handle rejecting a request
    function rejectRequest(requestId) {
        // Implement logic to reject the request with the given ID
        console.log('Rejected request ID:', requestId);
        confirm("You have rejected the request. Do you want to proceed?");
    }
</script>
<!-- Page Specific JS -->
<script src="../assets/js/app.js"></script>

</body>
</html>

