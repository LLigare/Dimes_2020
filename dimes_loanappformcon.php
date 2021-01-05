<?php

if (isset($_POST['memkey']) || isset($_POST['loan_amount']) || isset($_POST['lad']) || isset($_POST['reason'])) {
    $memkey =$_POST['memkey'];
    $loan_amount =$_POST['loan_amount'];
    $lad =$_POST['lad'];
    $reason = $_POST['reason'];
}

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "dimes_db";

$conn = new mysqli($servername,$dbUsername,$dbPassword,$dbname);
   
    $INSERT =  "INSERT INTO loan_application (memkey,loan_amount,lad,reason) VALUES (?,?,?,?)";

    $sql = "SELECT total FROM maxloans WHERE maxloans.memkey='$_POST[memkey]' ";
    $res= mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($res)){
        $p= $row[0];
    }
    if($loan_amount > $p){
        echo "Amount requested is greater than amount borrowable";
}else{
        $stmt= $conn->prepare($INSERT);
        $stmt->bind_param("iiss", $memkey, $loan_amount,$lad,$reason);
        $stmt->execute();
        echo "New record inserted successfully";
    }
    $conn->close();
    
?>