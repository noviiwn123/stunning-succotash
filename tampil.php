<?php
require_once 'conn.php';

    if(isset($_GET['tampil']))
    {
        $IDKendaraan = $_GET['tampil'];
        $query = "update kendaraan set Deleted = 0 Where IDKendaraan ='".$IDKendaraan."'";
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



