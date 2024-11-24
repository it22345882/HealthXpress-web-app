<?php



session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login.php');
   
}


$user= 0;
$success = 0;
    

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    include 'connect.php';


    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
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
                $sql = "INSERT INTO `accounts`(`username`,`name`, `email`, `password`, `user_type` ) VALUES ('$username', '$name', '$email', '$password', '$usertype')";

            $result = mysqli_query($conn, $sql);

            if($result){
                header('location:users.php');
            }
            else{
                die("error".mysqli_error($conn));
            }
        }

    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Make an account</title>
  	<link rel="stylesheet" href="styles/styles_user.css">
  
  

 
</head>
<body>
    <div class="logo">
        <img class="logo_background" src="images/users.jpg" alt="background image">
        <?php
        include 'header.php';
        ?>
            <h1 class="logo_name">HealthXpress</h1>
    </div>
    <?php
    if($user){
        echo '<div class="alertwarn" >
        Sorry, Username already exists <strong>Choose a different username</strong>.
        </div>';
    }
    ?>
    <div class="pagename">
        <h2>Add a User</h2>
    </div>

<div class="container">
    
    <form method="post" >
        <h3>User account details</h3>
            <div class="form-group">
            <label for="">Username</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required>
        </div>
        
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
        </div>
        
        <div class="form_input_group">

            <label for="usertype" >Choose user type</label>
                <select style="margin-left:10px; padding-left:5px; border:none; width:100px; height:30px; background-color:#cce2ff;" name="usertype" >
                <option value="user">user</option>
                <option value="admin">admin</option>
                
                </select>
            </div>
        <div class="holder">
            <button type="submit" class="submit-button" name="submit" id="submitButton">Submit</button>
        </div>
        
        
    </form>
    </div>
    



    <footer>
        <img class="footimage" src="images/footimage.jpg" alt="Footer Logo">
        <img class="footerimage" src="images/healthXpress.png" alt="Footer Logo">

        <div class="footer-menu">
            <div class="foot_menu_items">
                <div class="menu-item">
                    <a href="policies.html">Policies</a>
                </div>
                <div class="menu-item">
                    <a href="Otherapps.html">Our Other Apps</a>
                </div>
                <div class="menu-item">
                    <a href="forAdvertisers.html">For Advertisers</a>
                </div>
                <div class="menu-item">
                    <a href="additionalInfo.html">See Additional Information</a>
                </div>
            </div>
        </div>
        <div class="social-icons">
            <a href="https://www.facebook.com"><img class="social" width="30px" height="30px" src="images/facebook.png" alt="Facebook"></a>
            <a href="https://www.twitter.com"><img class="social" width="30px" height="30px" src="images/twitter.png" alt="Twitter"></a>
            <a href="https://www.instagram.com"><img class="social" width="30px" height="30px" src="images/instagram.png" alt="Instagram"></a>
            <a href="https://www.youtube.com"><img class="social" width="30px" height="30px" src="images/youtube.png" alt="Google Plus"></a>
        </div>
    </footer>
    </footer>
</body>
  </html>
  