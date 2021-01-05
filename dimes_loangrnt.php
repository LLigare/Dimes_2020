<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Guarantor's form</title>
        <link rel="stylesheet" type="text/css" a href="dimes_loanstatus.css"/>
    </head>
    <body>
        <div class="logo">
            <img src="logo1.jpg">            
        </div>
        
        <div class="signin-box">
            <h1>Guarantor's details</h1>
            <form method="POST" action='dimes_loangrntcon.php'>
                <p>Membership key of loan taker</p>                
                    <input type="text" class="input-box" placeholder="Membership key" name="memkey" required/>
                <p>First name of guarantor</p>
                     <input type="text" class="input-box" placeholder="First name of guarantor"name="fname" required/>
                <p>Last name of guarantor</p>
                     <input type="text" class="input-box" placeholder="Last name of guarantor"name="lname" required/>
                <p>Phone number of guarantor</p>
                    <input type="text" class="input-box" placeholder="Phone number of guarantor" name="phone" required/>
                <p>Date of loan application</p>
                    <input type="date" class="input-box" placeholder="Date of loan application" name="lad"required/>
                
                <button type="submit" name="gsb">Submit guarantor's details</button>
            </form>
        </div>
        <div id = "footer">
            <hr>
            DIMES| Copyright &copy;|2020            
        </div>
 
    </body>
</html>