<?php
session_start();
if (isset($_POST['uname']) || isset($_POST['pswd']) || isset($_POST['memkey'])){
    $username = $_POST['uname'];
    $password = $_POST['pswd'];
    $memkey = $_POST['memkey'];
}
        $conn = mysqli_connect("localhost", "root", "", "dimes_db");

        $query = "SELECT uname, pswd, memkey from members where uname=? AND pswd=? AND memkey=? LIMIT 1";

        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssi", $username, $password, $memkey);
        $stmt->execute();
        $stmt->bind_result($username, $password, $memkey);
        $stmt->store_result();

        if($stmt->fetch())
            {
                $_SESSION['members_uname'] = $username;
                header("location: dimes_dashboard.php");
        }
        else{ 
            $echo = "Username, Password or Membership key is incorrect.";
        }
        mysqli_close($conn);

        if($memkey == 00001){
            header("location: dimes_chairdashboard.html");
        }
        elseif ($memkey == 00002){
            header("location: dimes_trsrdashboard.html");
        }
        elseif ($memkey == 00003) {
            header("location: dimes_secdashboard.html");
        }
        elseif ($memkey == 00004) {
            header("location: dimes_loancommittee.html");
        }


?>