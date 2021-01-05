<?php
if (isset($_POST['mem_id']) || isset($_POST['fname']) || isset($_POST['lname']) || isset($_POST['uname']) || isset($_POST['memkey']) || isset($_POST['rmemkey']) || isset($_POST['pswd']) || isset($_POST['rpswd']) || isset($_POST['dob']) || isset($_POST['join_date']) || isset($_POST['phone']) || isset($_POST['gender']) || isset($_POST['region'])){
    $mem_id = $_POST['mem_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $memkey = $_POST['memkey'];
    $rmemkey = $_POST['rmemkey'];
    $pswd = $_POST['pswd'];
    $rpswd = $_POST['rpswd'];
    $dob = $_POST['dob'];
    $join_date = $_POST['join_date'];
    $phone= $_POST['phone'];
    $gender = $_POST['gender'];
    $region = $_POST['region'];
}

$conn = mysqli_connect("localhost", "root", "", "dimes_db");
if (mysqli_connect_error()){
    die('Connect Error('. mysqli_connect_errno().')' . mysqli_connect_error());
}

function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['mem_id'];
    $posts[1] = $_POST['fname'];
    $posts[2] = $_POST['lname'];
    $posts[3] = $_POST['uname'];
    $posts[4] = $_POST['memkey'];
    $posts[5] = $_POST['rmemkey'];
    $posts[6] = $_POST['pswd'];
    $posts[7] = $_POST['rpswd'];
    $posts[8] = $_POST['dob'];
    $posts[9] = $_POST['join_date'];
    $posts[10] = $_POST['phone'];
    $posts[11] = $_POST['gender'];
    $posts[12] = $_POST['region'];
    return $posts;
}
if(isset($_POST['search']))
{
    $data = getPosts();
    $squery = "SELECT  FROM members WHERE $data[2]";
    $sresult = mysqli_query($conn, $squery);

    if($sresult)
    {
        if(mysqli_num_rows($sresult))
        {
            while($row = mysqli_fetch_array($sresult))
            {
                $mem_id = $row['mem_id'];
                $fname = $row['fname'];
                $lname = $row['lname'];
                $uname = $row['uname'];
                $memkey = $row['memkey'];
                $rmemkey = $row['rmemkey'];
                $pswd = $row['pswd'];
                $rpswd = $row['rpswd'];
                $dob = $row['dob'];
                $join_date = $row['join_date'];
                $phone = $row['phone'];
                $gender = $row['gender'];
                $region = $row['region'];
            }    
        }else{
            echo 'No such username';
        }
    }else{
        echo 'Result error';
    }
}
?>