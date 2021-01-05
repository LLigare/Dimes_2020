<?php

if (isset($_POST['memkey'])  || isset($_POST['mpesarec'])  || isset($_POST['loan_amount']) || isset($_POST['pam']) || isset($_POST['lad']) || isset($_POST['lsud']) || isset($_POST['repdate'])) {
    $memkey =$_POST['memkey'];
    $mpesarec =$_POST['mpesarec'];
    $loan_amount =$_POST['loan_amount'];
    $pam =$_POST['pam'];
    $lad =$_POST['lad'];
    $lsud =$_POST['lsud'];
    $repdate =$_POST['repdate'];
}

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "dimes_db";



$conn = new mysqli($servername,$dbUsername,$dbPassword,$dbname);
   
    $INSERT =  "INSERT INTO loan_repayment (memkey,mpesarec,loan_amount,pam,lad,lsud,repdate) VALUES (?,?,?,?,?,?,?)";
    $sql = "SELECT loan_amount FROM loan_application WHERE loan_application.lad= '$_POST[lad]'";
    $res= mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($res)){
        $p = $row[0];
    }
    if($loan_amount != $p){
        echo "Input correct loan amount";

    }else{
        $stmt= $conn->prepare($INSERT);
        $stmt->bind_param("isiisss", $memkey, $mpesarec,$loan_amount,$pam,$lad,$lsud,$repdate);
        $stmt->execute();
        echo "New record inserted successfully";
    

    $conn->close();
    }
?>