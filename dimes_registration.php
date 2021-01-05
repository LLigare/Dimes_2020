<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" type="text/css" href="dimes_registration.css"/>
        <meta charset="UTF-8">      
    </head>
    
    <body>
        <div class="logo">
            <img src="logo1.jpg">            
        </div>
        <div class="registration-box">
            <h1>Registration</h1>
            <?php
                        $memkey = mt_rand (00005,99999);
                    ?>
                    <h4>Your membership key is <?php echo $memkey ?></h4>
            <form method="POST" action='dimes_regphpcon.php'> 
                    <div id="divleft">
                        <table id="lt">
                                <tr>
                                <td>
                                    First name:
                                </td>
                                <td>
                                    <input type="text" class="input_box" placeholder="First name" name="fname" required>
                                </td>
                                </tr>
                                
                                <tr>
                                <td>
                                    User name:
                                </td>
                                <td>
                                    <input type="text" class="input_box" placeholder="User name" name="uname" required>
                                </td>
                                </tr>
                                
                                <tr>
                                <td>
                                    Date of birth:
                                </td>
                                <td>
                                    <input type="date" class="input_box" placeholder="Date of Birth"  name="dob" required>
                                </td>
                                </tr>

                                <tr>
                                <td>
                                     Phone number:
                                </td>
                                <td>
                                     <input type="text" class="input_box" place holder="Phone number" name="phone" required>
                                </td>
                                </tr>

                                <tr>
                                <td>
                                 Date of joining:
                                </td>
                                <td>
                                    <input type="date" class="input_box" placeholder="Joining date" name="join_date" required>
                                 </td>
                                </tr>

                                <tr>
                                    <td>
                                        Password:
                                    </td>
                                    <td>
                                        <input type="password" class="input_box" placeholder="Password" name="pswd" required>
                                    </td>
                                </tr>

                                <tr>
                                <td>
                                    Retype password:
                                </td>
                                <td>
                                    <input type="password" class="input_box" placeholder="Confirm password" name="rpswd" required>
                                </td>
                                </tr>                                                 
                        </table>
                    </div>
                      <div id="divright">
                          <table id="rt">
                            <tr>
                                <td>
                                    Last name:
                                </td>
                                <td>
                                    <input type="text" class="input_box" placeholder="Last name" name="lname" required>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Membership key:
                                </td>
                                <td>
                                    <input type="number" class="input_box" placeholder="Enter the key <?php echo $memkey?>"  name="memkey" required>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Retype key:
                                </td>
                                <td>
                                    <input type="number" class="input_box" placeholder="Retype the key above"  name="rmemkey" required>
                                </td>
                            </tr>
                        
                            <tr>
                                <td>
                                    Gender:
                                </td>
                                <td>
                                    <input type="radio" name="gender" value="m" required>Male
                                    <input type="radio" name="gender" value="f" required>Female
                                    <input type="radio" name="gender" value="o" required>Other
                                </td>
                            </tr>
                            
                            <tr>
                                    <td>
                                        Region:
                                    </td>
                                    <td>
                                        <input type="text" class="input_box" placeholder="County and location" name="region" required>
                                    </td>
                            </tr> 

                            <tr>
                                <td>
                                    Email address:
                                </td>
                                <td>
                                    <input type="text" class="input_box" placeholder="Email address" name="email" required>
                                </td>
                            </tr>  
                            
                            <tr>
                                <td>
                                      Confirm <br> Email address:
                                </td>
                                <td>
                                    <input type="text" class="input_box" placeholder="Confirm e-mail" name="cemail" required>
                                </td>
                            </tr>
                        </div>
                    </table>          
                 
                    <button type="submit">Register</button>
                        <br>

                    <p>Already registered? <a href="dimes_signin.php">Sign in here</a></p> 
            </form>
        </div>   
    </body>
    <h6>**Take note of your membership key, it will be required**</h6>
    <div id = "footer">
        <hr>
        DIMES| Copyright &copy;|2020            
    </div>

</html>

