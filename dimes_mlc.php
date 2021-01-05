<?php
$conn = mysqli_connect("localhost", "root", "", "dimes_db");
if (mysqli_connect_error()){
    die('Connect Error('. mysqli_connect_errno().')' . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit members</title>
        <link rel="stylesheet" type="text/css" href="dimes_mlc.css"/>
        <meta charset="UTF-8">      
    </head>
    
    <body>
        <div class="logo">
            <img src="logo1.jpg">            
        </div>
        <div class="inputbox">
            <h4>Get maximum loan you can borrow</h4>
            <form method="POST" action='dimes_mlc.php'>
                    <tr>
                    <td>
                        Enter membership key:
                    </td>
                    <td>
                        <input type="text" placeholder="Memkey" class="textbox"  name="t4">
                    </td>
                    </tr>
                    <br>
                    <tr>
                        <td><input type="submit" class="cbtn" name=submit1 value="Calculate"></td>
                    </tr>
                    <br><br><br><br><br><br>
            
            <?php
            if(isset($_POST["submit1"])){
            $sql = "SELECT total FROM maxloans WHERE memkey='$_POST[t4]' ";
            $res= mysqli_query($conn, $sql);

            while($row = mysqli_fetch_array($res)){
                echo "Maximum loan amount borrowable: Ksh <tr><td>". $row["total"]. "</td></tr>";
            }
            }
            $conn-> close()
            ?>
            </form>
        </div>            
    </body>
    
    <div id = "footer">
        <hr>
        DIMES| Copyright &copy;|2020            
    </div>

</html>
