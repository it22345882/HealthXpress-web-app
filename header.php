


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="styles/styles_header.css">
    <style>
        
    .log {
        font-size: 20px; 
        color: red; 
        font-weight:700;
        padding-left:10px;
        padding-right:20px;
    }
</style>

</head>
<body>
    
<ul class="menu">   
    
    <li class="menu"><a href="welcome_homepage.php">Homepage</a></li>
    <li class="menu"><a href="About.php">About</a></li>
    <?php
        if(isset($_SESSION['user_name'])){
            echo '<li class="menu"><a href="records.php">Patient records</a></li>';

        }elseif(isset($_SESSION['admin_name'])){
            echo '<li class="menu"><a href="users.php">User Accounts</a></li><li class="menu"><a href="Appointments.php">Appointments</a></li>';
        }
    ?>

    <li class="menu"><a href="Fitness and Exercise.php">Fitness and Exercise</a></li>
    <li class="menu"><a href="Diet and weight management.php">Diet and weight management</a></li>
    <li class="menu"><a href="Consultation.php">Consultation</a></li>
    <?php
        if(isset($_SESSION['user_name'])){
            echo '<li class="menu"><a href="feedbacks.php">Feedback</a></li><li class="menu"><a href="payment_methods.php">Payment methods</a></li>';

        }
    ?>


<li class="logout"><a href="logout.php">
<?php

echo 'Logout'

?>
</a></li>

    <?php
        if(isset($_SESSION['user_name'])){
            echo '<p class="log">'.$_SESSION['user_name'].'</p>';

        }elseif(isset($_SESSION['admin_name'])){
            echo '<p class="log">'.$_SESSION['admin_name'].'</p>';
        }

    ?>

</ul>
</body>
</html>



