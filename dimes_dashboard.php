<?php
include('dimes_session.php');
if(!isset($_SESSION['members_uname'])){
    $login_session = $_SESSION['members_uname'];
    header("location: dimes_signin.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" type="text/css" href="dimes_dashboard.css"/>
        <meta charset="UTF-8">      
    </head>
    
    <body>

        <div class="logo">
            <img src="logo1.jpg"> 
            <?php
                
                echo "<h1>&ensp; Welcome ".$fname." ".$lname." </h1>"; 
            ?>
        </div>
            
        <nav>
            <p>Your dashboard</p> 
        </nav>
        <div class="sidenav">
            <ul>
                <li><a href="#">Contributions</a>
                    <ul>
                        <li><a href="dimes_makecontribution.html">Make contribution</a></li>
                    </ul>
                </li>
                <li><a href="#">Loans</a>
                <ul>
                    <li><a href="dimes_loanapp.php">Loan application</a></li>
                    <li><a href="dimes_loanrep.html">Loan repayment</a></li>
                </ul>
                </li>       
                <li><a href="#">Penalties</a>
                <ul>
                    <li><a href="dimes_pen.html">View penalties</a></li>
                </ul>
                </li>
                <li><a href="#">Dividends</a>
                <ul>
                    <li><a href="dimes_dividends.html">View dividends</a></li>
                </ul>
                </li>
                <li><a href="#">News</a>
                <ul>
                    <li><a href="dimes_news.html">View news</a></li>
                </ul>
                </li>
                <li><a href="#">Minutes</a>  
                <ul>
                    <li><a href="dimes_minutes.html">View minutes</a></li>
                </ul>                               
            </ul>
        </div> 
        <?php
        if(isset($_SESSION['members_uname'])){
            echo '<form action="dimes_signout.php" method="post"><button type="submit" name="signoutsubmit">Sign out</button></form>';
        }
        ?>        
           
    </body>
    <div id = "footer">
        <hr>
        DIMES| Copyright &copy;|2020            
    </div>
</html>