<?php
include ('dimes_signincon.php');

if(isset($_SESSION['members_uname'])){
    header("location: dimes_signin.php");
}?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sign in</title>
        <link rel="stylesheet" type="text/css" a href="dimes_signin.css"/>
    </head>
    <body>
        <div class="logo">
            <img src="logo1.jpg">            
        </div>
        
        <div class="signin-box">
            <h1>Sign in</h1>
            <form method="POST" action='dimes_signincon.php'>
                <p>Username</p>                
                    <input type="text" class="input-box" placeholder="Username" name="uname"/>
                <p>Password</p>
                    <input type="password" class="input-box" placeholder="Password" name="pswd"/>
                <p>Membership Key</p>                
                    <input type="number" class="input-box" placeholder="Membership Key" name="memkey"/>
                    <br><br>
                <button type="submit" name="signinsubmit">Sign in</button>
                <p>No account? <a href="dimes_registration.php">Register here</a></p>
 
            </form>
        </div>
        <div id = "footer">
            <hr>
            DIMES| Copyright &copy;|2020            
        </div>
 
    </body>
</html>