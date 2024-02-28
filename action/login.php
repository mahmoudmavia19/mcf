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

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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
        break;
    }
}

// Close database connection
$conn->close();

// Return JSON response
$response = array();

if ($loggedIn) {
    $response['success'] = true;
    $response['userType'] = $userType;
} else {
    $response['success'] = false;
    $response['message'] = 'Invalid email or password.';
}

echo json_encode($response);
?>
