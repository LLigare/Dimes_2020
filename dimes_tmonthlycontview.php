<?php

$conn = mysqli_connect("localhost", "root", "", "dimes_db");
if (mysqli_connect_error()){
    die('Connect Error('. mysqli_connect_errno().')' . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>View monthly contributions</title>
        <link rel="stylesheet" type="text/css" a href="dimes_tmonthlycontview.css"/>
    </head>
    <body>
    
        <div class="logo">
            <img src="logo1.jpg">            
        </div>
            <h1><u>Monthly Contributions</u></h1>
            <form method="POST" action='dimes_tcontview.php'>
            <table>
            <tr>
                <th>Contribution ID</th>
                <th>Month</th>
                <th>Contribution date</th>
                <th>Membership key</th>
                <th>Contribution amount</th>
                <th>M-pesa receipt </th>
                <th>First name</th>
                <th>Last name</th>
            </tr>
            <?php
            $sql = "SELECT * FROM cobyam";
            $res= mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($res)){
             echo "<tr><td>". $row["cont_id"]. "</td><td>".$row["mname"]. "</td><td>".$row["cont_date"]. "</td><td>".$row["memkey"]. "</td><td>". $row["cont_amount"]. "</td><td>".$row["mpesarec"]. "</td><td>". $row["fname"]."</td><td>". $row["lname"]."</td></tr>";
            }
            $conn-> close()
            ?>
            </table>                 
            </form>
        <div id = "footer">
            <hr>
            DIMES| Copyright &copy;|2020            
        </div>
 
    </body>
</html>
 