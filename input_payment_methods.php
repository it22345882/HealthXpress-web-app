<?php



session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login.php');
   
}


$user= 0;
$success = 0;
    

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        include 'connect.php';


        $cardnumber = $_POST['cardNumber'];
        $date = date('Y-m-d', strtotime($_POST['expDate']));
        
        $cvv = $_POST['cvv'];
        
        
        
        
        $sql = "INSERT INTO `payment_methods`(`card_number`,`exp_date`, `cvv`) VALUES ('$cardnumber', '$date', '$cvv')";

        $result = mysqli_query($conn, $sql);

        if($result){
            header('location:payment_methods.php');
        }
        else{
            die("error".mysqli_error($conn));
        }

}
    
?>

<!DOCTYPE html>
<html>
<head>
  <title>Payment details</title>
  	<link rel="stylesheet" href="styles/styles_payment.css">
  
  

 
</head>
<body>
    <div class="logo">
        <img class="logo_background" src="images/payment_background.jpg" alt="background image">
        <?php
        include 'header.php';
        ?>
            <h1 class="logo_name">HealthXpress</h1>
    </div>
    


    <div class="pagename">
        <h2>Payment</h2>
    </div>


    <div class="container">

        <form class="card-info-form" method="post">
            <h2>Card Information</h2>




            <div class="form-group">
                <label for="cardNumber">Card Number</label>
                <input type="text" id="cardNumber" name="cardNumber" required>
            </div>
            <div class="form-group">
                <label for="expDate">Card Expiry Date</label>
                <input type="date" id="expDate" name="expDate" required>
            </div>
            <div class="form-group">
                <label for="cvv">Card CVV</label>
                <input type="text" id="cvv" name="cvv" required>
            </div>
            <label class="encryption-label">Our payments are protected by industry best practice encryption technology.</label>

            <button type="submit" class="pay-button">Save</button>
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
  