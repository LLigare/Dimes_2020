<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Loan application form</title>
        <link rel="stylesheet" type="text/css" a href="dimes_loanappform.css"/>
    </head>
    <body>
        <div class="logo">
            <img src="logo1.jpg">            
        </div>
        
        <div class="signin-box">
            <h1>Loan application form</h1>
            <form method="POST" action='dimes_loanappformcon.php'>
                <p>Membership key</p>                
                    <input type="text" class="input-box" placeholder="Membership key" name="memkey" required/>
                <p>Amount requested</p>                
                    <input type="text" class="input-box" placeholder="Loan amount" name="loan_amount" required/>
                <p>Loan application date</p>
                    <input type="date" class="input-box" placeholder="Loan application date" name="lad" required/>
                <p>Reason for loan</p>               
                <textarea rows="5" cols="50" name="reason" required></textarea> 

                <button type="submit" name="lafb">Submit application</button>
            </form>
        </div>
        <div id = "footer">
            <hr>
            DIMES| Copyright &copy;|2020            
        </div>
 
    </body>
</html>