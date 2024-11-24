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
    <title>Diet and weight Management</title>
    <link rel="stylesheet" href="styles/styles_diet_management.css">

</head>
<body>
    <div class="logo">
        <img class="logo_background" src="images/DietManagement_background.jpg" alt="background image">
        
        <?php
            include 'header.php'
        ?>
        
        <h1 class="logo_name">HealthXpress</h1>
    </div>

    <div class="pagename">
        <h2>Diet and weight Management</h2>
    </div>

    <div>
        <h3>8 Ways to eat healthy</h3>
        <ul class="eat_healthy">
            <li class="eat">Choose whole, unprocessed foods</li>
            <li class="eat">
                Practice portion control.
            </li>
            <li class="eat">
                Eat a variety of fruits and vegetables.
            </li>
            <li class="eat">Limit added sugars.</li>
            <li class="eat">
                Stay hydrated with water.
            </li>
            <li class="eat">Limit salt intake.</li>
            <li class="eat">Snack on healthy options like nuts, seeds, or fruits.</li>
            <li class="eat">Plan and prepare meals in advance</li>
        </ul>
    </div>

    
        <div class="food_facts">

            <h3>Food facts</h3>
            <div class="fact_list">

                <div class="facts">
                    <img src="images/foodfact1.jpg" style="width: 400px; height: 259px;" title="Cereals" />
                    <p>Cereals</p>
                </div>
                <div class="facts">
                    <img src="images/foodfact2.jpg" style="width: 400px; height: 259px;" title="Watermelon" />
                    <p>Watermelon</p>
                </div>
                <div class="facts">
                    <img src="images/foodfact3.jpg" style="width: 400px; height: 259px; " title="Green leaves" />
                    <p>Green leaves</p>
                </div>
                <div class="facts">
                    <img src="images/foodfact4.jpg" style="width: 400px; height: 259px; " title="Proteins" />
                    <p>Proteins</p>
                </div>
                <div class="facts">
                    <img src="images/foodfact5.jpg" style="width: 400px; height: 259px; " title="Vegetables" />
                    <p>Vegetables</p>
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