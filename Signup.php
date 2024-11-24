<?php

$user= 0;
$success = 0;

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(!($_POST['password'] == $_POST['confirm_password']))
        {
            die("Passwords must match");
        }
       include "connect.php";
       

        
            $username = $_POST['username'];
            $name = $_POST['name'];
            $email=$_POST['email'];
            $password = $_POST['password'];
            $usertype = $_POST['usertype'];

            $sql = "select * from accounts where username = '$username' ";

            $verify = mysqli_query($conn, $sql);

            /*check if username already exists*/
            if($verify)
            {
                
                $rows = mysqli_num_rows($verify);
                if($rows > 0)
                {
                   
                    $user = 1;
                }
                else{
                    /*insert data*/
                    $sql = "INSERT INTO `accounts` (`username`, `name` , `email`, `password`, `user_type`) VALUES ('$username', '$name' , '$email', '$password', '$usertype')";

                    $result=mysqli_query($conn, $sql);

                    if($result){
                        header('location: login.php');
                        
                    }
                    else{
                        die("error creating account " .mysqli_error($conn));
                    }
                }
            }
        }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    
    <title>Sign up page</title>
    <link rel="stylesheet" href="styles/styles_login.css">
    
</head>
<body>

    
    
    
    
    <img class="back " src="images/background.jpg" />
    <?php
        if($user){
            echo '<div class="alertwarn" >
            Sorry, Username already exists <strong>Choose a different username</strong>.
          </div>';
        }
    ?>
    <div class="health_signup">
        
        

        <form onSubmit="return checkPassword(this)" action="Signup.php" class="form_signup" id="signup" method="POST" >
            <h1 class="form_title">Sign Up</h1>
            <div class="form_message form_message_error"></div>
            <div class="form_input_group">
                <input type="text" class="form_input" name="username" id="userName" autofocus placeholder="Username" required>
                <div class="form_input_error_message"></div>
            </div>
            <div class="form_input_group">
                <input type="text" class="form_input" name="name" id="name" autofocus placeholder="Name" required>
                <div class="form_input_error_message"></div>
            </div>
            <div class="form_input_group">
                <input type="email" class="form_input" name="email" id="email" autofocus placeholder="E-mail" required>
                <div class="form_input_error_message"></div>
            </div>
            <div class="form_input_group">
                <input type="text" name="password" class="form_input" id="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" autofocus placeholder="password">
                <div class="form_input-_error_message"></div>
            </div>
            <div class="form_input_group">
                <input type="password" class="form_input" id="re-pwd" name="confirm_password" autofocus placeholder="Re-Enter password" title="Must be same as the password above">
                <div class="form_input_error_message"></div>
            </div>

            <div class="form_input_group">
            <label for="usertype" >Choose user type</label>
            
                <select style="margin-left:10px; padding-left:5px; border:none; width:100px; height:30px; background-color:#cce2ff;" class="usertype"  name="usertype" required>
                <option value="user">User</option>
                <option value="admin">Admin</option>
                
                </select>
            </div>
            

            <p class="form_text">
                <input onclick = "conditionsFunction()" type="checkbox" class="inputStyle" id="conditions" onclick="enableButton()">I agree to HealthXpress <a class="form_link" href="url">Terms of Use</a> & <a class="form_link" href="url">Privacy Policy</a>
            </p>   
            <button class="form_button" type="submit" name="submit_sign" id="submitsignup" disabled>Submit</button>
            
            <p class="form_text">
                Already have an account?<a class="form_link" href="login.php"> Sign in</a>
            </p>
            <a  class="nav" href="homepage.html">Go back to homepage</a>
    <?php
    
    
    ?>
    
</div>
        </form>

    </div>
    <script src="js/Javascript_login_signup.js"></script>
</body>
</html>