<?php



session_start();

if(!isset($_SESSION['admin_name']) && !isset($_SESSION['user_name'])){
   header('location:login.php');
   
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Patient records Page</title>
  <link rel="stylesheet" href="styles/styles_consult.css">
  
</head>
<body>
    <div class="logo">
        <img class="logo_background" src="images/consult_background.jpg" alt="background image">
        <?php
            include 'header.php'
        ?>
        <h1 class="logo_name">HealthXpress</h1>
    </div>

    <div class="pagename">
        <h2>Patient records page</h2>
    </div>


    <div class="consult_section">
        <hr>
        <h2>Skip the travel! Consult a Doctor online</h2>
        <div class="consult_cont">


            <img class="consult_back2" src="images/consultback2.jpg" alt="Patient records Image" >

            <div class="details">
                <p class="details">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel porttitor arcu, at mattis libero. Etiam ac ullamcorper lacus. Integer vulputate orci risus, sed tristique mauris maximus sed. Donec sit amet aliquet sapien. Mauris ut interdum lectus. Quisque est odio, viverra id ornare a, rhoncus vel elit. Cras dignissim volutpat augue vel euismod. In gravida non orci eget porttitor.

                    Mauris at mauris quis eros bibendum rhoncus vel bibendum elit. Aenean vel mauris et arcu hendrerit venenatis eget ut justo. In hac habitasse platea dictumst. Mauris ante lorem, gravida eget hendrerit vitae, placerat in lectus. Aenean cursus nec enim in feugiat. Mauris sem nulla, pharetra in rhoncus sed, mollis ut sapien. Proin ornare tincidunt ex, eu ornare massa pellentesque eu. Maecenas ultrices enim ac mi gravida eleifend. Morbi nec ligula augue.

                    Cras ultricies, quam quis mattis tempor, neque dui porta nibh, ac luctus sem turpis eu felis. Vivamus eu tempus tortor. Nam risus dolor, malesuada non leo id, efficitur interdum neque. Morbi luctus turpis vitae urna convallis vulputate. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque sit amet blandit libero. Nullam tincidunt ipsum sem, eu sodales dolor euismod sed. Etiam eleifend felis mi.
                </p>

                
            
        

        <hr>

        
            <h3>Common Health Problems</h3>
            <div class="image-cont">
                <div class="img_cont">
                    <img src="images/healthprob1.jpg" alt="Health Problem 1">
                    <p class="image-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="img_cont">
                    <img src="images/healthprob2.jpg" alt="Health Problem 2">
                    <p class="image-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="img_cont">
                    <img src="images/healthprob3.jpg" alt="Health Problem 3">
                    <p class="image-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="img_cont">
                    <img src="images/healthprob4.jpg" alt="Health Problem 4">
                    <p class="image-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="img_cont">
                    <img src="images/healthprob5.jpg" alt="Health Problem 5">
                    <p class="image-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="img_cont">
                    <img src="images/healthprob7.jpg" alt="Health Problem 5">
                    <p class="image-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="img_cont">
                    <img src="images/healthprob6.jpg" alt="Health Problem 5">
                    <p class="image-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                
            </div>
        
    </div>
    <hr>



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