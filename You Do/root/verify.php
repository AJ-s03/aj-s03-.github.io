<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        include "dbconnect.php";
        session_start();
        $_SESSION["OTP"] = $_POST['OTP'];
        $OTPflag;

        //OTP verification
        if ($_SESSION['OTP'] == $_SESSION["msg"]){
            $verificationflag = true;
        }
        else{
            $verificationflag = false;
            $OTPflag = true;
        }

        //Getting user name and password.
        $user = $_SESSION['user'];
        $email = $_SESSION['email'];
        $pass = $_SESSION['pass'];


        //Stores credentials if OTP verification is passed.
        if ($verificationflag != false)
        {
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $qeury = "insert into entrypoint (user, email, pass) values('$user', '$email', '$hash')";
            $result = mysqli_query($connection, $qeury);
            if($result){
                
            }
            else{
                echo "task failed successfully".mysql_error($connection);
                exit;
            }
            header("location: login.php");
            exit;            
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email verification</title>
    <link rel="stylesheet" href="styles_login.css">
</head>
<body>
<div class="modal-container">
        <div class="modal">
            <div class="modal-header">
                <h1>Verify Your Email :</h1>
            </div>
            <div class="modal-content">
            <form action="verify.php" method = "post">
                    <h2> Enter OTP sent to your email :  </h2>
                    <label for="OTP">
                        <li>
                            <input type="text" name ="OTP" id="OTP-box" style = "width:40vw;">
                        </li>
                    </label>
                    <?php if(isset($OTPflag)){echo "<h4 style='color:aliceblue;'>Entered OTP is incorrect.</h4>";}?>
                    <br><hr><br>
                    <div class="center-submit-btn">
                        <label for="submit">
                            <input type="submit" class = "submit-btn" value="Enter OTP">
                        </label>
                    </div>
            </form>
            </div>
        </div>
    </div>
</body>
</html>