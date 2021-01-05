<?php

if (isset($_POST['memkey']) || isset($_POST['lad'])  || isset($_POST['lsud']) || isset($_POST['lstatus']) || isset($_POST['reason'])) {
    $memkey =$_POST['memkey'];
    $lad =$_POST['lad'];
    $lsud =$_POST['lsud'];
    $lstatus =$_POST['lstatus'];
    $reason = $_POST['reason'];
}

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "dimes_db";

$conn = new mysqli($servername,$dbUsername,$dbPassword,$dbname);
   
    $INSERT =  "INSERT INTO loancom (memkey,lad,lsud,lstatus,reason) VALUES (?,?,?,?,?)";
        $stmt= $conn->prepare($INSERT);
        $stmt->bind_param("issss", $memkey, $lad,$lsud,$lstatus,$reason);
        $stmt->execute();
        echo "New record inserted successfully";
    
    $conn->close();
    
?>