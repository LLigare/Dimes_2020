<?php
session_start();
if(isset($_SESSION['members_uname'])){

if (isset($_POST['memkey']) || isset($_POST['cont_date']) || isset($_POST['cont_amount']) || isset($_POST['mpesarec'])) {
    $memkey = $_POST['memkey'];
    $cont_date = $_POST['cont_date'];
    $cont_amount = $_POST['cont_amount'];
    $mpesarec = $_POST['mpesarec'];
}
}

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "dimes_db";

$conn = new mysqli($servername,$dbUsername,$dbPassword,$dbname);


if (mysqli_connect_error()){
    die('Connect Error('. mysqli_connect_errno().')' . mysqli_connect_error());
}else{
    $INSERT =  "INSERT INTO contribution (memkey,cont_date,cont_amount,mpesarec) VALUES (?,?,?,?)";
    $stmt= $conn->prepare($INSERT);
    $stmt->bind_param("isis", $memkey, $cont_date,$cont_amount,$mpesarec);
    $stmt->execute();
    echo "New record inserted successfully";
}

?>