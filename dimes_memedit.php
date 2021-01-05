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
        <link rel="stylesheet" type="text/css" href="dimes_memedit.css"/>
        <meta charset="UTF-8">      
    </head>
    
    <body>
        <div class="logo">
            <img src="logo1.jpg">            
        </div>
        <div class="inputbox">
            <h4>Get member by username</h4>
            <form method="POST" action='dimes_memedit.php'>
                   

                    <tr>
                    <td>
                        User name:
                    </td>
                    <td>
                        <input type="text" placeholder="User name"  name="t4">
                    </td>
                    </tr>
                    <br>

                                                       
                    <tr>
                        <td><input type="submit" name=submit1 value="view">
                            <input type="submit" name=submit3 value="delete">
                        </td>
                    </tr>
                   
            </form>
<?php
if(isset($_POST["submit3"]))
{
    mysqli_query($conn, "DELETE from members where uname='$_POST[t4]'");
}
if(isset($_POST["submit1"]))
{
    $res=mysqli_query($conn, "SELECT fname, lname, uname, memkey, pswd, dob, join_date, phone,gender, region from members");
    echo"<table border=1>";
    echo"<tr>";
    echo"<th>"; echo "fname"; echo "</th>";
    echo"<th>"; echo "lname"; echo "</th>";
    echo"<th>"; echo "uname"; echo "</th>";
    echo"<th>"; echo "memkey"; echo "</th>";
    echo"<th>"; echo "pswd"; echo "</th>";
    echo"<th>"; echo "dob"; echo "</th>";
    echo"<th>"; echo "join_date"; echo "</th>";
    echo"<th>"; echo "phone"; echo "</th>";
    echo"<th>"; echo "gender"; echo "</th>";
    echo"<th>"; echo "region"; echo "</th>";
    echo "</tr>";
}
while ($row=mysqli_fetch_array($res)){
    echo"<table border=1>";
    echo"<td>"; echo $row["fname"]; echo "</td>";
    echo"<td>"; echo $row["lname"]; echo "</td>";
    echo"<td>"; echo $row["uname"]; echo "</td>";
    echo"<td>"; echo $row["memkey"]; echo "</td>";
    echo"<td>"; echo $row["pswd"]; echo "</td>";
    echo"<td>"; echo $row["dob"]; echo "</td>";
    echo"<td>"; echo $row["join_date"]; echo "</td>";
    echo"<td>"; echo $row["phone"]; echo "</td>";
    echo"<td>"; echo $row["gender"]; echo "</td>";
    echo"<td>"; echo $row["region"]; echo "</td>";
    echo"<table>";
}
?>
        </div>            
    </body>
    
    <div id = "footer">
        <hr>
        DIMES| Copyright &copy;|2020            
    </div>

</html>
