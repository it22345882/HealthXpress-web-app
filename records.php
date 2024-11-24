<?php

include('connect.php');

    session_start();

    if(!isset($_SESSION['user_name'])){
        header('location:homepage.html');
    }
    

?>

<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
    <link rel="stylesheet" href="styles/styles_medical_records.css">
    <style>
      #records {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
       }
  
        #records td, table.records th {
            border: 1px solid #ddd;
            padding: 8px;
          }
  

  
        #records tr:hover {background-color: #ddd;}
  
        #records th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
          }

        .btn-up , .btn-del{
            padding:5px;
            margin-right:5px;
            margin-left:5px;
            border:none;
        }

        .btn-up a, .btn-del a{
            text-decoration:none;
            color:white;
        }

        .btn-up{
            background-color:#3366ff;
        }

        .btn-del{
            background-color:red;
        }

      </style>
</head>
<body>
    
<div class="logo">
    <img class="logo_background" src="images/records.jpg" alt="background image">
        <?php
        include 'header.php';
        ?>
        
        <h1 class="logo_name">HealthXpress</h1><br><br>
    </div>
    <div class="pagename">
        <h2>Daily Patient Records</h2>
    </div>
    <table id="records">
  
    <tr>
      <th >Date</th>
      <th >Medication</th>
      <th >Meals</th>
      <th >Exercise hours</th>
      <th >Oparations</th>
    </tr>
  


  <?php 

  $sql="select * from `patient_medical_records`";
$result = mysqli_query($conn, $sql);

if($result){
  while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    $date = $row['Date'];
    $medication = $row['Medication'];
    $meals = $row['Meals'];
    $exercise = $row['Exercise_hours'];

    echo '
    <tr>
      <td >'.$date.'</th>
      <td>'.$medication.'</td>
      <td>'.$meals.'</td>
      <td>'.$exercise.'</td>
    
    <td >
    <button class="btn-up"><a href = "update_records.php?updateid='.$id.'">Update</a></button>
    <button class = "btn-del"><a href = "delete_records.php?deleteid='.$id.'">Delete</a></button>
    </td>
    </tr>';
  }
}

  ?>
  
    
</table>

<div class = "but"><button class="addbtn"><a href="input_records.php">Add record</a><button></div>

   

    
</body>
</html>
