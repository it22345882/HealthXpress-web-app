<?php



session_start();

if(!isset($_SESSION['admin_name']) ){
   header('location:login.php');
   
}


$user= 0;
$success = 0;
    

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        include 'connect.php';

        $date = date('Y-m-d', strtotime($_POST['date']));
        
        $patientid = $_POST['patientid'];
        $doctorid = $_POST['doctorid'];
        
        
        
        
        $sql = "INSERT INTO `appointments`(`patient_id`,`doctor_id`, `date`) VALUES ('$patientid', '$doctorid', '$date')";

        $result = mysqli_query($conn, $sql);

        if($result){
            $success = 1;
        }
        else{
            die("error".mysqli_error($conn));
        }

}
    
?>

<!DOCTYPE html>
<html>
<head>
  <title>Appointment records</title>
  	<link rel="stylesheet" href="styles/styles_medical_records.css">
  <style>
  
  </style>
  
</head>

<body>
    <div class="logo">
        <img class="logo_background" src="images/appointmentback.jpg" alt="background image">
        <?php
        include 'header.php';
        ?>
        
        <h1 class="logo_name">HealthXpress</h1>
    </div>
    <?php
    if($success){
         header('location:appointments.php');
    }
    ?>

  <div class="pagename"> 
    <h2>Appointment details</h2>
  </div>
  
  <!---Personal details form--->
  
  <div class="container">
    <h2>Appointments</h2>
    <form method="post" >

      <div class="form-group">
        <label for="">Patient ID</label>
        <input type="text" id="patientid" name="patientid" required>
      </div>
      <div class="form-group">
        <label for="doctorID">Doctor ID</label>
        <input type="text" id="doctorID" name="doctorid" required>
      </div>
      <div class="form-group">
        <label for="Meals">Date</label>
        <input type="date" id="date" name="date" required>
      </div>
      
      
      
      <div class="holder">
      <button type="submit" class="submit-button" id="submitButton">Submit</button>
  </div>
      </div>
      
  </form>
  </div>
  
  
	
	<!---footer--->
	
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
