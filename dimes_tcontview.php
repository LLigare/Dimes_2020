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
        <title>View contributions</title>
        <link rel="stylesheet" type="text/css" a href="dimes_tcontview.css"/>
    </head>
    <body>
    
        <div class="logo">
            <img src="logo1.jpg">            
        </div>
            <h1><u>All Contributions</u></h1>
            <form method="POST" action='dimes_tcontview.php'>
            <table>
            <tr>
                <th>Contribution ID</th>
                <th>Contribution date</th>
                <th>Membership key</th>
                <th>Contribution amount</th>
                <th>M-pesa receipt </th>
            </tr>
            <?php
            $sql = "SELECT * FROM contribution";
            $res= mysqli_query($conn, $sql);
            if ($res-> num_rows>0){
            while($row = $res-> fetch_assoc()){
                echo "<tr><td>". $row["cont_id"]. "</td><td>".$row["cont_date"]. "</td><td>".$row["memkey"]. "</td><td>". $row["cont_amount"]. "</td><td>".$row["mpesarec"]. "</td></tr>";
            }
            echo "</table>";
            }else{
                echo "No records to show";
            }
            $conn-> close();
            ?>        
            </form>
        <div id = "footer">
            <hr>
            DIMES| Copyright &copy;|2020            
        </div>
 
    </body>
</html>
 