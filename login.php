<?php

$user=0;
$invalid=0;
include "connect.php";
session_start();
        if(isset($_POST['username']) && isset($_POST['password']))
        {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "select * from accounts where username = '$username' and password='$password' ";

                $login = mysqli_query($conn, $sql);

                if($login)
                {
                    $num = mysqli_num_rows($login);
                    if($num>0)
                    {
                        $row = mysqli_fetch_array($login);
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['username'] = $row['username'];
                        
                        if($row['user_type'] == 'admin')
                        {
                            
                            $_SESSION['admin_name']=$row['name'];
                            header('location:welcome_homepage.php');
                        }
                        elseif($row['user_type'] == 'user')
                        {
                            
                            $_SESSION['user_name'] = $row['name'];
                            header('location:welcome_homepage.php');

                        }

                        }
                       
                    
                    else{
                        $invalid=1;
                    }
                
                }
                else
                {
                    echo "Error" .$sql. "<br>". mysqli_error($conn);
                }
        }
       

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    
    <title>Login page</title>
    <link rel="stylesheet" href="styles/styles_login.css">
    
</head>
<body>


    <img class="back" src="images/background.jpg" />
    <?php
        if($invalid){
            echo '<div class="alertwarn" >
            <strong>Username or password is incorrect </strong>Please try again.
          </div>';
        }
    ?>
    <div class="health_login">
        
        <form class="form_login" id="login" action="login.php" method="post">
            <h1 class="form_title">Login</h1>
            <div class="form_message form_message_error">

            </div>
            <div class="form_input_group">
                <input type="text" id="userName" name="username" class="form_input" autofocus placeholder="Username or Email">
                <div class="form_input_error_message">

                </div>
            </div>

            <div class="form_input_group">
                <input type="password" id="passwd" name="password" class="form_input" autofocus placeholder="password">
                <div class="form_input_error_message">

                </div>
            </div>

            <button class="form_button" id="submitlogin" type="submit" disabled>Continue</button>
            <p class="form_text">
                Forgot your Password? <a href="#" class="form_link">Click here</a>
            </p>
            <p class="form_text">
                Don't have an Account? <a class="form_link" href="Signup.php" id="linksignup">Sign Up</a>
            </p>
        </form>
        <a  class="nav" href="homepage.html">Go back to homepage</a>
    </div>

    <script src="js/Javascript_login_signup.js"></script>
</body>
</html>