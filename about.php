<?php



session_start();

if(!isset($_SESSION['admin_name']) && !isset($_SESSION['user_name'])){
   header('location:login.php');
   
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>About Us</title>
    <link rel="stylesheet" href="styles/styles_aboutus.css">
</head>
<body>
    <div class="logo">
        <img class="logo_background" src="images/aboutus.jpg" alt="background image">
        <?php
            include 'header.php'
        ?>
        
        <h2 class="logo_name">Hospitals are about healing</h2>
    </div>


    <div class="container">
        <h2>About Us</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem sed eros tristique eleifend. Aliquam erat volutpat. Proin et convallis tortor. Pellentesque in varius sem. Integer sed felis eu metus pulvinar luctus. Quisque vulputate tellus ac nunc dapibus, a fermentum lectus placerat. Nam ut dapibus ante. Nulla sodales pharetra arcu, a varius elit faucibus eu. In pharetra, nibh sed finibus fringilla, nunc leo dictum neque, vitae scelerisque tortor nunc a nibh.</p>
    </div>

    <div class="achievements">
        <div class="achievement">
            <h3>Achievement 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="achievement">
            <h3>Achievement 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing </p>
        </div>
        <div class="achievement">
            <h3>Achievement 3</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="achievement">
            <h3>Achievement 4</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
