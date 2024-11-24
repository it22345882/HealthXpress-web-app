<?php 

session_start();
    include 'connect.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql = "delete from `accounts` where id=$id";

        $delete = mysqli_query($conn, $sql);

        if($delete){
            $id = $_SESSION['id'];
            $sql = "select * from accounts where id = '$id'";
            $result = mysqli_query($conn, $sql);

            if($result){
                $rows = mysqli_num_rows($result);
                if($rows == 0){
                    
                    session_destroy();
                    header('location:login.php');
                }
                else{
                    header('location:users.php');
                }
            }
        }
    }


?>