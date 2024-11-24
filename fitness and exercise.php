﻿<?php



session_start();

if(!isset($_SESSION['admin_name']) && !isset($_SESSION['user_name'])){
   header('location:login.php');
   
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Fitness and Exercise</title>
    <link rel="stylesheet" href="styles/styles_fitness.css">
    <style>
        
    </style>
</head>
<body>
    <div class="logo">
        <img class="logo_background" src="images/fitness_background.jpg" alt="background image">
        <?php
            include 'header.php'
        ?>
        
        <h1 class="logo_name">HealthXpress</h1>
    </div>

    <div class="pagename">
        <h2>Fitness and Exercise</h2>
    </div>

    <div class="container">
        <img class="fit_back" src="images/fitness_background2.jpg"  />
        <h3> Fitness and exercise</h3>
        <div class="column_cont">
            <div class="content">
            
                <div class="points">
                    Overview and Facts
                </div>
                <div class="points">
                    Get Strong
                </div>
                <div class="points">
                    Fuel Your Body
                </div>
                <div class="points">
                    Better Routine
                </div>
            </div>

            
            <h3>Getting Started</h3>
            <div class="start_content">

                <div class="start_img">
                    <img src="images/fitness1.jpg" />
                    <p>Title</p>
                </div>
                <div class="start_img">
                    <img src="images/fitness2.jpg" />
                    <p>Title</p>
                </div>
                <div class="start_img">
                    <img src="images/fitness3.jpg" />
                    <p>Title</p>
                </div>
            </div>
        </div>

    </div>
    
    <div>
        <h3>More from HealthXpress</h3>
        <div class="more_cont">
            <div class="more_img">
                <img src="images/fitness4.jpg" />
                <p>Title</p>
            </div>
            <div class="more_img">
                <img src="images/fitness5.jpg" />
                <p>Title</p>
            </div>
            <div class="more_img">
                <img src="images/fitness6.jpg" />
                <p>Title</p>
            </div>
            <div class="more_img">
                <img src="images/fitness7.jpg" />
                <p>Title</p>
            </div>
            <div class="more_img">
                <img src="images/fitness8.jpg" />
                <p>Title</p>
            </div>
            <div class="more_img">
                <img src="images/fitness9.jpg" />
                <p>Title</p>
            </div>
            
        </div>
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
</body>
</html>