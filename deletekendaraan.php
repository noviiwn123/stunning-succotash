<?php
require_once 'conn.php';

    if(isset($_GET['Del']))
    {
        $IDKendaraan = $_GET['Del'];
        $query = "update kendaraan set Deleted = 1 Where IDKendaraan ='".$IDKendaraan."'";
        $result= mysqli_query($conn,$query);
        if($result)
        {
            header("location:kendaraan.php");
        }    
        else
        {
            echo 'Please Check Your Query';
        }
    }   
    else
    {
        header("location:kendaraan.php");
    }
?>