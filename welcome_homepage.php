<?php



session_start();

if(!isset($_SESSION['admin_name']) && !isset($_SESSION['user_name'])){
   header('location:login.php');
   
}

?>


<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="styles/styles_homepage.css">
	<script src="js/JavaScript.js"></script>
	
	</head>
<body onload="start_Timer()">
	<div class="containerMain">
		<img id="back_img" class="backgroundImage" src="images/20230103103336_7663.jpg" styles="width:100%">
		<h1 class="healthlogo">HealthXpress</h1>
		<?php
		
		if(isset($_SESSION['admin_name'])){
			include 'header.php';
		echo '<div class="container">

		<div class="content">
			<h1>welcome <span>'. $_SESSION['admin_name'].'</span></h1>
			<h3>hi, <span>admin</span></h3>
		    <p>This is an admin page</p>
		   
		</div>
	 
	 </div>';
		}
		if(isset($_SESSION['user_name'])){
			include 'header.php';
			echo '<div class="container">

		<div class="content">
			<h1>welcome <span>'. $_SESSION['user_name'].'</span></h1>
			<h3>hi, <span>user</span></h3>
		    <p>This is an user page</p>
		   
		</div>
	 
	 </div>';
		}

		?>
		
        
        

		<div class="navigate">
			<button class="navigateButtons" type="button" onclick="display_Previous_Image()"><</button>
			<button class="navigateButtons" type="button" onclick="display_Next_Image()">></button>
		</div>

	</div>



	<h2 class="events">Events</h2>

	<div class="row">
		<div class="column">
			<img src="images/events1.jpg" style="width:100%">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit,
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
				nisi ut aliquip ex ea commodo consequat.
			</p>

		</div>
		<div class="column">
			<img src="images/events2.jpg" style="width:100%">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit,
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
				nisi ut aliquip ex ea commodo consequat.
			</p>
		</div>
		<div class="column">
			<img src="images/events3.jpg" style="width:100%">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit,
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
				nisi ut aliquip ex ea commodo consequat.
			</p>
		</div>
	</div>
    
	<div class="homeabout">
		
		<div class="details">
			<h2>
				Science and integrity matter to us
			</h2>
			<p>
				Welcome to HealthCareX, your science-based healthcare system. We are dedicated to delivering exceptional care backed by the latest scientific advancements. Our team of knowledgeable healthcare professionals utilizes evidence-based practices to provide personalized services that align with the principles of scientific research. With a strong emphasis on the integration of science and healthcare, we are committed to guiding you towards optimal health based on the most up-to-date scientific knowledge. Trust HealthCareX to provide you with reliable and effective healthcare solutions rooted in scientific excellence.
			</p>
		</div>
	</div>
	
	<h2>Popular Articles</h2>


	<ul class="articles_row">
		<li class="articles_column">
			<img src="images/article1.jpg">
			<div class="overlay"><span>Article Title</span></div>

		</li>
		<li class="articles_column">
			<img src="images/article2.jpg">
			<div class="overlay"><span>Article Title</span></div>
		</li>
		<li class="articles_column">
			<img src="images/article3.jpg">
			<div class="overlay"><span>Article Title</span></div>
		</li>
		<li class="articles_column">
			<img src="images/article4.jpg">
			<div class="overlay"><span>Article Title</span></div>
		</li>
		<li class="articles_column">
			<img src="images/article5.jpg">
			<div class="overlay"><span>Article Title</span></div>

		</li>
		<li class="articles_column">
			<img src="images/article6.jpg">
			<div class="overlay"><span>Article Title</span></div>
		</li>
		<li class="articles_column">
			<img src="images/article7.jpg">
			<div class="overlay"><span>Article Title</span></div>
		</li>
		<li class="articles_column">
			<img src="images/article8.jpg">
			<div class="overlay"><span>Article Title</span></div>
		</li>
	</ul>

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