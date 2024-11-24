
<?php

$id = $_GET['updateid'];

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login.php');
   
}


$user= 0;
$success = 0;


    

        include 'connect.php';

        if(isset($_POST['submit']))
        {
            
            
            $date = date('Y-m-d', strtotime($_POST['date']));
            $medication = $_POST['medication'];
            $meals = $_POST['meals'];
            $exercise_hours = $_POST['exercise'];
            
            
            $sql = "UPDATE `patient_medical_records` SET id = $id, `Date` = '$date', `Meals` = '$meals', Medication = '$medication', Exercise_hours = '$exercise_hours' where id = $id";

            $result = mysqli_query($conn, $sql);

            if($result){
                header('location:records.php');
                
            }
            else{
                die("error".mysqli_error($conn));
            }

}
    
?>

<!DOCTYPE html>
<html>
<head>
  <title>Records details</title>
  	<link rel="stylesheet" href="styles/styles_payment.css">
  
  

 
</head>
<body>
    <div class="logo">
        <img class="logo_background" src="images/records.jpg" alt="background image">
        <?php
        include 'header.php';
        ?>
            <h1 class="logo_name">HealthXpress</h1>
    </div>
    


    <div class="pagename">
        <h2>Patient records</h2>
    </div>


    <div class="container">
    <h2>Update the records</h2>
    <form method="post" action="input_records.php" >

      <div class="form-group">
        <label for="">Date</label>
        <input type="date" id="date" name="date" required>
      </div>
      <div class="form-group">
        <label for="medication">Medication</label>
        <input type="text" id="Medication" name="medication" required>
      </div>
      <div class="form-group">
        <label for="Meals">Meals</label>
        <input type="text" id="Meals" name="meals" required>
      </div>
      
      <div class="form-group">
        <label for="exercise">Exercise hours</label>
        <input type="text" id="exercise" name="exercise" required>
      </div>
      
      <div class="holder">
      <button type="submit" class="submit-button" id="submitButton">Submit</button>
  </div>
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
  