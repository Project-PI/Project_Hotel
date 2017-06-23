<?php 
/* Reset your password form, sends reset.php password link */
require 'db.php';
session_start();

// Check if form submitted with method="post"
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
{   
    $email = $mysqli->escape_string($_POST['email']);
    $result = $mysqli->query("SELECT * FROM user_admin WHERE email='$email'");

    if ( $result->num_rows == 0 ) {// User doesn't exist
        $_SESSION['message'] = "User with that email doesn't exist!";
        header("location: error.php");
    }
    else { // User exists (num_rows != 0)

        $user = $result->fetch_assoc(); // $user becomes array with user data
        $email = $user['email'];
        if ( $_POST['newpassword'] == $_POST['confirmpassword'] ) {

            $new_password = password_hash($_POST['newpassword'], PASSWORD_BCRYPT);

            // We get $_POST['email'] and $_POST['hash'] from the hidden input field of reset.php form
//            $email = $mysqli->escape_string($_POST['email']);

            $sql = "UPDATE user_admin SET password ='$new_password' WHERE email='$email'";

            if ( $mysqli->query($sql) ) {

                $_SESSION['message'] = "Your password has been reset successfully!";
                header("location: success.php");
            }

        }
        else {
            $_SESSION['message'] = "Two passwords you entered don't match, try again!";
            header("location: error.php");
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Reset Your Password</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    
  <div class="form">

        <h1>Reset Your Password</h1>

        <form action="forgot.php" method="post">
             <div class="field-wrap">
                 <label>
                     Email Address<span class="req">*</span>
                 </label>
                 <input type="email"required autocomplete="off" name="email"/>
            </div>
            <div class="field-wrap">
                <label>
                    New Password<span class="req">*</span>
                </label>
                <input type="password"required name="newpassword" autocomplete="off"/>
            </div>
            <div class="field-wrap">
                <label>
                    Confirm New Password<span class="req">*</span>
                </label>
                <input type="password"required name="confirmpassword" autocomplete="off"/>
            </div>

            <!-- This input field is needed, to get the email of the user -->
            <button class="button button-block"/>Reset</button>
        </form>
  </div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="assets/js/index.js"></script>
</body>
</html>
