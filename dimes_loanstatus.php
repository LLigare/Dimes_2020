<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Loan status form</title>
        <link rel="stylesheet" type="text/css" a href="dimes_loanstatus.css"/>
    </head>
    <body>
        <div class="logo">
            <img src="logo1.jpg">            
        </div>
        
        <div class="signin-box">
            <h1>Loan status</h1>
            <form method="POST" action='dimes_loanstatuscon.php'>
                <p>Membership key</p>                
                    <input type="text" class="input-box" placeholder="Membership key" name="memkey" required/>
                <p>Date of loan application</p>
                     <input type="date" class="input-box" placeholder="Date of loan application" name="lad" required/>
                <p>Loan status update date</p>
                    <input type="date" class="input-box" placeholder="Loan status update date" name="lsud" required/>
                <p>Loan status</p>                
                    <input type="text" class="input-box" placeholder="Loan status" name="lstatus" required/>
                <p>Reason for status</p>                
                    <input type="text" class="input-box" placeholder="Reason" name="reason" required/>
                <button type="submit" name="lsb">Submit current status</button>
            </form>
        </div>
        <div id = "footer">
            <hr>
            DIMES| Copyright &copy;|2020            
        </div>
 
    </body>
</html>