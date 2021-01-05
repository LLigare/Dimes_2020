
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Loan repayment form</title>
        <link rel="stylesheet" type="text/css" a href="dimes_loanrep.css"/>
    </head>
    <body>
        <div class="logo">
            <img src="logo1.jpg">            
        </div>
        
        <div class="signin-box">
            <h1>Loan repayment form</h1>
            <form method="POST" action='dimes_loanrepcon.php'>
            <div class="lt">
                <p>Membership key</p>
                     <input type="text" class="input-box" placeholder="Membership key"name="memkey" required/>
                <p>Mpesa receipt code</p>
                     <input type="text" class="input-box" placeholder="Mpesa receipt code"name="mpesarec" required/>
                <p>Loaned amount</p>
                     <input type="text" class="input-box" placeholder="Loaned amount"name="loan_amount" required/>
                <p>Amount repaid</p>
                    <input type="text" class="input-box" placeholder="Amount repaid" name="pam" required/>
            </div>
            <div class="rt">
                <p>Date of loan application</p>
                    <input type="date" class="input-box" placeholder="Date of loan application" name="lad" required/>
                <p>Date of loan approval</p>
                    <input type="date" class="input-box" placeholder="Date of loan approval" name="lsud" required/>
                <p>Date of loan repayment</p>
                    <input type="date" class="input-box" placeholder="Date of loan repayment" name="repdate" required/>
                  
            </div>
                
                
                
                <button type="submit" name="gsb">Submit loan repayment details</button>
            </form>
        </div>
        <div id = "footer">
            <hr>
            DIMES| Copyright &copy;|2020            
        </div>
 
    </body>
</html>