<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "3had";
const usersMap = array(
    "admin" => "admin",
    "employee" => "employee",
    "equipment_officer" => "officer"
);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// initialize session
session_start();

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Return JSON response
$response = array();

// Fetch email and password from POST request
$email = $_POST['email'];
$password = $_POST['password'];

// SQL injection protection
$email = mysqli_real_escape_string($conn, $email);
$password = mysqli_real_escape_string($conn, $password);

// Query each table to check if the user exists
$tables = array("admin", "equipment_officer", "employee");
$loggedIn = false;
$userType = "";

foreach ($tables as $table) {
    $sql = "SELECT * FROM $table WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $loggedIn = true;
        $userType = $table == "equipment_officer" ? "officer" : $table;
        // Return JSON response
        $row = $result->fetch_assoc();
        if($userType=='officer'){
            $response['id'] = $row['officer_id'];;
        } else if ($userType == 'admin') {
            $response['id'] = $row['admin_id'];
        } else if ($userType == 'employee') {
            $response['id'] = $row['employee_id'];
        }
        // add id in session
        $_SESSION['id'] = $response['id'];
        break;
    }
}

// Close database connection
$conn->close();


if ($loggedIn) {
    $response['success'] = true;
    $response['userType'] = $userType;
} else {
    $response['success'] = false;
    $response['message'] = 'Invalid email or password.';
}

echo json_encode($response);
?>
