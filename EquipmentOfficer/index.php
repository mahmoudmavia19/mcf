
<?php
include '../action/config.php';

session_start() ;
if(isset($_GET['message'])) {
    $message = $_GET['message'];
    echo "<script type='text/javascript'>alert('$message');</script>";
}
if (isset($_SESSION['id'])) {
    $officer_id =  $_SESSION['id'];

}else {
    header('Location: ../');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Equipments | MCF</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../assets/images/app-logo.svg">

    <!-- FontAwesome JS-->
    <script defer src="../assets/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="../assets/css/portal.css">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
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
                        <a class="nav-link active" href="index.php">
						        <span class="nav-icon">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAuklEQVR4nO2VQQrCMBBF38oDtMvqUq9qPIqI3eiRjG4UpBcYUaZQQmoaYoKLfvgQksn8zM+QQBgboAU6QBx2wBFYk4gl8PAIiMM70KQIHTTRaSRRA5w1Zp8i1Nv17bQrjXmmCPXW/CquDBbADrhOuPRYWsCoxmcgmWnIVIk4vDGyUKmtdUSyKrCnHCSgPrWiIbzrvsl3+bHW1YE92RtBZiGZrcNpBlug4y6lHtUt+oSbTJXZ4Tcx47/xAjWhiVrWemq0AAAAAElFTkSuQmCC">
 						         </span>
                            <span class="nav-link-text">Equipment Management</span>
                        </a><!--//nav-link-->
                    </li><!--//nav-item-->
                    <li class="nav-item">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class="nav-link" href="equipmentAdd.php">
						        <span class="nav-icon">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAhUlEQVR4nO2UOw6AIBAF53rGW0uM8RpiiWdYGwuDHz4LodBJXkGzE3YX4CeRHlgByYwFujeBVRSXI8ubQAqlvSAX+Z5gA9zpPN7022gEzhOYG8GgEaRSXWC8GxWfQRDtDIJoWzQDU02BNN8iG/mZmcBcHhegi5QMkYKkBSACbYvbCy4veQeUerc7uKdqRQAAAABJRU5ErkJggg==">
 						         </span>
                            <span class="nav-link-text">Add Equipment</span>
                        </a><!--//nav-link-->
                    </li><!--//nav-item-->
                    <li class="nav-item">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class="nav-link" href="requests.php">
						        <span class="nav-icon">
                                   <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAABS0lEQVR4nO2aQU7CQBRA3yGkC04kcWfwKuJW4HoIZxAPIOiGDZgm04QMHWgTo/h9L/mb9i/6/3Sm7euASBsVMAeWwGeKF2CWzoXmAdgCh0LU58YELn5/pvgm9hGbUF0Y+Tw2wIBAzLMCd8AjMEwxSceOc6YEYpUVVxecM8ly6oWxxB3w1uOO+qlYA6O2C95mifWo5wxbFsQS6ysothSv39WATaQGLDtMgaceU2B0pU2oi79tu+BZlrhLTTi3CD7zjx+D78ANwRj3eBG6JyjjtLidG/mwxTcM0kvOAvhIsUhzPtxtLyIiIiJHqMUpfwuoxVGL0+gwtTiBWHVwgmpxThfEEn/OCm+zJLU4p6jFUYujFkctjlpcRERERIJSuVsctfjhwiYpd4ujFkctThl3i/P7+lstTo//AssOf4bU4qjFUYujFkctLkIIvgDF1UoaBg7GAAAAAABJRU5ErkJggg==">
 						         </span>
                            <span class="nav-link-text">Requests</span>
                        </a><!--//nav-link-->
                    </li><!--//nav-item-->
                    <li class="nav-item">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class="nav-link" href="CompletedRequests.php">
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
                    <h1 class="app-page-title mb-0">Equipments</h1>
                </div>

                <div class="tab-content" id="equipment-table-tab-content">
                    <div class="tab-pane fade show active" id="equipment-all" role="tabpanel" aria-labelledby="equipment-all-tab">
                        <div class="app-card app-card-equipment-table shadow-sm mb-5">
                            <div class="app-card-body">
                                <div class="table-responsive">
                                    <table class="table app-table-hover mb-0 text-left">
                                        <thead>
                                        <tr>
                                            <th class="cell">Equipment ID</th>
                                            <th class="cell">Equipment</th>
                                             <th class="cell">Description</th>
                                            <th class="cell">Quantity</th>
                                            <th class="cell">Availability</th>
                                            <th class="cell"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        // get all equipment where officer id is same  data from the database
                                        $sql = "SELECT * FROM equipment WHERE officer_id = " .$officer_id;

                                         $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                $availability = $row['availability']?"Available":"Not Available";
                                                echo "<tr>";
                                                echo "<td class='cell'>" . $row['equipment_id'] . "</td>";
                                                echo "<td class='cell'>" . $row['name'] . "</td>";
                                                 echo "<td class='cell'>" . $row['description'] . "</td>";
                                                echo "<td class='cell'>" . $row['quantity'] . "</td>";
                                                echo "<td class='cell'>" . $availability. "</td>";
                                                echo "<td class='cell'><button class='btn btn-sm btn-primary' style='color: #FFF' onclick='editQuantity(" . $row['equipment_id'] . ")' >Edit</button></td>";
                                                echo "<td class='cell'><a href='actions/delete_equipment.php?id=" . $row['equipment_id'] . "' class='btn btn-sm btn-danger' style='color: #FFF' onclick='return confirm(\"Are you sure you want to delete?\")' >Delete</a></td>";
                                                echo "</tr>";
                                            }
                                        }

                                        ?>
                                        </tbody>
                                    </table>
                                </div><!--//table-responsive-->

                            </div><!--//app-card-body-->
                        </div><!--//app-card-->
                        <!-- Pagination for equipments if needed -->
                    </div><!--//tab-pane-->
                    <!-- Additional tab panes for specific categories if needed -->
                </div><!--//tab-content-->

            </div><!--//container-fluid-->

        </div><!--//app-content-->

    </div><!--//app-wrapper-->
</div>
  <!-- Equipment Modal -->
<div class="modal fade" id="editQuantityModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Change Equipment Quantity</h5>
                <button type="button"  onclick="closeModal()"  class="close" data-dismiss="modal" aria-label="Close" >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div>
                    <label>Equipment ID : </label>
                    <label  id="quantityId"></label>
                </div>

               <input class="form-control" type="number" id="newQuantity">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closeModal()">Close</button>
                <button type="button" class="btn btn-primary" onclick="saveQuantity()">Save changes</button>
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

<script>

    // Get the table body
    const tableBody = document.querySelector('#equipment-all tbody');



    // Call the function to generate rows initially


    let editingEquipmentId;

    function editQuantity(id) {
        editingEquipmentId = id;
        // add id to quantity id
        $('#quantityId').text(id);
        $('#editQuantityModal').modal('show');
    }

    function saveQuantity() {
        // Fetch new quantity from input field
        const newQuantity = document.getElementById('newQuantity').value;

        // Redirect to PHP endpoint to update quantity
        window.location.href = `actions/edit_equipment.php?equipment_id=${editingEquipmentId}&quantity=${newQuantity}`;

        // hide model
        $('#editQuantityModal').modal('hide');
    }
    function  closeModal() {
        $('#deleteConfirm').modal('hide');
        $('#editQuantityModal').modal('hide');
    }
</script>
<!-- Page Specific JS -->
<script src="/assets/js/app.js"></script>

</body>
</html>

