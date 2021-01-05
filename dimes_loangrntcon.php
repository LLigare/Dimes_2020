<?php

if (isset($_POST['memkey']) || isset($_POST['fname'])  || isset($_POST['lname']) || isset($_POST['phone']) || isset($_POST['lad'])) {
    $memkey =$_POST['memkey'];
    $fname =$_POST['fname'];
    $lname =$_POST['lname'];
    $phone =$_POST['phone'];
    $lad =$_POST['lad'];
}

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "dimes_db";

$conn = new mysqli($servername,$dbUsername,$dbPassword,$dbname);
   
    $INSERT =  "INSERT INTO guarantors (memkey,fname,lname,phone,lad) VALUES (?,?,?,?,?)";
        $stmt= $conn->prepare($INSERT);
        $stmt->bind_param("issss", $memkey, $fname,$lname,$phone,$lad);
        $stmt->execute();
        echo "New record inserted successfully";
    
    $conn->close();
    
?>