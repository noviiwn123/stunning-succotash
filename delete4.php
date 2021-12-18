<?php
require_once 'conn.php';

    if(isset($_GET['Del']))
    {
        $IDParkir = $_GET['Del'];
        $query = "delete from parkir";
        $result= mysqli_query($conn,$query);
        if($result)
        {
            header("location:parkir.php");
        }    
        else
        {
            echo 'Please Check Your Query';
        }
    }   
    else
    {
        header("location:parkir.php");
    }
?>