<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        //include "dbconnect.php";
        session_start();
        $user = $_POST["user"];
        $pass = $_POST["pass"];
        $cpass = $_POST["cpass"];
        $email = $_POST["email"];
        //$contact = $_POST["contact"];
        $passflag;
        $lengthflag;
        $userflag;
        $emailflag;

        if(strlen($pass) <  8){
           $lengthflag = true;
        }

        if (($cpass != $pass)){
            $passflag = false;
        }

        //$search_user = "Select * from entrypoint where user = '$user'";
        //$search_email = "Select * from entrypoint where email = '$email'";
        // $result1 = mysqli_query($connection, $search_user);
        // $num = mysqli_num_rows($result1);
        // $result1 = mysqli_query($connection, $search_email);
        // $num2 = mysqli_num_rows($result1);
        // if ($num == 1){
        //     $userflag = true;
        //     //die("User exists.");
        // }

        // if ($num2 == 1){
        //     $emailflag = true;
        //    //die("Email Already in use.");
        // }
        $_SESSION["user"] = $_POST["user"];
        $_SESSION["pass"] = $_POST["pass"];
        $_SESSION["cpass"] = $_POST["cpass"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["msg"] = "1111";

        if (!(isset($lengthflag)) && !(isset($passflag)) && !(isset($userflag)) && !(isset($emailflag)))
        {
            header("location: verify.php");
        }

        // if (mail($email, "OTP", $msg)){
        //     header("location: verify.php");
        // }
        // else{
        //     die("Soem");
        // }



        //$pass_hash = password_hash($pass, PASSWORD_DEFAULT);
        // if (!(isset($_SESSION['lengthflag'])) && !(isset($_SESSION['passflag'])) && !(isset($_SESSION['userflag'])) && !(isset($_SESSION['emailflag'])) && !(isset($verificationflag)))
        // {
        //     $hash = password_hash($pass, PASSWORD_DEFAULT);
        //     $qeury = "insert into entrypoint (user, email, pass) values('$user', '$email', '$hash')";
        //     $result = mysqli_query($connection, $qeury);
        //     if($result){
        //         echo "The operation was successful.";
        //     }
        //     else{
        //         echo "task failed successfully".mysql_error($connection);
        //     }
        //     header("location: login.php");
        //     exit;            
        // }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="styles_login.css">
</head>

<body id = "particles-js">
    <div class="modal-container">
        <div class="modal">
            <div class="modal-header">
                <h1>Sign up with below fields</h1>
            </div>
            <div class="modal-content">
            <form action="sign_up.php" method = "post">
                    <h2> Username </h2>
                    <label for="username">
                        <li>
                            <input type="text" name ="user" id="User-box" style = "width:40vh;">
                        </li>
                    </label>
                    <?php if(isset($userflag)){echo "<h4 style='color:aliceblue;'>Username already exists.</h4>";}?>
                    <br><hr><br>
                    <h2> Email </h2>
                    <label for="email">
                        <li>
                            <input type="email" name ="email" id="User-box" style = "width:40vh;">
                        </li>
                    </label>
                    <?php if(isset($emailflag)){echo "<h4 style='color:aliceblue;'>Email already in use.</h4>";}?>
                    <br><hr><br>
                    <h2> Password </h2>
                    <label for="password">
                        <li>
                            <input type="password" name = "pass" id="pass-box" style = "width:40vh;">
                        </li>
                    </label>
                    <?php if(isset($lengthflag)){echo "<h4 style='color:aliceblue;'>Password must not be longer than 8 characters</h4>";}?> 
                    <br><hr><br>
                    <h2> Confirm Password </h2>
                    <label for="CPassword">
                        <li>
                            <input type="password" name = "cpass" id="pass-box" style = "width:40vh;">
                        </li>
                    </label>
                    <?php if(isset($passflag)){echo "<h4 style='color:aliceblue;'>Password does not match up!</h4>";}?>   
                    <br><hr><br>
                    <div class="already-account">
                        <a href="login.php" style = "text-decoration:none;">Already an user? Login here.</a>
                    </div>
                    <div class="center-submit-btn">
                        <label for="submit">
                            <input type="submit" class = "submit-btn" value="Sign-up">
                        </label>
                        <label for="reset">
                            <input type="reset" class = "submit-btn" value="Reset">
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src=
		"particles.js-master/particles.js">
	</script>
	<script src=
		"particles.js-master/demo/js/app.js">
	</script>
</html>