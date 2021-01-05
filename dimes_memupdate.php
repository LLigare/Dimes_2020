<?php
include('dimes_memupdate.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Update member information</title>
        <link rel="stylesheet" type="text/css" href="dimes_memupdate.css"/>
        <meta charset="UTF-8">      
    </head>
    
    <body>

        <div class="logo">
            <img src="logo1.jpg"> 
        </div>
            
        <nav>
            <p>Choose what to update</p> 
        </nav>
        <div class="sidenav">
            <ul>
                <li><a href="#">b1. First name</a></li>
                <li><a href="#">b2. Last name</a></li>
                <li><a href="#">b3. Username</a></li>
                <li><a href="#">b4. pswd</a></li>
                <li><a href="#">b5. phone</a></li>                    
            </ul>
        </div> 
        <form method="POST">
        <tr>
                        <td><input type="submit" name=b1 value="b1>>">
                            <input type="submit" name=b2 value="b2>>">
                            <input type="submit" name=b3 value="b3>>">
                            <input type="submit" name=b4 value="b4>>">
                            <input type="submit" name=b5 value="b5>>">
                        </td>
                    </tr>
        </form>
    <?php
    if(isset($_POST["b1"]))
    {
        mysqli_query($conn, "UPDATE members set fname='$_POST[t3]' where fname='$_POST[t2]'");
    }
    ?>
           
    <div id = "footer">
        <hr>
        DIMES| Copyright &copy;|2020            
    </div>