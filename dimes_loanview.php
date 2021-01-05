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
        <title>View loans</title>
        <link rel="stylesheet" type="text/css" a href="dimes_loanview.css"/>
    </head>
    <body>
    
        <div class="logo">
            <img src="logo1.jpg">            
        </div>
            <h1><u>View loans</u></h1>
            <form method="POST" action='dimes_loanview.php'>
            <table>
            <tr>
                <th>Loan ID</th>
                <th>Loan amount</th>
                <th>Membership key</th>
                <th>Loan application date</th>
                <th>Reason</th>
            </tr>
            <?php
            $sql = "SELECT * FROM loan_application";
            $res= mysqli_query($conn, $sql);
            if ($res-> num_rows>0){
            while($row = $res-> fetch_assoc()){
                echo "<tr><td>". $row["loan_id"]."</td><td>". $row["loan_amount"]. "</td><td>".$row["memkey"]. "</td><td>".$row["lad"]. "</td><td>".$row["reason"]. "</td></tr>";
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
 