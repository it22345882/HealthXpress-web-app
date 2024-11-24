<?php



session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login.php');
   
}


$user= 0;
$success = 0;
    

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        include 'connect.php';


        $title = $_POST['title'];
        $problem = $_POST['problem'];
        
        $answer = $_POST['answer'];
        
        
        
        
        $sql = "INSERT INTO `feedbacks`(`title`,`problem`, `answer`) VALUES ('$title', '$problem', '$answer')";

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
  <title>Feedbacks</title>
  <link rel="stylesheet" href="styles/styles_contactUs.css">
</head>
<body>

  <div class="logo">
    <img class="logo_background" src="images/feedbacks.jpg" alt="background image">
    <?php
            include 'header.php'
        ?>
    
    <h1 class="logo_name">HealthXpress</h1>
    <?php
    if($success){
         header('location:feedbacks.php');
    }
    ?>
</div>



  <div class="container">
    <h2>Feedback</h2>
    <form method="post">
      <div class="form-group">
        <label for="name">What is it about?</label>
        <input type="text" id="title" name="title" required>
      </div>
      <div class="form-group">
        <label for="mobile">Describe the problem</label>
        <textarea  id="problem" name="problem" required></textarea>
      </div>

      <div class="form-group">
        <label for="message">Can you suggest an answer?</label>
        <textarea id="message" name="answer" required></textarea>
      </div>
      <button name="submit" type="submit" class="submit-button">Submit</button>
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
</body>
</html>
