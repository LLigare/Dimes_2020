<?php
$conn = mysqli_connect("localhost","root","", "dimes_db");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

session_start();

$user_check = $_SESSION['members_uname'];

$query = "SELECT * from members where uname = '$user_check'";
$result = mysqli_query($conn,$query);
if ($result->num_rows > 0) { 
    $row = mysqli_fetch_assoc($result);
    $login_session = $row['uname'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    $dob = $row['dob'];
}

?>