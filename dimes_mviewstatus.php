<?php
$conn = mysqli_connect("localhost", "root", "", "dimes_db");
if (mysqli_connect_error()){
    die('Connect Error('. mysqli_connect_errno().')' . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>View loan status</title>
        <link rel="stylesheet" type="text/css" href="dimes_mviewstatus.css"/>
        <meta charset="UTF-8">      
    </head>
    
    <body>
        <div class="logo">
            <img src="logo1.jpg">            
        </div>
        <div class="inputbox">
            <h4>View status</h4>
            <form method="POST" action='dimes_mviewstatus.php'>
                    <tr>
                    <td>
                        Enter loan application date:
                    </td>
                    <td>
                        <input type="text" placeholder="Y-M-D" class="textbox"  name="t4">
                    </td>
                    </tr>
                    <br>
                    <tr>
                        <td><input type="submit" class="cbtn" name=submit1 value="View status"></td>
                    </tr>
                    <br><br><br><br><br><br>
            
            <?php
            if(isset($_POST["submit1"])){
            $sql = "SELECT memkey,lsud,lstatus,reason FROM loancom WHERE lad='$_POST[t4]' ";
            $res= mysqli_query($conn, $sql);

            while($row = mysqli_fetch_array($res)){
                echo "<table border 1px solid black>";
                echo "<tr>";
                echo   "<th>Membership key</th>";
                echo   "<th>Date of loan approval</th>";
                echo   "<th>Status</th>";
                echo   "<th>Reason</th>";
                echo "</tr>";
                echo "<tr><td>". $row["memkey"]. "</td><td>".$row["lsud"]. "</td><td>".$row["lstatus"]. "</td><td>".$row["reason"]. "</td></tr>";
                echo "</table>";
                echo "<br><br>";
            }
            $rep = "SELECT lrd FROM loanrepdate WHERE lad='$_POST[t4]'";
            $rd = mysqli_query($conn,$rep);
            while($row = mysqli_fetch_array($rd)){
            echo "Loan is to be repayed before: ";
            echo  "<tr><td>". $row["lrd"]. "</td><td>" ;
            }

            }
            $conn-> close()
            ?>
            </table>
            </form>
        </div>            
    </body>
    
    <div id = "footer">
        <hr>
        DIMES| Copyright &copy;|2020            
    </div>

</html>
