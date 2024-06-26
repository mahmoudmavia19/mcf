
<?php
include "../../action/config.php";

// get employee id
if (isset($_GET['employee_id'])) {
    $employeeId = $_GET['employee_id'];
} else {
    // redirect to employee management page
    header('Location: BorrowerManagement.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Borrower Management | MCF</title>

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
            <a class="nav-link" href="index.php">
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
            <a class="nav-link active" href="BorrowerManagement.php">
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
            <a class="nav-link submenu-toggle  " href="#" data-bs-toggle="collapse" data-bs-target="#submenu-2" aria-expanded="false" aria-controls="submenu-2">
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
                <li class="submenu-item"><a class="submenu-link active" href="DepartmentManagement.php">Show Department</a></li>
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
          <h1 class="app-page-title mb-0">Borrower History</h1>
          <h5 class="mb-0">Borrower Name</h5>
        </div>

        <div class="tab-content" id="borrow-history-table-tab-content">
          <!-- Add this section below the borrower history table -->
          <div class="tab-pane fade show active" id="borrow-history" role="tabpanel" aria-labelledby="borrow-history-tab">
            <div class="app-card app-card-borrow-history-table shadow-sm mb-5">
              <div class="app-card-body">
                <div class="table-responsive">
                    <table class="table app-table-hover mb-0 text-left">
                        <thead>
                        <tr>
                            <th class="cell">ID</th>
                            <th class="cell">Name of Equipment</th>
                            <th class="cell">Borrow Date</th>
                            <th class="cell">Return Date</th>
                            <th class="cell" style="width: 300px; text-overflow-ellipsis: ellipsis;">Note</th>
                            <th class="cell">Rate</th>
                            <th class="cell">Actions</th>
                        </tr>
                        </thead>
                        <tbody id="borrow-history-table-body">
                        <?php
                        $sql = "SELECT * FROM requests WHERE employee_id = $employeeId";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $id = $row['request_id'];
                                $equipmentId = $row['equipment_id'];
                                $borrowDate = $row['date'];
                                $returnDate = $row['return_date'];

                                $equipmentQuery = "SELECT * FROM equipment WHERE equipment_id = $equipmentId";
                                $equipmentResult = $conn->query($equipmentQuery);

                                $rateQuery = "SELECT * FROM rate WHERE equipment_id = $equipmentId";
                                $rateResult = $conn->query($rateQuery);

                                if ($equipmentResult->num_rows > 0 && $rateResult->num_rows > 0) {
                                    $equipmentRow = $equipmentResult->fetch_assoc();
                                    $name = $equipmentRow['name'];

                                    $rateRow = $rateResult->fetch_assoc();
                                    $note = $rateRow['note'];
                                    $rate = $rateRow['number'];
                                } else {
                                    $name = "N/A";
                                    $note = "N/A";
                                    $rate = 0;
                                }
                                ?>
                                <tr>
                                    <td><?php echo $id ?></td>
                                    <td><?php echo $name ?></td>
                                    <td><?php echo $borrowDate ?></td>
                                    <td><?php echo $returnDate ?></td>
                                    <td><?php echo $note ?></td>
                                    <td class="cell" data-title="Rate">
                                        <?php
                                        // Display rate as stars
                                        for ($i = 1; $i <= $rate; $i++) {
                                            echo '<i class="fas fa-star text-warning"></i>';
                                        }
                                        for ($i = $rate + 1; $i <= 5; $i++) {
                                            echo '<i class="far fa-star text-warning"></i>';
                                        }
                                        ?>
                                    </td>
                                    <td class="cell">
                                        <button class="btn btn-sm btn-primary" onclick="showNotificationModal()">Send Notification</button>
                                    </td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "<tr><td colspan='7'>No data found</td></tr>";
                        }
                        ?>
                        </tbody>
                    </table>

                </div><!--//table-responsive-->
              </div><!--//app-card-body-->
            </div><!--//app-card-->
          </div><!--//tab-pane-->
          <!-- Additional tab panes for specific categories if needed -->
        </div><!--//tab-content-->

      </div><!--//container-fluid-->
    </div><!--//app-content-->


  </div><!--//app-wrapper-->
</div>


<!-- Send Notification Modal -->
<div class="modal fade" id="sendNotificationModal" tabindex="-1" aria-labelledby="sendNotificationModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="sendNotificationModalLabel">Send Notification</h5>
        <button type="button" onclick="closeNotificationModal()" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<!--        <div class="form-group">
          <label for="deliveryDate">Delivery Date:</label>
          <input type="date" class="form-control" id="deliveryDate">
        </div>
        <div class="form-group">
          <label for="returnDate">Return Date:</label>
          <input type="date" class="form-control" id="returnDate">
        </div>-->
        <div class="form-group">
          <label for="notes">Notes:</label>
          <textarea class="form-control" id="notes" rows="3"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closeNotificationModal()">Cancel</button>
        <button type="button" class="btn btn-primary" onclick="sendNotification()">Send</button>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Javascript -->
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<!-- Inside your JavaScript file or script tag -->
<script>


    // get status from URL parameter
    var urlParams = new URLSearchParams(window.location.search);
    var status = urlParams.get('status');
    // check if status is returned
    if (status=='success') {
        // show success message
        alert('Notification sent successfully!');
    } else if (status=='error') {
        // show error message
        alert('Error sending notification. Please try again.');
    }

    // Function to send notification to borrower

  function  showNotificationModal() {
    $('#sendNotificationModal').modal('show');
  }

  // function to get title	description	date	admin_id	employee_id and send it to sendNotification  action php file



  function closeNotificationModal() {
    $('#sendNotificationModal').modal('hide');
  }
  function sendNotification() {
    // send notification to sendNotification action php file
    // get title	admin_id	employee_id from borrowerHistory table
      // get text from textarea id notes
      var notes = document.getElementById('notes').value;
      // get employee_id from URL parameter
      var urlParams = new URLSearchParams(window.location.search);
      var employee_id = urlParams.get('employee_id');
      location.href = 'actions/sendNotification.php?title='+notes+'&employee_id='+employee_id;
  }
  // Call the function to generate borrower history rows initially
 </script>
<!-- Page Specific JS -->
<script src="../assets/js/app.js"></script>


</body>
</html>

