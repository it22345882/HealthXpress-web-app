<?php 
    include 'connect.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql = "delete from `feedbacks` where id=$id";

        $delete = mysqli_query($conn, $sql);

        if($delete){
            header('location:feedbacks.php');
        }
    }


?>