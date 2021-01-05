<?php

if (isset($_POST['fname']) || isset($_POST['lname']) || isset($_POST['uname']) || isset($_POST['memkey']) || isset($_POST['rmemkey']) || isset($_POST['pswd']) || isset($_POST['rpswd']) || isset($_POST['dob']) || isset($_POST['join_date']) || isset($_POST['phone']) || isset($_POST['gender']) ||isset($_POST['region']) ||isset($_POST['email']) ||isset($_POST['cemail'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $memkey =$_POST['memkey'];
    $rmemkey =$_POST['rmemkey'];
    $pswd = $_POST['pswd'];
    $rpswd = $_POST['rpswd'];
    $dob = $_POST['dob'];
    $join_date = $_POST['join_date'];
    $phone = $_POST['phone'];    
    $gender = $_POST['gender'];
    $region = $_POST['region'];
    $email = $_POST['email'];
    $cemail = $_POST['cemail'];
}

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "dimes_db";

$conn = new mysqli($servername,$dbUsername,$dbPassword,$dbname);


if (mysqli_connect_error()){
    die('Connect Error('. mysqli_connect_errno().')' . mysqli_connect_error());
} elseif($pswd != $rpswd){
    echo "Passwords do not match";
}elseif($memkey != $rmemkey){
    echo "Membership keys do not match";
}elseif($email != $cemail){
    echo "Emails do not match";
}else {
    $SELECT = "SELECT uname From members Where uname = ? Limit 1";
    $INSERT =  "INSERT INTO members (fname,lname,uname,memkey,rmemkey,pswd,rpswd,dob,join_date,phone,gender,region,email,cemail) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("s", $uname);
    $stmt->execute();
    $stmt->bind_result($uname);
    $stmt->store_result();
    $rnum = $stmt->num_rows;

    if($rnum==0){
        $stmt->close();

        $stmt= $conn->prepare($INSERT);
        $stmt->bind_param("sssiisssssssss", $fname, $lname,$uname,$memkey,$rmemkey,$pswd,$rpswd,$dob,$join_date,$phone,$gender,$region,$email,$cemail);
        $stmt->execute();
        echo "New record inserted successfully";
    } else {
        echo "Someone already registered using this username";        
    }

    $stmt->close();
    $conn->close();
    }
?>