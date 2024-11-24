<?php

include('connect.php');

    session_start();

    if(!isset($_SESSION['admin_name'])){
        header('location:homepage.html');
    }
    

?>

<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
    <link rel="stylesheet" href="styles/styles_user.css">
    <style>

        

      </style>
</head>
<body>
    
<div class="logo">
    <img class="logo_background" src="images/users.jpg" alt="background image">
        <?php
        include 'header.php';
        ?>
        
        <h1 class="logo_name">HealthXpress</h1><br><br>
    </div>
    <div class="pagename">
        <h2>User account details</h2>
    </div>
    <table class="accounts">
  
    <tr>
      <th >Username</th>
      <th >Name</th>
      <th >E-mail</th>
      <th >Passwords</th>
      <th>User type</th>
      <th >Operations</th>
    </tr>
  


  <?php 

  $sql="select * from `accounts`";
$result = mysqli_query($conn, $sql);

if($result){
  while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    $username = $row['username'];
    $name = $row['name'];
    $email = $row['email'];
    $password = $row['password'];
    $usertype = $row['user_type'];

    echo '
    <tr>
      <td >'.$username.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$password.'</td>
      <td>'.$usertype.'</td>
    
    <td >
    <button class="btn-up"><a href = "update_users.php?updateid='.$id.'">Update</a></button>
    <button class = "btn-del"><a href = "delete_users.php?deleteid='.$id.'">Delete</a></button>
    </td>
    </tr>';
  }
}

  ?>
  
    
</table>

<div class = "but"><button class="addbtn"><a href="input_users.php">Add a user</a><button></div>

   

    
</body>
</html>
